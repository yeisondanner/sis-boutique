//Evento de carga del DOM
window.addEventListener('DOMContentLoaded', function () {

    setTimeout(() => {
        showCustomers();
    }, 1000);
});
/**
 * Metodo que se encarga de mostrar todos los clientes 
 * dentro de el customer para poder
 * seleccionarlos y agregarlos a la venta
 */
function showCustomers() {
    //seleccion el select customer que alojar los clientes
    let customers = document.getElementById('cliente');
    //Utilisamos la ruta del backend para obtener los clientes
    const url = base_url + "/Controllers/getCustomersActive.php";
    //Utilizamos el metodo fetch para obtener los datos
    fetch(url)
    .then(response => response.json())
    .then (data => {
        //variable que tendra los datos del cliente
        let html = '';
        //recorremos el array de clientes
        data.forEach(element => {
            //agregamos los datos del cliente al html
            html += `<option value="${element.idcustomer}">${element.c_name} ${element.c_lastName}</option>`;
        });
        //agregamos los datos ala variables customer del select
        customers.innerHTML = html;
    })
    .catch(error => console.error(error));

}