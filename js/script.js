$(document).ready(function () {

  //Initialize Clipboard.js
  new Clipboard('.copy');

  //Random Function (so I dont have to typle a Math.random every time)
  var rand = function (r){return Math.floor(Math.random()*r);}

  //Get date for AGDQ/SGDQ toggle
  var d = new Date();
  var year = d.getYear() + 1900;
  var month = d.getMonth();

  //Check the date to see if AGDQ or SGDQ is on
  if (typeof(special)=="undefined") {
    if (month>=5){var gdq = "SGDQ";}
    else {var gdq = "AGDQ";}
  }
  else {
    gdq=special;
  }


  function generateText() {
    //Arrays of replacement text
    var textNoun = ["Germany","cancer","animal","donation","viewer","frames","games"];
    var textVerb = ["kill","save","donate","view"]; //Destroyed,
    var textVerber = ["donator","viewer","runner"]; //runners
    var textVerbing = ["watching","working"];
    var textSt = ["first", "second", "third", "fourth"];
    var textHype = ["Hype","Honk","Orb","Hyyyyyyyppppppppeeeeeee"];

    //Choose random template
    switch (rand(7)) {
      case 0:
      var text = "Hey guys, long time "+textVerber[rand(textVerber.length)]+", "+textSt[rand(textSt.length)]+" time "+textVerber[rand(textVerber.length)]+". It gives me great joy to "+textVerb[rand(textVerb.length)]+" to a great cause. Greetings from "+textNoun[rand(textNoun.length)]+". PS: "+textVerb[rand(textVerb.length)]+" the "+textNoun[rand(textNoun.length)]+", "+textVerb[rand(textVerb.length)]+" the "+textNoun[rand(textNoun.length)]+".";
        break;
      case 1:
      var text = "Greetings from "+textNoun[rand(textNoun.length)]+". Long time "+textVerber[rand(textVerber.length)]+", "+textSt[rand(textSt.length)]+" time "+textVerber[rand(textVerber.length)]+". I am donating because my "+textNoun[rand(textNoun.length)]+" has died from "+textNoun[rand(textNoun.length)]+".";
        break;
      case 2:
      var text = textSt[rand(textSt.length)]+" time watching "+gdq+", "+textSt[rand(textSt.length)]+" time "+textVerber[rand(textVerber.length)]+". My "+textNoun[rand(textNoun.length)]+" passed away from "+textNoun[rand(textNoun.length)]+". Money goes to "+textVerb[rand(textVerb.length)]+" the "+textNoun[rand(textNoun.length)]+", "+textVerb[rand(textVerb.length)]+" the "+textNoun[rand(textNoun.length)]+". "+textHype[rand(textHype.length)]+"!!!!";
        break;
      case 3:
      var text = "Had to "+textVerb[rand(textVerb.length)]+" during this run. Put my money towards "+textVerb[rand(textVerb.length)]+" the "+textNoun[rand(textNoun.length)]+". Lets kick "+textNoun[rand(textNoun.length)]+"'s butt!";
      break;
      case 4:
      var text = "Another great day of "+gdq+". Love "+textVerbing[rand(textVerbing.length)]+" my childhood "+textNoun[rand(textNoun.length)]+" get destroyed. Money goes to "+textVerb[rand(textVerb.length)]+" the "+textNoun[rand(textNoun.length)]+", "+textVerb[rand(textVerb.length)]+" the "+textNoun[rand(textNoun.length)]+".";
        break;
      case 5:
      var text = "Thanks to the "+textVerber[rand(textVerber.length)]+" and those "+textVerbing[rand(textVerbing.length)]+" behind the scenes, glad to "+textVerb[rand(textVerb.length)]+" to such a worthy cause. Put this "+textNoun[rand(textNoun.length)]+" towards "+textVerber[rand(textVerber.length)]+"'s choice!";
        break;
      case 6:
      var text = "Honk"+(rand(8) == 1? "":" honk".repeat(rand(10)+1))+"! Honk"+(" honk".repeat(rand(7)+1))+". Honk honk. "+"Honk "+(" honk".repeat(rand(10)+1))+"? Hoooooonnnnnnnnkkkkkk!!!";
        break;
    }

    //Output donation text
    $("#donation-text").text(text);

    //Tweet Button
    $(".twitter-share-button").attr("data-text",text);
    $(".twitter-share-button").attr("data-hashtags",gdq+year);

    //Clear Copy message
    $(".message").html("");
  }

  //Output copy alert to page
  function copyMessage() {
    $(".message").html("<p>Your donation has been copied to the clipboard</p>");
    // setTimeout remove copy message
  }

  //Get and display changelog.txt file
  // $.get("changelog.html", function(changes){
  // 		$("#changelog").html(changes);
  // });

  /* Long time rifleman, first time pilot. Had to uphold the objective during this mission. My captain died from mercenaries, so ammo goes to kill the Apex Predators. Hype!!! */
  $('#copy').on('click', function functionName() {
    copyMessage();
    // Replace with javascript native copy to clipboard
  })

  $('#generate').on('click', function() {
    generateText();
  })


  // On page load
  generateText();
});
  //Tabbed Box

  $(document).ready(function(){

    $('ul.tabs li').click(function(){
      var tab_id = $(this).attr('data-tab');

      $('ul.tabs li').removeClass('current');
      $('.tab-content').removeClass('current');

      $(this).addClass('current');
      $("#"+tab_id).addClass('current');
    });

  })
