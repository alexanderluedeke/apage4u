<?php session_start(); $nav='about'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="apage4u. Die Internet-Plattform von Alexander Lüdeke." />
		<meta name="keywords" content="Alexander, Alex, Lüdeke, Lüdecke, Lüdekke, Lüddeke, music, web, design, programming, osnabrück, niedersachsen, berlin, <?php $nav ?>" />
		<title>apage4u - about</title>
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
					<h2>A little bit about what I do</h2>		        
				</header>
				
				<p>Hi, I'm Alexander Lüdeke from Berlin and I develop web and audio applications. My current job title is <a href="../programming/">java software developer</a>, which basically means I build the part of a website that connects the back and front end. I'm comfortable with working on projects from start to finish, all aspects of development in a complex environment.</p>
				
				<p>In my hometown Osnabrück I studied <a href="../science/systemScience.php">applied system science</a>, so I am experienced in analysis and modelling dynamic systems.</p>
				
				<p>But that is not all, I am concerned with <a href="../music/">digital audio production</a> – especially working with ableton live.</p>
				
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


