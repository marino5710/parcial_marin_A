const formulario = document.querySelector('form');
const tabla = document.querySelector('table');
const button = document.getElementById('buttonConsulta');


const consultarMorty = async (e) => {
    e.preventDefault();
    let nombreMorty = formulario.morty.value;
    if (nombreMorty == '') {
      alert("Debe ingresar el nombre del personaje");
      return;
    }
    