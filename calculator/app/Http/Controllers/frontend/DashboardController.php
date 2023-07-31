<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Dashboard;
use App\Models\WebsiteQuotation;
use Illuminate\Http\Request;
use App\Models\File;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('frontend.dashboard');
    }

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'mobile' => 'required',
        //     'files' => 'required',
        //     'files.*' => 'mimes:csv,txt,xlx,xls,pdf,docx'
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //                 'error' => $validator->errors()->all()
        //             ]);
        // }
        $file_insert=[];
        if($request->hasfile('files'))
        {
           foreach($request->file('files') as $key => $file)
           {
               $path = $file->store('public/files');
               $name = $file->getClientOriginalName();

               $insert[$key]['name'] = $name;
               $insert[$key]['path'] = $path;
               $file=$path;


               array_push($file_insert,$file);

           }

        }



        WebsiteQuotation::create(

            [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'website_type'=>$request->website_type,
            'page_number'=>$request->page_number,
            'domain'=>$request->domain_name_value,
            'hosting'=>$request->hosting,

            'pages_name'=>implode(", ",$request->pages_name),
            'special_services'=>implode(", ",$request->special_services),
            'technology'=>implode(", ",$request->technology),
            'extra_requirement'=>$request->extra_requirement,
            'email_qty'=>$request->email_name_value,
            'files'=>implode(", ",$file_insert)
           ]);

        return back()->with("success","Your Order has been placed successfully!");
    }
}
