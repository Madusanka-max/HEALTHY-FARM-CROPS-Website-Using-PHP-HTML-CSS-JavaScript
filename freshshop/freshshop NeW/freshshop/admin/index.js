//index.js  
function sendEmail() {
	Email.send({
	Host: "smtp.gmail.com",
	Username : "sachintha",
	Password : "123",
	To : 'sasanka1piumalrch@gmail.com',
	From : "yomalsachintha4@gmail.com",
	Subject : "from Genoxia",
	Body : "sending data",
	}).then(
		message => alert("mail sent successfully")
	);
}