<?php session_start(); $nav='homepage'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="apage4u. Die Internet-Plattform von Alexander Lüdeke." />
		<meta name="keywords" content="Alexander, Alex, Lüdeke, Lüdecke, Lüdekke, Lüddeke, music, web, design, programming, osnabrück, niedersachsen, berlin" />
		<title>apage4u - programming, science and music</title>
		<link rel="stylesheet" title="Standard" type="text/css" href="css/layout.css" media="all" />
		<link  href="//fonts.googleapis.com/css?family=Arvo:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css" />
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body id="apage4u" class="<?php $nav ?>">
		<div class="page">
			<header>
			    <h1><a href="/" title="Homepage"><span class="a">A</span><span class="page">Page</span><span class="you">4You</span></a></h1>
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/incl/nav_main.php'); ?>
			</header>
			<article>
			
				<header>
					<h2>The time has come</h2>		        
				</header>
				
				<p>
				    Redesigning a website is a big job - needless to say - and should be handled with care. Nevertheless I decided to migrate this site to HTML5 and to reorganise its structure. Today I am glad to be able to say that the task is nearly finished.
				</p>
					
				<p><time datetime="2011-05-15T13:58Z">Berlin, 15.05.2011 </time></p>
					
				<p>Alexander Lüdeke (Dipl. Systemwissenschaftler)</p>
			
			</article>
			<script type="text/javascript" src="js/apage4u.js"></script>
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


