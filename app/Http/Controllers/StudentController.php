<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Yearlevel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $render_data = [
            'course' => Course::where('status', 1)->get(),
            'yearlevel' => Yearlevel::where('status', 1)->get(),
            'course_all' => Course::get(),
            'yearlevel_all' => Yearlevel::get(),
            'student' => Student::join('yearlevels', 'yearlevels.id', '=', 'students.year_level_id')->join('courses', 'courses.id', '=', 'students.course_id')->select('*', 'students.id AS student_id')->get(),
        ];

        return view('student.student', $render_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Student();
        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->age = $request->age;
        $data->course_id = $request->course;
        $data->year_level_id = $request->year_level;
        $data->save();

        $renderMessage = [
            'response' => 1,
            'message' => 'Adding student success',
            'path' => '/student'
        ];

        return response()->json($renderMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $render_data = [
            'course' => Course::where('status', 1)->get(),
            'yearlevel' => Yearlevel::where('status', 1)->get(),
            'course_all' => Course::get(),
            'yearlevel_all' => Yearlevel::get(),
        ];

        if ($request->year_level_id == 'All' && $request->course_id == 'All') {

            return redirect('/');

        } elseif ($request->year_level_id != 'All' && $request->course_id == 'All') {

            $render_data['student'] = Student::join('yearlevels', 'yearlevels.id', '=', 'students.year_level_id')->join('courses', 'courses.id', '=', 'students.course_id')->select('*', 'students.id AS student_id')->where('students.year_level_id', $request->year_level_id)->get();

        } elseif ($request->year_level_id == 'All' && $request->course_id != 'All') {

            $render_data['student'] = Student::join('yearlevels', 'yearlevels.id', '=', 'students.year_level_id')->join('courses', 'courses.id', '=', 'students.course_id')->select('*', 'students.id AS student_id')->where('students.course_id', $request->course_id)->get();

        } else {

            $render_data['student'] = Student::join('yearlevels', 'yearlevels.id', '=', 'students.year_level_id')->join('courses', 'courses.id', '=', 'students.course_id')->select('*', 'students.id AS student_id')->where('students.year_level_id', $request->year_level_id)->where('students.course_id', $request->course_id)->get();

        }

        return view('student.student', $render_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $data = Student::find($request->id);

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = Student::find($request->id);
        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->last_name = $request->last_name;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->age = $request->age;
        $data->course_id = $request->course;
        $data->year_level_id = $request->year_level;
        $data->save();

        $renderMessage = [
            'response' => 1,
            'message' => 'Updating student success',
            'path' => '/student'
        ];

        return response()->json($renderMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $data = Student::find($request->id);
        $data->delete();

        $renderMessage = [
            'response' => 1,
            'message' => 'Deleting student success',
            'path' => '/student'
        ];

        return response()->json($renderMessage);
    }
}
