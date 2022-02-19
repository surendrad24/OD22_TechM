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
  <title>OD22 Hindi</title>
  <script src="https://kit.fontawesome.com/de84253868.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css" />
  <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
  <style>
    .highlight {
      color: red
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 80%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    @keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    /* The Close Button */
    .close {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .modal-header {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
    }

    .modal-body {
      padding: 2px 16px;
    }

    .modal-footer {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
    }
  </style>

<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
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
        <div class="text-center">
          <button onClick="window.location.href='index.php'" class="
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
                                ">Home </button> <br><br>
        </div>

      </div>
      <br>
      <div class=" text-white text-center">
        <p><b>- Hindi -</b></p><br>
        <hr><br>
      </div>
      <div class="text-white text-center">
        <p>-Intro-</p>
      </div>
      <br><br>

      <p>Namaskar mai <b>_Your_Name_</b> baat kr raha hu Flipkart se, kya meri baat <b>_CX Name_</b> se ho rhi ha? Dhanyawad <b>_CX Name_</b> aapka naam confirm karne ke liye. <br></p>

      <p>Haal hi me aapne Flipkart se <b>_Product Name_</b> ka order place kiya tha ye call isi ke baade me ha, kya ye sahi samay ha aapse baat karne ke liye?
        Dhanyawad. </p><br>
      <hr style="width:50%; margin: auto;" /><br>
      <div class="text-white text-center">
        <p>-Hold Procedure-</p>
      </div>
      <br>

      <p>Information check karne me thora samay lag sakta ha, to kya mai aapke call ko ek minute ke liye hold pe rakh sakta hu? Dhanyawad.</p><br>
      <hr style="width:50%; margin: auto;" /><br>
      <div class="text-white text-center">
        <p>-Closing-</p>
      </div>
      <br>

      <p>Kya mai kisi aur tarike se aapko help kr sakta hu?</p><br>
      <hr style="width:50%; margin: auto;" /><br>
      <div class="text-white text-center">
        <p>-Customer Satisfaction-</p>
      </div>
      <br>
      <p><b>_CX Name_</b> aapka feedback hamare liye bahut hi mahatvapurna hai. Kripya iss call ke baad milne wale email survey ke dwara aap humare baatcheet ke anubhav ko zaroor share karen.</p>

      <br>
      <p>Flipkart me shopping krne ke liye dhanyawad. Aapka din shubh ho.</p>
      
      <br>
      <hr><br>

      <h2><b>1st Scenario (DID)</b></h2>

      <p>Delay In Delivery (CPD not yet breached)<br>CPD</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal1" class="
									modal-button
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
          Open Script</button><br>
        <br>

      </div>


      <!-- The Modal -->
      <div id="myModal1" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>Delay In Delivery (CPD not yet breached)</h2><br>
          </div>
          <div class="modal-body">
            <p><br><b>APOLOGY:-----------------------</b><br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product logistics Issue ke karan abhi tak deliver nehi hopaya.<br>
              Uske liye maafi chahunga hone wale dikkat k liye.<br><br>
              <b>EMPATHY AND CUSTOMER CENTRICITY (willingness to help):-----------------------</b><br>
              Main aapka/aapki baat samaj paraha hu.......... <br>
              Aap bilkul nishchint rahiye main aapko sahayata karne ki puri koshish karunga. <br>
              Sir/Mam Notes me mention kr raha hu.....Aur asha kartha hu dubara yesa na ho.<br><br>
              <b>SOLUTION:-----------------------</b><br><br>
              CHECK Incident Notes History -> TASKMASTER. (Check if any AGENT informed Cx about 72HRS | 48HRS or NOT)<br><br>
              🔹 If Agent<b>INFORMED</b>Cx(Check if 48HRS or 24HRS Passed)inform the same -> INT MW.<br>
              🔸->If 24HRS passed (Inform to wait more 48HRS)<br>
              🔸->If 48HRS passed (Inform to wait more 24HRS)<br>
              🔸->If 72HRS passed (SKIP to PRO-ACTIVE)<br><br>
              🔹 If Agent<b>DIDN'T INFORMED about 72HRS | 48HRS inform the same -> INT MW.</b><br>
              Main request karunga ki aap (72 HRS |48HRS) tak wait kigiye.<br>
              Team is main kaam karraha hain....Aur puri koshish karraha hain....jaldi se jaldi Product ki (DELIVERY) Karne ke liye. <br><br>
              🔹 If <b>TASKMASTER BREACHED OR TASKMASTER notes it's given (null, escalated to hub or whatever) -> then next step.</b><br><br>
              🔹 PRO-ACTIVE RESOLUTION.<br>
              🔸Follow the notes and provide the information accordingly. (If nothing is there then next step follow)<br>

              <div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>

              <small>Proactive Resolution:IVR ER - <strike>BARF4MYVSPWGZJ5E</strike> : Customer calls, inform the customer that the order has been delayed due to unexpected issues experienced by the couriers. If you like, you can wait for this order and once this order is delivered, a Gift Card equivalent to any shipping fees applicable for this order will be credited to your Flipkart account. Alternatively, if you dont want to wait, you can also choose to place a new order for this product and once this new order is delivered, in appreciation of your understanding, a Gift Card worth Rs. *** will be added to your Flipkart account within 3 days.</small><br><br>
              🔹 Product current status - wait till CPD.<br>
              Main request karunga ki aap (CPD) tak wait kigiye.<br>
              Team is main kaam karraha hain....Aur puri koshish karraha hain....jaldi se jaldi Product ki (DELIVERY) Karne ke liye. <br>
              <span class="highlight"><b>Int MW till CPD 10 am.</b></span><br>
              <span class="highlight">OD:As CPD is not breached informed the cx to wait till the given CPD. mark waiting done. cx agreed.</span><br>
              <span class="highlight">OD:As CPD is today informed the cx to wait till EOD. mark waiting done tomorrow 10am. cx agreed.</span><br><br>
              🔹If <b>OFD </b>Inform Cx to Wait till 7PM Today<br>
              Main request karunga ki aap Aj Sham 7 Baje tak wait kigiye.<br>
              Logistics team puri koshish karraha hain Aj 7 Baje, ya usse phele Product ki (DELIVERY) Karne ke liye.<br>
              <span class="highlight"><b>Int MW 24HRS.</b></span><br>
              <span class="highlight">OD: Informed Cx to wait till 7 PM as the product is OFD. Mark waiting done for 24 hours.</span><br><br>
              🔹If <b>Delivered </b>Indirect Confirmation of Delivery From Cx<br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product Aj ka date pe delivered dhika raha he. Ap product receive kiye, Right Sir/Mam? <br>
              <b>{</b>Close Case<b>}</b> Perform Task ==>> Check Update --> Yes --> Issue Resolved --> Notes Update.<br>
              <span class="highlight">OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved.</span><br><br>
              🛑<b>Else</b> -> Form Fillup -> Tech Issue -> <br>
              <span class="highlight"><b>Int MW 24HRS.</b></span><br>
              <span class="highlight">OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</span><br><br>
              <b>IF Cx Agree:-----------------------</b> <br>
              (bohot bohot dhaanyabaad Sir/Maam).<br><br>
            </p>
          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br></h3>
          </div>
        </div>

      </div>

      <h2><b>2nd Scenario (DID)</b></h2>

      <p>Delay In Delivery (CPD Breached)<br>CPD+3 Days</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal2" class="
									modal-button
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
          Open Script</button><br>
        <br>

      </div>

      <!-- The Modal -->
      <div id="myModal2" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>Delay In Delivery (CPD Breached) --> inform about TAT</h2><br>
          </div>
          <div class="modal-body">
            <p><br><b>APOLOGY:-----------------------</b><br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product logistics Issue ke karan abhi tak deliver nehi hopaya.<br>
              Uske liye maafi chahunga hone wale dikkat k liye.<br><br>
              <b>EMPATHY AND CUSTOMER CENTRICITY (willingness to help):-----------------------</b><br>
              Main aapka/aapki baat samaj paraha hu.......... <br>
              Aap bilkul nishchint rahiye main aapko sahayata karne ki puri koshish karunga. <br>
              Sir/Mam Notes me mention kr raha hu.....Aur asha kartha hu dubara yesa na ho.<br><br>
              <b>SOLUTION:-----------------------</b><br><br>
              CHECK Incident Notes History -> TASKMASTER. (Check if any AGENT informed Cx about 72HRS | 48HRS or NOT)<br><br>
              🔹 If Agent<b>INFORMED</b>Cx(Check if 48HRS or 24HRS Passed)inform the same -> INT MW.<br>
              🔸->If 24HRS passed (Inform to wait more 48HRS)<br>
              🔸->If 48HRS passed (Inform to wait more 24HRS)<br>
              🔸->If 72HRS passed (SKIP to PRO-ACTIVE)<br><br>
              🔹 If Agent<b>DIDN'T INFORMED about 72HRS | 48HRS inform the same -> INT MW.</b><br>
              Main request karunga ki aap (72 HRS |48HRS) tak wait kigiye.<br>
              Team is main kaam karraha hain....Aur puri koshish karraha hain....jaldi se jaldi Product ki (DELIVERY) Karne ke liye. <br><br>
              🔹 If <b>TASKMASTER BREACHED OR TASKMASTER notes it's given (null, escalated to hub or whatever) -> then next step.</b><br><br>
              🔹 PRO-ACTIVE RESOLUTION.<br>
              Follow the notes and provide the information accordingly. (If nothing is there then next step follow)<br><br>
              🔹 Product current status - CPD BREACHED.<br>
              🔹 (Check CPD + 3 Days Passed) -> If CPD + 3days is left.👇🏻<br>
              Main request karunga ki aap (OTAT) tak wait kigiye.<br>
              Team is main kaam karraha hain....Aur puri koshish karraha hain....jaldi se jaldi Product ki (RESOLUTION) Karne ke liye. <br><br>
              <span class="highlight"><b>Int MW till TAT 10 am.</b></span><br>
              <span class="highlight">OD:As CPD is not breached informed the cx to wait till the given CPD. mark waiting done. cx agreed.</span><br>
              <span class="highlight">OD:As CPD is today informed the cx to wait till EOD. mark waiting done tomorrow 10am. cx agreed.</span><br><br>
              🔹If <b>OFD </b>Inform Cx to Wait till 7PM Today<br>
              Main request karunga ki aap Aj Sham 7 Baje tak wait kigiye.<br>
              Logistics team puri koshish karraha hain Aj 7 Baje, ya usse phele Product ki (DELIVERY) Karne ke liye.<br>
              <span class="highlight"><b>Int MW 24HRS.</b></span><br>
              <span class="highlight">OD: Informed Cx to wait till 7 PM as the product is OFD. Mark waiting done for 24 hours.</span><br><br>
              🔹If <b>Delivered </b>Indirect Confirmation of Delivery From Cx<br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product Aj ka date pe delivered dhika raha he. Ap product receive kiye, Right Sir/Mam? <br>
              <b>{</b>Close Case<b>}</b> Perform Task ==>> Check Update --> Yes --> Issue Resolved --> Notes Update.<br>
              <span class="highlight">OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved.</span><br><br>
              🛑<b>Else</b> -> Form Fillup -> Tech Issue -> <br>
              <span class="highlight"><b>Int MW 24HRS.</b></span><br>
              <span class="highlight">OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</span><br><br>
              <b>IF Cx Agree:-----------------------</b> <br>
              (bohot bohot dhaanyabaad Sir/Maam).<br><br>
            </p>
          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br></h3>
          </div>
        </div>

      </div>


      <h2><b>3rd Scenario (DID) </b></h2>

      <p>Delay In Delivery CPD+3D Breached |🛑| CPD + 3 days < OTAT |🛑| Call lands on OTAT date<br> -> Fresh Order with TOA</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal3" class="
									modal-button
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
          Open Script</button><br>
        <br>

      </div>


      <!-- The Modal -->
      <div id="myModal3" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>Delay In Delivery (CPD + 3 Days Breached)<br>
              CPD+3D Breached --> Inform about Fresh Order(EGV&TOA)<br>
              CPD + 3 days < OTAT --> Inform about Fresh Order(EGV&TOA)<br>
                Call lands on OTAT date--> Inform about Fresh Order(EGV&TOA)</h2><br>
          </div>
          <div class="modal-body">
            <p><br><b>APOLOGY:-----------------------</b><br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product logistics Issue ke karan abhi tak deliver nehi hopaya.<br>
              Uske liye maafi chahunga hone wale dikkat k liye.<br><br>
              <b>EMPATHY AND CUSTOMER CENTRICITY (willingness to help):-----------------------</b><br>
              Main aapka/aapki baat samaj paraha hu.......... <br>
              Aap bilkul nishchint rahiye main aapko sahayata karne ki puri koshish karunga. <br>
              Sir/Mam Notes me mention kr raha hu.....Aur asha kartha hu dubara yesa na ho.<br><br>
              <b>SOLUTION:-----------------------</b><br><br>
              CHECK Incident Notes History -> TASKMASTER. (Check if any AGENT informed Cx about 72HRS | 48HRS or NOT)<br><br>
              🔹 If Agent<b>INFORMED</b>Cx(Check if 48HRS or 24HRS Passed)inform the same -> INT MW.<br>
              🔸->If 24HRS passed (Inform to wait more 48HRS)<br>
              🔸->If 48HRS passed (Inform to wait more 24HRS)<br>
              🔸->If 72HRS passed (SKIP to PRO-ACTIVE)<br><br>
              🔹 If Agent<b>DIDN'T INFORMED about 72HRS | 48HRS inform the same -> INT MW.</b><br>
              Main request karunga ki aap (72 HRS |48HRS) tak wait kigiye.<br>
              Team is main kaam karraha hain....Aur puri koshish karraha hain....jaldi se jaldi Product ki (DELIVERY) Karne ke liye. <br><br>
              🔹 If <b>TASKMASTER BREACHED OR TASKMASTER notes it's given (null, escalated to hub or whatever) -> then next step.</b><br><br>
              🔹 PRO-ACTIVE RESOLUTION.<br>
              Follow the notes and provide the information accordingly. (If nothing is there then next step follow)<br><br>
              🔹 Product current status - CPD + 3 Days Breached | CPD + 3 Days breached and still OTAT is left | Call lands on OTAT date<br>
              🔹If <b>CPD+3D Breached | CPD + 3 days < OTAT | Call lands on OTAT date</b> Fresh Order(EGV&TOA)<br>
                  🔸-> Inform cx to to place a Fresh Order(EGV&TOA)<br>
                  Main request karunga ki aap Ek fresh order place kigiye, 7 din k andar.<br>
                  Agar product ki price bhad jata hai to apko msg ya email ke dwara notify kar diya jaega.<br>
                  Agar price same rahe ya kam ho jata he to apko order value ka upar <b>TOA GRID</b> as a compensation diye jaege.<br>
                  <!-- Trigger/Open The Modal -->
                  <div class="mt-4 text-white text-center">
                    <button onclick="myFunction()" href="#myModal15" class="
            modal-button
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
                      TOA GRID</button><br>
                    <br>
                  </div>
                  Joki apko apni neyi product ki delivery ke 72hrs k andar apke flipkart gift wallet pe credit ho jayege.<br><br>
                  Main is TOA ke bareme mein kuch aur details apko batana chahunga ki...<br>
                  Yeh amount 1 sal tak valid hain and yeh non transferrable amount hain....<br>
                  Jisse ap prepaid order k payment k sath club kar sakte hain only on flipkart paltform..
                  <br>
                  <span class="highlight"><b>Int MW 24HRS.</b></span><br>
                  <span class="highlight"><b>-NOTES-</b></span><br><br>

                  🔹If <b>OFD </b>Inform Cx to Wait till 7PM Today<br>
                  Main request karunga ki aap Aj Sham 7 Baje tak wait kigiye.<br>
                  Logistics team puri koshish karraha hain Aj 7 Baje, ya usse phele Product ki (DELIVERY) Karne ke liye.<br>
                  <span class="highlight"><b>Int MW 24HRS.</b></span><br>
                  <span class="highlight">OD: Informed Cx to wait till 7 PM as the product is OFD. Mark waiting done for 24 hours.</span><br><br>
                  🔹If <b>Delivered </b>Indirect Confirmation of Delivery From Cx<br>
                  Sir/ Maam jo ki main dekh pa raha hu aapka product Aj ka date pe delivered dhika raha he. Ap product receive kiye, Right Sir/Mam? <br>
                  <b>{</b>Close Case<b>}</b> Perform Task ==>> Check Update --> Yes --> Issue Resolved --> Notes Update.<br>
                  <span class="highlight">OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved.</span><br><br>
                  🛑<b>Else</b> -> Form Fillup -> Tech Issue -> <br>
                  <span class="highlight"><b>Int MW 24HRS.</b></span><br>
                  <span class="highlight">OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</span><br><br>
                  <b>IF Cx Agree:-----------------------</b> <br>
                  (bohot bohot dhaanyabaad Sir/Maam).<br><br>
            </p>
          </div>

        </div>

      </div>

      <h2><b>4th Scenario (DIS) </b></h2>

      <p>Delay In Shipping<br>(Product-> Shipped / NT Shipped) && CPD Breached</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal4" class="
									modal-button
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
          Open Script</button><br>
        <br>

      </div>


      <!-- The Modal -->
      <div id="myModal4" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>Delay In Shipping -> (Product-> Shipped / NT Shipped)<br>
              Product Not Shipped --> Informed Cx to wait till TAT<br>
              Product Shipped --> Informed Cx to wait till CPD -> SOLVE CASE<br>
              CPD Breached --> Informed Cx to raise a delay in delivery complaint, Route the CX to CMB providing toll free number.</h2><br>
          </div>
          <div class="modal-body">
            <p><br><b>APOLOGY:-----------------------</b><br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product logistics Issue ke karan abhi tak deliver nehi hopaya.<br>
              Uske liye maafi chahunga hone wale dikkat k liye.<br><br>
              <b>EMPATHY AND CUSTOMER CENTRICITY (willingness to help):-----------------------</b><br>
              Main aapka/aapki baat samaj paraha hu.......... <br>
              Aap bilkul nishchint rahiye main aapko sahayata karne ki puri koshish karunga. <br>
              Sir/Mam Notes me mention kr raha hu.....Aur asha kartha hu dubara yesa na ho.<br><br>
              <b>SOLUTION:-----------------------</b><br><br>
              CHECK Incident Notes History -> TASKMASTER. (Check if any AGENT informed Cx about 72HRS | 48HRS or NOT)<br><br>
              🔹 If Agent<b>INFORMED</b>Cx(Check if 48HRS or 24HRS Passed)inform the same -> INT MW.<br>
              🔸->If 24HRS passed (Inform to wait more 48HRS)<br>
              🔸->If 48HRS passed (Inform to wait more 24HRS)<br>
              🔸->If 72HRS passed (SKIP to PRO-ACTIVE)<br><br>
              🔹 If Agent<b>DIDN'T INFORMED about 72HRS | 48HRS inform the same -> INT MW.</b><br>
              Main request karunga ki aap (72 HRS |48HRS) tak wait kigiye.<br>
              Team is main kaam karraha hain....Aur puri koshish karraha hain....jaldi se jaldi Product ki (DELIVERY) Karne ke liye. <br><br>
              🔹 If <b>TASKMASTER BREACHED OR TASKMASTER notes it's given (null, escalated to hub or whatever) -> then next step.</b><br><br>
              🔹 PRO-ACTIVE RESOLUTION.<br>
              Follow the notes and provide the information accordingly. (If nothing is there then next step follow)<br><br>
              🔹 Product current status - <b>Product NOT Shipped</b><br>
              🔹 🔸->If Product Not Shipped -> Informed Cx to wait till TAT.<br>
              Main request karunga ki aap (OTAT) tak wait kigiye.<br>
              Team is main kaam karraha hain....Aur puri koshish karraha hain....jaldi se jaldi Product ki (RESOLUTION) Karne ke liye. <br><br>
              <span class="highlight"><b>Int MW till TAT 10 am.</b></span><br>
              <span class="highlight">OD:As CPD is not breached informed the cx to wait till the given CPD. mark waiting done. cx agreed.</span><br>
              <span class="highlight">OD:As CPD is today informed the cx to wait till EOD. mark waiting done tomorrow 10am. cx agreed.</span><br><br>
              🔹 Product current status -<b> Product Shipped</b><br>
              🔹 🔸->If Product Shipped -> Informed Cx to wait till CPD.<br>
              Main request karunga ki aap (CPD) tak wait kigiye.<br>
              Team is main kaam karraha hain....Aur puri koshish karraha hain....jaldi se jaldi Product ki (DELIVERY) Karne ke liye. <br><br>
              <b>{</b>Close Case<b>}</b> Perform Task ==>> Check Update --> Yes --> Issue Resolved --> Notes Update.<br>
              <span class="highlight">OD:As CPD is not breached informed the cx to wait till the given CPD, hence closing the incident as per process. case solved.</span><br><br>
              🛑<b>Else</b> -> Form Fillup -> Tech Issue -> <br>
              <span class="highlight"><b>Int MW 24HRS.</b></span><br>
              <span class="highlight">OD:As CPD is not breached informed the cx to wait till the given CPD.Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</span><br><br>
              🔹 🔸->If <b>CPD Breached</b> -> Informed Cx to raise a delay in delivery complaint, Route the CX to CMB providing toll free number.<br>
              Main request karunga ki aap Delay in Delivery ka ek complaint reaise kijiye me apko phone no provide kr raha hu please note kijiye.<br>
              1800 202 9898 CONFIRM THE NO AGAIN. <br><br>
              <span class="highlight"><b>Int MW till TAT 10 am.</b></span><br>
              <span class="highlight">OD:As CPD is not breached informed the cx to wait till the given CPD. mark waiting done. cx agreed.</span><br>
              <span class="highlight">OD:As CPD is today informed the cx to wait till EOD. mark waiting done tomorrow 10am. cx agreed.</span><br><br>

              🔹If <b>OFD </b>Inform Cx to Wait till 7PM Today<br>
              Main request karunga ki aap Aj Sham 7 Baje tak wait kigiye.<br>
              Logistics team puri koshish karraha hain Aj 7 Baje, ya usse phele Product ki (DELIVERY) Karne ke liye.<br>
              <span class="highlight"><b>Int MW 24HRS.</b></span><br>
              <span class="highlight">OD: Informed Cx to wait till 7 PM as the product is OFD. Mark waiting done for 24 hours.</span><br><br>
              🔹If <b>Delivered </b>Indirect Confirmation of Delivery From Cx<br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product Aj ka date pe delivered dhika raha he. Ap product receive kiye, Right Sir/Mam? <br>
              <b>{</b>Close Case<b>}</b> Perform Task ==>> Check Update --> Yes --> Issue Resolved --> Notes Update.<br>
              <span class="highlight">OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved.</span><br><br>
              🛑<b>Else</b> -> Form Fillup -> Tech Issue -> <br>
              <span class="highlight"><b>Int MW 24HRS.</b></span><br>
              <span class="highlight">OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</span><br><br>
              <b>IF Cx Agree:-----------------------</b> <br>
              (bohot bohot dhaanyabaad Sir/Maam).<br><br>
            </p>
          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br></h3>
          </div>
        </div>

      </div>

      <h2><b>5th Scenario (NSS)</b></h2>

      <p>Non Serviceable Pincode<br>48HRS/Fresh Order/Another Pincode Fresh Order</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal5" class="
									modal-button
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
          Open Script</button><br>
        <br>

      </div>


      <!-- The Modal -->
      <div id="myModal5" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>Non Serviceable Pincode<br>
              Check pincode is serviceable (In Flipkart Website)<br>
              -> Check the previous order - Delivered or NOT<br>
              -> If serviceable Request the cx to place New Order.<br>
              -> If NOT serviceable Request the cx to place New Order in another pincode.</h2><br>
          </div>
          <div class="modal-body">
            <p><br><b>APOLOGY:-----------------------</b><br>
              Sir/ Maam jo ki main dekh pa raha hu aapka Pincode serviceable na hone ke karan abhi tak deliver ho nehi hopaya.<br>
              Uske liye maafi chahunga hone wale dikkat k liye.<br><br>
              <b>EMPATHY AND CUSTOMER CENTRICITY (willingness to help):-----------------------</b><br>
              Main aapka/aapki baat samaj paraha hu.......... <br>
              Aap bilkul nishchint rahiye main aapko sahayata karne ki puri koshish karunga. <br>
              Sir/Mam Notes me mention kr raha hu..... Aur asha kartha hu dubara yesa na ho.<br><br>
              <b>RESOLUTION:-----------------------</b><br>
              If Previous Order<b>DELIVERED</b><br>
              Main request karunga ki aap (48 HRS) tak wait kigiye.<br>
              Team is main kaam karraha hain....Aur puri koshish karraha hain....jaldi se jaldi<br>
              Product ki (DELIVERY) Karne ke liye. <br>
              Form Fillup -> Fake update by WM -> Int MW 24HRS.<br>
              OD: OD: Non serviceable pincode. Requested the cx to wait for 48 hrs. cx agreed. mark waiting done till 48 hrs. Previous product got delivered at the same pincode. Mark waiting done for 4 hours. Form fill up done.<br><br>
              If <b>Serviceable </b>(Previous order Not Delivered)<br>
              Main request karunga ki aap Ek fresh order place kigiye, 7din k andar.<br>
              Agar product ki price bhad jata hai to apko msg ya email ke dwara notify kar diya jaega.<br>
              Agar price same rahe ya kam ho jata he to apko order value ka 10% as a compensation diye jaege.<br>
              Joki apko apni neyi product ki delivery ke 72hrs k andar apke flipkart gift wallet pe credit ho jayege.<br><br>
              Main is TOA ke bareme mein kuch aur details apko batana chahunga ki...<br>
              Yeh amount 1 sal tak valid hain and yeh non transferrable amount hain....<br>
              Jisse ap prepaid order k payment k sath club kar sakte hain only on flipkart paltform..
              <br><br>
              If <b>NOT</b> serviceable<br>
              Main request karunga ki aap Ek fresh order ALAG PINCODE PE place kigiye, 7din k andar.<br>
              Agar product ki price bhad jata hai to apko msg ya email ke dwara notify kar diya jaega.<br>
              Agar price same rahe ya kam ho jata he to apko order value ka 10% as a compensation diye jaege.<br>
              Joki apko apni neyi product ki delivery ke 72hrs k andar apke flipkart gift wallet pe credit ho jayege.<br><br>
              Main is TOA ke bareme mein kuch aur details apko batana chahunga ki...<br>
              Yeh amount 1 sal tak valid hain and yeh non transferrable amount hain....<br>
              Jisse ap prepaid order k payment k sath club kar sakte hain only on flipkart paltform..
              <br><br>
              If <b>OFD </b>Inform Cx to Wait till 7PM Today<br>
              Main request karunga ki aap Aj Sham 7 Baje tak wait kigiye.<br>
              Logistics team puri koshish karraha hain Aj 7 Baje, ya usse phele Product ki (DELIVERY) Karne ke liye.<br>
              Int MW NextDay 10 am. <br>
              OD: Informed Cx to wait till 7 PM as the product is OFD and mark waiting done 10am tomorrow.using accops ekart console not working.<br><br>
              If <b>Delivered </b>Indirect Confirmation of Delivery From Cx<br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product Aj ka date pe delivered dhika raha he. Ap product receive kiye, Right Sir/Mam? <br>
              <b>{</b>Close Case<b>}</b> Perform Task ==>> Check Update --> Yes --> Issue Resolved --> Notes Update.<br>
              OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved. <br><br>
              <b>Else</b> -> Form Fillup -> Tech Issue -> Int MW 24HRS.<br>
              OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.<br><br>
              <b>IF Cx agree:-----------------------</b> <br>
              (bohot bohot dhaanyabaad Sir/Maam).<br><br>
              NON-SERVICEABLE PINCODE<br>
              ---------------------------------------<br>
              OD: OD: Non serviceable pincode. Requested the cx to wait for 48 hrs. cx agreed. mark waiting done till 48 hrs. Previous product got delivered at the same pincode. Mark waiting done for 4 hours. Form fill up done.<br><br>
              OD: OD: Non serviceable pincode. Requested the cx to wait for 24 hrs. cx agreed. mark waiting done till 24 hrs. As the previous agent asked the cx to wait for 48 hours on
              using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.<br>
              OD: Non serviceable pincode. Requested the cx to place a fresh order in a different pincode or else wait till the pincode becomes serviceable. Cx's pincode is showing serviceable at the moment. Requested the cx to place a fresh order within 7 days. TOA mentioned. EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.<br>
              OD: Non serviceable pincode. Product is showing out of stock. Unable to place a fresh order. Hence asked the cx to wait till the product comes in stock. TOA will be provided within next 3 business days. Activity log inactive, hence couldn't solve the case and mentioned over the notes. using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.<br>


            </p>
          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br></h3>
          </div>
        </div>

      </div>
      <h2><b>6th Scenario (SSM)</b></h2>

      <p>Same State Misroute<br>24HRS/48HRS/72HRS/Fresh Order (EGV&TOA)</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal6" class="
									modal-button
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
          Open Script</button><br>
        <br>

      </div>


      <!-- The Modal -->
      <div id="myModal6" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>Same State Misroute<br>
              Confirm Address & Pincode from Cx <br>
              -> If address confirmed then ask thecx to Wait for 72hrs.<br>
              -> If NOT serviceable Request the cx to place New Order.</h2><br>
          </div>
          <div class="modal-body">
            <p><br><b>APOLOGY:-----------------------</b><br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product ka Address aur Pincode Mismatch ke karan abhi tak deliver/Ship nehi hopaya.<br>
              Uske liye maafi chahunga hone wale dikkat k liye.<br><br>
              <b>EMPATHY AND CUSTOMER CENTRICITY (willingness to help):-----------------------</b><br>
              Main aapka/aapki baat samaj paraha hu.......... <br>
              Aap bilkul nishchint rahiye main aapko sahayata karne ki puri koshish karunga. <br>
              Sir/Mam Notes me mention kr raha hu..... Aur asha kartha hu dubara yesa na ho.<br><br>
              <b>RESOLUTION:-----------------------</b><br>
              CHECK Incident Notes History -> (Check if any AGENT informed Cx about 72HRS or NOT)<br><br>
              If Agent<b>INFORMED</b>Cx(Check if 48HRS or 24HRS Passed)<br>
              ->If 24HRS passed (Inform to wait more 48HRS)<br>
              ->If 48HRS passed (Inform to wait more 24HRS)<br><br>
              If Agent<b>DIDN'T INFORMED</b>Cx<br>
              Main request karunga ki aap (72 HRS) tak wait kigiye.<br>
              Team is main kaam karraha hain....Aur puri koshish karraha hain....jaldi se jaldi Product ki (DELIVERY) Karne ke liye. <br><br>
              If <b>Exceeding 72HRS</b><br>
              Main request karunga ki aap Ek fresh order place kigiye, 7din k andar.<br>
              Agar product ki price bhad jata hai to apko msg ya email ke dwara notify kar diya jaega.<br>
              Agar price same rahe ya kam ho jata he to apko order value ka 10% as a compensation diye jaege.<br>
              Joki apko apni neyi product ki delivery ke 72hrs k andar apke flipkart gift wallet pe credit ho jayege.<br><br>
              Main is TOA ke bareme mein kuch aur details apko batana chahunga ki...<br>
              Yeh amount 1 sal tak valid hain and yeh non transferrable amount hain....<br>
              Jisse ap prepaid order k payment k sath club kar sakte hain only on flipkart paltform..
              <br><br>
              If <b>Wrong Address Provided by Cx</b><br>
              Main request karunga ki aap Ek fresh order place kigiye.<br><br>
              If <b>OFD </b>Inform Cx to Wait till 7PM Today<br>
              Main request karunga ki aap Aj Sham 7 Baje tak wait kigiye.<br>
              Logistics team puri koshish karraha hain Aj 7 Baje, ya usse phele Product ki (DELIVERY) Karne ke liye.<br>
              Int MW NextDay 10 am. <br>
              OD: Informed Cx to wait till 7 PM as the product is OFD and mark waiting done 10am tomorrow.using accops ekart console not working.<br><br>
              If <b>Delivered </b>Indirect Confirmation of Delivery From Cx<br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product Aj ka date pe delivered dhika raha he. Ap product receive kiye, Right Sir/Mam? <br>
              <b>{</b>Close Case<b>}</b> Perform Task ==>> Check Update --> Yes --> Issue Resolved --> Notes Update.<br>
              OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved. <br><br>
              <b>Else</b> -> Form Fillup -> Tech Issue -> Int MW 24HRS.<br>
              OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.<br><br>
              <b>IF Cx agree:-----------------------</b> <br>
              (bohot bohot dhaanyabaad Sir/Maam).<br>

              OD: Same stated misroute requested the cx to wait till 72 hrs. Mark waiting done till 72 hrs.
              using accops ekart console not working.<br><br>

            </p>
          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br></h3>
          </div>
        </div>

      </div>

      <h2><b>7th Scenario (OSM)</b></h2>

      <p>Other State Misroute<br>Fresh Order-> Case Close</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal7" class="
            modal-button
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
          Open Script</button><br>
        <br>

      </div>


      <!-- The Modal -->
      <div id="myModal7" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>Other State Misroute<br>
              Fresh Order-> Case Close</h2><br>
          </div>
          <div class="modal-body">
            <p><br><b>APOLOGY:-----------------------</b><br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product ka Address aur Pincode Mismatch ke karan abhi tak deliver/Ship nehi hopaya.<br>
              Uske liye maafi chahunga hone wale dikkat k liye.<br><br>
              <b>EMPATHY AND CUSTOMER CENTRICITY (willingness to help):-----------------------</b><br>
              Main aapka/aapki baat samaj paraha hu.......... <br>
              Aap bilkul nishchint rahiye main aapko sahayata karne ki puri koshish karunga. <br>
              Sir/Mam Notes me mention kr raha hu.... Aur asha kartha hu dubara yesa na ho.<br><br>
              <b>RESOLUTION:-----------------------</b><br>
              Main request karunga ki aap Ek fresh order place kigiye, 7din k andar.<br>
              Agar product ki price bhad jata hai to apko msg ya email ke dwara notify kar diya jaega.<br>
              Agar price same rahe ya kam ho jata he to apko order value ka 10% as a compensation diye jaege.<br>
              Joki apko apni neyi product ki delivery ke 72hrs k andar apke flipkart gift wallet pe credit ho jayege.<br><br>
              Main is TOA ke bareme mein kuch aur details apko batana chahunga ki...<br>
              Yeh amount 1 sal tak valid hain and yeh non transferrable amount hain....<br>
              Jisse ap prepaid order k payment k sath club kar sakte hain only on flipkart paltform..
              <br><br>
              If <b>OFD </b>Inform Cx to Wait till 7PM Today<br>
              Main request karunga ki aap Aj Sham 7 Baje tak wait kigiye.<br>
              Logistics team puri koshish karraha hain Aj 7 Baje, ya usse phele Product ki (DELIVERY) Karne ke liye.<br>
              Int MW NextDay 10 am. <br>
              OD: Informed Cx to wait till 7 PM as the product is OFD and mark waiting done 10am tomorrow.using accops ekart console not working.<br><br>
              If <b>Delivered </b>Indirect Confirmation of Delivery From Cx<br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product Aj ka date pe delivered dhika raha he. Ap product receive kiye, Right Sir/Mam? <br>
              <b>{</b>Close Case<b>}</b> Perform Task ==>> Check Update --> Yes --> Issue Resolved --> Notes Update.<br>
              OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved. <br><br>
              <b>Else</b> -> Form Fillup -> Tech Issue -> Int MW 24HRS.<br>
              OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.<br><br>
              <b>IF Cx agree:-----------------------</b> <br>
              (bohot bohot dhaanyabaad Sir/Maam).<br>

              OD: Other state misroute requested the cx to place a fresh order within 7 days. TOA metioned.
              EGV details provided to the cx. using accops ekart console not working. hence closing the incident as per process. case solved.<br><br>

              OTHER STATE MISROUTE:<br>
              ----------------------------------<br>
              OD: Other state misroute requested the cx to place a fresh order within 7 days. TOA metioned.
              EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.<br><br>
            </p>
          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br>Case Close or Form Fillup<br><br></h3>
          </div>
        </div>

      </div>


      <h2><b>8th Scenario (P Dam)</b></h2>

      <p>Product Damage<br>Fresh Order-> Case Close</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal8" class="
									modal-button
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
          Open Script</button><br>
        <br>

      </div>


      <!-- The Modal -->
      <div id="myModal8" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>Product Damage<br>
              Fresh Order-> Case Close</h2><br>
          </div>
          <div class="modal-body">
            <p><br><b>APOLOGY:-----------------------</b><br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product damage hone ke karan abhi tak deliver/Ship nehi hopaya.<br>
              Uske liye maafi chahunga hone wale dikkat k liye.<br><br>
              <b>EMPATHY AND CUSTOMER CENTRICITY (willingness to help):-----------------------</b><br>
              Main aapka/aapki baat samaj paraha hu.......... <br>
              Aap bilkul nishchint rahiye main aapko sahayata karne ki puri koshish karunga. <br>
              Sir/Mam Notes me mention kr raha hu.... Aur asha kartha hu dubara yesa na ho.<br><br>
              <b>RESOLUTION:-----------------------</b><br>
              Main request karunga ki aap Ek fresh order place kigiye, 7din k andar.<br>
              Agar product ki price bhad jata hai to apko msg ya email ke dwara notify kar diya jaega.<br>
              Agar price same rahe ya kam ho jata he to apko order value ka 10% as a compensation diye jaege.<br>
              Joki apko apni neyi product ki delivery ke 72hrs k andar apke flipkart gift wallet pe credit ho jayege.<br><br>
              Main is TOA ke bareme mein kuch aur details apko batana chahunga ki...<br>
              Yeh amount 1 sal tak valid hain and yeh non transferrable amount hain....<br>
              Jisse ap prepaid order k payment k sath club kar sakte hain only on flipkart paltform..
              <br><br>
              <b>IF Cx agree:-----------------------</b> <br>
              (bohot bohot dhaanyabaad Sir/Maam).<br><br>
            </p>
          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br>Case Close or Form Fillup<br><br></h3>
          </div>
        </div>

      </div>


      <h2><b>9th Scenario (RTO)</b></h2>

      <p>Return To Origin/Owner<br>Fresh Order-> Case Close</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal9" class="
            modal-button
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
          Open Script</button><br>
        <br>

      </div>


      <!-- The Modal -->
      <div id="myModal9" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>Return To Origin/Owner<br>
              Fresh Order-> Case Close</h2><br>
          </div>
          <div class="modal-body">
            <p><br><b>APOLOGY:-----------------------</b><br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product seller ko return hone ke karan abhi tak deliver nehi hopaya.<br>
              Uske liye maafi chahunga hone wale dikkat k liye.<br><br>
              <b>EMPATHY AND CUSTOMER CENTRICITY (willingness to help):-----------------------</b><br>
              Main aapka/aapki baat samaj paraha hu.......... <br>
              Aap bilkul nishchint rahiye main aapko sahayata karne ki puri koshish karunga.
              Sir/Mam Notes me mention kr raha hu.... Aur asha kartha hu dubara yesa na ho.<br><br>
              <b>RESOLUTION:-----------------------</b><br>
              Main request karunga ki aap Ek fresh order place kigiye, 7din k andar.<br>
              Agar product ki price bhad jata hai to apko msg ya email ke dwara notify kar diya jaega.<br>
              Agar price same rahe ya kam ho jata he to apko order value ka 10% as a compensation diye jaege.<br>
              Joki apko apni neyi product ki delivery ke 72hrs k andar apke flipkart gift wallet pe credit ho jayege.<br><br>
              Main is TOA ke bareme mein kuch aur details apko batana chahunga ki...<br>
              Yeh amount 1 sal tak valid hain and yeh non transferrable amount hain....<br>
              Jisse ap prepaid order k payment k sath club kar sakte hain only on flipkart paltform..
              <br><br>
              <b>IF Cx agree:-----------------------</b> <br>
              (bohot bohot dhaanyabaad Sir/Maam).<br><br>
            </p>
          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br>Case Close or Form Fillup<br><br></h3>
          </div>
        </div>

      </div>


      <h2><b>10th Scenario (NO OTAT)</b></h2>

      <p>Status Check, Priority Delivery, FE Details, Cx Dosent Wnt Itm, Address Change<br>
        CPD -> RPD -> CPD+7D -> Cre DT+7D -> FreshOrder(EGV&TOA)</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal10" class="
									modal-button
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
          Open Script</button><br>
        <br>

      </div>


      <!-- The Modal -->
      <div id="myModal10" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>(NO OTAT)<br>
              Status Check, Priority Delivery, FE Details, Cx Dosent Wnt Itm, Address Change<br>
              CPD -> RPD -> CPD+7D -> Cre DT+7D -> FreshOrder(EGV&TOA)</h2><br>
          </div>
          <div class="modal-body">
            <p><br><b>APOLOGY:-----------------------</b><br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product logistics Issue ke karan abhi tak deliver/Ship nehi hopaya.<br>
              Uske liye maafi chahunga hone wale dikkat k liye.<br><br>
              <b>EMPATHY AND CUSTOMER CENTRICITY (willingness to help):-----------------------</b><br>
              Main aapka/aapki baat samaj paraha hu.......... <br>
              Aap bilkul nishchint rahiye main aapko sahayata karne ki puri koshish karunga. <br>
              Sir/Mam Notes me mention kr raha hu.... Aur asha kartha hu dubara yesa na ho.<br><br>
              <b>SOLUTION:-----------------------</b><br>
              If <b>Status Check</b> - Jo ki main dekh parahi hu aapne parishani uthaye the product k status jaanne k liye. Mafi chahungi hone wale dikkat k liye.<br>
              If <b>Priority Delivery</b> - Jo ki main dekh parahi hu aapne request kiye the priority delivery k liye.<br><br>
              If <b>FE DETAILS</b> - Jo ki main dekh paraha hu aapne wish master details k liye request kiye the..... Main aapko batana chahunga ki wishmaster details aapko phone main via msg aapko milenge jab aapka product out for delivery honge.<br><br>
              If <b>Cx Dosent Wnt Itm</b> - Jo ki main dekh parahi hu aapne request kiye the ki aapko yeh product nehi chahiye right Sir/Mam? If <b>CX Don't Wnt</b> -> CX ko bolo main forward kar rahi hu seller ko cancellation request.[Skip CPD|RPD Script]<br><br>
              ||||||||||||||||||||||||||||<br>
              Main request karunga ki aap (CPD -> RPD -> CPD+7D -> Cre DT+7D) tak wait kigiye.<br>
              Team is main kaam karraha hain....Aur puri koshish karraha hain....jaldi se jaldi Product ki (DELIVERY) Karne ke liye. <br><br>
              If <b>Address Change</b> - Jo ki main dekh parahi hu ki aapne request kiye address change keliye.... Mafi chahunga hone wale dikkat k liye. Aap bilkul nishchint rahiye main aapko puri saheta karne ki koshish karungi.<br>
              SUGGESTED ISSUE -> Click address change -> proceed -> and change the address of CX.(Please note once the product is shipped. the address cannot be changed)<br>
              If NOT CHNG informed the CX address cannot be changed. Ask the cx to place a fresh order. (No TOA) <b>CLOSE CASE</b>. -> If not Int MW 24hrs. Form fill up.<br><br>
              If <b>Exceeding Cre DT+7D -> FreshOrder(EGV&TOA)</b><br>
              Main request karunga ki aap Ek fresh order place kigiye, 7din k andar.<br>
              Agar product ki price bhad jata hai to apko msg ya email ke dwara notify kar diya jaega.<br>
              Agar price same rahe ya kam ho jata he to apko order value ka 10% as a compensation diye jaege.<br>
              Joki apko apni neyi product ki delivery ke 72hrs k andar apke flipkart gift wallet pe credit ho jayege.<br><br>
              Main is TOA ke bareme mein kuch aur details apko batana chahunga ki...<br>
              Yeh amount 1 sal tak valid hain and yeh non transferrable amount hain....<br>
              Jisse ap prepaid order k payment k sath club kar sakte hain only on flipkart paltform..
              <br><br>
              If <b>OFD </b>Inform Cx to Wait till 7PM Today<br>
              Main request karunga ki aap Aj Sham 7 Baje tak wait kigiye.<br>
              Logistics team puri koshish karraha hain Aj 7 Baje, ya usse phele Product ki (DELIVERY) Karne ke liye.<br>
              Int MW NextDay 10 am. <br>
              OD: Informed Cx to wait till 7 PM as the product is OFD and mark waiting done 10am tomorrow.using accops ekart console not working.<br><br>
              If <b>Delivered </b>Indirect Confirmation of Delivery From Cx<br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product Aj ka date pe delivered dhika raha he. Ap product receive kiye, Right? <br>
              <b>{</b>Close Case<b>}</b> Perform Task ==>> Check Update --> Yes --> Issue Resolved --> Notes Update.<br>
              OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved. <br><br>
              <b>Else</b> -> Form Fillup -> Tech Issue -> Int MW 24HRS.<br>
              OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.<br><br>
              <b>IF Cx Agree:-----------------------</b> <br>
              (bohot bohot dhaanyabaad Sir/Maam).<br><br>

              STATUS CHECK -<br>
              OD: As CPD is not yet breached, requested the cx to wait till the CPD, on or before 7pm the logestic team will try to deliver the product. Self serve pitched. using accops ekart console not working. case solved.<br>

              OD: As repromise date is not yet breached, requested the cx to wait till the repromise date,
              mark waiting done. using accops ekart console not working. cx agreed.<br>

              IF THE REPROMISE DATE IS TODAY'S DATE<br>
              OD: informed the cx to wait till today as the repromise date is given today's date. also informed the cx to wait till the OTAT. using accops ekart console not working. cx agreed.<br><br>

            </p>
          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br>Case Close or Form Fillup<br><br></h3>
          </div>
        </div>

      </div>


      <h2><b>11th Scenario (CC)</b></h2>

      <p>Case Close<br>In All Delivered Cases & No OTAT Cases / OSM / Pro Dam / RTO / Return / Refund</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal11" class="
            modal-button
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
          Open Script</button><br>
        <br>

      </div>


      <!-- The Modal -->
      <div id="myModal11" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>In All Delivered Cases & No OTAT Cases / OSM / Pro Dam / RTO / Refund / Return / Refund <br>
              We Close the Case -> if Not Closed Form fillup -> 24HRS Int MW -> Add Notes</h2><br>
          </div>
          <div class="modal-body">

            OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved.<br>

            OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.<br><br>

            <p>If <b>OFD </b>Inform Cx to Wait till 7PM Today<br>
              Main request karunga ki aap Aj Sham 7 Baje tak wait kigiye.<br>
              Logistics team puri koshish karraha hain Aj 7 Baje, ya usse phele Product ki (DELIVERY) Karne ke liye.<br>
              Int MW NextDay 10 am. <br>
              OD: Informed Cx to wait till 7 PM as the product is OFD and mark waiting done 10am tomorrow.using accops ekart console not working.<br><br>
              If <b>Delivered </b>Indirect Confirmation of Delivery From Cx<br>
              Sir/ Maam jo ki main dekh pa raha hu aapka product Aj ka date pe delivered dhika raha he. Ap product receive kiye, Right Sir/Mam? <br>
              <b>{</b>Close Case<b>}</b> Perform Task ==>> Check Update --> Yes --> Issue Resolved --> Notes Update.<br>
              OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved. <br><br>
              <b>Else</b> -> Form Fillup -> Tech Issue -> Int MW 24HRS.<br>
              OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done. <br><br>
            </p>
          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br>Case Close or Form Fillup<br><br></h3>
          </div>
        </div>

      </div>

      <h2><b>12th Scenario (Return)</b></h2>

      <p>Replace / Return & Refund<br>If Replace (CPD -> Close Case) / If Refund (Refund Tab -> SLA Date -> Close Case)</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal12" class="
      modal-button
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
          Open Script</button><br>
        <br>

      </div>


      <!-- The Modal -->
      <div id="myModal12" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>Replace / Return & Refund<br>
              If Replace (CPD -> Close Case) / If Refund (Refund Tab -> SLA Date -> Close Case)</h2><br>
          </div>
          <div class="modal-body">
            <p>Some text in the 12 Modal Body</p>
            <p>Some other text...</p>
          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br>Case Close or Form Fillup<br><br></h3>
          </div>
        </div>

      </div>

      <h2><b>13th Scenario (Cancelled)</b></h2>

      <p>Cx Cancelled / Terminator Cancellation<br>
        XXXXXXX</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal13" class="
            modal-button
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
          Open Script</button><br>
        <br>

      </div>


      <!-- The Modal -->
      <div id="myModal13" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>Cx Cancelled / Terminator Cancellation<br>
              If Cx Cancelled -> Ask Reason -> If Due to Flipkart(Our) Issue -> TOA&EGV | Else XXXXX <br>
              Terminator Cancellation -> Sub Reason -> XXXXXX</h2><br>
          </div>
          <div class="modal-body">
            <p>Some text in the 13 Modal Body</p>
            <p>Some other text...</p>

            CANCEL ORDER -<br>
            OD: cx stated that he wants to cancel the order. behalf of the cx cancelling the order. case solved.<br>

            OD: Cx already cancelled the order, asked the cx to place a fresh order. hence closing the incident as per process. case solved.<br>

            OD: Order already got cancelled by the terminator. Requested the cx to place a fresh order within 7 days. TOA metioned. EGV details provided to the cx. hence closing the incident as per process. case solved.<br>

            CANCEL<br>
            -----------<br>
            OD: Cx stated that she wants to cancel the order. But cancelling is not taking place in SA. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 4 hours. Form fill up done.<br>

            OD: Order already got cancelled by the terminator. Requested the cx to place a fresh order within 7 days. TOA metioned. EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 4 hours. Form fill up done.<br>

          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br>Case Close or Form Fillup<br><br></h3>
          </div>
        </div>

      </div>

      <h2><b>14th Scenario (Undeliverable)</b></h2>

      <p>Undeliverable -> CPD -> RPD-> OTAT -> OTAT+3D -> Fresh Order<br>
        XXXXXXX</p>
      <!-- Trigger/Open The Modal -->
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" href="#myModal14" class="
      modal-button
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
          Open Script</button><br>
        <br>

      </div>
      <!-- The Modal -->
      <div id="myModal14" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2><br>Undeliverable<br>
              CPD -> RPD-> OTAT -> OTAT+3D -> Fresh Order</h2><br>
          </div>
          <div class="modal-body">
            <p>Some text in the 13 Modal Body</p>
            <p>Some other text...</p>


          </div>
          <div class="modal-footer">
            <h3><br>IF EMAIL IS N/A:-----------------------<br>
              Sir/ Maam jo ki dekh paraha hu aapka email address,flipkart main register nehi kiya hua hain.<br>
              Main aapko request karunga ki aap aapna Email address ko please flipkart main register kare.<br><br>Case Close or Form Fillup<br><br></h3>
          </div>
        </div>

      </div>



      <!-- The Modal -->
      <div id="myModal15" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">×</span>
            <h2 class="text-center"><br>Token Of Apology GRID (Reactive Process)<br></h2><br>
          </div>
          <div class="modal-body">
            <div class="text-white text-center" style="width: 100%; background: #2E4272;">
              <div style="width: 50%; height: 25px; float: left; background: #4F628E;">
                <b>Less than 250</b>
              </div>
              <div style="margin-left: 50%; height: 25px; background: #7887AB;">
                <b>No TOA/ No ER</b>
              </div>
              <div style="width: 50%; height: 25px; float: left; background: #4F628E;">
                <b>251-500</b>
              </div>
              <div style="margin-left: 50%; height: 25px; background: #7887AB;">
                <b>Flat 50</b>
              </div>
              <div style="width: 50%; height: 25px; float: left; background: #4F628E;">
                <b>501 - 1500</b>
              </div>
              <div style="margin-left: 50%; height: 25px; background: #7887AB;">
                <b>Flat 100</b>
              </div>
              <div style="width: 50%; height: 25px; float: left; background: #4F628E;">
                <b>1500 - 3000</b>
              </div>
              <div style="margin-left: 50%; height: 25px; background: #7887AB;" id="72time">
                <b>Flat 150</b>
              </div>
              <div style="width: 50%; height: 25px; float: left; background: #4F628E;">
                <b>3001 - 5000</b>
              </div>
              <div style="margin-left: 50%; height: 25px; background: #7887AB;">
                <b>Flat 300</b>
              </div>
              <div style="width: 50%; height: 25px; float: left; background: #4F628E;">
                <b>5001 - 7500</b>
              </div>
              <div style="margin-left: 50%; height: 25px; background: #7887AB;">
                <b>Flat 500</b>
              </div>
              <div style="width: 50%; height: 25px; float: left; background: #4F628E;">
                <b>7501- 10K</b>
              </div>
              <div style="margin-left: 50%; height: 25px; background: #7887AB;">
                <b>Flat 750</b>
              </div>
              <div style="width: 50%; height: 25px; float: left; background: #4F628E;">
                <b>10K to 15K</b>
              </div>
              <div style="margin-left: 50%; height: 25px; background: #7887AB;" id="72time">
                <b>Flat 1000</b>
              </div>
              <div style="width: 50%; height: 25px; float: left; background: #4F628E;">
                <b>15K to 20K</b>
              </div>
              <div style="margin-left: 50%; height: 25px; background: #7887AB;" id="72time">
                <b>Flat 1500</b>
              </div>
              <br>
            </div>

          </div>
          <div class="modal-footer text-center">
            <h3><br>Grocery:<br></h3>
            <p>Rs1-599 -> No TOA<br>
              600 - 10K -> 10% order value
            </p><br>
          </div>
        </div>

      </div>

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
      var ee = document.getElementById("mynam3");
      ee.style.color = "blue";
      var eee = document.getElementById("tdate0");
      eee.style.color = "blue";
      var eeee = document.getElementById("tdate1");
      eeee.style.color = "blue";
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
      var ww = document.getElementById("cname").value;
      document.getElementById("name3").innerHTML = ww;
      var www = document.getElementById("tat_date").value;
      document.getElementById("tat1").innerHTML = www;
      var wwww = document.getElementById("tat_date").value;
      document.getElementById("tat2").innerHTML = wwww;
    }
  </script>
  <script>
    // Get the button that opens the modal
    var btn = document.querySelectorAll("button.modal-button");

    // All page modals
    var modals = document.querySelectorAll('.modal');

    // Get the <span> element that closes the modal
    var spans = document.getElementsByClassName("close");
    var ispans = document.getElementsByClassName("iclose");

    // When the user clicks the button, open the modal
    for (var i = 0; i < btn.length; i++) {
      btn[i].onclick = function(e) {
        e.preventDefault();
        modal = document.querySelector(e.target.getAttribute("href"));
        modal.style.display = "block";
      }
    }

    // When the user clicks on <span> (x), close the modal
    for (var i = 0; i < spans.length; i++) {
      spans[i].onclick = function() {
        for (var index in modals) {
          if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
        }
      }
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target.classList.contains('modal')) {
        for (var index in modals) {
          if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
        }
      }
    }
  </script>

<script>
var e = document.getElementById('icon');
e.onmouseover = function() {
  document.getElementById('info').style.display = 'block';
}
e.onmouseout = function() {
  document.getElementById('info').style.display = 'none';
}
</script>
</body>




</html>