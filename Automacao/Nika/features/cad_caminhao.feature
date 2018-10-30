#language: pt
#utf-8
@cadastrarCaminhao
Funcionalidade: Cadastrar um caminhao
	Eu como administrador do sistema
	Quero logar no site
	Para cadastrar um novo Caminhao

	Contexto: Administrador acessa a pagina
		Dado que o adm esteja na pagina de cadastro de caminhoes

	Cenario: Cadastro de caminnhoes valido
		Quando preencher as informacoes do caminhao solicitadas
		Entao visualizo a msg de caminhao cadastrado
	
	Cenario: Campos obrigatorios
		Quando nao preencher as informacoes solicitadas
		Entao visualizo a msg de estes campos referente ao caminhao sao obrigatorios

	Cenario: Cadastro de caminhao invalido
		Quando preencher as informacoes com a de um caminhao existente
		Entao visualizo a msg de caminhao ja cadastrado