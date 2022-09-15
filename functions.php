<?php

$conn = mysqli_connect("localhost", "root", "", "dbprovider");

function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data) {
    global $conn;
    
    $providername = htmlspecialchars($data["provider_name"]);
    $customerpacket = htmlspecialchars($data["customer_packet"]);
    $description = htmlspecialchars($data["description"]);
    $price = htmlspecialchars($data["price"]);
    $activeon = htmlspecialchars($data["active_on"]);
    
    $query = "INSERT INTO tbproviderinternet
                VALUES
            ('','$providername', '$customerpacket', '$description', '$price', '$activeon')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



function hapus($id) {
    global $conn;

    $query = "DELETE FROM tbproviderinternet WHERE id_provider = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;

    $id = $data["id_provider"];
    $provider_name = htmlspecialchars($data["provider_name"]);
    $customer_packet = htmlspecialchars($data["customer_packet"]);
    $description = htmlspecialchars($data["description"]);
    $price = htmlspecialchars($data["price"]);
    $active_on = htmlspecialchars($data["active_on"]);
    
    $query = "UPDATE tbproviderinternet SET 
                provider_name = '$provider_name',
                customer_packet = '$customer_packet',
                description = '$description',
                price = '$price',
                active_on = '$active_on'
              WHERE id_provider = $id ";
            
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query =" SELECT * FROM tbproviderinternet
                WHERE
                
                provider_name LIKE '%$keyword%' OR
                customer_packet LIKE '%$keyword%' OR
                description LIKE '%$keyword%' OR
                price LIKE '%$keyword%' OR
                active_on LIKE '%$keyword%'
                ";
    return query($query);
}
?>
