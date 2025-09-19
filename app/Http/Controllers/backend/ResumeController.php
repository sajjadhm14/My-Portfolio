<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function myExperience()
    {
        $experiences =Resume::where('resume_cat' , 'experience')->get(); 
        return view('backend.resume.my_experience', compact('experiences'));
    }
}
