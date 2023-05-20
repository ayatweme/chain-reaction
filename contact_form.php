<!DOCTYPE html>
<html>
<?php session_start();
?>
<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist\css\bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js">
    </script>
    <script src="bootstrap-4.0.0-dist\js\bootstrap.min.js" crossorigin="anonymous"></script>
    
</head>

<body>
    <div class="container-fluid px-5 my-5">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-sm-3 p-4">
                            </div>
                            <div class="col-sm-6 p-4 ">
                                <div class="text-center">
                                    <div class="h3 fw-light">Hello, Who's this?</div>
                                    <?php show_messages() ?>
                                </div>
                                <form class="needs-validation" method="post" action="save_contact.php" >
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="First/Last Name" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone"  minlength="10" maxlength="14"
                                          placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="col-sm-12 btn btn-dark text-center">Submit</button>
                                    </div>
                                </form>

                            </div>
                            <div class="col-sm-3 p-4">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        function show_messages(){

            if(isset($_SESSION['success']) && $_SESSION['success']==1){
                echo' <div class="alert alert-success alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     Data saved successfully!
                      </div>';
            }
            unset($_SESSION['success']);
            if(isset($_SESSION['error']) && $_SESSION['error']==1){
                echo' <div class="alert alert-dange alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     Error occurred. Please try again.
                      </div>';
            }
            unset($_SESSION['error']);
        }
        
    ?>
   
</body>

</html>