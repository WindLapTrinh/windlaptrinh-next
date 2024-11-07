<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    //

    function add(){
        $permissions = Permission::all()->groupBy(function($permissions){
            return explode(".", $permissions->slug)[0];
        });
        return view("admin.permission.add", compact("permissions"));
    }

    function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            // 'description' => "nullable"
        ]);

        //Insert db
        Permission::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
        ]);

        return redirect()-> route('permission.add')-> with('status', 'Đã thêm quyền thành công');
    }

    function edit($id){
        $permissions = Permission::all() -> groupBy(function($permission){
            return explode(".", $permission->slug)[0];
        });
        $permission = Permission::find($id);
        return view("admin.permission.edit", compact("permissions","permission"));
    }
    function update(Request $request, $id){
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
        ]);
        Permission::where('id', $id)-> update([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
        ]);
        return redirect()-> route('permission.add')->with("status", "Đã chỉnh sửa thành công");
    }
    function delete($id){
        Permission::where('id', $id)->delete();
        return redirect() ->route('permission.add')->with('status', 'Đã xóa quyền thành công');

    }

}
