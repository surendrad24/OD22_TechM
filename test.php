<!DOCTYPE html>
<html>
<body>
<?php

date_default_timezone_set("Asia/Calcutta");
echo "Current Time Now: " . date("Y-m-d h:ia");
echo "<br>";
echo "<br>";
echo '<hr>';
$now = strtotime("now");
echo 'Time Now : '.date('h:i:s', $now);
echo "<br>";
$start = strtotime('10:00:00');
echo 'Start Time : '.date('H:i:s', $start);
echo "<br>";
$end = strtotime('21:00:00');
echo 'End Time : '.date('H:i:s', $end);
echo "<br>";
$sdate = strtotime("tomorrow");
echo 'Sche Time (T) : '.date('10:00:00', $sdate);
echo "<br>";
$calctime = date("Y-m-d H:i:s", strtotime('+4 hours', $now));
echo 'CalcTime : '.date("H:i:s", strtotime('+4 hours', $now));
echo "<br>";
echo '<hr>';
echo "<br>";


echo ($start < $end)? 'True' : 'False'; echo '<br>';
echo ($calctime < $end)? 'True' : 'False'; echo '<br>';
echo ($calctime > $start)? 'True' : 'False'; echo '<br>';
echo (0 < $start)? 'True' : 'False'; echo '<br>';
echo '<hr>';
echo "<br>";
echo ($calctime < $end && $calctime > $start)? 'True' : 'False'; echo '<br>';
echo '<hr>';
echo "<br>";
$date1 = DateTime::createFromFormat('h:i a', $calctime);
$date2 = DateTime::createFromFormat('h:i a', $start);
$date3 = DateTime::createFromFormat('h:i a', $end);
if ($date1 > $date2 && $date1 < $date3)
{
   echo 'Today';
   echo 'Calc Time : '.date('H:ia', $calctime);
}
else{
   echo 'Tomorow';
   echo "<br>";
   echo 'Sche Time : '.date('Y-m-d 10:00a', $sdate);
   echo "<br>";
}

echo '<hr>';
echo "<br>";


echo "<br>";
echo '<hr>';
echo "<br>";



echo '<hr>';
echo '<hr>';
if ($calctime < $end && $calctime > $start)
{
   echo 'Today';
   echo 'Calc Time : '.date('H:ia', $calctime);
}
else{
   echo 'Tomorow';
   echo 'Sche Time : '.date('Y-m-d 10:00a', $sdate);
   echo "<br>";
}




?>



<p id="t1">
                    <?php
                    
                    if (time() > strtotime('9 pm')) {
                        $d = strtotime("+4 hour");
                        echo date("Y-m-d h:ia", $d) . "<br>";
                        
                     }
                     else{
                        $d=strtotime("tomorrow");
                        echo date("Y-m-d 10:00a", $d) . "<br>";
                        
                     }
                    ?></p>













<br>
<h1><?php echo "Hello World" ?></h1>
<p><?php
date_default_timezone_set("Asia/Calcutta");
echo "Current Time Now: " . date("Y-m-d h:ia");
echo "<br>";
$start = "10:00 am";
$end = "9:00 pm";
$calctime = strtotime("+4 hour");
$now = strtotime("now");
$date1 = DateTime::createFromFormat('h:i a', $start);
$date2 = DateTime::createFromFormat('h:i a', $end);
$date3 = DateTime::createFromFormat('h:i a', $calctime);





?>
</p>

<br>


<p> <?php
$current_time = "10:00 pm";
$sunrise = "10:00 am";
$sunset = "9:00 pm";
$date1 = DateTime::createFromFormat('h:i a', $current_time);
$date2 = DateTime::createFromFormat('h:i a', $sunrise);
$date3 = DateTime::createFromFormat('h:i a', $sunset);
if ($date1 > $date2 && $date1 < $date3)
{
   echo 'here';
}
?> </p>

<h1>
                <?php
                date_default_timezone_set("Asia/Calcutta");
                echo "<b>" .  "Current TimeDate:" . "</b>" . date(" h:i A d-m-Y ");
                echo "<br>";
                ?><br>
                <p><b>RNR-1 Schedule:</b> </p>
                <div class="mt-12 text-white text-center">
                <button onclick="copyToClipboard('#t1')" class="
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
                                <p id="t1">
                    <?php
                    
                    if (time() > strtotime('9 pm')) {
                        $d = strtotime("+4 hour");
                        echo date("Y-m-d h:ia", $d) . "<br>";
                        
                     }
                     else{
                        $d=strtotime("tomorrow");
                        echo date("Y-m-d 10:00a", $d) . "<br>";
                        
                     }
                    ?></p></button><br>
                <br>

            </div>
            
                <br>
            </h1>
            <form action="mail_handler.php" method="post" class="mt-8 md:flex md:max-w-lg md:mx-auto">
                        <div class="relative">
                            <input required
                                id="email"
                                type="email"
                                name="email_address"
                                placeholder="Email address"
                                class="
                                    peer
                                    px-8
                                    pt-5
                                    pb-3
                                    w-full
                                    placeholder-transparent
                                    rounded-full
                                    flex-grow
                                    md:rounded-r-none
                                "
                            />
                            <label
                                for="email"
                                class="
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
                                "
                                >Email address</label
                            >
                        </div>
						<input type="submit" name="send" value="Notify Me"
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
                        >
                    </form>
</body>
</html>