<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HeroController extends Controller
{
    public function heroSection()
    {
        $hero = Hero::find(1);
        return view ('backend.hero.hero_section' , compact('hero'));
    }

    public function updateHeroSection(Request $request)
    {
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $imageName ='hero-'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());    
            $img = $manager->read($file);
            $img = $img->resize(437,475);
            $img = $img->toJpeg(80)->save(public_path('uploads/hero/'.$imageName));
            $imagePath = 'uploads/hero/'.$imageName ;

            Hero::find(1)->update([
                'name' => $request->name,
                'profession' => $request->profession,
                'short_description' => $request->short_description,
                'photo' => $imagePath,
                'instagram_url' => $request->instagram_url,
                'telegram_url' => $request->telegram_url,
                'github_url' => $request->github_url,
                'linkedin_url' => $request->linkedin_url,
                'YOE' => $request->YOE,
                'HC' => $request->HC,
                'PC' => $request->PC,
                'updated_at' => Carbon::now()

            ]);
            $notification = [
            'message'=> 'Hero Section Updated With Photo Successfully' , 
            'alert-type' => 'success'
            ];
            if(!$request->hasFile('resume')){
                return redirect()->back()->with($notification);
            }

            
        }
        elseif($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeNewName = 'Resume_'.hexdec(uniqid()).'.'.$resume->getClientOriginalExtension();
            $resume->move(public_path('uploads/resume'),$resumeNewName);
            $resumePath = 'uploads/resume/'.$resumeNewName;

             Hero::find(1)->update([
                'name' => $request->name,
                'profession' => $request->profession,
                'short_description' => $request->short_description,
                'resume' => $resumePath,
                'instagram_url' => $request->instagram_url,
                'telegram_url' => $request->telegram_url,
                'github_url' => $request->github_url,
                'linkedin_url' => $request->linkedin_url,
                'YOE' => $request->YOE,
                'HC' => $request->HC,
                'PC' => $request->PC,
                'updated_at' => Carbon::now()

            ]);
            $notification = [
            'message'=> 'Hero Section Updated With Resume Successfully' , 
            'alert-type' => 'success'
            ];
            return redirect()->back()->with($notification);
        }

         Hero::find(1)->update([
                'name' => $request->name,
                'profession' => $request->profession,
                'short_description' => $request->short_description,
                'instagram_url' => $request->instagram_url,
                'telegram_url' => $request->telegram_url,
                'github_url' => $request->github_url,
                'linkedin_url' => $request->linkedin_url,
                'YOE' => $request->YOE,
                'HC' => $request->HC,
                'PC' => $request->PC,
                'updated_at' => Carbon::now()

            ]);
            $notification = [
                'message'=> 'Hero Section Updated Without Photo Or Resume Successfully' , 
                'alert-type' => 'success'
            ];
            return redirect()->back()->with($notification);
        


    }
}
