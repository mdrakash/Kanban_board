<?php

namespace App\Http\Controllers;

use App\Models\DoneList;
use App\Models\ProgressList;
use Illuminate\Http\Request;

class DoneListController extends Controller
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

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
