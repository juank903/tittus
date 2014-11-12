$(document).ready(function(){

	$('#pedidos').click(function(e){

		var total_pedido= 0;

		var id = e.target.id;
		var nombre_pizza = id.split("_");
		var nombre_pizza_p = "#"+nombre_pizza[0];
		var nombre_pizza_p_s = "#"+nombre_pizza[0].toLowerCase();
		var cantidad_pizza_p = "#"+nombre_pizza[0]+"_cant";
		var cantidad_pizza_p_s = nombre_pizza_p_s+"_cant";
		var qty_plus = "#"+nombre_pizza[0]+"_qtyplus";

		var valor_pizza_p = nombre_pizza[0].charAt(0).toUpperCase()+nombre_pizza[0].slice(1);
		var valor_pizza_p = nombre_pizza[0].charAt(0).toUpperCase()+nombre_pizza[0].slice(1);
		var tipo_pizza_p = nombre_pizza_p + "_subtotal";
		var tipo_pizza_p_s = nombre_pizza_p_s + "_subtotal";
		var tipo_pizza_p_s_t = nombre_pizza_p_s + "_tipo";
		var clear = nombre_pizza_p+"_clear";
		//alert($("#"+id).attr('class'));
		//alert($(":input[name="+valor_pizza_p+"]:checked").val());
		//alert($("#"+id).attr('class'));
		//alert($(nombre_pizza_p + " option:selected").attr("id"));
		



     // Este botón incrementará el valor
     if("#"+id==qty_plus){
			//como comparar el id con el nombre del check
			//alert("#"+$("input:radio[name="+valor_pizza_p+"]:checked").attr('id')==nombre_pizza_p+"_rad_1");
			//negar la expresión anterior
			//alert(!("#"+$("input:radio[name="+valor_pizza_p+"]:checked").attr('id')==nombre_pizza_p+"_rad_1"));

		if(!("#"+$("input:radio[name="+valor_pizza_p+"]:checked").attr('id')==nombre_pizza_p+"_rad_1") && !("#"+$("input:radio[name="+valor_pizza_p+"]:checked").attr('id')==nombre_pizza_p+"_rad_2")&& !("#"+$("input:radio[name="+valor_pizza_p+"]:checked").attr('id')==nombre_pizza_p+"_rad_3")){

			$(nombre_pizza_p).prop('checked', true);
			$("input[name="+valor_pizza_p+"]").prop('checked',true);
		}
		/*if($(nombre_pizza_p).prop('checked')){
			//$(nombre_pizza_p).prop('checked', true);
			alert($(nombre_pizza_p).prop('checked'));
			alert(nombre_pizza_p+"_rad_1");
			alert($("input[name="+valor_pizza_p+"]").prop('checked'));
		}*/

	  //alert("usted presionó ..."+qty_plus);
          // Prevenir que actúe como un verdadero botón

          // Obtener el nombre del campo
          fieldName = $("#"+id).attr('field');

          // Obtener su valor actual
          var currentVal = parseInt($('input[name='+fieldName+']').val());
          // Si está definido (si ya contiene un valor)
          if (!isNaN(currentVal)) {
               // Incrementarlo
               $('input[name='+fieldName+']').val(currentVal + 1);
          } else {
               // De lo contrario, poner el campo en 0
               $('input[name='+fieldName+']').val(0);
          }
     }
     // Este botón decrementará el valor hasta 0
     if("#"+id==nombre_pizza_p+"_qtyminus"){

	  //alert("usted presionó ..."+nombre_pizza_p+"_qtyminus");
          // Obtener el nombre del campo
          fieldName = $("#"+id).attr('field');
          // Obtener su valor actual
          var currentVal = parseInt($('input[name='+fieldName+']').val());
          // Si el valor está definido y es mayor a 0
          if (!isNaN(currentVal) && currentVal > 0) {
               // Decrementar
               $('input[name='+fieldName+']').val(currentVal - 1);
          } else {
               // De otra forma, poner el campo en 0
               $('input[name='+fieldName+']').val(0);
          }
     }


//'input:radio[name=edad]:checked').val()

		if ("#"+id == nombre_pizza_p){
			if($(nombre_pizza_p).prop('checked')){
				//$(nombre_pizza_p).prop('checked', true);
				$("input[name="+valor_pizza_p+"]").prop('checked', true);
				$(cantidad_pizza_p).val(1);
				//alert ($(":input[name="+valor_pizza_p+"]:checked").val());
				//total=(cantidad_pizza_p).val()*(valor_pizza_p).val();
			}else{
				$(nombre_pizza_p).prop('checked', false);
				$(cantidad_pizza_p).val(0);
				$("#valor_total_pedido").val(0);
				$("input[name="+valor_pizza_p+"]").prop('checked', false);
			}
		}



		if ($("#"+id).attr("class")=="select"){
			$(tipo_pizza_p_s_t).val( $(nombre_pizza_p + " option:selected").attr("id") );
			$(nombre_pizza_p_s).prop('checked', true);
			if ($(cantidad_pizza_p_s).val()==0)
				$(cantidad_pizza_p_s).val(1);

			$(tipo_pizza_p_s).val( ($('#'+valor_pizza_p).val()*$(cantidad_pizza_p_s).val()).toFixed(2) );


		}






		if ($("#"+id).attr("class")=="radio"){
			if("#"+$("input:radio[name="+valor_pizza_p+"]:checked").attr('id')==nombre_pizza_p+"_rad_1" || "#"+$("input:radio[name="+valor_pizza_p+"]:checked").attr('id')==nombre_pizza_p+"_rad_2" || "#"+$("input:radio[name="+valor_pizza_p+"]:checked").attr('id')==nombre_pizza_p+"_rad_3"){

				$(nombre_pizza_p).prop('checked', true);
				if ($(cantidad_pizza_p).val()==0)
					$(cantidad_pizza_p).val(1);
			}

		}

		if ("#"+id == cantidad_pizza_p){
			$("input[name="+valor_pizza_p+"]").prop('checked', true);
			$(nombre_pizza_p).prop('checked', true);
			if($(cantidad_pizza_p).val()==0)
				$(cantidad_pizza_p).val(1);
			//$("input[name="+valor_pizza_p+"]").prop('checked', true);

		}



		if($(cantidad_pizza_p).val()!=0) {
			if("#"+$("input:radio[name="+valor_pizza_p+"]:checked").attr('id')==nombre_pizza_p+"_rad_1" || "#"+$("input:radio[name="+valor_pizza_p+"]:checked").attr('id')==nombre_pizza_p+"_rad_2" || "#"+$("input:radio[name="+valor_pizza_p+"]:checked").attr('id')==nombre_pizza_p+"_rad_3"){
				$(tipo_pizza_p).val( ($(":input[name="+valor_pizza_p+"]:checked").val()*$(cantidad_pizza_p).val()).toFixed(2) );

			}else{
				$(tipo_pizza_p_s).val( ($('#'+valor_pizza_p).val()*$(cantidad_pizza_p_s).val()).toFixed(2) );

			}
			
		}else{
			$(tipo_pizza_p).val(0);
				$(nombre_pizza_p).prop('checked', false);
				$(cantidad_pizza_p).val(0);
				$("input[name="+valor_pizza_p+"]").prop('checked', false);
		}


			$('.subtotal').each( function( key, value ) {
				total_pedido+= eval($(this).val());
				if (total_pedido !=0){
					$("#valor_total_pedido").val(total_pedido.toFixed(2));
				}else{
					$("#valor_total_pedido").val(0);
				}
			});


		if($(nombre_pizza_p).prop('checked')){
			$(clear).click(function() {
				$(nombre_pizza_p).prop('checked', false);
				$(cantidad_pizza_p).val(0);
				$("input[name="+valor_pizza_p+"]").prop('checked', false);
			});
		}


	});



});







