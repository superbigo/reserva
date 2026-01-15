const frm = document.querySelector('#formulario');
document.addEventListener('DOMContentLoaded', function () {
    /* TODO: Validar campos */
     frm.addEventListener('submit', function(e){
        e.preventDefault();
        if (frm.f_llegada.value == ''
            || frm.f_salida.value == ''
            || frm.habitacion.value == ''
        ) {
            alertaSW('TODOS LOS CAMPOS SON REQUERIDOS', 'warning')
        } else {
            this.submit();
        }
    })
})
