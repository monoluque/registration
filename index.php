<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<!--head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!DOCTYPE html>
<html lang="en">-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Main Menu</title>

    <!-- Bootstrap Core CSS -->
<style>

{
    margin: 0px;
    padding: 50px;
}
body {
    font-size: 120%;
   
    background: url("guitar.jpg")

}


.header {
    width: 30%;
    margin: 50px auto 0px;
    color: white;
    background: #2F2E2E;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}
form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}

.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.error {
    width: 92%; 
    margin: 0px auto; 
    padding: 10px; 
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: left;
}
.success {
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    margin-bottom: 20px;
} </style>


    <!-- Custom CSS -->
    <link href="side.css" rel="stylesheet">
    
    <script>
    function setHref() {
    document.getElementById('modify-me').href = window.location.protocol + "//" + window.location.hostname + ":9001/demos/";
    }
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="setHref()">

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Prodigy Music Class
                    </a>
                </li>
                
                <li>
                    <a href="index.html">Overview</a>
                </li>
                <!--li>
                    <a href="schedule.php">View Students</a>
                </li-->
                <li>
                    <a href="/demos/" id="modify-me">Create Session</a>
                </li>
                <li>
                    <a href="vexchords/index.html">Chords Tutorial</a>
                </li>
                <li>
                    <a href="index.php?logout='1'">Logout</a>
                </li>
                <li>
                    <a href="schedule2.html">Contact Us</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <!--<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Simple Sidebar http://bootsnipp.com/user/snippets/V0WB3</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
   

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

   

	<!--<div class="header">
		<h2>Home Page</h2>
	</div>-->
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			
		<?php endif ?>

        

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>



            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <!--<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <p> <a href="class2.html" style="color: red;">main page</a> </p>
            <p> <a href="video.html" style="color: red;">Create session</a> </p>-->
        <?php endif ?>
	</div>


    <br> <br>

    <div id = guitar-tuner; style="width:800px; margin:0 auto;">
<script>
// Define the set of test frequencies that we'll use to analyze microphone data.
var C2 = 65.41; // C2 note, in Hz.
var notes = [ "C", "C#", "D", "D#", "E", "F", "F#", "G", "G#", "A", "A#", "B" ];
var test_frequencies = [];
for (var i = 0; i < 30; i++)
{
    var note_frequency = C2 * Math.pow(2, i / 12);
    var note_name = notes[i % 12];
    var note = { "frequency": note_frequency, "name": note_name };
    var just_above = { "frequency": note_frequency * Math.pow(2, 1 / 48), "name": note_name + " (a bit sharp)" };
    var just_below = { "frequency": note_frequency * Math.pow(2, -1 / 48), "name": note_name + " (a bit flat)" };
    test_frequencies = test_frequencies.concat([ just_below, note, just_above ]);
}
window.addEventListener("load", initialize);
var correlation_worker = new Worker("correlation_worker.js");
correlation_worker.addEventListener("message", interpret_correlation_result);
function initialize()
{
    var get_user_media = navigator.getUserMedia;
    get_user_media = get_user_media || navigator.webkitGetUserMedia;
    get_user_media = get_user_media || navigator.mozGetUserMedia;
    get_user_media.call(navigator, { "audio": true }, use_stream, function() {});
    document.getElementById("play-note").addEventListener("click", toggle_playing_note);
}
function use_stream(stream)
{
    var audio_context = new AudioContext();
    var microphone = audio_context.createMediaStreamSource(stream);
    window.source = microphone; // Workaround for https://bugzilla.mozilla.org/show_bug.cgi?id=934512
    var script_processor = audio_context.createScriptProcessor(1024, 1, 1);
    script_processor.connect(audio_context.destination);
    microphone.connect(script_processor);
    var buffer = [];
    var sample_length_milliseconds = 100;
    var recording = true;
    // Need to leak this function into the global namespace so it doesn't get
    // prematurely garbage-collected.
    // http://lists.w3.org/Archives/Public/public-audio/2013JanMar/0304.html
    window.capture_audio = function(event)
    {
        if (!recording)
            return;
        buffer = buffer.concat(Array.prototype.slice.call(event.inputBuffer.getChannelData(0)));
        // Stop recording after sample_length_milliseconds.
        if (buffer.length > sample_length_milliseconds * audio_context.sampleRate / 1000)
        {
            recording = false;
            correlation_worker.postMessage
            (
                {
                    "timeseries": buffer,
                    "test_frequencies": test_frequencies,
                    "sample_rate": audio_context.sampleRate
                }
            );
            buffer = [];
            setTimeout(function() { recording = true; }, 250);
        }
    };
    script_processor.onaudioprocess = window.capture_audio;
}
function interpret_correlation_result(event)
{
    var timeseries = event.data.timeseries;
    var frequency_amplitudes = event.data.frequency_amplitudes;
    // Compute the (squared) magnitudes of the complex amplitudes for each
    // test frequency.
    var magnitudes = frequency_amplitudes.map(function(z) { return z[0] * z[0] + z[1] * z[1]; });
    // Find the maximum in the list of magnitudes.
    var maximum_index = -1;
    var maximum_magnitude = 0;
    for (var i = 0; i < magnitudes.length; i++)
    {
        if (magnitudes[i] <= maximum_magnitude)
            continue;
        maximum_index = i;
        maximum_magnitude = magnitudes[i];
    }
    // Compute the average magnitude. We'll only pay attention to frequencies
    // with magnitudes significantly above average.
    var average = magnitudes.reduce(function(a, b) { return a + b; }, 0) / magnitudes.length;
    var confidence = maximum_magnitude / average;
    var confidence_threshold = 10; // empirical, arbitrary.
    if (confidence > confidence_threshold)
    {
        var dominant_frequency = test_frequencies[maximum_index];
        document.getElementById("note-name").textContent = dominant_frequency.name;
        document.getElementById("frequency").textContent = dominant_frequency.frequency;
    }
}
// Unnecessary addition of button to play an E note.
var note_context = new AudioContext();
var note_node = note_context.createOscillator();
var gain_node = note_context.createGain();
note_node.frequency = C2 * Math.pow(2, 4 / 12); // E, ~82.41 Hz.
gain_node.gain.value = 0;
note_node.connect(gain_node);
gain_node.connect(note_context.destination);
note_node.start();
var playing = false;
function toggle_playing_note()
{
    playing = !playing;
    if (playing)
        gain_node.gain.value = 0.1;
    else
        gain_node.gain.value = 0;
}
</script>




<button onclick="myFunction()">Show Guitar Tuner</button>

<div id = "tuning"; class = "white-box"; style = "background-color: white; color: black;">
<strong><h1> Simple Guitar Tuner</h1> </strong>
<p>It sounds like you're playing...</p>
<h1 id="note-name"></h1>
<p>
    <span>frequency (Hz):</span>
    <span id="frequency"></span>
</p>

<hr>
<button id="play-note">start/stop an E note</button>

<img src="standard-tuning.gif" alt="E Tuning">
<hr>
</div>

<script>
    function myFunction() {
    var x = document.getElementById("tuning");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
</div>
</head>

<!--a href="https://github.com/jbergknoff/guitar-tuner">Source code</a> / <a href="http://jonathan.bergknoff.com/journal/making-a-guitar-tuner-html5">Explanatory article</a-->
</div>

		
</body>
</html>