<?php

declare(strict_types=1);

namespace OOP;

include_once("Worker.php");
include_once("Developer.php");
include_once("Imposer.php");
include_once("Designer.php");
include_once("Team.php");

$teamX = new Team('X');
$teamX->addWorker(new Designer('designerName', 3000));
$teamX->addWorker(new Developer('seniorDeveloperName', 10 , 60));
$teamX->addWorker(new Developer('middleDeveloper1Name', 1000));
$teamX->addWorker(new Developer('middleDeveloper2Name', 1000));
$teamX->addWorker(new Imposer('imposerName', 5, 120));
echo 'Salary command X = ' . $teamX->salaryCommand();