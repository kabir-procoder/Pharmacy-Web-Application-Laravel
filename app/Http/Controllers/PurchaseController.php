<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseModel;
use App\Models\SuppliresModel;
use App\Models\InvoicesModel;

class PurchaseController extends Controller
{
    public function purchase_list()
    {
        $data['getRecord'] = PurchaseModel::getAllRecord();
        return view('admin.purchases.list', $data);
    }

    public function purchase_add()
    {
        $data['getSupplires'] = SuppliresModel::get();
        $data['getInvoices']  = InvoicesModel::get();
        return view('admin.purchases.add', $data);
    }

    public function purchase_post(Request $request)
    {
        $InsertData = new PurchaseModel;
        $InsertData->supplires_id   = trim($request->supplires_id);
        $InsertData->invoices_id    = trim($request->invoices_id);
        $InsertData->voucher_number = trim($request->voucher_number);
        $InsertData->purchase_date  = trim($request->purchase_date);
        $InsertData->total_amount   = trim($request->total_amount);
        $InsertData->payment_status = trim($request->payment_status);
        $InsertData->save();
        return redirect('admin/purchases/')->with('success', 'Data Insert Successfully');
    }

    public function purchase_edit($id, Request $request)
    {
        $data['getRecord'] = PurchaseModel::getSingle($id);
        $data['getSupplires'] = SuppliresModel::get();
        $data['getInvoices']  = InvoicesModel::get();
        return view('admin.purchases.edit', $data);
    }

    public function purchase_update($id, Request $request)
    {
        $UpdateData = PurchaseModel::getSingle($id);
        $UpdateData->supplires_id   = trim($request->supplires_id);
        $UpdateData->invoices_id    = trim($request->invoices_id);
        $UpdateData->voucher_number = trim($request->voucher_number);
        $UpdateData->purchase_date  = trim($request->purchase_date);
        $UpdateData->total_amount   = trim($request->total_amount);
        $UpdateData->payment_status = trim($request->payment_status);
        $UpdateData->save();
        return redirect('admin/purchases/')->with('success', 'Data Insert Successfully');
    }

    public function purchase_trashlist()
    {
        $data['getRecord'] = PurchaseModel::getAllTrashRecord();
        return view('admin.purchases.trash', $data);
    }


    public function purchase_trash($id)
    {
        $TrashData = PurchaseModel::getSingle($id);
        $TrashData->isDelete = 1;
        $TrashData->save();
        return redirect()->back()->with('error', 'Data Trush Successfully');
    }

    public function purchase_restore($id)
    {
        $RestoreData = PurchaseModel::getSingle($id);
        $RestoreData->isDelete = 0;
        $RestoreData->save();
        return redirect()->back()->with('success', 'Data Restore Successfully');
    }

    public function purchase_delete($id)
    {
        $DeleteData = PurchaseModel::getSingle($id);
        $DeleteData->delete();
        return redirect()->back()->with('error', 'Data Delete Successfully');
    }

}
