<?php session_start(); $nav='music'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="apage4u. Die Internet-Plattform von Alexander Lüdeke." />
		<meta name="keywords" content="Alexander, Alex, Lüdeke, Lüdecke, Lüdekke, Lüddeke, music, web, design, programming, osnabrück, niedersachsen, berlin, <?php $nav ?>" />
		<title>apage4u - music</title>
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
			<article>
			
				<header>
					<h2>Music software, projects and javasound programming</h2>		        
				</header>
				<p>Meanwhile, the computer has become not only a virtual recording studio, but also a quite particular type of instrument.</p>
				
				<ul>
				  <li>Read my blog <a href="http://hearandknow.wordpress.com/">HearAndKnow</a> about digital audio production - especially working with ableton live or just follow me on <a href="http://twitter.com/hearandknow/">twitter</a></li>
				  <li>A multi agent system for synchronisation of man and machine: <a href="../programming/beattracking.php">my diploma thesis</a> about beat tracking</li>
				  <li>A short guide through <a href="http://www.apage4u.de/programming/javasound/">JavaSound and MIDI</a></li>
				  <li>My old music <a href="projects.php">projects and bands</a>. Hope, you'll enjoy.</li>     
				  <li>Finally a magazine article about <a href="counterculture.php" class="german">counterculture</a>. Sorry, this article is available in german only. </li>
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


