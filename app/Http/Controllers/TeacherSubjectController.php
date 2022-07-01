<?php

namespace App\Http\Controllers;

use App\Models\TeacherSubject;
use App\Http\Requests\StoreTeacherSubjectRequest;
use App\Http\Requests\UpdateTeacherSubjectRequest;

class TeacherSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = request()->user_id;

        $subjects = TeacherSubject::where('user_id', $user_id)->get();

        if (!$subjects) {
            return response()->json([
                'message' => 'Không tìm thấy giáo viên!'
            ], 422);
        }

        return response()->json([
            'data' => $subjects
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeacherSubjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $list_subjects = request()->data;

        // delete all records with user_id
        TeacherSubject::where('user_id', request()->user_id)->delete();

        foreach ($list_subjects as $subject) {
            TeacherSubject::create([
                'user_id' => request()->user_id,
                'subject_id' => $subject
            ]);
        }

        return response()->json(['message' => 'Đăng ký môn học giảng dạy thành công!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherSubject  $teacherSubject
     * @return \Illuminate\Http\Response
     */
    public function show($teacherSubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherSubjectRequest  $request
     * @param  \App\Models\TeacherSubject  $teacherSubject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherSubjectRequest $request, TeacherSubject $teacherSubject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherSubject  $teacherSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherSubject $teacherSubject)
    {
        //
    }
}
