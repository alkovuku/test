<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Book;

class StaffController extends Controller
{
    public function staff_add()
    {
        return view('staff.staff_add');
    }
}
