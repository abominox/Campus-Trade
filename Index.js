function ifLogin(username) {
	if (username == true) {
	document.getElementById("login").style.display = "none";
	document.getElementById("login2").style.display = "none";
	} else {
		document.getElementById("userBtn").style.display = "none";
	}
}

		
function books() {
	document.getElementById("eleForm").style.display = "none";
	document.getElementById("furnForm").style.display = "none";
	document.getElementById("tickForm").style.display = "none";
	document.getElementById("clothForm").style.display = "none";
	document.getElementById("bookForm").style.display = "block";
}

function ele() {
	document.getElementById("bookForm").style.display = "none";
	document.getElementById("furnForm").style.display = "none";
	document.getElementById("tickForm").style.display = "none";
	document.getElementById("clothForm").style.display = "none";
	document.getElementById("eleForm").style.display = "block";
}

function furn() {
	document.getElementById("bookForm").style.display = "none";
	document.getElementById("tickForm").style.display = "none";
	document.getElementById("clothForm").style.display = "none";
	document.getElementById("eleForm").style.display = "none";
	document.getElementById("furnForm").style.display = "block";
}

function tickets() {
	document.getElementById("bookForm").style.display = "none";
	document.getElementById("furnForm").style.display = "none";
	document.getElementById("clothForm").style.display = "none";
	document.getElementById("eleForm").style.display = "none";
	document.getElementById("tickForm").style.display = "block";
}

function cloth() {
	document.getElementById("bookForm").style.display = "none";
	document.getElementById("furnForm").style.display = "none";
	document.getElementById("tickForm").style.display = "none";
	document.getElementById("eleForm").style.display = "none";
	document.getElementById("clothForm").style.display = "block";
}	