<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OD22 English</title>
  <script src="https://kit.fontawesome.com/de84253868.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css" />
  <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
  <style>
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
            <label for="cname" class="
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
                                ">CX Name</label>

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
                                ">Your Name</label>

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
          <div class="relative">
            <input required id="tat_date" type="text" name="tat_dt" placeholder="TAT DD MMM" class="
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
            <label for="tat_date" class="
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
                                ">DD MMM</label>

          </div>
        </form>
      </div>


      <br><br><br>


      <div>
      <p class="mt-12 text-white text-center">Click the <b>"Generate"</b> button to get the <b>English Version</b></p>
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

      </div>
      <div>
      <br>
      <label for="fname">English</label>


      <br>



      <br><br>

      </div>
      <div>

      <p><b>Intro:----------------------------------------------------</b></p><br><br>

      <p>Good Evening, my name is <b><var id="myph"><var id="num"> _Your_Name_</var></var></b> & I'm Calling from Flipkart. Am I talking to <var id="mynam"><var id="name"> _CX Name_</var></var> ? <br>Thanks <var id="mynam1"><var id="name1"> _CX Name_</var>,</var> for confirming your name. <br></p>

      <p>This call is about your recent order <var id="mypro"><var id="prname"> _Product Name_</var>.</var> is this the right time to talk to you?
        Thank You.</p><br>

      <p><b>Hold Procedure:------------------------------------</b></p><br>

      <p>To check certain information, I would require some time. May I place your call on hold for one minute to check the information?
        Thanks</p><br>

      <p><b>Closing:-------------------------------------------------</b></p><br><br>

      <p>Is there anything else I can assist you with?</p><br>

      <p><b>Customer Satisfaction:--------------------------</b></p><br><br>

      <p><var id="mynam2"><var id="name2"> _CX Name_</var>,</var> your feedback is really important to us. Please share your experience based on our conversation by completing the email survey that you'll get after this call.</p>

      <br>
      <p>Thank you for shopping with Flipkart. Have a nice day.</p><br><br></div>
      <br><hr><br><br>
      <div class="mt-12 text-white text-center">
      <h2><b>1st Scenario (Re-Order Issue)</b></h2>
      </div>
      <p>Delivery (Damaged/Misroute)<br>Benfits if purchased in 7 days</p>
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
            <h2>Re-Order Issue</h2>
          </div>
          <div class="modal-body">
            <p>XXXXXX<br>
              XXXXXX<br>
              XXXXXX<br>
              XXXXXX<br>
              XXXXXX<br>
              XXXXXX<br>
              XXXXXX<br>
              XXXXXX<br>
              XXXXXX<br></p>
            <p>.</p>
          </div>
          <div class="modal-footer">
            <h3>Footer</h3>
          </div>
        </div>

      </div>

      <h2><b>2nd Scenario (Delay Delivery Issue)</b></h2>

      <p>Delivery (Delay Delivery)<br>XXXXXX</p>
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
            <h2>Delivery In Delay Issue</h2>
          </div>
          <div class="modal-body">
            <p>I am sorry that the delivery of your product is taking time.<br>
              I would like to inform you that the logistics team will try to deliver on or by <var id="tdate0"><var id="tat1"> _TAT_DATE_</var></var>.<br><br>
              I can understand your problem and I am sorry for the trouble, I would request you to kindly wait till the <var id="tdate1"><var id="tat2"> _TAT_DATE_</var></var>, <br>
              The logistics team will try to Deliver the product as soon as possible.<br>
              Please be assured that the seller will do their best to have the product reach you by <var id="tdate2"><var id="tat3"> _TAT_DATE_</var></var>.</p>
            <p>.</p>
          </div>
          <div class="modal-footer">
            <h3>Footer</h3>
          </div>
        </div>

      </div>


      <h2><b>3rd Scenario (Refresh Order Issue)</b></h2>

      <p>Refresh Order Issue<br>XXXXXX</p>
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
            <h2>Refresh Order Issue</h2>
          </div>
          <div class="modal-body">
            <p>I am sorry that the delivery of your product is taking time.<br>
              I regret to inform you that the product cannot be delivered as it has got damaged during the shipment.<br>
              I am sorry for the trouble caused.<br>
              I would request you to place a fresh order for the same product(Same FSN) within 7 days. In case the price increases you will be notified through SMS and email. In case the price of the item is still the same or decreases, 10% of the order value should be given of the product value within 72 hrs from the time of delivery in the form of a Gift Card Wallet section.</p><br>
            <p><b>EGV(Electronic gift voucher)-Gift Card Voucher T&Cs </b><br>
              ● Validity - 1 year<br>

              ● Non Transferable<br>

              ● Can club with Prepaid payment mode only(apart from COD)<br>

              ● Can be used on flip kart platform only.<br></p>
          </div>
          <div class="modal-footer">
            <h3>3 Modal Footer</h3>
          </div>
        </div>

      </div>


      <h2><b>4th Scenario </b></h2>

      <p>XXXXXX<br>XXXXXX</p>
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
            <h2>4 Modal Header</h2>
          </div>
          <div class="modal-body">
            <p>Some text in the 4 Modal Body</p>
            <p>Some other text...</p>
          </div>
          <div class="modal-footer">
            <h3>4 Modal Footer</h3>
          </div>
        </div>

      </div>

      <h2><b>5th Scenario </b></h2>

      <p>XXXXXX<br>XXXXXX</p>
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
            <h2>5 Modal Header</h2>
          </div>
          <div class="modal-body">
            <p>Some text in the 5 Modal Body</p>
            <p>Some other text...</p>
          </div>
          <div class="modal-footer">
            <h3>5 Modal Footer</h3>
          </div>
        </div>

      </div>

      <h2><b>6rd Scenario</b></h2>

      <p>XXXXXX<br>XXXXXX</p>
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
            <h2>6 Modal Header</h2>
          </div>
          <div class="modal-body">
            <p>Some text in the 6 Modal Body</p>
            <p>Some other text...</p>
          </div>
          <div class="modal-footer">
            <h3>6 Modal Footer</h3>
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
      var eeeee = document.getElementById("tdate2");
      eeeee.style.color = "blue";
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
      var wwwww = document.getElementById("tat_date").value;
      document.getElementById("tat3").innerHTML = wwwww;
    }
  </script>
  <script>
    // Get the button that opens the modal
    var btn = document.querySelectorAll("button.modal-button");

    // All page modals
    var modals = document.querySelectorAll('.modal');

    // Get the <span> element that closes the modal
    var spans = document.getElementsByClassName("close");

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
</body>

<var id="mynam3"><var id="name3"> _CX Name_</var>,</var>


</html>