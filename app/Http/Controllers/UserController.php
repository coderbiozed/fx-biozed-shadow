<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Flash;

class UserController extends Controller
{
    /**
     * Display a listing of the Seo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $admin_users = DB::table('users')->get();

        return view('users.index')
            ->with('admin_users', $admin_users);
    }

    public function destroy($id)
    {
        $users = DB::table('users')->Where('id',  $id);

        if (empty($users)) {
            Flash::error('User not found');

            return redirect(route('users'));
        }

        $users->delete();

        Flash::success('User deleted successfully.');

        return redirect(route('users'));
    }
}
