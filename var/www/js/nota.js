function habilitarRespuesta(comentario){
    name_form = 'form-'+comentario;
    name_resp = 'responder-'+comentario;
    form = document.getElementById(name_form);
    resp = document.getElementById(name_resp);

    if(form.style.display == 'none'){
        form.style.display = 'block';
        resp.value = 'Ocultar'
    }else{
        form.style.display = 'none';
        resp.value = 'Responder'
    }

}