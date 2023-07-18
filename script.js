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
    const url = `https://rickandmortyapi.com/api/character/?name=${nombreMorty}&status=alive`;
    const config = {
      method: 'GET'
    };
  
    document.getElementById('estado').innerText = 'Buscando personaje...';
    try {
        const respuesta = await fetch(url, config);
        if (respuesta.status === 200) {
          const data = await respuesta.json();
          console.log(data);
          console.log(data.results[0].name);
          console.log(data.results[0].status);
          console.log(data.results[0].gender);
          console.log(data.results[0].created);
          console.log(data.results[0].image);
    
          document.getElementById('nombreMorty').innerText = data.results[0].name;
          document.getElementById('pesoMorty').innerText = data.results[0].status;
          document.getElementById('tipoMorty').innerText = data.results[0].gender;
          document.getElementById('creadoMorty').innerText = data.results[0].created;
          document.getElementById('imagenMorty').src = data.results[0].image;
          document.getElementById('estado').innerText = 'Personaje encontrado';
          tabla.style.display = '';
        } else {
          document.getElementById('estado').innerText = 'Personaje no encontrado';
        }
      } catch (error) {
        console.log(error);
      }
    };

    formulario.addEventListener('submit', consultarMorty);
    button.addEventListener('click', consultaAPI);
      
    