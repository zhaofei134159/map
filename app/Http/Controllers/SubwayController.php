<?php
namespace App\Http\Controllers;

use URL;
use App\Http\Requests;

class SubwayController extends CommonController
{
    /**
     * IndexController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $gaode_key = config('config.map_gaode_key');

        return view('home.subway.index')
                ->with('class',$this->class)
                ->with('gaode_key',$gaode_key);
    }

    public function detail(){
        $gaode_key = config('config.map_gaode_key');
        
        return view('home.subway.detail')
                ->with('gaode_key',$gaode_key);
    }
}

