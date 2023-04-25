<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculaterCOntroller extends Controller
{
    public function index (request $request) {
        $result='';
        $a=$request->a;
        $b =$request->b;
        $cal=$request->cal;
        switch($cal) {
            case '+':
                $result=$a+$b;
                break;
            case '-':
                $result = $a - $b;

                break;
            case '*':
                $result = $a * $b;

                break;
            case '/':
                $result = $a / $b;

                break;
        }
        $title="Bảng tính toán";
        return view('layout.calculater',compact('title','result','a','b'));
        // ->with(['result' =>$result]);
    }
}
