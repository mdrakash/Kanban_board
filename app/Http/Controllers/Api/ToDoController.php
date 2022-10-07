<?php

namespace App\Http\Controllers\Api;


use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController
{
    public function create(Request $request)
    {
        try {
            ToDo::create([
                'taskName' => $request->taskName,
            ]);
            return response()->json('ToDo Created Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        try {
            ToDo::destroy($id);
            return response()->json('ToDo Deleted Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
}
