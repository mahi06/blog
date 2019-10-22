<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class OfferController extends Controller
{
    public function index()
    {
        $json = Storage::disk('local')->get('c51.json');
        $json = json_decode($json, true);
        $offers = $json['offers'];
        // echo '<pre>';print_r($offers);exit;
        return view('index',compact('offers'));
        // echo '<pre>';print_r($json);exit;
    }
}
