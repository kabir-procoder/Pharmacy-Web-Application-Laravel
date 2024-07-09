<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersModel extends Model
{
    use HasFactory;

    protected $table = 'customers';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getAllRecord()
    {
        $return = self::select('customers.*')
                ->orderBy('id', 'desc')
                ->paginate(7);
                return $return;
    }

}
