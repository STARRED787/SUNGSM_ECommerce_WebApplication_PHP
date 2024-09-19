<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//database connection
include('../include/connect.php');
include('../functions/common_function.php');
session_start();
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        referrerpolicy="no-referrer" />
    <!-- Corrected: Only one version of Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">

    <title>Confirm Payement</title>
</head>

<body>
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3 ">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="./images/payment-confirmed-icon-vector-40355337.jpg" width="30%"
                                style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                                alt="Sample photo">
                        </div>

                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Confirm Payement</h3>

                            <form class="px-md-2">

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" />
                                    <label class="form-label" for="form3Example1q">Invoice Number</label>
                                </div>


                                <div data-mdb-input-init class="form-outline mb-4">

                                    <input type="text" id="form3Example1q" class="form-control" />
                                    <label class="form-label" for="form3Example1q">Amount</label>
                                </div>

                                <div class="mb-4">
                                    <select class="form-select">
                                        <option value="1" disabled selected>Select a Payement Option</option>
                                        <option value="2">Paypal</option>
                                        <option value="3">Cash On Delevery</option>

                                    </select>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-success btn-lg mb-1 ">Confirm</button>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Corrected: Removed duplicate Bootstrap JS inclusion -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- jQuery (required for Toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
</body>

</html>