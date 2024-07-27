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

<!DOCTYPE html>


<div class="card text-dark bg-light mb-3 text-center mt-1">
  <div class="card-header bg-dark text-white">Download</div>
  <div class="card-body p-0">
      <div class="">
        <div class="container p-3">
            <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h4 class="mb-4">Matrix v15.4</h4>
	
                <form method="post" class="text-center">
                  <a href="https://github.com/teammatrixff/matrix-normal/releases/download/v15.4/svchost_v15.4.zip" class="btn btn-dark btn-sm my-2">Download Exe</a><br>
					                    <a href="https://dl.cdn.freefiremobile.com/live/package/FreeFire.apk" class="btn btn-info btn-sm ">Recommended Free Fire</a>

                </form>
								
            </div>
        </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>
</main>



  </body>