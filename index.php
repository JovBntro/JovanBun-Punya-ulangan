<?php
require 'functions.php';
$provider = query("SELECT * FROM tbproviderinternet");

if ( isset($_POST["cari"]) ) {
    $provider = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Provider Internet</title>
</head>
<body>

<h1>Daftar Provider Internet</h1>

<a href="tambah.php">Tambah Data Provider</a>
<br><br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>

</form>
<br>

<table border="1" cellpading="10" cellspacing="0">
    <tr>
        <th>Action</th>
        <th>ID Provider</th>
        <th>Provider Name</th>
        <th>Customer Packet</th>
        <th>Description</th>
        <th>Price</th>
        <th>Active On</th>
    </tr>

    <?php $i=1; ?>
    <?php foreach ($provider as $row) : ?>
        <tr>
            <td>
                <a href="ubah.php?id_provider=<?= $row["id_provider"]; ?>">ubah</a> | 
                <a href="hapus.php?id_provider=<?= $row["id_provider"]; ?>" onclick="return confirm('Apakah anda yakin?');">hapus</a>
            </td>
            <td><?= $i; ?></td>
            <td><?= $row["provider_name"]; ?></td>
            <td><?= $row["customer_packet"]; ?></td>
            <td><?= $row["description"]; ?></td>
            <td><?= $row["price"]; ?></td>
            <td><?= $row["active_on"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach ?>
</table>
    
</body>
</html>
