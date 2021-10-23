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
                                <h5 class="card-title">Edit To Buy Vehicle or Bike Engine</h5>
                                <!-- <button type="submit" class="btn btn-primary btn-round">Back</button> -->
                                <a href="buy-vehicle-engine-1.php" class="btn btn-primary">Back</a>

                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Vehicle Or Motorcycle</label>
                                                <input type="text" class="form-control" placeholder="Vehicle Or Motorcycle" value="Vehicle">
                                            </div>
                                        </div>


                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Engine Number</label>
                                                <input type="email" class="form-control" placeholder="Engine Number" value="76815242">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Seller Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="Seller Mobile Number" value="9736862520">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Seller Email</label>
                                                <input type="text" class="form-control" placeholder="Seller Email" value="example@gmail.com">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Buyer Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="Buyer Mobile Number" value="8793746470">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Buyer Email</label>
                                                <input type="text" class="form-control" placeholder="Buyer Email" value="example@gmail.com">
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