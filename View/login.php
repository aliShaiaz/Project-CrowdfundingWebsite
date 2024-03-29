<?php

function VIEW_login()
{
?>
  <html>

  <head>
    <title>Signin Page</title>
    <script>
      function empty() {
        var x;

        // Username Check
        x = document.getElementById("username").value;
        if (x == "") {
          alert("Enter a Valid Username.");
          return false;
        }

        // Password Check
        pass = document.getElementById("password").value;
        if (pass == "") {
          alert("Please enter your Password!");
          return false;
        }
      }

      window.onload = function() {
        document.querySelector('body').classList.toggle('visible');
      };
    </script>
    <link rel="stylesheet" href="Asset/CSS/style.css">
    <link rel="stylesheet" href="Asset/CSS/login.css">
  </head>


  <body>
    <div class="box">
      <fieldset>
        <legend>Signin</legend>
        <form method="post" action="redirect.php?loginSubmit" enctype="">
          <table>
            <tr>
              <td>Username:</td>
              <td>
                <input class="inpTxt" id="username" type="text" name="username" value="" />
              </td>
            </tr>
            <tr>
              <td>Password:</td>
              <td>
                <input class="inpTxt" id="password" type="password" name="password" value="" />
              </td>
            </tr>
            <tr>
              <td colspan="2" align="center">
                <input class="btn" type="submit" name="" onclick="return empty()" />
                <input class="btn" type="button" onclick="location.href = 'redirect.php?index';" value="Index" />
              </td>
            </tr>
          </table>

          <!-- <input type="hidden" name="controlKey" value="loginSubmit" /> -->
        </form>
        <hr id="bar" />

        <div id="dialogueDiv">
          <p id="dialogue">Forgot Username or Password?</p> <br />
          <button id="recoverBtn" class="btn" onclick="location.href='redirect.php?recover'">Recover ID</button>
        </div>
      </fieldset>
    </div>
  </body>
  <script>
    window.onload = function() {
      document.querySelector('body').classList.toggle('visible');
    };
  </script>

  </html>

<?php
}
