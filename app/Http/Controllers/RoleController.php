<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    //
    function getList(){
        
        // if (! Gate::allows('role.show')) {
        //     abort(403);
        // } 

        $roles = Role::all();
        return view("admin.role.list", compact("roles"));
    }

    function add(){
        $permissions = Permission::all()->groupBy(function($permissions){
            return explode(".", $permissions->slug)[0];
        });

        return view("admin.role.add", compact("permissions"));
    }
    function store(Request $request){
        // return $request->all();

        $request->validate([
            'name' => 'required|unique:roles,name',
            'description' => 'required',
        ]);

        $role = Role::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        $role->permissions()->attach($request->input('permission_id'));
        return redirect()->route('role.list')->with('status', 'Đã thêm vai trò thành công');
    }

    function edit(Role $role){
        $permissions = Permission::all()->groupBy(function($permission){
            return explode('.', $permission->slug)[0];
        });
        return view("admin.role.edit", compact('role', 'permissions'));
    }

    function update(Request $request, Role $role){
        $request->validate([
            'name' => 'required|unique:roles,name,'.$role->id,
            'permission_id' => 'nullable|array',
            'permission_id.*' => 'exists:permissions,id',
        ]);
        $role->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        $role->permissions()->sync($request->input('permission_id', []));

        return redirect()->route('role.list')->with('status', 'Đã cập nhập vai trò thành công');
    }

    function delete(Role $role){
        $role->delete();
        return redirect() -> route('role.list')->with('status', 'Vai trò đã xóa thành công');
    }
}
