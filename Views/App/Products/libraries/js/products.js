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
                table.ajax.reload(null, false);
                idAlert.innerHTML = showAlert(data)
                console.log(data);
            })
            .catch(error => {
                alert("Ocurrio un error al guardar los datos " + error.getText());
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
            { data: "acctions" },
        ],
    });
}