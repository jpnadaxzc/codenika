Dado("que o adm esteja na pagina de cadastro de carretas") do                  
	visit "http://52.206.13.179"
	find('input[name="login"]').set 'Admin'
	find('input[name="senha"]').set 'Admin'
	click_button('Entrar')  
end                                                                            
                                                                               
Quando("preencher as informacoes de carreta solicitada") do                    
	#dakjççj\k	  
end                                                                            
                                                                               
Entao("visualizo a msg de carreta cadastrada") do                              
  pending # Write code here that turns the phrase above into concrete actions  
end                                                                            
                                                                               
Quando("nao preencher alguma informacao da carreta solicitada") do                        
  pending # Write code here that turns the phrase above into concrete actions  
end                                                                            
                                                                               
Entao("visualizo a msg de estes campos referente a carreta sao obrigatorios") do                   
  pending # Write code here that turns the phrase above into concrete actions  
end                                                                            
                                                                               