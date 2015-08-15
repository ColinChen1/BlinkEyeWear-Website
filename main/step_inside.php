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

    <link rel="stylesheet" href="step_inside.css">
    
  </head>

  <body>

    <div class = "container">
      <div class = "spacing">
      </div>
      <div class = "row">
        <div class="col-md-4"></div>
        <div class="col-md-4" id = "paragraph">
          <h1> blink!</h1>
          <p>the power to create, the power to see</p>
        </div>
      </div>

       <div class = "spacing">
      </div>

      <div class = "row">
        <div class="col-md-4"></div>
        <div class="col-md-4" id = "Be_the_first">
          <p id = "first_to_know"> Be the First to Know </p>
        </div>
      </div>

      <div class = "row"> 
        <div class="col-xs-4" ></div>
        <div class="col-xs-4" id = "input">
          <form onsubmit = "checkEmail('usr');">
          <!-- <form action = "http://localhost/blinkeyewear-website/main/emailadded.php" method = "post"> -->
            
            <div class="form-group" >
              <input type="text"  name = "email_input" class="email_input focus" id="usr" placeholder = "enter email" value = "">
              <p></p>
              <input type="submit"  name = "submit_email" value = "Send" class="btn btn-primary btn-lg outline" >
              <p></p>
              <!-- <button type="button" class="btn btn-primary btn-lg outline" id = "button1">Step Inside</button> -->
            </div>
          </form>
          <!-- </form> -->
        </div>
      <div class="col-xs-4" ></div>
      </div>

      <script type="text/javascript">

        function checkEmail(el){
          var email = document.getElementById(el).value;
          if(!validateEmail(email))
          {
            alert("The email you entered is not correct");
          }
          else
          {
            window.location = "http://localhost/blinkeyewear-website/main/emailadded.php";

          }
        }
        function validateEmail(email) {
          var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
          return re.test(email);
        }
        function changeOpacity(el1,el2,el3){
          var elem1 = document.getElementById(el1);
          elem1.style.transition = "opacity 0.25s linear";
          elem1.style.opacity = 0.4;

          var elem2 = document.getElementById(el2);
          elem2.style.transition = "opacity 0.25s linear"
          elem2.style.opacity = 0.4;

          var elem3 = document.getElementById(el3);
          elem3.style.transition = "opacity 0.25s linear"
          elem3.style.opacity = 0.4;
        }

        function revertOpacity(el1,el2,el3){
          var elem1 = document.getElementById(el1);
          elem1.style.transition = "opacity 0.25s linear";
          elem1.style.opacity = 1;

          var elem2 = document.getElementById(el2);
          elem2.style.transition = "opacity 0.25s linear"
          elem2.style.opacity = 1;

          var elem3 = document.getElementById(el3);
          elem3.style.transition = "opacity 0.25s linear"
          elem3.style.opacity = 1;
        }
      </script>
      <div class = "row">
        <div class="col-xs-4"></div>
        <div  class="col-xs-4 social">
            <form>
            <a href="https://www.facebook.com/blinkeyewear.co?fref=ts" target="_blank"><button onmouseover = "changeOpacity('emailButton','instaButton', 'twitterButton');" onmouseout = "revertOpacity('emailButton','instaButton', 'twitterButton')" type="button" class="btn btn-social facebook" id = 'facebookButton'></button></a>
            <a href="" target="_blank"><button onmouseover = "changeOpacity('facebookButton', 'emailButton','instaButton');" onmouseout = "revertOpacity('facebookButton', 'emailButton','instaButton')" type="button" class="btn btn-social twitter" id = 'twitterButton'></button></a>
            <a href = "mailto:hello@wearblink.com"><button onmouseover = "changeOpacity('facebookButton','twitterButton', 'instaButton');" onmouseout = "revertOpacity('facebookButton','twitterButton','instaButton')" type="button" class="btn btn-social email" id = 'emailButton' target="_blank"></button></a>

            <a href="https://instagram.com/wearblink/" target="_blank"><button onmouseover = "changeOpacity('facebookButton','twitterButton','emailButton');" onmouseout = "revertOpacity('facebookButton','twitterButton','emailButton')" type="button" class="btn btn-social instagram" id = "instaButton"></button></a>
          </form>
        </div> 
        <div class="col-xs-4"></div>
      </div>
    </div>
    


  
	
	
  </body>
</html>
