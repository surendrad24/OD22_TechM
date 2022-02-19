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
    <title>OD22 RNR-3</title>
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
                <form action="" method="post" class="mt-8 md:flex md:max-w-lg md:mx-auto">
                    <div class="relative">
                        <input required id="cname" type="text" name="customer_name" placeholder="Customer Name" class="
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
                        <label for="fname" class="
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
                        <input required id="pnum" type="text" name="phone_number" placeholder="Customer Phone No" class="
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
                        <label for="pnum" class="
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
                                ">Phone No</label>
                    </div>
                    <div class="relative">
                        <input required id="pname" type="text" name="product_name" placeholder="Product Name" class="
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
                        <label for="pname" class="
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
                                ">Product</label>
                    </div>
                </form>
            </div>
            <div class="text-white text-center">
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
            </div>
            <div class="b5">
                <div class="text-center"><b>RNR Schedule: 24 Hours</b></div>
                <div class="text-white text-center">
                    <div id="4time"></div>
                </div>
                <br>
                <hr>
                <p><b>OD: RNR 3. case solved. unable to send email.</b></p>
                <p><b>OD: RNR 3. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p>
                <p><b>OD: RNR 3. coudn't solve the case as there wasn't any option available under the activity log. (unable to fill the form). unable to send email.</b></p>
                <hr>
                <div class="text-white text-center"><b>Email</b></div>
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
		h-10
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                        Copy Subject
                    </button>
                </div>
                <br>
                <p id="myInput1">Update on your order for <var id="mypro"><var id="prname"> <b>_Product Name_</b></var>.</var> </p>
                <br>
                <p id="myInput2">Hi <var id="mynam"><var id="name"> <b>_CX Name_</b></var></var>,<br> We tried reaching you at <var id="myph"><var id="num"> <b>_Phone_Number_</b></var></var> to speak to you about your order but were unable to reach you.<br>
                    We are sorry that your order for <var id="mypro1"><var id="prname1"> <b>_Product Name_</b></var></var> was cancelled by the seller as there was a prolonged delay in the delivery of your order and they did not want to keep you waiting.<br>
                    If you want, you can place a fresh order for this product within the next 7 days. In appreciation of your understanding, the seller will add a Gift Card worth Rs. { } to your Flipkart account within 72 hours of the order delivery. You can check the balance and validity of your Gift Cards here: https://www.flipkart.com/account/giftcard<br>
                    We would like to thank you for your understanding.<br>
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
		h-10
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                        Copy Email
                    </button>
                </div>
                <hr>
                <div class="text-white text-center"><b>SMS</b></div>
                <p id="myInput3">We tried reaching you today at <var id="myph1"><var id="num1"> <b>_Phone_Number_</b></var></var>to discuss your concern about your product for <var id="mypro2"><var id="prname2"> <b>_Product Name_</b></var>.</var> has been delayed. A Gift Card equivalent to the shipping charge will be provided on order delivery. Alternatively, you can place a new order for this item. In appreciation of your patience, a Gift Card worth Rs. { } will be added to your Flipkart account post new order is delivered. </p>
                <div class="tooltip mt-4 text-white text-center">
                    <button onclick="copyToClipboard('#myInput3')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-10
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                        Copy SMS
                    </button>
                </div><br>
                <br>
                <hr><br>
                <p><b> OD: RNR 3. case solved. Email sent.</b></p>
                <p><b> OD: RNR 3. Email N/A.</b></p>
                <hr>
                </p>
            </div>
            <br>
            <div class="text-center"><b>Current Date and Time: </b></div><br>
            <div class="text-white text-center" id="time"></div>
            <br>
        </div>
    </div>

    <script>
        function myFunction() {
            var a = document.getElementById("mynam");
            a.style.color = "yellow";
            var b = document.getElementById("myph");
            b.style.color = "yellow";
            var c = document.getElementById("mypro");
            c.style.color = "yellow";
            var d = document.getElementById("mypro1");
            d.style.color = "yellow";
            var dd = document.getElementById("mypro2");
            dd.style.color = "yellow";
            var f = document.getElementById("myph1");
            f.style.color = "yellow";
            var x = document.getElementById("cname").value;
            document.getElementById("name").innerHTML = x;
            var y = document.getElementById("pnum").value;
            document.getElementById("num").innerHTML = y;
            var z = document.getElementById("pname").value;
            document.getElementById("prname").innerHTML = z;
            var q = document.getElementById("pname").value;
            document.getElementById("prname1").innerHTML = q;
            var qq = document.getElementById("pname").value;
            document.getElementById("prname2").innerHTML = qq;
            var yy = document.getElementById("pnum").value;
            document.getElementById("num1").innerHTML = yy;
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
            document.getElementById('4time').innerHTML = strftime('%Y-%m-%D %I:%M%P');
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
                fDate = (date.getDate() + 2),
                sDate = (date.getDate() + 3),
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
                    '%E': zeroPad(fDate, 2),
                    '%f': zeroPad(sDate, 2),
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
    <!-- Start of Rocket.Chat Livechat Script -->
    <script type="text/javascript">
        (function(w, d, s, u) {
            w.RocketChat = function(c) {
                w.RocketChat._.push(c)
            };
            w.RocketChat._ = [];
            w.RocketChat.url = u;
            var h = d.getElementsByTagName(s)[0],
                j = d.createElement(s);
            j.async = true;
            j.src = 'https://chat.macxp24x7.com/livechat/rocketchat-livechat.min.js?_=201903270000';
            h.parentNode.insertBefore(j, h);
        })(window, document, 'script', 'https://chat.macxp24x7.com/livechat');
    </script>
</body>

</html>