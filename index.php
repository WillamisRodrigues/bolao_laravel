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