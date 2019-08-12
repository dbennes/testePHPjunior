<!DOCTYPE html>
<html>
    <?php 
        include ("head.html");

        $nome = $_GET ['nome'];
        $nascimento =  $_GET ['nascimento'];
        $cpf =  $_GET ['cpf'];
        $email =  $_GET ['email'];
        $telefone =  $_GET['telefone'];
        $endereco =  $_GET ['endereco'];
        $cidade =  $_GET ['cidade'];
        $estado =  $_GET ['estado'];      
        $img = $_GET ['img'];     
    ?>

<body>
    <?php include ("menu.html");?>

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
                        <?php echo $nome; ?>
                    </h5>
                    <br>
                    <div style="padding-left:25px;">
                        <h6>Informações:</h6>
                            <p style="padding-left:25px;">
                                Data de Nascimento: <?php echo $nascimento; ?> ; <br>
                                CPF: <?php echo $cpf; ?>; <br>
                                Sexo: <?php echo "Masculino"; ?>;
                            </p>
                        <h6>Contato:</h6>
                            <p style="padding-left:25px;"> 
                                Email:  <?php echo $email; ?> ; <br>
                                Telefone: <?php echo $telefone; ?>;
                            </p>
                        <h6>Endereço:</h6>
                            <p style="padding-left:25px;"> 
                                Estado: <?php echo $estado; ?> ; <br>
                                Cidade: <?php echo $cidade; ?> ; <br>
                                Endereço: <?php echo $endereco; ?>; 
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>