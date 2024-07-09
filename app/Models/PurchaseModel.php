<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseModel extends Model
{
    use HasFactory;

    protected $table = 'purchases';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getAllRecord()
    {
        $return = self::select('purchases.*')
                ->where('isDelete', '=', 0)
                ->orderBy('id', 'desc')
                ->paginate(7);
                return $return;
    }

    public function getSuppliersName()
    {
        return $this->belongsTo(SuppliresModel::class, 'supplires_id');
    }

    static public function getAllTrashRecord()
    {
        $return = self::select('purchases.*')
                ->where('isDelete', '=', 1)
                ->orderBy('id', 'desc')
                ->paginate(7);
                return $return;
    }
}
