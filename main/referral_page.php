<!DOCTYPE html>
<html>
  <title> blink eyewear</title>
  <head>
   <link href="bootstrap.min.css" rel="stylesheet">
   <link href="font-awesome.min.css" rel="stylesheet">
   <link href="bootstrap-social.css" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="referral_page.css">
    
  </head>

  <body>
    <div class = "containe-fluid">
      <div id = "header">
        <h id = "company"> blink! Eyewear</h>
        <!-- <h Id = "thanks"> Thank you for signing up </h> -->
      </div>

      <div class = "row">
        <div class = "col-xs-12 middle" id = "with_background">
          <div id = "input_box">
            <div id = "invite_friends">
            <h> Invite Friends & </h> 
            <p> Earn Free Products </p>
            </div>
            <div id = "share">
              <p> Share your unique link via email, Facebook</p>
              <p>or Twitter and earn free Blink Eyewear goods for </p>
              <p> each friend who signs up. </p>
            </div>
            <div id = "input">
              <input type="text"  name = "email_input" class="email_input focus" id="usr" placeholder = "" value = "">
            </div>
          </div>  
        </div>
      </div>

      <div id = "thin_line">
      </div>

      

      <div id = "meter">

        <div class = "row">
          <div class = "col-xs-12" id = "thank_you">
            <h id = "thanks"> Thank You for Signing Up! </h>
          </div>
        </div>
        
        <div class = "row" id = "progress_header_total">
          
          <div class = "col-xs-2" id = "progress_marker"> <p id = "progress_header"> start </p> </div>
          <div class = "col-xs-2" id = "progress_marker"> <p id = "progress_header" onclick = "changeProgress(25)"> reward 1</p></div>
          <div class = "col-xs-2" id = "progress_marker"> <p id = "progress_header" onclick = "changeProgress(50)"> reward 2 </p></div>
          <div class = "col-xs-2" id = "progress_marker"> <p id = "progress_header" onclick = "changeProgress(75)"> reward 3 </p></div>
          <div class = "col-xs-2" id = "progress_marker"> <p id = "progress_header" onclick = "changeProgress(100)"> reward 4 </p></div>
          <div class = "col-xs-2" id = "progress_marker"> <p id = "progress_header">  </p> </div>

        </div>

        <div class="progress"   >
          <div class="progress-bar progress-bar-striped active" id = "progressbar" role="progressbar"
          aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" >
          <p id = "progress-percent"> 0% </p>
        </div>
      </div>


      </div>

    </div>
    <script type="text/javascript">
      function changeProgress(percent) {
        document.getElementById("progress-percent").innerHTML = percent.toString() + "%";
        document.getElementById("progressbar").style.width = percent.toString() + "%";
        document.getElementById("progressbar").attr("aria-valuenow", percent.toString());
        
      }
      

    </script>

  </body>

</html>
