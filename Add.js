function catSelect() {
	
	
		if(document.getElementById("books").checked) {
			document.getElementById("eleForm").style.display = "none";
			document.getElementById("furnForm").style.display = "none";
			document.getElementById("tickForm").style.display = "none";
			document.getElementById("clothForm").style.display = "none";
			document.getElementById("bookForm").style.display = "block";
		}
		else if (document.getElementById("ele").checked) {
			document.getElementById("bookForm").style.display = "none";
			document.getElementById("furnForm").style.display = "none";
			document.getElementById("tickForm").style.display = "none";
			document.getElementById("clothForm").style.display = "none";
			document.getElementById("eleForm").style.display = "block";
			}
		else if (document.getElementById("furn").value == category.value) {
			document.getElementById("bookForm").style.display = "none";
			document.getElementById("tickForm").style.display = "none";
			document.getElementById("clothForm").style.display = "none";
			document.getElementById("eleForm").style.display = "none";
			document.getElementById("furnForm").style.display = "block";
			}
		else if (document.getElementById("tickets").value == category.value) {
			document.getElementById("bookForm").style.display = "none";
			document.getElementById("furnForm").style.display = "none";
			document.getElementById("clothForm").style.display = "none";
			document.getElementById("eleForm").style.display = "none";
			document.getElementById("tickForm").style.display = "block";
			}
		else if (document.getElementById("cloth").value == category.value) {
			document.getElementById("bookForm").style.display = "none";
			document.getElementById("furnForm").style.display = "none";
			document.getElementById("tickForm").style.display = "none";
			document.getElementById("eleForm").style.display = "none";
			document.getElementById("clothForm").style.display = "block";
			}	
}