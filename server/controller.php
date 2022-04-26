<?php
include __DIR__ .  '/data.php';

    header('Content-Type: application/json');
    echo json_encode(
        [
            'results'=> $cards,
            'lenght' => count($cards)
        ]
    )
?>