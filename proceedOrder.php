<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kudumbasree Page</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    
	<?php include('kudumbasreeSidemenu.php');  ?>
	
	
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>PROCEED ORDER</h3>
            </div>
            <div class="page-content">
				
				<?php
				include('connection.php');
				$req=$_GET['rId'];
                $query="select * from request where isActive='0' and reqId='$req'";
                $result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result))
				{ ?>	
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-6">
                            <div class="card">
                                
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" method="post" action="proceedAction.php" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                     
                                                    </div>
				
                                                    <div class="col-md-8 form-group">
														
                                                        <input type="hidden" class="form-control"
                                                            name="categoryName" value="<?php echo $row['catId']; ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Product Name</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" class="form-control"
                                                            name="itemName" value="<?php echo $row['itemName']; ?>">
                                                    </div>
													 <div class="col-md-4">
                                                        <label>Product Image</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                       <input type="file" class="form-control"
                                                            name="image">
                                                    </div>
													 <div class="col-md-4">
                                                        <label>Label</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" class="form-control"
                                                            name="label" placeholder="Enter Name Of Your Product">
                                                    </div>
                                                     <div class="col-md-4">
                                                        <label>Requested</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" class="form-control"
                                                            name="quantity" value="<?php echo $row['quantity'];?> Kg"  id="r1">
                                                    </div>
													 <div class="col-md-4">
                                                        <label>Price </label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" class="form-control"
                                                            name="productPrice" placeholder="Enter Your Price for 1 Kg"id="p1">
                                                    </div>
													 <div class="col-md-4">
													 <label>Total Price</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" class="form-control"
                                                            name="total" id="t1">
                                                    </div>
                                                   
                                                    <div class="col-sm-12 d-flex justify-content-end">
														
                                                        <button type="submit"
                                                            class="btn icon icon-left btn-success">Submit</button>
                                                         
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>	
				<?php } ?>
       </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>Copyright © 2022. All rights reserved.</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
	
</body>

</html>