<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeoModel;

class SeoController extends Controller
{
    public function seo_list()
    {
        $data['getRecord'] = SeoModel::all();
        return view('admin.seo.list', $data);
    }

    public function seo_post(Request $request)
    {
        if($request->add_to_update == 'Add') {
            $InsertData = request()->validate([
                'meta_title'        => 'required',
                'meta_keyword'      => 'required',
                'meta_description'  => 'required',
                'copyright_name'    => 'required',
                'developer_name'    => 'required',
                'developer_url'     => 'required',
            ]);

            $InsertData = new SeoModel;

        } else {
            $InsertData = SeoModel::find($request->id);
        }

        $InsertData->meta_title         = trim($request->meta_title);
        $InsertData->meta_keyword       = trim($request->meta_keyword); 
        $InsertData->meta_description   = trim($request->meta_description); 
        $InsertData->copyright_name     = trim($request->copyright_name); 
        $InsertData->developer_name     = trim($request->developer_name); 
        $InsertData->developer_url      = trim($request->developer_url); 
        
        $InsertData->save();
        return redirect()->back()->with('success', 'Data Updated Successfully');

    }


}
