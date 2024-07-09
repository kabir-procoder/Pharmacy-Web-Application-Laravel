<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogoModel extends Model
{
    use HasFactory;

    protected $table = 'logo';

    public function getLogo()
    {
        if(!empty($this->image) && file_exists('public/img/logo/'.$this->image))
        {
            return url('public/img/logo/'.$this->image);
        }
    }

    public function getFavicon()
    {
        if(!empty($this->favicon) && file_exists('public/img/favicon/'.$this->favicon))
        {
            return url('public/img/favicon/'.$this->favicon);
        }
    }

}
