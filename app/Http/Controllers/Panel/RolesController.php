<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        $title = 'Roller';
        $roles = Role::with('permissions')->paginate(10);
        $counter = 1;
        return view('panel/roles/roles', ['title' => $title, 'roles' => $roles, 'counter' => $counter]);
    }

    public function create_get()
    {
        $permissions = Permission::orderBy('name','asc')->get();
        $title = 'Roller';
        return view('panel/roles/rolesManage',['permissions' => $permissions, 'title' => $title]);
    }

    public function create_post(Request $request)
    {
        $redirect = redirect()->route('panel.roles.roles');
        $data = $request->except('_token');

        try {

            $role = new Role();
            $role->name = $data['name'];
            $role->save();
            $role->syncPermissions($data['permissions']);
            $redirect->with('success', __('messages.message_create_success'));

        } catch (Exception $e) {
            $redirect->with('error', $e->getMessage());
        }

        return $redirect;
    }

    public function update_get($id)
    {
        $title = 'Roller';
        $permissions = Permission::all();

        try {
            $role = Role::find($id);
            if ($role) {
                return view('panel/roles/rolesManage', ['role' => $role, 'title' => $title, 'permissions' => $permissions]);
            } else {
                return redirect()->route('roles.roles')->with('error', __('messages.not_found_resource'));
            }
        } catch (Exception $e) {
            return redirect()->route('panel.roles.roles')->with('error', $e->getMessage());
        }
    }

    public function update_post(Request $request, $id)
    {
        $redirect = redirect()->route('panel.roles.roles');
        $data = $request->except('_token');
        try {

            $role = Role::where('id', $id)->firstOrFail();
            $role->update();
            $role->syncPermissions($data['permissions']);
            $redirect->with('success', __('messages.message_create_success'));

        } catch (Exception $e) {
            $redirect->with('error', $e->getMessage());
        }

        return $redirect;
    }

    public function delete($id) {
        try {
            $roles = Role::find($id);
            $roles->permissions()->detach();
            $roles->delete();
            return $roles;
        } catch (Exception $e) {
            return response(['message' => $e->getMessage()], 404);
        }
    }
}
