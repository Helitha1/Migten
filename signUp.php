<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up | Charity Donation</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="resource/learning.png" />

</head>

<body class="body">

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">



            <!-- content  -->
            <div class="col-12 ">
                <div class="row p-3 ">

                    <div class="col-6 d-none d-lg-block logo"></div>

                    <div class="col-12 col-lg-6 border-dark shadow-lg bg-transparent rounded-2">
                        <div class="row g-2 p-4">


                            <div class="col-12 ">
                                <p class="title02 text-uppercase">Admin Login.</p>
                            </div>
                            <hr />
                            <div class="col-12 ">
                                <label class="form-label">First Name </label>
                                <input type="text" class="form-control" placeholder="ex:- john" id="fn" />
                            </div>

                            <div class="col-12 ">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="ex:- john" id="ln" />
                            </div>
                            <div class="col-12 ">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="ex:- john@" id="e" />
                            </div>

                            <div class="col-12 ">
                                <label class="form-label">Mobile</label>
                                <input type="text" class="form-control" placeholder="ex:- john" id="m" />
                            </div>

                            <div class="col-12 col-lg-6">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="ex:- ****" id="p1" />
                                    <span class="input-group-text btn btn-dark" id="basic-addon2">Show</span>
                                </div>

                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="ex:- ****" id="p2" />
                                    <span class="input-group-text btn btn-dark" id="basic-addon2">Show</span>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <label class="form-label">Address Line 1</label>
                                <input type="text" class="form-control" placeholder="ex:- john" id="al1" />
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="form-label">Address Line 2</label>
                                <input type="text" class="form-control" placeholder="ex:- john" id="al2" />
                            </div>

                            <!-- <div class="col-6">
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme" />
                                    <label class="form-check-label">Remember Me</label>
                            </div> -->

                            <div class="col-12 col-lg-6 d-grid my-3">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid my-3">
                                <button class="btn btn-danger">Back</button>
                            </div>

                        </div>




                    </div>

                </div>


            </div>


        </div>

        <!-- content  -->


        <!--  -->

        <div class="modal" tabindex="-1" id="verificationModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Admin Verification</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label class="form-label">Enter Your Verification Code</label>
                        <input type="text" class="form-control" id="vcode">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="verify();">Verify</button>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->

    </div>

    <!-- modal -->

    <div class="modal" tabindex="-1" id="forgotPasswordModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Forgot Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row g-3">

                        <div class="col-6">
                            <label class="form-label">New Password</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="np" />
                                <button class="btn btn-outline-secondary" type="button" id="npb" onclick="showPassword();">Show</button>
                            </div>
                        </div>

                        <div class="col-6">
                            <label class="form-label">Re-type Password</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="rnp" />
                                <button class="btn btn-outline-secondary" type="button" id="rnpb" onclick="showPassword2();">Show</button>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Verification Code</label>
                            <input type="text" class="form-control" id="vc" />
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->



    </div>


    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>