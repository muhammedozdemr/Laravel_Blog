<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function index()
    {
        $title = 'Kullanıcılar';
        $user_list = User::paginate(10);
        $counter = 1;
        return view('panel/users/users', ['title' => $title, 'user_list' => $user_list, 'counter' => $counter]);
    }

    public function create_get()
    {
        $roles = Role::all();
        $title = 'Kullanıcılar';
        return view('panel/users/usersManage', ['roles' => $roles, 'title' => $title]);
    }

    public function create_post(Request $request)
    {
        $redirect = redirect()->route('panel.users.users')->with('error', __('messages.email'));;
        $data = $request->except('_token');

        try {
            //Create a user
            $this->validate($request, ['email' => 'required|unique:users']);
            $permission = new User();
            $permission->name = $data['name'];
            $permission->email = $data['email'];
            $permission->password = Hash::make($data['password']);
            $permission->save();
            $permission->syncRoles($request->role);

            $redirect->with('success', __('messages.message_create_success'));

        } catch (Exception $e) {
            $redirect->with('error', $e->getMessage());
        }

        return $redirect;
    }


    public function update_get($id)
    {
        $title = 'Kullanıcılar';
        $roles = Role::all();
        //Listing to update user information
        try {
            $user = User::find($id);
            if ($user) {
                return view('panel/users/usersManage', ['user' => $user, 'title' => $title, 'roles' => $roles]);
            } else {
                return redirect()->route('panel.users.users')->with('error', __('messages.not_found_resource'));
            }
        } catch (Exception $e) {
            return redirect()->route('panel.users.users')->with('error', $e->getMessage());
        }
    }

    public function update_post(Request $request, $id)
    {
        $redirect = redirect()->route('panel.users.users');
        $data = $request->except('_token');
        try {
            $data = request()->only('name', 'email', 'role');

            if (request()->filled('password')) {
                $data['password'] = Hash::make(request('password'));
            }

            if ($id > 0) {
                $entry = User::where('id', $id)->firstOrFail();
                $entry->update($data);
            }
            $entry->syncRoles($request->role);


        } catch (Exception $e) {
            $redirect->with('error', $e->getMessage());
        }

        return $redirect;
    }

    public function delete($id)
    {
        try {
            return User::destroy($id);
        } catch (Exception $e) {
            return response(['message' => $e->getMessage()], 404);
        }
    }


}
