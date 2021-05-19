<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    /**
     * staff_add
     */
    public function staff_add()
    {
        return view('staff.staff_add');
    }

    public function staff_add_check(Request $request)
    {
        return view('staff.staff_add_check', $request);
    }

    public function staff_add_done(Request $request)
    {
        $staff = new Staff();
        $staff->fill($request->except('_token'))->save();
        return view('staff.staff_add_done', $request);
    }

    /**
     * staff_list
     */
    public function staff_list()
    {
        $records = ['records' => Staff::all()];
        return view('staff.staff_list', $records);
    }

    /**
     * staff_edit
     */
    public function staff_edit($code)
    {
        return view('staff_edit', ['staff'=>Staff::findOrFail($code)]);
    }
}
