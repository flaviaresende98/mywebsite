<?php
 $nome = $_POST['nome'];
 $email = $_POST['email']; 
 $mensagem = $_POST['mensagem'];
  
 $email_remetente = "fr.peixoto@outlook.com"; 
 $email_destinatario = "fr.peixoto@outlook.com"; 
 $email_reply = "$email"; 
 $email_assunto = "Contato formmail"; // Este será o assunto da mensagem


 $email_conteudo = "Nome = $nome \n"; 
 $email_conteudo .= "Email = $email \n"; 
 $email_conteudo .= "Mensagem = $mensagem \n"; 

 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 

if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>