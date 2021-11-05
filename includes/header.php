<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Online Quiz System</title>
        <script type="text/javascript">
  function timeout(){
      var minute = Math.floor(timeLeft/60);
  var second = timeLeft%60;
  if(timeLeft<=0){
    clearTimeout(tm);
    document.getElementById("form1").submit();
  }else{
    document.getElementById("time").innerHTML = minute +" min " + " : " + second+" second ";
  }
  timeLeft--;
  var tm = setTimeout(function(){timeout()},1000);
  }

</script>
  </head>
  <body onload="timeout()">