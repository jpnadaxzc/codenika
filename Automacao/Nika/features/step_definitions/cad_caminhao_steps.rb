                                                                                
Dado("que o adm esteja na pagina de cadastro de caminhoes") do                                   
  	visit "http://52.206.13.179"
	find('input[name="login"]').set 'admin'
	find('input[name="senha"]').set 'admin'
	click_button('Entrar')
	find(:xpath, '/html/body/div[1]/div/div[2]/div[2]/ul/li[1]/a').click
	find(:xpath, '/html/body/div[1]/div/div[2]/div[2]/ul/li[1]/ul/li[1]/a').click 
	find(:xpath, '/html/body/div[1]/div/div[2]/div[2]/ul/li[1]/ul/li[1]/ul/li[3]/a').click
end                                                                             
                                                                                
Quando("preencher as informacoes do caminhao solicitadas") do
	fill_in('modelo', :with => 'Modelo1')
	fill_in('cor', :with => 'Branco')
	fill_in('placa', :with => '1234-ABC')
	fill_in('chassis', :with => 'Modelo1')
end

Entao("visualizo a msg de caminhao cadastrado") do                              
	assert_text("Caminhão Cadastrado com sucesso")	 
end                                                                             
                                                                                
Quando("nao preencher as informacoes do caminhao solicitada") do                           
	fill_in('modelo', :with => 'Modelo1')
	fill_in('cor', :with => 'Branco')
	fill_in('placa', :with => '1234-ABC')
	fill_in('chassis', :with => 'Modelo1')
end                                                                             
                                                                                
Entao("visualizo a msg de estes campos referente ao caminhao sao obrigatorios") do                                                                              
	assert_text("  Campo Obrigatorio")  
end                                                                             
                                                                                
Quando("preencher as informacoes com a de um caminhao existente") do            
	fill_in('modelo', :with => 'Modelo1')
	fill_in('cor', :with => 'Branco')
	fill_in('placa', :with => '1234-ABC')
	fill_in('chassis', :with => 'Modelo1')
end                                                                             
                                                                                
Entao("visualizo a msg de caminhao ja cadastrado") do                           
	assert_text("Este caminhão já está cadastrado")  
end                                                                             
                                                                                