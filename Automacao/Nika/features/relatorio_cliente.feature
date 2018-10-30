#language: pt
#utf-8
@GerarRelCliente
Funcionalidade: Visualizar relatorio do cliente
	Eu como usuario do sistema
	Quero gerar um relatorio 
	Para visualizar informacoes sobre o cliente

	Contexto: Usuario acessa a pagina
		Dado que eu esteja na pagina de relatorios do cliente

	Cenario: Visualizar relatorio web 
		Quando selecionar o cliente
		Entao visualizo o relatorio web do cliente

	Cenario: Erro ao selecionar cliente
		Quando não selecionar o cliente
		Entao visualiza a msg selecione um cliente
	
	Cenario: Erro ao achar o cliente
		Quando digitar um cliente não existente
		Entao visualiza a msg de cliente não cadastrado