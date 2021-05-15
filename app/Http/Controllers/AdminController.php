<?php

namespace App\Http\Controllers;

use App\Models\Professors;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $professor = Professors::all();
        return view('admin')->with("professor", $professor);
    }
}
