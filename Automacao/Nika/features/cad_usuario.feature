#language: pt
#utf-8
@cadastrarUsuario
Funcionalidade: Cadastrar um Usuario
	Eu como administrador do sistema
	Quero logar no site
	Para cadastrar um novo Usuario

	Contexto: Administrador acessa a pagina
		Dado que o adm esteja na pagina de cadastro de usuario

	Cenario: Cadastro valido
		Quando preencher as informacoes solicitadas
		Entao visualizo a msg de usuario cadastrado

	# Cenario: campos obrigatorios
	# 	Quando não preencher alguma informacao solicitada
	# 	Entao visualizo a msg de estes campos sao obrigatorios

	# Cenario: Cadastro duplicado
	# 	Quando preencher as informacoes solicitadas
	# 	Entao o sistema retorna uma msg de usuario ja cadastrado