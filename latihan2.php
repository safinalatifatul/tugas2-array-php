<?php
    $d = [
        [
            "nama" => "Asyila", 
            "kelas" => "XII OTKP 1",
            "alamat" => "Jakarta",
            "Nisn" => "101918",
            "No WhatsApp" => "087652432134786",
            "hobi" => "membaca",
            "cita" => "dokter"
        ],
        [
            "nama" => "Arena", 
            "kelas" => "XI RPL 1",
            "alamat" => "Jakarta",
            "Nisn" => "101918",
            "No WhatsApp" => "087652432134786",
            "hobi" => "menulis",
            "cita" => "dokter"
        ],
        [
            "nama" => "Asyila", 
            "kelas" => "XI BR 1",
            "alamat" => "Bandung",
            "Nisn" => "101918",
            "No WhatsApp" => "087652432134786",
            "hobi" => "membaca",
            "cita" => "dokter"
        ],
        [
            "nama" => "Fasya", 
            "kelas" => "X RPL 2",
            "alamat" => "Jakarta",
            "Nisn" => "101918",
            "No WhatsApp" => "087652432134786",
            "hobi" => "membaca",
            "cita" => "pilot"
        ],
        [
            "nama" => "Faresya", 
            "kelas" =>"XII RPL 1",
            "alamat" => "Jakarta",
            "Nisn" => "101918",
            "No WhatsApp" => "087652432134786",
            "hobi" => "menulis",
            "cita" => "perawat"
        ],
        [
            "nama" => "farisa", 
            "kelas" => "XII OTKP 1",
            "alamat" => "Jakarta",
            "Nisn" => "101918",
            "No WhatsApp" => "087652432134786",
            "hobi" => "ngoding",
            "cita" => "front end"
        ],
        [
            "nama" => "Mikaila", 
            "kelas" => "XI RPL 1",
            "alamat" => "Jakarta",
            "Nisn" => "101918",
            "No WhatsApp" => "087652432134786",
            "hobi" => "traveling",
            "cita" => "pendaki"
        ],
        [
            "nama" => "Marissa", 
            "kelas" => "XII OTKP 1",
            "alamat" => "Jakarta",
            "Nisn" => "101918",
            "No WhatsApp" => "087652432134786",
            "hobi" => "mengaji",
            "cita" => "ustadzah"
        ],
        [
            "nama" => "Asyila", 
            "kelas" => "XII OTKP 1",
            "alamat" => "Jakarta",
            "Nisn" => "101918",
            "No WhatsApp" => "087652432134786",
            "hobi" => "membaca",
            "cita" => "dokter"
        ],
        [
            "nama" => "Asyila", 
            "kelas" => "XII OTKP 1",
            "alamat" => "Jakarta",
            "Nisn" => "101918",
            "No WhatsApp" => "087652432134786",
            "hobi" => "membaca",
            "cita" => "dokter"
        ]

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border= "2" cellpadding= "10">

    <h2>TABLE PEMINATAN SISWA</h2>
        <tr>
            <td>Nama lengkap</td>
            <td>Kelas</td>
            <td>Alamat</td>
            <td>Nisn</td>
            <td>Nomer WhatsApp</td>
            <td>Hobi</td>
            <td>Cita-Cita</td>
        </tr>      
        <tr>
        <?php foreach ($d as $dt) : ?>        
                <td><?= $dt ["nama"] ?> </td>
                <td><?= $dt ["kelas"] ?> </td>
                <td><?= $dt ["alamat"] ?> </td>
                <td><?= $dt ["Nisn"] ?> </td>
                <td><?= $dt ["No WhatsApp"] ?> </td>
                <td><?= $dt ["hobi"] ?> </td>
                <td><?= $dt ["cita"] ?> </td>

        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>