<?php
require_once __DIR__ . '/functions.php';
$pets = get_all_info();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals</title>
</head>
<style>
    body {
        margin-left: 20px;
        margin-right: 150px;
        padding: 0;
    }

    ul {
        list-style-type: none;
    }

    h2,
    .keyword {
        margin-left: 35px;
    }

    p {
        border-bottom: 1px solid black;
    }
</style>

<body>
    <div class="all_info">
        <h2>本日のご紹介ペット！</h2>
        <ul>
            <?php foreach ($pets as $pet) : ?>
                <li><?= h($pet['type']) . 'の' . h($pet['classification']) . 'ちゃん' ?></li>
                <li><?= h($pet['description']) ?></li>
                <li><?= h($pet['birthday']) . '生まれ' ?></li>
                <li><?= '出生地 ' . h($pet['birthplace']) ?></li>
                <p class="box"> </p>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>
