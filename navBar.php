<?php
	include 'header.php';
?>

<section class="container code-container">
	<h1 class="title html">NavBar HTML</h1>
	<pre class="attr-values" id="navBar-HTML">
		<span class="line html-tags">&lt;nav&gt;</span>
			<span class="line html-tags">   &lt;a<span class="attr-names"> class</span><span class="html-tags">=</span><span class="attr-values">"logo"</span><span class="attr-names"> href</span>=<span class="attr-values">"</span><span class="links">index.html</span><span class="attr-values">"</span>&gt;</span>
			<span class="line html-tags">   &lt;ul&gt;</span>
				<span class="line html-tags">      &lt;li&gt;</span>
				<span class="line html-tags">      &lt;/li&gt;</span>
			<span class="line html-tags">   &lt;/ul&gt;</span>
		<span class="line html-tags">&lt;/nav&gt;</span>
	</pre>
	
	<div class="btn-container">
		<button class="btn" id="btn-download" type="button"><a href="#" download="browserReset.css"><i class="fas fa-download"></i></a></button>
		<button class="btn" id="btn-copy" type="button"><i class="fas fa-clone"></i></button>
	</div>

</section>

<textarea id="copyCode">

</textarea>

<section class="text-container">
	<div class="max-width">
		<p>This is a navbar.</p>
	</div>
</section>

<?php
	include 'success.php';
	include 'footer.php';
?>