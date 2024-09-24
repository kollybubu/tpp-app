<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    private UserRepositoryInterface $UserRepository;
    public function __construct(UserRepositoryInterface $UserRepository)
    {
        $this->middleware('auth');
        $this->UserRepository = $UserRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $User = $this->UserRepository->index();
      

        return view('User.index', compact('User'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('User.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $data = $request->validated();
        // dd(request()->hasFile('profile_image'));
        // $data = $request->validate([
        //     'name'=> 'required',
        //     'email'=>'required|unique:users,email',
        //     'password'=>'required|confirmed',
        //     'roles' => 'required',
        //     'roles.*' => 'exists:roles,id' ,
        //     'profile_image' => 'required',
        // ]);

        if ($request->hasFile('profile_image')) {
         
            $imageName = time() . '.' . $request->profile_image->extension();

            $request->profile_image->move(public_path('profile_image'), $imageName);

            // $data = array_merge($data, ['profile_image' => $imageName]);
        }

        $user=User::create([
            'name' => $data['name'],
            "email" =>  $data['email'],
            "password" =>Hash::make($data['password']),
            'profile_image' => $imageName
        ]);
        
        $user->roles()->sync($data['roles']);

        return redirect()->route('User.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $User = $this->UserRepository->show($id);

        $roles=Role::all();
        
        return view('User.edit', compact('User', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $User = $this->UserRepository->show($id);
        $User   ->update([
            'name' => $request->name
 
        
        ]);

        $User->roles()->sync($request['roles']);
        return redirect()->route('User.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $User = User::where('id', $id)->first();

        $User->delete();

        return redirect()->route('User.index');
    }
}
