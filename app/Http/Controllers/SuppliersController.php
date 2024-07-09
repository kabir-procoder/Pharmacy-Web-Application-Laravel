<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuppliresModel;

class SuppliersController extends Controller
{
    public function supplires_list()
    {
        $data['getRecord'] = SuppliresModel::getAllRecord();
        return view('admin.supplires.list', $data);
    }

    public function supplires_add()
    {
        return view('admin.supplires.add');
    }

    public function supplires_insert(Request $request)
    {
        $InsertData = new SuppliresModel;
        $InsertData->supplires_name     = trim($request->supplires_name);
        $InsertData->supplires_email    = trim($request->supplires_email);
        $InsertData->supplires_number   = trim($request->supplires_number);
        $InsertData->address            = trim($request->address);
        $InsertData->save();
        return redirect('admin/supplires')->with('success', 'Data Insert Successfully');
    }

    public function supplires_edit($id, Request $request)
    {
        $data['getRecord'] = SuppliresModel::getSingle($id);
        return view('admin.supplires.edit', $data);
    }

    public function supplires_update($id, Request $request)
    {
        $UpdateData = SuppliresModel::getSingle($id);
        $UpdateData->supplires_name     = trim($request->supplires_name);
        $UpdateData->supplires_email    = trim($request->supplires_email);
        $UpdateData->supplires_number   = trim($request->supplires_number);
        $UpdateData->address            = trim($request->address);
        $UpdateData->save();
        return redirect('admin/supplires')->with('success', 'Data Updated Successfully');
    }

    public function supplires_trashlist()
    {
        $data['getRecord'] = SuppliresModel::getAllTrashRecord();
        return view('admin.supplires.trash', $data);
    }

    public function supplires_trash($id)
    {
        $TrashData = SuppliresModel::getSingle($id);
        $TrashData->isDelete = 1;
        $TrashData->save();
        return redirect()->back()->with('error', 'Data Trush Successfully');
    }

    public function supplires_restore($id)
    {
        $RestoreData = SuppliresModel::getSingle($id);
        $RestoreData->isDelete = 0;
        $RestoreData->save();
        return redirect()->back()->with('error', 'Data Restore Successfully');
    }

    public function supplires_delete($id)
    {
        $DeleteData = SuppliresModel::parmanentDelete($id);
        $DeleteData->delete();
        return redirect()->back()->with('error', 'Data Parmanent Delete Successfully');
    }

}
