<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicesModel extends Model
{
    use HasFactory;

    protected $table = 'invoices';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getAllRecord()
    {
        $return = self::select('invoices.*')
                ->where('isDelete', '=', 0)
                ->orderBy('id', 'desc')
                ->paginate(7);
                return $return;
    }

    public function getCustomerName()
    {
        return $this->belongsTo(CustomersModel::class, 'customers_id');
    }

    static public function getAllTrashRecord()
    {
        $return = self::select('invoices.*')
                ->where('isDelete', '=', 1)
                ->orderBy('id', 'desc')
                ->paginate(7);
                return $return;
    }
}
