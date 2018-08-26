$(document).ready(function(){
	console.log("El DOM ha sido cargado, debe cargar todos los tweets e imprimirlos tal y como lo muestrael html estatico");
/*********************peticion ajax usuarios******************************************* */
	$.ajax({
        url:"ajax/ajax-traer-usuarios.php",
		dataType:"json",
        success: function(respuesta){
             console.log(respuesta);
             for (var i=0;i<respuesta.length;i++){
                 $("#slc-usuario").append(
                     `<option >${respuesta[i].usuario}</option>`
                 );
             }
        },
        error:function(error){
            console.log(error);
        }
	 });


/******************peticion ajax tweets*********************************************** */
	 $.ajax({
        url:"ajax/ajax-traer-tweets.php",
		dataType:"json",
        success: function(respuesta){
             console.log("soy la respuesta de los tweets-->"+respuesta);
             for (var i=0;i<respuesta.length;i++){
                 $("#tweets").append(
					`<div class="row component text-left">
					<div class="col-lg-2">  
					  <img src = "${respuesta[i].usuario.urlImagen}" class="img-fluid rounded-circle img-thumbnail">
					</div>
					<div class="col-lg-10">
					  <b>${respuesta[i].usuario.nombre}</b>${respuesta[i].usuario.usuario}
					  <div class="tweet-content">
					  ${respuesta[i].tweet}
						  <div>
							  <small class="blue-text"> ${respuesta[i].hashtags}</small>
						  </div>
					  </div>
					</div>
				</div>`
                 );
             }
        },
        error:function(error){
            console.log('soy el error de los tweets---> ');
        }
	 });
	 
/*******************peticion ajax traer trends************************************************************/	 
$.ajax({
	url:"ajax/ajax-traer-trends.php",
	dataType:"json",
	success: function(respuesta){
		 console.log(respuesta[0].trending);
		 for (var i=0;i<respuesta.length;i++){
			 $("#trends").append(
				`<div><span class="blue-text">${respuesta[i].trending}</span> <small>${respuesta[i].tweets}tweets</small></div>` 
			 );
		 }
	},
	error:function(error){
		console.log("error de la pagina traaer trends"+error);
	}
 });

});



/*****************jquery del cambio de select********************************************************** */
$("#slc-usuario").change(function(){
	//Esta funcion se ejecuta cada vez que el usuario selecciona o cambia un elemento de la lista.
	console.log("Usuario seleccionado: " + $("#slc-usuario").val());
	var parametros="usuario="+ $("#slc-usuario").val();
	console.log("Usuario seleccionado: "+parametros);
	$.ajax({
		url:"ajax/ajax-traer-info-usuarios.php",
		data:parametros,
		method:"POST",
		dataType:"json",
        success: function(respuesta){
			 console.log(respuesta);
			 $("#img-usuario").attr("src",respuesta.urlImagen);
			 $("#nombre-usuario").html(respuesta.nombre);
			 $("#nombre-usuario").html(respuesta.apellido);
			 $("#apodo-usuario").html(respuesta.usuario);
			 $("#tweets-usuario").html(respuesta.tweets);
			 $("#following-usuario").html(respuesta.following);
			 $("#followers-usuario").html(respuesta.followers);
        },
        error:function(error){
            console.log(error);
        }
     });
});

/*************************publicar tweets************************************************** */
$("#publicar-tweets").click(function(){
	
	
	var tweets="usuario="+$("#slc-usuario").val()+"&tweet="+$("#texto-tweet").val()+
	"&hashtags="+$("#texto-Hashtags").val();
	console.log("parametros a mandar"+tweets);

	$.ajax({
		url:"ajax/ajax-guardar-tweet.php",
		data:tweets,
		method:"POST",
		dataType:"html",
        success: function(respuesta){
			 console.log("la respuesta del servidor es:  "+respuesta);
			 location.reload();
        },
        error:function(error){
            console.log(error);
        }
     });
});