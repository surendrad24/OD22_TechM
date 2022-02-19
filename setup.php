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
        <title>OD 22</title>
        <script
            src="https://kit.fontawesome.com/de84253868.js"
            crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="styles.css" />
        <script
            defer
            src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"
        ></script>
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
            <div
                class="
                    py-12
                    flex flex-col
                    justify-between
                    min-h-screen
                    md:max-w-2xl
                    lg:max-w-3xl
                    mx-auto
                "
            >
                <div>
                    <div class="mt-12 text-white text-center">
                            <form method="POST" action="index.php">
							<input type="submit" name="send" value="Home"
                                class="
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
                                "
                            />
							</form>
							<br>
							
</div>

                </div>


<br><br><br>



<h1><b>"System Setup"</b></h1>
   

<br>


<br>
<h3><b>--VPN--</b></h3><br>


<p><b>Connection Name:</b> Noida_B19<br>

<b>Remote Gateway:</b> telework-noidab19.techmahindra.com<br>

Tick on [<b>*</b>] <b>Customize port:</b> 10443<br>
Tick on [<b>*</b>] Enable Single Sign On (SSO) for VPN Tunnel<br>

Click on Save<br>

<br></p>


<div class="mt-12 text-white text-center">
								<button onClick="window.location.href='FortiClientVPNSetup_6.4.0.1464_x64.zip'" 
							class="
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
                                "
								>Download</button>
							<br>
                        <p>* Direct download from TechM Server-> <a href="https://tim.techmahindra.com">Visit TIM</a></p>
                    </div>

<br>


<br>
<h3><b>Login Procedure </b></h3><br>


<p><b>Login Details</b><br>

<b>Username:</b> XX0D*****@techmahindra.com<br>
<b>Password:</b> XX@0D*****<br>
Check phone for <b>OTP</b><br>
Enter OTP<br>
============================================<br>
<br></p>


<h3><b>--Flipkart SA(Smart Assist)--</b></h3><br>


<p><b>Login Details</b><br>


<b>LDAP ID:</b> techmkflex21.*******<br>
<b>Password:</b> XXXXXXXX@***<br>

Click on Login<br>

<br></p>



<div class="mt-12 text-white text-center">
								<button onClick=" window.open('http://10.24.0.105/flipkart')" 
							class="
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
                                "
								>SA Login</button>
							<br>
                        
                    </div>

<br>

##############################################<br><br><br>

<h3><b>--Training LMS(nittio)--</b></h3><br>


<p><b>Login Details</b><br>


<b>Nittio ID:</b> techmkflex21*******.flipkart<br>
<b>Password:</b> XXXXXXXX@***<br>
Click on Login<br>
Check phone for <b>OTP</b><br>
Enter OTP<br>
<br></p>


<div class="mt-12 text-white text-center">
								<button onClick=" window.open('https://www.nittiolearn.com')" 
							class="
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
                                "
								>Nittio Login</button>
							<br>
                        
                    </div>

<br>


<h3><b>--Other Links--</b></h3>
<p>* Please note to open this links you should be logged in through yourr official Google ID (techmkflex21.*******@partner.flipkart.com)</p><br>


<p><b>Experience Recovery Form</b><br>
<p>* Click to open -> <a href="https://docs.google.com/forms/d/e/1FAIpQLScJtxYoJ5QI0rnzGl8eKN5FFPscTb00yI_83eEKpz8upWzmQQ/viewform"><i>Experience Recovery Form</i></a></p>
<br>
<p><b>PCD Database</b><br>
<p>* Click to open -> <a href="https://docs.google.com/spreadsheets/d/1zg-DEo6yO5d_wWCOseQua0tpQrrtchbBhVK1-3sWkX4/edit"><i>PCD Google Sheet Data</i></a></p>
<br>
<p><b>Google Meet</b><br>
<p>* Click to open -> <a href="https://meet.google.com/ije-fwzq-zid"><i>Google Meet</i></a></p>


<br></p>


<div class="mt-12 text-white text-center">
								<button onClick="window.location.href='PCD_Sheet_New.xlsm'" 
							class="
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
                                "
								>Download PCD Sheet</button>
							<br>
                    </div>

<br>






<br>

                        </p>
                    </div>
                    
                
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
  var d = document.getElementById("mynam1");
  d.style.color = "yellow";
  var e = document.getElementById("mynam2");
  e.style.color = "yellow";
  var x = document.getElementById("cname").value;
  document.getElementById("name").innerHTML = x;
  var y = document.getElementById("pnum").value;
  document.getElementById("num").innerHTML = y;
  var z = document.getElementById("pname").value;
  document.getElementById("prname").innerHTML = z;
  var q = document.getElementById("cname").value;
  document.getElementById("name1").innerHTML = q;
  var w = document.getElementById("cname").value;
  document.getElementById("name2").innerHTML = w;
}
</script>
<script>
function cpFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}
</script>
    </body>
	
	
  
  
</html>
