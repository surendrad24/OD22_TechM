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
    <title>OD22 Notes</title>
    <script src="https://kit.fontawesome.com/de84253868.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css" />
    <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js" data-semver="2.1.4" data-require="jquery@2.1.4"></script>
    <script data-require="jquery-cookie@1.3.1" data-semver="1.3.1" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style type="text/css">
        .highlight {
            color: orange
        }
    </style>
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
            </div>
            <br>
            <div class="text-center"><b>Current Date and Time: </b></div><br>
            <div class="text-white text-center" id="time"></div>
            <br>
            <hr style="width:50%; margin: auto;" /><br>
            <div class="b5">
                <div class="text-center"><b>MW Schedule: + 4 Hours</b></div><br>
                <div class="text-white text-center">
                    <div id="4time"></div>
                </div>
                <br>
                <hr><br>
                <div class=" text-white text-center">
                    <p><b>SWITCH OFF/ UNAVAILABLE/BUSY/BLANK/FAILED</b></p><br>
                </div>
                <p><b>OD: cx is not available. mark waiting done. call back after 4 hours.</b></p><br>
                <p><b>OD: cx is busy. mark waiting done. call back after 4 hours.</b></p><br>
                <p><b>OD: blank call. mark waiting done. call back after 4 hours.</b></p><br>
                <p><b>OD: Blank call. call got dropped automatically. mark waiting done. call back after 4 hours.</b></p><br>
                <hr><br>
                <div class=" text-white text-center">
                    <p><b>CALL DROP -Verbiage </b></p><br>
                </div>
                <p><b>OD: cx dropped the call after picking up the call. mark waiting done. call back after 4 hours.</b></p><br>
                <p><b>OD: cx dropped the call in between of the conversation. mark waiting done. call back after 4 hours.</b></p><br>
                <p><b>OD: No response from the cx, 3 times verbiage given and disconnecting the call. call back after 4 hours. mark waiting done.</b></p><br>
                <p><b>OD: Cx put Call On Hold, 3 times verbiage given and disconnecting the call. call back after 4 hours. mark waiting done.</b></p><br>
                <p><b>OD: Due to tech issue unable to load Incident in SA informed the cx to wait for 4 hrs. mark waiting done. cx agreed.</b></p><br>
                <hr><br>
            </div>
            <div class="a5">
                <div class="text-center"><b>MW Schedule: After 5 PM</b></div><br>
                <div class="text-white text-center">
                    <div id="nxttime"></div>
                </div>
                <br>
                <hr><br>
                <div class=" text-white text-center">
                    <p><b>SWITCH OFF/ UNAVAILABLE/BUSY/BLANK/FAILED </b></p><br>
                </div>
                <p><b>OD: cx is not available. mark waiting done. call back NextDay 10 am.</b></p><br>
                <p><b>OD: cx is busy. mark waiting done. call back the next day 10am tomorrow.</b></p><br>
                <p><b>OD: blank call. mark waiting done. call back the next day 10am.</b></p><br>
                <p><b>OD: Blank call. call got dropped automatically. mark waiting done. call back the next day 10am tomorrow.</b></p><br>
                <hr><br>
                <div class=" text-white text-center">
                    <p><b>CALL DROP -</b></p><br>
                </div>
                <p><b>OD: cx dropped the call after picking up the call. mark waiting done. call back the next day 10 am tomorrow.</b></p><br>
                <p><b>OD: cx dropped the call in between of the conversation. mark waiting done. call back the next day 10am tomorrow.</b></p><br>
                <p><b>OD: No response from the cx, 3 times verbiage given and disconnecting the call. mark waiting done. call back NextDay 10 am.</b></p><br>
                <p><b>OD: Cx put Call On Hold, 3 times verbiage given and disconnecting the call. call back the next day 10am. mark waiting done.</b></p><br>
                <p><b>OD: Due to tech issue unable to load Incident in SA mark waiting done. call back the next day 10am tomorrow. cx agreed.</b></p><br>
                <hr>
            </div>

        </div>
    </div>
    <script>
        function myFunction() {
            var a = document.getElementById("mynam");
            a.style.color = "yellow";
            var c = document.getElementById("tt0");
            c.style.color = "yellow";
            var d = document.getElementById("tt1");
            d.style.color = "yellow";
            var x = document.getElementById("cname").value;
            document.getElementById("name").innerHTML = x;
            var z = document.getElementById("tatdate").value;
            document.getElementById("tdate0").innerHTML = z;
            var q = document.getElementById("tatdate").value;
            document.getElementById("tdate1").innerHTML = q;

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
                    $('div.a5').show();
                });
            } else {
                $(function() {
                    $('div.a5').hide();
                    $('div.b5').show();
                });
            }
        }, 60000); // Repeat every 60000 milliseconds (1 minute)
    </script>
</body>

</html>