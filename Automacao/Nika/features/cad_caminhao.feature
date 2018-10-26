#language: pt
#utf-8
@cadastrarCaminhao
Funcionalidade: Cadastrar um caminhao
	Eu como administrador do sistema
	Quero logar no site
	Para cadastrar um novo Caminhao

	Contexto: Administrador acessa a pagina
		Dado que o adm esteja na pagina de cadastro de caminhoes

	Cenario: Cadastro valido
		Quando preencher as informacoes solicitadas
		Entao visualizo a msg de caminhao cadastrado
	
	# Cenario: campos obrigatorios
	# 	Quando não preencher alguma informacao solicitada
	# 	Entao visualizo a msg de estes campos sao obrigatorios

	# Cenario: Cadastro invalido
	# 	Quando preencher as informacoes com a de um caminhao existente
	# 	Entao visualizo a msg de caminhao ja cadastrado


