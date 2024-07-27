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
    <link rel="stylesheet" href="style.css">
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

    <div class="container">
        <div class="account-info">
            <h2>Account Info</h2>
            <div class="info-item">Username: <span></span></div>
            <div class="info-item">Password: <span></span></div>
            <div class="info-item">Status: <span class="status-active">Active</span></div>
            <button>Update Roles</button>
        </div>

      

        <div class="reset-device-id">
            <h2>Reset Device ID</h2>
            <p>If you want to reset your windows or if you see "Please login from registered device" then click the reset button below</p>
            <p class="warning">Warning: If you try to use the panel in two different pc, then your account will be suspended.</p>
            <div class="d-flex flex-column flex-root">

        <div class="page d-flex flex-row flex-column-fluid">

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                <div id="kt_header" style="" class="header align-items-stretch">

                    <div class="container-fluid d-flex align-items-stretch justify-content-between">

                        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">

                                

                            </div>
                        </div>


                        


                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">

                            <div class="d-flex align-items-stretch" id="kt_header_nav">



                            </div>



                        </div>

                    </div>

                </div>


                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                    <div class="toolbar" id="kt_toolbar">

                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">



                        </div>

                    </div>

                    <div class="post d-flex flex-column-fluid" id="kt_post">

                        <div id="kt_content_container" class="container-xxl">
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">

                               

                            </div>
                            <br>
                            <br>
                            <div class="card mb-xl-8">

                               
                               


                                <div class="card-body py-3">

                                    <?php
                                    $un = $_SESSION['un'];
                                    $url = "https://keyauth.win/api/seller/?sellerkey={$SellerKey}&type=userdata&user={$un}";

                                    $curl = curl_init($url);
                                    curl_setopt($curl, CURLOPT_URL, $url);
                                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                                    $resp = curl_exec($curl);
                                    $json = json_decode($resp);
                                    $cooldown = $json->cooldown;
                                    $token = $json->token;
                                    $today = time();

                                    if (is_null($cooldown)) {

                                        echo '<form method="post">
<button name="resethwid" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-redo-alt fa-sm text-white-50"></i> Reset HWID</button></form>';
                                    } else {

                                        if ($today > $cooldown) {

                                            echo '<form method="post">
<button name="resethwid" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-redo-alt fa-sm text-white-50"></i> Reset HWID</button></form>';
                                        } else {

                                            echo '<div style="color:red;">You can\'t reset HWID again until <script>document.write(convertTimestamp(' . $cooldown . '));</script></div>';
                                        }
                                    }



                                    ?>

                                    <br>
                                    <a href="<?php echo $download; ?>" style="color:#00FFFF;" target="appdownload"><?php echo $download; ?></a>
                                </div>


                            </div>


                           
                        </div>

                    </div>

                </div>


               


    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">

        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black">
                </rect>
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
            </svg>
        </span>

    </div>
   
    <script>
        var going = 1;

        function handshake() {
            setTimeout(function() {
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.open("GET", "http://localhost:1337/handshake?user=<?php echo $_SESSION['un']; ?>&token=<?php echo $token; ?>");
                xmlHttp.onload = function() {
                    going = 0;
                    switch (xmlHttp.status) {
                        case 420:
                            console.log("returned SHEESH :)");
                            $("#handshake").fadeOut(100);
                            $("#buttons").fadeIn(1900);
                            break;
                        default:
                            alert(xmlHttp.statusText);
                            break;
                    }
                };
                xmlHttp.send();
                if (going == 1) {
                    handshake();
                }
            }, 3000);
        }

        function doButton(value) {
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.open("GET", "http://localhost:1337/" + value);
            xmlHttp.send();
        }
    </script>

    <?php

    if (isset($_POST['resethwid'])) {

        $today = time();

        $cooldown = $today + $appcooldown;
        $un = $_SESSION['un'];
        $url = "https://keyauth.win/api/seller/?sellerkey={$SellerKey}&type=resetuser&user={$un}";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_exec($curl);

        $url = "https://keyauth.win/api/seller/?sellerkey={$SellerKey}&type=setcooldown&user={$un}&cooldown={$cooldown}";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_exec($curl);

        echo '
                            <script type=\'text/javascript\'>
                            
                            const notyf = new Notyf();
                            notyf
                              .success({
                                message: \'Reset HWID!\',
                                duration: 3500,
                                dismissible: true
                              });                
                            
                            </script>
                            ';
        echo "<meta http-equiv='Refresh' Content='2;'>";
    }
    ?>
</body>

</html>

<?php
#region Extra Functions
/*
//* Get Public Variable
$var = $KeyAuthApp->var("varName");
echo "Variable Data: " . $var;
//* Get User Variable
$var = $KeyAuthApp->getvar("varName");
echo "Variable Data: " . $var;
//* Set Up User Variable
$KeyAuthApp->setvar("varName", "varData");
//* Log Something to the KeyAuth webhook that you have set up on app settings
$KeyAuthApp->log("message");
//* Basic Webhook with params
$result = $KeyAuthApp->webhook("WebhookID", "&type=add&expiry=1&mask=XXXXXX-XXXXXX-XXXXXX-XXXXXX-XXXXXX-XXXXXX&level=1&amount=1&format=text");
echo "<br> Result from Webhook: " . $result;
//* Webhook with body and content type
$result = $KeyAuthApp->webhook("WebhookID", "", "{\"content\": \"webhook message here\",\"embeds\": null}", "application/json");
echo "<br> Result from Webhook: " . $result;
//* If first sub is what ever then run code
if ($subscription === "Premium") {
	Premium Subscription Code ...
}
*/
#endregion
?>
        </div>
    </div>
</body>
</html>