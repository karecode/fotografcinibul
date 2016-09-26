<?php

namespace App\Http\Controllers\Admin;

use Analytics;
use App\CountryCodeModel;
use App\User;
use Carbon\Carbon;
use Spatie\Analytics\Period;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends AdminBaseController
{
    public function get_dashboard()
    {
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $data = collect();
        foreach ($analyticsData as $a) {
            $data[] = $this->arrayToObject($a);
        }
        $data2 = collect();
        $analytics = Analytics::fetchMostVisitedPages(Period::days(7));;
        foreach ($analytics as $a)
            $data2[] = $this->arrayToObject($a);
        $data3 = collect();
        $analytics = Analytics::fetchTopBrowsers(Period::days(7));;
        foreach ($analytics as $a)
            $data3[] = $this->arrayToObject($a);
        $data4 = collect();
        $analytics = Analytics::performQuery(Period::days(7), "ga:sessions", ['dimensions' => 'ga:country']);
        foreach ($analytics->rows as $a) {
            $yeni_data = [];
            $i = 0;
            $cc = CountryCodeModel::cc($a[0]);
            if($cc!=null)
            {
                $yeni_data[] = $cc->code;
                $yeni_data[] = $a[1];
                $data4[] = $yeni_data;
            }
        }
        //dd($data4);
        //$analytics=Analytics::fetchTopReferrers(Period::days(7));; //TODO top referres alınacak.
        $dt = Carbon::now();
        $dt->addWeeks(-1);
        $yeni_kayitli_kullaniciliar = User::where('created_at', '>', $dt)->count();
        $dt2 = Carbon::now();
        $dt2->addWeeks(-2);
        $yeni_kayitli_kullaniciliar2 = User::where('created_at', '>', $dt2)->where('created_at', '<', $dt)->count();
        $kullanici_ort = $yeni_kayitli_kullaniciliar * 100 / $yeni_kayitli_kullaniciliar2;
        return view('backend.pages.dashboard')->with('aylik', $data)->with('yeni_kullanici_sayisi', $yeni_kayitli_kullaniciliar)->with('yeni_kayit_ort', $kullanici_ort)->with('most_viewed_pages', $data2)->with('top_browsers', $data3)->with('harita',$data4);
    }

    public function get_sliderResimEkle()
    {
        return view('backend.pages.sliderResimEkle');
    }
}
