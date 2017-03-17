<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;

class RegistrapersonaController extends Controller
{
    public function index(Request $request)
    {

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'persona_nombre' => 'required',
                'persona_email' => 'required|email',
                'persona_fecha_nacimiento' => 'required|date_format:d/m/Y'
            ]);

            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $values = $request->all();

            $personaId = DB::table('persona')->insertGetId(
                ['persona_nombre' => $values['persona_nombre'],
                    'persona_email' => $values['persona_email'],
                    'persona_fecha_nacimiento' => $values['persona_fecha_nacimiento']]
            ,'persona_id');

            foreach($values['direccion'] as $key => $adress){

                $direccion_id = DB::table('direccion')->insertGetId(
                    ['persona_id' => $personaId,
                     'direccion_alias' => $values['alias'][$key],
                     'direccion_calle' => $values['direccion'][$key],
                    'direccion_cp' => $values['cp'][$key],
                    'direccion_colonia' => $values['colonia'][$key],
                    'direccion_municipio' => $values['municipio'][$key],
                    'direccion_estado' => $values['estado'][$key],
                    ],'direccion_id');
            }
            unset($_POST);
            return redirect('success');

        }
        return view('registrapersona.index');
    }

    public function success(){

        return view('registrapersona.success');
    }
}
