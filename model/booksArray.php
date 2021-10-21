<?php

    $books = [];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sptvr19_mvc2";
    $charset = 'utf8';

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM books";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {
        while( $row = $result -> fetch_assoc() ) {
            $books[] = array(
                    "bookname" => $row["BOOKNAME"],
                    "author" => $row["AUTHOR"],
                    "price" => $row["PRICE"],
                    "description" => $row["DESCRIPTION"],
                    "image" => $row["IMAGE"]
            );
        }
    } else {
        echo "0 results";
    }

    $conn -> close();

    return $books;

?>