<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Pengulangan dan Tabel Perkalian</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: yellow;
        }
        .genap {
            background-color: cyan;
        }
        .ganjil {
            background-color: yellow;
        }
    </style>
</head>
<body>

<h2>1. Menampilkan Bilangan Genap dari 1 sampai 10</h2>
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>

<h2>2. Tabel Perkalian 1 sampai 10</h2>
<table>
    <tr>
        <th>bilangan</th>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<th>$i</th>";
        }
        ?>
    </tr>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th>$i</th>";
        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;
            // jika hasil genap latar belakang cyan, jika ganjil kuning
            $class = ($hasil % 2 == 0) ? "genap" : "ganjil";
            echo "<td class='$class'>$hasil</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>