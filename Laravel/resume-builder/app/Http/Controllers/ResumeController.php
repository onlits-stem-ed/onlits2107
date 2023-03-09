<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function new(Request $request)
    {
        $resume = new Resume();
        $resume->first_name = $request->first_name;
        $resume->last_name = $request->last_name;
        $resume->email = $request->email;
        $resume->contact_no = $request->contact_no;
        $resume->save();
        return view('preview', ['resume' => $resume]);
    }

    public static function update(Request $request)
    {
        $resume = Resume::where('email', $request->email)->first();
        $resume->first_name = $request->first_name;
        $resume->last_name = $request->last_name;
        $resume->email = $request->email;
        $resume->contact_no = $request->contact_no;
        $resume->save();
        return view('preview', ['resume' => $resume]);
    }
}
