<?php session_start(); $nav='homepage'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="apage4u. Die Internet-Plattform von Alexander Lüdeke." />
		<meta name="keywords" content="Alexander, Alex, Lüdeke, Lüdecke, Lüdekke, Lüddeke, music, web, design, programming, osnabrück, niedersachsen, berlin" />
		<title>apage4u - contact</title>
		<link rel="stylesheet" title="Standard" type="text/css" href="/css/layout.css" media="all" />
		<link  href="//fonts.googleapis.com/css?family=Arvo:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css" />
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript" src="/js/apage4u.js"></script>
<?php
	$_SESSION['errors'] = array();
	// function to print errormessages, if necessary:
	function errmsg($msg) {
		if ($msg != "") {
		    ?>
<em class="error"><?php print($msg) ?></em>
<?php
        }
	}

	// check field is not empty:
	function validate_textfeld($val) {
   		$msg = "";
   		if ($val == "") {
			$msg = 'No no, ';
		}
   		return $msg;
	}
	// encode html characters to entities
	function cleanUp($data) {
		$data = trim(strip_tags(htmlspecialchars($data)));
		return $data;
	} 
	// check e-mail:
	function validate_email($val) {
   		$msg ="";
		$validation = filter_var($val, FILTER_VALIDATE_EMAIL);

		if ( $validation ) $msg = "";
		else $msg .= 'this is not a valid e-mail address, ';

		return $msg;
	}
	
	// js reads this and puts the cursor there:
	$focusfield = 'name';
	
	// for required fields: Validate and keep result (reversed order), change focusfield
	$valid = true;
	
	if (isset($_POST['message'])) {
		$_POST['message'] = cleanUp($_POST['message']);
   		$_SESSION['errors']['message'] = validate_textfeld($_POST['message']);
   		if ($_SESSION['errors']['message'] != '') {
   			$_SESSION['errors']['message'] .= 'You gotta have something to say.';
      		$valid = false;
      		$focusfield = 'message';
      	}
	}
	
	if (isset($_POST['mail'])) {
   		$_POST['mail'] = cleanUp($_POST['mail']);
   		$_SESSION['errors']['mail'] = validate_email($_POST['mail']);
   		if ($_SESSION['errors']['mail'] != '') {
   			$_SESSION['errors']['mail'] .= 'Please enter your e-mail address.';
      		$valid = false;
      		$focusfield = 'mail';
      	}
	}
	
	if (isset($_POST['name'])) {
		$_POST['name'] = cleanUp($_POST['name']);
   		$_SESSION['errors']['name'] = validate_textfeld($_POST['name']);
   		if ($_SESSION['errors']['name'] != '') {
   			$_SESSION['errors']['name'] .= 'Please enter your name.';
      		$valid = false;
      		$focusfield = 'name';
      	}
	}
	
	if ($valid == false) {
		?>
<title>Missing element: apage4u... contact details</title>
<?php
	}
	else {
?>
<title>apage4u... contact details</title>
<?php
	}
	 ?>
<link rel="stylesheet" title="Standard" type="text/css" href="/css/layout.css" media="all" />
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
					<h2>apage4u contact</h2>		        
				</header>

		<?php
			if ($valid and isset($_POST['submit'])) {
				unset($valid);
				foreach ($_SESSION['errors'] as $key => $value) {
					unset($_SESSION['errors'][$key]);
				}
				$to = 'homepage.con'.'tact.form@apa'.'ge4u.de';
				$subject = 'Contactform on http://www.apage4u.de';
				$message = 'You got a message:'. "\n\n" .
							$_POST['message'] . "\n\n" .
							'Who sent this?'. "\n" .
							'Name: ' . $_POST['name'] . "\n" .
							'E-mail address: ' . $_POST['mail'] . "\n" .
							'Internet: ' . $_POST['web'] . "\n" . "\n\n" .
							'-----------------------------------------------' . "\n" . 
							'This is a generated email,' . "\n" .
							'please do not reply. You know it\'s all made up.' . "\n" . 
							'-----------------------------------------------';
                $header = 'From: Contactform on e ' . '<e>' . "\r\n" .
							'MIME-Version: 1.0' . "\r\n" .
							'Content-type: text/plain; charset=utf-8' . "\r\n";
				mail($to, $subject, $message, $header, "-f ".$to);
        ?>
		<p>Thank you very much for your message. I will answer you as fast as possible.</p>
		<?php 
	}
	else { 	
?>
		<p>In order to contact me, please fill out the form below.</p>
		<form action="<?php print($_SERVER['PHP_SELF'])?>" method="post" id="contact">
			<p>Required fields are marked with an asterisk (*)</p>
			<fieldset>
				<p><?php print(errmsg($_SESSION['errors']['name']) . "\n"); ?>
				
				<label for="name">Name: *</label>
				<input type="text" id="name" name="name" value="<?php print($_POST['name']); ?>" title="Name" />
				</p>
				<p><?php print(errmsg($_SESSION['errors']['mail']) . "\n"); ?>
				<label for="mail">E-mail: *</label>
				<input type="text" id="mail" name="mail" value="<?php print($_POST['mail']); ?>" title="e-mail" />
				</p>
				<p>
				<label for="web">Homepage: </label>
				<input type="text" id="web" name="web" value="<?php print($_POST['web']); ?>" title="Homepage" />
				</p>
				<p>
				<?php print(errmsg($_SESSION['errors']['message']) . "\n"); ?>
				<label for="message">Message: *</label>
				<textarea id="message" name="message" rows="8" cols="25" title="Your Message"><?php print($_POST['message']); ?></textarea>
				</p>
				<input type="submit" value="Send" id="submit" name="submit" title="Send this message" />
			</fieldset>
			<?php    
            if ($focusfield != "") {
                // Focus auf das erste fehlende Feld setzen: 
                echo ' 
                <script type="text/javascript"> 
                	document.forms[1].'. $focusfield. '.focus(); 
                </script> 
                ';
            }    
        ?>
		</form>
		<?php 
		}
		?>
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


