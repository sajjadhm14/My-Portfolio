<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class SiteSettingsController extends Controller
{
    public function siteSetting()
    {
        $sData = SiteSetting::find(1);
        return view ('backend.settings.site_settings' , compact('sData'));
    }

    public function updateSiteSettings(Request $request)
    {
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $imageName = 'logo_'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $manager = new ImageManager(new Driver);
            $img = $manager->read($file);
            $img = $img->resize(156,156);
            $img = $img->toJpeg(80)->save(base_path('public/uploads/logo/'.$imageName));
            $logoPath = 'uploads/logo/'.$imageName;

            SiteSetting::find(1)->update([
                'phone' =>$request->phone,
                'email' =>$request->email,
                'address' =>$request->address,
                'logo' =>$logoPath,
                'footer_note' =>$request->footer_note,
            ]);
            $notification = [
                'message' => 'Site Settings Updated With Logo Successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        }

        SiteSetting::find(1)->update([
            'phone' =>$request->phone,
            'email' =>$request->email,
            'address' =>$request->address,
            'footer_note' =>$request->footer_note,
        ]);
        $notification = [
            'message' => 'Site Settings Updated Without Logo Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
