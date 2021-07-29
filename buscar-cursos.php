<?php

require 'vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;
use \GuzzleHttp\Client;
use \RodrigoBispo\BuscadorDeCursos\Buscador;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

$quantidadeCursos = 0;
foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
    $quantidadeCursos++;
}

echo "$quantidadeCursos cursos sobre PHP oferecidos." . PHP_EOL;

echo teste() . PHP_EOL;