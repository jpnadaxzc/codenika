

$("#selectContCorre").change(function(e){
	
	var contrato = $('#selectContCorre').val();
	document.getElementById("selectBlocoCorre").innerHTML = '';
	document.getElementById("selectPav").innerHTML = '';
	document.getElementById("selectSis").innerHTML = '';
	document.getElementById("selecEqui").innerHTML = '';
	
	$('input[name=inlineRadioOptions]').prop('checked', false);
	
	$("#sucesso").hide();
	$("#erro").hide();
	$("#blo").hide(); 
	$("#pav").hide();
	$("#sis").hide();
	$("#equi").hide();
	$("#tec").hide();
	$("#mot").hide();
	$("#mot").val('');
	$("#dat").hide();
	$("#btn").hide();
	
	
    $.ajax({
		type:'POST',
		url:'/Bloco/List',
		data:{contrato:contrato},
		success:function(data){
           //console.log(data.List);
            if (data.List.Length > 1){
                var elementoHtml = '<option value="">Todos</option>';
            }else{
               var elementoHtml = '';
            }
          
			// criar option para blocos
			$.each(data.List, function( index, value ) {
                // segunda coluna de lista de bloco loc_integrationid
				elementoHtml += '<option value="' + value['loc_integrationid'] + '">' + value['cev_description'] + '</option>'; 
			});
            
			document.getElementById("selectBlocoCorre").innerHTML = elementoHtml;
			$("#selectBlocoCorre").change();
			
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {  
            //console.log(XMLHttpRequest);
            //alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest+textStatus+errorThrown);  
        }  
	});
	$("#blo").show();
})

$("#selectBlocoCorre").change(function(e){
   
    var bloco = $('#selectBlocoCorre').val();
	carregarCorretivas()
    $.ajax({
		type:'POST',
		url:'/consuPavs',
		data:{bloco:bloco},
		success:function(data){
			
            var elementoHtml = '';
            //console.log(data)
			$.each(data.listaDePavimentos, function( index, value ) {
                
				elementoHtml += '<option value="' + value['cev_integrationid'] + '">' + value['cev_description'] + '</option>'; 
			});
            
			document.getElementById("selectPav").innerHTML = elementoHtml;
			
			
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {  
            //console.log(XMLHttpRequest);
            alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest+textStatus+errorThrown);  
        }  
	});
	$('#tipoativ').show();
	
})

$("#selectPav").change(function(e){
    
	var pavimento = $('#selectPav').val();
	var bloco = $('#selectBlocoCorre').val();
    
    $.ajax({
        type:'POST',
		url:'/Sistema/List',
		data:{bloco:bloco,pavimento:pavimento},
        success:function(data){
           
            var elementoHtml = '';
            
			$.each(data.List, function( index, value ) {
                
				elementoHtml += '<option value="' + value['isg_id'] + '">' + value['isg_description'] + '</option>'; 
			});
            
			document.getElementById("selectSis").innerHTML = elementoHtml;
			$('#selectSis').trigger('change');
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {  
            //console.log(XMLHttpRequest);
            //alert("Ocorreu um erro na requisição ");  
        }  
    });
	$("#sis").show();
})

$("#selectSis").change(function(e){
	
	var bloco = $("#selectBlocoCorre").val();
	var sistema =$("#selectSis").find(":selected").text()
	var pavimento = $("#selectPav").val();
	// console.log(bloco)
	// console.log(sistema)
	// console.log(pavimento)
	// console.log($("#selectSis").find(":selected").text())
	$.ajax({

		type:'POST',
		url:'/Equipamento/List',
		data:{bloco:bloco,pavimento:pavimento,sistema:sistema},
		success:function(data){
			//console.log(data.listaEquipamentos)
			var elementoHtml = "<option></option>";
			// criar option para ITEM
			 //console.log(data.List)
			
			$.each(data.List, function( index, value ) {
				//loc_integrationid 
				elementoHtml += '<option value="' + value['ite_integrationid'] + '">' + value['ite_description'] + '</option>'; 
			});
			
			document.getElementById("selecEqui").innerHTML = elementoHtml;
			
		},
		erro:function(XMLHttpRequest){
			//console.log(XMLHttpRequest);
			alert("erro");
		}
	});
	$("#equi").show();
});

$("#inputEqui").change(function(e){
	$("#tec").show()
})
$("#selecEqui").change(function(e){
	$("#tec").show()
})

$("#tecnico").change(function(e){
	$("#mot").show()
	$("#dat").show()
})

$("#data").change(function(e){
	$("#btn").show()
})


function abreformManual(){
    $('#formManual').show();
}

function especial(){

    $('#equipEspecial').show();
    $('#equipCorre').hide();
    $('#pav').show();
}

function corretiva(){
    $('#equipEspecial').hide();
    $('#equipCorre').show();
    $('#pav').show();
}

function atribuirCorretivaManualmente(){
	$("#msg").html('');
	$('#gif').show();
	var equipamento ='';
	var equipamento2 = '';
	var radio = $("input[name='inlineRadioOptions']").filter(':checked').val();
	if (radio == '1'){
		 equipamento = $("#selecEqui").val();
	}else{
		 equipamento2 = $("#inputEqui").val();
	}
	var local = $("#selectBlocoCorre").val();
	var pavimento = $("#selectPav").val();
	var sistema = $("#selectSis").val();
	
	
	var data = $("#data").val()
	var cliente = "<?php echo empty($local_idalternativo) ? '' :  $local_idalternativo; ?>";
	var tecnico = $("#tecnico").val()
	var motivo = $("#motivo").val()
	 if(sistema == ""  || cliente == "" || local == ""  || tecnico == "" || motivo == "" ){
	  alert("Todos os campos sao de preenchimento obrigatório")
   }else{
	 $.ajax({
	   url:"atribuirCorretivaManualmente",
	   type:"POST",
	   data:{local:local,tecnico:tecnico,sistema:sistema,item:equipamento,cliente:cliente,motivo:motivo,dataAgendada:data,item2:equipamento2,tipo:radio,pavimento,pavimento},
	   success:function(data){
		   //console.log(data)
		$('#gif').hide();
		$("#msg").html(data.resAtribui);
	   },
	   error: function (data) {
		//console.log(data)
		$('#gif').hide();
		$("#msg").html("<div class='alert alert-danger'><strong>Erro!<strong> Houve um erro ao incluir a corretiva.<br/>erro: stauts 500</div>");
		}
	 })
   }
}

function carregarCorretivas(){
	var contrato = $('#selectBlocoCorre').val();
	
	$.ajax({
	url: 'carregarCorretiva',
	data: {local:contrato},
	type: "POST",
	success:function(data){
		//console.log();
		$("#resTable").html(data)
	},erro:function(XMLHttpRequest){
		//alert("erro");
	}
	})

}

function escolherTecnico(){
	$("#msg2").html("");
	var chklista = $('input[name="chklista"]:checked').toArray().map(function(check) { 
		return $(check).val(); 
	});   
	if(chklista.length == 0){
		alert("Selecione pelo menos uma corretiva")
	}else{
		
		$.ajax({
			url: 'carregarModal',
			type: "POST",
			data:{chklista:chklista},
			success:function(data){
				//console.log();
				$("#resModal").html(data)
			},erro:function(XMLHttpRequest){
				alert("erro");
			}
		})

	}
}
function atribuiTarefa(chklista){
    var tecnico = $("#tecnicoModal").val();
	var dataAgendada = $("#datamod").val();
	var chklista = $("#tasks").val();
	
	$.ajax({
		url:"atribuircorretiva",
		type:"POST",
		data:{requestids:chklista,tecnico:tecnico,dataAgendada:dataAgendada},
		success:function(data){
			//console.log(data);
			if(data.status){
				$("#msg2").html("<div class='alert alert-success'><strong>Sucesso!</strong> "+data.msg+".<br/>Sistema atualizará em até 2 minutos,Por favor aguarde...</div>").focus();
				carregarCorretivas();
				setTimeout(function(){ $("#msg2").html(""); }, 120000);
				
			}else{
				$("#msg2").html("<div class='alert alert-danger'><strong>Erro!<strong>"+data.msg+".</div>").focus();
				
			}
			
			//alert(data)
		},
		error: function (data) {
			
			alert(data);
		}
	})
}