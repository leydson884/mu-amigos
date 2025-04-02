/*
//##############################################//
// -> Effect Web                                //
// -> Powered By: Erick-Master                  //
// -> CTM TeaM Softwares                        //
// -> www.ctmts.com.br                          //
//##############################################//
*/

/* DataBase do Web Site (Padrão -> CTM_TeaM) */
USE [CTM_TeaM]
GO

/***************************************

	@ No lugar de Type coloque 1 para= Game Master
	@ No lugar de Type coloque 2 para= Sub-Administrador
	@ No lugar de Type coloque 3 para = Administrador

****************************************/

INSERT INTO dbo.CTM_WebStaff (account,name,type,contact) VALUES ('Conta','Nome_do_Char',Type,'Contato')
GO