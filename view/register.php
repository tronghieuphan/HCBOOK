<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <?php include './cutpage/head.php' ?>

</head>

<body>

    <!-- Start Header Area -->
    <?php include './cutpage/header.php' ?>

    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Register</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="login.php">Login<span class="lnr lnr-arrow-right"></span></a>
                        <a href="register.php">Register</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- End Banner Area -->

    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">


            <div>
                <div class="login_form_inner">
                    <h3>Register to enter</h3>
                    <form class="row login_form" action="../controller/register-controller.php" method="post">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Re - Password">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="f-name" name="firstName" placeholder="FirstName">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="l-name" name="lastName" placeholder="LastName">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Create Account</button>

                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                </div>
            </div>


        </div>

    </section>
    <!--================End Login Box Area =================-->

    <!-- start footer Area -->
    <?php include './cutpage/footer.php' ?>

    <!-- End footer Area -->

    <?php include './cutpage/script.php' ?>

</body>

</html>