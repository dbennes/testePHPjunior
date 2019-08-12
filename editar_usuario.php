<!DOCTYPE html>
    <?php include ("conecta.php"); ?>
<html>
    <?php 
        include ("head.html");
        
    //Pega parametros da URL
        $nome = $_GET ['nome'];
        $id = $_GET ['id'];
        $nascimento =  $_GET ['nascimento'];
        $cpf =  $_GET ['cpf'];
        $email =  $_GET ['email'];
        $telefone =  $_GET['telefone'];
        $endereco =  $_GET ['endereco'];
        $cidade =  $_GET ['cidade'];
        $estado =  $_GET ['estado'];      
        $img = $_GET ['img'];

    //pega parametros dos formularios

        if (isset($_POST ['nome'])) {    
            
            $nome_post = $_POST ['nome'];
            $nascimento_post = $_POST ['nascimento'];
            $cpf_post = $_POST ['cpf'];
            $email_post = $_POST ['email'];
            $telefone_post = $_POST ['telefone'];
            $endereco_post = $_POST ['endereco'];
            $cidade_post = $_POST ['cidade'];
            $estado_post = $_POST ['estado'];      
            
            
        //Atualizar informações do Usuario
            $insert = ("UPDATE usuarios SET NOME= '$nome_post', CPF= '$cpf_post', DATA_NASCIMENTO = '$nascimento_post', EMAIL = '$email_post', TELEFONE ='$telefone_post', ENDERECO = '$endereco_post', CIDADE = '$cidade_post', ESTADO = '$estado_post' WHERE ID='$id'");
            $insertQuery = mysqli_query($conecta, $insert) or die ("Não foi possivel conectar2.");

            echo '<script type="text/javascript">location.href="editar.php"</script>';
        }
    ?>

<body>
    <?php include ("menu.html");?>
    <head>
        <script>
            function redirecionar(){
                decisao = confirm('Deseja atualizar os dados desse usuario? ');
            if (decisao){
                $.ajax({
                    url: "editar.php",
                    success: function(doc){
                    alert('Dados Atualizados!');
                    },
                    error: function(){
                    alert('Erro ao Atualizar!')
                    }
                });
            }
            }
        </script>
    </head>    
    <div>
        <div class="container-fluid" style="height: 90vh;">
            <div class="row">
                <div class="col-md-5 col-xl-2 align-middle text-center" style="height: 90vh;background-color: #f7f7f7; padding-top:20px;">
                    <img style="height: 180px; width: 175px; border-radius: 200px" src="<?php echo $img; ?>">
                    <br><br>
                    <h5 style="color:#5392cc; font-weight: bold; padding-bottom: 25px;">
                        <i class="fa fa-user-circle-o icon"></i>
                        <?php echo $nome; ?>
                    </h5>
                </div>
                <div class="col-md-6 col-xl-9" style="height: 90vh;">
                    <h5 style="color:#5392cc; padding-top: 25px;">
                        <?php echo "Atualização de Cadastro"?>
                        
                    </h5>
                    <br>
                    <div style="padding-left:25px;">
                    <form method="POST"  style="padding-bottom: 20px; width: 90%;">
                        <div class="form-group d-flex justify-content-start">                   
                            <div style="width: 30%; padding-left:25px;"> 
                                <label>Nome:</label>                                                            
                                <input  style="font-size: 0.7em;" type="text" class="form-control" name="nome" value="<?php echo $nome; ?>" required="required">  
                            </div>
                        </div>
                        <h6>Informações:</h6>
                            <p style="padding-left:25px;">
                                <div class="form-group d-flex justify-content-start"> 
                                    <div style="width: 30%; padding-left:25px;"> 
                                        <label>Data de Nascimento:</label>                                                            
                                        <input  style="font-size: 0.7em;" type="text" class="form-control" name="nascimento" value="<?php echo $nascimento; ?>" required="required">  
                                        <label>CPF:</label>                                                            
                                        <input  style="font-size: 0.7em;" type="text" class="form-control" name="cpf" value="<?php echo $cpf; ?>" required="required">                                       
                                    </div>
                                </div>                               
                            </p>
                        <h6>Contato:</h6>
                            <p style="padding-left:25px;">
                                <div class="form-group d-flex justify-content-start"> 
                                    <div style="width: 30%; padding-left:25px;"> 
                                        <label> Email:</label>                                                            
                                        <input  style="font-size: 0.7em;" type="text" class="form-control" name="email" value="<?php echo $email; ?>" required="required">  
                                        <label>Telefone:</label>                                                            
                                        <input  style="font-size: 0.7em;" type="text" class="form-control" name="telefone" value="<?php echo $telefone; ?>" required="required">                                       
                                    </div> 
                                </div>    
                            </p>
                        <h6>Endereço:</h6>
                            <p style="padding-left:25px;"> 
                                <div class="form-group d-flex justify-content-start"> 
                                    <div style="width: 30%; padding-left:25px;"> 
                                        <label> Estado:</label>                                                            
                                        <input  style="font-size: 0.7em;" type="text" class="form-control" name="estado" value="<?php echo $estado; ?>" required="required">  
                                        <label>Cidade:</label>                                                            
                                        <input  style="font-size: 0.7em;" type="text" class="form-control" name="cidade" value="<?php echo $cidade; ?>" required="required">                                       
                                        <label>Endereço:</label>                                                            
                                        <input  style="font-size: 0.7em;" type="text" class="form-control" name="endereco" value="<?php echo $endereco; ?>" required="required">                                       
                                    </div> 
                                </div>
                            </p>
                            <div class="d-flex justify-content-center">
                                <div class="text-right">

                                    <button  onclick="redirecionar()" type="submit" class="btn " style="background: #6fc36f; color: white;">Salvar</button></div>
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>