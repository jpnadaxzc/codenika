Dado("que o adm esteja na pagina de cadastro de clientes") do                 
  	visit "http://52.206.13.179"
	find('input[name="login"]').set 'admin'
	find('input[name="senha"]').set 'admin'
	click_button('Entrar')
	find(:xpath, '/html/body/div[1]/div/div[2]/div[2]/ul/li[1]/a').click
	find(:xpath, '/html/body/div[1]/div/div[2]/div[2]/ul/li[1]/ul/li[1]/a').click
	find(:xpath, '/html/body/div[1]/div/div[2]/div[2]/ul/li[1]/ul/li[1]/ul/li[2]/a').click 
end                                                                           
                                                                              
Quando("preencher as informacoes de cliente solicitadas") do                             
  	fill_in('nome_cliente', :with => 'João')	
	fill_in('rg', :with => '267583023')
	fill_in('cpf', :with => '05568604037')
	fill_in('endereco', :with => 'Rua Diogo Botelho')
	fill_in('numero_casa', :with => '666')
	fill_in('bairro', :with => 'Vila Guilhermina')
	fill_in('cep', :with => '03541090')
	fill_in('bloco', :with => 'sabia')
	fill_in('ap', :with => '1234')
	select 'São Paulo', :from => 'estado'
 	fill_in('email', :with => 'joao@teste.com.br')
	fill_in('telefone', :with => '(11)4936-5402')
	fill_in('telefone_comercial', :with => '(11)94936-5402')
	fill_in('celular', :with => '(11)94936-5403')
	fill_in('site_cliente', :with => 'www.cliente.com.br')
	fill_in('obervacoes', :with => 'testes')
	find(:xpath, '/html/body/div[2]/div/div/button').click	
	sleep 2
end                                                                           
                                                                              
Entao("visualizo a msg de cliente cadastrado") do                             
	assert_text("Cliente cadastrado com sucesso.") 
end
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#Campos obrigatorios                                                                      
Quando("nao preencher alguma informacao solicitada") do                       
  fill_in('nome_cliente', :with => 'João')	
	fill_in('rg', :with => '267583023')
	fill_in('endereco', :with => 'Rua Diogo Botelho')
	fill_in('numero_casa', :with => '666')
	fill_in('bairro', :with => 'Vila Guilhermina')
	fill_in('cep', :with => '03541090')
	fill_in('bloco', :with => 'sabia')
	fill_in('ap', :with => '1234')
	select 'São Paulo', :from => 'estado'
 	fill_in('email', :with => 'joao@teste.com.br')
	fill_in('telefone', :with => '(11)4936-5402')
	fill_in('telefone_comercial', :with => '(11)94936-5402')
	fill_in('celular', :with => '(11)94936-5403')
	fill_in('site_cliente', :with => 'www.cliente.com.br')
	fill_in('obervacoes', :with => 'testes')
	find(:xpath, '/html/body/div[2]/div/div/button').click	
	sleep 2 
end                                                                           
                                                                              
Entao("visualizo a msg de que cpf eh obrigatorio") do                         
	assert_text("  Campo Obrigatorio")
end                                                                           

#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#Msgs de erro       
Quando("preencher as informacoes do cliente solicitadas") do                             
  	fill_in('nome_cliente', :with => 'João')	
	fill_in('rg', :with => '267583023')
	fill_in('cpf', :with => '05568604037')
	fill_in('endereco', :with => 'Rua Diogo Botelho')
	fill_in('numero_casa', :with => '666')
	fill_in('bairro', :with => 'Vila Guilhermina')
	fill_in('cep', :with => '03541090')
	fill_in('bloco', :with => 'sabia')
	fill_in('ap', :with => '1234')
	select 'São Paulo', :from => 'estado'
 	fill_in('email', :with => 'joao@teste.com.br')
	fill_in('telefone', :with => '(11)4936-5402')
	fill_in('telefone_comercial', :with => '(11)94936-5402')
	fill_in('celular', :with => '(11)94936-5403')
	fill_in('site_cliente', :with => 'www.cliente.com.br')
	fill_in('obervacoes', :with => 'testes')
	find(:xpath, '/html/body/div[2]/div/div/button').click
	sleep 2
end
                                                                              
Entao("o sistema retorna uma msg de cliente ja cadastrado") do                
	assert_text(" Cliente já cadastrado.")
end                                                                           
                                                                              