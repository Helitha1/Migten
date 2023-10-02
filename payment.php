<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>PAYMENT | </title>
    <link rel="stylesheet" href="style.css">

</head>

<body class="payment-body">
    <?php include("header.php") ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-9 col-lg-9 mx-auto">
                <h3 class="text-center">Payment</h3>
                <p class="text-mute">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero hic ratione eum non eaque officia, blanditiis nisi numquam eius, atque sunt distinctio quo architecto optio ad unde? Ipsum, voluptatum repellat!</p>
            </div>
            <div class="col-12 col-md-9 col-lg-6 mx-auto mt-4 border border-1 p-4 rounded-3 bg-light bg-opacity-50">
                <div class="row justify-content-around">
                    <div class="col-12 row mb-3">
                        <label for="" class="form-label">Full Name or Organization Name</label>
                        <input type="text" id="donation-name" class="form-control">
                    </div>
                    <div class="col-12 col-lg-6  row mb-3">
                        <label for="" class="form-label">Email Address</label>
                        <input type="email" id="donation-name" class="form-control">
                    </div>
                    <div class="col-12  col-lg-6 row mb-3">
                        <label for="" class="form-label">Mobile Number</label>
                        <input type="email" id="donation-name" class="form-control">
                    </div>
                    <div class="col-12 row mb-3">
                        <label for="" class="form-label">Comments</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="col-12 row mb-3">
                        <label for="" class="form-label">Donation Amount</label>
                        <input type="email" id="donation-name" class="form-control">
                    </div>
                    <div class="col-12 row mb-3">
                        <label for="" class="form-label">Donation Type</label>
                       <div class="col-12 p-2">
                       <div class="form-check">
                            <input class="form-check-input" type="radio" name="donation-type" id="type01" value="type01" checked>
                            <label class="form-check-label" for="type01">One time Donation</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="donation-type" id="type02" value="type02">
                            <label class="form-check-label" for="type02">Recurring Donations</label>
                        </div>
                       </div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-6">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary">Pay via Debit/Credit Card</button>
                            <button class="btn btn-disabled" disabled>Pay via Crypto</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>