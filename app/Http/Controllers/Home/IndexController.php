<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public $assign = [];
    public  function index()
    {
        return view('home.niuzhong',$this->assign);
    }

    public function sjindex()
    {
    	return view('home.sjniuzhong',$this->assign);
    }
    

    
}
