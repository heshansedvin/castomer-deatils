<?php
require '../credentials.php';
require '../keyauth.php';

if (session_status() === PHP_SESSION_NONE) {
	session_start();
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertex Regedit</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 0px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #eee;
        }

        main {
            padding: 20px;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <div>
                <h1>Vertex Regedit</h1>
            </div>
            <ul>
                <li><a href="index.php">Store</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Your main content goes here -->
    </main>

</body>
</html>
<main role="main" class="flex-shrink-0 ">
<div class="padding-extra"><style>
body {
    font-family: 'Roboto', sans-serif;
}
a {
    text-decoration: none;
}
.product-card {
    box-shadow: 0 2px 7px #dfdfdf;
    background: #fafafa;
}
.badge {
    position: absolute;
    left: 0;
    top: 20px;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    background: red;
    color: #fff;
    padding: 3px 10px;
}
.product-tumb {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 200px;
    padding: 50px;
    background: #f0f0f0;
}
.product-tumb img {
    max-width: 100%;
    max-height: 100%;
}
.product-details {
    padding: 30px;
}
.product-catagory {
    display: block;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: #ccc;
    margin-bottom: 18px;
}
.product-details h4 a {
    font-weight: 500;
    display: block;
    margin-bottom: 18px;
    text-transform: uppercase;
    color: #363636;
    text-decoration: none;
    transition: 0.3s;
}
.product-details h4 a:hover {
    color: #fbb72c;
}
.product-details p {
    font-size: 15px;
    line-height: 22px;
    margin-bottom: 18px;
    color: #999;
}
.product-bottom-details {
    overflow: hidden;
    border-top: 1px solid #eee;
    padding-top: 20px;
}
.product-bottom-details div {
    float: left;
    width: 50%;
}
.product-price {
    font-size: 18px;
    color: #fbb72c;
    font-weight: 600;
}
.product-price small {
    font-size: 80%;
    font-weight: 400;
    text-decoration: line-through;
    display: inline-block;
    margin-right: 5px;
}
.product-links {
    text-align: right;
}
.product-links a {
    display: inline-block;
    margin-left: 5px;
    color: #e1e1e1;
    transition: 0.3s;
    font-size: 17px;
}
.product-links a:hover {
    color: #fbb72c;
}
</style>
    <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-card my-2">
                        <div class="">
                            <img class="img-fluid" src="assets/matrix-banner-2.png" alt="Vertex Aimbot &amp; Sniper" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Software</span>
                            <h4><a href="">Vertex Aimbot &amp; Sniper</a></h4>
                            <strong>Monthly Price:</strong> ₹ 1,200.00 / $ 15.00<br>
                            <strong>Yearly Price:</strong> ₹ 3,700.00 / $ 45.00                           
		</div>
						 <div class="">
                                   
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-dark w-100 rounded-bottom py-2" href="?code=supreme_essential">View Details</a>
                                    </div>

			</div>
	</div>
	

            </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-card my-2">
                        <div class="">
                            <img class="img-fluid" src="assets/matrix-banner-2.png" alt="Vertex Aimbot" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Software</span>
                            <h4><a href="">Vertex Aimbot</a></h4>
                            <strong>Monthly Price:</strong> ₹ 900.00 / $ 10.00<br>
                            <strong>Yearly Price:</strong> ₹ 2,500.00 / $ 30.00                           
		</div>
						 <div class="">
                                   
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-dark w-100 rounded-bottom py-2" href="?code=supreme">View Details</a>
                                    </div>

			</div>
	</div>
	

            </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-card my-2">
                        <div class="">
                            <img class="img-fluid" src="assets/matrix-banner-2.png" alt="Vertex Sniper" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Software</span>
                            <h4><a href="">Vertex Sniper</a></h4>
                            <strong>Monthly Price:</strong> ₹ 900.00 / $ 10.00<br>
                            <strong>Yearly Price:</strong> ₹ 2,500.00 / $ 30.00                           
		</div>
						 <div class="">
                                   
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-dark w-100 rounded-bottom py-2" href="?code=essential">View Details</a>
                                    </div>

			</div>
	</div>
	

            </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-card my-2">
                        <div class="">
                            <img class="img-fluid" src="assets/matrix-banner-2.png" alt="Vertex Emulator" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Software</span>
                            <h4><a href="">Vertex Emulator</a></h4>
                            <strong>Monthly Price:</strong> ₹ 900.00 / $ 10.00<br>
                            <strong>Yearly Price:</strong> ₹ 3,700.00 / $ 45.00                           
		</div>
						 <div class="">
                                   
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-dark w-100 rounded-bottom py-2" href="?code=emulator">View Details</a>
                                    </div>

			</div>
	</div>
	

            </div>
                        