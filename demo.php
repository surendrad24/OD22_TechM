<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OD 22</title>
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

            <div class="relative">
                <input required id="identry" type="text" name="id_entry" placeholder="ID Entry" class="
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
                <label for="identry" class="
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
                                ">ID:</label>

            </div>
            <div class="mt-12 text-white text-center">
                <p>Click the "Generate" button to get the code.</p>
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

            </div><br>
            <textarea id="myInput1">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href='yoda.php' class="scroll-link" data-id="<var id="idcolour"><var id="identity"> _ID_</var></var>">Hold Procedure</a></li>
                </ul>
            </div>
            </textarea>
            <br>
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
            </div>


            <?php

            // check to see if the form was submitted
            if (isset($_POST['addBtn'])) {
                // get all the form data
                $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : "";
                $blurb = isset($_POST['blurb']) ? htmlspecialchars($_POST['blurb']) : "";
                $url = isset($_POST['url']) ? htmlspecialchars($_POST['url']) : "";
                $keywords = isset($_POST['keywords']) ? htmlspecialchars($_POST['keywords']) : "";

                // make sure all the form data was submitted
                if ($title && $url && $blurb & $keywords) {
                    // setup some vars
                    $id = '';

                    // CONNECT TO THE DB
                    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

                    mysqli_query($conn, "INSERT INTO search_engine VALUES ('$id', '$title', '$blurb', '$url', '$keywords')");

                    // make sure entry was created
                    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM search_engine WHERE title='{$title}' AND url='{$url}'"))) {
                        echo 'New entry was added';

                        $title = '';
                        $url = '';
                        $keywords = '';
                        $blurb = '';
                    } else
                        echo 'An error occured. No new entry was added.';
                } else
                    echo 'Please provided all data. The entire form is required.';
            }
            ?>

            <form action="" method="POST" name="">
                <table>
                    <tr>
                        <td>Title:</td>
                        <td><input type="text" name="title" value="<?php echo isset($title) ? $title : ""; ?>" class="
                                    peer
                                    px-8
                                    pt-5
                                    pb-3
                                    w-full
                                    placeholder-transparent
                                    rounded-full
                                    flex-grow
                                    md:rounded-r-none
                                " /></td>
                    </tr>
                    <tr>
                        <td>ID Name:</td>
                        <td><input type="text" name="url" value="<?php echo isset($url) ? $url : ""; ?>" class="
                                    peer
                                    px-8
                                    pt-5
                                    pb-3
                                    w-full
                                    placeholder-transparent
                                    rounded-full
                                    flex-grow
                                    md:rounded-r-none
                                " /></td>
                    </tr>
                    <tr>
                        <td>Discrpition:</td>
                        <td><textarea name="blurb" value="<?php echo isset($blurb) ? $blurb : ""; ?>" class="
                                    peer
                                    px-8
                                    pt-5
                                    pb-3
                                    w-full
                                    placeholder-transparent
                                    rounded-full
                                    flex-grow
                                    md:rounded-r-none
                                "></textarea></td>
                    </tr>
                    <tr>
                        <td>Keywords:</td>
                        <td><textarea name="keywords" value="<?php echo isset($keywords) ? $keywords : ""; ?>" class="
                                    peer
                                    px-8
                                    pt-5
                                    pb-3
                                    w-full
                                    placeholder-transparent
                                    rounded-full
                                    flex-grow
                                    md:rounded-r-none
                                "></textarea></td>
                    </tr>
                    <tr>
                        <td></td>





                    </tr>
                </table>
            </form>


            <div class="mt-12 text-white text-center">
                <button type="submit" name="addBtn" value="Add Entry" class="
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
                    Add Entry</button><br>
                <br>

            </div>

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
            var a = document.getElementById("idcolour");
            a.style.color = "yellow";
            var x = document.getElementById("identry").value;
            document.getElementById("identity").innerHTML = x;


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