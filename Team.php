<?php

declare(strict_types=1);

namespace OOPTeam;

include_once("Worker.php");

class Team
{
    private $commandName;
    private $commandSalary = array();

    public function __construct(string $commandName)
    {
        $this->commandName = $commandName;
    }

    public function addWorker(Worker $worker)
    {
        $this->commandSalary[] = $worker->calculationSalary();
    }

    public function salaryCommand() : int
    {
        $salaryCommand = 0;

        for ($i = 0; $i < (count($this->commandSalary)); $i++)
        {
            $salaryCommand += $this->commandSalary[$i];
        }

        return $salaryCommand;
    }
}