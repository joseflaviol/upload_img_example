<?php
  $nome = $_FILES['imagem']['name'];//pega o nome do arquivo
  $caminho_temporario = $_FILES['imagem']['tmp_name'];//pega o arquivo caminho temporário do arquivo
  $ext = pathinfo($nome, PATHINFO_EXTENSION);//pega a extensão do arquivo

  if(!file_exists("/imagens/")){
    mkdir("imagens");
  }
  $caminho = "imagens/imagem.$ext";//define onde a imagem vai ser salva (neste exemplo, seria esta string que ficaria salva no banco)

  if(move_uploaded_file($caminho_temporario, $caminho)){//faz upload da imagem
    echo "Imagem foi upada com sucesso."
  }
  else{
    echo "Falha ao upar imagem."
  }
?>
