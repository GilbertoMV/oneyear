Swal.fire({
        title: "hola, preciosa!",
        text: "digite la contraseña para seguir",
        icon: "info",
        iconColor:'#475959',
        input: "text",
        inputPlaceholder:'escriba aquí la contraseña',
        background:"#e7ded3",
        backdrop: `#475959`,
        customClass: {
            container: 'text-alert',
            input: 'input-alert',
        },
        showCancelButton: false,
        confirmButtonText: "enviar",
        footer: "en efecto, yo más",
        allowOutsideClick: false,
        allowEscapeKey: false,
        confirmButtonColor:'#475959',
        inputValidator: nombre => {
            if (!nombre) {
                return "en efecto se confirm que yo más";
                
            } else if(nombre != "locos"){
                return "no te la sabes porque no me amas";
            }
        }
    }).then(resultado => {
        if (resultado.value) {
            let nombre = resultado.value;
            Swal.fire({
                title: '¡feliz Aniversario!',
                text:'han pasado 12 meses desde aquel bello picnic que guardo en mi corazón como el día en el que conseguí el honor de llamarme "tu novio", espero te guste esta parte del regalo, que la disfrutes y la aprecies, corazón de melón',
                iconHtml: '🤎',
                iconColor:'#e7ded3',
                background:"#e7ded3",
                confirmButtonText: "Yo menos",
                customClass: {
                    container: 'text-alert',
                    input: 'input-alert',
                },
                confirmButtonColor:'#475959',
            });
        }
    });
