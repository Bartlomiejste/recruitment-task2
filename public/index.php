<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\ContractController;

$queryParams = $_GET;

$controller = new ContractController();
$controller->index($queryParams);