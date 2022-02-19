<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OD22 Yoda</title>
  <script src="https://kit.fontawesome.com/de84253868.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css" />
  <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
  <script src="http://code.jquery.com/jquery-2.1.4.min.js" data-semver="2.1.4" data-require="jquery@2.1.4"></script>
  <script data-require="jquery-cookie@1.3.1" data-semver="1.3.1" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.js"></script>
  <link rel="stylesheet" href="style.css" />
  <script src="script.js"></script>
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
          <br>

        </div>

      </div>


      <br><br><br>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="#" class="scroll-link" data-id="HoldProcedure">Hold Procedure</a>
            <a href="#" class="scroll-link" data-id="Abbreviations">Abbreviations</a>
            <a href="#" class="scroll-link" data-id="OSMisroute">OS-Misroute</a>
            <a href="#" class="scroll-link" data-id="SSMisroute">SS-Misroute</a>
            <a href="#" class="scroll-link" data-id="RNRInfo">RNR-Info</a>
            <a href="#" class="scroll-link" data-id="EGVInfo">EGV-Info</a>
            <a href="#" class="scroll-link" data-id="ReOrderInfo">ReOrder-Info</a>
            <a href="#" class="scroll-link" data-id="Verbiage">Verbiage</a>
            <a href="#" class="scroll-link" data-id="NSSInfo">NSS-Info</a>
          </li>
        </ul>
      </div>


      <div class="mt-12 text-white text-center">
        <h1><b>"Situations"</b></h1>
      </div>
      <div>
        <br>
        <br>
        <hr>

        <br>
        <div id="NSSInfo">
          <br>
          <h3><b>--NSS - Non Serviceable Pincode--</b></h3><br>




          <p>* In NSS we dont check OKT (OathKeeper TAT-Turn Around Time)..<br>

            * We are suppose to check the previous order...We will check whether in the location any order has been delivered or not...<br>

            * If any order is delivered on that pincode...we will ask customer to wait for 48hrs... and we will fill up the form. <br>
            * Response - <i>" As we can see one product was delivered recently, logestics partner will try to deliver the product. Please wait till 48 hrs. "</i><br>
            * logistic partner will try their best to deliver their product.<br>

            * If their is no such product which is delivered on that same pin code we will ask the customer to place a fresh order...<br>

            Reason - Pincode is not serviceable<br>


            * If customer denies to place a fresh order....we will ask them to order their product within 7days if he/she wants to receive the compensation....<br>
            * And if still pin code is showing unserviceable. Ask them to order on another pin code......<br>
            * Condition is cx have to order same product if he/she wants to receive compensation<br></p>

        </div>
        <br>
        <br>
        <br>
        <hr>
        <br>
        <div id="Verbiage">
          <h3><b>--Verbiage--</b></h3><br>


          Open-verbiage Close-verbiage fixed START HINDI<br>

          <p>
            <b>(Hindi)</b><br>
            * <i>" _CX_Name_ Aapke taraf se response nhi milne ke karan aapka call disconnect kia jaara he "</i> (3times)<br>
            * Customer ke taraf se koi valid response nhi aane ke wajah main call disconnect kr raha hu<br>
            <b>(English)</b><br>
            -> If any one is not responding (3 warning) <br>
            -> As there is no valid response from the customer I'm bound to disconnect this call (3times)<br>

            <br>
          </p>
        </div>

        <br>
        <br>
        <br>
        <hr>
        <div id="ReOrderInfo">
          <br>
          <h3><b>--ReOrder Issue--</b></h3><br>

          <p>

            * When you know the product is not going to deliver anymore...Ask him/her to place the fresh order...<br>

            * Request the customer to place the fresh order for the same product(Same FSN) within 7 days.<br>

            * Any price difference customer will be notified through SMS and email. In case the price of the item is still the same.<br>

            * 10% TOA should be given of the product value within 72 hrs. from the time of delivery.<br><br>
        </div>
        <div id="EGVInfo">
          <b>EGV(Electronic gift voucher)-Gift Card Voucher T&Cs </b><br><br>




          ● Validity - 1 year<br>

          ● Non Transferable<br>

          ● Can club with Prepaid payment mode only(apart from COD)<br>

          ● Can be used on flip kart platform only.<br>
          <br>
          </p>

        </div>
        <br>

        <br>
        <br>
        <hr>
        <br>
        <h3><b>--Remember - WE WILL ONLY SENT EMAIL AND SMS FOR NON CONNECTED CALLS --</b></h3><br>

        <p>
        <div id="RNRInfo">

          <b>RNR 1 ---</b><br>

          * MARK WAITING FOR 4 HRS(CX UPDATE)<br>
          * Same day after 4hrs from current time (If time exceeds 9PM then change it to next day 10 AM)<br>

          -> OD RNR 1 HENCE SET MARK WAITING FOR 4HRS.<br>

          <b>RNR 2 ---</b><br>

          * MARK WAITING TILL OKT (INT UPDATE)<br>
          * date okt and live timing<br>

          -> OD RNR 2 HENCE SET MARK WAITING TILL OKT (INTERNAL WAITING)<br>

          <b>RNR3 --- SOLVED</b><br>

          * MARK WAITING --- EMAIL --- SMS.<br>


        </div>




        <br>
        </p>


        <br>

        <br>
        <br>
        <hr>
        <br>
        <div id="SSMisroute">
          <h3><b>--SAME STATE MISROUTE--</b></h3><br>

          <p>

            * Reason - Due to address and pincode mismatch the product has reached to a different location. <br>
            * Response - <i> I request you to wait for 72 hrs... logistic partner will try their best to deliver your product.</i><br>
            <br>
          </p>
        </div>

        <br>
        <br>
        <br>
        <hr>
        <div id="OSMisroute">
          <br>
          <h3><b>--OTHER STATE MISROUTE--</b></h3><br>



          * Reason - Due to address and pincode mismatch the product has reached to a different location. <br>
          * Response - <i> i m really sorry to inform you that your product is not going to deliver anymore by the logistic partner...So I will request you to place an fresh order......</i><br>
          * And tell them about the compensation.<br>

        </div>
        <br>
        <br>
        <hr>



        <br><br>
        <div id="Abbreviations">
          <h3><b>--Abbreviations--</b></h3><br>

          <p>
            RTO - Return To Origin (CANCELLATION)<br>
            RVP - REVERSE PICK UP (CX RETURN)<br>
            CARDSOD - Created-Approve-Ready to ship- Dispatch-Shipped-Out for delivery-Delivered. <br>
            TAT - Turn Around Time(the maximum time limit to complete issue.<br>
            EGV - Electronic gift voucher.<br>
            RNR - Ringing No Response.<br>
            CSAT- Customer Satisfaction.<br>

            DD - Delay in delivery.<br>
            DS - Delay in shipping.<br>
            <br>
            <br>
        </div>
        <br>
        <hr>
        <br>
        <div id="HoldProcedure">
          <b>Hold Procedure</b>:: = reason.duration.permission (1 minute hold only)____i am sorry for the wrong information provided,<br>
          English - <i>"To check certain information, I would require some time. May I place your call on hold for one minute to check the information?"</i><br>
          -> Thanks _CX_Name_<br>
          Hindi - <i> "Information check krne me thora samay lg skta ha, to kya mai aapke call ko ek minute ke liye hold pe rkh skta hu?</i><br>

          -> Call pe bane rahne k liye, dhanyawad. _CX_Name_<br>
        </div>
        <br>
        <b>Self Serve</b>:: To assist customers on searching details about the product, so that they can easily get all the details of their orders or products on the app or website.<br>

        <br>

        * Wishmaster refused doorstep delivery<br>
        * Please be assured that the seller will do their best to have the product reach you by ...<br>
        <br>
        </p>

















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