const formularioAjax = document.querySelectorAll(".formularioAjax");

function envioFormularioAjax(e){
    
    e.preventDefault();

    let data = new FormData(this);
    let method = this.getAttribute("method");
    let action = this.getAttribute("action");
    let tipo = this.getAttribute("data-form");

    let encabezados = new Headers();

    let config = {
        method: method,
        headers: encabezados,
        mode: 'cors',
        cache: 'no-cache',
        body: data
    };

    let avisoTexto;

    if(tipo === "save"){
        avisoTexto = "Se guardaran los datos";
    }else if(tipo === "delete"){
        avisoTexto = "Se borraran los datos completamente";
    }else if(tipo === "update"){
        avisoTexto = "Los datos se actualizaron";
    }else if(tipo === "search"){
        avisoTexto = "Escribe el dato a buscar";
    }else if(tipo === "loans"){
        avisoTexto = "Se removeran los datos seleccionados";
    }else{
        avisoTexto = "Deseas realizar la operación solicitada";
    }

    Swal.fire({
        title: "Estas de acuerdo?",
        text: avisoTexto,
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if(result.value){

            fetch(action, config)
            .then(respuesta => respuesta.json())
            .then(respuesta => {
                return avisoAjax(respuesta);
            });

        }    
    });

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
