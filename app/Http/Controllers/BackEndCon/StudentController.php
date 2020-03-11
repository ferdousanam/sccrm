<?php

namespace App\Http\Controllers\BackEndCon;

use App\DataTables\StudentsDataTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StudentsDataTable $user_types)
    {
        return $user_types->render('Admin.students.index-dt');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'priority_name' => 'required',
            'priority_status' => 'required',
        ]);
        $data = $request->all();
        $insert = Student::create($data);
        if ($insert) {
            session()->flash('success', 'User Type Created Successfully');
        } else {
            session()->flash('error', 'Something Went Wrong!');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('Admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'last_education' => 'required',
            'last_education_result' => 'required',
            'passing_year' => 'required',
            'interested_in' => 'required',
            'ielts_score' => 'required',
            'remarks' => 'required',
            'status' => 'required',
        ]);
        $data = $request->all();

        $student = Student::find($id);
        $update = $student->update($data);
        if ($update) {
            session()->flash('success', 'Student Updated Successfully');
        } else {
            session()->flash('error', 'Something Went Wrong!');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Student::find($id)->delete();
        if ($delete) {
            return response()->json(["success" => true]);
        } else {
            return response()->json(["success" => false]);
        }
    }
}
