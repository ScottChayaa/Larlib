<?php 

namespace ScottChayaa\Larlib\Controllers;
 
use App\Http\Controllers\Controller;
 
class DemoController extends Controller 
{
    public function index() 
    {
        return view('larlib::demo',[
        	'msg' => config('larlib.message'),
        ]);
    }
}