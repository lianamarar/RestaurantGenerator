<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>What do you want to eat for dinner?- Heck Yes!</title>
</head>
<body>
	<div id="page-wrap">
		<form id="start-quiz" method="post" action="test.php">
            <div class="overlay index">
		        <div class="quiz-overlay"></div>
		        <h1 class="index-headline">What's for dinner!</h1>
		        <p class="index-sell">Need help deciding where to eat for dinner? This quiz will help you find just the right place!</p>
                <input type="submit" id="submit" class="take-quiz-btn index-btn redglow" value="Take The Quiz" />
            </div>                        
	    </form>
	    <?php
	   /**
            * Top part is just a button to go to the actual test page.
            * Below are sharing buttons for Facebook and Twitter. Change these to match your own details.
            * One thing that needs improvement: The background should be an embedded image, 
            * or there should be an Open Graph image assigned.
            * Otherwise, Twitter and Facebook share these button images,
            * as they are the only "images" they can access on the index page.
            */
            ?>
	 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-000000000-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>