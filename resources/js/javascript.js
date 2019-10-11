
$('#FormCadastro').on('submit', function(event){
    event.preventDefault();
    var Dados = $(this).serialize();
    $.ajax({
        url: 'Controllers/ControllerCadastro.php',
        method: 'post',
        dataType: 'html',
        data: Dados,
        success: function(Dados){
            $('.resultado').show().html(Dados);
        }
    });
});

//Confirmar antes de deletar os dados
$('.deletar').on('click', function(event){
    event.preventDefault();
    var links = $(this).attr('href');
    alert(links);
    if(confirm("Deseja mesmo apagar estes dados?")){
        window.location.href=links;        
    }
    else {
        return false;
    }
});