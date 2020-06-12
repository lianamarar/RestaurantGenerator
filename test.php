<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
		<form action="example.php" method="post">
			<h1>Enter a price range in dollar signs: $ = Under $10;  $$ = $11-$30; $$$ = $31+</h1>
			Price: <input type="text" name="price" /><br><br>
			<h1>Enter a preferred cusine: American, Italian, Chinese, Indian, Mexican, or Mediterranean</h1>
			Cuisine: <input type="text" name="cusine" /><br><br>
			<h1>Enter a preferred dining syle: Dine In or Take Out</h1>
			Dining: <input type="text" name="dining" /><br><br>
			

 

<input type="submit" />

</form>
<!--    <script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){ 
                    $mt = $mt - 430;
                    $("#test-questions").css("margin-top", $mt); 
                }, 333);
              });
           }(jQuery))
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-00000000-1', 'auto');
  ga('send', 'pageview');
</script>-->
</body>
</html>