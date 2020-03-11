<?php

namespace App\Http\Controllers\FrontEndCon;

use App\Models\User\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\BackEndCon\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('User.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $student = Student::create($data);
        if($student){
            $registration_code = Carbon::now()->format('YmdHis') . $student->id;
            $updated_student = Student::find($student->id)->update(['student_code' => $registration_code]);
            if ($updated_student){
                session(['registration_code' => $registration_code]);
                return redirect(route('client-congrats'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function congrats()
    {
        $code = session('registration_code');
        if (!isset($code)){
            abort(404);
        }
        return view('User.client.congrats', compact('code'));
    }
}
