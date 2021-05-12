<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class ViewController extends Controller
{
    public function staff_add()
    {
        return view('staff.staff_add');
    }
}
