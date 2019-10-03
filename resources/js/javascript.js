$("#FormCadastro").on('submit', function(event){
    event.preventDefault();
    var Dados = $(this).serialize();
    $.ajax({
        url: 'Controllers/ControllerCadastro.php',
        method: 'post',
        dataType: 'html',
        data: Dados,
        success: function(Dados){
            $('.resultado').html(Dados);
        }
    })
})