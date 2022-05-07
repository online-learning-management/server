<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Http\Requests\StoreClassesRequest;
use App\Http\Requests\UpdateClassesRequest;
use App\Http\Resources\ClassResource;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = request()->limit ?? 100;

        return ClassResource::collection(Classes::paginate($limit));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClassesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassesRequest $request)
    {
        DB::beginTransaction();

        // $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        // $out->writeln($request);

        try {
            $class = Classes::create($request->all());

            // check schedules is exists so create schedule with class_id
            if ($request->schedules && count($request->schedules) > 0) {
                foreach ($request->schedules as $schedule) {
                    Schedule::create([
                        'class_id' => $class->class_id,
                        'schedule' => $schedule
                    ]);
                }
            }
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json([
                'message' => 'Create class failed',
                'error' => $e->getMessage()
            ], 500);
        }

        DB::commit();

        return response()->json([
            'message' => 'Tạo mới lớp học thành công!'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Classes::with('schedules')->find($id);

        if (!$class) {
            return response()->json([
                'message' => 'Không tìm thấy lớp học!'
            ], 422);
        }

        $class->specialty_id = $class->subject->specialty_id;

        return new ClassResource($class);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClassesRequest  $request
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassesRequest $request, Classes $classes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classes $classes)
    {
    }
}
