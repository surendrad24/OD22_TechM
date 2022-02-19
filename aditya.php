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
<?php
define("SITE_ADDR", "http://localhost/");
include("./include.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OD3 Aditya</title>
    <script src="https://kit.fontawesome.com/de84253868.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css" />
    <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js" data-semver="2.1.4" data-require="jquery@2.1.4"></script>
    <script data-require="jquery-cookie@1.3.1" data-semver="1.3.1" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
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
                    <button type="button" class="
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
                                "><a href="logout-user.php">Logout</a></button>
                </div><br>
                <!-- Countdown timer -->
                <div class="flex flex-wrap justify-center gap-4" x-data="timer()" x-init="countdown()">
                    <div class="timer-circle">
                        <div>
                            <span class="timer-count" x-text="days"></span>
                            <span class="timer-type">Days</span>
                        </div>
                    </div>
                    <div class="timer-circle">
                        <div>
                            <span class="timer-count" x-text="hours"></span>
                            <span class="timer-type">Hours</span>
                        </div>
                    </div>
                    <div class="timer-circle">
                        <div>
                            <span class="timer-count" x-text="minutes"></span>
                            <span class="timer-type">Minutes</span>
                        </div>
                    </div>
                    <div class="timer-circle">
                        <div>
                            <span class="timer-count" x-text="seconds"></span>
                            <span class="timer-type">Seconds</span>
                        </div>
                    </div>
                </div>
                <!-- Countdown timer ends -->
                <br>
                <div class="text-center"><b>Current Date and Time: </b></div><br>
                <div class="text-white text-center" id="time"></div><br>
                <marquee class="text-white text-center" width="100%" direction="left" height="50px">
                    Thanks to Aditya Subham for contributing your time and resources.
                </marquee>
                <br>
                <div>
                    <div id="wrapper">


                        <div id="main" class="shadow-box">
                            <div id="content">

                                <center>

                                    <form action="" method="GET" name="" class="mt-8 md:flex md:max-w-lg md:mx-auto">
                                        <div class="relative">
                                            <input required id="search" type="text" name="k" placeholder="Search for something" class="
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
                                            <label for="search" class="
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
                                ">Search</label>
                                        </div>
                                        <input type="submit" name="" value="Search" class="
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
                                    </form>
                                </center>

                                <?php

                                // CHECK TO SEE IF THE KEYWORDS WERE PROVIDED
                                if (isset($_GET['k']) && $_GET['k'] != '') {

                                    // save the keywords from the url
                                    $k = trim($_GET['k']);

                                    // create a base query and words string
                                    $query_string = "SELECT * FROM search_engine WHERE ";
                                    $display_words = "";

                                    // seperate each of the keywords
                                    $keywords = explode(' ', $k);
                                    foreach ($keywords as $word) {
                                        $query_string .= " keywords LIKE '%" . $word . "%' OR ";
                                        $display_words .= $word . " ";
                                    }
                                    $query_string = substr($query_string, 0, strlen($query_string) - 3);

                                    // connect to the database
                                    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

                                    $query = mysqli_query($conn, $query_string);
                                    $result_count = mysqli_num_rows($query);

                                    // check to see if any results were returned
                                    if ($result_count > 0) {

                                        // display search result count to user
                                        echo '<p><center><br /><div class="right"><b><u>' . $result_count . '</u></b> results found</div></center></p>';
                                        echo '<p><center>Your search for <b> <i>' . $display_words . '</i> </b><hr /><br /></center></p>';

                                        echo '<p><center><table class="search"></center></p>';

                                        // display all the search results to the user
                                        while ($row = mysqli_fetch_assoc($query)) {

                                            echo '<tr>
									<td><h3><center><b>' . $row['url'] . '</b></center></h3></td>
								</tr>
								<tr>
									<td><center>' . $row['blurb'] . '</center></td>
								</tr>';
                                        }

                                        echo '</table>';
                                    } else
                                        echo '<p><center>No results found. Please search something else.</center></p>';
                                } else
                                    echo '';
                                ?>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="mt-12 text-white text-center">
                    <button onClick="window.location.href='ordcan.php'" class="
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
                                ">Order Cancelled</button>
                    <button onClick="window.location.href='did.php'" class="
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
                                ">Delay In Delivery</button>
                    <button onClick="window.location.href='ofd.php'" class="
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
                                ">Out for Delivery</button> <br> <br>

                    </p>
                </div>

            </div>
            <footer class="mt-8">
                <img src="images/loogo.svg" class="h-10 opacity-80 mx-auto" alt="" />
                <div class="
                            mt-4
                            mx-auto
                            text-pink-800 text-lg
                            space-x-2
                            text-center
                        ">
                    <a href="#" class="social-link">
                        <i class="fab fa-facebook-f m-auto"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-twitter m-auto"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-pinterest-p m-auto"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-instagram m-auto"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-linkedin-in m-auto"></i>
                    </a>
                </div>
            </footer>
        </div>
    </div>
    <script>
        function timer() {
            return {
                days: "00",
                hours: "00",
                minutes: "00",
                seconds: "00",
                endTime: new Date(
                    "February 28, 2022 23:59:59 GMT+0530"
                ).getTime(),
                now: new Date().getTime(),
                timeLeft: 0,
                countdown: function() {
                    let counter = setInterval(() => {
                        this.now = new Date().getTime();
                        this.timeLeft = (this.endTime - this.now) / 1000;
                        this.seconds = this.format(this.timeLeft % 60);
                        this.minutes = this.format(this.timeLeft / 60) % 60;
                        this.hours =
                            this.format(this.timeLeft / (60 * 60)) % 24;
                        this.days = this.format(
                            this.timeLeft / (60 * 60 * 24)
                        );
                        if (this.timeLeft <= 0) {
                            clearInterval(counter);
                            this.seconds = "00";
                            this.minutes = "00";
                            this.hours = "00";
                            this.days = "00";
                        }
                    }, 1000);
                },
                format: function(value) {
                    if (value < 10) {
                        return "0" + Math.floor(value);
                    } else return Math.floor(value);
                },
            };
        }
    </script>
    <script type="text/javascript">
        window.onload = startInterval;

        function startInterval() {
            setInterval("startTime();", 1000);
        }

        function startTime() {
            document.getElementById('time').innerHTML = Date();
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
    </script>
    <!-- Start of Rocket.Chat Livechat Script -->
	<script type="text/javascript">
	(function(w, d, s, u) {
		w.RocketChat = function(c) { w.RocketChat._.push(c) }; w.RocketChat._ = []; w.RocketChat.url = u;
		var h = d.getElementsByTagName(s)[0], j = d.createElement(s);
		j.async = true; j.src = 'https://chat.macxp24x7.com/livechat/rocketchat-livechat.min.js?_=201903270000';
		h.parentNode.insertBefore(j, h);
	})(window, document, 'script', 'https://chat.macxp24x7.com/livechat');
	</script>
</body>

</html>