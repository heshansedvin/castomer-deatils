<?php
include '../credentials.php';
require '../keyauth.php';





$KeyAuthApp = new KeyAuth\api($name, $OwnerId);

$url = "https://keyauth.win/api/seller/?sellerkey={$SellerKey}&type=getsettings";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($curl);
$json = json_decode($resp);

if (!$json->success) {
    die("Error: {$json->message}");
}

$download = $json->download;
$webdownload = $json->webdownload;
$appcooldown = $json->cooldown;

$numKeys = $KeyAuthApp->numKeys;
$numUsers = $KeyAuthApp->numUsers;
$numOnlineUsers = $KeyAuthApp->numOnlineUsers;
$customerPanelLink = $KeyAuthApp->customerPanelLink;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertex Regedit</title>
    <link rel="stylesheet" href="store.css">
</head>
<body>

    <header>
        <nav>
            <div>
                <h1>Vertex Regedit</h1>
            </div>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="store.php">Store</a></li>
                <li><a href="upgrade.php">Upgrade</a></li>
                <li><a href="download.php">Download</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Your main content goes here -->
    </main>

</body>
</html>
<main role="main" class="flex-shrink-0 ">
<div class="padding-extra">
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
                        