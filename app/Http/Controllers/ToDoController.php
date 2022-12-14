<?php

namespace App\Http\Controllers;

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
            return redirect('/');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        try {
            ToDo::destroy($id);
            return redirect('/');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
}
