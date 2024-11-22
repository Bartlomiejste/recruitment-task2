<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contracts</title>
</head>

<body>
    <table width="95%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nazwa przedsiębiorcy</th>
                <th>Kwota</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contracts as $contract): ?>
            <tr>
                <td><?= htmlspecialchars($contract['id']) ?></td>
                <td><?= htmlspecialchars($contract['nazwa_przedsiebiorcy']) ?></td>
                <td><?= htmlspecialchars($contract['kwota']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>