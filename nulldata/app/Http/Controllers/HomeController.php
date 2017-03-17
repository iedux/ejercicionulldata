<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personasArray = array();
        $personas = DB::table('persona')->get();

        $i=0;
        foreach($personas as $row){
            $personasArray[$i]['persona'] = $row;
            $direcciones = DB::table('direccion')->where('persona_id','=',$row->persona_id)->get();
            $personasArray[$i]['direcciones'] = $direcciones;
            $i++;
        }
        $data['personas'] = $personasArray;


        return view('home',$data);
    }
}
