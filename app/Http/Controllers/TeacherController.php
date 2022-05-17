<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = request()->limit ?? 100;
        $specialty_id = request()->specialty_id;

        if ($specialty_id) {
            $teachers = Teacher::with('user')->where('specialty_id', $specialty_id)->get();
            return UserResource::collection($teachers);
        }

        $teachers = User::where('role_id', 'r2')->with('teacher.specialty')->paginate($limit);
        return UserResource::collection($teachers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        DB::beginTransaction();

        try {
            $all = $request->all();
            $all['role_id'] = 'r2';
            // hash password
            $all['password'] = bcrypt($all['password']);
            $user = User::create($all);

            $teacher = new Teacher();
            $teacher->user_id = $user->user_id;
            $teacher->specialty_id = $request->specialty_id;
            $teacher->save();
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json([
                'message' => 'Create user failed',
                'error' => $e->getMessage()
            ], 500);
        }

        DB::commit();

        return response()->json([
            'message' => 'User created successfully'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        $user = User::with('teacher.classes.subject')->find($userId);

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 422);
        }

        return response()->json([
            'data' => $user
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherRequest  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $user)
    {
        // check if user exist
        $user = User::find($user);

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $user->update($request->all());

        // update teacher or student
        if ($request->specialty_id) {
            $teacher = Teacher::where('user_id', $user->user_id)->first();
            $teacher->specialty_id = $request->specialty_id;
            $teacher->save();
        }

        return response()->json([
            'message' => 'User updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully'
        ], 200);
    }
}
