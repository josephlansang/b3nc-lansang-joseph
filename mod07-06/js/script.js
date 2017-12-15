/*var userName;
var firstName;
var lastName;

userName = "billyarante";
firstName = "Billy Wilson";
lastName = "Arante";*/

/*console.log(userName);
console.log(firstName);
console.log(lastName);*/

/*var message = "Your name is " + firstName + " " + lastName + " and your username is " + userName + ".";

console.log(message)

document.getElementById("yourMessage").innerHTML = message;

var userName;
var passWord;

userName = "billyarante";
passWord = "abc123";

if (userName == "billyarante") {
	console.log("Your usename is correct.");
}

else {
	console.log("Username entered is incorrect.");
}

if (passWord == "abc123") {
	console.log("Your password is correct.");
}

else {
	console.log("Password entered is incorrect.");
}*/

/*loops*/

/*var counter = 0;
while (counter < 10) {
	console.log(counter);
	counter++;
}	*/

/*var counter = 0;
while (counter <= 100) {
	if (counter % 2 == 0) {
	console.log(counter)

}
	counter = counter + 1;
}	*/

/*var yourName = "Juan Dela Cruz";
var counter = 0;
var markup = "";
while (counter < 10) {
	markup = markup + "<p>" + yourName + "</p>";
	counter = counter + 1;
}	
document.getElementById("yourMessage").innerHTML = markup;*/

var expression = "";

function updateDisplay(val) {
	//console.log(val);
	expression = expression + val;
	document.getElementById("display").innerHTML = expression;

	//return expression;

}

function computeExpression() {
	//console.log(expression);
	var result = eval(expression);
	document.getElementById("display").innerHTML = result;
	expression = "";
}

function clearDisplay() {
	expression = "";
	document.getElementById("display").innerHTML = 0;

}

function deleteLastCharacter() {
	expression = expression.substr(0, expression.length-1);
	if (expression == "") {
		document.getElementById("display").innerHTML = 0;
	
	} else {
		document.getElementById("display").innerHTML = expression;
	}
}

