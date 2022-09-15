<?php
require 'functions.php';

$id = $_GET["id_provider"];

$provider = query("SELECT * FROM tbproviderinternet WHERE id_provider = $id")[0];

if( isset($_POST["submit"]) ) {
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
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
    <title>Ubah Data</title>
</head>
<body>
    <h1>Ubah Data Provider</h1>
    <form action="" method="post">
    <input type="hidden" name="id_provider" value="<?= $provider["id_provider"]; ?>">
        <ul>
            <p>
                <label for="provider_name">Provider Name : </label>
                <input type="text" name="provider_name" id="provider_name" required value ="<?= $provider["provider_name"]; ?>">
            </p>
            <p>
                <label for="customer_packet">Customer Packet : </label>
                <input type="text" name="customer_packet" id="customer_packet" required value ="<?= $provider["customer_packet"]; ?>">
            </p>
            <p>
                <label for="description">Description : </label>
                <input type="text" name="description" id="description" required value ="<?= $provider["description"]; ?>">
            </p>
            <p>
                <label for="price">Price : </label>
                <input type="text" name="price" id="price" required value ="<?= $provider["price"]; ?>">
            </p>
            <p>
                <label for="active_on">Active on : </label>
                <input type="text" name="active_on" id="active_on" required value ="<?= $provider["active_on"]; ?>">
            </p>
            <p>
                <button type="submit" name="submit">TAMBAH DATA!</button>
            </p>

    </form>

</body>
</html>