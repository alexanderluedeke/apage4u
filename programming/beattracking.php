<?php session_start(); $nav='programming'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="apage4u. Die Internet-Plattform von Alexander Lüdeke." />
		<meta name="keywords" content="Alexander, Alex, Lüdeke, Lüdecke, Lüdekke, Lüddeke, music, web, design, programming, osnabrück, niedersachsen, berlin, <?php $nav ?>" />
		<title>apage4u - modelling beat tracking - a multi agent system</title>
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
					<h2>Modelling beat tracking - a multi agent system</h2>	        
				</header>
				
				<p>The following text describes my diploma thesis written 2004. The subject of this thesis is &ldquo;computer based modelling of metrics in music&rdquo;. In order to simulate metric perception, I implemented a beat tracking system based on multi agents. Furthermore, I would like to show you the GUI of my application and some examples for download.</p>
				
				<h3>Subject of my thesis </h3>
				
				<p>I would like to take this opportunity to present the results of my diploma thesis, because I think the results should be accessible to a wide public. If you like you can download the <a href="https://docs.google.com/uc?id=0B0JWU8mmRJjPZGFiNzZjMTQtYjkxZi00ZjE4LWE4ZGUtNzg5MGQwNDAwZTMw&amp;export=download&amp;hl=en_GB" class="german">complete text as PDF file</a>. The thesis is currently only available in German, please excuse me for that.</p>
				<p>The subject of this work is the computer based detection of beat and metre in music, that means real time detection and generation of temporal regularities. For this purpose I have analysed the relevant models of musical perception and evaluated in terms of their suitability to be starting point of such an implementation.</p>
				<p>After that I developed, extended and evaluated the promising approach of <a href="http://www.eecs.qmul.ac.uk/~simond/" target="_simondixon">Simon Dixon</a>, a multi agent system.</p>
				
				<p>My thesis can basically be considered as a contribution to the subject synchronisation of man and machine, because the model and implementation of human music perception and production achieves two things:</p>
				<ul><li>  the perception of regular pulses in music (pattern recognition)</li><li>the generation of consistent pulses with music (musical accompaniment) </li></ul>
				<p>In this context is the usage of empirical data as important as scientific thinking. The vast majority of this input data has been kindly donated by <a href="http://en.wikipedia.org/wiki/Henkjan_Honing" target="_henkjanhoning">Henkjan Honing</a>. They stem from an experiment, twelve pianists were invited to play two pieces &ldquo;Yesterday&rdquo; and &ldquo;Michelle&rdquo;. Both pieces have a relatively simple rhythmic structure and lend themselves to increase speed by varying the expression. Four of the players were jazz pianists, four professional pianist from the classical field and four beginners. The musicians had to play the songs three times in three different tempos, i.e. in normal, slow and fast tempo. The interpretations, whose total number is equal to 216 were played on a &ldquo;Yamaha Disklavier Pro&rdquo;, recorded with the &ldquo;Opcode Vision&rdquo; sequencer and saved as MIDI file.</p>
				
				<h3>The functionality of the system</h3>
				
				<p>At this point I would like to describe the functionality and usage of the programmed package &ldquo;de.uos.fmt.musitech.beattracking&rdquo;. As you may see is the package part of a music framework called <a href="http://musitech.fmt.uni-osnabrueck.de/" target=_"musitech">musitech</a>
				located at the &ldquo;Research Department of Music and Media Technology&ldquo; of the University of Osnabr&uuml;ck.</p>
				<p>The software was written by me in Java, and includes 30 classes with a total of about 20,000 lines of code. On a 1800 mhz computer claims the analysis of a MIDI file about 1.5 seconds for a Yesterday and 1.6 seconds for a Michelle interpretation. By the way the mean length of the  interpretations is about 66 respectively 59 seconds. The real time version requires much more time for the processing of a interpretations. That means an average of 11.8 seconds for a Yesterday and 6.4 seconds for a Michelle interpretation.</p>
				
				<p><img src="../img/programming/beattracking/UML_2.jpg"></p>
				
				<p>UML-diagram</a> of the real time system</p>
				
				<p>Let us take a look at the java implementation. In real time mode the start of the beat tracking begins with creation of an instance &ldquo;BeatTrackingSystem&rdquo; or for offline processing with instantiation of a &ldquo;BeatTrackerSystem&rdquo;. In the following I would like to describe the real time mode. Its difference to the offline processing will be shown in a later paragraph.</p>
				
				<h4>Preprocessing and initiation</h4>
				
				<p>The preprocessing refers to classes of the <a href="http://musitech.fmt.uni-osnabrueck.de/" target="_musitech">Musitech</a> project. The input data is handed over to the system as 
				<strong>music.Container</strong>. This could be for example a <strong>notePool</strong>of a <strong>music.Work</strong> object. This object can be created with the help of a MIDI file import and a <strong>midi.MidiReader</strong></p>
				
				<p>The aforementioned container creates a  <strong>RhythmicEventSequence</strong>  of <strong>RhythmicEvent</strong>s. These events groups very close notes to one object. The maximum temporary distance is called <strong>mergeMargin</strong></p>
				<p><span>With the grouped notes are properties calculated like there mean onset, salience, length and velocity. This calculation is parameterized by </span><span class="c0 c2">velocityWeight</span><span>, </span><span class="c0 c2">durationWeight</span><span>, </span><span class="c0 c2">pitchWeight</span><span>, </span><span class="c0 c2">pitchMin</span><span> and </span><span class="c0 c2">pitchMax.</span><span> These values define the influence of the several factors.</span></p>
				<p><span>After adding the </span><span class="c0 c2">RhythmicEventSequence</span><span> to the system a </span><span class="c0 c2">TempoInductionAgent</span><span> and  </span><span class="c0 c2">BeatTrackingManager</span><span> are created. At this point is the initiation of the system finished and the method call </span><span class="c0 c2">trackBeat</span><span> starts the beat tracking</span></p>
				
				<h4>Tempo induction and beat tracking</h4>
				
				<p><span>During the next step are all rhythmic events consecutively processed by the system. For each event happens the following:</span></p>
				
				<ol class="c5"><li class="c4" value="1"><span>Each event is delivered to the 	</span>	<span class="c0 c2">TempoInductionAgent	</span>	<span>. This object is used for the creation of tempo hypotheses based on the temporal distance of the events. 	</span></li><li class="c4">	<span>Every event is handed over to the 	</span>	<span class="c0 c2">BeatTrackingManager	</span>	<span>. The field 	</span>	<span class="c0 c2">currentTime	</span>	<span> holds the onset time. So the time between events can be calculated, the delta time. The  	</span>	<span class="c0 c2">BeatTrackingManager	</span>	<span> needs this value to score the tempo of each agent. The 	</span>	<span class="c0 c2">tempoScore	</span>	<span> is the product of its recent value and the parameter 	</span>	<span class="c0 c2">decayFactor	</span>	<span> to the power of 	</span>	<span class="c0 c2">deltaTime	</span>	<span>.	</span></li><li class="c4">	<span>Then the Agent&rsquo;s 	</span>	<span class="c0 c2">trackBeats	</span>	<span> method triggers the beat processing by the beat tracking agent: The agent measures the time to wait for the next event. If it is too long, that mean greater the parameter 	</span>	<span class="c0 c2">expiryTime	</span>	<span>, the agent is marked  as to be deleted. Besides that, the agent calculates an error, the difference between the onset of the event and the espected time. Occurs the event in a special time frame, specified with 	</span>	<span class="c0 c2">preMargin	</span>	<span> and 	</span>	<span class="c0 c2">postMargin,	</span>	<span> it is classify as beat. In that case the event is added to the agent history, the 	</span>	<span class="c0 c2">beatCount 	</span>	<span>is incremented, and the 	</span>	<span class="c0 c2">beatInterval 	</span>	<span>is	</span>	<span class="c0 c2"> 	</span>	<span>adjusted. This fitting depends on the parameter 	</span>	<span class="c0 c2">correctionFactor	</span>	<span>.	</span></li><li class="c4">	<span>Additionally gets the agent a new 	</span>	<span class="c0 c2">phaseScore	</span>	<span> based on the old value, error, stress and the parameter 	</span>	<span class="c0 c2">conFactor	</span>	<span>, a kind of learning rate. But this approach prefers early created agents, because they have more time to increase the scoring of their phase and this approche do not decrease the score. For this reason was the phase calcucation of the real time version increased by the parameter 	</span>	<span class="c0 c2">phaseDecay	</span>	<span>, which gives younger agents a chance, because the decay fades the old scores. 	</span></li><li class="c4">	<span>If the event only appears in the outer window, then a second agent is created, who ignores this event.	</span></li><li class="c4">	<span>Some agents have predicted the current event. There tempo scoring will be increased. 	</span></li><li class="c4">	<span>After that the tempo score of all agent is calculated. The sum of the old value and the scoring of the beat interval is calculated by the tempo induction agent. Remember that the beat interval is nothing else than the tempo hypothesis of an agent. 	</span></li><li class="c4">	<span>The beat tracking manager requests the best tempo hypothesis from the tempo induction agent. If there is no agent with best fitting tempo, the manager creates such agent and sets his scoring.	</span></li><li class="c4">	<span>But the scoring of the tempo happens a third time. The scoring is increased, when there are more agents with similar tempo hypotheses. That means there beat interval is nearly  a integer divider or multiplier of the tempo to be scored. 	</span></li><li class="c4">	<span>Finally the beat tracking manager detects the agent with the best tempo and phase score, and increased his to score time by lapsed time period. The top score time of the others is halved.	</span></li><li class="c4">	<span>After adding the agent to a list oft the best agents, the processing of the next event can start.	</span></li></ol>
				
				<h4>Difference between real time and offline version</h4>
				
				<p>Let us take a closer look at the offline beat tracking. The real time version tries to detect the tempo time by time with the help of a tempo induction agent. This agent handles a time window, which is moved through the song. By contrast, the offline version processes the tempo induction one time. The result is that the offline version clones only agents with different phases, means beat times, but no agents with different beat intervals.</p>
				<p>The tempo induction agent is basically an array, which stores - like a histogram - the distribution of the &ldquo;inter offset intervals&rdquo; (IOIs). The IOIs are clustered in order to reduce the amount of data. But there is a second reduction, which implements a kind of forgetting. Old IOIs are not considered in the calculation of the clusters. Each cluster is specified by a relative and absolute time frame. Assigning a IOI to a cluster will not only increment the count of the cluster, it will also increment the adjacent clusters.</p>
				<p>There is only a few differences between real time and offline version in the following processing of the rhythmic events through the agents. The real time version implements collaboration of the agents regarding to their beat interval. The offline version detects the best agent after processing of all rhythmic events, whereas the real time version detects the best agent after each event. In order to avoid ever-changing best agents the system favors already winning agents in the following way. The deciding factor is not the direct scoring, but, instead, the time elapsed while being the best agent. The so called top score time.</p>
				
				<p><span>Let us take a look at the real system output. The detected beats are added as beat marker to a metrical time line object, which is part of the song representing object. If now the processed song is displayed as a piano roll, there are some vertical lines marking the beat.</span></p>
				
				<p>Finally let me show you the whole process as pseudo code:</p>
				
				<p><span>Real time version:</span></p>
				
				<p><span>FOR each event E_j</span>
				</p>
				<p><span>  TempoInductionAgent.add(E_j)</span>
				</p>
				<p><span>  BeatTrackingManager.add(E_j)</span>
				</p>
				<p><span>  BeatTrackingManager.update(TempoInductionAgent)</span>
				</p>
				<p><span>  BeatTrackingManager.collaborate()</span>
				</p>
				<p><span>  BeatTrackingManager.bestAgent()</span>
				</p>
				<p><span>END FOR</span></p>
				
				<p><span>Offline version:</span></p>
				
				<p><span>RhythmicEventSequence.tempoInduction()</span></p>
				<p><span>FOR each event E_j</span></p>
				<p><span>  AgentList.beatTrack(E_j)</span></p>
				<p><span>END FOR</span></p>
				<p><span>AgentList.bestAgent()</span></p>
				
				<h4>Emphasis and metricity</h4>
				
				<p>The metric analysis inspects sequences of rhythmic events. First of all the velocity of each event is normalised. After that the local emphasis of an event is calculated with the help of its previous and following event. The computed values are in the range of 1 and -1. Interpolated values have no velocity, so there emphasis is always set to zero.</p>
				<p>Each agent is escorted by a metric agent observing two metricity properties: salience and  regularity. The third metrictiy property is calculated by the agent on itself, the coincidence. Finally the wighted sum of these properties calculates the agent&rsquo;s metricity.</p>
				<p>The evaluation of both versions is based on the Beatles interpretations and made by comparison of system output and expected results. These difference is calculated as cumulative error.</p>
				
				<h3>The user interface</h3>
				
				<p>The implemented java classes can not only be used in combination with other classes, but also as single application. For the purpose I have programmed a java swing based user interface. The following sections shows the usage of the user interface.</p>
				
				<h4>Main window</h4>
				
				<p>The picture below shows two windows of the application. The small window in the foreground is the main window for editing the essential settings. It is organised into three parts. The upper section holds the beat tracking and evaluation parameters. The button &ldquo;edit&rdquo; opens an XML editor. The middle part configures the result view. The lowest section controls the audio play back.</p>
				
				<figure><img src="../img/programming/beattracking/Hauptfenster.jpg" /></figure>
				<p>The large windows in the background show exemplary a graphic system output. Use the mouse zoom into the graph. There are three buttons at the bottom to trigger more actions.</p>
				
				<h4>XML-Editor</h4>
				
				<p><span>The XML editor offers the possibility to edit all system parameters and load saved settings.</span></p>
				
				<p><img src="../img/programming/beattracking/XML-Editor.jpg"/></p>
				
				<h4>3.3 Input window</h4>
				
				<p><span>The system input window displays loaded MIDI data. That means the salience of the rhythmic events through the time.</span></p>
				
				<p><img src="../img/programming/beattracking/Eingabefenster.jpg"/></p>
				
				
				<h4>Output windows</h4>
				
				<p><span>The first system output window uses a piano roll and a table to show the rhythmic events and the detected beats. </span></p>
				
				<p><img src="../img/programming/beattracking/Pianoroll.jpg"/>
				</p>
				
				<p>The second output window displays the function of time and detected beat intervals.</p>
				
				<p><img src="../img/programming/beattracking/Ausgabefenster.jpg"/></p>
				
				<p><span>The third windows shows the result of the metric analysis. That means the detected time signature, metric and begin of each bar.</span></p>
				
				<p><img src="../img/programming/beattracking/MetrischeAnalyse.jpg"/>
				</p>
				<h3>Demos, downloads and sources</h3>
				
				<ul>
					<li>
					    <audio controls>
					    	<source src="../downloads/programming/beattracking/Michelle_Bert_fast_rep_1.ogg" />
					    	<source src="../downloads/programming/beattracking/Michelle_Bert_fast_rep_1.mp3" />
					    	<a href="../downloads/programming/beattracking/Michelle_Bert_fast_rep_1.ogg">play</a>
				        </audio>&nbsp;&nbsp; Offline beat tracking for a Michelle interpretation
					</li>
					<li>
					    <audio controls>
					    	<source src="../downloads/programming/beattracking/Yesterday_Bert_fast_rep_1.ogg" />
					    	<source src="../downloads/programming/beattracking/Yesterday_Bert_fast_rep_1.mp3" />
					    	<a href="../downloads/programming/beattracking/Yesterday_Bert_fast_rep_1.ogg">play</a>
				        </audio>&nbsp;&nbsp; Offline beat tracking for a Yesterday interpretation
					</li>
					<li>
					    <audio controls>
					    	<source src="../downloads/programming/beattracking/Michelle_Egbert_normal_rep_1.ogg" />
					    	<source src="../downloads/programming/beattracking/Michelle_Egbert_normal_rep_1.mp3" />
					    	<a href="../downloads/programming/beattracking/Michelle_Egbert_normal_rep_1.ogg">play</a>
				        </audio>&nbsp;&nbsp; Online beat tracking for a Michelle interpretation
					</li>
					<li>
					    <audio controls>
					    	<source src="../downloads/programming/beattracking/Yesterday_Kerstin_normal_rep_1.ogg" />
					    	<source src="../downloads/programming/beattracking/Yesterday_Kerstin_normal_rep_1.mp3" />
					    	<a href="../downloads/programming/beattracking/Yesterday_Kerstin_normal_rep_1.ogg">play</a>
				        </audio>&nbsp;&nbsp; Online beat tracking for a Yesterday interpretation
					</li>
					<li>
					    <audio controls>
					    	<source src="../downloads/programming/beattracking/Brahms_Walzer_15_off.ogg" />
					    	<source src="../downloads/programming/beattracking/Brahms_Walzer_15_off.mp3" />
					    	<a href="../downloads/programming/beattracking/Brahms_Walzer_15_off.ogg">play</a>
				        </audio>&nbsp;&nbsp; Offline beat tracking for Walzer Nummer 15 from J. Brahms
					</li>
					<li>
					    <audio controls>
					    	<source src="../downloads/programming/beattracking/Brahms_Walzer_15_onl.ogg" />
					    	<source src="../downloads/programming/beattracking/Brahms_Walzer_15_onl.mp3" />
					    	<a href="../downloads/programming/beattracking/Brahms_Walzer_15_onl.ogg">play</a>
				        </audio>&nbsp;&nbsp; Online beat tracking for Walzer Nummer 15 from J. Brahms
					</li>
				</ul>
				
				<p>What you hear is the audio input and the detected beat as click sound.</p>
				
				<p>Don't hesitate to ask for the project&rsquo;s source code. Just <a href="/contact.php">send me an email</a> or ask the  <a href="http://www.google.com/url?q=http%3A%2F%2Fmusitech.fmt.uni-osnabrueck.de%2F&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNE5xhztXdGD6ifpbGkAA4MeqhVlQg">Musitech </a> project.</p>
				<p><a href="https://docs.google.com/uc?id=0B0JWU8mmRJjPZGFiNzZjMTQtYjkxZi00ZjE4LWE4ZGUtNzg5MGQwNDAwZTMw&amp;export=download&amp;hl=en_GB" class="german">Download my diploma thesis</a> to get a full description of this project. Please, apologize that the thesis is only available in German.</p>

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


