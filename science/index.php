<?php session_start(); $nav='science'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="apage4u. Die Internet-Plattform von Alexander Lüdeke." />
		<meta name="keywords" content="Alexander, Alex, Lüdeke, Lüdecke, Lüdekke, Lüddeke, music, web, design, programming, osnabrück, niedersachsen, berlin, <?php $nav ?>" />
		<title>apage4u - science</title>
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
					<h2>System science and mathematics</h2>		        
				</header>

				<p>Theory and understanding are the keys for in-depth analysis and promising planning.</p>

                <ul>
                  <li>
                    A brief overview of <a href="systemScience.php">applied system science</a>: There are several definitions of “applied system science”. So let me show you, what does the term to my mind mean and how does those studies look like, because this study path is rather unusual.
                  </li>
                  <li>
                    Some mind maps about <a href="mathematics.php">numerical mathematics</a>. As part of my diploma preparation I created these maps. They relate to the standard work "Numerische Mathematik" by <I>Hans R. Schwarz</I> and <I>Jörg Waldvogel</I>. They could be helpful, if you are learning such stuff.
                  </li>
                  <li>
                    Research presentation about <a href="http://www.apage4u.de/programming/neuralnetworks/neuronet.html">neural networks</a>. <!--See also some of my <a href="../science/index.php#neuronalnetworks">diploma mind maps</a>.--> 
                  </li>
                  <li>
                    My diploma thesis about beat tracking with a <a href="../programming/beattracking.php">multi agent system</a>.
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


