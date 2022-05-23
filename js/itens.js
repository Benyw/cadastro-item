$(function() {

    $("#btnCadastrar").click(() => {
        $("#btnCadastrar").html("Cadastrando item...").prop("disabled", true);
        const formData = $("#formCadastro").serialize();

        $.ajax({
            url: 'php/inserir-item.php',
            type: 'post',
            dataType: "json",
            data: formData,
            success: function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso!',
                    confirmButtonColor: '#000',
                    buttonsStyling: true,
                    text: 'Item criado com sucesso!'
                }).then(() => {
                    window.location.reload();
                });
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    confirmButtonColor: '#000',
                    buttonsStyling: true,
                    text: "Erro ao cadastrar item!"
                }).then(() => {
                    $("#btnCadastrar").html("Cadastrar").prop("disabled", false);
                });
            }
        });
    });

});