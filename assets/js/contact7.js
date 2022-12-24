document.addEventListener('DOMContentLoaded', function () {
	document.addEventListener('wpcf7mailsent', function (event) {
		console.log('protocol:' + location.protocol);
		console.log('host:' + location.host);
		console.log('hostname:' + location.hostname);
		console.log('/contact-thanks/');
	}), 
}false);