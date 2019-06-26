<?php
   class Usuario{
    public $id;
    public $nome;
    public $email;
    public $senha;
   }
   
   class Bolao{
    public $id;
    public $usuario_id; // id do gerenciador do Bolão
    public $titulo;
    public $rodadaAtual = 0; // vai incrementar a cada rodada
    public $pontosResultado = 10;
    public $pontosExtras = 5;
    public $pontosTaxa = 5;
   }
   
   class Rodada{
    public $id;
    public $bolao_id;
    public $titulo;
    public $dataIni;
    public $dataFim;
   }

   class Partida{
    public $id;
    public $rodada_id;
    public $titulo;
    public $estadio;
    public $timeA;
    public $timeB;
    public $resultado; // (A,B,E) E = Empate
    public $placarTimeA; // resultado time A
    public $placarTimeB; // resultado time B
    public $data;
   }

   //relaciona o usuario que podem apostar no bolão
   class BolaoUsuario{
    public $bolao_id;
    public $usuario_id;
    public $pontos; // pontuação do usuario no bolão
   }

   class PartidaUsuario{
    public $partida_id;
    public $usuario_id;
    public $resultado; // (A,B,E) E = Empate
    public $placarTimeA; // placar time A
    public $placarTimeB; // placar time B
   }

// testes:
   // Gerenciador do Bolão
   $admin = new Usuario;
   $admin->id = 1;
   $admin->nome = "Admin";
   $admin->email = "admin@mail.com";
   $admin->senha = "123456";


   // Apostador do Bolão
   $apostador = new Usuario;
   $apostador->id = 2;
   $apostador->nome = "Apostador";
   $apostador->email = "apostador@mail.com";
   $apostador->senha = "123456";

   // Bolão
   $bolao = new Bolao; 
   $bolao->$id = 1;
   $bolao->$usuario_id = $admin->id;
   $bolao->$titulo = "Bolão 1";
   $bolao->$rodadaAtual = 0;
   $bolao->$pontosResultado = 10;
   $bolao->$pontosExtras = 5;
   $bolao->$pontosTaxa = 5;

   // Rodada Bolão
   $rodada = new Rodada;
   $rodada->id = 1;
   $rodada->bolao_id = $bolao_id;
   $rodada->titulo = "Brasil x Alemanha";
   $rodada->dataIni = "2019-06-26"; 
   $rodada->dataFim = "2019-06-28";

   //Partida
   $partida1 = new Partida;
   $partida1->id;
   $partida1->rodada_id;
   $partida1->titulo;
   $partida1->estadio;
   $partida1->timeA;
   $partida1->timeB;
   $partida1->resultado; // (A,B,E) E = Empate
   $partida1->placarTimeA; // resultado time A
   $partida1->placarTimeB; // resultado time B
   $partida1->data;