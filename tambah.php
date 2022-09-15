<?php
require 'functions.php';

if( isset($_POST["submit"]) ) {
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Provider</title>
</head>
<body>
    <h1>Tambahkan Data Provider</h1>
    <form action="" method="post">
        <ul>
            <p>
                <label for="provider_name">Provider Name : </label>
                <input type="text" name="provider_name" id="provider_name" required>
            </p>
            <p>
                <label for="customer_packet">Customer Packet : </label>
                <input type="text" name="customer_packet" id="customer_packet" required>
            </p>
            <p>
                <label for="description">Description : </label>
                <input type="text" name="description" id="description" required>
            </p>
            <p>
                <label for="price">Price : </label>
                <input type="text" name="price" id="price" required>
            </p>
            <p>
                <label for="active_on">Active on : </label>
                <input type="text" name="active_on" id="active_on" required>
            </p>
            <p>
                <button type="submit" name="submit">TAMBAH DATA!</button>
            </p>

    </form>
</body>
</html>
















































