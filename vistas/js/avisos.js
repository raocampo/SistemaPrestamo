const formularioAjax = document.querySelectorAll(".formularioAjax");

function envioFormularioAjax(e){
    
    e.preventDefault();

}

formularioAjax.forEach(formularios => {
    formularios.addEventListener("submit", envioFormularioAjax);
});

function avisoAjax(aviso){

    if(aviso.Alerta === "simple"){
        
        Swal.fire({
            title: aviso.Titulo,
            text: aviso.Texto,
            type: aviso.Tipo,
            confirmButtonText: 'Aceptar'
        });

    }else if(aviso.Alerta === "recargar"){

        Swal.fire({
            title: aviso.Titulo,
            text: aviso.Texto,
            type: aviso.Tipo,
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if(result.value){

                location.reload();

            }    
        });

    }else if(aviso.Alerta === "limpiar"){

        Swal.fire({
            title: aviso.Titulo,
            text: aviso.Texto,
            type: aviso.Tipo,
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if(result.value){

                document.querySelector(".formularioAjax").reset();

            }    
        });


    }else if(aviso.Alerta === "redireccionar"){
        
        window.location.href=aviso.URL;

    }


}
