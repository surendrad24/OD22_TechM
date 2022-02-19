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
  <title>OD22 MW Cx Int</title>
  <script src="https://kit.fontawesome.com/de84253868.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css" />
  <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
        <div class="mt-12 text-white text-center">
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



        <div>
          <br>
          <div class=" text-white text-center">
            <p><b>[[MARK WAITING == Minimum 30 mins]]</b></p>
          </div>
          <br>
          <hr>
          <br>
          <br>
          <div>
            <div class=" text-white text-center">
              <p><b>::CUSTOMER MARK WAITING SCENARIOS::</b></p>
            </div>
            <br>
            <p>1. RNR 1 -->> set cx waiting for 4 hours.<br>
              2. RNR 2 -->> set cx waiting till OKT.<br>
              3. Language Barrier -->> set cx waiting for 24 hours.<br>
              4. Call Disconnected -->> set cx waiting for 4 hours.<br>
              5. CX Busy/Asked to call later -->> set cx waiting for 4 hours/the time mentioned by Cx.<br>
              6. Blank Call -->> set cx waiting for 4 hours.<br></p>
          </div>
          <br>
          <hr>
          <br>
          <div>
            <div class=" text-white text-center">
              <p><b>::INTERNAL MARK WAITING SCENARIOS::</b></p>
            </div>
            <br>
            <p>1. OKT -->> set int waiting.<br>
              2. OKT+3 -->> set int waiting.<br>
              3. CPD -->> set int waiting.<br>
              4. Revised CPD -->> set int waiting.<br>
              5. CPD +7 days inform the CX and close da case. If not 24 hrs mark waiting internal add notes form fill up.<br>
              6. Issue Created + 7 days inform da CX and close the case. If not 24 hrs mark waiting internal add notes form fill up.<br>
              7. Same State Misroute -->> set int waiting for 72 hours.<br>
              8. Same State misroute if 72 hrs completed. Inform da CX to place a fresh order providing TOA and EGV details close the case. If not 24 hrs mark waiting internal add notes form fill up.<br>
              9. Out For Delivery -->> set cx waiting for next day 10 AM.<br>
              10. NSS(Product delivered in the same pincode) ---> set int waiting for 48 hours.<br>
              11. Solved Cases where solving option is not there -->> set int waiting for 24 hours.<br>
          </div>
          <br>
          <hr>
          <br>
          <div>
            <div class=" text-white text-center">
              <p><b>::PROCESS TO SOLVE A DELIVERED CASE::</b></p>
            </div>
            <br>
            <p> Perform Task ==>> Check Update --> Yes --> Issue Resolved --> Notes Update.</p>
            <br>
            <br>
            </p>
          </div>
        </div>
      </div>
</body>

</html>