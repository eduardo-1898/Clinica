$(document).on("click", "#searchDNI", function () {

    var formData = new FormData();
    formData.append("cedula", $("#CedulaCliente").val());
    $.ajax({
        url: "../DAL/clientes.php",
        data: formData,
        processData: false,
        type: 'POST',
        contentType: false,
        success: function (data) {
            debugger;
        },
        error: function(err){

        }
    });
})
