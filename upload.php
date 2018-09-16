<?php
  $nome = $_FILES['imagem']['name'];//pega o nome do arquivo
  $caminho_temporario = $_FILES['imagem']['tmp_name'];//pega o arquivo caminho temporário do arquivo
  $ext = pathinfo($nome, PATHINFO_EXTENSION);//pega a extensão do arquivo

  $caminho = "imagens/imagem.$ext";//define onde a imagem vai ser salva (neste exemplo, seria esta string que ficaria salva no banco)

  move_uploaded_file($caminho_temporario, $caminho);//faz upload da imagem
?>
