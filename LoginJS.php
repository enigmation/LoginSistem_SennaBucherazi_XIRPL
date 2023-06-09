<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rayya JS</title>
    <link rel="stylesheet" href="CSS/LoginJS.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<body>
<div id="container">
  <div id="left">
    <h1 id="welcome">Welcome</h1>
    <p id="lorem">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
      Vivamus sodales eros non arcu pellentesque convallis.<br>
      Nunc dignissim lectus in malesuada porta.<br>
      Proin ac erat sed urna congue suscipit.<br>
      Morbi aliquet eget nisl id ornare.
    </p>
  </div>
  <div id="right">
    <h1 id="login">LogIn</h1><br>
    <form action="" onsubmit="validateCaptcha()"></form>
    <input type="email" id="email" class="client-info">
    <label for="email">Email</label>
    <input type="password" id="password" class="client-info">
    <label for="password">Password</label>
    <input type="submit" id="submit" class="client-info" value="Submit">
    <button class="social" id="facebook">connect with facebook</button>
    <button class="social" id="google">connect with google</button>\
    </form>
  </div>
</div>

<script src="JS/Script.js"></script>
</body>
</html>