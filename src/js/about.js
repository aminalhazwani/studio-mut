// Sticky Header
$(window).on("scroll load", function() {  
  if( $(this).scrollTop() > $('.header-primary').height() ) {
    $('.nav').addClass('nav-scrolled');
    $('main').addClass('nav-is-fixed');
  } else {
    $('.nav').removeClass('nav-scrolled');
    $('main').removeClass('nav-is-fixed');
  }
});

// Random sentence in footer
var random = Math.floor(Math.random() * 1000);
var $heading = $("footer h2");
$heading.eq(random % $heading.length).addClass("u-blk");

// Footer sentece huge typography
jQuery(".fit").fitText();

// Clock
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    h = h ? h : 12;
    // add a zero in front of numbers greater than 10
    document.getElementById('time').innerHTML = "It is " +
        convertHourToName(h) + "–" + 
        convertNumberToName(m) + " and " + 
        convertNumberToName(s) + " seconds" + " " +
        ampm;
    setTimeout(startTime,300);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
} 

function convertHourToName(num) {
    if (num > 12) {
        num -= 12;
    }
    return convertNumberToName(num);
}

function convertNumberToName(num) {
    var lowNames = ["zero", "one", "two", "three", 
                  "four", "five", "six", "seven", "eight", "nine", 
                 "ten", "eleven", "twelve", "thirteen", "fourteen", 
                  "fifteen", "sixteen", "seventeen", 
                  "eighteen", "nineteen"];
    var tensNames = ["twenty", "thirty", "forty", "fifty", 
                "sixty", "seventy", "eighty", "ninety"];
    var tens, ones, result;
    if (num < lowNames.length) {
        result = lowNames[num];
    } else {
        tens = Math.floor(num / 10);
        ones = num % 10;
        if (tens <= 9) {
            result = tensNames[tens - 2];
            if (ones > 0) {
                result += "" + lowNames[ones];
            }
        } else {
            result = "unknown"
        }
    }
    return result;
}

startTime();