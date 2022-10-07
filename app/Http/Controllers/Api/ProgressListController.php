<?php

namespace App\Http\Controllers\Api;

use App\Models\ProgressList;
use App\Models\ToDo;

class ProgressListController
{
    public function create($id)
    {
        try {
            $getTodo=ToDo::find($id);
            ProgressList::create([
                'progress' =>$getTodo->taskName,
            ]);
            $getTodo->delete();
            return response()->json('Progress Created Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        try {
            ProgressList::destroy($id);
            return response()->json('Progress Deleted Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
