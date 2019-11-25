<?php
  $bodyClassList = ['login'];
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>

  <main>
    <div id="login">
      <div class="login-wrap">
        <h1 class="ah">Login</h1>
          <label for="txt_uname">Username</label>
          <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
          <label for="txt_pwd">Password</label>
          <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
          <div id="message">&nbsp;</div>
          <a id="btn_submit" class="button" href="#">Start Exploring</a>
          <input type="submit" style="display: none" />
      </div>
    </div>
    <div id="login-video">
      <div class="vid-wrap">
        <video id="login-intro" autoplay muted nocontrols>
          <source src="video/login-intro.mp4" type="video/mp4">
        </video>
        <video id="login-loop" muted nocontrols loop>
          <source src="video/login-loop.mp4" type="video/mp4">
        </video>
      </div>
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
            if(response == 1){
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
    }

    $(document).ready(function(){

      // hide form
      $("label, input, #btn_submit").css({"opacity":"0"});
      $("#login-video").css({"transform":"translateX(-50%)"});

      // Function to start login animation
      function showLogin() {
        $("#login").addClass("reveal");
        $("#login-video").addClass("slide");
      }

      // Function show/start looping video
      function startLoop(loopVid) {
        $(loopVid).get(0).play();
        $(loopVid).css({'opacity':'1'});
      }

      // Define videos
      var loginIntroVid = document.getElementById('login-intro');
      var loginLoopVid = document.getElementById('login-loop');
      // Listen for end of first video
      loginIntroVid.addEventListener('ended',function() {
        startLoop(loginLoopVid);
        showLogin();
      }, false);

      // if (newTab.find("video").length > 0) {
      //   newTab.find("video").get(0).currentTime = 0;
      //   newTab.find("video").get(0).play();
      // } else {
      //   // Pause all other videos
      //   $("video").get(0).pause();
      // }


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
