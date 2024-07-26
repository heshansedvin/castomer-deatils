<?php
include '../credentials.php';
require '../keyauth.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['un'])) {
    die("not logged in");
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: ../");
    exit();
}



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
</html>

<main role="main" class="flex-shrink-0 ">
<div class="padding-extra"><div class="card text-dark bg-light mb-3 text-center mt-1">
  <div class="card-header bg-dark text-white">Redeem License Key</div>
  <div class="card-body p-0">
      <div class="">
        <div class="container p-3">
            <form action="" method="POST">
                    <div class="my-2">
                        <input type="text" class="form-control" id="license_key" placeholder="License Key" name="license_key" required>
                    </div>
                    <div class="my-2">
                        <button type="submit" class="btn btn-dark w-25">Redeem</button>
                    </div>
            </form>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</main>



  </body>