<?php
session_start();

include_once __DIR__ . "/../includes/hotelDummyData.inc.php";
include_once __DIR__ . "/../includes/userDummyData.php";

if ( ($_SESSION['loggedIn'] == "Customer" || $_SESSION['loggedIn'] == "New Customer") && isset( $_GET['book'] ) ) {

    var_dump($_SESSION);
    echo "<br>";
    var_dump($_GET['hotelSelect']);

    $bookedHotelId = ($_GET['hotelSelect']); // get ID of selected hotel from submitted data
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tripago | Checkout</title>
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
            Confirm Booking:
        </h1>

        <br>
        <hr>
        <br>

        <section id="hotel-list">
            <?php
            foreach ($hotelDummyData as $hotel) {

                if ($hotel[0] == $bookedHotelId) {
                    echo '
                        <div class="card m-4" style="width: 30vw;">

                            <div class="card-body">
                                <h5 class="card-text">
                                    Customer: '. $dummyUser[0] .'<br><br>
                                    Email Address: '. $dummyUser[1] .'
                                </h5>
                            </div>
                            <hr>
                            <br>
                            <img class="card-img-top" src="'. $hotel[6] .'" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">'. $hotel[1] .'</h5>
                                <p class="card-text">
                                    <ul>
                                    <li> Wifi Connection: '. $hotel[5]['Wifi Connection'] .'</li>
                                    <li> Catering: '. $hotel[5]['Catering'] .'</li>
                                    <li> Swimming Pool: '. $hotel[5]['Swimming Pool'] .'</li>
                                    <li> Parking: '. $hotel[5]['Parking'] .'</li>
                                    </ul>    
                                </p>
                                <hr>
                                <h5 class="card-text">
                                    <b>Total cost of stay: R'. $hotel[2] * $_GET['numDays'] .'</b>
                                </h5>
                            </div>
                        </div>
                    ';   
                }
            }
            ?>
        </section>

        <br>
        <hr>
        <br>

        <nav class="container">
            <div class="row">
                <div class="col">
                    <form action="./index.php" method="get">
                        <button class="btn btn-danger btn-lg btn-block" type="submit" name="changeSelection" value="true">Change Hotel</button>
                    </form>
                </div>
                <div class="col">
                    <form action="#" method="get">

                    </form>
                </div>
                <div class="col">
                    <form action="./thank.php" method="get">
                        <button class="btn btn-danger btn-lg btn-block" type="submit" name="checkout" value="true">Book Selected Hotel</button>
                    </form>
                </div>
            </div>
        </nav>

    </body>

    </html>

<?php
} else {

    echo "Error 403: Unauthorized Access..";
}
?>