<?php

// if (($_SERVER['REQUEST_METHOD'] ?? '') != 'POST') {
//     header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed");
//     exit;
// }

try {
    $_POST = json_decode( //super global -> function call
                file_get_contents('php://input'), //PHP getting contents of json from HTTP request
                true, //returning file as an array instead of obj
                2, //get thru second level
                JSON_THROW_ON_ERROR //flag for error from passing json; no error default; throws to 16
            );
} catch (Exception $e) { //runs if there is an error 8-14
    header($_SERVER["SERVER_PROTOCOL"] . " 400 Bad Request"); //modifies response; error if client generates a bad request
    // print_r($_POST); -debugging by printing the request
    // echo file_get_contents('php://input');
    exit;
}

require("class/DbConnection.php");

// Step 0: Validate the incoming data
// This code doesn't do that, but should ...
// For example, if the date is empty or bad, this insert fails.

// Step 1: Get a datase connection from our helper class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
// Note the use of parameterized statements to avoid injection
$stmt = $db->prepare( //variable calling PDO function for database object
  'INSERT INTO offer (bookId, bookTitle, msrp, usedPrice, publishedDate, rating)
  VALUES (?, ?, ?, ?, ?, ?)'
);

$stmt->execute([
  $_POST['bookId'],
  $_POST['bookTitle'],
  $_POST['msrp'],
  $_POST['usedPrice'],
  $_POST['publishedDate'],
  $_POST['rating']
]);

// Get auto-generated PK from DB
// https://www.php.net/manual/en/pdo.lastinsertid.php
// $pk = $db->lastInsertId();  

// Step 4: Output
// Here, instead of giving output, I'm redirecting to the SELECT API,
// just in case the data changed by entering it
header('HTTP/1.1 303 See Other'); //sending a 303 reponse code 'go somewhere else for the rest of the answer using a GET'
header('Location: ../offer/?student=' . $_POST['bookId']); //GET points to offer api