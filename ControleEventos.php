<?php


class ControleEventos
{

    public $nome;
    public $local;
    public $data;
    public $inicio;
    public $fim;


    public function __construct($nome, $local, $data, $inicio, $fim)
    {

        $this->nome = $nome;
        $this->local = $local;
        $this->data = $data;
        $this->inicio = $inicio;
        $this->fim = $fim;
    }
}



class MuitasPalestras extends ControleEventos
{


    public $nome;
    public $data;
    public $turno;
    public $duracao;
    public $tema;
    public $sala;


    public function __construct($nome, $data, $turno, $duracao, $tema, $sala)
    {

        $this->nome = $nome;
        $this->data = $data;
        $this->turno = $turno;
        $this->duracao = $duracao;
        $this->tema = $tema;
        $this->sala  = $sala;
    }



    // cada palestrante possui um ministrante.


    public function getPalestrante($nome)
    {
        return $this->nome = $nome;
    }



    // um participante, pode se insscrecer no evento
    public function setEvento($nome, $fone, $endereco, $email)
    {

        echo "Informe seu nome  {$this->nome}, seu telefone {$this->fone}";
    }
}


$event = new ControleEventos;
$event->nome = 'Pedro victor';
$event->local = 'Centro de eventos';
$event->data = 'Dia 26/02';
$event->inicio = 'Manhã';
$event->fim = 'Noite';

echo "<pre>";
print $event;
