#language: pt
#utf-8
@GerarRelCliente
Funcionalidade: Visualizar relatorio do cliente
	Eu como usuario do sistema
	Quero gerar um relatorio 
	Para visualizar informacoes sobre o cliente

	Contexto: Usuario acessa a pagina
		Dado que eu esteja na pagina de relatorios do cliente

	Cenario: visualizar relatorio web 
		Quando selecionar o motorista
		Entao visualizo o relatorio web

	# Cenario: erro selecionar cliente
	# 	Quando não selecionar o cliente
	# 	Entao visualiza a msg selecione um cliente
	
	# Cenario: erro ao achar o motorista
	# 	Quando digitar um cliente não existente
	# 	Entao visualiza a msg de cliente não cadastrado