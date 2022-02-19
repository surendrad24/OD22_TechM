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
        <form action="mail_handler.php" method="post" class="mt-8 md:flex md:max-w-lg md:mx-auto">
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
            <input required id="tatdate" type="text" name="tat_date" placeholder="TAT Date" class="
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
            <label for="tdate" class="
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
                                ">DD MMM YY</label>

          </div>
        </form>
      </div>
      <div class="mt-12 text-white text-center">
        <p>Click the "Generate" button to fetch data.</p>
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
          This is a sample scrolling text that has scrolls texts to left.
        </marquee>
      </div>
      <div class=" text-white text-center">
        <p>XXXXXXXXXXXXXXXXXXXXXXXXXX</p>
      </div>
      <br>
      <div class="text-center"><b>Current Date and Time: </b></div><br>
      <div class="text-white text-center" id="time"></div>
      <br>
      <div class="b5">
        <div class="text-center"><b>RNR Schedule: + 4 Hours</b></div><br>
        <div class="text-white text-center">
          <div id="4time"></div>
        </div>
        <br>
        <hr style="width:50%; margin: auto;" /><br>
        <div class="text-white text-center">
          <p>Click the <b>"Copy"</b> button to copy respective <b>Notes</b></p>
        </div>
        <br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>SWITCH OFF/ UNAVAILABLE/BUSY/BLANK/FAILED</b></p><br>
        </div>
        <p><b>OD: cx is busy. mark waiting done. call back after 4 hours.</b></p><br>
        <p><b>OD: blank call. mark waiting done. call back after 4 hours.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>CALL DROP -</b></p><br>
        </div>
        <p><b>OD: cx dropped the call after picking up the call. mark waiting done. call back after 4 hours.</b></p><br>
        <p><b>OD: cx dropped the call in between of the conversation. mark waiting done. call back after 4 hours.</b></p><br>
        <p><b>OD: Blank call. call got dropped automatically. mark waiting done. call back after 4 hours.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>OUT FOR DELIVERY -</b></p><br>
        </div>
        <p><b>OD: Informed Cx to wait till 7 PM as the product is OFD and mark waiting done 10am tomorrow.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>DELIVERED-</b></p><br>
        </div>
        <p><b>OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: As per SA Cx already received the order, hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: As per SA Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>STATUS CHECK -</b></p><br>
        </div>
        <p><b>OD: As CPD is not yet breached, requested the cx to wait till the CPD, hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: As repromise date is not yet breached, requested the cx to wait till the repromise date, hence closing the incident as per process. case solved.</b></p><br>
        <p><b>OD: As CPD is not yet breached, requested the cx to wait till the CPD, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: As repromise date is not yet breached, requested the cx to wait till the repromise date, Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>IF THE REPROMISE DATE IS TODAY'S DATE</b></p><br>
        </div>
        <p><b>OD: informed the cx to wait till today as the repromise date is given today's date.
            also informed the cx to wait till the OTAT. cx agreed.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>CANCEL ORDER -</b></p><br>
        </div>
        <p><b>OD: cx stated that <span class="highlight">he</span> wants to cancel the order. behalf of the cx cancelling the order. case solved.</b></p><br>
        <p><b>OD: cx stated that <span class="highlight">she</span> wants to cancel the order. behalf of the cx cancelling the order. case solved.</b></p><br>
        <p><b>OD: Cx stated that <span class="highlight">he</span> wants to cancel the order. But cancelling is not taking place in SA. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: Cx stated that <span class="highlight">she</span> wants to cancel the order. But cancelling is not taking place in SA. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>CANCEL</b></p><br>
        </div>

        <p><b>OD: Order already got cancelled by the terminator. Requested the cx to place a fresh order within 7 days. TOA metioned. EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: As per SA, Cx already canceled the order. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b>OD: As per SA, Order already got cancelled by the terminator. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <hr><br>
        <hr><br>
        <div class=" text-white text-center">
          <p><b>SWITCH OFF/ UNAVAILABLE/BUSY/BLANK/FAILED ( AFTER 5:00PM )</b></p><br>
        </div>
        <p><b>OD: blank call. mark waiting done. call back the next day 10am tomorrow.</b></p><br>
        <p><b>OD: cx is busy. mark waiting done. call back the next day 10am tomorrow.</b></p><br>
        <hr>
        <div class=" text-white text-center">
          <p><b>CALL DROP -</b></p>
        </div>
        <p><b>OD: cx dropped the call after picking up the call. mark waiting done. call back the next day 10 am tomorrow. next day follow up.</b></p><br>
        <p><b>OD: cx dropped the call in between of the conversation. mark waiting done. call back the next day 10am tomorrow. next day follow up.</b></p><br>
        <p><b>OD: Blank call. call got dropped automatically. mark waiting done. call back the next day 10am tomorrow. next day follow up.</b></p><br>

        <hr>
        <hr>
        <div class=" text-white text-center">
          <p><b>UNABLE TO SOLVE CASES:</b></p>
        </div>
        <hr>
        <div class=" text-white text-center">
          <p><b>CANCEL</b></p>
        </div>
        <p><b>OD: Cx stated that she wants to cancel the order. But cancelling is not taking place in SA. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <p><b>OD: Order already got cancelled by the terminator. Requested the cx to place a fresh order within 7 days. TOA metioned. EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <p><b>OD: RNR 1. As per SA, Cx already canceled the order. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <p><b>OD: RNR 1. As per SA, Order already got cancelled by the terminator. Activity log inactive, hence couldn't solve the case and mentioned over the notes. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <hr>
        <div class=" text-white text-center">
          <p><b>NON-SERVICEABLE PINCODE</b></p>
        </div>
        <p><b>OD: Non serviceable pincode. Requested the cx to wait for 48 hrs. cx agreed. mark waiting done till 48 hrs. Previous product got delivered at the same pincode. Mark waiting done for 4 hours. Form fill up done. using accops ekart console not working.</b></p><br>
        <p><b>OD: OD: Non serviceable pincode. Requested the cx to wait for 24 hrs. cx agreed. mark waiting done till 24 hrs. As the previous agent asked the cx to wait for 48 hours on using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <p><b>OD: Non serviceable pincode. Requested the cx to place a fresh order in a different pincode or else wait till the pincode becomes serviceable. Cx's pincode is showing serviceable at the moment. Requested the cx to place a fresh order within 7 days. TOA mentioned. EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <p><b>OD: Non serviceable pincode. Product is showing out of stock. Unable to place a fresh order. Hence asked the cx to wait till the product comes in stock. TOA will be provided within next 3 business days. Activity log inactive, hence couldn't solve the case and mentioned over the notes.
            using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <hr>
        <div class=" text-white text-center">
          <p><b>OTHER STATE MISROUTE:</b></p>
        </div>
        <p><b>OD: Other state misroute requested the cx to place a fresh order within 7 days. TOA metioned.
            EGV details provided to the cx. Activity log inactive, hence couldn't solve the case and mentioned over the notes. using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <hr>
        <div class=" text-white text-center">
          <p><b>CPD AND REPROMISE DATE NOT BREACHED</b></p>
        </div>
        <p><b>OD: CPD is not yet breached, requested the cx to wait till the CPD. On or before 7pm logestic team will try to deliver the product. cx agreed. Activity log inactive, hence couldn't solve the case and mentioned over the notes. using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <p><b>OD: CPD and repromise date breached. Requested the cx to raise a delay in delivery complaint.
            informed the cx to contact the cx care tollfree number 1800 202 9898. cx agreed.
            Activity log inactive, hence couldn't solve the case and mentioned over the notes.
            using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <p><b>OD: CPD is already breached. Requested the cx to raise a delay in delivery complaint.
            informed the cx to contact the cx care tollfree number 1800 202 9898. cx agreed.
            Activity log inactive, hence couldn't solve the case and mentioned over the notes.
            using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <p><b>OD: As per VOC Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <p><b>OD: RNR 1, As per SA Cx already received the order, Activity log inactive, hence couldn't solve the case and mentioned over the notes. using accops ekart console not working. Mark waiting done for 4 hours. Form fill up done.</b></p><br>
        <hr>
        <p><b>Activity log inactive, hence couldn't solve the case and mentioned over the notes.</b></p><br>

        <p><b>OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved.</b></p><br>

        <p><b>OD: Language barrier, informed the cx to wait for 24 hours. cx agreed. Form fill up done.</b></p><br>

        <p><b>OD: Cx already cancelled the order, asked the cx to place a fresh order. hence closing the incident as per process. case solved.</b></p><br>

        <p><b>OD: Order already got cancelled by the terminator. Requested the cx to place a fresh order within 7 days. TOA metioned. EGV details provided to the cx. hence closing the incident as per process. case solved.</b></p><br>

        <p><b>OD: Same stated misroute requested the cx to wait till 72 hrs. Mark waiting done till 72 hrs.
            using accops ekart console not working.</b></p><br>

        <p><b>OD: Other state misroute requested the cx to place a fresh order within 7 days. TOA metioned.
            EGV details provided to the cx. using accops ekart console not working. hence closing the incident as per process. case solved.</b></p><br>

        <p><b>OD: Non serviceable pincode. Requested the cx to place a fresh order in a different pincode or else wait till the pincode becomes serviceable. Cx's pincode is showing serviceable at the moment. Requested the cx to place a fresh order within 7 days. TOA mentioned. EGV details provided to the cx. using accops ekart console not working. hence closing the incident as per process. case solved.</b></p><br>

        <p><b>OD: Non serviceable pincode. Product is showing out of stock. Unable to place a fresh order. Hence asked the cx to wait till the product comes in stock.
            TOA will be provided within next 3 business days. EGV details provided to the cx. using accops ekart console not working. hence closing the incident as
            per process. case solved.
            non transferable.
            1 year time.
            can be clubbed with only prepaid mode.
            can be used only in flipkart.</b></p><br>




        

        




        <br>
        <label for="fname">Note 1</label>

        <br>
        <p id="myInput1"><b>OD: Inform cx to wait till OKT <var id="tt0"><var id="tdate0"> _OKT_DATE_</var>,</var>and set mark waiting till <var id="tt1"><var id="tdate1"> _OKT_DATE_</var>,</var></b></p>
        <div class="tooltip mt-12 text-white text-center">
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
            Copy
          </button>
        </div><br>
        <br>
        <hr>

        <br>
        <br>
        <label for="fname">Note 2</label>

        <br>
        <p id="myInput2"><b>OD: As per elk Console order status is showing NSS so inform cx to place afresh order (as previously there is no order in same address), cx agreed hence solve the incident.</b></p>
        <div class="tooltip mt-12 text-white text-center">
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
            Copy
          </button>
        </div><br>
        <br>
        <hr>

        <br>
        <br>
        <label for="fname">Note 3</label>

        <br>
        <p id="myInput3"><b>OD: As per elk Console order status is showing NSS so inform cx to wait till 48 hrs (as previously there is an order in same address) , cx agreed hence solve the incident.</b></p>

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
            Copy
          </button>
        </div><br>
        <br>
        <hr>

        <br>
        <br>
        <label for="fname">Note 4</label>

        <br>
        <p id="myInput4"><b>OD: ask customer to wait till 7 pm as the product status is out for delivery mark waiting for next day 10:00 am. Self serve pitch.</b></p>

        <div class="tooltip mt-12 text-white text-center">
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
            Copy
          </button>
        </div><br><br>
        <br>
        <hr>

        <br>
        <label for="fname">Note 5</label>

        <br>
        <p id="myInput5"><b>OD: cx confirm that order has already delivered, hence close the incident.</b></p>

        <div class="tooltip mt-12 text-white text-center">
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
            Copy
          </button>
        </div><br><br>
        <br>
        <hr>

        <br>
        <label for="fname">Note 6</label>

        <br>
        <p id="myInput6"><b>OD: Order is already delivered/ cancelled, but there is no option available to solve hence set mark waiting for 4 hrs and form filled.</b></p>

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
            Copy
          </button>
        </div><br><br>
        <br>
        <hr>

        <br>
        <label for="fname">Note 7</label>

        <br>
        <p id="myInput7"><b>OD: cx is unable to place a fresh order so inform cx about the TOA and form filled.</b></p>


        <div class="tooltip mt-12 text-white text-center">
          <button onclick="copyToClipboard('#myInput7')" onmouseout="outFunc()" class="
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
            Copy
          </button>
        </div><br><br><br>
        <hr>

        <br>
        <label for="fname">Note 8</label>

        <br>
        <p id="myInput8"><b>OD: Order has already cancel so inform cx to place a fresh order and inform about TOA.</b></p>

        <div class="tooltip mt-12 text-white text-center">
          <button onclick="copyToClipboard('#myInput8')" onmouseout="outFunc()" class="
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
            Copy
          </button>
        </div><br><br><br>
        <hr>

        <br>
        <label for="fname">Note 9</label>

        <br>
        <p id="myInput9"><b>OD: call got dropped, so set mark waiting for 4 hrs/for next day 10:am.</b></p>

        <div class="tooltip mt-12 text-white text-center">
          <button onclick="copyToClipboard('#myInput9')" onmouseout="outFunc()" class="
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
            Copy
          </button>
        </div><br><br><br>
        <hr>

        <br>
        <label for="fname">Note 10</label>

        <br>
        <p id="myInput10"><b>OD: there is no responds from cx side so set mark waiting for 4 hrs/ next day 10 am.</b></p>

        <div class="tooltip mt-12 text-white text-center">
          <button onclick="copyToClipboard('#myInput10')" onmouseout="outFunc()" class="
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
            Copy
          </button>
        </div><br><br><br>
        <hr>

        <br>
        <label for="fname">Note 11</label>

        <br>
        <p id="myInput11"><b>OD: in EKL its showing same state misroute so inform cx to wait till 72 hrs and set mark waiting for 72 hrs.</b></p>

        <div class="tooltip mt-12 text-white text-center">
          <button onclick="copyToClipboard('#myInput11')" onmouseout="outFunc()" class="
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
            Copy
          </button>
        </div><br><br><br>
        <hr>

        <br>
        <label for="fname">Note 12</label>

        <br>
        <p id="myInput12"><b>OD: RNR1 hence set mark waiting for 4 hrs/ next day 10:am.</b></p>

        <div class="tooltip mt-12 text-white text-center">
          <button onclick="copyToClipboard('#myInput12')" onmouseout="outFunc()" class="
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
            Copy
          </button>
        </div><br><br><br>
        <hr>

        <br>
        <label for="fname">Note 13</label>

        <br>
        <p id="myInput13"><b>OD: cx want me to call back hence set mark waiting for 4 hrs.</b></p>

        <div class="tooltip mt-12 text-white text-center">
          <button onclick="copyToClipboard('#myInput13')" onmouseout="outFunc()" class="
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
            Copy
          </button>
        </div><br><br><br>
        <hr>

        <br>
        <label for="fname">Note 14</label>

        <br>
        <p id="myInput14"><b>OD: RNR2 hence set mark waiting till OKT( OKT).</b></p>

        <div class="tooltip mt-12 text-white text-center">
          <button onclick="copyToClipboard('#myInput14')" onmouseout="outFunc()" class="
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
            Copy
          </button>
        </div><br><br><br>
        <hr>

        <br>
        <label for="fname">Note 15</label>

        <br>
        <p id="myInput15"><b>OD: ORDER STATUS IS SHOWING AS OUT FOR DELIVERY SO INFORM CX TO WAIT TILL 7 PM AND SET AMRK WAITING FOR NEXT DAY 10 AM.</b></p>


        <div class="tooltip mt-12 text-white text-center">
          <button onclick="copyToClipboard('#myInput15')" onmouseout="outFunc()" class="
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
            Copy
          </button>
        </div><br>
        <br>
        <hr>

        <br>



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