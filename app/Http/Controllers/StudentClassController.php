<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use App\Http\Requests\StoreStudentClassRequest;
use App\Http\Requests\UpdateStudentClassRequest;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentClassRequest $request)
    {
        StudentClass::create($request->all());
        return response()->json(['message' => "Đăng ký học phần thành công!"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentClass  $studentClass
     * @return \Illuminate\Http\Response
     */
    public function show(StudentClass $studentClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentClassRequest  $request
     * @param  \App\Models\StudentClass  $studentClass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentClassRequest $request, StudentClass $studentClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentClass  $studentClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentClass $studentClass)
    {
        //
    }
}
