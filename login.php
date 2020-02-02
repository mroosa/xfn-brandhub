<?php
  $bodyClassList = ['login','dark'];
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>

  <main>
    <div id="login" class="reveal">
      <section class="login-wrap" data-bg="black">
        <h1>Welcome to the<br>Xfinity Brand Hub</h1>
        <form id="login-form" method="post" onsubmit="submitLogin();">
          <label for="txt_uname">Username</label>
          <input tabindex="1" type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
          <label for="txt_pwd">Password</label>
          <input tabindex="2" type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
          <div id="message">&nbsp;</div>
          <a tabindex="3" id="btn_submit" class="button" href="#"><span>Get Started</span></a>
          <input type="submit" style="display: none" value="Get Started" />
          <p class="help">Need help logging in? Contact the Xfinity Brand team.</p>
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
      $("h1, label, input, #btn_submit, .help").css({"opacity":"0"});

      // Submit form via hidden button (using enter)
      $("#login-form").on('submit',function(e) {
        e.preventDefault();
        e.returnValue = false;

        submitLogin();
      });

      // Submit button on button click
      $("#btn_submit").click(function(){
        submitLogin();
        return false;
      });

    });
  </script>

<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
