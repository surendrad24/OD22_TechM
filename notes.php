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

      <div class="mt-12 text-white text-center">
        <marquee width="100%" direction="left" height="50px">
          This is a sample scrolling text that has scrolls texts to left.
        </marquee>
      </div>
      <br>
      <div class="text-center"><b>Current Date and Time: </b></div><br>
      <div class="text-white text-center" id="time"></div>
      <br>
      <div class="b5">
        <hr style="width:50%; margin: auto;" /><br>
        <br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>General Notes</b></p><br>
        </div>
        <p><b>OD: cx is asking for compensation as the product is delayed in delivery.</b></p><br>
        <p><b>OD: Informed the cx to contact the cx care toll-free number 1800 202 9898. cx agreed.</b></p><br>
        <p><b>OD: cx is busy. mark waiting done. call back after 30 min as requested by cx.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>- LANGUAGE BARRIER -</b></p><br>
        </div>
        <p><b>OD: Language barrier, informed the cx to wait for 24 hours. cx agreed. Form fill up done.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>- CPD - RPD - TAT - TAT+3D -</b></p><br>
        </div>
        <p><b>OD:As CPD is not breached informed the cx to wait till the given CPD. mark waiting done. cx agreed.</b></p><br>
        <p><b>OD:As CPD is today informed the cx to wait till EOD. mark waiting done tomorrow 10am. cx agreed.</b></p><br>
        <hr style="width:50%; margin: auto;" /><br>
        <p><b>OD:As repromise date is not breached informed the cx to wait till the given repromise date. mark waiting done. cx agreed.</b></p><br>
        <p><b>OD: informed the cx to wait till today as the repromise date is given today's date. also informed the cx to wait till the OTAT. cx agreed.</b></p><br>
        <hr style="width:50%; margin: auto;" /><br>
        <p><b>OD: informed the cx to wait till the given TAT for the resolution. mark waiting done. cx agreed. </b></p><br>
        <p><b>OD: informed the cx to wait for OKT + 3 days for the resolution. cx agreed. mark waiting done.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>- ORDER DELIVERED -</b></p><br>
        </div>
        <p><b>OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: As per SA Cx already received the order, hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: As per SA Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>- OUT FOR DELIVERY -</b></p><br>
        </div>
        <p><b>OD: Informed Cx to wait till 7 PM as the product is OFD and mark waiting done 10am tomorrow.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>- CANCEL ORDER -</b></p><br>
        </div>
        <p><b>OD: cx stated that <span class="highlight">he</span> wants to cancel the order. behalf of the cx cancelling the order. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: cx stated <span class="highlight">he</span> doesn't want the product. cx also stated he will self serve and cancel the product. hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: cx stated that <span class="highlight">she</span> wants to cancel the order. behalf of the cx cancelling the order. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: cx stated <span class="highlight">she</span> doesn't want the product. cx also stated he will self serve and cancel the product. Hence closing the incident as per process. case solved.</b></p><br>
        <hr style="width:50%; margin: auto;" /><br>
        <p><b>OD: cx stated that <span class="highlight">he</span> wants to cancel the order. behalf of the cx cancelling the order. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: cx stated that <span class="highlight">she</span> wants to cancel the order. behalf of the cx cancelling the order. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <hr style="width:50%; margin: auto;" /><br>
        <p><b>OD: Cx already cancelled the order, asked the cx to place a fresh order. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: Cx already cancelled the order, asked the cx to place a fresh order. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: As per SA, Cx already canceled the order. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: As per SA, Cx already canceled the order. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <hr style="width:50%; margin: auto;" /><br>
        <p><b>OD: As per SA, Order already got cancelled by the terminator. Requested the cx to place a fresh order. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: As per SA, Order already got cancelled by the terminator. Requested the cx to place a fresh order. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: As per SA, Order already got cancelled by the terminator. Requested the cx to place a fresh order within 7 days. TOA mentioned. EGV details provided to the cx. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: As per SA, Order already got cancelled by the terminator. Requested the cx to place a fresh order within 7 days. TOA mentioned. EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <hr style="width:50%; margin: auto;" /><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>- SAME STATE MISROUTE -</b></p><br>
        </div>
        <p><b>OD: Same stated misroute requested the cx to wait for 72 hrs. cx agreed. Mark waiting done till 72 hrs.</b></p><br>
        <p><b>OD: Same stated misroute requested the cx to wait for 48 hrs. As the previous agent asked the cx to wait for 72 hrs. cx agreed. mark waiting done till 48 hrs.</b></p><br>
        <p><b>OD: Same stated misroute requested the cx to wait for 24 hrs. As the previous agent asked the cx to wait for 48 hrs. cx agreed. mark waiting done till 24 hrs.</b></p><br>
        <p><b>OD: Same stated misroute as 72 hrs exceeded. Requested the cx to place a fresh order. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: Same stated misroute as 72 hrs exceeded. Requested the cx to place a fresh order. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: Same stated misroute as 72 hrs exceeded. Requested the cx to place a fresh order within 7 days. TOA mentioned. EGV details provided to the cx. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: Same stated misroute as 72 hrs exceeded. Requested the cx to place a fresh order within 7 days. TOA mentioned. EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>- NON-SERVICEABLE PINCODE -</b></p><br>
        </div>
        <p><b>OD: Non serviceable pincode. Requested the cx to wait for 48 hrs. cx agreed. mark waiting done till 48 hrs. Previous product got delivered at the same pincode. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: Non serviceable pincode. Requested the cx to wait for 24 hrs. cx agreed. mark waiting done till 24 hrs. As the previous agent asked the cx to wait for 48 hours. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: Non serviceable pincode. Cx's pincode is showing serviceable at the moment. Requested the cx to place a fresh order within 7 days. TOA mentioned. EGV details provided to the cx. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: Non serviceable pincode. Cx's pincode is showing serviceable at the moment. Requested the cx to place a fresh order within 7 days. TOA mentioned. EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: Non serviceable pincode. Requested the cx to place a fresh order in a different pincode. Requested the cx to place a fresh order within 7 days. TOA mentioned. EGV details provided to the cx. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: Non serviceable pincode. Requested the cx to place a fresh order in a different pincode. Requested the cx to place a fresh order within 7 days. TOA mentioned. EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: Non serviceable pincode. Product is showing out of stock. Unable to place a fresh order. Hence asked the cx to wait till the product comes in stock. TOA will be provided within next 3 business days. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: Non serviceable pincode. Product is showing out of stock. Unable to place a fresh order. Hence asked the cx to wait till the product comes in stock. TOA will be provided within next 3 business days. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>- OTHER STATE MISROUTE -</b></p><br>
        </div>
        <p><b>OD: Other state misroute requested the cx to place a fresh order within 7 days. TOA metioned. EGV details provided to the cx. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: Other state misroute requested the cx to place a fresh order within 7 days. TOA metioned. EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>- OTHERS -</b></p>
        </div>
        <p><b>OD: RTO requested the cx to place a fresh order within 7 days. TOA metioned. EGV details provided to the cx. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: RTO requested the cx to place a fresh order within 7 days. TOA metioned. EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: NSS requested the cx to place a fresh order within 7 days. TOA motioned. EGV details provided to the cx. Hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: NSS requested the cx to place a fresh order within 7 days. TOA motioned. EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>

        <hr><br>


        <br>

        </p>
      </div>
      <div class="a5">
        <p>
          Delay In Delivery
          Delay In Shipment
          NSS
          Other State Misroute
          Same State Misroute
          Product is damaged
          Address Change
          Status Check
          CX Dosent Want Item
          FE Details
        </p>
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