<?php
if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "rafaeljwerneck43@gmail.com";
$subject = "Portifolio - Contato de $nome";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From: wiris@wiriswernek.github.io"."\r\n"."Reply-To: ".$email."\e\n"."X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("Ocorreu um erro ao enviar o email!");
}

}

?>
