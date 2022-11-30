<?php
session_start();
if ($_SESSION['loggedIn'] == "Staff") {

    var_dump($_SESSION);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tripago CMS</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous" defer></script>
        <!-- bootstrap -->
    </head>

    <body>
        <h1>
            Tripago
        </h1>

        <nav class="container">
            <div class="row">
                <div class="col">
                    <form action="#" method="get">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="tab" value="hotelTab">Hotels</button>
                    </form>
                </div>
                <div class="col">
                    <form action="#" method="get">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="tab" value="customerTab">Customers</button>
                    </form>
                </div>
                <div class="col">
                    <form action="#" method="get">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="tab" value="staffTab">Staff</button>
                    </form>
                </div>
                <div class="col">
                    <form action="#" method="post">
                        <button class="btn btn-info btn-lg btn-block" type="submit" name="logout" value="true">Logout</button>
                    </form>
                </div>
            </div>
        </nav>

        <br>
        <hr><br>

        <section>
            <h2>Current Bookings:</h2>

            <div id="booking-table">
                <!-- Header Row -->
                <div class="row p-4">
                    <div class="col">
                        Order No:
                    </div>
                    <div class="col">
                        Customer
                    </div>
                    <div class="col">
                        Hotel
                    </div>
                    <div class="col">
                        Duration: 5 days
                    </div>
                    <div class="col">
                        Cost
                    </div>
                    <div class="col">

                    </div>
                    <div class="col">

                    </div>
                </div>
                <!-- Data -->
                <div class="row p-4">
                    <div class="col">
                        218456
                    </div>
                    <div class="col">
                        John
                    </div>
                    <div class="col">
                        Grand Hotel
                    </div>
                    <div class="col">
                        5 days
                    </div>
                    <div class="col">
                        800
                    </div>
                    <div class="col">
                        <button>
                            Generate Slip (csv)
                        </button>
                    </div>
                    <div class="col">
                        <button>
                            Cancel Order
                        </button>
                    </div>
                </div>
            </div>
        </section>

        </div>

        <br>
        <hr><br>

        <?php
        //  --- Tab / Page router ---

        if (isset($_GET['tab'])) {

            $tab = $_GET['tab'];

            switch ($tab) {
                case 'hotelTab':
                    echo "
                    <!-- hotels tab -->
                    <section>
                        <h2>
                            Hotels
                        </h2>
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas id nam sunt necessitatibus porro neque nostrum possimus eveniet. Nemo blanditiis consequuntur eos porro perspiciatis labore facilis reprehenderit est harum veritatis?
                            </p>
                        </div>
                        <br>
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas id nam sunt necessitatibus porro neque nostrum possimus eveniet. Nemo blanditiis consequuntur eos porro perspiciatis labore facilis reprehenderit est harum veritatis?
                            </p>
                        </div>
                    </section>                    
                    ";
                    break;

                case 'customerTab':
                    echo "
                    <!-- Customers tab -->
                    <section>
                        <h2>
                            Customers
                        </h2>
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas id nam sunt necessitatibus porro neque nostrum possimus eveniet. Nemo blanditiis consequuntur eos porro perspiciatis labore facilis reprehenderit est harum veritatis?
                            </p>
                        </div>
                        <br>
                        <div>
                            <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus sit quibusdam vel libero, velit exercitationem quidem sequi quae magni sed numquam cumque alias omnis eos obcaecati aliquid accusamus expedita est.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus sit quibusdam vel libero, velit exercitationem quidem sequi quae magni sed numquam cumque alias omnis eos obcaecati aliquid accusamus expedita est.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus sit quibusdam vel libero, velit exercitationem quidem sequi quae magni sed numquam cumque alias omnis eos obcaecati aliquid accusamus expedita est.
                            </p>
                        </div>
                    </section>                    
                    ";
                    break;

                case 'staffTab':
                    echo "
                    <!-- Staff tab -->
                    <section>
                        <h2>
                            Staff
                        </h2>
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas id nam sunt necessitatibus porro neque nostrum possimus eveniet. Nemo blanditiis consequuntur eos porro perspiciatis labore facilis reprehenderit est harum veritatis?
                            </p>
                            <ul>
                                <li>gkfjdhljreihjrtijhktrjh</li>
                                <li>gkfjdhljreihjrtijhktrjh</li>
                                <li>gkfjdhljreihjrtijhktrjh</li>
                                <li>gkfjdhljreihjrtijhktrjh</li>
                            </ul>
                        </div>
                        <br>
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas id nam sunt necessitatibus porro neque nostrum possimus eveniet. Nemo blanditiis consequuntur eos porro perspiciatis labore facilis reprehenderit est harum veritatis?
                            </p>
                        </div>
                    </section>                    
                    ";
                    break;

                default:
                    echo "Error 500; Server router error";
                    break;
            }
        }

        if (isset($_POST['logout'])) {

            setcookie (session_id(), "", time() - 3600);
            session_destroy();
            session_write_close();

            header("Location:./../../index.php");
        }
        ?>


        

    </body>

    </html>

<?php
} else {

    echo "Error 403: Unauthorized Access..";
}
?>