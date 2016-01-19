var cuotas = {

	init: function(){

		$('#checkCuotas').on('switchChange.bootstrapSwitch', function(event, state) {
		//Si state en true, la asigancion es manual, si es false es automatica
		if(state==false){
			$("#cuotas").attr('disabled','disabled');
			$("#comienzoDeCuotas").attr("disabled", "disabled");
		}
		if (state==true){
			$("#comienzoDeCuotas").attr("disabled", false);
			$("#cuotas").attr("disabled", false); 
		}
		});
	}
}

var descuento = {

	init: function(){

		$('#checkDescuento').on('switchChange.bootstrapSwitch', function(event, state) {
		//Si state en true, la asigancion es manual, si es false es automatica
		if(state==false){
			$("#descuento").attr('disabled','disabled');
			$("#tipoDeDescuento").attr("disabled", "disabled");
		}
		if (state==true){
			$("#tipoDeDescuento").attr("disabled", false);
			$("#descuento").attr("disabled", false); 
		}
		});
	}
}