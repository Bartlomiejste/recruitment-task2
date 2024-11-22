<?php

namespace App\Controllers;

use App\Models\Contract;

class ContractController
{
    public function index(array $queryParams): void
    {
        $id = $queryParams['i'] ?? null;
        $amount = $queryParams['amount'] ?? null;
        $sort = $queryParams['sort'] ?? 'id';

        $contracts = Contract::getContracts($id, $amount, $sort);

        include __DIR__ . '/../Views/contracts.php';
    }
}