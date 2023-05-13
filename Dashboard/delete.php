<?php

    include 'conn.php';

    $id = $_GET['id'];

    $q = " DELETE FROM `contact_form` WHERE id = $id ";

    mysqli_query($conn, $q);

    header('location:contact_detail.php');

?>