// JavaScript Document
var elFirstName = document.getElementById('firstName');
var elLastName = document.getElementById('lastName');
var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');
var elPhoneNumber = document.getElementById('phoneNumber');
var elEmailAddress = document.getElementById('email');
var elComment = document.getElementById('comments');

//NAMES CANNOT HAVE NUMBERS
function checkNames(minLength, inputGroup, inputStatus, inputEl){
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup);
	var elInput = document.getElementById(inputEl);
	
	if(elInput.value.length < minLength ){
		elStatus.innerHTML = inputEl.toUpperCase() + ' must be ' + minLength + ' characters or more.';
		elGroup.classList.add('has-error');
	}
	else {
		elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
	}
}

function checkUserAndPass(minLength, inputGroup, inputStatus, inputEl){
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup);
	var elInput = document.getElementById(inputEl);
	
	if(elInput.value.length < minLength ){
		elStatus.innerHTML = inputEl.toUpperCase() + ' must be ' + minLength + ' characters or more.';
		elGroup.classList.add('has-error');
	}
	else {
		elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
	}
	
}

function checkPhoneNumber(inputStatus, inputGroup, inputEl){
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup);
	var elInput = document.getElementById(inputEl).value;
	var validRegex = /^\d{10}$/;
	
	if(validRegex.test(elInput)){
		elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
	}
	else {
		elStatus.innerHTML = 'not a valid phone number';
		elGroup.classList.remove('has-success');
		elGroup.classlist.add('has-error');
	}
	
}

function checkEmail(inputStatus, inputGroup, inputEl){
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup);
	var elInput = document.getElementById(inputEl).value;
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if(validRegex.test(elInput)){
		elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
	}
	else {
		elStatus.innerHTML = 'not a valid email address';
		elGroup.classList.remove('has-success');
		elGroup.classlist.add('has-error');
	}
	
}

function checkComment(minLength, inputGroup, inputStatus, inputEl){
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup);
	var elInput = document.getElementById(inputEl);
	
	if(elInput.value.length < minLength ){
		elStatus.innerHTML = inputEl.toUpperCase() + ' must be ' + minLength + ' characters or more.';
		elGroup.classList.add('has-error');
	}
	else {
		elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
	}
}


elFirstName.addEventListener('blur', function(){checkNames(2, 'firstNameGroup', 'firstNameStatus', 'firstName')}, false);
elLastName.addEventListener('blur', function(){checkNames(2, 'lastNameGroup', 'lastNameStatus', 'lastName')}, false )

elUsername.addEventListener('blur', function(){checkUserAndPass(6, 'usernameGroup', 'usernameStatus', 'username')}, false);
elPassword.addEventListener('blur', function(){checkUserAndPass(6, 'passwordGroup', 'passwordStatus', 'password')}, false);

elPhoneNumber.addEventListener('blur', function(){checkPhoneNumber('phoneNumberStatus', 'phoneNumberGroup', 'phoneNumber')}, false);

elEmailAddress.addEventListener('blur', function(){checkEmail('emailStatus', 'emailGroup', 'email')} , false)

elComment.addEventListener('blur', function(){checkComment(1, 'commentsGroup', 'commentStatus', 'comments')}, false)