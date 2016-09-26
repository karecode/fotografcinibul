<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryCodeModel extends Model
{
    protected $table = 'country_code';

    public static function cc($name)
    {
        return CountryCodeModel::where('country', '=', $name)->select('code')->first();
    }
}
