<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardRedirectController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            //
            if (Auth::user()->user_type == 1) {

                return redirect()->route('admin.dashboard');
            } else if (Auth::user()->user_type == 0) {
                //
                return 'user';
            }
        } else {
            return "not loggedin";
        }
    }
}