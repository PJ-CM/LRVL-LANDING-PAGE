function verificarEmailOK_00() {
    let email = document.getElementById('email-id');
    let email_valor = document.getElementById('email-id').value;

    email.style.color = 'red';

    if (
        email_valor.includes('@') &&
        email_valor.includes('.') &&
        email_valor.length > 2 &&

        email_valor.indexOf('@') == email_valor.lastIndexOf('@') &&
        email_valor.indexOf('@') < email_valor.lastIndexOf('.') // &&

        //email_valor.lastIndexOf('.') + 2 < email_valor.length &&
        //email_valor.lastIndexOf('.') + 7 < email_valor.length
    ) {
        //Email VÁLIDO
        email.style.color = 'blue';
    }
}

function verificarEmailOK() {
    //
    //alert('Aloaha ... pues !!!');

    let emailOK = false;
    let email = document.getElementById('email-id');
    email.style.color = 'red';
    let email_valor = email.value;
    let errores = [];

    //Verificando que no es null, vacío, undefined, false
    //(válido, también, para casos numéricos en los que considerar que no sea 0 o NaN)
    if (!email_valor) {
        ////alert(':: Se debe especificar un EMAIL ::');
        ////console.log(':: Se debe especificar un EMAIL ::');
        errores.push('Se debe especificar un EMAIL.');

    } else {
        //Verificando que existe una @ y solo una
        let caracterArroba = '@';
        ////let cuentaArroba = 0;
        ////let posicionArroba = email_valor.indexOf(caracterArroba);
        ////while (posicionArroba != -1) {
        ////    cuentaArroba++;
        ////    posicionArroba = email_valor.indexOf(caracterArroba, posicionArroba + 1);
        ////}
        let _arr_NumPos_Arroba = getNumPosCaracter(caracterArroba, email_valor);

        if (_arr_NumPos_Arroba[0] == 0) {
            ////alert(':: El EMAIL suministrado no es válido (falta una @) ::');
            ////console.log(':: El EMAIL suministrado no es válido (falta una @) ::');
            errores.push('El EMAIL suministrado debe contener una @.');

        } else if (_arr_NumPos_Arroba[0] > 1) {
            ////alert(':: El EMAIL suministrado no es válido (solo se admite una "@") ::');
            ////console.log(':: El EMAIL suministrado no es válido (solo se admite una "@") ::');
            errores.push('El EMAIL solo admite una "@".');

        } else {
            //Verificando que existe, al menos un punto
            let caracterPto = '.';
            let _arr_NumPos_Pto = getNumPosCaracter(caracterPto, email_valor);

            if (_arr_NumPos_Pto[0] == 0) {
                ////alert(':: El EMAIL suministrado no es válido (falta, al menos, un ".") ::');
                ////console.log(':: El EMAIL suministrado no es válido (falta, al menos, un ".") ::');
                errores.push('El EMAIL debe contener, al menos, un ".".');

            } else {
                //Verificando que posición de '@' es menor de la posición del pto
                let posicionArroba = _arr_NumPos_Arroba[1];
                let posicionPto = _arr_NumPos_Pto[1];
                if (posicionPto < posicionArroba) {
                    ////alert(':: El EMAIL suministrado no es válido (la posición de la "@" no puede ser posterior a la posición del último punto) ::');
                    ////console.log(':: El EMAIL suministrado no es válido (la posición de la "@" no puede ser posterior a la posición del último punto) ::');
                    errores.push('En el EMAIL suministrado, la posición de la "@" no puede ser posterior a la posición del último punto.');

                } else {
                    //Verificando longitud del dominio (xxx@dominio.xxx)
                    let longitudDominioMin = 3;
                    if (posicionPto - posicionArroba < longitudDominioMin) {
                        ////alert(':: El EMAIL suministrado no es válido (el dominio debe tener una longitud mínima de ' + longitudDominioMin + ' caracteres [' + posicionPto + ' - ' + posicionArroba + ' = ' + (posicionPto - posicionArroba) + ']) ::');
                        console.log(':: El EMAIL suministrado no es válido (el dominio debe tener una longitud mínima de ' + longitudDominioMin + ' caracteres [' + posicionPto + ' - ' + posicionArroba + ' = ' + (posicionPto - posicionArroba) + ']) ::');
                        errores.push('En el EMAIL suministrado, el dominio debe tener una longitud mínima de ' + longitudDominioMin + ' caracteres [' + posicionPto + ' - ' + posicionArroba + ' = ' + (posicionPto - posicionArroba) + '].');
                    }

                    //Válido
                    email.style.color = 'blue';
                    emailOK = true;
                }
            }
        }
    } // Fin de comprobaciones

    if (!emailOK) {
        //Muestra errores
    }

}

/**
 *
 * -> Contando apariciones de un carácter en una cadena
 * -> Recogiendo posición última del carácter buscado
 */
function getNumPosCaracter(caracter, cadena) {
    let cuentaCaracter = 0;
    let posicionCaracter = cadena.indexOf(caracter);
    let posicionCuenta = '';
    while (posicionCaracter != -1) {
        cuentaCaracter++;
        posicionCuenta = cadena.indexOf(caracter, posicionCaracter + 1);
    }
    console.log('posicionCaracter >>' + posicionCaracter);

    return [cuentaCaracter, posicionCaracter];
}


function f_contacto_form_valid() {

    /*$('#f_contacto_form').validate();*/
    /*$('#f_contacto_form').validate({
        rules: {
            nombre: {
                required: true,
                minlenght: 2
            },
            email: {
                required: true,
                email: true
            }
        }
    });*/
    /*$.extend($.validator.messages, {
        required: 'Este campo es obligatorio.',
    });*/

}