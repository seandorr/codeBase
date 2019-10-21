document.getElementById('btn-copy').onclick = function copyToClipboard() {
	var code = document.getElementById('copyCode');
	code.select();
	document.execCommand("copy");
	
	var copySuccess = document.getElementById('copy-success');	
	copySuccess.style.bottom = "0";
};




