class LoginPage < SitePrism::Page

	set_url "http://52.206.13.179"

	element :username_field,"input[name='login']"
	element :password_field,"input[name='Senha']"
	element :login_botao,"input[value='Entrar']"

	def logarCadCliente (username, password)
	username_field.set(username)
	password_field.set(password)
	login_botao.click
	end
end