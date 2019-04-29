<?php

namespace App\Http\Controllers;

use App\Events\Event;
use App\Events\MailPostEvent;
use Session;
use Validator;
use App\Models\Novel;
// use App\Models\Author;
// use App\Models\Feedback;
use Illuminate\Http\Request;

// use App\Http\Requests;
use Illuminate\Support\Facades\Cache;

class IndexController extends CommonController
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
        return view('home.index.index')
		->with('class',$this->class);
    }

}
