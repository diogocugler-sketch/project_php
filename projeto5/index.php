 <!DOCTYPE html>
 <html>

 <head>
     <title>cadastro</title>
 </head>

 <body>
    
     
     <form action="" method="post">
         <div class="php"></div>
          <input id="usu" type="text">
         <input id="senha" type="number">
         <button>type=
     </form>
     <?php function validarcadastro()
        {
            $usuario_cadastrado =
                $senha_correta = "1234";
            $tentativa_usuario = "admin";
            $tentativa_senha = "1234";
            $acesso_concedido = ($tentativa_senha == $senha_correta && $tentativa_usuario == $usuario_cadastrado);
            var_dump($acesso_concedido);
        };
        ?>
 </body>

 </html> 