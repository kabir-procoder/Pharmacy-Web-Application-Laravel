<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoicesModel;
use App\Models\CustomersModel;

class InvoicesController extends Controller
{
    public function invoices_list()
    {
        $data['getRecord'] = InvoicesModel::getAllRecord();
        return view('admin.invoices.list', $data);
    }

    public function invoices_add()
    {
        $data['getRecord'] = CustomersModel::get();
        return view('admin.invoices.add', $data);
    }

    public function invoices_post(Request $request)
    {
        $InsertData = new InvoicesModel;
        $InsertData->net_total      = trim($request->net_total);
        $InsertData->invoices_date  = trim($request->invoices_date);
        $InsertData->customers_id   = trim($request->customers_id);
        $InsertData->total_amount   = trim($request->total_amount);
        $InsertData->total_discount = trim($request->total_discount);
        $InsertData->save();
        return redirect('admin/invoices')->with('success', 'Data Insert Successfully');
    }

    public function invoices_edit($id)
    {
        $data['editRecord'] = InvoicesModel::getSingle($id);
        $data['getRecord'] = CustomersModel::get();
        return view('admin.invoices.edit', $data);
    }

    public function invoices_update($id, Request $request)
    {
        $UpdateData = InvoicesModel::getSingle($id);
        $UpdateData->net_total      = trim($request->net_total);
        $UpdateData->invoices_date  = trim($request->invoices_date);
        $UpdateData->customers_id   = trim($request->customers_id);
        $UpdateData->total_amount   = trim($request->total_amount);
        $UpdateData->total_discount = trim($request->total_discount);
        $UpdateData->save();
        return redirect('admin/invoices')->with('success', 'Data Updated Successfully');
    }

    public function invoices_trash_list()
    {
        $data['getRecord'] = InvoicesModel::getAllTrashRecord();
        return view('admin.invoices.trash', $data);
    }

    public function invoices_trash($id)
    {
        $TrashData = InvoicesModel::getSingle($id);
        $TrashData->isDelete = 1;
        $TrashData->save();
        return redirect()->back()->with('error', 'Data Trash Successfully');
    }

    public function invoices_restore($id)
    {
        $RestoreData = InvoicesModel::getSingle($id);
        $RestoreData->isDelete = 0;
        $RestoreData->save();
        return redirect()->back()->with('success', 'Data Trash Successfully');
    }

    public function invoices_delete($id)
    {
        $DeleteData = InvoicesModel::getSingle($id);
        $DeleteData->delete();
        return redirect()->back()->with('error', 'Data Parmanently Delete Successfully');
    }

}
