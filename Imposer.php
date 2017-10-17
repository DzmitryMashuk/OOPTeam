<?php

declare(strict_types=1);

namespace OOP;

class Imposer extends Worker
{
    public function __construct(string $nameWorker, int $money, int $hour = 0)
    {
        $this->nameWorker = $nameWorker;
        $this->money = $money;
        $this->hour = $hour;
    }
}