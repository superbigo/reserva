const frm = document.querySelector('#formulario');
document.addEventListener('DOMContentLoaded', function () {
    frm.addEventListener('submit', function (e) {
        e.preventDefault();
        if (frm.usuario.value == '' || frm.clave.value == '') {
            alertaSW('TODOS LOS CAMPOS SON REQUERIDOS', 'warning');
        }  else {
                const http = new XMLHttpRequest();
                const url = base_url + 'login/verify';
                http.open("POST", url, true);
                http.send(new FormData(frm));
                http.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);
                        const resp = JSON.parse(this.responseText);
                        alertaSW(resp.msg, resp.tipo);
                        if (resp.tipo == 'success') {
                            frm.reset();
                            /*TODO: Mandar a otra ruta*/
                            window.location = base_url + 'dashboard';
                        }
                    }
                };
        }
    });
})

