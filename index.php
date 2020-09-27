<?php
    $pageTitle = "Registration Form";
    require_once "include/header.php";
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">Registration Form</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="process.php" method="post">

                    <div class="form-group">
                        <label for="name">Full Name: </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address: </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="username">Username: </label>
                        <input type="username" name="username" id="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="phoneno">Phone Number: </label>
                        <input type="phoneno" name="phoneno" id="phoneno" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="presentadd">Present Address: </label>
                        <input type="presentadd" name="presentadd" id="presentadd" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="permenentadd">Permenent Address: </label>
                        <input type="permenentadd" name="permenentadd" id="permenentadd" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="cnic">CNIC: </label>
                        <input type="cnic" name="cnic" id="cnic" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth: </label>
                        <input type="date" name="dob" id="dob" class="form-control">
                    </div>

                    <input type="submit" name="submit" value="Register" class="btn btn-success">
                </form>
            </div>
        </div>
        </div>
        <?php require_once "include/footer.php"; ?>
</body>
</html>