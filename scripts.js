function mobileNav() {
  var x = document.getElementById("nav-links");
  if (x.className === "nav-links") {
    x.className += " responsive";
    document.getElementById("theLogo").style.color = "#1E1F1E";
    document.getElementById("colorChange").style.color = "#f9f9f9";
  } else {
    x.className = "nav-links";
    document.getElementById("theLogo").style.color = "#EF82B0";
    document.getElementById("colorChange").style.color = "#A49FF1";
  }
  
  var y = document.getElementById("theNavIcon");
  if (y.className === "navIcon") {
    y.className += " rotate";
  } else {
    y.className = "navIcon";
  }
}

document.getElementById('btn-copy').onclick = function copyToClipboard() {
	var code = document.getElementById('copyCode');
	code.select();
	document.execCommand("copy");
	
	var copySuccess = document.getElementById('copy-success');	
	copySuccess.style.bottom = "0";
	copySuccess.style.visibility = "visible";
	
	document.querySelector(".close-btn").onclick = function close() {
		copySuccess.style.bottom = "-100px";
		copySuccess.style.visibility = "hidden";
	}
};