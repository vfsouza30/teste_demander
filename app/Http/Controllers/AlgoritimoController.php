<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\ConversorUtil;

class AlgoritimoController extends Controller
{
    public function romanosXArabicos(Request $request){
        
        if($request->isMethod('post')){   

            $conversorUtil = new ConversorUtil();

            if($request->input('form1_romano') !== ''){

                $validacao_romano = $conversorUtil->validate($request->input('form1_romano'));

            if(!$validacao_romano){

                session()->flash('mensagem', 'Algarismo Romano inválido');
                return redirect()->route('home');

            }
                $resposta = $conversorUtil->romanoToArabico($request->input('form1_romano'));
            }

            if($request->input('form2_arabico') !== ''){

                $resposta2 = $conversorUtil->arabicoToRomano($request->input('form2_arabico'));

                $validacao_romano = $conversorUtil->validate($resposta2);

                if(!$validacao_romano){

                    session()->flash('mensagem', 'Conversão permitida até');
                    return redirect()->route('home');
                }
            }
        }
        
        //echo $conversorUtil->arabicoToRomano('20');
        
        return view('algoritimo', ['resposta' => $resposta, 'resposta2' => $resposta2]);
        
    }
}
