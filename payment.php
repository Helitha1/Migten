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
                    <div class="col-12 mb-3">
                        <h5 class="text text-danger d-none border border-danger p-2" id="form-warning"> </h5>
                    </div>
                    <div class="col-12 row mb-3 input-group has-validation">
                        <label for="" class="form-label">Full Name or Organization Name</label>
                        <input type="text" id="donation-name" class="form-control">
                        <div class="invalid-feedback" id="feedback-name"> </div>
                    </div>
                    <div class="col-12 col-lg-6  row mb-3">
                        <label for="" class="form-label">Email Address</label>
                        <input type="email" id="donation-email" class="form-control">
                    </div>
                    <div class="col-12  col-lg-6 row mb-3">
                        <label for="" class="form-label">Mobile Number</label>
                        <input type="text" id="donation-mobile" class="form-control">
                    </div>
                    <div class="col-12 row mb-3">
                        <label for="" class="form-label">Comments</label>
                        <textarea name="" id="" cols="30" rows="10" id="donation-comment" class="form-control"></textarea>
                    </div>

                    <div class="col-12 row mb-3">
                        <label for="" class="form-label">Donation Amount</label>
                        <input type="email" id="donation-amount" class="form-control">
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
                            <button class="btn btn-primary" id="payment-button">Pay via Debit/Credit Card</button>
                            <button class="btn btn-disabled" disabled>Pay via Crypto</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
    <!-- <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script> -->
    <script>
        _ = (element) => {
            return document.getElementById(element);
        }

        continuePayment = () => {
            const name = _('donation-name').value;
            const email = _('donation-email').value;
            const mobile = _('donation-mobile').value;
            // const comment = _('donation-comment').innerHTML;
            const donationType = _('type01').checkd == true ? '1' : '2';
            const donationAmount = _('donation-amount').value;

            if (name == '') {
                showError('Please Enter Your name');
            } else if (email == '') {
                showError('Please Enter Your Email');
            } else if (mobile == '') {
                showError('Mobile Number is Required');
            } else if (donationType == '') {
                showError('Please choose a Donation Type');
            } else if (donationAmount == '') {
                showError('Please Enter the Donation Amount');
            } else if (donationAmount < 0) {
                showError('Invalid Amount')
            } else if (donationAmount > 300000) {
                showError('Cant made dontaions above 300K please contact our admin');
            } else {
                const requestObject = {
                    'name': name,
                    'email': email,
                    'mobile': mobile,
                    'donationType': donationType,
                    'amount': donationAmount
                }
                fetch('paymentProcess.php', {
                    method: 'POST',
                    body: JSON.stringify(requestObject),
                    headers: {
                        "Content-Type": "application/json",
                    }
                }).then(res => res.json()).then(resObj => {
                    console.log(resObj);
                    
                }).catch(err => alert(err))
            }
        }

        showError = (errorMsg) => {
            _('form-warning').classList.remove('d-none');
            _('form-warning').innerHTML = errorMsg;
        }

        _('payment-button').addEventListener('click', continuePayment);
    </script>

</body>

</html>