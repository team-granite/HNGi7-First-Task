const result =() =>{
	const info = {
		fullName: 'Oni Emmanuel Temitope',
		hngId: 'HNG-03120',
		language: 'Javascript',
		email: 'oniemmanuel90@gmail.com'
	};
	
	return 'Hello World, this is ' + info.fullName + ' with HNGi7 ID ' + info.hngId + ' using ' + info.language + ' for stage 2 task and ' + info.email;
};

console.log(result());
