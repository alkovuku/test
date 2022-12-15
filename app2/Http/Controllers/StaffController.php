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
    public function staff_edit($id)
    {
        return view('staff.staff_edit', ['staff' => Staff::findOrFail($id)]);
    }

    public function staff_edit_done(Request $request, $id)
    {
        $staff = Staff::find($id);
        $staff->fill($request->except('_token', '_method'))->save();
        return redirect('staff/staff_list');
    }

    /**
     * staff_delete
     */
    public function staff_delete($id)
    {
        return view('staff.staff_delete', ['staff' => Staff::findOrFail($id)]);
    }

    public function staff_delete_done($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();
        return redirect('staff/staff_list');
    }
}
