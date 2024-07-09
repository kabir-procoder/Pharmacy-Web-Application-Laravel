<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicinesModel;
use App\Models\MedicinesStockModel;

class MedicineController extends Controller
{
    public function medicine()
    {
        $data['getRecord'] = MedicinesModel::getAllRecord();
        return view('admin.medicine.list', $data);
    }

    public function add_medicine()
    {
        return view('admin.medicine.add');
    }

    public function insert_medicine(Request $request)
    {
        $InsertData = new MedicinesModel;
        $InsertData->name           = trim($request->name);
        $InsertData->packing        = trim($request->packing);
        $InsertData->generic_name   = trim($request->generic_name);
        $InsertData->supplier_name  = trim($request->supplier_name);
        $InsertData->save();
        return redirect('admin/medicine')->with('success', 'Data Insert Successfully');
    }

    public function edit_medicine($id, Request $request)
    {
        $data['getRecord'] = MedicinesModel::getSingle($id);
        return view('admin.medicine.edit', $data);
    }

    public function update_medicine($id, Request $request)
    {
        $UpdateData = MedicinesModel::getSingle($id);
        $UpdateData->name           = trim($request->name);
        $UpdateData->packing        = trim($request->packing);
        $UpdateData->generic_name   = trim($request->generic_name);
        $UpdateData->supplier_name  = trim($request->supplier_name);
        $UpdateData->save();
        return redirect('admin/medicine')->with('success', 'Data Updated Successfully');
    }

    public function delete_medicine($id)
    {
        $DeleteData = MedicinesModel::getSingle($id);
        $DeleteData->isDelete = 1;
        $DeleteData->save();
        return redirect()->back()->with('error', 'Data Trush Successfully');
    }

    public function trash_medicine()
    {
        $data['getRecord'] = MedicinesModel::getTrushRecord();
        return view('admin.medicine.trash', $data);
    }

    public function restore_medicine($id)
    {
        $RestoreData = MedicinesModel::getSingle($id);
        $RestoreData->isDelete = 0;
        $RestoreData->save();
        return redirect()->back()->with('error', 'Data Restore Successfully');
    }

    public function parmanentdelete_medicine($id)
    {
        $ParmanentDeleteData = MedicinesModel::getSingle($id);
        $ParmanentDeleteData->isDelete = 1;
        $ParmanentDeleteData->delete();
        return redirect()->back()->with('error', 'Data Parmanent Deleted Successfully');
    }

    // medicines_stock
    // medicines_stock
    // medicines_stock

    public function medicines_stock_list()
    {
        $data['getRecord'] = MedicinesStockModel::getAllRecord();
        return view('admin.medicine_stock.list', $data);
    }

    public function medicines_stock_add()
    {
        $data['getRecord'] = MedicinesModel::where('isDelete', '=', 0)->get();
        return view('admin.medicine_stock.add', $data);
    }

    public function medicines_stock_insert(Request $request)
    {
        $InsertData = new MedicinesStockModel;
        $InsertData->medicines_id   = trim($request->medicines_id);
        $InsertData->batch_id       = trim($request->batch_id);
        $InsertData->expire_date    = trim($request->expire_date);
        $InsertData->quantity       = trim($request->quantity);
        $InsertData->mrp            = trim($request->mrp);
        $InsertData->rate           = trim($request->rate);
        $InsertData->save();
        return redirect('admin/medicines_stock')->with('success', 'Data Insert Successfully');
    }

    public function medicines_stock_edit($id, Request $request)
    {
        $data['oldRecord'] = MedicinesStockModel::getSingle($id);
        $data['getRecord'] = MedicinesModel::where('isDelete', '=', 0)->get();
        return view('admin.medicine_stock.edit', $data);
    }

    public function medicines_stock_update($id, Request $request)
    {
        $UpdateData = MedicinesStockModel::getSingle($id);
        $UpdateData->medicines_id   = trim($request->medicines_id);
        $UpdateData->batch_id       = trim($request->batch_id);
        $UpdateData->expire_date    = trim($request->expire_date);
        $UpdateData->quantity       = trim($request->quantity);
        $UpdateData->mrp            = trim($request->mrp);
        $UpdateData->rate           = trim($request->rate);
        $UpdateData->save();
        return redirect('admin/medicines_stock')->with('success', 'Data Insert Successfully');
    }

    public function medicines_stock_trashlist()
    {
        $data['getRecord'] = MedicinesStockModel::getAllTrushRecord();
        return view('admin.medicine_stock.trash', $data);
    }

    public function medicines_stock_trash($id)
    {
        $TrashData = MedicinesStockModel::getSingle($id);
        $TrashData->isDelete = 1;
        $TrashData->save();
        return redirect()->back()->with('error', 'Data Trash Successfully');
    }

    public function medicines_stock_restore($id)
    {
        $RestoreData = MedicinesStockModel::getSingle($id);
        $RestoreData->isDelete = 0;
        $RestoreData->save();
        return redirect('admin/medicines_stock')->with('success', 'Data Restore Successfully');
    }

    public function medicines_stock_delete($id)
    {
        $ParmanentDelete = MedicinesStockModel::getSingle($id);
        $ParmanentDelete->delete();
        return redirect()->back()->with('success', 'Data Parmanently Delete Successfully');
    }



}
