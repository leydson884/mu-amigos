/*
//##############################################//
// -> Effect Web                                //
// -> Powered By: Erick-Master                  //
// -> CTM TeaM Softwares                        //
// -> www.ctmts.com.br                          //
//##############################################//
*/

/* DataBase do Servidor (Padr�o -> MuOnline) */
USE [MuOnline]
GO

/******************************************************
	@ Size: 1200 (Vers�es abaixo de 1.02N)
	@ Size: 1920 (Vers�es 1.02N ou Superior)
	@ Size: 3480 (Vers�es Season 6 EP2 ou EP3)
	@ Aletere "Size" para o n�mero de sua Vers�o
*******************************************************/

ALTER TABLE dbo.warehouse ADD CTM_Vault varbinary(Size) NULL
GO