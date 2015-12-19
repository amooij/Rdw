<?php

include(__DIR__.'/vendor/autoload.php');

$kentekenRepository = new Nettob\Component\Rdw\Repository\KentekenRepository();
$assenRepository = new Nettob\Component\Rdw\Repository\AssenRepository();
$brandstofRepository = new Nettob\Component\Rdw\Repository\BrandstofRepository();
$carosserieRepository = new Nettob\Component\Rdw\Repository\CarrosserieRepository();
$carosserieSpecifiekRepository = new Nettob\Component\Rdw\Repository\CarrosserieSpecifiekRepository();
$voertuigklasseRepository = new Nettob\Component\Rdw\Repository\VoertuigklasseRepository();

$kenteken = $kentekenRepository->findOneBy('kenteken', '53SRVX');
echo '<pre>';
var_dump($kenteken);
echo '</pre>';

$assen = $assenRepository->findOneBy('kenteken', '53SRVX');
echo '<pre>';
var_dump($assen);
echo '</pre>';

$assen = $brandstofRepository->findOneBy('kenteken', '53SRVX');
echo '<pre>';
var_dump($assen);
echo '</pre>';

$assen = $carosserieRepository->findOneBy('kenteken', '53SRVX');
echo '<pre>';
var_dump($assen);
echo '</pre>';

$assen = $carosserieSpecifiekRepository->findOneBy('kenteken', '53SRVX');
echo '<pre>';
var_dump($assen);
echo '</pre>';

$assen = $voertuigklasseRepository->findOneBy('kenteken', '53SRVX');
echo '<pre>';
var_dump($assen);
echo '</pre>';