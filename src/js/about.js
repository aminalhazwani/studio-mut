// These functions generate first a clock that plays automatically
// and second convert the numbers in written words
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    h = h ? h : 12;
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML = 
    	"It is " + convertHourToName(h) + "–" + convertNumberToName(m) + " and " + convertNumberToName(s) + " seconds " + ampm;
    t = setTimeout(function () {
        startTime()
    }, 500);
}
startTime();

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