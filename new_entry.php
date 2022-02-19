<?php
define("SITE_ADDR", "http://localhost/");
include("./include.php");
$site_title = 'Search Engine | Keyword Entry Form';
?>
<html>

<head>
<meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OD 22</title>
  <script src="https://kit.fontawesome.com/de84253868.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css" />
  <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<title><?php echo $site_title; ?></title>
	</link>
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

<body>

	<div id="wrapper">

	<center>
		<div id="top_header">
			<div id="nav">
			<a href="<?php echo SITE_ADDR; ?>/index.php">Home</a>
			</div>

			<div id="logo">
				<h1><a href="<?php echo SITE_ADDR; ?>">Search Engine | Keyword Entry Form</a></h1>
			</div>
		</div>
		</center>

		<div id="main" class="shadow-box">
			<div id="content">

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
							<td><input type="text" name="title" value="<?php echo isset($title) ? $title : ""; ?>" /></td>
						</tr>
						<tr>
							<td>ID Name:</td>
							<td><input type="text" name="url" value="<?php echo isset($url) ? $url : ""; ?>" /></td>
						</tr>
						<tr>
							<td>Discrpition:</td>
							<td><textarea name="blurb" value="<?php echo isset($blurb) ? $blurb : ""; ?>"></textarea></td>
						</tr>
						<tr>
							<td>Keywords:</td>
							<td><textarea name="keywords" value="<?php echo isset($keywords) ? $keywords : ""; ?>"></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="addBtn" value="Add Entry" /></td>
						</tr>
					</table>
				</form>
				<p id="myInput1"><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li><a href='yoda.php' class="scroll-link" data-id="HoldProcedure">Hold Procedure</a></li>
    </ul>
</div></p>


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
			</div>
		</div>
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li><a href='yoda.php' class="scroll-link" data-id="HoldProcedure">Hold Procedure</a></li>
    </ul>
</div>
	</div>
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