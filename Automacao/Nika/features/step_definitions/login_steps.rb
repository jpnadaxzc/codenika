Dado("que eu esteja na home do site do Nika") do                            
	LoginPage.new.load
end                                                                          
                                                                             
Quando("preencher as informacoes") do
	find('input[name="login"]').set 'admin'
	find('input[name="senha"]').set 'admin'
	click_button('Entrar')
end                                                                          
                                                                             
Entao("o sistema apresentara a homepage do site") do                         
  assert_text('Bem vindo!')
end                                                                          

                                                                        