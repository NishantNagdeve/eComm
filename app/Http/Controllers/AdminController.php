<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    function admin_login(Request $req){
        $admin =  Admin::where(['email'=>$req->email])->first();
        if(!$admin || !Hash::check($req->password, $admin->password)){
            return redirect('/admin-login');
        }else{
            $req->session()->put('admin', $admin);
            return redirect('/product-add');
        }
    }
}
