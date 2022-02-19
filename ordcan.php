<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if ($email != false && $password != false) {
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if ($run_Sql) {
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if ($status == "verified") {
            if ($code != 0) {
                header('Location: reset-code.php');
            }
        } else {
            header('Location: user-otp.php');
        }
    }
} else {
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OD3 ORD CAN Aditya</title>
    <script src="https://kit.fontawesome.com/de84253868.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css" />
    <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js" data-semver="2.1.4" data-require="jquery@2.1.4"></script>
    <script data-require="jquery-cookie@1.3.1" data-semver="1.3.1" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 140px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 150%;
            left: 50%;
            margin-left: -75px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>

<body class="antialiased font-primary">
    <div class="bg-home px-8 w-full">
        <div class="
                    py-12
                    flex flex-col
                    justify-between
                    min-h-screen
                    md:max-w-2xl
                    lg:max-w-3xl
                    mx-auto
                ">
            <div>

                <div class="text-white text-center">
                    <form method="POST" action="index.php">
                        <input type="submit" name="send" value="Home" class="
                                    mt-4
									bg-pink-800
									text-white
									uppercase
									font-bold
									text-sm text-center
									w-full
									px-8
									h-14
									rounded-full
									md:mt-0 md:rounded-l-none md:w-48
                                " />
                    </form>
                </div>
                <form action="mail_handler.php" method="post" class="mt-8 md:flex md:max-w-lg md:mx-auto">
                    <div class="relative">
                        <input required id="cx" type="text" name="customer_name" placeholder="Customer Name" class="
                                    peer
                                    px-8
                                    pt-5
                                    pb-3
                                    w-full
                                    placeholder-transparent
                                    rounded-full
                                    flex-grow
                                    md:rounded-r-none
                                " />
                        <label for="cx" class="
                                    absolute
                                    text-gray-700
                                    left-8
                                    top-2
                                    font-bold
                                    text-xs
                                    peer-placeholder-shown:top-4
                                    peer-placeholder-shown:font-normal
                                    peer-placeholder-shown:text-base
                                    peer-focus:top-2
                                    peer-focus:font-bold
                                    peer-focus:text-xs
                                    cursor-text
                                    transition-all
                                ">Cx Name</label>

                    </div>
                    <div class="relative">
                        <input required id="pdnam" type="text" name="product_name" placeholder="Product Name" class="
                                    peer
                                    px-8
                                    pt-5
                                    pb-3
                                    w-full
                                    placeholder-transparent
                                    rounded-full
                                    flex-grow
                                    md:rounded-r-none
                                " />
                        <label for="pdnam" class="
                                    absolute
                                    text-gray-700
                                    left-8
                                    top-2
                                    font-bold
                                    text-xs
                                    peer-placeholder-shown:top-4
                                    peer-placeholder-shown:font-normal
                                    peer-placeholder-shown:text-base
                                    peer-focus:top-2
                                    peer-focus:font-bold
                                    peer-focus:text-xs
                                    cursor-text
                                    transition-all
                                ">Product Name</label>

                    </div>

                </form>
            </div>
            <div class="mt-12 text-white text-center">
                <p>Click the "Generate" button to get the <b>ORDER CANCELLED (C NC)</b></p>
            </div>
            <div class="mt-12 text-white text-center">
                <button onclick="myFunction()" class="
                                    mt-4
									bg-pink-800
									text-white
									uppercase
									font-bold
									text-sm text-center
									w-full
									px-8
									h-14
									rounded-full
									md:mt-0 md:rounded-l-none md:w-48
                                ">
                    Generate</button><br>
                <br>
                <marquee width="100%" direction="left" height="50px">
                Aditya loves u a lot.. And he doesn't want to loose u in any situation.
                </marquee>
            </div>
            <br>
            <div class="text-center"><b>Current Date and Time: </b></div><br>
            <div class="text-white text-center" id="time"></div>
            <br>
            <hr style="width:50%; margin: auto;" /><br>
            <div>
                <div class="text-white text-center">
                    <p><b>Email</b></p><br>
                </div>
                <hr><br>
                <h1><b>ORDER CANCELLED (CONNECTED)</b></h1><br>

                <div class="tooltip text-white text-center">
                    <button onclick="copyToClipboard('#myInput1')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                        Copy Subject
                    </button>
                </div>

                <br><br>

                <p id="myInput1">Sorry, you order for has been cancelled.</p>
                <br>
                <p id="myInput2">Hi <var id="cxnam1"><var id="cxn1"><b> _CX Name_</b></var></var>,<br><br>Thanks for your time on the call.<br><br>We are sorry that your order for <var id="cxpro1"><var id="pd1"><b> _Product Name_</b></var></var> was cancelled by the seller as there was a prolonged delay in the delivery of your order and they did not want to keep you waiting.<br>If you like, you can place a fresh order for this product within the next 7 days.If the price of the item is now higher than what you bought it for earlier, we will reach out to you and lend our support once your new order is placed.In case the price of the item is still the same, the courier service provider will add a Gift Card worth Rs. 100 to your Flipkart account within 72hrs of the order delivery.<br><br>You can check the balance and validity of your Gift Cards here: http://fkrt.it/6jBxorNN<br><br>We would like to thank you for your understanding.</p>
                <br>
                <div class="tooltip text-white text-center">
                    <button onclick="copyToClipboard('#myInput2')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                        Copy Email
                    </button>
                </div>
                <br>
                <br>
                <hr>
                <br>
                <h3><b>SMS</b></h3> <br>

                <p id="myInput3">Your order for <var id="cxpro2"><var id="pd2"> <b>_Product Name_</b></var>,</var> has been cancelled by the seller as there was a prolonged delay. You can place a new order for this, we will contact you and lend our support once your new order is placed.If the price of the product remains the same, the courier service provider will add a Gift Card worth Rs. 100 to your Flipkart account. Thanks for your understanding.</p>
                <div class="tooltip mt-12 text-white text-center">
                    <button onclick="copyToClipboard('#myInput3')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                        Copy SMS
                    </button>
                </div>
                <br>
                <br>
                <hr>
                <br>
                <h1><b>ORDER CANCELLED (NOT CONNECTED)</b></h1><br>
                <div class="tooltip text-white text-center">
                    <button onclick="copyToClipboard('#myInput4')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                        Copy Subject
                    </button>
                </div>

                <br><br>

                <p id="myInput4">Sorry, your order has been cancelled by the seller.</p>


                <br>


                <p id="myInput5">Hi <var id="cxnam2"><var id="cxn2"><b> _CX Name_</b></var></var>, <br><br>We tried reaching you to share order related update for your <var id="cxpro3"><var id="pd3"> <b>_Product Name_</b></var></var> but could not connect with you.<br>We are sorry to let you know that your order for <var id="cxpro4"><var id="pd4"> <b>_Product Name_</b></var></var> has been cancelled by the seller as there was a prolonged delay in the delivery of your order and they did not want to keep you waiting.<br>If you want, you can place a fresh order for this product within the next 7 days. If the price of the item is now higher than what you bought it for earlier, we will reach out to you once you place the new order for support.<br>In case the price of the item is still the same, the courier service provider will add a Gift Card worth Rs. 100 to your Flipkart account within 72 hrs of the order delivery. You can check the balance and validity of your Gift Cards here: http://fkrt.it/6jBxorNN<br><br>We would like to thank you for your understanding.</p>
                <br>
                <div class="tooltip text-white text-center">
                    <button onclick="copyToClipboard('#myInput5')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                        Copy Email
                    </button>
                </div>
                <br>
                <br>
                <hr>
                <br>
                <h3><b>SMS</b></h3> <br>

                <p id="myInput6">Sorry, your order for <var id="cxpro5"><var id="pd5"> <b>_Product Name_</b></var>,</var> is cancelled due to a prolonged delay in delivery. You can place a new order for this item in the next 7 days and if the price is now higher, we will reach you to lend our support.If the price is still the same, the couriers will add a Gift Card worth Rs. 100 to your Flipkart account within 72 hrs of the order delivery.</p>
                <div class="tooltip mt-12 text-white text-center">
                    <button onclick="copyToClipboard('#myInput6')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                        Copy SMS
                    </button>
                </div>
                <br>
                <br>
                <hr>
                <br>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            var a1 = document.getElementById("cxnam1");
            a1.style.color = "yellow";
            var a2 = document.getElementById("cxnam2");
            a2.style.color = "yellow";
            
            
            var a5 = document.getElementById("cxpro1");
            a5.style.color = "yellow";
            var a6 = document.getElementById("cxpro2");
            a6.style.color = "yellow";
            var a7 = document.getElementById("cxpro3");
            a7.style.color = "yellow";
            var a8 = document.getElementById("cxpro4");
            a8.style.color = "yellow";
            var a9 = document.getElementById("cxpro5");
            a9.style.color = "yellow";
            
            

            var b1 = document.getElementById("cx").value;
            document.getElementById("cxn1").innerHTML = b1;
            var b2 = document.getElementById("cx").value;
            document.getElementById("cxn2").innerHTML = b2;
            
           
            var b5 = document.getElementById("pdnam").value;
            document.getElementById("pd1").innerHTML = b5;
            var b6 = document.getElementById("pdnam").value;
            document.getElementById("pd2").innerHTML = b6;
            var b7 = document.getElementById("pdnam").value;
            document.getElementById("pd3").innerHTML = b7;
            var b8 = document.getElementById("pdnam").value;
            document.getElementById("pd4").innerHTML = b8;
            var b9 = document.getElementById("pdnam").value;
            document.getElementById("pd5").innerHTML = b9;
            
        }
    </script>
    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copied: " + copyText.value;
        }

        function outFunc() {
            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copy to clipboard";
        }
    </script>
    <script type="text/javascript">
        window.onload = startInterval;

        function startInterval() {
            setInterval("startTime();", 1000);
        }

        function startTime() {
            document.getElementById('time').innerHTML = Date();
            document.getElementById('4time').innerHTML = strftime('%Y-%m-%d %i:%M%q');
            document.getElementById('nxttime').innerHTML = strftime('%Y-%m-%D 10:00am');
        }

        function strftime(sFormat, date) {
            if (!(date instanceof Date)) date = new Date();
            var nDay = date.getDay(),
                nDate = date.getDate(),
                nMonth = date.getMonth(),
                nYear = date.getFullYear(),
                nHour = date.getHours(),
                fHour = (date.getHours() + 4),
                tDate = (date.getDate() + 1),
                aDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                aMonths = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                aDayCount = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334],
                isLeapYear = function() {
                    if (nYear & 3 !== 0) return false;
                    return nYear % 100 !== 0 || year % 400 === 0;
                },
                getThursday = function() {
                    var target = new Date(date);
                    target.setDate(nDate - ((nDay + 6) % 7) + 3);
                    return target;
                },
                zeroPad = function(nNum, nPad) {
                    return ('' + (Math.pow(10, nPad) + nNum)).slice(1);
                };
            return sFormat.replace(/%[a-z]/gi, function(sMatch) {
                return {
                    '%a': aDays[nDay].slice(0, 3),
                    '%A': aDays[nDay],
                    '%b': aMonths[nMonth].slice(0, 3),
                    '%B': aMonths[nMonth],
                    '%c': date.toUTCString(),
                    '%C': Math.floor(nYear / 100),
                    '%d': zeroPad(nDate, 2),
                    '%D': zeroPad(tDate, 2),
                    '%e': nDate,
                    '%F': date.toISOString().slice(0, 10),
                    '%G': getThursday().getFullYear(),
                    '%g': ('' + getThursday().getFullYear()).slice(2),
                    '%H': zeroPad(nHour, 2),
                    '%i': zeroPad((fHour + 11) % 12 + 1, 2),
                    '%I': zeroPad((nHour + 11) % 12 + 1, 2),
                    '%j': zeroPad(aDayCount[nMonth] + nDate + ((nMonth > 1 && isLeapYear()) ? 1 : 0), 3),
                    '%k': '' + nHour,
                    '%l': (nHour + 11) % 12 + 1,
                    '%m': zeroPad(nMonth + 1, 2),
                    '%M': zeroPad(date.getMinutes(), 2),
                    '%p': (nHour < 12) ? 'AM' : 'PM',
                    '%P': (nHour < 12) ? 'am' : 'pm',
                    '%q': (fHour < 12) ? 'am' : 'pm',
                    '%s': Math.round(date.getTime() / 1000),
                    '%S': zeroPad(date.getSeconds(), 2),
                    '%u': nDay || 7,
                    '%V': (function() {
                        var target = getThursday(),
                            n1stThu = target.valueOf();
                        target.setMonth(0, 1);
                        var nJan1 = target.getDay();
                        if (nJan1 !== 4) target.setMonth(0, 1 + ((4 - nJan1) + 7) % 7);
                        return zeroPad(1 + Math.ceil((n1stThu - target) / 604800000), 2);
                    })(),
                    '%w': '' + nDay,
                    '%x': date.toLocaleDateString(),
                    '%X': date.toLocaleTimeString(),
                    '%y': ('' + nYear).slice(2),
                    '%Y': nYear,
                    '%z': date.toTimeString().replace(/.+GMT([+-]\d+).+/, '$1'),
                    '%Z': date.toTimeString().replace(/.+\((.+?)\)$/, '$1')
                } [sMatch] || sMatch;
            });
        }
        window.setInterval(function() { // Set interval for checking
            var date = new Date(); // Create a Date object to find out what time it is
            if (date.getHours() >= 17 && date.getMinutes() >= 0) { // Check the time
                // Do stuff
                $(function() {
                    $('div.b5').hide();
                    $('div.b5').show();
                });
            } else {
                $(function() {
                    $('div.b5').hide();
                    $('div.b5').show();
                });
            }
        }, 60000); // Repeat every 60000 milliseconds (1 minute)
    </script>
</body>

</html>