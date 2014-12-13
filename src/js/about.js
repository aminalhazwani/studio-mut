$('.about__intro').flowtype({
    minimum   : 481,
    maximum   : 2560,
    minFont   : 18,
    maxFont   : 48
});

$('.about__more--address').flowtype({
    minimum   : 481,
    maximum   : 2560,
    minFont   : 16,
    maxFont   : 32
});

window.onload = (function startTime() {
    var today = new Date();
    var h = today.getUTCHours() + 1;
    var m = today.getMinutes();
    var s = today.getSeconds();
    h = h % 12;
    h= h ? h : 12; // the hour '0' should be '12'
    var ampm=h >= 12 ? 'PM' : 'AM';
    // add a zero in front of numbers greater than 10
    document.getElementById('time').innerHTML = "It is " +
        convertHourToName(h) + "–" + 
        convertNumberToName(m) + " and " + 
        convertNumberToName(s) + " seconds" + " " + ampm;
    setTimeout(startTime,300);
});

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