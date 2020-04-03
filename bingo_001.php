<!DOCTYPE html>
<html lang="en">
<html>
<head><title>Distansmötesbingo</title></head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<style>
body {background-color: powderblue;}
h1   {color: black;}
p    {color: red;}
table {width:100%; border: 1px solid black}
td {border: 1px solid black; height: 100px; width: 20%; text-align: center; padding: 25px; background-color: #bde9ba}
</style>

<body>

<?php

#-------------
$log = fopen("bingo.txt","a");

$now = date("d F Y h:i:s A");
$useragent = $_SERVER['HTTP_USER_AGENT'];
$ip = $_ENV['REMOTE_ADDR'];

fwrite($log,"$now, $useragent, $ip \n");
$log = fclose($log);
#-------------

$bingo = array(
	"Hej, vem var det nu som kom in?",
	"Kan du mejla det till alla?",
	"____ är pa mute.",
	"(alla pratar samtidigt)",
	"Uh, _____, du delar fortfarande din skärm",
	"Ljudet av någon som skriver hårt, möjligtvis med hammare.",
	"Ledsen, jag var på mute.",
	"Jag blev bortkopplad",
	"Är ____ med på mötet?",
	"Hej, kan ni höra mig?",
	"Nästa slide, tack.",
	"Kan alla mute:a sig?",
	"(Jättehögt eko)",
	"Förlåt, fortsätt",
	"Hallå? Hallå?",
	"Ledsen att jag är sen.",
	"Jag hade problem med min uppkoppling.",
	"Ledsen, men ljudet försvann.",
	"Kan vi ta det har efter mötet?",
	"Nä, det laddar fortfarande.",
	"Jag får återkomma till dig.",
	"Kan alla se min skärm?",
	"(Barn som gråter eller hund som skäller)",
	"Det laggar.",
	"Du försvann ett tag, kan du ta om det där?",
	"(någon andas tungt i mic:en)"

);

shuffle($bingo);

$bgc1="white";
$bgc2="white";
$bgc3="white";
$bgc4="white";
$bgc5="white";
$bgc6="white";
$bgc7="white";
$bgc8="white";
$bgc9="white";
$bgc10="white";
$bgc11="white";
$bgc12="white";
$bgc13="white";
$bgc14="white";
$bgc15="white";
$bgc16="white";
$bgc17="white";
$bgc18="white";
$bgc19="white";
$bgc20="white";
$bgc21="white";
$bgc22="white";
$bgc23="white";
$bgc24="white";
$bgc25="white";


?>

<h1>Distansmötesbingo</h1>

<br>
<h2>Regler: Klicka på rutorna när det som står i rutan infräffar. När du har fem i rad så skriker du rakt ut i mötet BINGO!!!</h2>
<i>Texterna slumpas fram vid varje "refresh" av sidan</i>
<br>
 
<table>
<tr>
	<td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[0]);?></td>
	<td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[1]);?></td>
	<td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[2]);?></td>
	<td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[3]);?></td>
	<td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[4]);?></td>
</tr>

<tr>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[5]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[6]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[7]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[8]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[9]);?></td>
</tr>

<tr>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[10]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[11]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[12]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[13]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[14]);?></td>
</tr>

<tr>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[15]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[16]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[17]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[18]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[19]);?></td>
</tr>

<tr>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[20]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[21]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[22]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[23]);?></td>
        <td onclick="this.style.backgroundColor = 'red';"><?php echo($bingo[24]);?></td>
</tr>

</table>

<br><br>
<i>Detta är bara ett skämt och materialet från de olika rutorna cirkulerade på inernet men för all del roar det någon så är jag nöjd</i>

</body>
</html>
