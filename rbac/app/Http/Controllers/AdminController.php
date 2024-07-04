<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;



//class AdminController extends Controller
//{
//    public function index()
//    {
//        return view('admin.dashboard');
//    }
//
//    public function manageUsers(){
//        $users = User::with('roles.permissions')->select('id','name','email')->get();
//
//        return view('admin.manageUsers', compact('users'));
//    }
//}

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function manageUsers(){
        $users = User::with('roles.permissions')->select('id','name','email')->get();
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.manageUsers', compact('users', 'roles', 'permissions'));
    }

    public function addRole(Request $request, User $user)
    {
        $role = Role::find($request->input('role_id'));
        if ($role && !$user->roles->contains($role->id)) {
            $user->roles()->attach($role->id);
        }
        return redirect()->route('usertool');
    }

    public function removeRole(Request $request, User $user)
    {
        $role = Role::find($request->input('role_id'));
        if ($role && $user->roles->contains($role->id)) {
            $user->roles()->detach($role->id);
        }
        return redirect()->route('usertool');
    }

    public function addPermission(Request $request, User $user)
    {
        $permission = Permission::find($request->input('permission_id'));
        foreach ($user->roles as $role) {
            if ($permission && !$role->permissions->contains($permission->id)) {
                $role->permissions()->attach($permission->id);
            }
        }
        return redirect()->route('usertool');
    }

    public function removePermission(Request $request, User $user)
    {
        $permission = Permission::find($request->input('permission_id'));
        foreach ($user->roles as $role) {
            if ($permission && $role->permissions->contains($permission->id)) {
                $role->permissions()->detach($permission->id);
            }
        }
        return redirect()->route('usertool');
    }



    public function registerviaAdmin(Request $request)
    {

        // $email = 'user@domain.com';

        if($request->generate_email || ($request->email && $request->generate_email)){
            $email = fake()->unique()->safeEmail();
        } else {
            $email = $request->email;
        }

        $request->validate([
            'firstname'=> 'required|string|max:255',
            'lastname'=> 'required|string|max:255',
            'name' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $email,
            'password' => Hash::make($request->password),
        ]);

        UserInfo::create([
            'user_firstname' => $request->firstname,
            'user_lastname' => $request->lastname,
            'user_id' => $user->id
        ]);


        return redirect()->route('dashboard');
    }



    public function deleteUser($id)
    {

        $user = User::findOrFail($id);


        $user->delete();


        return redirect()->route('usertool')->with('success', 'User deleted successfully.');
    }
}


//public function removePermission(Request $request, User $user)
//{
//    $permission = Permission::find($request->input('permission_id'));
//    foreach ($user->roles as $role) {
//        if ($permission && $role->permissions->contains($permission->id)) {
//            $role->permissions()->detach($permission->id);
//        }
//    }
//    return redirect()->route('usertool');
//}
