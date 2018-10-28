#language: pt
#utf-8
@NovaViagem
Funcionalidade: Gerar Nova viagem
	Eu como usuario do sistema
	Quero logar no site
	Para gerar uma nova viagem

	Contexto: usuario acessa a pagina
		Dado que o usuario esteja na pagina de nova viagem

#Caminho feliz
	Cenario: Viagem cadastrada
		Quando preencher as informacoes solicitadas
		Entao visualizo viagem iniciada com sucesso

#Cenarios de alerta
	Cenario: Campos de nova viagem obrigatorios
		Quando não preencher alguma informacao da nova viagem solicitada
		Entao visualizo a msg referente a nova viagem de campos obrigatorios 
	
	Cenario: Motorista em percurso
		Quando selecionar um motorista em percurso 
		Entao visualizo a msg de motorista em percurso por gentileza finalize a viagem 

	Cenario: Caminhao em percurso
		Quando selecionar um caminhao em percurso
		Entao visualizo a msg de caminhao em percurso por gentileza finalize a viagem

#Cenarios negativos
	Cenario: Data invalida
		Quando selecionar uma data inferior a data atual
		Entao visualizo a msg de data invalida