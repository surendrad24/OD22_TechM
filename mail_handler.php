<?php

#Receive user input
$email_address = $_POST['email_address'];
$message = "OD22 Subscriber Email: ".$email_address;;

#Filter user input
function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

#$email_address  = filter_email_header($email_address);

#Send email
$email_to = "surendrad24@gmail.com, snehaadhikary01@gmail.com";
$headers = "From: ".$email_address;
$sent = mail($email_to, 'OD22 Subscriber', $message, $headers); #,$feedback

#Thank user or notify them of a problem
if ($sent) {

?><html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for subscribing.</p>
</body>
</html>
<?php

} else {

?><html>
<head>
<title>Something went wrong</title>
</head>
<body>
<h1>Something went wrong</h1>
<p>We could not send your subscription form. Please try again.</p>
</body>
</html>
<?php
}
?>