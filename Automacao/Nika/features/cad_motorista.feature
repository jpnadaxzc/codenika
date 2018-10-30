#language: pt
#utf-8
@cadastrarMotorista
Funcionalidade: Cadastrar um Motorista
	Eu como administrador do sistema
	Quero logar no site
	Para cadastrar um novo Motorista

	Contexto: Administrador acessa a pagina
		Dado que o adm esteja na pagina de cadastro de motoristas

	Cenario: Cadastro valido
		Quando preencher as informacoes solicitadas
		Entao visualizo a msg de motorista cadastrado
	
	Cenario: Campos obrigatorios
		Quando não preencher informacoes do motorista solicitadas
		Entao visualizo a msg de estes campos sao obrigatorios

	Cenario: Cadastro com erros
		Quando preencher as informacoes com um motorista ja existente
		Entao o sistema retorna a msg de motorista ja cadastrado