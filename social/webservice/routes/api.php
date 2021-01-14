<?php

use App\User;
use App\Conteudo;
use App\Comentario;



Route::post('/cadastro', "UsuarioController@cadastro");
Route::post('/login', "UsuarioController@login");
Route::middleware('auth:api')->put('/perfil', "UsuarioController@perfil");

Route::get('/testes', function(){
    $user = User::find(1);
    $user2 = user::find(2);
  
    /*
    $user->conteudos()->create([
       'titulo'=>'Conteúdo 3',
       'texto'=>"Aqui o texto",
       'imagem'=>'url da imagem',
       'link'=>'Link',
       'data'=>'2018-05-10' //date('Y-m-d')
    ]);
    return $user->conteudos;
    */

    /*
    // add amigos:
    // $user->amigos()->attach($user2->id);
    // $user->amigos()->detach($user2->id);
    $user->amigos()->toggle($user2->id);    
    return $user->amigos;
    */

      
    /*
    // add Curtidas:
    $conteudo = Conteudo::find(1);
    $user->curtidas()->toggle($conteudo->id);
    //return $conteudo->curtidas()->count();
    return $conteudo->curtidas;
    */


    /*
    // add Comentarios:
    $conteudo = Conteudo::find(1);
    $user->comentarios()->create([
        'conteudo_id'=>$conteudo->id,
        'texto'=>"Show de Bola",
        'data'=>date('Y-m-d') //date('Y-m-d')
    ]);
    $user2->comentarios()->create([
        'conteudo_id'=>$conteudo->id,
        'texto'=>"Não gostei",
        'data'=>date('Y-m-d') //date('Y-m-d')
    ]);
    return $conteudo->comentarios; 
    */
    
    



    
  
  
  
  
  });
    