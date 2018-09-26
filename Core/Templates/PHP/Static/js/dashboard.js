$("#contratoDash").change(function(e){
   
    var contrato = $('#contratoDash').val();
    
    $.ajax({
		type:'POST',
		url:'/Bloco/List',
		data:{contrato:contrato},
		success:function(data){
      var locais = [];
      var elementoHtml;
      //console.log(data);
			// criar option para blocos
			$.each(data.List, function( index, value ) {
        // segunda coluna de lista de bloco loc_integrationid
        locais += "'"+value['loc_integrationid']+"'"+',';
        elementoHtml += '<option value="' + value['loc_integrationid'] + '">' + value['cev_description'] + '</option>'; 
      });
            
      if (data.List.length > 1){
          locais = locais.slice(0, -1);
          var elementoHtml2 = '<option value="'+locais+'">Todos</option>';
          document.getElementById("blocoDash").innerHTML = elementoHtml2;
          document.getElementById("blocoDash").innerHTML += elementoHtml;
      }else{
          document.getElementById("blocoDash").innerHTML = elementoHtml;
      }
			
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {  
        alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest+textStatus+errorThrown);  
    }  
	});
})

function mostrarPainel(){
  $('#tableDash').html('<img src="img/load.gif" style="margin-left: 50%" width="5%"/>');
    //$("#tableDash").html('')
    var bloco = $("#blocoDash").val()
    var sistema = $("#dashSis").val()
    var daterage = $('#daterange').val()
   
  $.ajax({
    url: "/Dashboards/tabelaDash",
    data:{bloco: bloco, sistema: sistema, daterage: daterage},
    type: "POST",
    success:function(data){
      //console.log(data)
      $("#tableDash").html(data)
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {  
        alert("Ocorreu um erro na requisição ajax"+XMLHttpRequest+textStatus+errorThrown);  
    }  
  })

  }

  function abrirDetalhes(id,item){
      
    $.ajax({
      url: "/Dashboards/detalhesTarefa",
      data:{tarefa:id,item:item},
      type:"POST",
      success: function(data){
          //console.log(data);
        $("#modalTarefa").html(data);
        $("#myModal2").modal('show');
      }
    })
  }