<?php session_start(); $nav='programming'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="apage4u. Die Internet-Plattform von Alexander Lüdeke." />
		<meta name="keywords" content="Alexander, Alex, Lüdeke, Lüdecke, Lüdekke, Lüddeke, music, web, design, programming, osnabrück, niedersachsen, berlin, <?php $nav ?>" />
		<title>apage4u - programming</title>
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
			<article lang="de">
			
				<header>
					<h2>All about artificial intelligence, server and audio programming</h2>		        
				</header>
				
				<p>
				  In recent years, I was busy as java developer with different topics. Here are a few results.
				</p>
				
				<ul>
				  <li>My diploma thesis about beat tracking with a <a href="beattracking.php">multi agent system</a>.</li>
				  <li>Example <a href="http://www.apage4u.de/programming/jboss/">database web application</a> for jBoss. See also my database system <a href="../downloads/programming/Datenbanksysteme.pdf" target="_datenbanksysteme">overview</a>. </li>
				  <li>Short introduction to <a href="http://www.apage4u.de/programming/jsp/">Java Server Pages and TagLib</a>.</li>
				  <li>A short guide through <a href="http://www.apage4u.de/programming/javasound/">JavaSound and MIDI</a>. </li>
				  <li>Research presentation about <a href="http://www.apage4u.de/programming/neuralnetworks/neuronet.html">neural networks</a>. <!--See also some of my <a href="../science/index.php#neuronalnetworks">diploma mind maps</a>.--> </li>
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


