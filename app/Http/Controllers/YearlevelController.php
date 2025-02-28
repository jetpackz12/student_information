<?php

namespace App\Http\Controllers;

use App\Models\Yearlevel;
use Illuminate\Http\Request;

class YearlevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $render_data = [
            'yearlevel' => Yearlevel::all()
        ];

        return view('yearlevel.yearlevel', $render_data);
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
        $data = new Yearlevel;
        $data->year_level = $request->yearLevel;
        $data->save();

        $renderMessage = [
            'response' => 1,
            'message' => 'Adding year level success',
            'path' => '/yearlevel'
        ];

        return response()->json($renderMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Yearlevel $yearlevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $yearlevel = Yearlevel::find($request->id);

        return response()->json($yearlevel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = Yearlevel::find($request->id);
        $data->year_level = $request->yearLevel;
        $data->save();

        $renderMessage = [
            'response' => 1,
            'message' => 'Updating year level success',
            'path' => '/yearlevel'
        ];

        return response()->json($renderMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $data = Yearlevel::find($request->id);
        $data->status = $request->status == 1 ? 0 : 1;
        $data->save();

        $renderMessage = [
            'response' => 1,
            'message' => 'Updating year level status success',
            'path' => '/yearlevel'
        ];

        return response()->json($renderMessage);
    }
}
