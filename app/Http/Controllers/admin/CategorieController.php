<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function liste(){

        return view('admin.categories.list');

    }

    public function details(){

        return view("admin.categories.show");

    }
}
