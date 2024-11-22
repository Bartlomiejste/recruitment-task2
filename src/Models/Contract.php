<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Contract
{
    public static function getContracts(?int $id = null, ?float $amount = null, string $sort = 'id'): array
    {
        $query = "SELECT * FROM contracts WHERE 1=1";

        $params = [];
        if ($id) {
            $query .= " AND id = :id";
            $params['id'] = $id;
        }

        if ($amount) {
            $query .= " AND kwota > :amount";
            $params['amount'] = $amount;
        }

        $query .= " ORDER BY " . $sort;

        $stmt = Database::connect()->prepare($query);
        $stmt->execute($params);

        return $stmt->fetchAll();
    }
}