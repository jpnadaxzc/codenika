class CadPage < SitePrism::Page

	set_url "http://52.206.13.179/Cadastro_cliente.php"

	#campos
	element :name_field, "input[id='nome_cliente']"
	element :rg_field, "input[id='rg']"
	element :cpf_field, "input[id='cpf']"
	element :endereco_field, "input[id='endereco']"
	element :numerocasa_field, "input[id='numero_casa']"
	element :bairro_field, "input[id='bairro']"
	element :cep_field, "input[id='cep']"
	element :bloco_field, "input[id='bloco']"
	element :ap_field, "input[id='ap']"
	element :estado_field, "option[value='SP']"
	element :email_field, "input[id='email']"
	element :telefone_field, "input[id='telefone']"
	element :telcomercial_field, "input[id='telefone_comercial']"
	element :celular_field, "input[id='celular']"
	element :site, "input[id='site_cliente']"
	element :obs_field, "textarea[id='obervacoes']"
	#Botao
	element :cad_botao, "button[class='btn btn-default bot']"

	def CadCliente (nome_cliente,rg_cliente,cpf_cliente,endereco_cliente,numero_cliente,bairro_cliente,cep_cliente,
	bloco_cliente,ap_cliente,estado_cliente,email_cliente,telefone_cliente,telcomercial_cliente,celular_cliente,
	site_cliente,obs_cliente)
		name_field.set(nome_cliente)
		rg_field.set(rg_cliente)
		cpf_field.set(cpf_cliente)
		endereco_field.set(endereco_cliente)
		numerocasa_field.set(numero_cliente)
		bairro_field.set(bairro_cliente)
		cep_field.set(cep_cliente)
		bloco_field.set(bloco_cliente)
		ap_field.set(ap_cliente)
		estado_field.set(estado_cliente)
		email_field.set(email_cliente)
		telefone_field.set(telefone_cliente)
		telcomercial_field.set(telcomercial_cliente)
		celular_field.set(celular_cliente)
		site_field.set(site_cliente)
		obs_field.set(obs_cliente)
		cad_botao.click
	end
end
