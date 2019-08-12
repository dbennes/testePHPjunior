function delete_usuario(id)
{
    decisao = confirm('Deseja deletar esse usuario? ');
    if (decisao){
        $.ajax({
            url: "deletar.php",
            dataType: "html",
            type: 'POST',
            data: {id: id},
            success: function(doc){
              alert('O usuario foi deletado com sucesso!');
              window.location.reload()
            },
            error: function(){
              alert('Erro ao deletar o registro')
            }
          });
    }
    }