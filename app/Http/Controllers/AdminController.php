<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


session_start();

class AdminController extends Controller
{
    public function login_page() {
        return view('admin_login');
    }

    public function admin_index() {
        return view('admin.admin_home');
    }

    public function admin_home(Request $request) {
        $email = $request -> admin_email;
        $password = $request -> admin_password;

        $result_login = DB::table('tbl_admin') -> where('admin_email', $email) -> where('admin_password', $password) -> first();

        if($result_login) {
            Session::put('ad_email', $request -> admin_email);
            return Redirect::to('admin');
        } else {
            Session::put('message', 'Bạn nhập sai username hoặc password');
            return Redirect::to('admin/login');
        }
    }

    public function logout_page() {
        Session::put('ad_email', null);
        return Redirect::to('admin');
    }
}
