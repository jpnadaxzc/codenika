#language: pt
#utf-8
@cadastrarCarretas
Funcionalidade: Cadastrar um Carretas
	Eu como administrador do sistema
	Quero logar no site
	Para cadastrar uma nova Carretas

	Contexto: Administrador acessa a pagina
		Dado que o adm esteja na pagina de cadastro de carretas

	Cenario: Cadastro valido
		Quando preencher as informacoes de carreta solicitada
		Entao visualizo a msg de carreta cadastrada

	# Cenario: campos obrigatorios
	# 	Quando não preencher alguma informacao solicitada
	# 	Entao visualizo a msg de estes campos sao obrigatorios

	# Cenario: Cadastro duplicado
	# 	Quando preencher as informacoes solicitadas
	# 	Entao o sistema retorna uma msg de carreta ja cadastrada