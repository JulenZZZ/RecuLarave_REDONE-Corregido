<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
class DivisionController extends Controller
{
    public function __construct()
    {
        $this->middleware('DivisionMiddleware');
    }



    public function dividir(Request $request){

        $dividendo=$request->input('dividendo');
        $divisor=$request->input('divisor');
        $resultado=$dividendo/$divisor;

        $division= new division();
        $division->dividendo=$dividendo;
        $division->divisor=$divisor;
        $division->resultado=$resultado;
        $division->save();

        return view('resultado',['resultado'=>$resultado]);
    }
}
