<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function addSkill()
    {
        return view ('backend.skills.add_skill');
    }

    public function storeSkill()
    {
        
    }
}
