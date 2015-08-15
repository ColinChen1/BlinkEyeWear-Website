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
          <form>
            <div class="form-group" >
              <input type="text" class="form-control" id="usr" placeholder = "enter email">
              <button type="button" class="btn btn-primary btn-lg outline" id = "button1">Step Inside</button>
            </div>
          </form>
        </div>
      <div class="col-xs-4" ></div>
      </div>

      <script type="text/javascript">
        function changeOpacity(el1,el2){
          var elem1 = document.getElementById(el1);
          elem1.style.transition = "opacity 0.25s linear";
          elem1.style.opacity = 0.4;

          var elem2 = document.getElementById(el2);
          elem2.style.transition = "opacity 0.25s linear"
          elem2.style.opacity = 0.4;
        }

        function revertOpacity(el1,el2){
          var elem1 = document.getElementById(el1);
          elem1.style.transition = "opacity 0.25s linear";
          elem1.style.opacity = 1;

          var elem2 = document.getElementById(el2);
          elem2.style.transition = "opacity 0.25s linear"
          elem2.style.opacity = 1;
        }
      </script>
      <div class = "row">
        <div class="col-xs-4"></div>
        <div  class="col-xs-4 social">
            <form>
            <a href="https://www.facebook.com/blinkeyewear.co?fref=ts" target="_blank"><button onmouseover = "changeOpacity('emailButton','instaButton');" onmouseout = "revertOpacity('emailButton','instaButton')" type="button" class="btn btn-social facebook" id = 'facebookButton'></button></a>

            <a href = "mailto:hello@wearblink.com"><button onmouseover = "changeOpacity('facebookButton','instaButton');" onmouseout = "revertOpacity('facebookButton','instaButton')" type="button" class="btn btn-social email" id = 'emailButton' target="_blank"></button></a>

            <a href="https://instagram.com/wearblink/" target="_blank"><button onmouseover = "changeOpacity('facebookButton','emailButton');" onmouseout = "revertOpacity('facebookButton','emailButton')" type="button" class="btn btn-social instagram" id = "instaButton"></button></a>
          </form>
        </div> 
        <div class="col-xs-4"></div>
      </div>
    </div>
    


  
	
	
  </body>
</html>
