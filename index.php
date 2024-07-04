<?php

require 'Klasy.php';

$klient = new Klient();
$konto = new Konto();

$klient->email = 'jan@wp.pl';
$konto->stan = 184.29;

?>

<p>E-mail: <?= $klient->email ?></p>
<p>Stan: <?= $konto->stan ?></p>