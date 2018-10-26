#language: pt
#utf-8
@GerarRelViagem
Funcionalidade: Visualizar relatorio de viagem
	Eu como usuario do sistema
	Quero gerar um relatorio 
	Para visualizar informacoes sobre a viagem do motorista

	Contexto: Usuario acessa a pagina
		Dado que eu esteja na pagina de relatorios

	Cenario: visualizar relatorio web 
		Quando selecionar o motorista
		Entao visualizo o relatorio web

	# Cenario: erro selecionar motorista
	# 	Quando não selecionar o motorista
	# 	Entao visualiza a msg selecione um motorista
