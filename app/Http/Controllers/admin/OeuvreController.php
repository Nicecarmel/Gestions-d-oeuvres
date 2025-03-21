<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Oeuvre;
use Illuminate\Http\Request;

class OeuvreController extends Controller
{
    public function liste()
    {

        $oeuvres =Oeuvre::all();

        return view("admin.oeuvres.list", [
            'oeuvres' => $oeuvres
        ]);
    }
}
