<?php

namespace App\Http\Controllers\Admin;

use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends AdminBaseController
{
    public function get_dashboard()
    {
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(40));
        $data=collect();
        foreach ($analyticsData as $a)
        {
            $data[]=$this->arrayToObject($a);
        }
        return view('backend.pages.dashboard')->with('aylik',$data);
    }
}
