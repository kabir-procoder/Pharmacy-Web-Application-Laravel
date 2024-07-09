<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinesStockModel extends Model
{
    use HasFactory;

    protected $table = 'medicines_stock';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    public function getMedicineName()
    {
        return $this->belongsTo(MedicinesModel::class, 'medicines_id');
    }

    static public function getAllRecord()
    {
        $return = self::select('medicines_stock.*')
                ->where('isDelete', '=', 0)
                ->orderBy('id', 'desc')
                ->paginate(7);
                return $return;
    }

    static public function getAllTrushRecord()
    {
        $return = self::select('medicines_stock.*')
                ->where('isDelete', '=', 1)
                ->orderBy('id', 'desc')
                ->paginate(7);
                return $return;
    }


}
