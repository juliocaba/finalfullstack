$(document).ready(function () {
    $("#enviarComentario").click(function (e) { 
        e.preventDefault();
        let name = $("#name").val();
        let email = $("#email").val();
        let subject = $("#subject").val();
        let message = $("#message").val();
        var token = '{{csrf_token()}}';// ó $("#token").val() si lo tienes en una etiqueta html.
        var data={name:name,email:email,subject:subject,message:message,_token:token};
        $.ajax({
            type: "post",
            url: "{{route('admin/comentarios.store')}}",
            data: data,
            dataType: "dataType",
            success: function (response) {
                
            }
        });
     
    });
});
