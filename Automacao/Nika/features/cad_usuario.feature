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

	Cenario: Campos obrigatorios
		Quando nao preencher alguma informacao do usuario solicitada
		Entao visualizo a msg de estes campos sao obrigatorios

	Cenario: Cadastro duplicado
		Quando preencher novamente as informacoes de usuario solicitadas
		Entao o sistema retorna a msg de usuario ja cadastrado