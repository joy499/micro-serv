<?php
namespace MicroServ;

interface CalculatorServiceInterface
{
    public function add(int $a, int $b);

    public function minus(int $a, int $b);
}