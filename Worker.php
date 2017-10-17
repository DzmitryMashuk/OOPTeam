<?php

declare(strict_types=1);

namespace OOPTeam;

abstract class Worker
{
    protected $nameWorker;
    protected $money;
    protected $hour;

    protected function calculationFixedSalary(int $money) : int
    {
        return $money;
    }

    protected function calculationHourlySalary(int $money, int $countHour) : int
    {
        return $countHour * $money;
    }

    public function calculationSalary() : int
    {
        if ($this->hour === 0)
        {
            return $this->calculationFixedSalary($this->money);
        }
        else
        {
            return $this->calculationHourlySalary($this->money, $this->hour);
        }
    }
}
