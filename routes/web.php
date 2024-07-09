<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SeoController;


Route::get('/', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register/post', [AuthController::class, 'register_post']);
Route::get('forgot', [AuthController::class, 'forgot']);
Route::post('login/post', [AuthController::class, 'login_post']);
Route::post('forgot/post', [AuthController::class, 'forgot_post']);
Route::get('reset/{token}', [AuthController::class, 'getReset']);
Route::post('reset/{token}', [AuthController::class, 'postReset']);

Route::group(['middleware' => 'admin'], function() {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    // Customers
    Route::get('admin/customers', [CustomersController::class, 'customers']);
    Route::get('admin/customers/add', [CustomersController::class, 'add_customers']);
    Route::post('admin/customers/add', [CustomersController::class, 'insert_add_customers']);
    Route::get('admin/customers/edit/{id}', [CustomersController::class, 'edit_customers']);
    Route::post('admin/customers/edit/{id}', [CustomersController::class, 'update_customers']);
    Route::get('admin/customers/delete/{id}', [CustomersController::class, 'delete_customers']);
    // Medicine
    Route::get('admin/medicine', [MedicineController::class, 'medicine']);
    Route::get('admin/medicine/add', [MedicineController::class, 'add_medicine']);
    Route::post('admin/medicine/add', [MedicineController::class, 'insert_medicine']);
    Route::get('admin/medicine/edit/{id}', [MedicineController::class, 'edit_medicine']);
    Route::post('admin/medicine/edit/{id}', [MedicineController::class, 'update_medicine']);
    Route::get('admin/medicine/delete/{id}', [MedicineController::class, 'delete_medicine']);
    Route::get('admin/medicine/trash', [MedicineController::class, 'trash_medicine']);
    Route::get('admin/medicine/restore/{id}', [MedicineController::class, 'restore_medicine']);
    Route::get('admin/medicine/parmanentdelete/{id}', [MedicineController::class, 'parmanentdelete_medicine']);
    // Medicines Stock
    Route::get('admin/medicines_stock', [MedicineController::class, 'medicines_stock_list']);
    Route::get('admin/medicines_stock/add', [MedicineController::class, 'medicines_stock_add']);
    Route::post('admin/medicines_stock/add', [MedicineController::class, 'medicines_stock_insert']);
    Route::get('admin/medicines_stock/edit/{id}', [MedicineController::class, 'medicines_stock_edit']);
    Route::post('admin/medicines_stock/edit/{id}', [MedicineController::class, 'medicines_stock_update']);
    Route::get('admin/medicines_stock/trash/list', [MedicineController::class, 'medicines_stock_trashlist']);
    Route::get('admin/medicines_stock/trash/{id}', [MedicineController::class, 'medicines_stock_trash']);
    Route::get('admin/medicines_stock/restore/{id}', [MedicineController::class, 'medicines_stock_restore']);
    Route::get('admin/medicines_stock/delete/{id}', [MedicineController::class, 'medicines_stock_delete']);
    // Supplires
    Route::get('admin/supplires', [SuppliersController::class, 'supplires_list']);
    Route::get('admin/supplires/add', [SuppliersController::class, 'supplires_add']);
    Route::post('admin/supplires/add', [SuppliersController::class, 'supplires_insert']);
    Route::get('admin/supplires/edit/{id}', [SuppliersController::class, 'supplires_edit']);
    Route::post('admin/supplires/edit/{id}', [SuppliersController::class, 'supplires_update']);
    Route::get('admin/supplires/trash', [SuppliersController::class, 'supplires_trashlist']);
    Route::get('admin/supplires/trash/{id}', [SuppliersController::class, 'supplires_trash']);
    Route::get('admin/supplires/restore/{id}', [SuppliersController::class, 'supplires_restore']);
    Route::get('admin/supplires/delete/{id}', [SuppliersController::class, 'supplires_delete']);
    // Invoice
    Route::get('admin/invoices', [InvoicesController::class, 'invoices_list']);
    Route::get('admin/invoices/add', [InvoicesController::class, 'invoices_add']);
    Route::post('admin/invoices/add', [InvoicesController::class, 'invoices_post']);
    Route::get('admin/invoices/edit/{id}', [InvoicesController::class, 'invoices_edit']);
    Route::post('admin/invoices/edit/{id}', [InvoicesController::class, 'invoices_update']);
    Route::get('admin/invoices/trash', [InvoicesController::class, 'invoices_trash_list']);
    Route::get('admin/invoices/trash/{id}', [InvoicesController::class, 'invoices_trash']);
    Route::get('admin/invoices/restore/{id}', [InvoicesController::class, 'invoices_restore']);
    Route::get('admin/invoices/delete/{id}', [InvoicesController::class, 'invoices_delete']);
    // Purchase
    Route::prefix('admin/purchases/')->group(function(){
        Route::get('', [PurchaseController::class, 'purchase_list']);
        Route::get('add', [PurchaseController::class, 'purchase_add']);
        Route::post('add', [PurchaseController::class, 'purchase_post']);
        Route::get('edit/{id}', [PurchaseController::class, 'purchase_edit']);
        Route::post('edit/{id}', [PurchaseController::class, 'purchase_update']);
        Route::get('trash', [PurchaseController::class, 'purchase_trashlist']);
        Route::get('trash/{id}', [PurchaseController::class, 'purchase_trash']);
        Route::get('restore/{id}', [PurchaseController::class, 'purchase_restore']);
        Route::get('delete/{id}', [PurchaseController::class, 'purchase_delete']);
    });
    // Purchase
    Route::prefix('admin/account/')->group(function(){
        Route::get('', [AccountController::class, 'list']);
        Route::get('edit/{id}', [AccountController::class, 'account_edit']);
        Route::post('edit/{id}', [AccountController::class, 'account_update']);
        Route::get('trash', [AccountController::class, 'account_trashlist']);
        Route::get('trash/{id}', [AccountController::class, 'account_trash']);
        Route::get('restore/{id}', [AccountController::class, 'account_restore']);
        Route::get('delete/{id}', [AccountController::class, 'account_delete']);

    });
    // Logo
    Route::get('admin/logo', [LogoController::class, 'logo_list']);
    Route::post('admin/logo/post', [LogoController::class, 'logo_update']);
    // Favicon
    Route::get('admin/favicon', [LogoController::class, 'faveicon_list']);
    // Seo
    Route::get('admin/seo', [SeoController::class, 'seo_list']);
    Route::post('admin/seo', [SeoController::class, 'seo_post']);

    



});

Route::get('logout', [AuthController::class, 'logout']);


