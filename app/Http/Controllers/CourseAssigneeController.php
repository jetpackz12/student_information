<?php

namespace App\Http\Controllers;

use App\Models\CourseAssignee;
use Illuminate\Http\Request;

class CourseAssigneeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('course_assignee.course_assignee');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseAssignee $courseAssignee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseAssignee $courseAssignee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseAssignee $courseAssignee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseAssignee $courseAssignee)
    {
        //
    }
}
