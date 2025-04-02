<?php
//**********************************************//
// -> Effect Web                                //
// -> Powered By: Erick-Master                  //
// -> CTM TeaM Softwares                        //
// -> www.ctmts.com.br                          //
//**********************************************//

$Page_Request = strtolower(basename($_SERVER['REQUEST_URI']));
$Page_File = strtolower(basename(__FILE__));
if ($Page_Request == $Page_File)
{
	exit("<span style=\"border:1px dashed #c00; color:#c00; padding:6px; background-color:#ffebe8;\"><strong>CTM-Error: N&atilde;o &eacute; permitido acessar o arquivo diretamente.</strong></span>");
}

if(!class_exists("CTM_General")) :

class CTM_General extends CTM_MSSQL
{
	private $Key = NULL;
	private $Connect = NULL;
	private $Re_Connect = NULL;
	private static $keyOpened	= NULL;
	private static $keyMD5		= NULL;
	
	public function __construct()
	{
		global $CTM_Template, $CTM_Pages, $CTM, $_RaffleSystem, $_Panel;
		$CTM_Header = new CTM_Header();
		$this->Logout_Command();
		
		$GLOBALS['Check_Logged'] = $this->Check_Logged(false);
		
		if($GLOBALS['Check_Logged'])
		{
			$_SESSION['Hash_Account'] = str_replace(array("'", ";", "--"), NULL, $_SESSION['Hash_Account']);
			$_SESSION['Web_ManageChar'] = str_replace(array("'", ";", "--"), NULL, $_SESSION['Web_ManageChar']);
		}
		
		/***************************************************
			@ General
		****************************************************/
		$CTM_Template->Set("Server_Name", Server_Name);
		$CTM_Template->Set("%TITLE_WEB%", Web_Title);
		$CTM_Template->Set("Web_Version", base64_decode(Web_Version));
		$CTM_Template->Set("Footer", "Effect Web ".base64_decode(constant("Web_Version")));
		$CTM_Template->Set("Div#Panel", "<script>CTM_Load('?ajax=panel','Panel','GET');</script>");
		$CTM_Template->Set("Server_List", "<script>CTM_Load('?ajax=servers','Servers','GET');</script>");
		$CTM_Template->Set("Web_Poll", "<script>CTM_Load('?ajax=poll','Web_Poll','GET');</script>");
		$CTM_Template->Set("Staff_List", "<script>CTM_Load('?ajax=staff','StaffList','GET');</script>");
		$CTM_Template->Set("%WEB_NAVIGATION%", $CTM_Pages->Index());
		$CTM_Template->Set("Coin_1", Coin_1);
		$CTM_Template->Set("Coin_2", Coin_2);
		$CTM_Template->Set("Coin_3", Coin_3);
		$CTM_Template->Set("VIP_Name#1", VIP_1);
		$CTM_Template->Set("VIP_Name#2", VIP_2);
		$CTM_Template->Set("VIP_Name#3", VIP_3);
		$CTM_Template->Set("VIP_Name#4", VIP_4);
		$CTM_Template->Set("VIP_Name#5", VIP_5);
		$CTM_Template->Set("Year", date("Y"));
		
		/***************************************************
			@ Record
		****************************************************/
		$this->ServerRecord();
		$Record = $this->FetchQuery("SELECT Record,Data FROM dbo.{$CTM[1]} WHERE Type=1 ORDER BY id DESC");
		$CTM_Template->Set("Record_Gen#Date", date("d/m/Y", $Record[1]));
		$CTM_Template->Set("Record_Gen#Time", date("H:i", $Record[1]));
		$CTM_Template->Set("Record_Gen#Players", $Record[0]);
		
		/**************** Record Day *****************/
		$this->ServerRecord();
		$Record_Day = $this->FetchQuery("SELECT Record,Data FROM dbo.{$CTM[1]} WHERE Type=2");
		$CTM_Template->Set("Record_Day#Date", date("d/m/Y", $Record_Day[1]));
		$CTM_Template->Set("Record_Day#Time", date("H:i", $Record_Day[1]));
		$CTM_Template->Set("Record_Day#Players", $Record_Day[0]);
		
		/***************************************************
			@ Information
		****************************************************/
		switch(constant("Server_BB"))
		{
			case 0 : $_Info["BB"] = "<span style=\"color:red\">Offline</span>"; break;
			case 1 : $_Info["BB"] = "<span style=\"color:green;\">Online</span>"; break;
			case 2 : $_Info["BB"] = "<span style=\"color:blue;\">".constant("BB_Text")."</span>"; break;
		}
		switch($_Panel["Char"]["Reset"]["General"]["Mode"])
		{
			case 1 : $_Info["Reset_Type"] = "Acumulativo"; break;
			case 2 : $_Info["Reset_Type"] = "Pontuativo"; break;
		}
		$_Info["Accounts"] = $this->ServerInfo(1, MuAcc_DB, "MEMB_INFO", FALSE, FALSE, FALSE);
		$_Info["Characters"] = $this->ServerInfo(1, MuGen_DB, "Character", FALSE, FALSE, FALSE);
		$_Info["Guilds"] = $this->ServerInfo(1, MuGen_DB, "Guild", FALSE, FALSE, FALSE);
		$_Info["VIP-1"] = $this->ServerInfo(2, VIP_DB, VIP_Table, VIP_Column, 1, FALSE);
		$_Info["VIP-2"] = $this->ServerInfo(2, VIP_DB, VIP_Table, VIP_Column, 2, FALSE);
		$_Info["VIP-3"] = $this->ServerInfo(2, VIP_DB, VIP_Table, VIP_Column, 3, FALSE);
		$_Info["Acc_Ban"] = $this->ServerInfo(2, MuAcc_DB, "MEMB_INFO", "bloc_code", 1, FALSE);
		$_Info["Char_Ban"] = $this->ServerInfo(2, MuGen_DB, "Character", "CtlCode", 1, FALSE);
		/************************** @ Set Template @ **************************/
		$CTM_Template->Set("@_Info#Version", Server_Version);
		$CTM_Template->Set("@_Info#Xp", Server_Xp);
		$CTM_Template->Set("@_Info#Drop", Server_Drop);
		$CTM_Template->Set("@_Info#Accounts", $_Info["Accounts"][0]);
		$CTM_Template->Set("@_Info#Characters", $_Info["Characters"][0]);
		$CTM_Template->Set("@_Info#Guilds", $_Info["Guilds"][0]);
		$CTM_Template->Set("@_Info#VIP-1", $_Info["VIP-1"][0]);
		$CTM_Template->Set("@_Info#VIP-2", $_Info["VIP-2"][0]);
		$CTM_Template->Set("@_Info#VIP-3", $_Info["VIP-3"][0]);
		$CTM_Template->Set("@_Info#Acc_Ban", $_Info["Acc_Ban"][0]);
		$CTM_Template->Set("@_Info#Char_Ban", $_Info["Char_Ban"][0]);
		$CTM_Template->Set("@_Info#BugBless", $_Info["BB"]);
		$CTM_Template->Set("@_Info#ResetType", $_Info["Reset_Type"]);
		
		/***************************************************
			@ Menu
		****************************************************/
		$CTM_Template->Set("Menu#Suportt_Phone", Suportt_Phone == TRUE ? "<li><a href=\"javascript: void(EffectWeb);\" onclick=\"CTM_Load('?pag=contact&type=phone','conteudo','GET');\">Telefone</a></li>" : NULL);
		$CTM_Template->Set("Menu#Suportt_Forum", Forum_Enable == TRUE ? "<li><a target=\"_black\" href=\"".Suportt_Forum."\">F&oacute;rum</a></li>" : NULL);
		$CTM_Template->Set("Menu#Orkut_Link", Orkut_Link);
		$CTM_Template->Set("Menu#Twitter_Link", Twitter_Enable == TRUE ? "<li><a target=\"_black\" href=\"".Twitter_Link."\">Twitter</a></li>" : NULL);
		$CTM_Template->Set("Menu#Chat", Chat_Enable == TRUE ? "<li><a href=\"javascript: void(EffectWeb);\" onclick=\"CTM_Load('?pag=chat','conteudo','GET');\">Chat ".Server_Name."</a></li>" : NULL);
		$CTM_Template->Set("Menu#Extras", $CTM_Header->Menu_Extras());
		$CTM_Template->Set("Menu#Shops", $CTM_Header->Menu_Shops());
		$CTM_Template->Set("Menu#Forum", Forum_Enable == TRUE ? "<!-- Forum Links -->\n<li><a target=\"_black\" href=\"".Forum_Link."\">F&oacute;rum</a></li>" : NULL);
		$CTM_Template->Set("Menu#Raffles", $_RaffleSystem["Enable"] == TRUE && $_RaffleSystem["List"]["Enable"] == TRUE ? "<li><a href=\"javascript: void(EffectWeb);\" onclick=\"CTM_Load('?pag=raffles','conteudo','GET');\">Players Sorteados</a></li>" : NULL); 
		
		/***************************************************
			@ Template Selector
		****************************************************/
/*
		{
			$CTM_Template->Set("Template_Selector", Template_Selector == TRUE ? "<form name=\"Select_Template\" id=\"Select_Template\">
        <strong class=\"colr\" style=\"font-size: 12px;\">Template: </strong>\n<select name=\"Template\" id=\"Template\" onchange=\"window.location='?tpl='+document.getElementById('Template').value\">
		".$CTM_Header->Template_Selector()."
		</select>
        </form>" : NULL);
		}
		elseif
		{
			$CTM_Template->Set("Template_Selector", NULL);
		}*/
		
		/***************************************************
			@ Command New License
		****************************************************/
		if($_GET["exec"] == "new_license" && in_array($_SESSION["Hash_Account"], $GLOBALS['_PanelAdmin']["Manage"]["EffectWeb"]))
		{
			global $CTM_Crypt;
			
			//$_SESSION[$_SESSION["EffectWeb_Hash"]] = FALSE;
			$Unlink = @fopen("modules/core/Core_License.dat", "w");
			@fclose($Unlink);
			sleep(1);
			echo("<script>location=\"?\"</script>");
		}
		
		/***************************************************
			@ Check Web ManageChar
		****************************************************/
		if(connection_aborted() == TRUE)
		{
			@session_destroy();
			//$_SESSION["Web_ManageChar"] = NULL;
		}
	}
/*	private function Update_Key()
	{
		global $Update_Key;
		
		if($_GET["cmd"] == "check_key")
		{
			if(constant("Update_Key") != $Update_Key)
			{
				exit("<div class=\"error-box\">Chave de Update incorreta</div>");
			}
			else
			{
				exit("<script>setTimeout(\"count()\", 1000);</script>
					<div class=\"success-box\">Site atualizado com Sucesso<br>Aguarde, voc&ecirc; ser&aacute; Redirecionado em <strong><font id=\"time\">5</font> segundo(s)</strong>.</div>");
			}
		}
*		if(constant("Update_Key") != $Update_Key)
		{
			new CTM_Engine();
			CTM_Engine::UpdateKey_ChangeLog();
			exit(false);
		}
	}
*/	private function Logout_Command()
	{
		if($_GET["exec"] == "logout")
		{
			$_SESSION["Web_ManageChar"] = NULL;
			$_SESSION["Hash_Account"] = NULL;
			$_SESSION["Hash_Password"] = NULL;
			header("Location: ?");
		}
	}
	public function ServerInfo($Type, $DataBase, $Table, $Column, $Where, $Command)
	{
		if($Type == 1)
		{
			return $this->FetchQuery("SELECT count(*) FROM {$DataBase}.dbo.{$Table}");
		}
		if($Type == 2)
		{
			return $this->FetchQuery("SELECT count(*) FROM {$DataBase}.dbo.{$Table} WHERE {$Column}='{$Where}'");
		}
		if($Type == 3)
		{
			$Cmd = $Command == 1 ? ">" : "<";
			return $this->FetchQuery("SELECT count(*) FROM {$DataBase}.dbo.{$Table} WHERE {$Column}{$Cmd}'{$Where}'");
		}
	}
	public function ServerRecord()
	{
		global $CTM;
		$Request = $this->FetchQuery("SELECT count(*) FROM ".MuAcc_DB.".dbo.MEMB_STAT WHERE ConnectStat=1");
		$Query[0] = $this->Query("SELECT Record FROM dbo.{$CTM[1]} WHERE Type=1 ORDER BY Id DESC");
		$Query[1] = $this->Query("SELECT Record FROM dbo.{$CTM[1]} WHERE Type=2");
		$Check[0] = $this->NumRow($Query[0]);
		$Check[1] = $this->NumRow($Query[1]);
		
		if($Check[0] < 1)
		{
			$Date = strtotime("now");
			$this->Query("INSERT INTO {$CTM[1]} (Record,Data,Type) VALUES ({$Request[0]},'{$Date}',1)");
		}
		else
		{
			$Record = $this->Fetch($Query[0]);
			if($Request[0] > $Record[0])
			{
				$Date = strtotime("now");
				$this->Query("INSERT INTO {$CTM[1]} (Record,Data,Type) VALUES ({$Request[0]},'{$Date}',1)");
			}
		}
		if($Check[1] < 1)
		{
			$Date = strtotime("now");
			$this->Query("INSERT INTO {$CTM[1]} (Record,Data,Type) VALUES ({$Request[0]},'{$Date}',2)");
		}
		else
		{
			$Record_Day = $this->Fetch($Query[1]);
			if($Request[0] > $Record_Day[0])
			{
				$Checking = $this->NumQuery("SELECT * FROM dbo.{$CTM[1]} WHERE Type=2");
				$Date = strtotime("now");
				if($Checking < 1)
				{
					$this->Query("INSERT INTO dbo.{$CTM[1]} (Record,Data,Type) VALUES ({$Request[0]},'{$Date}',2)");
				}
				else
				{
					$this->Query("UPDATE dbo.{$CTM[1]} SET Record={$Request[0]},Data={$Date} WHERE Type=2");
				}
			}
		}
	}
	public function Check_Logged($Cheking = 1)
	{
		if($Cheking == 1)
		{
			if(isset($_SESSION["Hash_Account"]) == FALSE || isset($_SESSION["Hash_Password"]) == FALSE)
			{
				exit("<div class=\"info-box\"> Somente usuarios logados tem acesso a est&aacute; pagina.</div>");
			}
		}
		if($Cheking == 2)
		{
			if(
			(isset($_SESSION["Hash_Account"]) == FALSE && isset($_SESSION["Hash_Password"]) == FALSE) ||
			(isset($_SESSION["Hash_Account"]) == FALSE && isset($_SESSION["Hash_Password"]) == TRUE) ||
			(isset($_SESSION["Hash_Password"]) == FALSE && isset($_SESSION["Hash_Account"]) == TRUE))
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			if(
			(isset($_SESSION["Hash_Account"]) == TRUE && isset($_SESSION["Hash_Password"]) == TRUE) ||
			(isset($_SESSION["Hash_Account"]) == TRUE && isset($_SESSION["Hash_Password"]) == FALSE) ||
			(isset($_SESSION["Hash_Password"]) == TRUE && isset($_SESSION["Hash_Account"]) == FALSE))
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
	}
	public function Check_Banned()
	{
		$Check = $this->FetchQuery("SELECT bloc_code FROM ".MuAcc_DB.".dbo.MEMB_INFO WHERE memb___id='".$_SESSION["Hash_Account"]."'");
		if($Check[0] == 1)
		{
			exit("<div class=\"info-box\"> Sua conta est&aacute; banida</div>");
		}
	}
	public function Check_Staff()
	{
		global $CTM;
		
		$Check[0] = $this->NumQuery("SELECT * FROM dbo.{$CTM[0]} WHERE account='".$_SESSION["Hash_Account"]."'");
		if($Check[0] > 0)
		{
			$Check[1] = $this->FetchQuery("SELECT type FROM dbo.{$CTM[0]} WHERE account='".$_SESSION["Hash_Account"]."'");
		}
		if($Check[0] < 1 || $Check[1][0] < 1)
		{
			exit("<div class=\"info-box\"> Voc&ecirc; n&atilde;o contem privilegio para acessar esta pagina</div>");
		}
	}
	public function Check_Coin_Table($Account)
	{
		if(constant("GL_Table") != "MEMB_INFO")
		{
			$Check_Exists = $this->NumQuery("SELECT * FROM ".GL_DB.".dbo.".GL_Table." WHERE ".GL_Login."='{$Account}'");
			
			if($Check_Exists < 1)
			{
				$this->Query("INSERT INTO ".GL_DB.".dbo.".GL_Table." (".GL_Column_1.",".GL_Login.") VALUES (0,'{$Account}')");
				return TRUE;
			}
			else
			{
				return TRUE;
			}
		}
		else
		{
			return TRUE;
		}
	}
	public function Image($Char)
	{
		global $CTM;
		
		$Image = $this->FetchQuery("SELECT {$CTM[C][0]} FROM ".MuGen_DB.".dbo.Character WHERE Name='{$Char}'");
		$Request = constant("Upload_Img");
		if($Image[0] == NULL)
		{
			$Image[0] = "nophoto.gif";
		}
		return file_exists($Request.$Image[0]) == TRUE ? $Request.$Image[0] : $Request."nophoto.gif";
	}
	public function ClassName($Char)
	{
		global $_ClassType;
		
		switch($Char)
		{
			case $_ClassType["DW"][0] : return $_ClassType["DW"][1]; break;
			case $_ClassType["SM"][0] : return $_ClassType["SM"][1]; break;
			case $_ClassType["GM"][0] : return $_ClassType["GM"][1]; break;
			case $_ClassType["DK"][0] : return $_ClassType["DK"][1]; break;
			case $_ClassType["BK"][0] : return $_ClassType["BK"][1]; break;
			case $_ClassType["BM"][0] : return $_ClassType["BM"][1]; break;
			case $_ClassType["FE"][0] : return $_ClassType["FE"][1]; break;
			case $_ClassType["ME"][0] : return $_ClassType["ME"][1]; break;
			case $_ClassType["HE"][0] : return $_ClassType["HE"][1]; break;
			case $_ClassType["MG"][0] : return $_ClassType["MG"][1]; break;
			case $_ClassType["DM"][0] : return $_ClassType["DM"][1]; break;
			case $_ClassType["DM2"][0] : return $_ClassType["DM2"][1]; break;
			case $_ClassType["DL"][0] : return $_ClassType["DL"][1]; break;
			case $_ClassType["LE"][0] : return $_ClassType["LE"][1]; break;
			case $_ClassType["LE2"][0] : return $_ClassType["LE2"][1]; break;
			case $_ClassType["SU"][0] : return $_ClassType["SU"][1]; break;
			case $_ClassType["BS"][0] : return $_ClassType["BS"][1]; break;
			case $_ClassType["DIM"][0] : return $_ClassType["DIM"][1]; break;
			case $_ClassType["RF"][0] : return $_ClassType["RF"][1]; break;
			case $_ClassType["FM"][0] : return $_ClassType["FM"][1]; break;
		}
	}
	public function Map($Char)
	{
		global $_MapInfo;
		
		for($MP = 0; $MP < count($_MapInfo); $MP++)
		{
			switch($Char)
			{
				case $_MapInfo[$MP][0] : return $_MapInfo[$MP][3]; break;
			}
		}
	}
	public function Memb_Type($Acc)
	{
		switch($Acc)
		{
			case 0 : return "Free"; break;
			case 1 : return VIP_1; break;
			case 2 : return VIP_2; break;
			case 3 : return VIP_3; break;
			case 4 : return VIP_4; break;
			case 5 : return VIP_5; break;
			default : return "Erro"; break;
		}
	}
	public function VIP($Type, $Account)
	{
		$Send = $this->FetchQuery("SELECT ".VIP_Begin.",".VIP_Time.",".VIP_Column." FROM ".VIP_DB.".dbo.".VIP_Table." WHERE ".VIP_Login."='{$Account}'");
		switch($Type)
		{
			case 1 : return $Send[2] > 0 ? date("d/m/Y", $Send[0])." as ".date("H:i", $Send[0]) : "Nunca"; break;
			case 2 : return $Send[2] > 0 ? date("d/m/Y", $Send[1])." as ".date("H:i", $Send[1]) : "Nunca"; break;
		}
	}
	private function Developer_Check_License()
	{
		if(isset($_GET["developer_key"]) == TRUE)
		{
			if(md5($_GET["developer_key"]) == "c9857069166675b45fd64ab3b6ea14f6")
			{
				eval(CTM_Crypt::stringNewDecoder(file_get_contents("modules/core/Core_License.dat")));
				print("<pre>"); print_r($CTM_License); print("</pre>");
				exit(false);
			}
		}
	}
	private function License_Page($Message)
	{
		$Message = base64_encode($Message);
		new CTM_Engine();
		$this->Activator();
		CTM_Engine::License($Message);
		exit(false);
	}
/*	private final function Check_Server_Addr($Location)
	{
		$Addr_USA_Host = array("cpanel.ctmts.com.br", "changelog.ctmts.com.br", "down.ctmts.com.br");
		$Addr_BRA_Host = array("getaddr.ctmts.com", "ftp.ctmts.com", "ctmts.web331.kinghost.net");
		$GetLocation = $Location == 0 ? "ctmts.com.br" : "ctmts.com";
		$SubLocation = $Location == 0 ? $Addr_USA_Host[0] : $Addr_BRA_Host[0];
		$AddLocation = $Location == 0 ? $Addr_USA_Host[1] : $Addr_BRA_Host[1];
		$CTMLocation = $Location == 0 ? $Addr_USA_Host[2] : $Addr_BRA_Host[2];
		$KeyLocation = $Location == 0 ? "license.ctmts.com.br" : "license.ctmts.com";
		$GetHostAddr = $Location == 0 ? "getaddr.ctmts.com.br" : "getaddr.ctmts.com";
		$Find_ServerAddr = array(
		gethostbyname($GetLocation), 
		gethostbyname($SubLocation), 
		gethostbyname($AddLocation),
		gethostbyname($CTMLocation));
		$Find_KeyURLAddr = gethostbyname($KeyLocation);
		$Find_DomainAddr = gethostbyname($this->Server);
		$Find_HostAddr = gethostbyname($_SERVER["SERVER_NAME"]);
		$CTM_cURL = new CTM_cURL("http://{$GetHostAddr}/");
		$CTM_cURL->SetOPT("Timeout", 10);
		$CTM_cURL->SetOPT("Return");
		
		if($this->Server == "localhost" || $this->Server == "127.0.0.1")
		{
			$Check_addrByServer = FALSE;
		}
		else
		{
			$Check_addrByServer = TRUE;
		}
		
		if(
		($Find_KeyURLAddr != $Find_ServerAddr[0]) || 
		($Find_KeyURLAddr != $Find_ServerAddr[1]) ||
		($Find_KeyURLAddr != $Find_ServerAddr[2]) || 
		($Find_KeyURLAddr != $Find_ServerAddr[3]) ||
		($Find_DomainAddr != $Find_HostAddr) ||
		($Check_addrByServer == TRUE && $Find_DomainAddr != $CTM_cURL->Exec_cURL()))
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
		return TRUE;
	}
	private function domainAddr($Location)
	{
		$GetHostAddr = $Location == 0 ? "core.ctmts.com/addr.php" : "core.ctmts.com.br/addr.php";
		$CTM_cURL = new CTM_cURL("http://{$GetHostAddr}?core=0xF2");
		$CTM_cURL->SetOPT("Timeout", 10);
		$CTM_cURL->SetOPT("Post");
		$CTM_cURL->SetOPT("Fields", array("VALUE" => $this->Server));
		$CTM_cURL->SetOPT("Return");
		
		return pack("H*", str_replace("0x", NULL, $CTM_cURL->Exec_cURL()));
	}
	private final function Check_Server_Addr($Location)
	{
		$GetHostAddr = $Location == 0 ? "core.ctmts.com/addr.php" : "core.ctmts.com.br/addr.php";
		$CTM_cURL = new CTM_cURL("http://{$GetHostAddr}?core=0xF2");
		$CTM_cURL->SetOPT("Timeout", 10);
		$CTM_cURL->SetOPT("Return");
		$cURL = pack("H*", str_replace("0x", NULL, $CTM_cURL->Exec_cURL()));
		
		if($this->domainAddr($Location) != $cURL)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	private function Activator()
	{
		global $CTM_Crypt, $Update_Key;
		
		if($_GET["cmd"] == TRUE)
		{
			$Serial = str_replace("-", "", $_POST["Serial"]);
				
			if(empty($Serial))
			{
				exit("<div class=\"warning-box\"> Digite um serial v&aacute;lido.</div>");
			}
			elseif(strlen($_POST["Serial"]) < 29 || ereg("-",$_POST["Serial"]) == FALSE)
			{
				exit("<div class=\"error-box\"> Serial invalido.</div>");
			}
			elseif($this->Check_Server_Addr(constant("Server_Location")) == FALSE)
			{
				exit("<div class=\"error-box\"> Erro na checagem de Loopback.</div>");
			}
			else
			{
				$cURL_Fields = array(
									"Serial" => $Serial,
									"Address" => $this->Server,
									"Update_Key" => $Update_Key
									);
				$Link .= $this->Activator_Server[constant("Server_Location")]."/";
				$Link .= constant("Product_ID")."/".$this->Key_System.".php?key=true";
				$CTM_cURL = new CTM_cURL("http://".$Link);
				$CTM_cURL->SetOPT("Timeout", 10);
				$CTM_cURL->SetOPT("Post");
				$CTM_cURL->SetOPT("Fields", $cURL_Fields);
				$CTM_cURL->SetOPT("Return");
				//echo $CTM_cURL->Exec_cURL();
				if(
				$CTM_cURL->Info_cURL("File_Exists") <> 200)
				{
					exit("<div class=\"error-box\"> Erro ao conectar ao servidor CTM TEAM. Entre em contato com o Desenvolvedor.</div>");
				}
				else
				{
					$cURL_Dump = $CTM_cURL->Exec_cURL();
					$Pack_Dump = pack("H*", $cURL_Dump);
					if(ereg("0x00FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF", $Pack_Dump) == TRUE)
					{
						exit("<div class=\"error-box\"> Chave de Licen&ccedil;a invalida.</div>");
					}
					elseif(ereg("0x11FFFFFF17835FFFFF267EEEEEEEE861111", $Pack_Dump) == TRUE)
					{
						exit("<div class=\"error-box\"> Sua Chave de Licen&ccedil;a n&atilde;o &eacute; valida para este endere&ccedil;o.</div>");
					}
					elseif(ereg("0x11266666666AAAAAAAAFFFFFFFFFFFFFFF1", $Pack_Dump) == TRUE)
					{
						exit("<div class=\"error-box\"> Sua Chave de Licen&ccedil;a est&aacute; bloqueada.</div>");
					}
					elseif(ereg("0x11F00E9B7A77777777FFFFFFFFFFFFFFFFF", $Pack_Dump) == TRUE)
					{
						$Time = explode("%", $Pack_Dump);
						$Time = date("d/m/Y", $Time[1]);
						exit("<div class=\"error-box\"> Sua Chave de Licen&ccedil;a expirou na data: <b>{$Time}</b>.</div>");
					}
					elseif(ereg("0x11AAAA1111FFFFFFFFFFFFFFFFFF2222AAA", $Pack_Dump) == TRUE)
					{
						exit("<div class=\"error-box\"> Sua Licen&ccedil;a n&atilde;o &eacute; v&aacute;lida para esta vers&atilde;o da Effect Web.</div>");
					}
					elseif(ereg("0x11DF768B28D6AB440EFDFFFFFFFFFFFFFFF", $Pack_Dump) == TRUE)
					{
						$Variable = explode("#", $Pack_Dump);
						
						if(ereg("%", $Variable[0]) == TRUE)
						{
							$Time = explode("%", $Variable[0]);
							$Time = date("d/m/Y", $Time[1]);
						}
						else
						{
							$Time = "Nunca";
						}
						
						$keyData = CTM_Crypt::CodeTech_Decode(base64_decode($Variable[1]));
						$Open = fopen($this->Key_Dir, "w");
						fwrite($Open, CTM_Crypt::stringNewEncoder($keyData, "EW_LICENSE_KEY_0xFFFFFFFFFFFFFFFFFFFF"));
						fclose($Open);
						exit("<script>setTimeout(\"count()\", 1000);</script>
					<div class=\"success-box\"> Produto Ativado!<br />Vencimento: <strong>{$Time}</strong><br />Voc&ecirc; ser&aacute; redirecionado em: <strong><font id=\"time\">5</font> segundo(s)</strong>");
					}
					else
					{
						exit("<div class=\"error-box\"> Erro ao efetuar a verifica&ccedil;&atilde;o de licen&ccedil;a.</div>");
					}
				}
			}
		}
	}
	public static function Open_File_License($Return, $Sub_Return)
	{
		//EW_LICENSE_KEY_0xFFFFFFFFFFFFFFFFFFFF
		if(empty(self::$keyOpened) || md5_file("modules/core/Core_License.dat") != self::$keyMD5)
		{
			$Fopen = file_get_contents("modules/core/Core_License.dat");
			eval(CTM_Crypt::stringNewDecoder($Fopen, "EW_LICENSE_KEY_0xFFFFFFFFFFFFFFFFFFFF"));
			self::$keyOpened = $CTM_License;
			self::$keyMD5 = md5_file("modules/core/Core_License.dat");
		}
		
		return $Return == "License_Info" ? self::$keyOpened["License_Info"][$Sub_Return] : self::$keyOpened[$Return];
	}
	private function Server_Release($Core_Key, $Server, $Re_Connect)
	{
		global $Update_Key;
		
		if($this->Check_Server_Addr($Server) == FALSE)
		{
			return "FALSE#Erro na checagem de Loopback.";
		}
		else
		{
			$sessionKey = md5($Core_Key.$this->Server.$Update_Key.$this->domainAddr(constant("Server_Location")));
			$cURL_Fields = array(
								"Serial" => $Core_Key,
								"Address" => $this->Server,
								"Update_Key" => $Update_Key,
								"SessionKey" => $sessionKey
								);
			$Link = $this->License_Server[$Server]."/".constant("Product_ID")."/".$this->Key_System.".php?request=true";
			$CTM_cURL = new CTM_cURL("http://".$Link);
			$CTM_cURL->SetOPT("Timeout", 10);
			$CTM_cURL->SetOPT("Post");
			$CTM_cURL->SetOPT("Fields", $cURL_Fields);
			$CTM_cURL->SetOPT("Return");
		
			if($CTM_cURL->Info_cURL("File_Exists") <> 200)
			{
				if($Re_Connect == TRUE)
				{
					return "FALSE#Erro ao conectar ao servidor CTM TEAM. Entre em contato com o Desenvolvedor.";
				}
				else
				{
					return "FALSE_RE_CONNECT";
				}
			}
			else
			{
				$Pack_Dump = $CTM_cURL->Exec_cURL();
				//$Pack_Dump = pack("H*", $cURL_Dump);
				
				if(ereg("0xFF", $Pack_Dump) == TRUE)
				{
					return "FALSE#O produto n&atilde;o est&aacute; licenciado para o endere&ccedil;o acessado.";
				}
				elseif(ereg("0x11", $Pack_Dump) == TRUE)
				{
					$Explode = explode("#", $Pack_Dump);
					$Fopen = fopen($this->Key_Dir, "w");
					fwrite($Fopen, base64_decode($Explode[1]));
					fclose($Fopen);
					return "TRUE";
				}
				else
				{
					return "FALSE#Erro ao efetuar a verifica&ccedil;&atilde;o de licen&ccedil;a.";
				}
			}
		}
	}
	private function Check_LicenseArray_File()
	{
		if(self::Open_File_License("License_Code", FALSE) == 0)
		{
			return "FALSE#Sua Chave de Licen&ccedil;a est&aacute; bloqueada.#";
		}
		elseif(ereg($this->Server, self::Open_File_License("Address", FALSE)) == FALSE)
		{
			return "FALSE#Sua Chave de Licen&ccedil;a n&atilde;o &eacute; valida para este endere&ccedil;o.#";
		}
		elseif(self::$keyOpened["License_Type"] < 2 && time() >= self::$keyOpened["Time_Code"])
		{
			$Time = date("d/m/Y", self::$keyOpened["Time_Code"]);
			return "FALSE#Sua Chave de Licen&ccedil;a expirou na data: <b>{$Time}</b>.#";
		}
		elseif(ereg(constant("Binarry_Version"), self::$keyOpened["Key_Version"]) == FALSE)
		{
			return "FALSE#Sua Licen&ccedil;a n&atilde;o &eacute; v&aacute;lida para esta vers&atilde;o da Effect Web.#";
		}
		else
		{
			return "TRUE";
		}
		
	}
	private function Set_File_License($New_CTM_License_Array)
	{
		$Release = fopen($this->Key_Dir, "w");
		fwrite($Release, CTM_Crypt::stringNewEncoder("$"."CTM_License = array(\n\r\n\r\"Security_Code\" => \"".$New_CTM_License_Array["Security_Code"]."\",\n\r\n\r\"Serial_Key\" => \"".$New_CTM_License_Array["Serial_Key"]."\",\n\r\n\r\"Address\" => \"".$New_CTM_License_Array["Address"]."\",\n\r\n\r\"License_Type\" => ".$New_CTM_License_Array["License_Type"].",\n\r\n\r\"Time_Code\" => ".$New_CTM_License_Array["Time_Code"].",\n\r\n\r\"License_Code\" => ".$New_CTM_License_Array["License_Code"].",\n\r\n\r\"Cache_Code\" => ".$New_CTM_License_Array["Cache_Code"].",\n\r\n\r\"Key_Version\" => \"".$New_CTM_License_Array["Key_Version"]."\",\n\r\n\r\"Hash_Time\" => \"".$New_CTM_License_Array["Hash_Time"]."\",\n\r\n\r\"License_Info\" => array(\n\r\n\r	\"Name\" => \"".$New_CTM_License_Array["License_Info"]["Name"]."\",\n\r\n\r	\"Mail\" => \"".$New_CTM_License_Array["License_Info"]["Mail"]."\",\n\r\n\r	\"Server\" => \"".$New_CTM_License_Array["License_Info"]["Server"]."\")\n\r\n\r);", "EW_LICENSE_KEY_0xFFFFFFFFFFFFFFFFFFFF"));
		fclose($Release);
	}
	private static function checkCache()
	{
		if(time() >= self::Open_File_License("Cache_Code", FALSE)) return TRUE;
		if(self::Open_File_License("License_Type", FALSE) < 2 && (time() >= self::Open_File_License("Time_Code", FALSE))) return TRUE;
		
		return FALSE;
	}
	private function Check_License()
	{
		global $Update_Key;
		
		$Location = constant("Server_Location") == 1 ? 1 : 0;
		
		if(constant("License_Cache") == TRUE)
		{
			if(self::checkCache() == TRUE)
			{
				$Serial_Key = str_replace("-", NULL, self::Open_File_License("Serial_Key", FALSE));
				$Dump_Return = $this->Server_Release($Serial_Key, constant("Server_Location"), FALSE);
					
				if(ereg("FALSE#", $Dump_Return) == TRUE)
				{
					$Dump_Return = explode("FALSE#", $Dump_Return);
					$this->License_Page($Dump_Return[1]);
				}
				elseif($Dump_Return == "TRUE")
				{
					$New_CacheKey = strtotime("+ 12 hours");
					$New_CTM_License_Array = array(
					"Security_Code" => self::Open_File_License("Security_Code", FALSE),
					"Serial_Key" => self::Open_File_License("Serial_Key", FALSE),
					"Address" => self::Open_File_License("Address", FALSE),
					"License_Type" => self::Open_File_License("License_Type", FALSE),
					"Time_Code" => self::Open_File_License("Time_Code", FALSE),
					"License_Code" => self::Open_File_License("License_Code", FALSE),
					"Cache_Code" => $New_CacheKey,
					"Key_Version" => self::Open_File_License("Key_Version", FALSE),
					"Hash_Time" => md5(time()),
					"License_Info" => array(
											"Name" => self::Open_File_License("License_Info", "Name"),
											"Mail" => self::Open_File_License("License_Info", "Mail"),
											"Server" => self::Open_File_License("License_Info", "Server"),
											),
					);
					$this->Set_File_License($New_CTM_License_Array);
				}
				elseif($Dump_Return == "FALSE_RE_CONNECT")
				{
					$Dump_Return = $this->Server_Release($Serial_Key, $Location, TRUE);
					
					if(ereg("FALSE#", $Dump_Return) == TRUE)
					{
						$Dump_Return = explode("FALSE#", $Dump_Return);
						$this->License_Page($Dump_Return[1]);
					}
					elseif($Dump_Return == "TRUE")
					{
						$New_CacheKey = strtotime("+ 12 hours");
						$New_CTM_License_Array = array(
						"Security_Code" => self::Open_File_License("Security_Code", FALSE),
						"Serial_Key" => self::Open_File_License("Serial_Key", FALSE),
						"Address" => self::Open_File_License("Address", FALSE),
						"License_Type" => self::Open_File_License("License_Type", FALSE),
						"Time_Code" => self::Open_File_License("Time_Code", FALSE),
						"License_Code" => self::Open_File_License("License_Code", FALSE),
						"Cache_Code" => $New_CacheKey,
						"Key_Version" => self::Open_File_License("Key_Version", FALSE),
						"Hash_Time" => md5(time()),
						"License_Info" => array(
											"Name" => self::Open_File_License("License_Info", "Name"),
											"Mail" => self::Open_File_License("License_Info", "Mail"),
											"Server" => self::Open_File_License("License_Info", "Server"),
											),
						);
						$this->Set_File_License($New_CTM_License_Array);
					}
				}
				/*else
				{
					if(ereg("FALSE#", $this->Check_LicenseArray_File()) == TRUE)
					{
						$this->License_Page(str_replace("FALSE#", NULL, $this->Check_LicenseArray_File()));
					}
				}
			}
			}
		else
		{
			$Serial_Key = str_replace("-", NULL, self::Open_File_License("Serial_Key", FALSE));
			$Dump_Return = $this->Server_Release($Serial_Key, constant("Server_Location"), FALSE);
					
			if(ereg("FALSE#", $Dump_Return) == TRUE)
			{
				$Dump_Return = explode("FALSE#", $Dump_Return);
				$this->License_Page($Dump_Return[1]);
			}
			elseif($Dump_Return == "FALSE_RE_CONNECT")
			{
				$Dump_Return = $this->Server_Release($Serial_Key, $Location, TRUE);
					
				if(ereg("FALSE#", $Dump_Return) == TRUE)
				{
					$Dump_Return = explode("FALSE#", $Dump_Return);
					$this->License_Page($Dump_Return[1]);
				}
			}
			/*else
			{
				if(ereg("FALSE#", $this->Check_LicenseArray_File()) == TRUE)
				{
					$this->License_Page(str_replace("FALSE#", NULL, $this->Check_LicenseArray_File()));
				}
			}
		}
		if(ereg("FALSE#", $this->Check_LicenseArray_File()) == TRUE)
		{
			$this->License_Page(str_replace("FALSE#", NULL, $this->Check_LicenseArray_File()));
		}
	}
	protected function Cheking($Key_File)
	{
		$this->Developer_Check_License();
		
		if($Key_File == TRUE)
		{
			/*if(
			ereg("¿", base64_decode($Key_File)) == FALSE ||
			ereg("¶", base64_decode($Key_File)) == FALSE ||
			ereg("=", base64_decode($Key_File)) == FALSE || 
			ereg("ž", base64_decode($Key_File)) == FALSE || 
			ereg("£", base64_decode($Key_File)) == FALSE || 
			ereg("#", base64_decode($Key_File)) == FALSE ||
			ereg("Ó", base64_decode($Key_File)) == FALSE ||
			ereg("ò", base64_decode($Key_File)) == FALSE ||
			ereg("%", base64_decode($Key_File)) == FALSE ||
			ereg("@", base64_decode($Key_File)) == FALSE ||
			ereg(")*", base64_decode($Key_File)) == FALSE )
			{
				$this->License_Page("O arquivo de licen&ccedil;a est&aacute; corrompido.");
			}
			else
			{
				$this->Check_License();
			}
			
			$this->Check_License();
		}
		else
		{
			$this->License_Page("O produto n&atilde;o est&aacute; licenciado para o endere&ccedil;o acessado.");
		}
	}
	public function License_Limit($Exit)
	{
		global $CTM_Crypt;
		
		if(self::Open_File_License("License_Type", FALSE) < 1)
		{
			if($Exit == 1)
			{
				exit("<div class=\"info-box\"> Esta op&ccedil;&atilde;o se encontra Desativada</div>");
			}
			if($Exit == 2)
			{
				exit("<div class=\"info-box\"> Op&ccedil;&atilde;o disponviel somente nas licen&ccedil;as: Standard e Business</div>");
			}
				
		}
		if($Exit == 3)
		{
			if(self::Open_File_License("License_Type", FALSE) > 0)
			{
				return "PREMIUM";
			}
		}
	}
	public function WebSite_Information($Return)
	{
		global $CTM_Crypt, $Update_Key;
		
		switch(self::Open_File_License("License_Type", FALSE))
		{
			case 0 : $Type = "Free Trial"; break;
			case 1 : $Type = "Standard"; break;
			case 2 : $Type = "Business"; break;
		}
		
		$Not = array("<span style=\"color:red;\">","<span style=\"color:green\">");
		$Close = "</span>";
		
		if(self::Open_File_License("License_Type", FALSE) < 2)
		{
			$Key = $Not[0].date("d/m/Y", self::Open_File_License("Time_Code", FALSE)).$Close;
		}
		else
		{
			$Key = $Not[1]."Nunca".$Close;
		}
		$Serial = self::Open_File_License("Serial_Key", FALSE);
		
		$Link .= $CTM_Crypt->Update_Server[constant("Server_Location")]."/";
		$Link .= constant("Product_ID")."/".$CTM_Crypt->Key_System.".php?key=".bin2hex($Update_Key);
		$CTM_cURL = new CTM_cURL("http://".$Link);
		$CTM_cURL->SetOPT("Timeout", 10);
		$CTM_cURL->SetOPT("Return");
		
		if(
		$CTM_cURL->Info_cURL("File_Exists") <> 200 ||
		$CTM_cURL->Exec_cURL() == "FALSE")
		{
			$New_Version = $Not[1].base64_decode(constant("Web_Version")).$Close;
		}
		else
		{
			eval(base64_decode($CTM_cURL->Exec_cURL()));
			$New_Version = $Not[0].$CTM_Version["New_Version"].$Close;
		}
		
		if($Return == 1)
		{
			return $Key;
		}
		if($Return == 2)
		{
			return $Serial;
		}
		if($Return == 3)
		{
			return $Type;
		}
		if($Return == 4)
		{
			return $New_Version;
		}
		if($Return == 5)
		{
			return self::Open_File_License("License_Info", "Name");
		}
	}*/
}
endif;
?>