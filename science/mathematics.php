<?php session_start(); $nav='science'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="apage4u. Die Internet-Plattform von Alexander Lüdeke." />
		<meta name="keywords" content="Alexander, Alex, Lüdeke, Lüdecke, Lüdekke, Lüddeke, music, web, design, programming, osnabrück, niedersachsen, berlin, <?php $nav ?>" />
		<title>apage4u - mathematics</title>
		<link rel="stylesheet" title="Standard" type="text/css" href="/css/layout.css" media="all" />
		<link  href="//fonts.googleapis.com/css?family=Arvo:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css" />
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript" src="/js/apage4u.js"></script>
	</head>
	<body id="apage4u" class="<?php $nav ?>">
		<div class="page">
			<header>
			    <h1><a href="/" title="Homepage"><span class="a">A</span><span class="page">Page</span><span class="you">4You</span></a></h1>
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/incl/nav_main.php'); ?>
			</header>
			<article class="has-nav">
				<header>
					<h2>Mathematics</h2>		        
				</header>

				<p>Here are some mind maps about numerical mathematics. As part of my diploma preparation I created these maps several years ago. They relate to the standard work "Numerische Mathematik" by <I>Hans R. Schwarz</I> and <I>Jörg Waldvogel</I>. They could be helpful, if you are learning such stuff.</p>
				
				<ul>
				  <li>
				  	<a href="http://www.apage4u.de/downloads/science/LineareGS.pdf">
				        lineare Gleichungssysteme 
				    </a>
				  </li>
				  <li>
				  	<a href="http://www.apage4u.de/downloads/science/NichtLineareGS.pdf">
				        nicht-lineare Gleichungssysteme
				    </a>
				  </li>				
				  <li>
				  	<a href="http://www.apage4u.de/downloads/science/Interpolation.pdf">
				        Interpolations-Verfahren
				    </a>
				  </li>
				  <li>
				  	<a href="http://www.apage4u.de/downloads/science/Eigenwerte.pdf">
				        Eigenwert-Berechnung
				    </a>
				  </li>
				  <li>
				  	<a href="http://www.apage4u.de/downloads/science/Gewoehnliche.pdf">
				        gewöhnliche Differentialgleichungen 
				    </a>
				  </li>
				</ul>
   
			</article>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/incl/footer.php'); ?>
		</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11922467-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</body>
</html>


