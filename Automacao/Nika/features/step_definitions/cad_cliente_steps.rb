Dado("que o adm esteja na pagina de cadastro de clientes") do
	visit "http://52.206.13.179"
	find('input[name="login"]').set 'Joao'
	find('input[name="senha"]').set '123'
	click_button('Entrar')
	find(:xpath, '/html/body/div[1]/div/div[2]/div[2]/ul/li[2]/a').click
	find(:xpath, '/html/body/div[1]/div/div[2]/div[2]/ul/li[2]/ul/li[1]/a').click
	find(:xpath, '/html/body/div[1]/div/div[2]/div[2]/ul/li[2]/ul/li[1]/ul/li[2]/a').click
end

Quando("preencher as informacoes solicitadas") do
	fill_in('nome_cliente', :with => 'João')	
	fill_in('rg', :with => '267583023')
	fill_in('cpf', :with => '10298931010')
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

# Entao("o sistema retorna uma msg de erro") do
#   pending # Write code here that turns the phrase above into concrete actions
# end



