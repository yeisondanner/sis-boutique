let table
//Evento de carga del DOM
window.addEventListener('DOMContentLoaded', function () {
    loadTable();//Cargar la tabla
    setTimeout(() => {
        save();
    }, 1000);
});
function save() {
    //validamos que el formSave exista
    if (!document.getElementById("formSave")) {
        console.log("El formulario no existe");
        return;
    }
    //capturamos el formulario
    const formSave = document.getElementById("formSave");
    //utilizamos el evento submit
    formSave.addEventListener("submit", (e) => {
        //evitamos que se recargue la pagina
        e.preventDefault();
        //preparamos el formulario y dema datos para enviarlo
        const formData = new FormData(formSave);
        const headers = new Headers();
        const config = {
            method: "POST",
            headers: headers,
            body: formData,
            mode: "cors",
            cache: "default",
        }
        //utilizamos una variable de ruta
        const url = base_url + "/Controllers/saveProducts.php";
        //utilizamos el metodo fetch
        fetch(url, config)
            .then(response => response.json())
            .then(data => {
                if (!data.status) {
                    idAlert.innerHTML = showAlert(data)
                    return false;
                }
                //limpio el formulario despues de haber echo el registro
                formSave.reset();
                loadTable();
                idAlert.innerHTML = showAlert(data)
                //cerramos el modal del modal
                $('#modalSave').modal('hide');
                console.log(data);
            })
            .catch(error => {
                alert("Ocurrio un error al guardar los datos " + error);
            });
    });
}
/**
 * Funcion de alerta que recibe un array de parametros
 * status
 * title
 * message
 * el cual retorna un elemento de tipo alert
 */
function showAlert(data) {
    const idAlert = document.getElementById("idAlert");
    //validamos que si el estado de la aleta es false sean danger y si es true sea success
    let color = "info"
    if (data.status) {
        color = 'success';
    } else {
        color = 'danger';
    }
    //retornamos el elemento de alerta
    //con el titulo y el mensaje
    //con el color que le pasamos
    return `<div class="alert alert-${color}" role="alert">
                <h4 class="alert-heading">${data.title}</h4>
                 <hr>
                <p>${data.message}</p>
            </div>`;
}
/**
 * Funcion para mostrar los datos de la tabla
 */
function loadTable() {
    table = $("#table").dataTable({
        aProcessing: true,
        aServerSide: true,
        ajax: {
            url: base_url + "/Controllers/loadProducts.php",
            dataSrc: "",
        },
        columns: [
            { data: "cont" },
            { data: "p_name" },
            { data: "p_size" },
            { data: "p_color" },
            { data: "p_buyPrice" },
            { data: "p_salePrice" },
            { data: "p_stock" },
            { data: "p_brand" },
            { data: "p_photo" },
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
                render: function (data, type, row, meta) {
                    //devolvemos las tallas en un badge de colores por tipo de talla
                    if (data == "S") {
                        return `<span class="badge bg-primary">${data}</span>`;
                    } else if (data == "M") {
                        return `<span class="badge bg-secondary">${data}</span>`;
                    } else if (data == "L") {
                        return `<span class="badge bg-success">${data}</span>`;
                    } else if (data == "XL") {
                        return `<span class="badge bg-danger">${data}</span>`;
                    } else if (data == "XXL") {
                        return `<span class="badge bg-warning">${data}</span>`;
                    } else {
                        return `<span class="badge bg-info">${data}</span>`;
                    }
                }
            },
            {
                targets: 3,
                className: "text-center",
                render: function (data, type, row, meta) {
                    //devolvemos un circulo con el color de la prenda ya que el campo devuelve el codigo del color
                    return `<div 
                                style="width: 25px; height:25px; border-radius: 50%; background-color: ${data}">
                            </div>`;
                }
            },
            {
                targets: [4, 5],
                className: "text-center",
                render: function (data, type, row, meta) {
                    return `S/. ${data}`;
                }
            },
            {
                targets: 8,
                className: "text-center",
                render: function (data, type, row, meta) {
                    //cargamos la imagen de la prenda
                    return `<img src="${data}" style="width: 50px; height: 50px;">`;
                }
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
/**
 * metodo que encarga de eliminar un registro de la tabla
 */
function deleteProduct(id) {
    //creamos la url de la peticion
    const url = base_url + "/Controllers/deleteProducts.php?id=" + id;
    //consultamos si el usuario esta seguro de eliminar el registro
    if (confirm("¿Estás seguro de eliminar este registro?")) {
        //si el usuario esta seguro de eliminar el registro
        //enviamos la peticion al servidor
        fetch(url)
            .then((response) => response.json())
            .then((data) => {
                //si la respuesta del servidor es exitosa
                if (data.status) {
                    //mostramos el mensaje de alerta
                    alert("Producto eliminado correctamente");
                    //recargamos la tabla
                    loadTable();
                } else {
                    //mostramos el mensaje de alerta
                    alert("Error al eliminar el producto");

                }
            })
            .catch((error) => console.error(error));
    }
}