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
                                <h5 class="card-title">Edit Update Recovered Vehicle/Motorbike</h5>
                                <!-- <button type="submit" class="btn btn-primary btn-round">Back</button> -->
                                <a href="update-recovered-vehicle-bike.php" class="btn btn-primary">Back</a>

                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Vehicle or Motorcycle</label>
                                                <input type="text" class="form-control" placeholder="Vehicle or Motorcycle" value="Vehicle">
                                            </div>
                                        </div>


                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Plate Number</label>
                                                <input type="email" class="form-control" placeholder="Plate Number" value="2892762">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Engine Number</label>
                                                <input type="text" class="form-control" placeholder="Engine Number" value="72671873">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Chassis Number</label>
                                                <input type="text" class="form-control" placeholder="Chassis Number" value="5347575">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Recovered City</label>
                                                <input type="text" class="form-control" placeholder="Recovered City" value="Delhi">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Police Station</label>
                                                <input type="text" class="form-control" placeholder="Police Station" value="Sadar">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control" placeholder="Email Address" value="example@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="Mobile Number" value="8916346374">
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