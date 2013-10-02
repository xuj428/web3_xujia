var bird = document.getElementsByTagName("h1").item(0);

bird.addEventListener("click",function(evt){
	evt.preventDefault();
	var pbird = document.getElementById("hbird");
	pbird.classList.toggle("is-active")
},false);