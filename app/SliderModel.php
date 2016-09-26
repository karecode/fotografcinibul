<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    protected $table="slider";

    protected $fillable=['resim','baslik','yazi'];
}
