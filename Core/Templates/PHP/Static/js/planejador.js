$("#select-contrato-impot").change(function(e){
    var contrato = $('#select-contrato-impot').val();
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

            document.getElementById("select-bloco-impot").innerHTML = elementoHtml;
            $('#row-bloco-imp').show();
			
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {  
            //alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest+textStatus+errorThrown);  
        }  
	});
})

$('#tec').change(function(){
    $('#tableInc').html('');
    $('#msgAgendamento').html('');
});

$('#contratoDash').change(function(){
    $('#tableInc').html('');
    $('#msgAgendamento').html('');
});

$('#blocoDash').change(function(){
    $('#tableInc').html('');
    $('#msgAgendamento').html('');
});

$('#daterange2').change(function(){
    $('#tableInc').html('');
    $('#msgAgendamento').html('');
});


function visualizar(){
    
    if($('#contratoDash').val() == 'Selecione um contrato'){
        $('#tableInc').html('<div class="alert alert-danger"><strong>Erro!</strong> Selecione um contrato e um bloco.</div>');
        return false;
    }
    if($('#blocoDash').val() == ''){
        $('#tableInc').html('<div class="alert alert-danger"><strong>Erro!</strong> Selecione um  bloco.</div>');
        return false;
    }
    $('#tableInc').html('<img src="img/load.gif" style="margin-left: 50%" width="5%"/>');
    var daterage = $('#daterange2').val();
    var bloco = $('#blocoDash').val();
    var contrato = $('#contratoDash').val();
    var tec = $('#tec').val();
    //var hora = $('#hora').val();
    $("#msgAgendamento").html("");
    
    $.ajax({
      type: "POST",
      url: "/planejador/simulacao",
      data:{daterage:daterage,bloco:bloco,contrato:contrato,tec:tec},
      success: function (data) {
         $('#tableInc').html(data);
         //console.log(data);
      },
      error: function(data) {  
          
        $('#tableInc').html('<div class="alert alert-danger"><strong>Erro!</strong> Houve um erro. '+data.responseText+'<br/>Status 500</div>')
          
      }
      
    })
}
var check = [];
var ncheck = [];

function agendar(){
    $('#msgAgendamento').html('<img src="img/load.gif" style="margin-left: 50%" width="5%"/>');
    $('#blocoDash').val();
    //console.log(check);
    //console.log(ncheck);
    $.ajax({
        type:"POST",
        url:"/planejador/excecao",
        data:{check:check,ncheck:ncheck,bloco:$('#blocoDash').val()},
        success:function(data){
            console.log(data);
            //alert("foi");
        },error:function(data){
            console.log(data);
            //$("#msgAgendamento").html("<div class='alert alert-danger'><strong>Erro!<strong> "+data.responseText+" .</div>")
            //alert("erro");
        }
    })
    
    $("#msgAgendamento").html("");
    $.ajax({
        type:"POST",
        url:"/planejador/gatilho",
        data:{contrato:$('option:checked').attr('inteid')},
        success:function(data){

            $("#msgAgendamento").html("<div class='alert alert-success'><strong>Sucesso!</strong> Agendamento automatico das preventivas liberado</div>");
            
        },error:function(data) {
                
            $("#msgAgendamento").html("<div class='alert alert-danger'><strong>Erro!<strong> "+data.responseText+" .</div>");

        }
    })

    // var sThisVal= [];
    // var oTable = $('#tabelaImport').dataTable();
    // var rowcollection =  oTable.$(".check:checked", {"page": "all"});
    // rowcollection.each(function(){
    //     sThisVal.push({"id":$(this).val(),"valor":$(this).attr('date')});
    //     // sThisVal.push($(this).attr('date'));
    // });
    // //console.log(sThisVal);
    // $('#msgAgendamento').html('<img src="img/load.gif" style="margin-left: 50%" width="5%"/>');
    // $.ajax({
    //     type:"POST",
    //     url:"/planejador/agendar",
    //     data:{arrayAtividades:sThisVal},
    //     success:function(data){
    //         //console.log(data)
    //          $("#msgAgendamento").html(data);
    //         // $("#msgAgendamento").html("<div class='alert alert-success'><strong>Sucesso!</strong> Preventivas agendadas com sucesso</div>")
    //     },
    //     error:function(data) {
    //         $("#msgAgendamento").html("<div class='alert alert-danger'><strong>Erro!<strong> "+data+" .</div>")
    //     }
    // })
}




function excecao(id,data,tec){
    var checado = $("#"+id+"-"+data+"-"+tec).is(':checked');
  
    if(checado == true){
        check.push({id:id,data:data,tec:tec});
        $("#td-"+id+"-"+data+"-"+tec).css("background-color","yellow");
     }else{
         ncheck.push({id:id,data:data,tec:tec});
        //  delete check[id];
         $("#td-"+id+"-"+data+"-"+tec).css("background-color","transparent");
     }
     //console.log(check);
    
}


