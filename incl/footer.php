			<footer>
				<aside>
				    <div id="hak-results" width="300px;">&nbsp;</div>
				    <div id="pin-results" width="300px;">&nbsp;</div>
	    
            <?php if ($nav=='music') { ?>
		    		    <div id="twitter-results">
				        </div>
				    <?php }; ?>
				    <?php if ($nav=='programming' || $nav=='science' || $nav=='homepage' || $nav=='about') { ?>
		    		    <div id="twitter-results">
				        </div>
				    <?php }; ?>
				</aside>
				
				<aside>
            <?php if ($nav=='music') { ?>
				        <div id="twitter">
			    	        <a href="http://twitter.com/hearandknow">
				                <img src="/img/twitter_button.png" width="143" height="73" style="border: 0px" alt="What am I doing. Follow me on twitter." name"What am I doing. Follow me on twitter.">
				            </a>
				        </div>
				    <?php }; ?>
				    <?php if ($nav=='programming' || $nav=='science' || $nav=='homepage' || $nav=='about') { ?>
				        <div id="twitter">
			    	        <a href="http://twitter.com/alexanderldk">
				                <img src="/img/twitter_button.png" width="143" height="73" style="border: 0px" alt="What am I doing. Follow me on twitter." name"What am I doing. Follow me on twitter.">
				            </a>
				        </div>
				    <?php }; ?>
				</aside>

				© Copyright <?php echo date('Y'); ?> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="/impressum.php">Disclaimer</a>

				<?php if ($nav=='music') { ?>
					<script type="text/javascript" src="http://query.yahooapis.com/v1/public/yql?q=select%20title%2C%20link%2C%20description%20from%20rss%20where%20url%3D%22http%3A%2F%2Fhearandknow.wordpress.com%2Ffeed%2F%22%20limit%203&amp;format=json&amp;diagnostics=true&amp;callback=hak"></script>
					<script type="text/javascript" src="http://query.yahooapis.com/v1/public/yql?q=select%20title%2C%20link%2C%20description%20from%20rss%20where%20url%3D%22http%3A%2F%2Ffeeds.feedburner.com%2Fapage4u%2Ffavorites%22%20limit%202&amp;format=json&amp;diagnostics=true&amp;callback=pin"></script>
          <script type="text/javascript" src="http://query.yahooapis.com/v1/public/yql?q=select%20title%2C%20link%2C%20description%20from%20rss%20where%20url%3D%22https%3A%2F%2Ftwitrss.me%2Ftwitter_user_to_rss%2F%3Fuser%3Dhearandknow%22%20limit%204&amp;format=json&amp;callback=twitter"></script>
				<?php }; ?>
				<?php if ($nav=='programming' || $nav=='science' || $nav=='homepage' || $nav=='about') { ?>
					<script type="text/javascript" src="http://query.yahooapis.com/v1/public/yql?q=select%20title%2C%20link%2C%20description%20from%20rss%20where%20url%3D%22http%3A%2F%2Fhearandknow.wordpress.com%2Ffeed%2F%22%20limit%203&amp;format=json&amp;diagnostics=true&amp;callback=hak"></script>
          <script type="text/javascript" src="http://query.yahooapis.com/v1/public/yql?q=select%20title%2C%20link%2C%20description%20from%20rss%20where%20url%3D%22http%3A%2F%2Ffeeds.feedburner.com%2Fapage4u%2Fdevelopment%2Ffavorites%22%20limit%202&amp;format=json&amp;diagnostics=true&amp;callback=pin"></script>
          <script type="text/javascript" src="http://query.yahooapis.com/v1/public/yql?q=select%20title%2C%20link%2C%20description%20from%20rss%20where%20url%3D%22https%3A%2F%2Ftwitrss.me%2Ftwitter_user_to_rss%2F%3Fuser%3Dalexanderldk%22%20limit%204&amp;format=json&amp;callback=twitter"></script>
				<?php }; ?>
			</footer>