
function adicionaTags(){
	var select = document.getElementById("select-multiple");
	var quantidadeSelecionados = 0;
	inserirPainel();
	document.getElementById("tags_1_tagsinput").innerHTML = "";

	for (var i = 0; i < select.options.length; i++) {
		var option = select.options[i];
		if (option.selected){			
	
			// Não incluir tags repetidas.. verificando
			var valorTag = "tag-" + i;
			var x = document.getElementById(valorTag);
			if(!x){
				var aux = '<span style="background-color: #E4E4E4" class="tag tag-'+ i +'" id="tag-' + i + '" ><span style="color: #73979c">' + option.value + '&nbsp;&nbsp;</span><a href="#" title="Removing tag" style="color: #73979c" onclick="removeTag(' + "'" + 'tag-' + i + "')" + '">x</a></span>';
				document.getElementById("tags_1_tagsinput").innerHTML += aux;	
			}
			
			//<span class="tag" id="tag-1" ><span>social&nbsp;&nbsp;</span><a href="#" title="Removing tag" onclick="removeTag('tag-1')">x</a></span>
			quantidadeSelecionados++;
		}	
	}

}

function removeTag(valor){
	//alert('Jesus');
	document.getElementById(valor).remove();
}

function verId(){
	var x = document.getElementsByClassName("tag");
	//alert(x[0].id);
	alert(x.length);
}

function inserirPainel(){

	var painel = 
	'<div class="panel panel-default">' + 
	'<div class="panel-heading " style="color: #73979c">Equipamentos Selecionados:</div>' + 
	'<div class="panel-body">' + 
	
	'<div id="tags_1_tagsinput" class="" style="width: auto; min-height: 100px; height: 100px; border: none">' + 
	'</div>' + 
	'<div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>' +
	'</div>' + 
	'</div>'
	;

	document.getElementById("painel").innerHTML = painel;
	//tagsinput
	//'<input id="tags_1" type="text" class="tags form-control" value="social, adverts" data-tagsinput-init="true" style="display: none;">' + 
}



$("#select-contrato").change(function(e){
	var contrato = $(this).val();
	if (!contrato){return;}
	$('#select-pavimentos').val(null).trigger('change');
	$('#select-sistemas').val(null).trigger('change');
	document.getElementById("row-bloco").style.display="none";
	document.getElementById("row-pavimentos").style.display="none";
	GetBloco(contrato);
	GetTecnico(contrato);
});

$("#select-bloco").change(function(e){
	var bloco = $(this).val();
	e.preventDefault();
	$.ajax({

		type:'POST',
		url:'/Pavimento/List',
		data:{bloco:bloco},
		success:function(data){
			var elementoHtml = "";
			$.each(data.List, function( index, value ) {
				elementoHtml += '<option value="' + value['cev_integrationid'] + '">' + value['cev_description'] + '</option>'; 
			});
			
			document.getElementById("select-pavimentos").innerHTML = elementoHtml;
			document.getElementById("row-pavimentos").style.display="block";
			
		}
	});
});

/*
Ao selecionar pavimentos devo mostrar sistemas
*/
$("#select-pavimentos").change(function(e){
	
	document.getElementById("bnt-preventiva").removeAttribute('disabled');

	e.preventDefault();
	var bloco = document.getElementById("select-bloco").value;
	var pavimento = $(this).val();
	
	$.ajax({
		
		type:'POST',
		url:'/Sistema/List',
		data:{pavimento:pavimento,bloco:bloco},
		success:function(data){
			
			var elementoHtml = "";
			// criar option para sistemas
			$.each(data.List, function( index, value ) { 
				elementoHtml += '<option value="' + value['isg_description'] + '">' + value['isg_description'] + '</option>'; 
			});
			
		
			document.getElementById("select-sistemas").innerHTML = elementoHtml;
			document.getElementById("row-sistemas").style.display="block";
			$('#select-sistemas').trigger('change');
		}
	});
});


$("#select-sistemas").change(function(e){
	var blocoSelecionado = null;
	
	var bloco = $("#select-bloco").val();
	var sistema = $("#select-sistemas").val();
	var pavimento = $("#select-pavimentos").val();
		
	e.preventDefault();
	
	$.ajax({

		type:'POST',
		url:'/Equipamento/List',
		data:{bloco:bloco,pavimento:pavimento,sistema:sistema},
		success:function(data){
			
			var elementoHtml = "";
			$.each(data.List, function( index, value ) {
				//loc_integrationid 
				elementoHtml += '<option value="' + value['ite_integrationid'] + '">' + value['ite_description'] + '</option>'; 
			});
			document.getElementById("select-equipamento").innerHTML = elementoHtml;
			document.getElementById("row-equipamentos").style.display="block";
		}
	});
});
$("#select-equipamento").change(function(e){
	if($('#tecnico option').size() > 1){
		$('#divTecnico').show();
	}else{
		$('#divTecnico').hide();
	}
	$('#div-data').show();
});

// evento para o botão data

function enviaPrev(){
	$("#sucesso").hide()
	$("#erro").hide() 
	
	var pavimento = [];
	var sistemas = []; 
	var equipamentos = [];
	var dataTime;
	
	// obter Contrato
	var contrato = $('#select-contrato').val();
	// obter Bloco
	var bloco = $('#select-bloco').val();
	// obter pavimentos
	var pavimentos = $("#select-pavimentos").val();
	pavimentos.toString();
	// obter sistemas
	var sistemas = $("#select-sistemas").val();
	sistemas.toString();
	// oter Técnico	
	var tecnico = $("#tecnico").val();
	// obter equipamentos
	var equipamentos = $("#select-equipamento").val();
	equipamentos.toString();
	// obter data
	dataTime = document.getElementById("data").value;
	var data = dataTime.substring(0, 10);
	var hora = dataTime.substring(11, 16);

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	var request = {preventiva:pavimentos, sistema:sistemas, dataAgendada:data, horaAgendada:hora, cliente:bloco, item:equipamentos,tecnico:tecnico };
	
	$.ajax({
		
		type:'POST',
		url:'/enviarTarefa',
		data: request,
		success:function(data){
			//console.log(data);
			$("#sucesso").show()
			
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			//console.log(XMLHttpRequest);
			//alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest + textStatus + errorThrown); 
			$("#erro").show() 
		}  
		
	});
	

	

};

function GetTecnico(contrato){
	$.ajax({
       
		type:'POST',
		url:'/consultaTecnico',
		data:{contrato:contrato},
		success:function(data){
			//console.log(data);
			var elementoHtml = "";
			// criar option para blocos
			if (data.qtd > 0){
				var count = data.qtd;
				//console.log("quant tec");
				//console.log(count);
				for (i = 1; i <= count; i++) { 
					elementoHtml += '<option value="' + i + '">' + 'Técnico' +i+ '</option>'; 
				}	
			}else{
				elementoHtml = '<option value="1" selected>Técnico1</option>';
				$('#divTecnico').hide();
			}
			document.getElementById("tecnico").innerHTML = elementoHtml;
			
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			//console.log(XMLHttpRequest);
			//alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest + textStatus + errorThrown);  
		}  
	});
}
function GetBloco(contrato){
	$.ajax({

		type:'POST',
		url:'/Bloco/List',
		data:{contrato:contrato},
		success:function(data){
			var elementoHtml = "";
			// criar option para blocos
			$.each(data.List, function( index, value ) {
				// segunda coluna de lista de bloco loc_integrationid
				elementoHtml += '<option value="' + value['loc_integrationid'] + '">' + value['cev_description'] + '</option>'; 
			});

			document.getElementById("select-bloco").innerHTML = elementoHtml;
			document.getElementById("row-bloco").style.display="block";
			$('#select-bloco').trigger('change');
		}
	});
}
function GetEquipamento(){
	
}




$('#datetimepicker1').change(function (e){
	
	$('#divbtn').show();
	$('#limpa').show();
});

function limpar(){
	window.location.href = "/agendamentopv"
}
