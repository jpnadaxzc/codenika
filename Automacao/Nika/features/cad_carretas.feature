#language: pt
#utf-8
@cadastrarCarretas
Funcionalidade: Cadastrar um Carretas
	Eu como administrador do sistema
	Quero logar no site
	Para cadastrar uma nova Carretas

	Contexto: Administrador acessa a pagina de cadastro de carretas
		Dado que o adm esteja na pagina de cadastro de carretas

	Cenario: Cadastro valido
		Quando preencher as informacoes da carreta solicitada 
		Entao visualizo a msg de carreta cadastrada

	Cenario: Campos obrigatorios
		Quando nao preencher alguma informacao da carreta solicitada
		Entao visualizo a msg de estes campos referente a carreta sao obrigatorios

	Cenario: Cadastro duplicado
		Quando preencher as informacoes solicitadas
		Entao o sistema retorna uma msg de carreta ja cadastrada