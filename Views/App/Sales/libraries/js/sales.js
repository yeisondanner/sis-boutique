//Evento de carga del DOM
window.addEventListener('DOMContentLoaded', function () {

    setTimeout(() => {
        showCustomer();
    }, 1000);
});
/**
 * Metodo que se encarga de mostrar todos los clientes
 * dentro de el select customer para poder 
 * seleccionarlos y realizar la venta
 */
function showCustomer() {
    //seleccion el select customer que alojar los clientes
    let customer = document.getElementById('cliente');
    //utilizamos ruta del backend para traer los clientes
    const url = base_url + "/Controllers/getCustomersActive.php"
    //usamos el metodo fetch para traer los datos
    fetch(url)
        .then(response => response.json())
        .then(data => {
            //variables que va tendra los datos de los clientes
            let html = ``;
            //recorremos el array de clientes
            data.forEach(element => {
                //agregamos los datos a la variable html
                html += `<option value="${element.idCustomer}">${element.c_name} ${element.c_lastName}</option>`;
            });
            //agregamos los datos a la variables customer del select
            customer.innerHTML = html;
        })
        .catch(error => console.error(error));
}