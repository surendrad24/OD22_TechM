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
    <title>OD22 C D WN</title>
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
                        <input required id="ph" type="text" name="phone_number" placeholder="Customer Phone No" class="
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
                        <label for="ph" class="
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
                                ">Phone (W)</label>

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
                                ">Amount (R3)</label>

                    </div>

                </form>
            </div>
            <div>
                <form action="mail_handler.php" method="post" class="mt-8 md:flex md:max-w-lg md:mx-auto">
                    <div class="relative">
                        <input required id="odid" type="text" name="order_id" placeholder="Order ID" class="
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
                        <label for="odid" class="
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
                                ">Order ID</label>

                    </div>
                    <div class="relative">
                        <input required id="tatdt" type="text" name="tat_dt" placeholder="TAT DD MMM" class="
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
                        <label for="tatdt" class="
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
                                ">Date (R2/D)</label>

                    </div>
                </form>
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
            </div>
            
            <hr>            
            <div class="b5">
                <div class="text-center"><b>RNR Schedule: + 4 Hours</b></div>
                <div class="text-white text-center">
                    <div id="4time"></div>
                </div>
                <hr>
                <p><b>OD: RNR 1 . call back after 4 hours. mark waiting done.</b></p>
                <p><b>OD: RNR 1 . call back after 4 hours. email N/A. mark waiting done.</b></p>
                <hr>
                <br>
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
                <p id="myInput1">Update on your order for <var id="cxpro1"><var id="pd1"><b> _Product Name_</b></var>.</var></p><br>
                <p id="myInput2">Hi <var id="cxnam1"><var id="cxn1"><b> _CX Name_</b></var></var>,<br>



                We tried to get in touch with you to discuss the issue about your product with order ID () but couldn't reach you. We’ll try calling you again within 4 hours. Meanwhile, please let us know if we can reach you on another number and a convenient time between 9 am and 9 pm by replying to this email.
We hope to hear from you soon.




                    We tried to get in touch with you on <var id="cxph1"><var id="phn1"> <b>_Phone Number_</b></var></var>, to discuss the issue about <var id="cxpro2"><var id="pd2"> <b>_Product Name_</b></var>,</var> but couldn't reach you.<br>We'll try calling you again within the next 4 hours. Meanwhile, please let us know if we can reach you on another number and a convenient time between 9 am and 9 pm by replying to this email. We hope to hear from you soon.
                </p>
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
                <p id="myInput3">
                    
                We tried reaching you to discuss your concern about product with order ID () Delay in delivery and have sent you an update to your registered email address. We'll call you again within the next 4hours.

                
                
                Update on query: We tried reaching you to discuss your concern about <var id="cxpro3"><var id="pd3"> <b>_Product Name_</b></var>,</var> Delay in delivery and have sent you an update to your registered email address. We will call you again within the next 4 hours.</p>
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
                <hr>
                <p><b>OD: RNR 1, email and sms sent.</b></p>
                <p><b>OD: RNR 1, SMS SENT.</b></p>
                <hr>
            </div>
            <div class="a5">
                <div class="text-center"><b>RNR Schedule: After 5 PM</b></div>
                <div class="text-white text-center">
                    <div id="nxttime"></div>
                </div>
                <hr>
                <p><b>OD: RNR 1 . call back Next day 10am. mark waiting done.</b></p>
                <p><b>OD: RNR 1 . call back Next day 10am. email N/A. mark waiting done.</b></p>
                <hr>
                <div class="text-white text-center"><b>Email</b></div>
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
		h-10
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                        Copy Subject
                    </button>
                </div>
                <br>
                <p id="myInput4">Update on your order for <var id="cxpro4"><var id="pd4"> <b>_Product Name_</b></var>.</var></p>
                <br>
                <p id="myInput5">Hi <var id="cxnam2"><var id="cxn2"><b> _CX Name_</b></var></var>,<br>


                We tried to get in touch with you to discuss the issue about your product with order ID () but couldn't reach you. We’ll try calling you again the next day. Meanwhile, please let us know if we can reach you on another number and a convenient time between 9 am and 9 pm by replying to this email.
We hope to hear from you soon.


                    We tried to get in touch with you on <var id="cxph2"><var id="phn2"> <b>_Phone Number_</b></var></var>, to discuss the issue about <var id="cxpro5"><var id="pd5"> <b>_Product Name_</b></var>,</var> but couldn't reach you.<br>We'll try calling you again the next day. Meanwhile, please let us know if we can reach you on another number and a convenient time between 9 am and 9 pm by replying to this email. We hope to hear from you soon.
                </p>
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
                <p id="myInput6">
                    
                We tried reaching you to discuss your concern about product with order ID () Delay in delivery and have sent you an update to your registered email address. We'll call you again the next day.

                
                
                Update on query: We tried reaching you to discuss your concern about <var id="cxpro6"><var id="pd6"> <b>_Product Name_</b></var>,</var> Delay in delivery and have sent you an update to your registered email address. We will call you again the next day.</p>
                <div class="tooltip mt-4 text-white text-center">
                    <button onclick="copyToClipboard('#myInput6')" onmouseout="outFunc()" class="
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

                <hr>
                <p><b>OD: RNR 1, email and sms sent.</b></p>
                <p><b>OD: RNR 1, SMS SENT.</b></p>
                <hr>
                </p>
            </div>







            <hr>
                <p><b>OD: RNR 2. mark waiting done till the OTAT.</b></p>
                <p><b>OD: RNR 2. mark waiting done till the OTAT + 3 days.</b></p>
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
                <p id="myInput2">Hi <var id="mynam"><var id="name"> <b>_CX Name_</b></var></var>,<br> 
                
                
                We tried calling you on registered contact number but were unable to reach you.
We are sorry to let you know that your order has been delayed due to some unexpected issues faced by the {seller/couriers}.
It will now be delivered to you {}.
To thank you for your patience, the seller/courier service provider will add shipping charges paid for this order as a Gift Card to your Flipkart account.

We hope to serve you soon.


                We tried calling you on registered contact number but were unable to reach you. We are sorry to let you know that your order has been delayed due to some unexpected issues faced by the seller/couriers. It will now be delivered to you within <var id="myph"><var id="num"> <b>_TAT_DATE_</b></var></var>, we contacted to discuss the issue but couldn't reach you.</p>
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
                <p id="myInput3">
                    
                We tried reaching you today to discuss your concern about your product.  We are sorry to let you know that your order has been delayed due to some unexpected issues faced by the {seller/couriers}. It will now be delivered to you {} and also have sent you an update to your registered email address.

                
                We tried reaching you today to discuss your concern about <var id="mypro1"><var id="prname1"> <b>_Product Name_</b></var>.</var> We have sent you an update to your registered email address on <var id="myph1"><var id="num1"> <b>_TAT_DATE_</b></var></var>, In case of any questions, please feel free to reach us here: https://www.flipkart.com/helpcentre.</p>
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
                </div>
                <br>
                <hr>
                <p><b>OD: RNR 2, email and sms sent.</b></p>
                <p><b>OD: RNR 2, SMS SENT.</b></p>
                <hr>



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
                <p id="myInput2">Hi <var id="mynam"><var id="name"> <b>_CX Name_</b></var></var>,<br> 
                
                
                We tried reaching you to speak to you about your order but were unable to connect.

We are sorry to let you know that your order for {} has been delayed due to an unexpected issue faced by the couriers. Once this order is delivered, a Gift Card equivalent to any shipping fee paid will be credited to your Flipkart account.
Alternatively, you can also choose to place a new order for this product and once this new order is delivered, in appreciation of your understanding, a Gift Card worth Rs. {} will be added to your Flipkart account within 72 hours. 

We would like to thank you for your understanding. Track your current order here: {link}

Stay Safe.
                
                
                
                
                We tried reaching you at <var id="myph"><var id="num"> <b>_Phone_Number_</b></var></var> to speak to you about your order but were unable to reach you.<br>
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
                <p id="myInput3">
                    
                Flipkart Update: Sorry, your order for ()  has been delayed. A Gift Card equivalent to the shipping charge will be provided on order delivery. Alternatively, you can place a new order for this item. In appreciation of your patience, a Gift Card worth Rs. () will be added to your Flipkart account post new order is delivered.

                
                
                We tried reaching you today at <var id="myph1"><var id="num1"> <b>_Phone_Number_</b></var></var>to discuss your concern about your product for <var id="mypro2"><var id="prname2"> <b>_Product Name_</b></var>.</var> has been delayed. A Gift Card equivalent to the shipping charge will be provided on order delivery. Alternatively, you can place a new order for this item. In appreciation of your patience, a Gift Card worth Rs. { } will be added to your Flipkart account post new order is delivered. </p>
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
                <p><b> OD: RNR 3, Email and sms sent.</b></p>
                <p><b> OD: RNR 3. Email N/A, SMS SENT.</b></p>
                <hr>






            <div>



            
                <div class="text-white text-center">
                    <p><b>CANCELLED / TERMINAL</b></p><br>
                </div>
                <hr style="width:50%; margin: auto;" /><br>
                <p><b>OD: RNR . As per SA, Order already got cancelled by the terminator. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
                <p><b>OD: RNR . As per SA, Cx already canceled the order. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
                <hr style="width:50%; margin: auto;" /><br>
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
                <p id="myInput1">Update on your order for <var id="cxpro1"><var id="pd1"><b> _Product Name_</b></var>.</var></p>
                <br>
                <p id="myInput2">Hi <var id="cxnam1"><var id="cxn1"><b> _CX Name_</b></var></var>,<br><br>We tried to get in touch with you on your registered contact number to discuss the issue about your <var id="cxpro2"><var id="pd2"> <b>_Product Name_</b></var>,</var> with order ID <var id="odid1"><var id="od1"><b>_ORDER ID_</b></var></var>but couldn't reach you. <br>We are sorry to let you know that your order was cancelled due to a prolonged delay in the delivery of your order as they did not want to keep you waiting.<br>Please note that you can choose to place a fresh order for this item within the next 7 days and in case the price of the product has increased, we will reach out to you, for support. However, if the price of the product remains the same, a Gift Card of some amount will be added to your Flipkart account within 72 hours of the order delivery.<br><br>Thanks for your understanding. We hope to serve you soon.</p>
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
                <div class="text-white text-center">
                    <p><b>DELIVERED</b></p><br>
                </div>
                <hr style="width:50%; margin: auto;" /><br>
                <p><b>OD: RNR . As per SA Cx already received the order. Hence closing the incident as per process. case solved.</b></p><br>
                <p><b>OD: RNR . As per SA Cx already received the order. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
                <hr style="width:50%; margin: auto;" /><br>
                <div class="tooltip text-white text-center">
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
                        Copy Subject
                    </button>
                </div>
                <br><br>
                <p id="myInput3">Update on your order for <var id="cxpro3"><var id="pd3"> <b>_Product Name_</b></var>.</var> </p>
                <br>
                <p id="myInput4">Hi <var id="cxnam2"><var id="cxn2"><b> _CX Name_</b></var></var>, <br><br>We tried getting in touch with you on <var id="cxph1"><var id="phn1"><b>_Phone Number_</b></var></var> to talk about the delivery of your order <var id="odid2"><var id="od2"><b>_ORDER ID_</b></var>,</var> for <var id="cxpro4"><var id="pd4"> <b>_Product Name_</b></var>,</var> but were not able to reach you. While we were in touch with the courier service provider to ensure timely delivery of your order, they have confirmed that one of their delivery executives has delivered the <var id="cxpro5"><var id="pd5"> <b>_Product Name_</b></var>,</var> on <var id="tatdt1"><var id="tat1"><b>_TAT_DATE_</b></var></var>. We'd like to get confirmation from you about the delivery so that we can share the f eedback with the couriers. <br><br>Thanks for your understanding.</p>
                <br>
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
                        Copy Email
                    </button>
                </div>
                <br>
                <br>
                <hr>
                <br>
                <div class="text-white text-center">
                    <p><b>WRONG NUMBER</b></p><br>
                </div>
                <hr style="width:50%; margin: auto;" /><br>
                <p><b>OD: RNR . Wrong Number provided, Cx confirmed. Hence closing the incident as per process. case solved.</b></p><br>
                <p><b>OD: RNR . Wrong Number provided, Cx confirmed. Activity log inactive, hence couldn't solve the case and mentioned over the notes. email sent. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
                <p><b>OD: RNR . Wrong Number provided, Cx confirmed, Activity log inactive, hence couldn't solve the case and mentioned over the notes. email N/A. unable to send email. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
                <hr style="width:50%; margin: auto;" /><br>
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
                        Copy Subject
                    </button>
                </div>

                <br><br>

                <p id="myInput5">Update on your order for <var id="cxpro6"><var id="pd6"> <b>_Product Name_</b></var>.</var></p>


                <br>


                <p id="myInput6">Hi <var id="cxnam3"><var id="cxn3"><b> _CX Name_</b></var></var>, <br><br>We tried getting in touch with you at <var id="cxph2"><var id="phn2"><b>_Phone Number_</b></var></var> to discuss about your order <var id="odid3"><var id="od3"><b>_ORDER ID_</b></var></var> for <var id="cxpro7"><var id="pd7"> <b>_Product Name_</b></var>,</var> but couldn't reach you. Please share an alternate contact number and a convenient time to contact you between 9 am and 9 pm so we can coordinate with the courier service provider to ensure that the pickup is completed without any further delay. We look forward to hearing from you.</p><br>
                <br>
                <div class="tooltip text-white text-center">
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
                        Copy Email
                    </button>
                </div>
                <br>
                <br>
                <hr><br>
            </div>
            <br>
            <div class="text-center"><b>Current Date and Time: </b></div><br>
            <div class="text-white text-center" id="time"></div>
            <br>

        </div>
    </div>

    <script>
        function myFunction() {
            var a1 = document.getElementById("cxnam1");
            a1.style.color = "yellow";
            var a2 = document.getElementById("cxnam2");
            a2.style.color = "yellow";
            var a3 = document.getElementById("cxnam3");
            a3.style.color = "yellow";
            var a4 = document.getElementById("cxph1");
            a4.style.color = "yellow";
            var aa4 = document.getElementById("cxph2");
            aa4.style.color = "yellow";
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
            var a10 = document.getElementById("cxpro6");
            a10.style.color = "yellow";
            var a11 = document.getElementById("cxpro7");
            a11.style.color = "yellow";
            var a12 = document.getElementById("odid1");
            a12.style.color = "yellow";
            var a13 = document.getElementById("odid2");
            a13.style.color = "yellow";
            var a14 = document.getElementById("odid3");
            a14.style.color = "yellow";
            var a15 = document.getElementById("tatdt1");
            a15.style.color = "yellow";

            var b1 = document.getElementById("cx").value;
            document.getElementById("cxn1").innerHTML = b1;
            var b2 = document.getElementById("cx").value;
            document.getElementById("cxn2").innerHTML = b2;
            var b3 = document.getElementById("cx").value;
            document.getElementById("cxn3").innerHTML = b3;
            var b4 = document.getElementById("ph").value;
            document.getElementById("phn1").innerHTML = b4;
            var bb4 = document.getElementById("ph").value;
            document.getElementById("phn2").innerHTML = bb4;
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
            var b10 = document.getElementById("pdnam").value;
            document.getElementById("pd6").innerHTML = b10;
            var b11 = document.getElementById("pdnam").value;
            document.getElementById("pd7").innerHTML = b11;
            var b12 = document.getElementById("odid").value;
            document.getElementById("od1").innerHTML = b12;
            var b13 = document.getElementById("odid").value;
            document.getElementById("od2").innerHTML = b13;
            var b14 = document.getElementById("odid").value;
            document.getElementById("od3").innerHTML = b14;
            var b15 = document.getElementById("tatdt").value;
            document.getElementById("tat1").innerHTML = b15;
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