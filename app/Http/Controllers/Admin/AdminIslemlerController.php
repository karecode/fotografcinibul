<?php

namespace App\Http\Controllers\Admin;

use App\SliderModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Validator;
class AdminIslemlerController extends AdminBaseController
{
    public function post_sliderResimEkle(Request $request)
    {
        // getting all of the post data
        $file = array('image' => Input::file('file'));
        // setting up rules
        $rules = array('image' => 'required | mimes:jpeg,jpg,png',); //mimes:jpeg,bmp,png and for max size max:10000
        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return response(['msg' => 'Hatalı dosya biçimi'],400);
        } else {
            // checking file is valid.
            if (Input::file('file')->isValid()) {
                $file = Input::file('file');
                $destinationPath = 'img/slider'; // upload path
                $extension = Input::file('file')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
                Storage::disk('uploads')->makeDirectory($destinationPath);
                $fullPath='/uploads/'.$destinationPath.'/'.$fileName;
                Image::make($file->getRealPath())->resize(1920, 850)->save('uploads/'.$destinationPath . '/' . $fileName);
                $request->merge(['resim'=>$fullPath]);
                SliderModel::create($request->all());
                return response(['msg' => 'Kaydedildi', 'link' => '/uploads/' . $destinationPath.'/' . $fileName],200);
            } else {
                // sending back with error message.
                return response(['msg' => 'Bir hata oluştu.'],403);
            }
        }
    }
}
