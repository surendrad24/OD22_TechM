<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OD22 About Us</title>
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
                    <br>
                    <h1>About Us</h1>
                </div>

            </div>


            <br><br><br>


            <br>
            <h1>
                <?php
                /**
                 * This file is part of the NovaPHP standard for PHP_CodeSniffer
                 *
                 * PHP version 7
                 *
                 * @category  PHP
                 * @package   Nova\Standards
                 * @author    Surendra Donthamsetti <hi@surendradonthamsetti.com>
                 * @copyright 2020 DigitalChameleonTechnologies
                 * @license   http://www.surendradonthamsetti.com/licence.txt BSD Licence
                 * @link      http://www.surendradonthamsetti.com
                 */
                date_default_timezone_set("Asia/Calcutta");
                echo "<b>" .  "Current TimeDate:" . "</b>" . date(" h:i A d-m-Y ");
                echo "<br>";
                ?><br>
                <div class="mt-12 text-white text-center">
                    <p><b>Contributors:</b> </p>
                </div>

                <br>
            </h1>

            <br>



            <br>
            <label for="fname">Note 1</label>

            <br>
            <p id="myInput1"><b>OD: Inform cx to wait till OKT 23 Aug 21and set mark waiting till 23 Aug 21</b></p>
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
            </div><br><br>
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
            </div><br><br>
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
            </div><br><br>
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
            </div><br><br>
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
            </div><br><br>
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
            </div><br><br>
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
            </div><br><br>
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
            </div><br><br>
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
</body>


</html>