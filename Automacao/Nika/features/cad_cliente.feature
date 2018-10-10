#language: pt
#utf-8
@cadastrarCliente
Funcionalidade: Cadastrar um cliente
	Eu como administrador do sistema
	Quero logar no site
	Para cadastrar um novo cliente


	Contexto: Administrador acessa a pagina
		Dado que o adm esteja na pagina de cadastro de clientes

	Cenario: Cadastro valido
		Quando preencher as informacoes solicitadas
		Entao visualizo a msg de cliente cadastrado

	


	# Cenario: Cadastro com erros
	# 	Quando preencher as informacoes solicitadas
	# 	Entao o sistema retorna uma msg de erro

