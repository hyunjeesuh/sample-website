
function isEmail() {
	let x = document.forms["contactForm"]["email"].value;
	if (x == "") {
		alert("Enter a valid email address")
		return false;
	}
}

function checkMessage() {
	let x = document.forms["contactForm"]["message"].value;
	if (typeof x === 'string' && x.trim().length === 0) {
		alert("Enter a message")
		return false;
	} 
}
	
function validateForm() {
	isEmail();
	checkMessage();
}
