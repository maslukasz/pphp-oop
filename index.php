<?php

require 'Klasy.php';

$klient = new Klient();
$konto = new Konto();

$klient->email = 'jan@wp.pl';

$konto->wplac(99.99);

?>

<p>E-mail: <?= $klient->email ?></p>
<p>Stan: <?= $konto->stan ?></p>