<?php
  $bodyClassList = ['login','dark'];
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>

  <main>
    <div id="login">
      <section class="login-wrap" data-bg="black">
        <h1>Welcome to the<br>Xfinity Brand Hub</h1>
        <form method="post" onsubmit="submitLogin()">
          <label for="txt_uname">Username</label>
          <input tabindex="1" type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
          <label for="txt_pwd">Password</label>
          <input tabindex="2" type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
          <div id="message">&nbsp;</div>
          <a tabindex="3" id="btn_submit" class="button" href="#">Get Started</a>
          <input type="submit" style="display: none" value="Get Started" />
        </form>
      </div>
    </section>
    <div class="vid-wrap">
      <div class="frost"></div>
      <video id="login-intro" autoplay muted nocontrols>
        <source src="video/login-intro-glow.mp4" type="video/mp4">
      </video>
    </div>
  </main>

  <script type="text/javascript">
    function checkInputs() {
      $("input").length > 0;
    }

    function submitLogin() {
      var username = $("#txt_uname").val().trim();
      var password = $("#txt_pwd").val().trim();

      if( username != "" && password != "" ){
        $.ajax({
          url:'_templates/_db/checkUser.php',
          type:'post',
          data:{username:username,password:password},
          success:function(response){
            var msg = "&nbsp;";
            if (response == 1) {
              window.location = "index.php";
            }else{
              msg = "Invalid username and password!";
            }
            $("#message").addClass("active").html(msg);
            setTimeout(function() {
              $("#message").removeClass("active");
            }, 2000);
          }
        });
      }

      return false;
    }

    $(document).ready(function(){

      // hide form
      $("h1, label, input, #btn_submit").css({"opacity":"0"});

      // Function to start login animation
      function showLogin() {
        $("#login").addClass("reveal");
      }
      setTimeout(function() {
        showLogin();
      }, 1000);

      // Define videos
      var loginIntroVid = document.getElementById('login-intro');
      // Listen for end of first video
      loginIntroVid.addEventListener('ended',function() {
        showLogin();
      }, false);

      // Check status on input change to show button
      // $("input").on("change keyup paste", function() {
      //   console.log(checkInputs());
      //   if (checkInputs()) {
      //     $("btn_submit").removeClass("disabled");
      //   }
      // });
      //
      // $("#btn_submit").addClass("disabled");
      $("#btn_submit").click(function(){
        submitLogin();
        return false;
      });

    });
  </script>

<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
