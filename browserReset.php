<?php
	include 'header.php';
?>

<section class="container code-container">
	<h1 class="title main">Browser Reset CSS</h1>
	<pre class="attr-values" id="browserReset">
		<span class="line text">* {</span>
			<span class="line html-tags">   margin<span class="text">:</span><span class="numbers"> 0<span class="text">;</span></span>
			<span class="line html-tags">   padding<span class="text">:</span><span class="numbers"> 0<span class="text">;</span></span>
			<span class="line html-tags">   border<span class="text">:</span><span class="numbers"> none<span class="text">;</span></span>
		<span class="line text">}</span>
		<br />
		<span class="line text">a {</span>
			<span class="line html-tags">   color<span class="text">:</span><span class="numbers"> inherit</span><span class="text">;</span></span>
			<span class="line html-tags">   text-decoration<span class="text">:<span class="numbers"> none</span>;</span>
		<span class="line text">}</span>
		<br />
		<span class="line text">ol, ul {</span>
			<span class="line html-tags">   list-style<span class="text">:</span><span class="numbers"> none</span><span class="text">;</span></span>
		<span class="line text">}</span>
	</pre>
	
	<div class="btn-container">
		<button class="btn" id="btn-download" type="button"><a href="#" download="browserReset.css"><i class="fas fa-download"></i></a></button>
		<button class="btn" id="btn-copy" type="button"><i class="fas fa-clone"></i></button>
	</div>

</section>

<textarea id="copyCode">
* {
	margin: 0;
	padding: 0;
	border: 0;
}

a {
	color: inherit;
	text-decoration: none;
}

ol, ul {
	list-style: none;
}
</textarea>

<section class="text-container">
	<div class="max-width">
		<p>This is a stripped-down, realistic version that only targets commonly used elements set by the browser.</p>
	</div>
</section>


<?php
	include 'success.php';
	include 'footer.php';
?>