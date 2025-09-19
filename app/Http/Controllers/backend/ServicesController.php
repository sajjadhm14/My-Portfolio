<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function allServices()
    {
        $services = Service::latest()->get();
        return view('backend.services.all_services' , compact('services'));
    }

    public function addService()
    {
        return view('backend.services.add_service');
    }

    public function storeService(Request $request)
    {
        $service =new Service();
        $service->service_title = Str::replace('/', '-',$request->service_title);
        $service->service_description = $request->service_description;
        $service->created_at = Carbon::now();

        $service->save();

        $notification = [
            'message' => 'Service Added Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()->route('all.services')->with($notification);
    }

    public function editService($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.services.edit_service' , compact('service'));
    }
    public function updateService(Request $request)
    {
        $service_id = $request->service_id;
        $service = Service::findOrFail($service_id);
        $service->service_title = Str::replace('/', '-',$request->service_title);
        $service->service_description = $request->service_description;
        $service->updated_at = Carbon::now();
        $service->save();

        $notification = [
            'message' => 'Service Updated Successfully!',
            'alert-type' => 'info',
        ];
        return redirect()->route('all.services')->with($notification);
    }
}
