<?php

class Klient
{
    public string $imie;
    public string $nazwisko;
    public string $email;
    public string $haslo;
}

class Konto
{
    public int $numer;
    public string $typ;
    public float $stan;

    public function wplac($kwota)
    {
        $this->stan += $kwota;
        return $this->stan;
    }
}