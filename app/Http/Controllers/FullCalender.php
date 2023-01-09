<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FullCalender extends Controller
{
    function index()
    {
        $data =  Http::get("https://api.npoint.io/a6619413ed149350d6bc");
        $data = json_decode($data);
        $new_array = [];
        foreach($data as $value)
        {
            $arr = [
                "id" => $value->id,
                "title" => $value->name,
                "start" => $value->startdate
            ];
            array_push($new_array,$arr);
        }

        return $new_array;
    }
}
