//Evento de carga del DOM
window.addEventListener('DOMContentLoaded', function () {
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
                    alert(data.title);
                    return false;
                }
                //limpio el formulario despues de haber echo el registro
                formSave.reset();
                //cerrar el modal abiert
                $('#staticBackdrop').modal('hide');
                alert(data.title);
                console.log(data);
            })
            .catch(error => {
                alert("Ocurrio un error al guardar los datos " + error.getText());
            });
    });
}