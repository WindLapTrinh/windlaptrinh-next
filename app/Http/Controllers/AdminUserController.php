<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(['model_active' => 'user']);

            return $next($request);
        });
    }

    function list(Request $request)
    {
        $status = $request->input('status');

        $list_act = [
            'delete' => 'Xóa tạm thời'
        ];

        if ($status == "trash") {
            $list_act = [
                'restore' => 'Khôi phục',
                'forceDelete' => 'Xóa vĩnh viễn'
            ];
            $users = User::onlyTrashed()->paginate(10);
        } else {
            $keyword = "";
            if ($request->input('keyword')) {
                $keyword = $request->input('keyword');
            }
            $users = User::where("name", 'LIKE', "%{$keyword}%")->paginate(10);
        }

        $const_user_active = User::count();
        $const_user_trah = User::onlyTrashed()->count();

        $count = [$const_user_active, $const_user_trah];


        // dd($users->total());
        return view('admin.user.list', compact('users', 'count', 'request', 'list_act'));
    }

    function add(Request $request)
    {
        $roles = Role::all();
        return view("admin.user.add", compact('roles'));
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'role_id' => ['required'],
            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute có độ dài ít nhất :min ký tự',
                'max' => ':attribute có độ dài tối đa :mã ký tự',
                'confirmed' => 'Xác nhận mật khẩu không thành công',

            ],
            [
                'name' => 'Tên người dùng',
                'email' => 'Email',
                'password' => 'Mật khẩu'
            ]
        );

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        // Gán role cho user
        $user->roles()->sync($request->input('role_id'));

        return redirect("admin/user/list")->with('status', "Đã thêm thành viên thành công");
    }

    function delete($id)
    {
        if (Auth::id() != $id) {
            $user = User::find($id);
            $user->delete();

            return redirect('admin/user/list')->with('status', "Đã xóa thành viên thành công");
        } else {
            return redirect("admin/user/list")->whith('status', "Bạn không thể tự xóa mình ra khỏi hệ thống");
        }
    }

    function action(Request $request)
    {
        $list_check = $request->input('list_check');
        if ($list_check) {
            foreach ($list_check as $k => $id) {
                if (Auth::id() == $id) {
                    unset($list_check[$k]);
                } 
            }
        }
        if (!empty($list_check)) {
            $act = $request->input('act');
            if ($act == 'delete') {
                User::destroy($list_check);
                return redirect('admin/user/list')->with('status', 'Bạn đã xóa thành công');
            }

            if ($act == 'restore') {
                User::withTrashed()
                    ->whereIn('id', $list_check)
                    ->restore();
                return redirect('admin/user/list')->with('status', 'Bạn đã khôi phục thành công');
            }

            if ($act == "forceDelete") {
                User::withTrashed()
                    ->whereIn('id', $list_check)
                    ->forceDelete();
                return redirect('admin/user/list')->with('status', 'Bạn đã xóa vĩnh viễn thành viên thành công');
            }
            return redirect('admin/user/list')->with('status', 'Bạn không thể thao tác trên tài khoản của bạn !');
        } else {
            return redirect('admin/user/list')->with('status', 'Bạn cần chọn phần tử thực hiện !');
        }
    }

    function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.user.edit', compact('user', 'roles'));
    }

    function update(Request $request, User $user)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'unique:users,email,' . $user->id],
                // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]
        );

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // 'password' => Hash::make($request->input('password')),
        ]);

        // Cập nhật các vai trò cho người dùng
        $user->roles()->sync($request->input('role_id'));

        return redirect("admin/user/list")->with('status', 'Đã cập nhật thông tin thành công');
    }
}
