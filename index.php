<?php
$vid = 0;
$heh = [];
$vardai = ["Danielius", "Matas", "Edgaras", "Mantas", "Šarunas", "Vaidotas", "Giedrius", "Aidas", "Andrius", "Laurynas"];
$pavardes = ["Danilauskas", "Skriebys", "Karalius", "Baronas", "Petrauskas", "Vienratis", "Gaidyla", "Centralaitis",
    "Maksimumas", "Sliopaitis"];
$klase = [
    "Klase" => "5b",
    "Kodas" => rand(1, 9999),
    "Vardas" => strtoupper($vardai[rand(0, 9)]),
    "Pavarde" => strtoupper($pavardes[rand(0, 9)]),
    "Duomenu formatavimo data" => strftime(date("Y F jS")),
    "Kontroliniu darbu ivertinimai" => [
        "Matematika" => 5,
        "Informacines technologijos" => 9,
        "Anglu kalba" => 10,
    ],
];

?>
<head>
    <style>
        table{
            width: 100%;
            overflow-x:auto;
            background-color: #152235;
            color:white;
        }
        table, th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
        <table>
            <tr>
                <th>Klase</th>
                <th>Kodas</th>
                <th>Vardas</th>
                <th>Pavarde</th>
                <th>Kontroliniu darbu vidurkis</th>
                <th>Duomenu formavimo data</th>
            </tr>
            <?
                $count = count($klase);
                for($i = 0; $i < 10; $i++){
                    echo "<tr>";
                    echo "<th>".$klase["Klase"]."</th>";
                    echo "<th>".$klase["Kodas"]."</th>";
                    echo "<th>".$klase["Vardas"]."</th>";
                    echo "<th>".$klase["Pavarde"]."</th>";
                    foreach ($klase["Kontroliniu darbu ivertinimai"] as $g => $paz){
                        $vid = $vid + $paz;
                    }
                    $vid = $vid / sizeof($klase['Kontroliniu darbu ivertinimai']);
                    echo "<th>".round($vid)."</th>";
                    echo "<th>".$klase["Duomenu formatavimo data"]."</th>";
                    $klase["Kodas"] = rand(1, 9999);
                    $klase["Vardas"] = strtoupper($vardai[rand(0, 9)]);
                    $klase["Pavarde"] = strtoupper($pavardes[rand(0, 9)]);
                    // Pakeiciai kitu mokiniu pazymiu i random pazymius
                    $klase["Kontroliniu darbu ivertinimai"]["Matematika"] = rand(1, 10);
                    $klase["Kontroliniu darbu ivertinimai"]["Informacines technologijos"] = rand(1, 10);
                    $klase["Kontroliniu darbu ivertinimai"]["Anglu kalba"] = rand(1, 10);
                    $vid = 0;
                }
            ?>
        </table>
</body>
