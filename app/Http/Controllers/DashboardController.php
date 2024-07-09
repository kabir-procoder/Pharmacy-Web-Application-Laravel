<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseModel;
use App\Models\SuppliresModel;
use App\Models\CustomersModel;
use App\Models\MedicinesStockModel;
use App\Models\User;
use App\Models\InvoicesModel;
use App\Models\SeoModel;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['getTotalPurchase']       = PurchaseModel::count();
        $data['getTotalSupplires']      = SuppliresModel::count();
        $data['getTotalCustomers']      = CustomersModel::count();
        $data['getTotalStockMedicine']  = MedicinesStockModel::count();
        $data['getTotalUser']           = User::count();
        $data['getTotalInvoice']        = InvoicesModel::count();
        $data['getSeoData']             = SeoModel::find(1);
        
        return view('admin.dashboard.list', $data);
    }
}
