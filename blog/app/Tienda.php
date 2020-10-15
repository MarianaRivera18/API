<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    //campos que pueden ser llenados hacia la bd//
    protected $_FILES=["name","descripcion"];
}
