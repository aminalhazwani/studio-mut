# These functions generate first a clock that plays automatically
# and second convert the numbers in written words

checkTime = (i) ->
  if i < 10
    i = '0' + i
  i

startTime = ->
  today = new Date
  h = today.getHours()
  m = today.getMinutes()
  s = today.getSeconds()
  ampm = if h >= 12 then 'PM' else 'AM'
  h = h % 12
  h = if h then h else 12
  m = checkTime(m)
  s = checkTime(s)
  document.getElementById('time').innerHTML = 'It is ' + convertHourToName(h) + '–' + convertNumberToName(m) + ' and ' + convertNumberToName(s) + ' seconds ' + ampm
  t = setTimeout((->
    startTime()
    return
  ), 500)
  return

convertHourToName = (num) ->
  if num > 12
    num -= 12
  convertNumberToName num

convertNumberToName = (num) ->
  lowNames = [
    'zero'
    'one'
    'two'
    'three'
    'four'
    'five'
    'six'
    'seven'
    'eight'
    'nine'
    'ten'
    'eleven'
    'twelve'
    'thirteen'
    'fourteen'
    'fifteen'
    'sixteen'
    'seventeen'
    'eighteen'
    'nineteen'
  ]
  tensNames = [
    'twenty'
    'thirty'
    'forty'
    'fifty'
    'sixty'
    'seventy'
    'eighty'
    'ninety'
  ]
  tens = undefined
  ones = undefined
  result = undefined
  if num < lowNames.length
    result = lowNames[num]
  else
    tens = Math.floor(num / 10)
    ones = num % 10
    if tens <= 9
      result = tensNames[tens - 2]
      if ones > 0
        result += '' + lowNames[ones]
    else
      result = 'unknown'
  result

startTime()