<?php
$data = file_get_contents('coba.json');
$test = json_decode($data, true);

// var_dump($test);
echo $test[0][0][
     'nama'
]."<br>";
echo $test[0][0][
     'tempat_lahir'
]."<br>";