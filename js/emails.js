
	var email = document.getElementById('email');
	var submitButton = document.getElementById('emailButton');
	

	function submitClick() {
		var firebaseRef = firebase.database().ref();
		var emailInput = email.value;
		firebaseRef.push().set(emailInput);
	}