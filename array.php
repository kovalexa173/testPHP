<?php
$products = [

    'SKLAD1' => [
 
        'EDA' => [
 
            'TOVAR1' => [
 
                'NAME' => '1',
 
                'PRICE' => 19
 
            ],
 
            'TOVAR2' => [
 
                'NAME' => '2',
 
                'PRICE' => 20
 
            ],
 
 
        ],
 
        'NAPITKI' => [
 
            'TOVAR55' => [
 
                'NAME' => '3',
 
                'PRICE' => 30
 
            ],
 
            'TOVAR54' => [
 
                'NAME' => '4',
 
                'PRICE' => 27
 
            ],
 
 
        ],
 
 
    ],
 
    'SKLAD2' => [
 
        'EDA' => [
 
            'TOVAR66' => [
 
                'NAME' => '5',
 
                'PRICE' => 60
 
            ],
 
            'TOVAR67' => [
 
                'NAME' => '6',
 
                'PRICE' => 25
 
            ],
 
 
        ],
 
        'NAPITKI' => [
 
            'TOVAR77' => [
 
                'NAME' => '7',
 
                'PRICE' => 70
 
            ],
 
            'TOVAR78' => [
 
                'NAME' => '8',
 
                'PRICE' => 60
 
            ],
 
 
        ],
 
 
    ],
 
 
];

foreach($products as &$sclad){
    foreach($sclad as &$eda){
        usort($eda, function ($item1, $item2) {
            if ($item1['PRICE'] == $item2['PRICE']) return 0;
            return $item1['PRICE'] < $item2['PRICE'] ? -1 : 1;
        });
    };
};
print_r($products);
?>