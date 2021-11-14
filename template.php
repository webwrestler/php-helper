<?php declare(strict_types=1);

require_once("vendor/autoload.php");

use App\PHPHelper;

$arr = [
    'name' => [
        'first' => 10,
        'second' => 20,
        'address' => [
            'file' => 'file://file-otus.pdf',
            'subway' => [
                'file' => 'file://file-otus.pdf',
            ],
        ]
    ],
];


$result = PHPHelper::getValueByKey('file', $arr);

var_dump($result);

