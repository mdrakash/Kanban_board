<?php

namespace App\Http\Controllers;

use App\Models\ProgressList;
use App\Models\ToDo;
use Illuminate\Http\Request;

class ProgressListController extends Controller
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

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
