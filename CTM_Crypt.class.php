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

if(!class_exists("CTM_Crypt")) :

class CTM_Crypt extends CTM_General
{
	public $Update_Server = NULL;
	public $Server = NULL;
	public $Key_Dir = NULL;
	public $Key_System = NULL;
	private $Key_Open = FALSE;
	private $Key_File = NULL;
	private $Key_Check = NULL;
	protected $Master_Key = FALSE;
	protected $License_Server = FALSE;
	private static $HashAddress_1 = NULL;
	private static $HashAddress_2 = NULL;
	
	public function Pwd($CTM_Crypt)
	{
		$Pwd = @md5(@sha1(@hash("sha512", $Pwd)));
		if($Pwd == false)
		{
			exit("<span style=\"border:1px dashed #c00; color:#c00; padding:6px; background-color:#ffebe8;\">CTM-Error #4: Entre em contato com o Desenvolvedor.</span>");
		}
		return $Pwd;
	}
	public static function CodeTech_Encode($String, $key = NULL)
	{
		$Characters = array(
			 		"a" => "Óò",
			 		"b" => "•²®",
			 		"c" => "7È£",
			 		"d" => "ÿß",
			 		"e" => "%×ƒ",
			 		"f" => " s",
			 		"g" => "[†£",
			 		"h" => "çÂ0",
			 		"i" => "ž«¦",
			 		"j" => "žè",
			 		"k" => "¿oö",
			 		"l" => "¶0™",
			 		"m" => "K/—",
			 		"n" => "#Iò",
			 		"o" => "ß®",
			 		"p" => "»P",
			 		"q" => "–[÷",
			 		"r" => "¿~ÿ",
			 		"s" => "¾Ï{",
			 		"t" => "³§",
			 		"u" => "ööÜ",
			 		"v" => "$@#",
			 		"w" => "=#è",
			 		"y" => "[ <",
			 		"x" => "ñ¯Ÿ",
			 		"z" => "3‹",
			 		"A" => "Ì",
			 		"B" => "ØÐ",
			 		"C" => "¶™Ï",
			 		"D" => "[+*",
			 		"E" => "~áç",
			 		"F" => "Ã­",
			 		"G" => "{+¶",
			 		"H" => "8Y",
			 		"I" => "---",
			 		"J" => "  ",
			 		"K" => "<%…",
			 		"L" => "#–w",
			 		"M" => "ð‡D",
			 		"N" => "çÐ",
			 		"O" => "Xæ‡",
			 		"P" => "¬*&",
			 		"Q" => "³J\"",
			 		"R" => "¶Ø",
			 		"S" => "X³",
			 		"T" => "‡$g",
			 		"U" => "Á­¦",
			 		"V" => "²¾",
			 		"W" => "}ù=",
			 		"Y" => "Üõ",
			 		"X" => "{p-",
			 		"Z" => "=-]",
			 		"0" => "³J\\",
			 		"1" => "®¡",
			 		"2" => "ñÐ",
			 		"3" => "¶",
			 		"4" => "7*q",
			 		"5" => "çã-",
			 		"6" => "#-$",
			 		"7" => "=][",
			 		"8" => "º=ª",
			 		"9" => "K/…",
			 		"á" => "8m?",
			 		"à" => "\ðÍ",
			 		"â" => "i³",
			 		"ã" => "_ ,",
			 		"é" => "{¶&",
			 		"ê" => "Áp#",
			 		"í" => "N ‰",
			 		"ó" => "+7",
			 		"ò" => "%=!",
			 		"õ" => "[-a",
			 		"ç" => "Âq6",
			 		"Á" => "===",
			 		"À" => "\x",
			 		"Â" => "***",
			 		"Ã" => "¾Ï",
			 		"É" => "ž¢¼°",
			 		"Ê" => "\ð‡",
			 		"Í" => "ä–³",
			 		"Ó" => "—=m",
			 		"Ò" => "«¯",
			 		"Ô" => "ª˜µ",
			 		"Õ" => "Ç¶¥",
			 		"Ç" => "µ3Í",
			 		"#" => "%*Á",
			 		"@" => "…~",
			 		"!" => "£rã",
			 		"$" => ")*+",
			 		"%" => "\ÐÉ",
			 		"+" => "ÉØ}$",
			 		"*" => "+=¶",
			 		"." => ":O",
			 		"," => "\ëÂ",
			 		"-" => "ŽŸð",
			 		"_" => "{·K",
			 		" " => "Ôõ¿",
			 		"[" => "Sü•",
			 		"]" => "ÿ†a",
			 		"(" => "Úg",
			 		")" => "½Òx",
			 		"\"" => "µÃQ",
			 		"'" => "»íá",
			 		"\\" => "\\@†",
					"/" => "¶%}",
			 		"\n" => "4ß®",
					"\r" => "É®¶",
			 		"=" => "òÓ",
			 		">" => "Z¼",
			 		"<" => "™Ï{",
			 		"?" => "Á#%",
					" " => "/@%",
			 		"	" => "&\#",
			 		);
		return str_rot13(strtr($CTM_Crypt, $Characters));
	}
	public static function stringNewEncoder($string, $key = NULL)
	{
		$key = md5(empty($key) ? "FFFF" : $key);
		$string = md5(time().mt_rand(strlen($string), 999999)).$string;
		for($i = 0; $i < strlen($string); $i++)
			$encoded .= $string{$i} ^ $key{ ($i % 32) };
			
		return $encoded;
	}
	public static function stringNewDecoder($string, $key = NULL)
	{
		$key = md5(empty($key) ? "FFFF" : $key);
		for($i = 0; $i < strlen($string); $i++)
			$decoded .= $string{$i} ^ $key{ ($i % 32) };
			
		return substr($decoded, 32);
	}
	public static function CodeTech_Decode($CTM_Crypt)
	{
		$Characters = array(
			 		"Óò" => "a",
			 		"•²®" => "b",
			 		"7È£" => "c",
			 		"ÿß" => "d",
			 		"%×ƒ" => "e",
			 		" s" => "f",
			 		"[†£" => "g",
			 		"çÂ0" => "h",
			 		"ž«¦" => "i",
			 		"žè" => "j",
			 		"¿oö" => "k",
			 		"¶0™" => "l",
				 	"K/—" => "m",
			 		"#Iò" => "n",
			 		"ß®" => "o",
			 		"»P" => "p",
			 		"–[÷" => "q",
			 		"¿~ÿ" => "r",
			 		"¾Ï{" => "s",
			 		"³§" => "t",
			 		"ööÜ" => "u",
			 		"$@#" => "v",
			 		"=#è" => "w",
			 		"[ <" => "y",
			 		"ñ¯Ÿ" => "x",
			 		"3‹" => "z",
			 		"Ì" => "A",
			 		"ØÐ" => "B",
			 		"¶™Ï" => "C",
			 		"[+*" => "D",
			 		"~áç" => "E",
			 		"Ã­" => "F",
			 		"{+¶" => "G",
			 		"8Y" => "H",
			 		"---" => "I",
			 		"  " => "J",
			 		"<%…" => "K",
			 		"#–w" => "L",
			 		"ð‡D" => "M",
			 		"çÐ" => "N",
			 		"Xæ‡" => "O",
			 		"¬*&" => "P",
			 		"³J\"" => "Q",
			 		"¶Ø" => "R",
			 		"X³" => "S",
			 		"‡$g" => "T",
			 		"Á­¦" => "U",
			 		"²¾" => "V",
			 		"}ù=" => "W",
			 		"Üõ" => "Y",
			 		"{p-" => "X",
			 		"=-]" => "Z",
			 		"³J\\" => "0",
			 		"®¡" => "1",
			 		"ñÐ" => "2",
			 		"¶" => "3",
			 		"7*q" => "4",
			 		"çã-" => "5",
			 		"#-$" => "6",
			 		"=][" => "7",
			 		"º=ª" => "8",
			 		"K/…" => "9",
			 		"8m?" => "á",
			 		"\ðÍ" => "à",
			 		"i³" => "â",
			 		"_," => "ã",
			 		"{¶&" => "é",
			 		"Áp#" => "ê",
			 		"N ‰" => "í",
			 		"+7" => "ó",
			 		"%=!" => "ò",
			 		"[-a" => "õ",
			 		"Âq6" => "ç",
			 		"===" => "Á",
			 		"\x" => "À",
			 		"***" => "Â",
			 		"¾Ï" => "Ã",
			 		"ž¢¼°" => "É",
			 		"\ð‡" => "Ê",
			 		"ä–³" => "Í",
			 		"—=m" => "Ó",
			 		"«¯" => "Ò",
			 		"ª˜µ" => "Ô",
			 		"Ç¶¥" => "Õ",
			 		"µ3Í" => "Ç",
			 		"%*Á" => "#",
			 		"…~" => "@",
			 		"£rã" => "!",
			 		")*+" => "$",
			 		"\ÐÉ" => "%",
			 		"ÉØ}$" => "+",
			 		"+=¶" => "*",
			 		":O" => ".",
			 		"\ëÂ" => ",",
			 		"ŽŸð" => "-",
			 		"{·K" => "_",
			 		"Ôõ¿" => " ",
			 		"Sü•" => "[",
			 		"ÿ†a" => "]",
			 		"Úg" => "(",
			 		"½Òx" => ")",
			 		"µÃQ" => "\"",
			 		"»íá" => "'",
			 		"\\@†" => "\\",
					"¶%}" => "/",
			 		"4ß®" => "\n",
					"É®¶" => "\r",
			 		"òÓ" => "=",
			 		"Z¼" => ">",
			 		"™Ï{" => "<",
			 		"Á#%" => "?",
					"/@%" => " ",
			 		"&\#" => "	",
					);
		return strtr(str_rot13($CTM_Crypt), $Characters);
	}
	public function EncodeKey($CTM_Crypt)
	{
		$Return = array(
				  "=" => "C",
				  "A" => "!",
				  "B" => "@",
				  "C" => "H",
				  "D" => "6",
				  "E" => "J",
				  "F" => "7",
				  "G" => "V",
				  "H" => "&",
				  "I" => "?",
				  "J" => "T",
				  "K" => "4",
				  "L" => "$",
				  "M" => "/",
				  "N" => "D",
				  "O" => "8",
				  "P" => "0",
				  "Q" => "%",
				  "R" => "*",
				  "S" => "+",
				  "T" => "5",
				  "U" => "<",
				  "V" => "2",
				  "W" => "B",
				  "Y" => "A",
				  "X" => "-",
				  "Z" => "W",
				  "0" => "X",
				  "1" => "R",
				  "2" => "U",
				  "3" => "1",
				  "4" => "3",
				  "5" => "V",
				  "6" => "S",
				  "7" => "Z",
				  "8" => "Y",
				  "9" => "K",
		);
		
		return strtr($CTM_Crypt, $Return);
	}
	public function DecodeKey($CTM_Crypt)
	{
		$Return = array(
				  "C" => "=",
				  "!" => "A",
				  "@" => "B",
				  "H" => "C",
				  "6" => "D",
				  "J" => "E",
				  "7" => "F",
				  "V" => "G",
				  "&" => "H",
				  "?" => "I",
				  "T" => "J",
				  "4" => "K",
				  "$" => "L",
				  "/" => "M",
				  "D" => "N",
				  "8" => "O",
				  "0" => "P",
				  "%" => "Q",
				  "*" => "R",
				  "+" => "S",
				  "5" => "T",
				  "<" => "U",
				  "2" => "V",
				  "B" => "W",
				  "A" => "Y",
				  "-" => "X",
				  "W" => "Z",
				  "X" => "0",
				  "R" => "1",
				  "U" => "2",
				  "1" => "3",
				  "3" => "4",
				  "V" => "5",
				  "S" => "6",
				  "Z" => "7",
				  "Y" => "8",
				  "K" => "9",
		);
		return strtr($CTM_Crypt, $Return);
	}
	public function CharImg($CTM_Crypt)
	{
		$Crypt = @md5(@hash("haval256,3", $CTM_Crypt));
		if($Crypt == FALSE)
		{
			exit("<span style=\"border:1px dashed #c00; color:#c00; padding:6px; background-color:#ffebe8;\">CTM-Error #8: Entre em contato com o Desenvolvedor.</span>");
		}
		return $Crypt;
	}
	/*private final static function Preg_ServerAddress()
	{
		global $HTTP_SERVER_VARS;
		
		self::$HashAddress_1 = base64_encode(str_rot13($_SERVER["HTTP_HOST"]));
		self::$HashAddress_2 = base64_encode(str_rot13($_SERVER["SERVER_NAME"]));
	}
	private final static function Match_ServerAddress()
	{
		set_time_limit(0);
		self::Preg_ServerAddress();
		
		$Hash_HTTP_Host = strtolower(str_rot13(base64_decode(self::$HashAddress_1)));
		$Hash_HTTP_Name = strtolower(str_rot13(base64_decode(self::$HashAddress_2)));
		$Preg_HTTP_Host = preg_replace("/(www\.|:.*)/i", NULL, $Hash_HTTP_Host);
		$Preg_HTTP_Name = preg_replace("/(www\.|:.*)/i", NULL, $Hash_HTTP_Name);
		
		if(md5($Preg_HTTP_Host) != md5($Preg_HTTP_Name))
		{
			return "Address Error";
		}
		else
		{
			$Return = array($Hash_HTTP_Host,$Hash_HTTP_Name);
			return $Return[mt_rand(0, 1)];
		}
	}*/
	private function Preg_Register()
	{
		$this->Key_System = "EW_0x2222";
		$this->Key_Dir = "modules/core/Core_License.dat";
		$this->Key_Check = file_exists($this->Key_Dir);
		$this->Key_File = $this->Key_Check == TRUE ? @file_get_contents($this->Key_Dir) : FALSE;
		
		$this->License_Server = array("modules/core/","modules/core/");
		$this->Activator_Server = array("modules/core/", "modules/core/");
		
/*		$this->Cheking($this->Key_File == TRUE ? base64_encode($this->Key_File) : FALSE);*/
	}
	public function __construct()
	{
		$this->Server = preg_replace("/(www\.|:.*)/i", NULL, /*self::Match_ServerAddress()*/$_SERVER['HTTP_HOST']);
		$this->Update_Server = array("modules/core/", "modules/core/");

		self::Preg_Register();
	}
}
endif;
?>