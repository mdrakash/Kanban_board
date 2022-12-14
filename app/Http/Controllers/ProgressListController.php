<?php

namespace App\Http\Controllers;

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
            return redirect('/');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        try {
            ProgressList::destroy($id);
            return redirect('/');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
