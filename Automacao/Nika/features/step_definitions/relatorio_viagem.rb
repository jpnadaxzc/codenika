Dado("que eu esteja na pagina de relatorios") do
	visit "http://52.206.13.179"
	find('input[name="login"]').set 'Joao'
	find('input[name="senha"]').set '123'
	click_button('Entrar')
	find(:xpath, '/html/body/div[1]/div/div[2]/div[2]/ul/li[2]/a').click
	find(:xpath, '/html/body/div[1]/div/div[2]/div[2]/ul/li[2]/ul/li[2]/a').click
	find(:xpath, '/html/body/div[1]/div/div[2]/div[2]/ul/li[2]/ul/li[2]/ul/li[1]/a').click
end

Quando("selecionar o motorista") do
	select 'Claudemir', :from => 'motorista'
	find(:xpath, '/html/body/div[2]/div[2]/button').click
end

Entao("visualizo o relatorio web") do
  sleep 5
  assert_text('Ordem')
end
