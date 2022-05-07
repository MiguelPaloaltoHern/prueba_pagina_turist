$.ajax({
	url: "/api/getWeather",
	data: {
	  zipcode: 97201
	},
	success: function( result ) {
	  $( "#weather-temp" ).html( "<strong>" + result + "</strong> degrees" );
	}
  });




$("#actu").click(function(){
	var recolec = $('#cambiar').serialize();

	$.ajax({
		url: './php/actualizar.php',
		type: 'POST',
		data: recolec,

		success:function(vs){
			alert(vs);
		}
	})
})