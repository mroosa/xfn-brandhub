<?php
  $bodyClassList = ['login','dark'];
  $dir = "";
  $dest = isset($_GET['d']) ? $_GET['d'] : "index.php";
  $styleList = ['new-login.css'];
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>

<div id="bgvid">
  <video playsinline autoplay loop muted nocontrols>
    <source src="video/color-blend.mp4" type="video/mp4">
  </video>
</div>
  <main style="background: none;">
    <div id="login" class="reveal">
      <section class="login-wrap" data-bg="black">
        <h1>Welcome to the<br>Xfinity Brand Hub</h1>
        <form id="login-form" method="post" onsubmit="submitLogin();">
          <label for="txt_uname">Username</label>
          <input tabindex="1" type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
          <label for="txt_pwd">Password</label>
          <input tabindex="2" type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password" />
          <div id="message">&nbsp;</div>
          <a tabindex="3" id="btn_submit" class="button" href="#"><span>Get Started</span></a>
          <input type="submit" style="display: none" value="Get Started" />
          <p class="help">Need help logging in? Contact the <a href="#" style="color: #fff;">Xfinity Brand Team</a>.</p>
        </form>
      </section>
    </div>
    <div class="logo">
      <svg x="0px" y="0px" viewBox="0 -35 107.3 150" width="100%" style="fill: #fff;">
        <g>
          <path d="M51.2,38.6L79.9,0h-12c-5.4,0-8.8,1.9-11.7,5.7L41.1,26.1L26.4,5.7C23.5,1.9,20.1,0,14.7,0h-12l28.4,38.6L0,80.6h11.4
        c5.4,0,8.8-1.9,11.7-5.7l18-23.9l42.2,58.3c2.7,3.8,6.3,5.7,11.7,5.7h12.3L51.2,38.6z" />
        </g>
      </svg>
    </div>
    <!-- <div class="bg-img"></div> -->
<!--    <div class="vid-wrap">
      <div class="frost"></div>
      <video id="login-intro" playsinline autoplay muted nocontrols>
        <source src="video/login-intro-glow.mp4" type="video/mp4">
      </video>
    </div>-->
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

              window.location = "<?php print $dest; ?>";
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
