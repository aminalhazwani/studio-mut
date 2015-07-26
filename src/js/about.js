jQuery(".fit").fitText();

(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
var checkTime, convertHourToName, convertNumberToName, startTime;

checkTime = function(i) {
  if (i < 10) {
    i = '0' + i;
  }
  return i;
};

startTime = function() {
  var ampm, h, m, s, t, today;
  today = new Date;
  h = today.getHours();
  m = today.getMinutes();
  s = today.getSeconds();
  ampm = h >= 12 ? 'PM' : 'AM';
  h = h % 12;
  h = h ? h : 12;
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('time').innerHTML = 'It is ' + convertHourToName(h) + '–' + convertNumberToName(m) + ' and ' + convertNumberToName(s) + ' seconds ' + ampm;
  t = setTimeout((function() {
    startTime();
  }), 500);
};

convertHourToName = function(num) {
  if (num > 12) {
    num -= 12;
  }
  return convertNumberToName(num);
};

convertNumberToName = function(num) {
  var lowNames, ones, result, tens, tensNames;
  lowNames = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
  tensNames = ['twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
  tens = void 0;
  ones = void 0;
  result = void 0;
  if (num < lowNames.length) {
    result = lowNames[num];
  } else {
    tens = Math.floor(num / 10);
    ones = num % 10;
    if (tens <= 9) {
      result = tensNames[tens - 2];
      if (ones > 0) {
        result += '' + lowNames[ones];
      }
    } else {
      result = 'unknown';
    }
  }
  return result;
};

startTime();



},{}]},{},[1])
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyaWZ5L25vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCIvVXNlcnMvQW1pbi9TaXRlcy9zdHVkaW8tbXV0L3NyYy9qcy9tYWluLmNvZmZlZSJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQ0dBLElBQUE7O0FBQUEsU0FBQSxHQUFZLFNBQUMsQ0FBRDtFQUNWLElBQUcsQ0FBQSxHQUFJLEVBQVA7SUFDRSxDQUFBLEdBQUksR0FBQSxHQUFNLEVBRFo7O1NBRUE7QUFIVTs7QUFLWixTQUFBLEdBQVksU0FBQTtBQUNWLE1BQUE7RUFBQSxLQUFBLEdBQVEsSUFBSTtFQUNaLENBQUEsR0FBSSxLQUFLLENBQUMsUUFBTixDQUFBO0VBQ0osQ0FBQSxHQUFJLEtBQUssQ0FBQyxVQUFOLENBQUE7RUFDSixDQUFBLEdBQUksS0FBSyxDQUFDLFVBQU4sQ0FBQTtFQUNKLElBQUEsR0FBVSxDQUFBLElBQUssRUFBUixHQUFnQixJQUFoQixHQUEwQjtFQUNqQyxDQUFBLEdBQUksQ0FBQSxHQUFJO0VBQ1IsQ0FBQSxHQUFPLENBQUgsR0FBVSxDQUFWLEdBQWlCO0VBQ3JCLENBQUEsR0FBSSxTQUFBLENBQVUsQ0FBVjtFQUNKLENBQUEsR0FBSSxTQUFBLENBQVUsQ0FBVjtFQUNKLFFBQVEsQ0FBQyxjQUFULENBQXdCLE1BQXhCLENBQStCLENBQUMsU0FBaEMsR0FBNEMsUUFBQSxHQUFXLGlCQUFBLENBQWtCLENBQWxCLENBQVgsR0FBa0MsR0FBbEMsR0FBd0MsbUJBQUEsQ0FBb0IsQ0FBcEIsQ0FBeEMsR0FBaUUsT0FBakUsR0FBMkUsbUJBQUEsQ0FBb0IsQ0FBcEIsQ0FBM0UsR0FBb0csV0FBcEcsR0FBa0g7RUFDOUosQ0FBQSxHQUFJLFVBQUEsQ0FBVyxDQUFDLFNBQUE7SUFDZCxTQUFBLENBQUE7RUFEYyxDQUFELENBQVgsRUFHRCxHQUhDO0FBWE07O0FBaUJaLGlCQUFBLEdBQW9CLFNBQUMsR0FBRDtFQUNsQixJQUFHLEdBQUEsR0FBTSxFQUFUO0lBQ0UsR0FBQSxJQUFPLEdBRFQ7O1NBRUEsbUJBQUEsQ0FBb0IsR0FBcEI7QUFIa0I7O0FBS3BCLG1CQUFBLEdBQXNCLFNBQUMsR0FBRDtBQUNwQixNQUFBO0VBQUEsUUFBQSxHQUFXLENBQ1QsTUFEUyxFQUVULEtBRlMsRUFHVCxLQUhTLEVBSVQsT0FKUyxFQUtULE1BTFMsRUFNVCxNQU5TLEVBT1QsS0FQUyxFQVFULE9BUlMsRUFTVCxPQVRTLEVBVVQsTUFWUyxFQVdULEtBWFMsRUFZVCxRQVpTLEVBYVQsUUFiUyxFQWNULFVBZFMsRUFlVCxVQWZTLEVBZ0JULFNBaEJTLEVBaUJULFNBakJTLEVBa0JULFdBbEJTLEVBbUJULFVBbkJTLEVBb0JULFVBcEJTO0VBc0JYLFNBQUEsR0FBWSxDQUNWLFFBRFUsRUFFVixRQUZVLEVBR1YsT0FIVSxFQUlWLE9BSlUsRUFLVixPQUxVLEVBTVYsU0FOVSxFQU9WLFFBUFUsRUFRVixRQVJVO0VBVVosSUFBQSxHQUFPO0VBQ1AsSUFBQSxHQUFPO0VBQ1AsTUFBQSxHQUFTO0VBQ1QsSUFBRyxHQUFBLEdBQU0sUUFBUSxDQUFDLE1BQWxCO0lBQ0UsTUFBQSxHQUFTLFFBQVMsQ0FBQSxHQUFBLEVBRHBCO0dBQUEsTUFBQTtJQUdFLElBQUEsR0FBTyxJQUFJLENBQUMsS0FBTCxDQUFXLEdBQUEsR0FBTSxFQUFqQjtJQUNQLElBQUEsR0FBTyxHQUFBLEdBQU07SUFDYixJQUFHLElBQUEsSUFBUSxDQUFYO01BQ0UsTUFBQSxHQUFTLFNBQVUsQ0FBQSxJQUFBLEdBQU8sQ0FBUDtNQUNuQixJQUFHLElBQUEsR0FBTyxDQUFWO1FBQ0UsTUFBQSxJQUFVLEVBQUEsR0FBSyxRQUFTLENBQUEsSUFBQSxFQUQxQjtPQUZGO0tBQUEsTUFBQTtNQUtFLE1BQUEsR0FBUyxVQUxYO0tBTEY7O1NBV0E7QUEvQ29COztBQWlEdEIsU0FBQSxDQUFBIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24gZSh0LG4scil7ZnVuY3Rpb24gcyhvLHUpe2lmKCFuW29dKXtpZighdFtvXSl7dmFyIGE9dHlwZW9mIHJlcXVpcmU9PVwiZnVuY3Rpb25cIiYmcmVxdWlyZTtpZighdSYmYSlyZXR1cm4gYShvLCEwKTtpZihpKXJldHVybiBpKG8sITApO3ZhciBmPW5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIrbytcIidcIik7dGhyb3cgZi5jb2RlPVwiTU9EVUxFX05PVF9GT1VORFwiLGZ9dmFyIGw9bltvXT17ZXhwb3J0czp7fX07dFtvXVswXS5jYWxsKGwuZXhwb3J0cyxmdW5jdGlvbihlKXt2YXIgbj10W29dWzFdW2VdO3JldHVybiBzKG4/bjplKX0sbCxsLmV4cG9ydHMsZSx0LG4scil9cmV0dXJuIG5bb10uZXhwb3J0c312YXIgaT10eXBlb2YgcmVxdWlyZT09XCJmdW5jdGlvblwiJiZyZXF1aXJlO2Zvcih2YXIgbz0wO288ci5sZW5ndGg7bysrKXMocltvXSk7cmV0dXJuIHN9KSIsIiMgVGhlc2UgZnVuY3Rpb25zIGdlbmVyYXRlIGZpcnN0IGEgY2xvY2sgdGhhdCBwbGF5cyBhdXRvbWF0aWNhbGx5XG4jIGFuZCBzZWNvbmQgY29udmVydCB0aGUgbnVtYmVycyBpbiB3cml0dGVuIHdvcmRzXG5cbmNoZWNrVGltZSA9IChpKSAtPlxuICBpZiBpIDwgMTBcbiAgICBpID0gJzAnICsgaVxuICBpXG5cbnN0YXJ0VGltZSA9IC0+XG4gIHRvZGF5ID0gbmV3IERhdGVcbiAgaCA9IHRvZGF5LmdldEhvdXJzKClcbiAgbSA9IHRvZGF5LmdldE1pbnV0ZXMoKVxuICBzID0gdG9kYXkuZ2V0U2Vjb25kcygpXG4gIGFtcG0gPSBpZiBoID49IDEyIHRoZW4gJ1BNJyBlbHNlICdBTSdcbiAgaCA9IGggJSAxMlxuICBoID0gaWYgaCB0aGVuIGggZWxzZSAxMlxuICBtID0gY2hlY2tUaW1lKG0pXG4gIHMgPSBjaGVja1RpbWUocylcbiAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3RpbWUnKS5pbm5lckhUTUwgPSAnSXQgaXMgJyArIGNvbnZlcnRIb3VyVG9OYW1lKGgpICsgJ+KAkycgKyBjb252ZXJ0TnVtYmVyVG9OYW1lKG0pICsgJyBhbmQgJyArIGNvbnZlcnROdW1iZXJUb05hbWUocykgKyAnIHNlY29uZHMgJyArIGFtcG1cbiAgdCA9IHNldFRpbWVvdXQoKC0+XG4gICAgc3RhcnRUaW1lKClcbiAgICByZXR1cm5cbiAgKSwgNTAwKVxuICByZXR1cm5cblxuY29udmVydEhvdXJUb05hbWUgPSAobnVtKSAtPlxuICBpZiBudW0gPiAxMlxuICAgIG51bSAtPSAxMlxuICBjb252ZXJ0TnVtYmVyVG9OYW1lIG51bVxuXG5jb252ZXJ0TnVtYmVyVG9OYW1lID0gKG51bSkgLT5cbiAgbG93TmFtZXMgPSBbXG4gICAgJ3plcm8nXG4gICAgJ29uZSdcbiAgICAndHdvJ1xuICAgICd0aHJlZSdcbiAgICAnZm91cidcbiAgICAnZml2ZSdcbiAgICAnc2l4J1xuICAgICdzZXZlbidcbiAgICAnZWlnaHQnXG4gICAgJ25pbmUnXG4gICAgJ3RlbidcbiAgICAnZWxldmVuJ1xuICAgICd0d2VsdmUnXG4gICAgJ3RoaXJ0ZWVuJ1xuICAgICdmb3VydGVlbidcbiAgICAnZmlmdGVlbidcbiAgICAnc2l4dGVlbidcbiAgICAnc2V2ZW50ZWVuJ1xuICAgICdlaWdodGVlbidcbiAgICAnbmluZXRlZW4nXG4gIF1cbiAgdGVuc05hbWVzID0gW1xuICAgICd0d2VudHknXG4gICAgJ3RoaXJ0eSdcbiAgICAnZm9ydHknXG4gICAgJ2ZpZnR5J1xuICAgICdzaXh0eSdcbiAgICAnc2V2ZW50eSdcbiAgICAnZWlnaHR5J1xuICAgICduaW5ldHknXG4gIF1cbiAgdGVucyA9IHVuZGVmaW5lZFxuICBvbmVzID0gdW5kZWZpbmVkXG4gIHJlc3VsdCA9IHVuZGVmaW5lZFxuICBpZiBudW0gPCBsb3dOYW1lcy5sZW5ndGhcbiAgICByZXN1bHQgPSBsb3dOYW1lc1tudW1dXG4gIGVsc2VcbiAgICB0ZW5zID0gTWF0aC5mbG9vcihudW0gLyAxMClcbiAgICBvbmVzID0gbnVtICUgMTBcbiAgICBpZiB0ZW5zIDw9IDlcbiAgICAgIHJlc3VsdCA9IHRlbnNOYW1lc1t0ZW5zIC0gMl1cbiAgICAgIGlmIG9uZXMgPiAwXG4gICAgICAgIHJlc3VsdCArPSAnJyArIGxvd05hbWVzW29uZXNdXG4gICAgZWxzZVxuICAgICAgcmVzdWx0ID0gJ3Vua25vd24nXG4gIHJlc3VsdFxuXG5zdGFydFRpbWUoKSJdfQ==
