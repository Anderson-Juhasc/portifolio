<?php
session_start();
if (isset($_POST['contact']))
{
	$_SESSION['name'] 		= $_POST['name'];
	$_SESSION['email'] 		= $_POST['email'];
	$_SESSION['subject'] 	= $_POST['subject'];
	$_SESSION['msg'] 		= $_POST['msg'];

	// Higienizar e validar nome
	if ($_SESSION['name'] != '')
	{
		$_SESSION['name'] = filter_var($_SESSION['name'], FILTER_SANITIZE_STRING);
		if ($_SESSION['name'] == '')
		{
			$_SESSION['errors'] .= '<li>Por favor escreva um nome válido.</li>';
		}
	}
	else
	{
		$_SESSION['errors'] .= '<li>Por favor escreva seu nome.</li>';
	}

	// Higienizar e validar email
	if ($_SESSION['email'] != '')
	{
		$_SESSION['email'] = filter_var($_SESSION['email'], FILTER_SANITIZE_EMAIL);
		if (!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['errors'] .= "<li>'".$_SESSION['email']."' não é um endereço de email válido.</li>";
		}
	}
	else
	{
		$_SESSION['errors'] .= '<li>Por favor escreva seu email.</li>';
	}

	// Higienizar e validar msg
	if ($_SESSION['msg'] != '')
	{
		$_SESSION['msg'] = filter_var($_SESSION['msg'], FILTER_SANITIZE_STRING);
		if ($_SESSION['msg'] == '')
		{
			$_SESSION['errors'] .= '<li>Por favor escreva uma mensagem valida.</li>';
		}
	}
	else
	{
		$_SESSION['errors'] .= '<li>Por favor escreva uma mensagem.</li>';
	}

	// Caso na existir erros faça
	if (!$_SESSION['errors'])
	{
		$dom = new DOMDocument('1.0', 'utf-8');
		$dom->formatOutput = true;
		$dom->preserveWhiteSpace = false;
		$dom->load('../xml/agenda.xml');
		$library = $dom->documentElement;

		$contato = $dom->createElement('contato');

		$prop = $dom->createElement('name', $_SESSION['name']);
		$contato->appendChild($prop);

		$prop = $dom->createElement('email', $_SESSION['email']);
		$contato->appendChild($prop);

		$prop = $dom->createElement('date', date('d-m-Y'));
		$contato->appendChild($prop);

		$prop = $dom->createElement('subject', $_SESSION['subject']);
		$contato->appendChild($prop);

		$prop = $dom->createElement('message', $_SESSION['msg']);
		$contato->appendChild($prop);

		$library->appendChild($contato);
		header("Content-type: text/xml");
		echo $dom->saveXML();
		$dom->save('../xml/agenda.xml');

		$_SESSION['sucess'] .= '<p id="success">Obrigado pela sua mensagem! <br /> Nós entraremos em contato com você o <br /> mais rápido possível!</p>';
	}

	header('location:../#contact');
}