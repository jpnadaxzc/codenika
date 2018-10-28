#language: pt
#utf-8
@GerarRelViagem
Funcionalidade: Visualizar relatorio de viagem
	Eu como usuario do sistema
	Quero gerar um relatorio 
	Para visualizar informacoes sobre a viagem do motorista

	Contexto: Usuario acessa a pagina
		Dado que eu esteja na pagina de relatorios 

	Cenario: Visualizar relatorio web 
		Quando selecionar a viagem
		Entao visualizo o relatorio web de viagem

	Cenario: Erro ao selecionar a viagem
		Quando não selecionar a viagem
		Entao visualiza a msg selecione uma viagem
