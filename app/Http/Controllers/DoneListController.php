<?php

namespace App\Http\Controllers;

use App\Models\DoneList;
use App\Models\ProgressList;

class DoneListController
{
    public function create($id)
    {
        try {
            $getProgress=ProgressList::find($id);
            DoneList::create([
                'done' =>$getProgress->progress,
            ]);
            $getProgress->delete();
            return redirect('/');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        try {
            DoneList::destroy($id);
            return redirect('/');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
