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
<html dir="ltr" lang="en">

<head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
        </ul>
    </nav>

   

    <div class="d-flex flex-column flex-root">

        <div class="page d-flex flex-row flex-column-fluid">

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                <div id="kt_header" style="" class="header align-items-stretch">

                    <div class="container-fluid d-flex align-items-stretch justify-content-between">

                        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">

                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black"></path>
                                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black"></path>
                                    </svg>
                                </span>

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

                                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1"><?php echo $name; ?> panel
                                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                </h1>

                            </div>
                            <br>
                            <br>
                            <div class="card mb-xl-8">

                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-3 mb-1">Application</span>
                                    </h3>
                                </div>


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

                        </div>

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