//Evento de carga del DOM 
window.addEventListener('DOMContentLoaded', function(){
    setTimeout(() => {
        save();
        1000);
});







//capturamos el formulario
const formsave = document.querySelector('formsave');
//utilizamos el metodo submit
formsave.addEventListener('submit', (e) => {
    e.preventDefault();
    //preparamos el formulario y yena datos para enviarlos al servidor
    const formData = new FormData(formsave);
    const headers = new Headers();
    const config = {
        method: 'POST',
        headers: headers,
        body: formData
        mode: 'cors',
        cache: 'default'
    }
    //utilizamos una bariable de ruta
    const url =  base_url
    //utilizamos un fetch para enviar los datos
});
