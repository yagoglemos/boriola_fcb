<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["BeforeLogin"]=true;

		$this->events["ModifyMenuItem"]=true;



//	onscreen events
		$this->events["vanilhas_snippet"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

$_SESSION['idUsuario'] = $data['id'];
$_SESSION['clube'] = $data['clube'];


///Log e tal

date_default_timezone_set('America/Sao_Paulo');

$arquivo = "users.txt";

$mensagem = date("d/m/Y H:i:s") . " - socio: {$data['id']}.\n";

if ($handle = fopen($arquivo, 'a')) {
    fwrite($handle, $mensagem); // Escreve a mensagem no arquivo
    fclose($handle);
}
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
				// Before login
function BeforeLogin(&$username, &$password, &$message, $pageObject, &$values)
{

		
$consulta_usuario = DB::Query("SELECT * FROM socio WHERE email = '{$username}' ");
$usuario = $consulta_usuario->fetchAssoc();

$consulta_clube = DB::Query("SELECT * FROM clube WHERE id = '{$usuario['clube']}' ");
$clube = $consulta_clube->fetchAssoc();

if($usuario['ativo'] == 'NÃO' OR $clube['ativo'] == 'NÃO') {

$message = "Cadastro INATIVO, favor procurar a administração FCB BR para regularização";
return false;

} else {

return true;

}
;		
} // function BeforeLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		
$validar = true;

if($menuItem->getTitle() == 'CARTEIRA' OR $menuItem->getTitle() == 'CERTIFICADO POMBAL') {

if($_SESSION['GroupID'] == 'ADMIN') {
	$validar = false;
} 

}  



//if($menuItem->getTitle() == 'CERTIFICADO POMBAL' ) {

//if($_SESSION['GroupID'] == 'ADMIN' OR $_SESSION['GroupID'] == 'SOCIO' OR $_SESSION['GroupID'] == 'SÓCIO INDIVIDUAL') {
//	$validar = false;
//}

//}


return $validar;
;		
} // function ModifyMenuItem

		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_vanilhas_snippet(&$params)
	{
	
var_dump($data);

echo "

<input type='hidden' value='' id='mapafim' />
<input type='hidden' value='' id='seriefim' />

";
	;
}




}
?>
