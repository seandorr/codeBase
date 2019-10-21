<?php
	include 'header.php';
?>

<section class="container code-container">
	<h1 class="title">Boiler Plate HTML</h1>
	<pre class="attr-values" id="boilerPlate">
		<span class="line text">&lt;!DOCTYPE html&gt;</span>
		<span class="line html-tags">&lt;html <span class="attr-names">lang</span>=<span class="attr-values">"en"</span>&gt;</span>
			<span class="line html-tags">&lt;head&gt;</span>
				<span class="line html-tags">   &lt;title&gt;<span class="text">Title</span>&lt;/title&gt;</span>
				<span class="line html-tags">   &lt;meta <span class="attr-names">name</span>=<span class="attr-values">"description" </span><span class="attr-names">content</span>=<span class="attr-values">""</span>&gt;</span>
				<span class="line html-tags">   &lt;meta <span class="attr-names">name</span>=<span class="attr-values">"keywords" </span><span class="attr-names">content</span>=<span class="attr-values">""</span>&gt;</span>
				<span class="line html-tags">   &lt;meta <span class="attr-names">name</span>=<span class="attr-values">"author" </span><span class="attr-names">content</span>=<span class="attr-values">""</span>&gt;</span>
				<span class="line html-tags">   &lt;meta <span class="attr-names">name</span>=<span class="attr-values">"viewport" </span><span class="attr-names">content</span>=<span class="attr-values">"width=device-width, initial-scale=1.0"</span>&gt;</span>
				<span class="line html-tags">   &lt;meta <span class="attr-names">charset</span>=<span class="attr-values">"UTF-8"</span>&gt;</span>
				<span class="line html-tags">   &lt;link <span class="attr-names">rel</span>=<span class="attr-values">"stylesheet" </span><span class="attr-names">type</span>=<span class="attr-values">"text/css" </span><span class="attr-names">href</span>=<span class="attr-values">"<span class="links">style.css</span><span class="attr-values">"</span><span class="html-tags">&gt;</span></span>
			<span class="line html-tags">&lt;/head&gt;</span>
			
			<span class="line html-tags">&lt;body&gt;</span>
			
				<span class="line html-tags">   &lt;script <span class="attr-names">src</span>=<span class="attr-values">"</span><span class="links">main.js</span><span class="attr-values">"</span>&gt;</span>
			<span class="line html-tags">&lt;/body&gt;</span>
		<span class="line html-tags">&lt;/html&gt;</span>
	</pre>
</div>

<div class="btn-container">
	<button class="btn" id="btn-download" type="button"><a href="boilerPlate.html" download="Boiler-Plate/boilerPlate.html"><i class="fas fa-download"></i></a></button>
	<button class="btn" id="btn-copy" type="button"><i class="fas fa-clone"></i></button>
</div>
</section>

<textarea id="copyCode">
<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Title</title>
	<meta name='description' content=''>
	<meta name='keywords' content=''>
	<meta name='author' content='Sean Dorr'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta charset='UTF-8'>
	<link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>
	<script src='main.js'></script>
</body>

</html>
</textarea>

<div id="copy-success">
	<h1>Copied to clipboard</h1>
	<a class="close-btn" href="javascript:void(0)">X</a>
</div>

<div id="copy-fail">
	<h1>00ps, s0mething went wrong... </h1>
</div>

<?php
	include 'footer.php';
?>