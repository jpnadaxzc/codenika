#language: pt
#utf-8
@logar
Funcionalidade: logar
Eu como Administrador do sistema
Quero logar no site 
Para utilizar o sistema em geral

Cenario: ta valido
	Dado que eu esteja na home do site do Nika
	Quando preencher as informacoes
	Entao o sistema apresentara a homepage do site

Cenario: login invalido
	Dado que eu esteja na home do site Nika
	Quando preencher minhas informacoes de login incorretamente
	Entao o sistema retorna uma msg de usuario ou senha incorretos
