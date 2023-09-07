<!DOCTYPE html>
<html>
<head>
  <title>My Website Coming Soon</title>
  <link rel="stylesheet" href="styles.css"> 
</head>

<body>

  <h1>My Website Coming Soon</h1>

  <div id="countdown">
    <div>
      <span id="days_label">Days</span>
      <span id="days"></span>
    </div>

    <div>
      <span id="hours_label">Hours</span>  
      <span id="hours"></span>
    </div>

    <div>
      <span id="minutes_label">Minutes</span>
      <span id="minutes"></span>
    </div>

    <div>
      <span id="seconds_label">Seconds</span>
      <span id="seconds"></span> 
    </div>
  </div>
  
  <form id="subscribe">
    <input type="email" placeholder="Your Email">
    <button type="submit">Subscribe</button>
  </form>

  <script>
    var countdownStartDate = localStorage.getItem("countdownStartDate");
    var countDownDate;

    if (countdownStartDate) {
      countDownDate = parseInt(countdownStartDate);
    } else {
      var currentDate = new Date();
      currentDate.setMonth(currentDate.getMonth() + 3);
      countDownDate = currentDate.getTime();
      localStorage.setItem("countdownStartDate", countDownDate.toString());
    }

    var x = setInterval(function() {
      var now = new Date().getTime();  
      var distance = countDownDate - now;

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("days").innerHTML = days; 
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;
      
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "Expired";
      }
    }, 1000);

  </script>

</body>
</html>
