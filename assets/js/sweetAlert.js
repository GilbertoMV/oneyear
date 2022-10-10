Swal.fire({
        title: "Hola, preciosa!",
        text: "Digite la contraseña para seguir",
        icon: "info",
        iconColor:'#475959',
        input: "text",
        inputPlaceholder:'Digita la contraseña',
        background:"#e7ded3",
        backdrop: `#475959`,
        customClass: {
            container: 'text-alert',
            input: 'input-alert',
        },
        showCancelButton: false,
        confirmButtonText: "Enviar",
        footer: "QUE BUENO QUE YO MÁS",
        allowOutsideClick: false,
        allowEscapeKey: false,
        confirmButtonColor:'#475959',
        inputValidator: nombre => {
            // Si el valor es válido, debes regresar undefined. Si no, una cadena
            if (!nombre) {
                return "INTENTA INGRESANDO ALGO";
            } else if(nombre != "locos"){
                return "Contraseña invalida, no eres mi preciosa????";
            }
        }
    }).then(resultado => {
        if (resultado.value) {
            let nombre = resultado.value;
            Swal.fire({
              icon: 'success',
              title: 'Bienvenida Cuchurrumi',
              showConfirmButton: false,
              timer: 2500
            });
        }
    });
