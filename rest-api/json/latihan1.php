<?php

    // $mahasiswa = [
    //     [
    //         "nama" => "Dae Gi Hong",
    //         "nrp" => "173040084",
    //         "email" => "173040084@mail.unpas.ac.id"
    //     ],
    //     [
    //         "nama" => "Fuu",
    //         "nrp" => "123456789",
    //         "email" => "Fuu@mail.com"
    //     ]
    // ];

    $dbh = new PDO('mysql:host=localhost;dbname=rekwebkelas', 'root', '');
    $db = $dbh->prepare('SELECT * FROM students');
    $db->execute();
    $mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

    $data = json_encode($mahasiswa);
    echo $data;

?>