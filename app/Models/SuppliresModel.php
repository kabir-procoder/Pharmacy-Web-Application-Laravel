<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuppliresModel extends Model
{
    use HasFactory;

    protected $table = 'supplires';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getAllRecord()
    {
        $return = self::select('supplires.*')
                ->where('isDelete', '=', 0)
                ->orderBy('id', 'desc')
                ->paginate(7);
                return $return;
    }

    static public function getAllTrashRecord()
    {
        $return = self::select('supplires.*')
                ->where('isDelete', '=', 1)
                ->orderBy('id', 'desc')
                ->paginate(7);
                return $return;
    }

    static public function parmanentDelete($id)
    {
        $return = self::select('supplires.*')
                ->where('isDelete', '=', 1)
                ->find($id);
                return $return;
    }

}
