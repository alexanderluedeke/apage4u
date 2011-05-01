			<footer>
				<aside> <div id="hak-results"></div> <div id="twitter-results"></div> <div id="del-results"></div></aside>
				© Copyright 2006-<?php echo date('Y'); ?> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="/impressum.php">Disclaimer</a>
				<script type="text/javascript" src="http://query.yahooapis.com/v1/public/yql?q=select%20title%2C%20link%2C%20description%20from%20rss%20where%20url%3D%22http%3A%2F%2Fhearandknow.wordpress.com%2Ffeed%2F%22%20limit%203&amp;format=json&amp;diagnostics=true&amp;callback=hak"></script>
				<script type="text/javascript" src="http://query.yahooapis.com/v1/public/yql?q=select%20title%2C%20link%20from%20rss%20where%20url%3D%22https%3A%2F%2Ftwitter.com%2Fstatuses%2Fuser_timeline%2F140541482.rss%22%20limit%207&amp;format=json&amp;diagnostics=true&amp;callback=twitter"></script>
				<script type="text/javascript" src="http://query.yahooapis.com/v1/public/yql?q=select%20title%2C%20link%2C%20description%20from%20rss%20where%20url%3D%22http%3A%2F%2Ffeeds.feedburner.com%2Fapage4u%2Ffavorites%22%20limit%202&amp;format=json&amp;diagnostics=true&amp;callback=del"></script>
			</footer>