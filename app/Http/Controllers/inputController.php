<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\input;

class inputController extends Controller
{
    protected function input(Request $request){
        $request->validate([
            'name'=>'required',
            'number'=>'required',
            'time'=>'required',
            'file'=>'required',
        ]);

        $inp = new input;
        $inp->name = $request->name;
        $inp->number = $request->number;
        $inp->time = $request->time;
        $inp->file = $request->file;
        if ($inp->save())
        {
            return redirect('home')->with('status', 'Feedback Accepted');
        } else {
            return redirect('home')->with('status', 'Feedback Denied');

        }
    }
}
