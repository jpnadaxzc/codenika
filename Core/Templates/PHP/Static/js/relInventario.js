
 $('#datatable').DataTable({
    responsive: true
});

$("#select_contrato").change(function(e){
    $('#table').hide();
    var contrato = $('#select_contrato').val();
    $.ajax({
		type:'POST',
		url:'/Bloco/List',
		data:{contrato:contrato},
		success:function(data){
            
            if (data.List.length > 1){
                var elementoHtml = '<option value="">Todos</option>';
            }else{
               var elementoHtml = '';
            }
           //console.log(data);
			// criar option para blocos
			$.each(data.List, function( index, value ) {
                // segunda coluna de lista de bloco loc_integrationid
				elementoHtml += '<option value="' + value['loc_integrationid'] + '">' + value['cev_description'] + '</option>'; 
			});

			document.getElementById("select_bloco").innerHTML = elementoHtml;
			
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {  
            //alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest+textStatus+errorThrown);  
        }  
	});
})

function valida(){
    
    var contrato = $('#select_contrato').val();
    if (contrato == ''){
        $('#myModal').modal('show')
        return false
    }
    
    relInventario();
}

function relInventario(){

    $('#table').html('<img src="img/load.gif" style="margin-left: 50%" width="5%"/>');
    $('#table').show();
    $('#msg').html('');
    var contrato = $('#select_contrato').val();
    var bloco = $('#select_bloco').val();
    var ativo = $('#select_ativo').val();
    $.ajax({
		type:'POST',
		url:'/relinventario',
		data:{contrato:contrato,bloco:bloco,ativo:ativo},
		success:function(data){
            $('#table').html(data);
            $('#table').show();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
            $('#table').html('<div class="alert alert-danger"><strong>Erro!</strong> Houve um erro.<br/>Status 500</div>') 
            //alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest+textStatus+errorThrown);  
        }  
    });
}

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

function editar(id){
    $('#msg').html('');
    $('#ModalEdit').html('');
    $.ajax({
      type: "POST",
      url: "editaItem",
      data:{id:id},
      success: function(data) {
        
        $('#ModalEdit').html(data);
        
      }
    });
}

function validaSalv(id){
    
    $('#erroqr').hide();
    $('#errolocal').hide();
    $('#errolocal2').hide();
    $('#erropav').hide();
    $('#errosis').hide();
    var pavimentointerno = $('#pavimentosEDIT').val();
    var qrcode = $('#qrcode').val();
    var local = $('#localitem').val();
    var localizacao = $('#localizacao2').val();
    var pavimento = $('#pavimentointerno').val();
    var sistema = $('#sistemas').val();
    var tempoexecucao = $('#tempoexecucao').val();
    var prioridade = $('#prioridade').val();
    var periodo = $('#periodo').val();
    
    var chave
    if(qrcode == ''){
        $('#qrcode').focus();
        $('#erroqr').show();
        chave = 1
    }
    if(tempoexecucao == ''){
        $('#tempoexecucao').focus();
        $('#errotempoexecucao').show();
        chave = 1
    }
    if(prioridade == ''){
        $('#prioridade').focus();
        $('#erroprioridade').show();
        chave = 1
    }
    if(periodo == ''){
        $('#periodo').focus();
        $('#erroperiodo').show();
        chave = 1
    }
    if(local == ''){
        $('#localitem').focus()
        $('#errolocal').show();
        chave = 1
    }
    if(localizacao == ''){
        $('#localizacao').focus()
        $('#errolocal2').show();
        chave = 1
    }
    if(pavimento == ''){
        $('#pavimentosEDIT').focus()
        $('#erropav').show();
        chave = 1
    }
    if(sistema == ''){
        $('#sistemas').focus()
        $('#errosis').show();
        chave = 1
    }
    if(chave == 1){
        return false;
    }
   
    salvarEdit(id)
    
}

function salvarEdit(id){
    
    var pavimentointerno = $('#pavimentosEDIT').val();
    var qrcode = $('#qrcode').val();
    var local = $('#localitem').val();
    var localizacao = $('#localizacao2').val();
    var pavimento = $('#pavimentosEDIT :selected').text();
    var sistema = $('#sistemas').val();
    var descricao = $('#descricao').val();
    var tempoexecucao = $('#tempoexecucao').val();
    var prioridade = $('#prioridade').val();
    var periodo = $('#periodo').val();
  
    $.ajax({
      type: "POST",
      url: "salvaAlteraItem",
      data:{id:id,sistema:sistema,descricao:descricao,pavimento:pavimento,local:local,qrcode:qrcode,pavimentointerno:pavimentointerno,localizacao:localizacao,tempoexecucao:tempoexecucao,prioridade:prioridade,periodo:periodo},
      success: function(data) {
         
        
      },
       error: function(XMLHttpRequest, textStatus, errorThrown) {
        console.log(XMLHttpRequest);
        //alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest + textStatus + errorThrown);  
    }  

    });
    relInventario()
  }

function perguntarInv(id,status,desativar){

_id = id;
_desativar = desativar;
if(status == 0){
    
    $('#DivModal1').html('');
    $.ajax({
        type: "POST",
        url: "desativaItem",
        data:{id:id},
        success: function(data) {
        
        $('#DivModal1').html(data);
        $('#DivModal1').show();
        
        
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
        console.log(XMLHttpRequest);
        //alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest + textStatus + errorThrown);  
        }  
    });

}else if(status == 1){
    
    $('#DivModal3').html('');
    $.ajax({
        type: "POST",
        url: "ativaItem",
        data:{id:id},
        success: function(data) {
            
            $('#DivModal3').html(data);
            $('#DivModal3').show();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
        console.log(XMLHttpRequest);
        //alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest + textStatus + errorThrown);  
        }  
    });
}
}
  
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

function desativar(_id){
    $('#msg').html('');
var justificativa = $("#justificativa").val()
    $.ajax({
        url: "/Inventario/desativar",
        data: {id:_id,status:0,justificativa:justificativa,desativar:_desativar},
        type: "POST",
        success: function(data){
            if (data.status){
                $('#msg').html("<div class='alert alert-success' > <strong>"+data.msg+"</strong></div>").focus();
            }else{
              $('#msg').html("<div class='alert alert-danger' > <strong>"+data.msg+"</strong></div>").focus();
            }
            
        //alert(data)
        //$("#modal2").modal("show")
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
        console.log(XMLHttpRequest);
        //alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest + textStatus + errorThrown);  
        }  
    })
    relInventario();
}

function ativar(_id){
    $('#msg').html('');
    $.ajax({
      url: "/Inventario/desativar",
      data: {id:_id,status:1},
      type: "POST",
      success: function(data){
          //console.log(data.resDesativ)
          if (data.status){
              $('#msg').html("<div class='alert alert-success' > <strong>"+data.msg+"</strong></div>").focus();
          }else{
            $('#msg').html("<div class='alert alert-danger' > <strong>"+data.msg+"</strong></div>").focus();
          }
      }
    })
    relInventario();
  }
