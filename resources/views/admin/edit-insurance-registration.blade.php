<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

   
    <?php include './include/headlink.php'; ?>
</head>

<body class="">

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <div class="wrapper ">

        <!-- sidebar -->
        <?php include './include/sidebar.php'; ?>



        <div class="main-panel">
            <!-- Navbar -->
            <?php include './include/header.php'; ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Edit insurance company registration</h5>
                                <!-- <button type="submit" class="btn btn-primary btn-round">Back</button> -->
                                <a href="insurance-registration.php" class="btn btn-primary">Back</a>

                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" class="form-control" placeholder="Company Name" value="Aximo">
                                            </div>
                                        </div>


                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" value="India">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>contact No.</label>
                                                <input type="text" class="form-control" placeholder="Contact No." value="5374647575">
                                            </div>

                                        </div>
                                    </div>
                                   
                                    


                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                            <!-- <button type="submit" class="btn btn-primary btn-round">Cancel</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include './include/footlink.php'; ?>
</body>

</html>