<?php

namespace App\Http\Controllers;

use App\Helper\ImageUpload;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function createService()
    {
        return view('service');
    }

    public function storeService(Request $request)
    {
//       $requestData = $request->except('image');
//       $requestData['image'] = ImageUpload::uploadImage($request->file('image'), 'assets/images/');
//       Service::create($requestData);

//        Service::create([
//            'name' => $request->name,
//            'image' => ImageUpload::uploadImage($request->file('image'), 'assets/img/'),
//        ]);

        Service::saveData($request);
       return redirect(route('manage.service'))->with('message', 'Created Successfully');
    }

    public function manageService()
    {
        $data = [];
        $data['services'] = Service::latest()->get();
        return view('service', $data);
    }

    public function editService($id)
    {
        $data = [];
        $data['service'] = Service::find($id);
        return view('edit-service', $data);
    }

    public function updateService(Request $request, $id)
    {
//        $service = Service::find($id);
//        $service->name = $request->name;
//        $service->image = ImageUpload::uploadImage($request->file('image'), 'assets/images/', isset($id) ? Service::find($id)->image : null);
//        $service->save();

        Service::saveData($request, $id);


        return redirect(route('manage.service'))->with('message', 'updated Successfully');
    }

    public function changeStatus($id)
    {
        $serv = Service::find($id);
        if ($serv->status == 'Active')
        {
            $serv->status = 'Inactive' ;
            $serv->save();
        }
        else{
            $serv->status = 'Active' ;
            $serv->save();
        }

        return redirect(route('manage.service'))->with('message', 'Changed Successfully');
    }

    public function deleteService(Request $request, $id)
    {
        $service                 = Service::where('id', $id)->first();
        $image                   = public_path($service->image);
        if (File::exists($image)) {
            File::delete($image);
        }
        $service->delete();
        return redirect(route('manage.service'))->with('message', 'Deleted Successfully');

    }
}
