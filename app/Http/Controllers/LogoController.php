<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogoModel;
use Str;

class LogoController extends Controller
{
    public function logo_list()
    {
        $data['getRecord'] = LogoModel::all();
        return view('admin.logo.list', $data);
    }

    public function logo_update(Request $request)
    {
        if($request->add_to_update == 'Add') {
             $insertData = request()->validate([
                'name'   => 'required',
                'image'  => 'required',
            ]);
            $insertData = new LogoModel;
        } else {
            $insertData = LogoModel::find($request->id);
        }

        
        if(!empty($request->file('image'))){
            if(!empty($insertData->image) && file_exists('public/img/logo/'.$insertData->image))
            {
                unlink('public/img/logo/'.$insertData->image);
            }
            $file       = $request->file('image');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/logo', $filename);
            $insertData->image = $filename;
        }
        if(!empty($request->file('favicon'))){
            if(!empty($insertData->favicon) && file_exists('public/img/favicon/'.$insertData->favicon))
            {
                unlink('public/img/favicon/'.$insertData->favicon);
            }
            $file       = $request->file('favicon');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/favicon', $filename);
            $insertData->favicon = $filename;
        }

        $insertData->name  = trim($request->name);
        $insertData->save();
        return redirect('admin/logo')->with('success', 'Data Updated Successfully'); 
    }
}
