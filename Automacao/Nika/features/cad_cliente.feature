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
		Quando preencher as informacoes de cliente solicitadas
		Entao visualizo a msg de cliente cadastrado

	Cenario: Campos obrigatorios
		Quando nao preencher alguma informacao solicitada
		Entao visualizo a msg de que cpf eh obrigatorio

	Cenario: Cadastro duplicado
		Quando preencher as informacoes do cliente solicitadas
		Entao o sistema retorna uma msg de cliente ja cadastrado

