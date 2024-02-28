<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SeriesController{

   public function index(Request $request){

      $dado = 2024;

      $series = [
         'Pusisher',
         'The Last of US',
         'Lost',
         'Grey\'s Anatomy',
         'Dado[id]: '.$dado
      ];
      
      /* compact('series');         
      |  |_> faz a mesma coisa que isso aqui: [
      |       'series' => $series
      |      ]
      |  do exemplo a baixo.
      | -------------------------------------------------------------------------
      |  OU
      |  Aqui ele gera a pagina da nossa view(lista-series) e importa a Array($series) */
      /* return view('lista-series', [
                        'series' => $series
                 ]); */
      //ao inves de ser series/index é series.index
      return view('series.index')->with('series', $series);
                 
   }


   //action --> seguindo os padrões laravel
   public function ExampleIndexType1(Request $request){
    

    /* -------------------------------------------------------------------------
    | REQUEST(Requisição) -> Ela exibe um conteúdo como resposta HTTP.
    | --------------------------------------------------------------------------
    | http://127.0.0.1:8000/series?id=2024
    | $dado = $request->url(); //retorna a url
    | -------------------------------------------------------------------------- 
    | $dado = $request->method(); //retorna o tipo de metodo usado na requisição, la na Route mostra o tipo
    | http://127.0.0.1:8000/series?id=2024
    | --------------------------------------------------------------------------
    | $dado = $request->get('id');
    */

    /* ------------------------------------------------------------------------- 
    | RESPONSE(Resposta) -> Ela retorna um objeto do tipo Response com o corpo, status e cabeçalhos.
    | Estes dois fazem a mesma coisa
    | --------------------------------------------------------------------------
    | return response('', 302, ['Location' => 'https://google.com']);
    | OU
    | return redirect('https://google.com');
    |*/

    $dado = 2024;

    $series = [
       'Pusisher',
       'Lost',
       'Grey\'s Anatomy',
       'Dado[id]: '.$dado
    ];
    //Aqui so vai retornar os valores da Array - Estilo JSON
    /* return [
       'Pusisher',
       'Lost',
       'Grey\'s Anatomy'
    ]; */

    $html = '<ul>';
    foreach($series as $serie){
        $html .= "<li>$serie</li>";
    }
    $html .= '</ul>';

    //echo $html; //pode usar, mas não recomendado por não ser uma boa pratica
    return $html;
   }
}
