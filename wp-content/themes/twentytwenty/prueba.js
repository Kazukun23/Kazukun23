var existe =document.getElementById("pruebadelelemento");
if(existe){
	var f = new Date();
existe.innerHTML = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
	
}
