<?php
// $test =
//      [
//           [
//                "nama" => "Fitra Nurakbar",
//                "tempat_lahir" => "Ciamis",
//                "tanggal_lahir" => 6,
//                "bulan_lahir" => "December",
//                "tahun_lahir" => 2022,
//                "status" => false
//           ],
//           [
//                "nama" => "Fitra Nurakbar",
//                "tempat_lahir" => "Ciamis",
//                "tanggal_lahir" => 6,
//                "bulan_lahir" => "December",
//                "tahun_lahir" => 2022,
//                "status" => false
//           ]
//      ];

$dbh = new PDO ('mysql:host=localhost;dbname=rest_api', 'udacoding', '123123');
$db = $dbh->prepare('SELECT * FROM restapi');
$db->execute();
$test = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($test);
echo $data;
