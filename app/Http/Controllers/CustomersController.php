<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomersModel;

class CustomersController extends Controller
{
    public function customers()
    {
        $data['getRecord'] = CustomersModel::getAllRecord();
        return view('admin.customers.list', $data);
    }

    public function add_customers(Request $request)
    {
        return view('admin.customers.add');
    }

    public function insert_add_customers(Request $request)
    {
        $InsertData = new CustomersModel;
        $InsertData->name           = trim($request->name);
        $InsertData->contact_number = trim($request->contact_number);
        $InsertData->address        = trim($request->address);
        $InsertData->doctor_name    = trim($request->doctor_name);
        $InsertData->doctor_address = trim($request->doctor_address);
        $InsertData->save();
        return redirect('admin/customers')->with('success', 'Data Insert Successfully');
    }

    public function edit_customers($id, Request $request)
    {
        $data['getRecord'] = CustomersModel::getSingle($id);
        return view('admin.customers.edit', $data);
    }

    public function update_customers($id, Request $request)
    {
        $UpdateData = CustomersModel::getSingle($id);
        $UpdateData->name           = trim($request->name);
        $UpdateData->contact_number = trim($request->contact_number);
        $UpdateData->address        = trim($request->address);
        $UpdateData->doctor_name    = trim($request->doctor_name);
        $UpdateData->doctor_address = trim($request->doctor_address);
        $UpdateData->save();
        return redirect('admin/customers')->with('success', 'Data Updated Successfully');
    }

    public function delete_customers($id)
    {
        $DeleteRecord = CustomersModel::getSingle($id);
        $DeleteRecord->delete();
        return redirect('admin/customers')->with('error', 'Data Deleted Successfully');
    }
}
