<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
// create public function for page
    public function index(){
        return "questa e la pagina index";
    }
     public function profile(){
        return "questa e la pagina profile";
    }
}
