class User{
	
	constructor(name, surname, email, password){
		this.name = name
		this.surname = surname
		this.email = email
		this.password = password
	}

}

let form = document.getElementById("form");

form.addEventListener("submit", e => {
	e.preventDefault();

	let name = e.target.name.value;
	let surname = e.target.surname.value;
	let email = e.target.email.value;
	let password = e.target.password.value;

	let user = new User(name, surname, email, password);

	console.log(user);

	

});