<?php

//AGDQ or SGDQ
if (date('m')>=6){$gdq = "SGDQ";}
else {$gdq = "AGDQ";}

//Arrays of replacement text
$textNoun = array("Germany","cancer","animal","donation","viewer","frames","games");
$textVerb = array("kill","save","donate","view"); //Destroyed,
$textVerber = array("donator","viewer","runner"); //runners
$textVerbing = array("watching","working");
$textSt = array("first", "second", "third", "fourth");

//Choose template from URL
//If no template selected choose a random one
if (isset($_GET['temp'])){
  $switch = $_GET['temp'];
}
else{
  $switch = rand(0,5);
}

//Template options
switch ($switch) {
  case 0:
  echo "Hey guys, long time ".$textVerber[rand(0,count($textVerber)-1)].", ".$textSt[rand(0,count($textSt)-1)]." time ".$textVerber[rand(0,count($textVerber)-1)].". It gives me great joy to ".$textVerb[rand(0,count($textVerb)-1)]." to a great cause. Greetings from ".$textNoun[rand(0,count($textNoun)-1)].". PS: ".$textVerb[rand(0,count($textVerb)-1)]." the ".$textNoun[rand(0,count($textNoun)-1)].", ".$textVerb[rand(0,count($textVerb)-1)]." the ".$textNoun[rand(0,count($textNoun)-1)].".";
    break;

  case 1:
    echo "Greetings from ".$textNoun[rand(0,count($textNoun)-1)].". Long time ".$textVerber[rand(0,count($textVerber)-1)].", ".$textSt[rand(0,count($textSt)-1)]." time ".$textVerber[rand(0,count($textVerber)-1)].". I am donating because my ".$textNoun[rand(0,count($textNoun)-1)]." has died from ".$textNoun[rand(0,count($textNoun)-1)].".";
    break;

  case 2:
    echo ucwords($textSt[rand(0,count($textSt)-1)])." time watching ".$gdq.", ".$textSt[rand(0,count($textSt)-1)]." time ".$textVerber[rand(0,count($textVerber)-1)].". My ".$textNoun[rand(0,count($textNoun)-1)]." passed away from ".$textNoun[rand(0,count($textNoun)-1)].". Money goes to ".$textVerb[rand(0,count($textVerb)-1)]." the ".$textNoun[rand(0,count($textNoun)-1)].", ".$textVerb[rand(0,count($textVerb)-1)]." the ".$textNoun[rand(0,count($textNoun)-1)].". Hype!!!!";
    break;

  case 3:
    echo "Had to ".$textVerb[rand(0,count($textVerb)-1)]." during this run. Put my money towards ".$textVerb[rand(0,count($textVerb)-1)]." the ".$textNoun[rand(0,count($textNoun)-1)].". Lets kick ".$textNoun[rand(0,count($textNoun)-1)]."'s butt!";
    break;

  case 4:
    echo "Another great day of ".$gdq.". Love ".$textVerbing[rand(0,count($textVerbing)-1)]." my childhood ".$textNoun[rand(0,count($textNoun)-1)]." get destroyed. Money goes to ".$textVerb[rand(0,count($textVerb)-1)]." the ".$textNoun[rand(0,count($textNoun)-1)].", ".$textVerb[rand(0,count($textVerb)-1)]." the ".$textNoun[rand(0,count($textNoun)-1)].".";
    break;

  case 5:
    echo "Thanks to the ".$textVerber[rand(0,count($textVerber)-1)]." and those ".$textVerbing[rand(0,count($textVerbing)-1)]." behind the scenes, glad to ".$textVerb[rand(0,count($textVerb)-1)]." to such a worthy cause. Put this ".$textNoun[rand(0,count($textNoun)-1)]." towards ".$textVerber[rand(0,count($textVerber)-1)]."'s choice!";
    break;

  default:
  echo "Error: there are no more templates.";

}

?>
