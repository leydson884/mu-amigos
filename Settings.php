<?php
/*****************************************************************************
    @ Template Settings
    @ By: LucasHP - lucashp@lhpdesigner.com.br / lucashp@ctmts.com.br
*****************************************************************************/
//Slides
define("L_Slide", false); // -- Mostrar Slide na página principal? (true=sim / false=não)

//Link da imagens
define("L_ImgSlide", "templates/effect/images/slider/slide01.jpg"); // -- 1º imagem do slide
define("L_ImgSlide2", "templates/effect/images/slider/slide02.jpg"); // -- 2º imagem do slide
define("L_ImgSlide3", "templates/effect/images/slider/slide03.jpg"); // -- 3º imagem do slide
define("L_ImgSlide4", "templates/effect/images/slider/slide04.jpg"); // -- 4º imagem do slide
define("L_ImgSlide5", "templates/effect/images/slider/slide04.jpg"); // -- 5º imagem do slide


//Link dos slides
define("L_LinkSlide", "#"); // -- Link do 1º slide
define("L_LinkSlide2", "#"); // -- Link do 2º slide
define("L_LinkSlide3", "#"); // -- Link do 3º slide
define("L_LinkSlide4", "#"); // -- Link do 4º slide
define("L_LinkSlide5", "#"); // -- Link do 5º slide

//Redes Sociais
define("L_Orkut", "http://www.orkut.com.br"); // -- Link do Orkut
define("L_Twitter", "http://twitter.com/"); // -- Link do Twitter
define("L_Facebook", "http://facebook.com"); // -- Link do Facebook

//Outras configurações
define("L_KingOfPVP", "NAO USADO"); // -- Rei do PVP
define("L_Help", "#"); // -- Link de ajuda
define("L_Show_MGuild", true); // -- Mostrar melhor Guild
define("L_Help", "#"); // -- Link para página de ajuda (msg que aparece no topo da parte do conteúdo)
define("L_MGuild", "#"); // -- Pagina sobre o Rei do crash
define("L_SChash", "#"); // -- Pagina sobre o Sorteio de Cash
define("L_AboutKing", "#"); // -- Pagina sobre Rei do Script
define("T_Epoints", "#"); // -- Pagina sobre a Troca de Epoints

define("L_Orkut", "http://www.orkut.com.br/"); // -- Link para a página do servidor no Orkut
define("L_Twitter", "http://www.youtube.com/user/ilairusso1"); // -- Link para a página do servidor no Twitter
define("L_Facebook", "https://www.facebook.com/ajudaemmuonline"); // -- Link para a página do servidor no Facebook


define("NEAT_Slide", true); // -- Mostrar slide (rotativo) na página principal (true = Sim / false = Não)
define("NEAT_ImgSlide01", "templates/Neat/images/slide/Slide01.jpg"); // -- Caminho da imagem 01
define("NEAT_LinkSlide01", "#"); // -- Link para pagina do slide 01
define("NEAT_DescSlide01", "Titulo do slide1 aqui - By Ajuda em MuOnline"); // -- Link para pagina do slide 01
define("NEAT_ImgSlide02", "templates/Neat/images/slide/Slide02.jpg"); // -- Caminho da imagem 02
define("NEAT_LinkSlide02", "#"); // -- Link para pagina do slide 02
define("NEAT_DescSlide02", "Titulo do slide2 aqui - By Ajuda em MuOnline"); // -- Link para pagina do slide 01
define("NEAT_ImgSlide03", "templates/Neat/images/slide/Slide03.jpg"); // -- Caminho da imagem 03
define("NEAT_LinkSlide03", "#"); // -- Link para pagina do slide 03
define("NEAT_DescSlide03", "Titulo do slide3 aqui - By Ajuda em MuOnline"); // -- Link para pagina do slide 01
define("NEAT_ImgSlide04", "templates/Neat/images/slide/Slide04.jpg"); // -- Caminho da imagem 04
define("NEAT_LinkSlide04", "#"); // -- Link para pagina do slide 04
define("NEAT_DescSlide04", "Titulo do slide4 aqui - By Ajuda em MuOnline"); // -- Link para pagina do slide 01

define("NEAT_Orkut", "http://www.orkut.com.br"); // -- Link para a página do servidor no Orkut
define("NEAT_Twitter", "http://www.youtube.com/user/ilairusso1"); // -- Link para a página do servidor no Twitter
define("NEAT_Facebook", "https://www.facebook.com/ajudaemmuonline"); // -- Link para a página do servidor no Facebook


define("NEAT_KingOfPVP", "Ajuda em MuOnline"); // -- Rei do PVP
define("NEAT_AboutKingOfPVP", "#"); // -- Link do Rei do PVP


// ************************************************************** //
// *                                                            * //
// * Effect  Web MuOnline                                        * //
// * Version: 1.7 Finish Edition                                * //
// * Release Date: 30/06/2011                                   * //
// *                                                            * //
// ************************************************************** //
// *                                                            * //
// * Powered by Erick-Master                                    * //
// * E-Mail: erick-master@ctmts.com.br                          * //
// * Skype: erick-master.am                                     * //
// * Phone: (31) 9702-2076                                      * //
// *                                                            * //
// ************************************************************** //
// *                                                            * //
// * CTM TEAM Softwares - Custom Tech Services                  * //
// * Copyright (c) 2010-2011. All Rights Reserved,              * //
// * www.ctmts.com.br                                           * //
// *                                                            * //
// ************************************************************** //

/*****************************************************************************
	@ MSSQL Settings
	@ Configurações do Servidor Microsoft SQL Server
	@ true = Sim
	@ false = Não
*****************************************************************************/
define("MSSQL_Host", "127.0.0.1"); // -- Host do MSSQL (Padrão -> 127.0.0.1)
define("MSSQL_User", "sa"); // -- Usuario do MSSQL (Padrão -> sa)
define("MSSQL_Pass", "Sua_Senha_SQL_Aqui"); // -- Senha do MSSQL
define("MSSQL_DB", "CTM_TeaM"); // -- DataBase do Web Site (Padrão -> CTM_TeaM)
define("MuAcc_DB", "MuOnline"); // -- DataBase das contas [Geralmente = Me_MuOnline] (Padrão -> MuOnline)
define("MuGen_DB", "MuOnline"); // -- DataBase geral do server (Padrão -> MuOnline)
define("MSSQL_Security_Log", true); // -- Salvar Logs de Erros na tarefas do MSSQL (Padrão -> true)

/*****************************************************************************
	@ MySQL Settings
	@ Configurações do Servidor MySQL Server
	@ true = Sim
	@ false = Não
*****************************************************************************/
define("MySQL_Security_Log", true); // -- Salvar Logs de Erros na tarefas do MySQL (Padrão -> true)

/*****************************************************************************
	@ Mailer Settings
	@ Configurações do sistema de E-Mails
	@ true = Sim
	@ false = Não
	@ Para SMTP localhost deixe o usuario e senha vazios
	@ OBS: localhost é somente para hospedagens normais
*****************************************************************************/
$_Mailer["SMTP"]["Server"] = "smtp.mail.yahoo.com.br"; // -- Host do Servidor SMTP (Padrão -> localhost)
$_Mailer["SMTP"]["Port"] = 25; // -- Porta do Servidor SMTP (Padrão -> 25)
$_Mailer["SMTP"]["User"] = "buqueboya@yahoo.com.br"; // -- Usuario do Servidor SMTP (Padrão -> Vazio)
$_Mailer["SMTP"]["Pass"] = "erickmaster1099"; // -- Senha do Servidor SMTP (Padrão -> Vazio)
$_Mailer["SMTP"]["Mail"] = "buqueboya@yahoo.com.br"; // -- Remetente dos E-Mails
$_Mailer["SMTP"]["Debug"] = false; // -- Ativar/Desativar Debug System [Gerar Logs] (Padrão -> true)

/*****************************************************************************
	@ General Settings
	@ Configurações Gerais do Web Site
	@ true = Sim
	@ false = Não
*****************************************************************************/
define("Session_Name", "Fa2e9Zd23B37"); // -- Nome das Sessões do site
define("USE_MD5", 0); // -- O Servidor contem MD5? [1=Sim] [0=Não]
define("Recovery_Pass", true); // -- Mudar senha do úsuario ao efetuar recuperação de senha (Padrão -> true)
define("VI_CURR_INFO", false); // -- Registrar dados na Tabela VI_CURR_INFO (Padrão -> true)
define("License_Cache", false); // -- Permitir a criação de Cache, efetuar Requests ao servidor de licença a cada 3 horas
define("Server_Location", 1); // -- Localidade de sua Hospedagem [0=USA] [1=BR] (Padrão -> 0)
define("Staff_Code", 8); // -- Codigo dos Personagens da Staff
define("Column_Reset", "Resets"); // -- Coluna de Resets (Padrão -> Resets)
define("Column_RankingPk", "PkCountWeb"); // -- Coluna de Resets (Padrão -> Resets)
define("Column_MReset", "Resetao"); // -- Coluna de Master Resets (Padrão -> MResets)
define("Column_ResetDay", "resetsDay"); // -- Coluna dos Resets Diarios (Padrão -> resetsDay)
define("Column_ResetWeek", "resetsWeek"); // -- Coluna dos Resets Semanais (Padrão -> resetsWeek)
define("Column_ResetMonth", "resetsMonth"); // -- Coluna dos Resets Mensais (Padrão -> resetsMonth)
define("Column_PK", "PkCount"); // -- Coluna de PK (Padrão -> PkCount)
define("Column_Cmd", "Leadership"); // -- Coluna de Comando (Padrão -> Leadership)
define("Upload_Img", "images/uploads/chars/"); // -- Diretorio das Imagens dos Chars
define("Upload_SS", "images/uploads/screenshots/"); // -- Diretorio das ScreenShots
define("Image_Size", 100000); // -- Tamanho da Imagem em Bytes (Padrão -> 100000)
define("Max_Points", 65000); // -- Maximo de Pontos
define("Server_Files", 3); // -- Server Files [0=ENCGames Season 6] [1=X-Team Season 4/5] [2=X-Team Season 6] [3=Outros]
define("GS_Version", 3); // -- Server Version [0=99B-] [1=99Z a Season 1] [2=Season 2] [3=Season 3 EP1] [4=Season 3 EP2 a Season 4.5] [5=Season 5] [6=Season 6]
define("EXTRA_VAULT_COLUMN", "CTM_Vault"); // -- Coluna do Baú Extra (Web) (Padrão -> CTM_Vault)
define("CHAR_IMAGE_COLUMN", "CTM_Image"); // -- Coluna da imagem pessoal (Padrão -> CTM_Image)
define("RANKING_PK_COLUMN", "PkCountWeb"); // -- Coluna do Ranking de PK (Padrão -> PkCountWeb)
define("RANKING_HERO_COLUMN", "HeroCountWeb"); // -- Coluna do Ranking de PK (Padrão -> HeroCountWeb)

/*****************************************************************************
	@ Warehouse Settings
	@ Configurações do sistema de Baú
	@ true = Sim
	@ false = Não
*****************************************************************************/
define("ExtWarehouse", false); // -- O Servidor contem sistema de Baú Extra? (/vault | /bau)
define("ExtWare_Table", "ExtendedWarehouse"); // -- Table do Baú Extra (Padrão -> ExtWarehouse)
define("ExtWare_Item", "Items"); // -- Coluna de Itens do Baú Extra (Padrão -> items)
define("ExtWare_Login", "AccountID"); // -- Coluna de Login do Baú Extra (Padrão -> AccountID)

/*****************************************************************************
	@ Template Settings
	@ Configurações do Sistema de Template
	@ Para o template Padrão deixe "Default"
*****************************************************************************/
define("Template_Default", "Neat"); // -- Nome da pasta do Template na pasta "templates" (Template Padrão)
define("Template_Selector", false); // -- Ativar/Desativar Seletor de Templates
##################################################################
	# Seletor de Templates
	# Somente se tiver Abilitado
	# OBS: Deixe Default somente para o template Padrão da Effect  Web
	# Exemplo: 0 => array("Pasta do Template", "Nome do Template"),
##################################################################
$_Templates = array(0 => array("Default", "Default"),
					1 => array("DarkStyle", "DarkStyle"),
				   );

/*****************************************************************************
	@ Update Settings
	@ A Chave de Update tem o objetivo que você não use o Site antes da leitura do ChangeLog
	@ Pegue a Chave de Update no ChangeLog.htm da ultima versão do site
*****************************************************************************/


/*****************************************************************************
	@ Info Settings
	@ Informações do Site
	@ true = Sim
	@ false = Não
*****************************************************************************/
define("Server_Name", "Ajuda em MuOnline"); // -- Nome do Servidor
define("Web_Title", "Ajuda em MuOnline - Melhor Portal de MuOnline!"); // -- Titulo do Site
define("Server_Version", "Versao"); // -- Versão do Servidor
define("Server_Xp", "5.000x"); // -- Experiência do Servidor
define("Server_Drop", "80%"); // -- Drop do Servidor
define("Server_BB", 2); // -- Bug Bless [0=Offline] [1=Online] [2=Outro]
define("BB_Text", "/zen"); // -- Outra Informação do Bug Bless (Somente para Bug Bless = 2)
define("Server_Time", "24/7"); // -- Horário do Servidor
define("Server_Type", 2); // -- Tipo de Servidor [1=Semi-Dedicado] [2=Dedicado]
define("Status_Enable", 1); // -- Exibir Status do Server [0=Não] [1=Sim] [2=Manutenção]
define("GS_Host", "127.0.0.1"); // -- IP/Host do GameServer (Padrão -> 127.0.0.1);
define("GS_Port", 55901); // -- Porta do GameServer (Padrão -> 55901)

/*****************************************************************************
	@ Server Settings
	@ Configurações da Lita de Servidores
	@ true = Sim
	@ false = Não
*****************************************************************************/
define("Server_List", true); // -- Ativar/Desativar Lista de Servidores
define("CS_Host", "127.0.0.1"); // -- IP do ConnectServer (Padrão -> 127.0.0.1)
define("CS_Port", 44405); // -- Porta do ConnectServer (Padrão -> 44405)
##################################################################
	# Configurações dos GameServers
	# Somente se tiver Abilitado
	# Exemplo: 0 => array("Nome do Servidor", "Nome do GameServer", Maximo de Conexões),
##################################################################
$_ServerList = array(0 => array("Sala1", "Sala1", 200),
//					 1 => array("Sala Upar", "Sala Bau", 200),
//					 2 => array("Sala VipGold", "Sala VipGold", 150),
					 );


/*****************************************************************************
	@ Raffle System
	@ Configurações do sistema de Sorteio
	@ true = Sim
	@ false = Não
*****************************************************************************/
$_RaffleSystem["Enable"] = true; // -- Ativar/Desativar o sistema de Sorteio
$_RaffleSystem["Accounts"] = array("russo1", "seulogindeadmaqui"); // -- Contas com permisão de gerenciar o sistema (Exemplo: "admin","adm2")
$_RaffleSystem["Raffle"] = array("russo1", "seulogindeadmaqui"); // -- Contas com permisão para sortear jogadores (Exemplo: "admin","adm2")
$_RaffleSystem["Clear"] = array("russo1", "seulogindeadmaqui"); // -- Contas com permisão para limpar a lista de sorteados (Exemplo: "admin","adm2")
$_RaffleSystem["Coin"] = 2; // -- Moeda a ser Sorteada [De 1 a 3] (Padrão -> 1)
$_RaffleSystem["List"]["Enable"] = true; // -- Ativar/Desativar Lista de Sorteados (Padrão -> true)
$_RaffleSystem["List"]["Id"] = true; // -- Exibir Id do Sorteado na lista de sorteados (Padrão -> false)
$_RaffleSystem["List"]["Coin"] = true; // -- Exibir a moeda premiada na lista de sorteados (Padrão -> true)
$_RaffleSystem["List"]["Gold"] = true; // -- Exibir o numero de Moeda recebidos na lista de sorteados (Padrão -> true)
$_RaffleSystem["List"]["Date"] = true; // -- Exibir a data do sorteio na lista de sorteados (Padrão -> true)
$_RaffleSystem["List"]["Time"] = true; // -- Eibir a hora do sorteio na lista de sorteados (Padrão -> false)
 
/*****************************************************************************
	@ Register Settings
	@ Configurações do Registro no Servidor
	@ true = Sim
	@ false = Não
*****************************************************************************/
define("Register[Enable]", true); // -- Ativar/Desativar Registro no Servidor
define("Register[Confirm_Mail]", false); // -- Obrigar confirmação no E-Mail
define("Register[VIP][Enable]", true); // -- Ganhar VIP ao se Cadastrar (Padrão -> true)
define("Register[VIP][Type]", 2); // -- Tipo de VIP [De 1 a 5] (Padrão -> 1)
define("Register[VIP][Time]", 5); // -- Tempo de VIP a Ganhar (Padrão -> 5)
define("Register[Cash][Enable]", false); // -- Ganhar Cash ao se Cadastrar (Padrão -> false)
define("Register[Cash][Coin]", 0); // -- Moeda a Ganhar [De 1 a 3] (Padrão -> 1)
define("Register[Cash][Number]", 0); // -- Quantidade de Cash a Ganhar

/*****************************************************************************
	@ Link Settings
	@ Configurações dos links do Site
	@ true = Sim
	@ false = Não
*****************************************************************************/
define("Forum_Enable", false); // -- O Servidor contem Fórum?
define("Forum_Link", "http://forum.ctmts.com.br"); // -- Link do Fórum
define("Num_Shops", 2); // -- Numero de Web Shops
define("Shop_Link", "shopcash/"); // -- Link do Shop (Somente para 1 Shop)
##################################################################
	# Link dos Shops
	# Somente se tiver 2 ou mais
	# Exemplo: 0 => array("Link do Shop", "Nome do Shop"),
##################################################################
$_Shop = array(0 => array("shopgold/", "Shop Gold"),
			   1 => array("shopcash/", "Shop Cash"),
			   );
			   
define("Orkut_Link", "http://www.orkut.com.br/Main#Home"); // -- Link da Comunidade do Orkut
define("Twitter_Enable", false); // -- Ativar/Desativar Link do Twitter
define("Twitter_Link", "http://www.twitter.com/"); // -- Link do Twitter
define("Chat_Enable", true); // -- Ativar/Destivar Chat do Servidor
define("Chat_Scripts", 'LOCALIZADO NA PAGINA INICIAL DO SERVIDOR!'); // -- Script do Chat

/*****************************************************************************
	@ Menu Settings
	@ Configurações do Menu Extra
	@ 1 = Pagina no Site
	@ 2 = Pagina em outra Janela
	@ OBS: Para pagina no site colocar o nome o arquivo .pag.php da pasta pages/
	@ Exemplo: 0 => array(Tipo e Pagina, "Nome no Menu", "Link da Pagina),
******************************************************************************/
$_Menu = array(1 => array(2, "Desenvolvedor do WEBSITE", "http://www.ctmts.com.br"),
			   );

/*****************************************************************************
	@ Suportt Settings
	@ Configurações do Suporte
	@ true = Sim
	@ false = Não
******************************************************************************/
define("Suportt_Forum", "#"); // -- Link da Ártea de Suporte no Fórum (Caso Tenha Fórum)
define("Suportt_Phone", true); // -- Ativar/Desativar Suporte via telefone
##################################################################
	# E-Mails de Suporte
	# Exemplo: 0 => array("E-Mail", "Atendente"),
##################################################################
$_Suportt["Mail"] = array(0 => array("ajudaemmuonline@hotmail.com", "E-Mail"),
			   			  1 => array("AjudaemMuOnline", "Skype"),
						  );
##################################################################
	# Telefones de Suporte
	# Somente se tiver Ativado
	# Exemplo: 0 => array("Numero do Telefone", "Atendente", "Falar com:"),
##################################################################
$_Suportt["Phone"] = array(0 => array("(16) 91097287", "Lucas.R", "Lucas.R"),
			   			  );
						  
/*****************************************************************************
	@ Panel Settings
	@ Configurações do Painel de Controle
	@ 1 = Sim
	@ 0 = Não
*****************************************************************************/
$_Panel["Account"]["Dates"] = array(1 /* Ativado */,0 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Alterar Dados
$_Panel["Account"]["Change_PID"] = array(1 /* Ativado */); // -- Alterar Personal ID (PID)
$_Panel["Account"]["Change_Mail"] = array(1 /* Ativado */,0 /* Free */,0 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Alterar E-Mail
$_Panel["Account"]["Alt_Vault"] = array(1 /* Ativado */,0 /* Free */,0 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Alterar Baú
$_Panel["Account"]["Repair_Vault"] = array(1 /* Ativado */,0 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Reparar Baú
$_Panel["Account"]["Connects"] = array(1 /* Ativado */,1 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Conexões Recentes
$_Panel["Account"]["ScreenShots"] = array(1 /* Ativado */,0 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Enviar / Remover ScreenShots
$_Panel["Char"]["Reset"] = array(1 /* Ativado */,1 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Reset System
$_Panel["Char"]["MReset"] = array(1 /* Ativado */,1 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Master Reset
$_Panel["Char"]["Transfer_Resets"] = array(0 /* Ativado */,0 /* Free */,0 /* VIP 1 */,0 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Master Reset
$_Panel["Char"]["Trade_RCash"] = array(0 /* Ativado */,0 /* Free */,0 /* VIP 0 */,0 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Trocar Resets por Cash
$_Panel["Char"]["Clear_PK"] =  array(1 /* Ativado */,1 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Limpar PK
$_Panel["Char"]["Change_Class"] = array(1 /* Ativado */,1 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Alterar Classe
$_Panel["Char"]["Change_Nick"] = array(1 /* Ativado */,1 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,0 /* VIP 3 */,0 /* VIP 4 */,0 /* VIP 5 */); // -- Alterar Nick
$_Panel["Char"]["Move_Char"] = array(1 /* Ativado */,0 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Mover Personagem
$_Panel["Char"]["Profile_Char"] = array(1 /* Ativado */,0 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Gerenciar Perfil
$_Panel["Char"]["Upload_Img"] = array(1 /* Ativado */,0 /* Free */,0 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Gerenciar Imagem
$_Panel["Char"]["Concert_Points"] = array(1 /* Ativado */,0 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Concertar Pontos
$_Panel["Char"]["Reset_Points"] = array(1 /* Ativado */,0 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Resetar Pontos
$_Panel["Char"]["Distribute_Points"] = array(1 /* Ativado */,1 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Distribuir Pontos
$_Panel["Char"]["Clear_Char"] = array(1 /* Ativado */,0 /* Free */,0 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Limpar Personagem
$_Panel["Char"]["Repair_Inventory"] = array(1 /* Ativado */,0 /* Free */,0 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Reparar Inventório
$_Panel["Suportt"]["Tickets"] = array(1 /* Ativado */,1 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Tickets de Suporte
$_Panel["Financial"]["Payments"] = array(1 /* Ativado */); // -- Pagamentos
$_Panel["Financial"]["Trade_Amount"] = array(0 /* Ativado */); // -- Troca de Moedas
$_Panel["Financial"]["Buy_VIP"] = array(1 /* Ativado */); // -- Comprar VIP

/************ Configurações do Reset System ************
	@ Modulo 1 : Reset Acumulativo
	@ Modulo 2 : Reset Pontuativo
*******************************************************/
$_Panel["Char"]["Reset"]["General"]["Mode"] = 1; // -- Modulo de Reset
$_Panel["Char"]["Reset"]["General"]["Level"] = array(400 /* Free */,390 /* VIP 1 */,370 /* VIP 2 */,220 /* VIP 3 */,220 /* VIP 4 */,220 /* VIP 5 */); // -- Level Minimo
$_Panel["Char"]["Reset"]["General"]["Money"] = array(50000000 /* Free */,10000000 /* VIP 1 */,1 /* VIP 2 */,0 /* VIP 3 */,0 /* VIP 4 */,0 /* VIP 5 */); // -- Zen Requerido
$_Panel["Char"]["Reset"]["General"]["Return"] = array(1 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,15 /* VIP 3 */,20 /* VIP 4 */,25 /* VIP 5 */); // -- Level a Retornar
$_Panel["Char"]["Reset"]["General"]["Invent"] = array(0 /* Free */,0 /* VIP 1 */,0 /* VIP 2 */,0 /* VIP 3 */,0 /* VIP 4 */,0 /* VIP 5*/); // -- Limpar Invetório
$_Panel["Char"]["Reset"]["General"]["Skill"] = array(0 /* Free */,0 /* VIP 1 */,0 /* VIP 2 */,0 /* VIP 3 */,0 /* VIP 4 */,0 /* VIP 5*/); // -- Limpar Skills
$_Panel["Char"]["Reset"]["General"]["Quest"] = array(0 /* Free */,0 /* VIP 1 */,0 /* VIP 2 */,0 /* VIP 3 */,0 /* VIP 4 */,0 /* VIP 5*/); // -- Resetar Quests
$_Panel["Char"]["Reset"]["General"]["Points"] = array(0 /* Free */,0 /* VIP 1 */,0 /* VIP 2 */,0 /* VIP 3 */,0 /* VIP 4 */,0 /* VIP 5*/); // -- Pontos a Ganhar

/************ Configurações do Master Reset ************
	@ O Sistema credita Golds para as contas Resetadas
	@ Todos os pontos serão resetados
	@ Os Resets serão diminuidos caso ativado
*******************************************************/
$_Panel["Char"]["MReset"]["Level"] = array(400 /* Free */,300 /* VIP 1 */,200 /* VIP 2 */,280 /* VIP 3 */,280 /* VIP 4 */,280 /* VIP 5*/); // -- Level Minimo
$_Panel["Char"]["MReset"]["Resets"] = array(10 /* Free */,5 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Resets Requeridos
$_Panel["Char"]["MReset"]["Money"] = array(400 /* Free */,350 /* VIP 1 */,280 /* VIP 2 */,280 /* VIP 3 */,280 /* VIP 4 */,280 /* VIP 5 */); // -- Zen Requerido
$_Panel["Char"]["MReset"]["Stats"] = array(65500 /* Força */,65500 /* Agilidade */,65500 /* Vitalidade */,65500 /* Energia */,65500 /* Comando (Somente DL/LE */); // -- Stats Requeridos para dar o Master Reset
$_Panel["Char"]["MReset"]["Points"] = array(100 /* Força */,18 /* Agilidade */,15 /* Vitalidade */,30 /* Energia */,0 /* Comando (Somente DL/LE */); // -- Stats após o Master Reset
$_Panel["Char"]["MReset"]["Clear_Reset"] = array(1 /* Free */,1 /* VIP 1 */,1 /* VIP 2 */,1 /* VIP 3 */,1 /* VIP 4 */,1 /* VIP 5 */); // -- Diminuir Resets
$_Panel["Char"]["MReset"]["Invent"] = array(0 /* Free */,0 /* VIP 1 */,0 /* VIP 2 */,0 /* VIP 3 */,0 /* VIP 4 */,0 /* VIP 5 */); // -- Limpar Invetório
$_Panel["Char"]["MReset"]["Skill"] = array(0 /* Free */,0 /* VIP 1 */,0 /* VIP 2 */,0 /* VIP 3 */,0 /* VIP 4 */,0 /* VIP 5 */); // -- Limpar Skills
$_Panel["Char"]["MReset"]["Quest"] = array(0 /* Free */,0 /* VIP 1 */,0 /* VIP 2 */,0 /* VIP 3 */,0 /* VIP 4 */,0 /* VIP 5 */); // -- Resetar Quests
$_Panel["Char"]["MReset"]["Cash"] = array(20 /* Free */,30 /* VIP 1 */,40 /* VIP 2 */,4 /* VIP 3 */,5 /* VIP 4 */,6 /* VIP 5 */); // -- Golds a Receber
$_Panel["Char"]["MReset"]["Coin"] = 2; // -- Moeda a receber (1 a 3)

/************ Configurações do Transferir Resets ************/
$_Panel["Char"]["Transfer_Resets"]["Min_Total"] = 49; // -- Numero minimo de Resets que o char deve conter
$_Panel["Char"]["Transfer_Resets"]["Min_Send"] = 50; // -- Numero minomo de Resets que o char pode enviar

/************ Configurações do Trocar Resets por Cash ************/
$_Panel["Char"]["Trade_RCash"]["Coin"] = 1; // -- Moeda a receber (1 a 3)
$_Panel["Char"]["Trade_RCash"]["Price"] = 10; // -- Preço de cada Moeda em Resets
$_Panel["Char"]["Trade_RCash"]["Min_Total"] = 40; // -- Numero minimo de Resets que o char deve conter
$_Panel["Char"]["Trade_RCash"]["Min_Send"] = 20; // -- Numero minimo de Moeda que o char pode requisitar
$_Panel["Char"]["Trade_RCash"]["Bonus_Register"] = 0; // -- Numero de resets que ganha ao cadastrar (Caso não ganha, deixe 0)

/************ Configurações do Limpar PK ************/
$_Panel["Char"]["Clear_PK"]["Money"] = array(50000000 /* Free */,10000000 /* VIP 1 */,1 /* VIP 2 */,0 /* VIP 3 */,0 /* VIP 4 */,0 /* VIP 5 */); // -- Zen Requerido

/************ Configurações do Alterar Nick ************/
$_Panel["Char"]["Change_Nick"]["CheckGuild"] = 1; // -- Obrigar Saida da Guild para Alterar o Nick (Padrão -> 0)
$_Panel["Char"]["Change_Nick"]["Security"] = array("ADM", "SUB", "DV", "GM", "WebZen", "Web-Zen", ); // -- Palavras Bloqueadas (Exemplo: "ADM", "GM")

/************ Configurações do Resetar Pontos ************/
$_Panel["Char"]["Reset_Points"]["Min"] = 1000; // -- Minimo de pontos requeridos em todos os Stats

/************ Configurações do Ticket de Suporte ************/
$_Panel["Suportt"]["Tickets"]["Departaments"] = array("Suporte Geral", "Suporte Financeiro",); // -- Departamentos de Suporte
$_Panel["Suportt"]["Tickets"]["Limit_Open"] = 5; // -- Numero maximo de Tickets em Aberto

/************ Configurações da Troca de Moedas ************/
$_Panel["Financial"]["Trade_Amount"]["Price"][0] = 5; // -- Preço da Moeda 1 para a Troca de Moeda 2 para Moeda 1
$_Panel["Financial"]["Trade_Amount"]["Price"][1] = 10; // -- Preço da Moeda 1 para a Troca de Moeda 3 para Moeda 1
$_Panel["Financial"]["Trade_Amount"]["Price"][2] = 5; // -- Preço da Moeda 2 para a Troca de Moeda 3 para Moeda 2

/*****************************************************************************
	@ Panel Admin Settings
	@ Configurações do Painel Administrativo
	@ 1 = Game Master
	@ 2 = Sub-Administrador
	@ 3 = Administrador
*****************************************************************************/
$_PanelAdmin["General"]["Master"] = array("seulogindeadmaqui", "seulogindeadmaqui");// -- Contas Admin Master (Exemplo: "admin","adm2")
$_PanelAdmin["ManageX"] = 1; // -- Permisão minima para Gerenciamento Geral
$_PanelAdmin["Mail"] = 3; // -- Enviar E-Mail ao Jogador
$_PanelAdmin["Warning"] = 3; // -- Permisão minima para Gerenciar o Aviso Importante
$_PanelAdmin["News"] = 3; // -- Permisão minima para Gerenciar Noticias
$_PanelAdmin["ScreenShots"] = 2; // -- Permisão minima para Gerenciar ScreenShots (Deletar)
$_PanelAdmin["Downloads"] = 3; // -- Permisão minima para Gerenciar Downloads
$_PanelAdmin["Staff"] = 3; // -- Permisão minima para Gerenciar a Equipe
$_PanelAdmin["Poll"] = 3; // -- Permisão minima para gerenciar Enquetes
$_PanelAdmin["Account"] = 3; // -- Permisão minima para Gerenciar Contas
$_PanelAdmin["Character"] = 2; // -- Permisão minima para Gerenciar Chars
$_PanelAdmin["Tickets"] = 2; // -- Permisão minima para Gerenciar Tickets de Suporte
$_PanelAdmin["Payments"] = 3; // -- Permião minima para Gerenciamento de Pagamentos
$_PanelAdmin["VIP"] = 3; // -- Permisão minima para Gerenciar VIP
$_PanelAdmin["Cash"] = 3; // -- Permisão minima para Gerenciar Golds
$_PanelAdmin["SQL"] = 3; // -- Permisão minima para Gerenciar o SQL
$_PanelAdmin["RaffleSystem"] = 3; // -- Permião minima para Gerenciar o sistema de Sorteio

/************ Configurações do Gerenciamento Geral ************/
$_PanelAdmin["Manage"]["Sitronize"] = 3; // -- Permisão minima para Sitronizar VIPs/Contas BAN/Chars Ban
$_PanelAdmin["Manage"]["EffectWeb"] = array("seulogindeadmaqui", "seulogindeadmaqui", ); // -- Contas com permisão de gerenciar Licença da Effect Web (Exemplo: "admin","adm2")

/************ Configurações do Gerenciamento do CronJob ************/
$_PanelAdmin["CronbJob"]["Security"] = array("seulogindeadmaqui", "seulogindeadmaqui", ); // -- Contas com permisão de gerenciar o CronJob (Exemplo: "admin","adm2")

/************ Configurações do Gerenciar Contas ************/
$_PanelAdmin["Accounts"]["Manage"] = 3; // -- Permisão minima para Gerenciar Contas
$_PanelAdmin["Accounts"]["Ban"]["Send_Mail"] = true; // -- Enviar E-Mail a conta caso for banida (Padrão -> true)

/************ Configurações do Gerenciar Personagens ************/
$_PanelAdmin["Characters"]["Create"] = 3; // -- Permisão minima para Criar Personagens
$_PanelAdmin["Characters"]["Manage"] = 3; // -- Permisão minima para Editar Personagens
$_PanelAdmin["Characters"]["Ban"]["Send_Mail"] = true; // -- Enviar E-Mail a conta caso o char for banido (Padrão -> true)

/************ Configurações do Gerenciar Tickets ************/
$_PanelAdmin["Ticket"]["Delete"] = 3; // -- Permisão minima para deletar Tickets

/************ Configurações do Gerenciar Pagamentos ************/
$_PanelAdmin["Payment"]["Auto_Credit"] = true; // -- Creditar Golds altomaticamente ao Confirmar Pagamento (Padrão -> true)
$_PanelAdmin["Payment"]["Delete"] = 3; // -- Permisão minima para deletar Pagamentos

/************ Configurações do Gerenciar VIP ************/
$_PanelAdmin["VIPs"]["All"] = 3; // -- Permisão minima para adicionar VIP em todas as contas Free
						  
/*****************************************************************************
	@ Home Settings
	@ Configurações da Pagina Home
	@ true = Sim
	@ false = Não
*****************************************************************************/
define("Show_News", true); // -- Mostrar Notícias (Padrão -> true)
define("Top_News", 5); // -- Total de Notícias (Padrão -> 7)
define("Board_News", false); // -- Mostrar Notícias do Fórum (Padrão -> true)
define("Show_Warning", true); // -- Mostrar Aviso Importante (Padrão -> true)
define("Siege_Enable", true); // -- Mostrar Informações do Castle Siege
define("Siege_Hour", "16:00"); // -- Hora do Castle Siege
define("Top_Resets", true); // -- Mostrar Top Resets/Master Resets (Padrão -> true)
define("Top_RDayRWeekRMonth", true); // -- Mostrar Top Resets Diarios/Semanais/Mensais (Padrão -> true)
define("Top_PKHero", true); // -- Mostrar Top PK/Hero (Padrão -> true)
define("Top_Guilds", true); // -- Mostrar Top Guilds (Padrão -> true)
define("Show_ScreenShots", true); // -- Mostrar ScreenShots Recentes (Padrão -> true)
define("SIEGE_DATE_FIX", true); // -- Habilite esta opção caso o site exibir somado +1 a data do Siege (Padrão -> TRUE)

/***** Configurações das Notícias via Fórum ************
	@ Modulo 1 : Invision Power Board (IPB)
	@ Modulo 2 : vBulletin
	@ Modulo 3 : phpBB
	@ Modulo 4 : Simple Machines Forum (SMF)
*******************************************************/
$_Home["Board"]["Mode"] = 1; // -- Modulo do Fórum
$_Home["Board"]["Link"] = "http://localhost:8090/board/smf"; // -- Link do Fórum
$_Home["Board"]["MySQL"]["Host"] = "localhost"; // -- Host/IP do MySQL (Padrão -> localhost)
$_Home["Board"]["MySQL"]["User"] = "root"; // -- Úsuario do MySQL
$_Home["Board"]["MySQL"]["Pass"] = "lordmaster"; // -- Senha do MySQL
$_Home["Board"]["MySQL"]["DataBase"] = "invision"; // -- DataBase do Fórum (Padrão -> forum)
$_Home["Board"]["Prefix"] = "ctm_"; // -- Prefixo das Tables (Padrão -> ibf_)
$_Home["Board"]["Forum_ID"] = array(1,2); // -- IDs dos Fóruns das Notícias
$_Home["Board"]["Debug"] = false; // -- Ativar Debug dos Titulos (Caso esteja Bugado)
$_Home["Board"]["Top_News"] = 7; // -- Tota de Notícias (Padrão -> 7)
$_Home["Board"]["Target"] = true; // -- Abrir em nova Janela (Padrão -> true)

/*****************************************************************************
	@ Ranking Settings
	@ Configurações dos Rankings
	@ true = Sim
	@ false = Não
******************************************************************************/
$_Ranking["Reset"] = array(true /* Ativar/Desativar */,50 /* Limite */); // -- Ranking de Reset
$_Ranking["tempoonline"] = array(true /* Ativar/Desativar */,50 /* Limite */); // -- Ranking de Reset Diario
$_Ranking["ResetWeek"] = array(true /* Ativar/Desativar */,50 /* Limite */); // -- Ranking de Reset Semanal
$_Ranking["ResetMonth"] = array(true /* Ativar/Desativar */,50 /* Limite */); // -- Ranking de Reset Mensal
$_Ranking["MReset"] = array(true /* Ativar/Desativat */,50 /* Limite */); // -- Ranking de Master Reset
$_Ranking["Guild"] = array(true /* Ativar/Desativar */,50 /* Limite */); // -- Ranking de Guilds
$_Ranking["PK"] = array(true /* Ativar/Desativar */,50 /* Limite */); // -- Ranking de PK
$_Ranking["Hero"] = array(true /* Ativar/Desativar */,50 /* Limite */); // -- Ranking de Hero
$_Ranking["Gens"] = array(false /* Ativar/Desativar */,50 /* Limite */); // -- Ranking de Gens
##################################################################
	# Gens Ranking
	# Configurações do Ranking de Gens
	# Modulo 1 : ENCGames and Softwares
##################################################################
$_Ranking["Gens"]["Enable"] = false; // -- Ativar/Desativar Ranking de Gens
$_Ranking["Gens"]["Module"] = 1; // -- Modulo de Gens
$_Ranking["Gens"]["DB"] = "MuOnline_ENC"; // -- DataBase de Gens (Padrão -> MuOnline)
$_Ranking["Gens"]["Table"] = "T_GensSystem"; // -- Tabela de Gens (Padrão -> T_GensSystem)
##################################################################
	# Tops Ranking
	# Lista de Top do Gerador de Rankings
	# Exemplo: 0 => Numero Maximo
##################################################################
$_Ranking["Gerator"]["TOP"] = array(0 => 10,
									1 => 50,
									2 => 100,
									3 => 200,
									);

/*****************************************************************************
	@ Dados Bancarios
	@ Configurações das contas Bancarias
	@ Exemplo: 0 => array("Banco", "Agencia", "Numero da Conta", "Operação", "Favorecido"),
******************************************************************************/
$_BankList = array(0 => array("Itaú #1", "#", "#", "Conta Corrente", "#"),
				  );

/*****************************************************************************
	@ Coin Settings
	@ Configurações de Moedas
******************************************************************************/
define("Coin_Number", 2); // -- Numero de Moedas [De 1 a 3]
define("Coin_1", "Cash"); // -- Nome da Moeda 1
define("Coin_2", "Gold"); // -- Nome da Moeda 2
define("Coin_3", "Point"); // -- Nome da Moeda 3
define("GL_DB", "MuOnline"); // -- DataBase de Golds (Padrão -> MuOnline)
define("GL_Table", "MEMB_INFO"); // -- Tabela de Golds (Padrão -> MEMB_INFO)
define("GL_Column_1", "Cash"); // -- Coluna de Golds 1 (Padrão -> Cash)
define("GL_Column_2", "Gold"); // -- Coluna de Golds 2 (Padrão -> Gold)
define("GL_Column_3", "Points"); // -- Coluna de Golds 3 (Padrão -> Point)
define("GL_Login", "memb___id"); // -- Coluna de Logins para Golds (Padrão -> memb___id)
##################################################################
	# Preços de Coin
	# Exemplo: 0 => array(Numero de Coin, Preço em Dinheiro),
##################################################################
$_Coin = array(0 => array("20", "R$ 1.00"),
			   1 => array("100", "R$ 5.00"),
			   2 => array("200", "R$ 10.00"),
			  );

/*****************************************************************************
	@ VIP Settings
	@ Configurações de Conta VIP
******************************************************************************/
define("VIP_Number", 2); // -- Numero de tipos de VIP [De 2 a 5] (Padrão -> 2)
define("VIP_1", "VIP Silver"); // -- Nome do VIP 1
define("VIP_2", "VIP Gold"); // -- Nome do VIP 2
define("VIP_3", "VIP-Shock"); // -- Nome do VIP 3
define("VIP_4", "VIP-Super"); // -- Nome do VIP 4
define("VIP_5", "VIP-Mega"); // -- Nome do VIP 5
define("VIP_DB", "MuOnline"); // -- DataBase das contas VIP (Padrão -> MuOnline)
define("VIP_Table", "MEMB_INFO"); // -- Tabela das contas VIP (Padrão -> MEMB_INFO)
define("VIP_Column", "Vip"); // -- Coluna de VIP (Padrão -> VIP_Type)
define("VIP_Begin", "VIP_Begin"); // -- Columna de Inicio do VIP (Padrão -> VIP_Begin)
define("VIP_Time", "VIP_Time"); // -- Coluna de Tempo VIP (Padrão -> VIP_Time)
define("VIP_Credits", "VIP_Integer"); // -- Coluna de Tempo em numeros Inteiros (Padrão -> VIP_Integer)
define("VIP_Login", "memb___id"); // -- Coluna de Logins VIP (Padrão -> memb___id)
##################################################################
	# Preços de VIP
	# Os preços é em Coin
	# Exemplo: 0 => array(Dias de VIP, Preço em Coins),
##################################################################
/****************** VIP 1 *******************/
$_VIP[1] =	array(0 => array(30, 100),
			  	  1 => array(90, 300),
			  	  2 => array(365, 600),
			 	 );
/****************** VIP 2 *******************/
$_VIP[2] =	array(0 => array(30, 200),
			 	  1 => array(90, 600),
			 	  2 => array(365, 1200),
			 	 );
				 
/****************** VIP 3 *******************/
$_VIP[3] =	array(0 => array(30, 10),
			 	  1 => array(90, 30),
			 	  2 => array(365, 120),
			 	 );

/****************** VIP 4 *******************/
$_VIP[4] =	array(0 => array(30, 10),
			 	  1 => array(90, 30),
			 	  2 => array(365, 120),
			 	 );

/****************** VIP 5 *******************/
$_VIP[5] =	array(0 => array(30, 10),
			 	  1 => array(90, 30),
			 	  2 => array(365, 120),
			 	 );
				 
				 
/*****************************************************************************
	@ CronJob Settings
	@ Configurações do sistema de CronJob
	@ true = Sim
	@ false = Não
******************************************************************************/
define("CronJob_Enable", false); // -- Ativar/Desativar CronJob
define("CronJob_Debug", false); // -- Ativar/Desativar Modo Debug
define("CronJob_Clear", false); // -- Ativar/Desativar Sistema para reativação dos CronTabs
define("CronJob_Time", "05"); // -- Hora para Reativar os CronTabs
define("CronJob_Minute", "42"); // -- Minuto para Reativar os CronTabs
				 
/*****************************************************************************
	@ Class Settings
	@ Configurações da Classes
******************************************************************************/
$_ClassType = array("DW" => array(0, "Dark Wizard"), // -- Dark Wizard
				    "SM" => array(1, "Soul Master"), // -- Soul Master
					"GM" => array(2, "Grand Master"), // -- Grand Master
					"DK" => array(16, "Dark Knight"), // -- Dark Knight
					"BK" => array(17, "Blade Knight"), // -- Blade Knight
					"BM" => array(18, "Blade Master"), // -- Blade Master
					"FE" => array(32, "Fary Elf"), // -- Fary Elf
					"ME" => array(33, "Muse Elf"), // -- Muse Elf
					"HE" => array(34, "High Elf"), // -- High Elf
					"MG" => array(48, "Magic Gladiator"), // -- Magic Gladiator
					"DM" => array(49, "Duel Master"), // -- Duel Master
					"DM2" => array(50, "Duel Master"), // -- Duel Master (Em algumas versões Season 4/Superior)
					"DL" => array(64, "Dark Lord"), // -- Dark Lord
					"LE" => array(65, "Lord Emperor"), // -- Lord Emperor
					"LE2" => array(66, "Lord Emperor"), // -- Lord Emperor (Em algumas versões Season 4/Superior)
					"SU" => array(80, "Summoner"), // -- Summoner
					"BS" => array(81, "Blood Summoner"), // -- Blood Summoner
					"DIM" => array(82, "Dimension Master"), // -- Dimension Master
					"RF" => array(96, "Rage Fighter"), // -- Rage Fighter (Season 6)
					"FM" => array(98, "Fist Master"), // -- Fist Master (Season 6)
				    );
					
/*****************************************************************************
	@ Map Settings
	@ Configurações dos Mapas
	@ Exemplo: 0 => array(Numero do Mapa, Coordenada X, Coordenada Y, "Nome do Mapa"),
******************************************************************************/
$_MapInfo = array(0 => array(0, 125, 125, "Lorencia"),
    			  1 => array(1, 231, 126, "Dungeon"),
                  2 => array(2, 120, 38, "Devias"),
    			  3 => array(3, 174, 108, "Noria"),
   				  4 => array(4, 207, 78, "Lost Tower"), 
      			  5 => array(6, 62, 114, "Stadium"),
   				  6 => array(7, 16, 14, "Atlans"),
          		  7 => array(8, 202, 68, "Tarkan"),
   				  8 => array(10, 125, 125, "Icarus"),
    			  9 => array(24, 125, 125, "Kalima 1"),
    			  10 => array(25, 125, 125, "Kalima 2"),
    			  11 => array(26, 125, 125, "Kalima 3"),
    			  12 => array(27, 125, 125, "Kalima 4"),
    			  13 => array(28, 125, 125, "Kalima 5"),
    			  14 => array(29, 125, 125, "Kalima 6"),
   				  15 => array(36, 125, 125, "Kalima 7"),
    			  16 => array(30, 93, 214, "Valey of Loren"),
    			  17 => array(31, 93, 214, "Land of Trial"),
    			  18 => array(33, 84, 13, "Aida"),
    			  19 => array(34, 228, 41, "Crywolf"),
    			  20 => array(37, 71, 218, "KantruLand"),
    			  21 => array(38, 71, 105, "KantruRuin"),
    			  22 => array(39, 69, 185, "Kantru Island"),
    			  23 => array(41, 28, 76, "Barracks"),
    			  24 => array(42, 97, 185, "Refuge"),
    			  25 => array(51, 51, 216, "Elbeland"),
    			  26 => array(56, 140, 106, "Swamp of Calmness"),
    			  27 => array(57, 221, 210, "Raklion"),
    			  28 => array(64, 51, 216, "Vulcanus"),
    			  29 => array(79, 51, 216, "Loren Market"),
   				  30 => array(80, 126, 124, "Kalrutan 1"),
    			  31 => array(81, 163, 16, "Kalrutan 2"),
    			  );

?>
