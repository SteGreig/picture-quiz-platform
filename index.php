<?php include('includes/vars.php'); ?>
<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta property="og:url" content="http://www.cargiant.co.uk/content/cargiant-movie-and-tv-quiz/" />
    <meta property="og:title" content="Cargiant's Movie & TV Quiz!" />
    <meta property="og:description" content="How much do you know about iconic cars? Take Cargiant's Ultimate Movie & TV Quiz and test your knowledge on the nation's favourite big screen automobiles!" />
    <meta property="og:image" content="http://www.cargiant.co.uk/content/cargiant-movie-and-tv-quiz/images/fb-share-img.png" />

	<title><?php if($pageTitle != "") { echo $pageTitle; } else { echo $quizTitle." | ".$clientName; } ?></title>
	<meta name="description" content="<?php echo $metaDesc; ?>">
	<meta name="author" content="<?php echo $clientName; ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/style.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>

	<!--[if lt IE 9]>
	<script src="js/html5-enabler.js"></script>
	<![endif]-->

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=194500557289809";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div class="header-wrap wrap">
		<header>
			<img class="logo" src="images/logo.jpg" alt="<?php echo $clientName; ?> Logo">
			<div class="social">
				<div class="gp"><div class="g-plusone"></div></div>
				<a class="twitter-share-button" href="https://twitter.com/share" data-counturl="http://www.cargiant.co.uk/content/cargiant-movie-and-tv-quiz" data-text="How much do you know about cars? Test your motoring knowledge with Cargiant's Movie & TV Car Quiz! #CargiantQuiz" data-url="http://goo.gl/dnvSpq">Tweet</a>
				<script>
				window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
				</script><br>
				<div class="fb-like" data-href="http://www.cargiant.co.uk/content/cargiant-movie-and-tv-quiz" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
			</div>
			<div class="embed">
				<p>Embed &lt;/&gt;</p>
				<textarea>&lt;iframe src=&quot;http://www.cargiant.co.uk/content/cargiant-movie-and-tv-quiz/&quot; name=&quot;cargiant-quiz&quot; scrolling=&quot;auto&quot; frameborder=&quot;no&quot; align=&quot;center&quot; height = &quot;400px&quot; width = &quot;700px&quot;&gt; &lt;/iframe&gt;</textarea>
			</div>
		</header>
	</div>

	<div class="main-wrap wrap">
		<section class="main">

			<div class="intro">
				<?php echo $intro; ?>
			</div>


			<?php
				// PICTURE QUIZ
				if($quizType == "pics" || $quizType == "pics2"):
			?>

			<article class="quiz-pics">

				<?php
					if($quizType == 'pics2') { $total = $totalQs/2; }
					elseif($quizType == 'pics') { $total = $totalQs; }
					for($n=1; $n<=$total; $n++):
				?>
				<figure>
					<p class="num"><?php echo $n; ?></p>
					<img src="images/qs/<?php echo $n; ?>.jpg" alt="<?php echo $quizTitle; ?> Image <?php echo $n; ?>">
					<fieldset>
						<div class="almost">Almost!</div>
						<div class="almost-specific">Almost! Be a bit more specific...</div>
						<input class="q<?php if($quizType == "pics2") { echo $n * 2 - 1; } else { echo $n; } ?>" type="text" placeholder="<?php if($placeholder != "") { echo $placeholder; } else { echo "Answer"; } ?>">
						<?php if($quizType == "pics2"): ?>
						<input class="q<?php echo $n * 2; ?>" type="text" placeholder="<?php if($placeholder2 != "") { echo $placeholder2; } else { echo "Answer"; } ?>">
						<?php endif; ?>
					</fieldset>
				</figure>
				<?php endfor; ?>

			</article>


			<?php
				// TEXT/TRIVIA QUIZ
				elseif($quizType == "text"):
			?>

			<ol class="quiz-text">

				<?php for($n=1; $n<=$totalQs; $n++): ?>
				<li>
					<p class="num"><?php echo $n; ?></p>
					<p class="q"><?php echo $qs[$n-1]; ?></p>
					<fieldset>
						<input class="q<?php echo $n; ?>" type="text" placeholder="<?php if($placeholder != "") { echo $placeholder; } else { echo "Answer"; } ?>">
					</fieldset>
				</li>
				<?php endfor; ?>

			</ol>

			<?php endif; ?>
		</section>
	</div>

	<div class="footer-wrap wrap">
		<footer>
			<ul class="lights <?php if($totalQs > 16) { echo "hide"; } ?>">
				<li class="n"></li>
				<?php 
					$lis = $totalQs - 1;
					echo str_repeat('<li></li>', $lis);
				?>
			</ul>
			<div class="score">
				<p class="nums">
					<span class="live-score">0</span><span class="total">/<?php echo $totalQs; ?></span>
				</p>
				<p class="txt"><span>Submit</span> Score</p>
			</div>
		</footer>
	</div>

	<div class="score-overlay wrap">
		<section>
			<img class="close" src="images/close.png" alt="Close">
			<p><span class="completed"></span> <span class="sub-msg">Your current score is</span></p>
			<p class="score"><span class="live-score">0</span>/<?php echo $totalQs; ?></p>
			<p>Like, Tweet or +1 to submit your score and have the chance to win a great prize</p>
			<div class="social">
				<div class="fb-like" data-href="http://www.cargiant.co.uk/content/cargiant-movie-and-tv-quiz" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div><br>
				<a href="https://twitter.com/share" id="tweet" class="twitter-share-button tweet" data-text="How much do you know about cars? Test your motoring knowledge with Cargiant's Movie & TV Car Quiz! #CargiantQuiz" data-url="http://goo.gl/dnvSpq">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				<div class="gp"><div class="g-plusone"></div></div>
			</div>
		</section>
	</div>

	<script type="text/javascript">
	  window.___gcfg = {lang: 'en-GB'};

	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
	<script type="text/javascript">
		var totalQs='<?php echo $totalQs; ?>';
		var type='<?php echo $quizType; ?>';
	</script>
	<script src="js/answers.js"></script>
	<script src="js/site.js"></script>
</body>
</html>