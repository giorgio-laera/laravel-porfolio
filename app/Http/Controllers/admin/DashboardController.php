<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
// create public function for page
    public function index(){
        $user=Auth::user();
        return $user->id;
    }
     public function profile(){
        return "questa e la pagina profile";
    }
}
