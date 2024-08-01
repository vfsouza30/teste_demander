<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuadroMedalhas;

class QuadroMedalhasController extends Controller
{


    public function index(Request $request){

        $medalhas = new QuadroMedalhas();
        $anos = array();
        $porcentagem_final = [];
        $ano_olimpico1 = '';
        $ano_olimpico2 = '';
        $tipo_medalha = '';

        foreach($medalhas->all() as $medalha) {
           $anos[] = $medalha->ano;
        }

        if($request->isMethod('post')){

            $ano_olimpico1 = $request->input('ano_olimpico1');
            $ano_olimpico2 = $request->input('ano_olimpico2');
            $tipo_medalha = $request->input('tipo_medalha');

            $result_selecao = $medalhas->select('equipe', 'ano', $tipo_medalha)
                    ->where('ano', $ano_olimpico1)
                    ->orWhere('ano', $ano_olimpico2)
                    ->get();

            $result_selecao_arr = array();

            foreach($result_selecao as $result){

                $result_selecao_arr[] = [
                    'equipe' => $result->equipe,
                    'ano' => $result->ano,
                    'quantidade' => $result->{$tipo_medalha}
                ];
            }
            
            $equipes = [];

            foreach($result_selecao_arr as $item) {

                $equipe = $item['equipe'];
                $ano = $item['ano'];
                $quantidade = $item['quantidade'];

                if(!isset($equipes[$equipe])){

                    $equipes[$equipe] = [
                        'anos' => [],
                        'quantidades' => [],
                    ];

                }
                $equipes[$equipe]['anos'][] = $ano;
                $equipes[$equipe]['quantidades'][] = $quantidade;
                
            }

            //$porcentagem_final = [];
            $quantidade_acumulada = 0;

            foreach($equipes as $equipe => $dados){

                $anos_equipes = $dados['anos'];
                $quantidades = $dados['quantidades'];

                if(count($quantidades) > 1){

                    $quantidade_inicial = $quantidades[0];
                    $quantidade_final = end($quantidades);
                    $percentual = (($quantidade_final - $quantidade_inicial) / $quantidade_inicial) * 100;
                    
                    $percentual_formatado = number_format($percentual, 2);
                    $quantidade_acumulada += $quantidade_inicial + $quantidade_final;

                } else {
                    $percentual_formatado = "N/A";
                }
                
                $porcentagem_final[$equipe] = [
                    'anos' => $anos_equipes,
                    'quantidades' => $quantidades,
                    'percentual' => $percentual_formatado
                ];
            }

            /*foreach($porcentagem_final as $key => $item){
                
                if ($key !== 'quantidade_acumulada') {

                    $quantidades = $item['quantidades'];
                    $percentual = $item['percentual'];
                
                    if(count($quantidades) > 1){

                        $quantidade_inicial = ($quantidades[0] == 'N/A') ? 1 : $quantidades[0];
                        $quantidade_final = (end($quantidades) == 'N/A' ? 1 : end($quantidades));
                        
                        $quantidade_total = $quantidade_final + $quantidade_inicial;
                        $percentual_sobre_quantidade_total = ($quantidade_acumulada * $percentual) / 100;

                        $quantidade_acumulada = $quantidade_acumulada - $quantidade_total;
                        
                        $porcentagem_final[$key]['percentual_sobre_quantidade_total'] = number_format($percentual_sobre_quantidade_total, 2);

                    }else{
                        $porcentagem_final[$key]['percentual_sobre_quantidade_total'] = 'N/A';
                    }
                }               
            }*/
        }
        $anos = array_unique($anos);
        
        return view('quadro-medalhas', ['porcentagem_final' => $porcentagem_final, 'anos' => $anos, 'ano_olimpico1' => $ano_olimpico1, 'ano_olimpico2' => $ano_olimpico2, 'tipo_medalha' => $tipo_medalha ]);
    }
}
