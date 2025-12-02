<?php
require 'connection_db.php';
require "is-logged.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/css/main.css">
    <title>Reservations</title>
</head>
<body>
    <?php
    $currentPage ="reservationsAdministration";
    include 'leftside.php';
    ?>
    <table class="reservations-table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Date</td>
                <td>Time</td>
                <td id="numberOfPersons">Number of Persons</td>
                <td>Client Name</td>
                <td>Email</td>
                <td>Phone Number</td>
                <td>Observations</td>
                <td>Status</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../admin/js/admin-script.js"></script>
</body>
</html>