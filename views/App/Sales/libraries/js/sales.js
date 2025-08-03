//Evento de carga del DOM
let table
window.addEventListener('DOMContentLoaded', function () {
    loadTable();
    setTimeout(() => {
        showCustomer();
    }, 1000);
});
/**
 * Metodo que se encarga de mostrar todos los clientes
 * dentro de el select customer para poder 
 * seleccionarlos y realizar la venta
 */
function loadTable() {
    table = $("#table").dataTable({
        aProcessing: true,
        aServerSide: true,
        ajax: {
            url: base_url + "/Controllers/loadSales.php",
            dataSrc: "",
        },
        columns: [
            { data: "cont" },
            { data: "idnotasale" },
            { data: "fullnamecustomers" },
            { data: "C_dni" },
            { data: "p_name" },
            { data: "p_salePrice" },
            { data: "dcp_quantity" },
            { data: "dcp_amount" },
            { data: "actions" },
        ],
        columnDefs: [
            {
                targets: 0,
                className: "text-center",
            },
            {
                targets: 1,
                className: "text-left",
            },
            {
                targets: 2,
                className: "text-center",
            },
            {
                targets: 3,
                className: "text-center",
            },
            {
                targets: [4, 5],
                className: "text-center",
            },
            {
                targets: 8,
                className: "text-center",
            }
        ],
        dom: "lBfrtip",
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
        },
        responsive: "true",
        bProcessing: true,
        destroy: true,
        iDisplayLength: 10,
        order: [[0, "asc"]],

    });
}
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