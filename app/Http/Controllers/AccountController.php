<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use Str;

class AccountController extends Controller
{
    public function list()
    {
        $data['getRecord'] = User::getAllRecord();
        return view('admin.account.list', $data);
    }

    public function account_edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        return view('admin.account.edit', $data);
    }

    public function account_update($id, Request $request)
    {
        $UpdateData = User::getSingle($id);      
        $UpdateData->name  = trim($request->name);
        $UpdateData->email = trim($request->email);
        if(!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        if(!empty($request->file('image'))){
            if(!empty($UpdateData->image) && file_exists('public/img/user/'.$UpdateData->image))
            {
                unlink('public/img/user/'.$UpdateData->image);
            }
            $file       = $request->file('image');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/user', $filename);
            $UpdateData->image = $filename;
        }
        $UpdateData->is_role = trim($request->is_role);
        $UpdateData->save();
        return redirect('admin/account/')->with('success', 'Data Updated successfully');
    }

    public function account_trashlist()
    {
        $data['getRecord'] = User::getAllTrashRecord();
        return view('admin.account.trashlist', $data);
    }

    public function account_trash($id)
    {
        $TrashData = User::getSingle($id);
        $TrashData->isDelete = 1;
        $TrashData->save();
        return redirect()->back()->with('error', 'Data Trash Successfully');
    }

    public function account_restore($id)
    {
        $RestoreData = User::getSingle($id);
        $RestoreData->isDelete = 0;
        $RestoreData->save();
        return redirect()->back()->with('error', 'Data Trash Successfully');
    }

    public function account_delete($id)
    {
        $DeleteData = User::getSingle($id);
        if(!empty($DeleteData->image) && file_exists('public/img/user/'.$DeleteData->image)) 
        {
            unlink('public/img/user/'.$DeleteData->image);
        }
        $DeleteData->delete();
        return redirect()->back()->with('error', 'Data Parmanent Delete Successfully');

    }




}
