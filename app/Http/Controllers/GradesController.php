<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Lecture;
use App\Student;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::all();
        $students = Student::all();
        $lectures = Lecture::all();

        return view ('grades.index', compact(['grades', 'students', 'lectures']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lectures = Lecture::all();
        $students = Student::all();

        return view ('grades.create', compact(['lectures', 'students']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grade = new Grade();

        $grade->lectures_id = $request->input('lecture');
        $grade->student_id = $request->input('student');
        $grade->user_id = $request->input('user');
        $grade->grade = $request->input('grade');

        $grade->save();

        return redirect()->route('grades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $student = Student::findOrFail($id);
        $lectures = Lecture::all();

        return view ('grades.show', compact(['student', 'lectures']));
    }

    public function select(){
        $students = Student::all();
        return view('grades.select', compact('students'));
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
}
