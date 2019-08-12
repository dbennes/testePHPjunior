<!DOCTYPE html>
    <?php 
        include ("conecta.php");
    ?>
    <html>
        <?php 
            include ("head.html");
         
            if (isset($_POST ['nome'])) { 
                $nome = $_POST ['nome'];
                $cpf = $_POST ['cpf'];
                $nascimento = $_POST ['nascimento'];
                $email = $_POST ['email'];
                $telefone = $_POST ['telefone'];
                $endereco = $_POST ['endereco'];
                $cidade = $_POST ['cidade'];
                $estado = $_POST ['estado'];    
                $sexo= $_POST ['sexo'];  

                //Avatar do Usuario de acordo com o sexo.
                if ($sexo == 1) {
                    $sexo = "assets/img/masculino.png";
                }elseif ($sexo == 2) {
                    $sexo = "assets/img/feminino.png";
                }

                //Cadastrar Usuario
                $insert = ("INSERT INTO usuarios (NOME, CPF, DATA_NASCIMENTO, EMAIL, TELEFONE, ENDERECO, CIDADE, ESTADO, IMAGEM_USUARIO) VALUES ('$nome', '$cpf', '$nascimento','$email','$telefone','$endereco','$cidade','$estado','$sexo')");
                $insertQuery = mysqli_query($conecta, $insert) or die ("Não foi possivel conectar.");
            }
        ?>

        <head>
            <script>
                <?php include ("assets/js/cidades_estados.js"); ?>
            </script>

        </head>
        <body>
            <?php include ("menu.html");?>
            <div>
                <div class="container" style="padding-top: 25px;">
                    <div class="row">
                        <div class="col-md-12 ">
                            <table class="table table-bordered">
                                <tbody style=" ">
                                    <tr class="text-center" style="width: 100px; background-color: #ececec;">                    
                                    <th colspan="2">Cadastro de Usuarios</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="container">
                                                <div class="row d-flex justify-content-center">
                                                    <form method="POST" style="padding-bottom: 20px; width: 90%;">      
                                                        <div class="form-group d-flex justify-content-around">                   
                                                            <div style="width: 30%;">
                                                                <label>Nome:</label>
                                                                <input  style="font-size: 0.7em;" type="text" class="form-control" name="nome" placeholder="Nome" required="required">
                                                            </div>
                                                            <div style="width: 20%;">
                                                                <label>Data de Nascimento:</label><br>
                                                                <input style="font-size: 0.7em;" class="form-control text-center" name="nascimento" type="date" required="required">
                                                            </div>
                                                            <div style="width: 20%;">
                                                                <label>Sexo:</label>
                                                                <select style="font-size: 0.7em;" class="form-control" name="sexo">
                                                                    <option value="1">Masculino</option>
                                                                    <option value="2">Feminino</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                           
                                                        <div class="form-group d-flex justify-content-around">                   
                                                            <div style="width: 30%;">
                                                                <label>CPF:</label>
                                                                <input  style="font-size: 0.7em;" type="text" class="form-control" name="cpf" placeholder="CPF" required="required">  
                                                            </div>
                                                            <div style="width: 20%;">
                                                                <label>Telefone:</label><br>
                                                                <input  style="font-size: 0.7em;" type="text" class="form-control" name="telefone" placeholder="Telefone" required="required">
                                                            </div>
                                                                <div style="width: 20%;">
                                                                    <label>Email:</label>
                                                                    <input  style="font-size: 0.7em;" type="text" class="form-control" name="email" placeholder="Email" required="required">
                                                                </div>
                                                        </div>
                                                        <div class="form-group d-flex justify-content-around">                   
                                                            <div style="width: 20%;">
                                                            <div class="text-center"><label class="text-center">Estado:</label></div>
                                                                <select required="required" style="font-size: 0.7em;" name="estado" id="estado" class="form-control"  onchange="buscaCidades(this.value)">
                                                                    <option value="">Selecione o Estado</option>
                                                                    <option value="Acre">Acre</option>
                                                                    <option value="Alagoas">Alagoas</option>
                                                                    <option value="Amazonas">Amazonas</option>
                                                                    <option value="Amapá">Amapá</option>
                                                                    <option value="Bahia">Bahia</option>
                                                                    <option value="Ceará">Ceará</option>
                                                                    <option value="Distrito Federal">Distrito Federal</option>
                                                                    <option value="Espírito Santo">Espírito Santo</option>
                                                                    <option value="Goiás">Goiás</option>
                                                                    <option value="Maranhão">Maranhão</option>
                                                                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                                                    <option value="Minas Gerais">Minas Gerais</option>
                                                                    <option value="Pará">Pará</option>
                                                                    <option value="Paraíba">Paraíba</option>
                                                                    <option value="Paraná">Paraná</option>
                                                                    <option value="Pernambuco">Pernambuco</option>
                                                                    <option value="Piauí">Piauí</option>
                                                                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                                                                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                                                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                                                    <option value="Rondônia">Rondônia</option>
                                                                    <option value="Roraima">Roraima</option>
                                                                    <option value="Santa Catarina">Santa Catarina</option>
                                                                    <option value="São Paulo">São Paulo</option>
                                                                    <option value="Sergipe">Sergipe</option>
                                                                    <option value="Tocantins">Tocantins</option>
                                                                </select> 
                                                            </div>
                                                            <div style="width: 25%;">
                                                                <div class="text-center"><label>Cidade:</label></div>
                                                                <select required="required" name="cidade" style="font-size: 0.7em;" id="cidade" class="form-control"></select>
                                                            </div>
                                                            <div style="width: 25%;">
                                                            <div class="text-center"><label>Endereço:</label></div>
                                                                <input  style="font-size: 0.7em;" type="text" class="form-control" name="endereco" placeholder="Endereço" required="required">                                                                        
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <div class="text-right"><button onclick="alert('Usuario cadastrado!')" type="submit" class="btn " style="background: #6fc36f; color: white;">Cadastrar</button></div>
                                                        </div>
                                                    </form>                                                        
                                                </div>
                                            </div>
                                        </td>                                   
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
            </div>                                
        </body>
    </html>