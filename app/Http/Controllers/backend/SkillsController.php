<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class SkillsController extends Controller
{
    public function addSkill()
    {
        return view ('backend.skills.add_skill');
    }

    public function storeSkill(Request $request)
    {
        $file = $request->file('icon');
        $iconName = 'tech_'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads/skills/'),$iconName);
        $iconPath = 'uploads/skills/'.$iconName;

        $skill = new Skill();
        $skill->icon = $iconPath;
        $skill->exp_level = $request->exp_level;
        $skill->technology_name = $request->technology;
        $skill->save();
        $notification = [
            'message' => 'Skill Added Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()->route('all.skill')->with($notification);
    }

    public function AllSkills()
    {
        $allSkills = Skill::all();
        return view('backend.skills.all_skills' , compact('allSkills'));
    }
    public function editSkill($id)
    {
        $skill = Skill::findOrFail($id);
        return view('backend.skills.edit_skill' , compact('skill'));
    }
}
