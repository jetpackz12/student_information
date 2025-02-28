<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $render_data = [
            'course' => Course::all()
        ];

        return view('course.course', $render_data);
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
        $data = new Course;
        $data->course = $request->course;
        $data->save();

        $renderMessage = [
            'response' => 1,
            'message' => 'Adding course success',
            'path' => '/course'
        ];

        return response()->json($renderMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $data = Course::find($request->id);

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = Course::find($request->id);
        $data->course = $request->course;
        $data->save();

        $renderMessage = [
            'response' => 1,
            'message' => 'Updating course success',
            'path' => '/course'
        ];

        return response()->json($renderMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $data = Course::find($request->id);
        $data->status = $request->status == 1 ? 0 : 1;
        $data->save();

        $renderMessage = [
            'response' => 1,
            'message' => 'Updating course status success',
            'path' => '/course'
        ];

        return response()->json($renderMessage);
    }
}
