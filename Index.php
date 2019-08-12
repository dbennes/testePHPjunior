<!DOCTYPE html>
    <?php 
        include ("conecta.php");
        //Consulta BANCO DE DADOS
            $GetDados = ("SELECT * FROM usuarios ");
            $GetDadosquery = mysqli_query($conecta, $GetDados) or die ("Não foi possivel conectar.");
            $row = mysqli_num_rows ($GetDadosquery);
    ?>
<html>
    <?php include ("head.html");?> 
    <head>
        <script>
            <?php include ("assets/js/delete_usuario.js");?>
        </script>
    </head>
    <body>
        <?php include ("menu.html");?>
        <div>
            <div class="container" style="padding-top: 25px;">
            <h5>Lista de Usuarios:</h5><br>
                <div class="row">
                    
                    <div class="col-md-12">
                        <?PHP                       
                            if ($row > 0) {
                                while ($GetDadosline = mysqli_fetch_array($GetDadosquery)) {
                                        $id = $GetDadosline ['ID'];
                                        $nome = $GetDadosline ['NOME'];
                                        $cpf = $GetDadosline ['CPF'];
                                        $data_nascimento = $GetDadosline ['DATA_NASCIMENTO'];
                                        $email = $GetDadosline ['EMAIL'];
                                        $telefone = $GetDadosline ['TELEFONE'];
                                        $endereco = $GetDadosline ['ENDERECO'];
                                        $cidade = $GetDadosline ['CIDADE'];
                                        $estado = $GetDadosline ['ESTADO'];
                                        $imagem_usuario = $GetDadosline ['IMAGEM_USUARIO'];

                                        //Variaveis para o direcionamento da página do usuario.

                                        $NOME_URL = "?nome=" . $nome;
                                        $CPF_URL = "&cpf=" . $cpf;
                                        $NASCIMENTO_URL = "&nascimento=" . $data_nascimento;
                                        $EMAIL_URL = "&email=" . $email;
                                        $TELEFONE_URL = "&telefone=".$telefone;
                                        $ENDERECO_URL = "&endereco=".$endereco;
                                        $CIDADE_URL ="&cidade=".$cidade;
                                        $ESTADO_URL ="&estado=".$estado;
                                        $IMAGEM_USUARIO_URL ="&img=".$imagem_usuario;

                                        $direcionamento =  $NOME_URL .  $CPF_URL . $NASCIMENTO_URL . $EMAIL_URL . $TELEFONE_URL . $ENDERECO_URL .  $CIDADE_URL . $ESTADO_URL . $IMAGEM_USUARIO_URL;
                            ?>
                        
                        <table class="table table-bordered">
                            <tbody style="background: white; ">
                                <tr style="width: 100px; ">
                                    <td class = "align-middle">
                                        <img style="width: 70px; border-radius: 200px" src="<?php echo $imagem_usuario; ?>">
                                    </td>
                                    <td class = "align-middle" style=" font-size: 0.6em; width:100%; min-width: 100%; overflow: auto;"> 
                                        <h4 style="font-size: 1.8em; color: #6c757d">
                                            <?php echo " " . $nome ; ?><br>
                                        </h4>
                                        <div style="font-size: 1.2em;">
                                            <?php echo "Endereço: " . $endereco ."<br>";?>
                                        </div>
                                    </td>
                                    <td class="align-middle  text-center" style="font-size: 25px; color: #cc0303; width:80px; min-width: 80px; overflow: auto;">
                                        <a href="pag_usuario.php<?php echo $direcionamento ?>">
                                            <button style="color: #21548a; background: white; height: 60px; font-size:25px;" type="button" class="btn" >
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>      
                                    </td>
                                    <td class="align-middle  text-center" style="font-size: 25px; color: #cc0303; width:80px; min-width: 80px; overflow: auto;">                                        
                                        <button onclick="delete_usuario(id=<?php echo $id;?>)" style="color: red; background: white; height: 60px; font-size:25px;" type="button" class="btn" >
                                            <i class="fa fa-trash-o"></i>
                                        </button>                                             
                                    </td>                            
                                    
                                </tr>
                            </tbody>
                        </table>
                        <?PHP  
                            } 
                        }           
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>