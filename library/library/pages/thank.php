<?php
session_start();

include_once __DIR__ . "/../includes/hotelDummyData.inc.php";

if ($_SESSION['loggedIn'] == "Customer" || $_SESSION['loggedIn'] == "New Customer") {

    var_dump($_SESSION);

    echo "<br>";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tripago | Book</title>
        <style>
            #hotel-list {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
            }
        </style>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous" defer></script>
        <!-- bootstrap -->
    </head>

    <body>

        <h1>
            Your booking is complete!
        </h1>
        <h2>
            Congratulations on completing your booking and moving one step closer to your ultimate getaway.
            <br>
            Thank you again for using our service. 
        </h2>

    </body>

    <?php

        setcookie(session_id(), "", time() - 3600);
        session_destroy();
        session_write_close();
                
        header('Refresh: 3; url=../index.php');
    ?>

    </html>

<?php
} else {

    echo "Error 403: Unauthorized Access..";
}
?>