<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QuadroMedalhas;

class QuadroMedalhasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //2012
        
        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Estados Unidos da América';
        $quadro_medalhas->ouro = 48;
        $quadro_medalhas->prata = 26;
        $quadro_medalhas->bronze = 30;
        $quadro_medalhas->total = 104;
        $quadro_medalhas->ano = 2012;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'República Popular da China';
        $quadro_medalhas->ouro = 39;
        $quadro_medalhas->prata = 31;
        $quadro_medalhas->bronze = 22;
        $quadro_medalhas->total = 92;
        $quadro_medalhas->ano = 2012;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Grã Bretanha';
        $quadro_medalhas->ouro = 29;
        $quadro_medalhas->prata = 18;
        $quadro_medalhas->bronze = 18;
        $quadro_medalhas->total = 65;
        $quadro_medalhas->ano = 2012;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Federação Russa';
        $quadro_medalhas->ouro = 18;
        $quadro_medalhas->prata = 21;
        $quadro_medalhas->bronze = 26;
        $quadro_medalhas->total = 65;
        $quadro_medalhas->ano = 2012;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Alemanha';
        $quadro_medalhas->ouro = 11;
        $quadro_medalhas->prata = 20;
        $quadro_medalhas->bronze = 13;
        $quadro_medalhas->total = 44;
        $quadro_medalhas->ano = 2012;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Japão';
        $quadro_medalhas->ouro = 7;
        $quadro_medalhas->prata = 14;
        $quadro_medalhas->bronze = 17;
        $quadro_medalhas->total = 38;
        $quadro_medalhas->ano = 2012;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'França';
        $quadro_medalhas->ouro = 11;
        $quadro_medalhas->prata = 11;
        $quadro_medalhas->bronze = 13;
        $quadro_medalhas->total = 35;
        $quadro_medalhas->ano = 2012;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Austrália';
        $quadro_medalhas->ouro = 8;
        $quadro_medalhas->prata = 15;
        $quadro_medalhas->bronze = 12;
        $quadro_medalhas->total = 35;
        $quadro_medalhas->ano = 2012;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'República da Coreia';
        $quadro_medalhas->ouro = 13;
        $quadro_medalhas->prata = 9;
        $quadro_medalhas->bronze = 9;
        $quadro_medalhas->total = 31;
        $quadro_medalhas->ano = 2012;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Itália';
        $quadro_medalhas->ouro = 8;
        $quadro_medalhas->prata = 9;
        $quadro_medalhas->bronze = 11;
        $quadro_medalhas->total = 28;
        $quadro_medalhas->ano = 2012;
        $quadro_medalhas->save();


        //2016

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Estados Unidos da América';
        $quadro_medalhas->ouro = 46;
        $quadro_medalhas->prata = 37;
        $quadro_medalhas->bronze = 38;
        $quadro_medalhas->total = 121;
        $quadro_medalhas->ano = 2016;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'República Popular da China';
        $quadro_medalhas->ouro = 26;
        $quadro_medalhas->prata = 18;
        $quadro_medalhas->bronze = 26;
        $quadro_medalhas->total = 70;
        $quadro_medalhas->ano = 2016;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Grã Bretanha';
        $quadro_medalhas->ouro = 27;
        $quadro_medalhas->prata = 23;
        $quadro_medalhas->bronze = 17;
        $quadro_medalhas->total = 67;
        $quadro_medalhas->ano = 2016;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Federação Russa';
        $quadro_medalhas->ouro = 19;
        $quadro_medalhas->prata = 17;
        $quadro_medalhas->bronze = 20;
        $quadro_medalhas->total = 56;
        $quadro_medalhas->ano = 2016;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Alemanha';
        $quadro_medalhas->ouro = 17;
        $quadro_medalhas->prata = 10;
        $quadro_medalhas->bronze = 15;
        $quadro_medalhas->total = 42;
        $quadro_medalhas->ano = 2016;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'França';
        $quadro_medalhas->ouro = 10;
        $quadro_medalhas->prata = 18;
        $quadro_medalhas->bronze = 14;
        $quadro_medalhas->total = 42;
        $quadro_medalhas->ano = 2016;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Japão';
        $quadro_medalhas->ouro = 12;
        $quadro_medalhas->prata = 8;
        $quadro_medalhas->bronze = 21;
        $quadro_medalhas->total = 41;
        $quadro_medalhas->ano = 2016;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Austrália';
        $quadro_medalhas->ouro = 8;
        $quadro_medalhas->prata = 11;
        $quadro_medalhas->bronze = 10;
        $quadro_medalhas->total = 29;
        $quadro_medalhas->ano = 2016;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Itália';
        $quadro_medalhas->ouro = 8;
        $quadro_medalhas->prata = 12;
        $quadro_medalhas->bronze = 8;
        $quadro_medalhas->total = 28;
        $quadro_medalhas->ano = 2016;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Canadá';
        $quadro_medalhas->ouro = 4;
        $quadro_medalhas->prata = 3;
        $quadro_medalhas->bronze = 15;
        $quadro_medalhas->total = 22;
        $quadro_medalhas->ano = 2016;
        $quadro_medalhas->save();


        //2020
        
        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Estados Unidos da América';
        $quadro_medalhas->ouro = 39;
        $quadro_medalhas->prata = 41;
        $quadro_medalhas->bronze = 33;
        $quadro_medalhas->total = 113;
        $quadro_medalhas->ano = 2020;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'República Popular da China';
        $quadro_medalhas->ouro = 38;
        $quadro_medalhas->prata = 32;
        $quadro_medalhas->bronze = 19;
        $quadro_medalhas->total = 89;
        $quadro_medalhas->ano = 2020;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'ROC';
        $quadro_medalhas->ouro = 20;
        $quadro_medalhas->prata = 28;
        $quadro_medalhas->bronze = 23;
        $quadro_medalhas->total = 71;
        $quadro_medalhas->ano = 2020;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Grã Bretanha';
        $quadro_medalhas->ouro = 22;
        $quadro_medalhas->prata = 20;
        $quadro_medalhas->bronze = 22;
        $quadro_medalhas->total = 66;
        $quadro_medalhas->ano = 2020;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Japão';
        $quadro_medalhas->ouro = 27;
        $quadro_medalhas->prata = 14;
        $quadro_medalhas->bronze = 17;
        $quadro_medalhas->total = 58;
        $quadro_medalhas->ano = 2020;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Austrália';
        $quadro_medalhas->ouro = 17;
        $quadro_medalhas->prata = 7;
        $quadro_medalhas->bronze = 22;
        $quadro_medalhas->total = 46;
        $quadro_medalhas->ano = 2020;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Itália';
        $quadro_medalhas->ouro = 10;
        $quadro_medalhas->prata = 10;
        $quadro_medalhas->bronze = 20;
        $quadro_medalhas->total = 40;
        $quadro_medalhas->ano = 2020;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Alemanha';
        $quadro_medalhas->ouro = 10;
        $quadro_medalhas->prata = 11;
        $quadro_medalhas->bronze = 16;
        $quadro_medalhas->total = 37;
        $quadro_medalhas->ano = 2020;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'Países Baixos';
        $quadro_medalhas->ouro = 10;
        $quadro_medalhas->prata = 12;
        $quadro_medalhas->bronze = 14;
        $quadro_medalhas->total = 36;
        $quadro_medalhas->ano = 2020;
        $quadro_medalhas->save();

        $quadro_medalhas = new QuadroMedalhas();
        $quadro_medalhas->equipe = 'França';
        $quadro_medalhas->ouro = 10;
        $quadro_medalhas->prata = 12;
        $quadro_medalhas->bronze = 11;
        $quadro_medalhas->total = 33;
        $quadro_medalhas->ano = 2020;
        $quadro_medalhas->save();
    }
}
