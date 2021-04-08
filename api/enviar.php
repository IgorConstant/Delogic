<?php

date_default_timezone_set('Brazil/East');

$date = date('d/m/Y');
$hour = date('H:i');

$name = !empty($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_STRING) : null;
$email = !empty($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_STRING) : null;
$telefone = !empty($_POST['telefone']) ? filter_var($_POST['telefone'], FILTER_SANITIZE_STRING) : null;
$cargo = !empty($_POST['cargo']) ? filter_var($_POST['cargo'], FILTER_SANITIZE_STRING) : null;
$linkedin = !empty($_POST['linkedin']) ? filter_var($_POST['linkedin'], FILTER_SANITIZE_STRING) : null;
$estado = !empty($_POST['estado']) ? filter_var($_POST['estado'], FILTER_SANITIZE_STRING) : null;
$cidade = !empty($_POST['cidade']) ? filter_var($_POST['cidade'], FILTER_SANITIZE_STRING) : null;
$mensagem = !empty($_POST['mensagem']) ? filter_var($_POST['mensagem'], FILTER_SANITIZE_STRING) : null;
$razaosocial = !empty($_POST['razao-social']) ? filter_var($_POST['razao-social'], FILTER_SANITIZE_STRING) : null;
$cnpj = !empty($_POST['cnpj']) ? filter_var($_POST['cnpj'], FILTER_SANITIZE_STRING) : null;
$endereco = !empty($_POST['endereco']) ? filter_var($_POST['endereco'], FILTER_SANITIZE_STRING) : null;
$dontdisplay = !empty($_POST['dont-display']) ? filter_var($_POST['dont-display'], FILTER_SANITIZE_STRING) : null;



# Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require_once("PHPMailer/class.phpmailer.php");
//require_once("PHPMailer/class.smtp.php");

# Inicia a classe PHPMailer
$mail = new PHPMailer();


# Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.gmail.com"; # Endereço do servidor SMTP
$mail->Port = 465; // Porta TCP para a conexão
$mail->SMTPAutoTLS = false; // Utiliza TLS Automaticamente se disponível
$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
$mail->Username = ''; # Usuário de e-mail
$mail->Password = ''; // # Senha do usuário de e-mail

# Define o remetente (você)
$mail->From = ""; # Seu e-mail
$mail->FromName = "Contato"; // Seu nome



# Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();


switch ($dontdisplay) {

	case "form1":

		# Define os destinatário(s)
		$mail->AddAddress(''); # Os campos podem ser substituidos por variáveis


		# Define os dados técnicos da Mensagem
		$mail->IsHTML(true); # Define que o e-mail será enviado como HTML
		$mail->CharSet = 'utf-8'; # Charset da mensagem (opcional)
		#$mail->SMTPDebug = 4; #Ativar Caso queira debugar o Envio de e-mail
		$mail->SMTPSecure = "ssl";


		# Define a mensagem (Texto e Assunto)
		$mail->Subject = "Delogic - Fale Conosco"; # Assunto da mensagem
		$mail->AltBody = "Este é o corpo da mensagem de teste, somente Texto! \r\n :)";


		$msg = '<table width="650" cellspacing="0" cellpadding="0" border="0" bordercolor="#fff" align="center">
			<tr style="background:#f2f4f4;">
    			<td align="center"> <br> <br> <img src="https://www.delogic.com.br/assets/images/site/logo-delogic.png" alt="logo"> <br> <br> <br></td>
			</tr>
		<tr style="background: #3db4c4">
			<td>
        		<br>
        		<br>
        		<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px"> ' . $name . ', entrou no site da Delogic e deixou esse e-mail! Os dados estarão abaixo.</p></b>
        		<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">E-mail: ' . $email . '</p></b>
        		<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">Telefone: ' . $telefone . '</p></b>
				<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">Cargo: ' . $cargo . '</p></b>
				<br>
				<br>
				<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">Mensagem: ' . $mensagem . '</p></b>
				<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">Enviado em: ' . $date . ' , ' . $hour . '</p></b>
        		<br>
        		<br>
    		</td>
		</tr>
		
		</table>';

		$mail->Body = $msg;
		# Envia o e-mail
		$enviado = $mail->Send();

		break;

	case "form2":

		$anexo = $_FILES["arquivo"];
		$url = 'https://www.delogic.com.br/';

		# Define os destinatário(s)
		$mail->AddAddress(''); # Os campos podem ser substituidos por variáveis


		# Define os dados técnicos da Mensagem
		$mail->IsHTML(true); # Define que o e-mail será enviado como HTML
		$mail->CharSet = 'utf-8'; # Charset da mensagem (opcional)
		#$mail->SMTPDebug = 4; #Ativar Caso queira debugar o Envio de e-mail
		$mail->SMTPSecure = "ssl";

		//Anexo
		$mail->AddAttachment($anexo['tmp_name'], $anexo['name']);


		# Define a mensagem (Texto e Assunto)
		$mail->Subject = "Delogic - Parceiros"; # Assunto da mensagem
		$mail->AltBody = "Este é o corpo da mensagem de teste, somente Texto! \r\n :)";

		$msg = '<table width="650" cellspacing="0" cellpadding="0" border="0" bordercolor="#fff" align="center">
			<tr style="background:#f2f4f4;">
    			<td align="center"> <br> <br> <img src="https://www.delogic.com.br/assets/images/site/logo-delogic.png" alt="logo"> <br> <br> <br></td>
			</tr>
		<tr style="background: #3db4c4">
			<td>
        		<br>
        		<br>
        		<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px"> ' . $name . ', entrou no site da Delogic e tem interesse em ser Parceiro!</p></b>
        		<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">Telefone: ' . $telefone . '</p></b>
        		<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">E-mail: ' . $email . '</p></b>
				<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">Razão Social: ' . $razaosocial . '</p></b>
				<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">CNPJ: ' . $cnpj . '</p></b>
				<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">Endereço: ' . $endereco . '</p></b>
				<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">LinkedIn: ' . $linkedin . '</p></b>
				<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">Enviado em: ' . $date . ' , ' . $hour . '</p></b>
        		<br>
        		<br>
    		</td>
		</tr>
		
		</table>';


		$mail->Body = $msg;

		# Envia o e-mail
		$enviado = $mail->Send();

		break;

	case "form3":

		$anexo = $_FILES["arquivo"];

		# Define os destinatário(s)
		$mail->AddAddress(''); # Os campos podem ser substituidos por variáveis


		# Define os dados técnicos da Mensagem
		$mail->IsHTML(true); # Define que o e-mail será enviado como HTML
		$mail->CharSet = 'utf-8'; # Charset da mensagem (opcional)
		#$mail->SMTPDebug = 4; #Ativar Caso queira debugar o Envio de e-mail
		$mail->SMTPSecure = "ssl";

		//Anexo
		$mail->AddAttachment($anexo['tmp_name'], $anexo['name']);

		# Define a mensagem (Texto e Assunto)
		$mail->Subject = "Delogic - Trabalhe Conosco"; # Assunto da mensagem
		$mail->AltBody = "Este é o corpo da mensagem de teste, somente Texto! \r\n :)";

		$msg = '<table width="650" cellspacing="0" cellpadding="0" border="0" bordercolor="#fff" align="center">
			<tr style="background:#f2f4f4;">
    			<td align="center"> <br> <br> <img src="https://www.delogic.com.br/assets/images/site/logo-delogic.png" alt="logo"> <br> <br> <br></td>
			</tr>
		<tr style="background: #3db4c4">
			<td>
        		<br>
        		<br>
        		<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px"> ' . $name . ', entrou no site da Delogic e tem interesse em Trabalhar conosco!</p></b>
        		<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">Telefone: ' . $telefone . '</p></b>
        		<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">Cidade: ' . $cidade . '</p></b>
				<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">Estado: ' . $estado . '</p></b>
				<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">E-mail: ' . $email . '</p></b>
				<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">LinkedIn: ' . $linkedin . '</p></b>
				<b><p style="color: #fff; text-align: left; font-family: Roboto Condensed, sans-serif; margin-left: 50px">Enviado em: ' . $date . ' , ' . $hour . '</p></b>
        		<br>
        		<br>
    		</td>
		</tr>
		
		</table>';


		$mail->Body = $msg;
		# Envia o e-mail
		$enviado = $mail->Send();


		break;
}

if ($enviado) {
	echo "<script>alert('Sua Mensagem Foi Enviada com Sucesso');</script>";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=https://www.delogic.com.br/'>";
	exit;
} else {
	echo "<script>alert('Sua mensagem não pode ser enviada, tente entrar em contato pelo telefone: (11) 4456-8091');</script>";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=https://www.delogic.com.br/'>";
}
