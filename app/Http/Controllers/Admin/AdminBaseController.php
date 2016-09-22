<?php

namespace App\Http\Controllers\Admin;

use stdClass;
use View;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class AdminBaseController extends Controller
{
    public function __construct()
    {

        //View::share('aylik', $data);
    }

    public function array_to_obj($array, &$obj)
    {
        foreach ($array as $key => $value)
        {
            if (is_array($value))
            {
                $obj->$key = new stdClass();
                array_to_obj($value, $obj->$key);
            }
            else
            {
                $obj->$key = $value;
            }
        }
        return $obj;
    }

    public function arrayToObject($array)
    {
        $object= new stdClass();
        return $this->array_to_obj($array,$object);
    }
}
