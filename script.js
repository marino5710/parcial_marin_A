//constantes para el primer endpoint encontrar personaje por nombre 
const formulario = document.querySelector('#formMorty');
const tabla = document.querySelector('#tablaMorty');
const button = document.querySelector('#formMorty button[type="submit"]');

////constantes para el segundo endpoint buscar episodios por su id

const formulario1 = document.querySelector('#formEpisodio');
const tabla1 = document.querySelector('#tablaEpisodio');
const button1 = document.querySelector('#formEpisodio button[type="submit"]');


///constantes para el tercer endpoint 

const formularioLocation = document.querySelector('#formLocation');
const tablaLocation = document.querySelector('#tablaLocation');
const buttonLocation = document.querySelector('#formLocation button[type="submit"]');



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



    ///segundo endpoint

//buscar episodios a traves del id 



const consultarEpisodio = async (e) => {
    e.preventDefault();
    let idEpisodio = formulario1.episodio.value;
    if (idEpisodio == '') {
      alert("Debe ingresar el ID del episodio");
      return;
    }
    const url = `https://rickandmortyapi.com/api/episode/${idEpisodio}`;
  
    const config = {
      method: 'GET'
    };
  
    document.getElementById('estadoEpisodio').innerText = 'Buscando episodio...';
    try {
      const respuesta = await fetch(url, config);
      if (respuesta.status === 200) {
        const data = await respuesta.json();
        console.log(data);
        console.log(data.id);
        console.log(data.name);
        console.log(data.air_date);
        console.log(data.episode);
        console.log(data.created);
  
        document.getElementById('episodioId').innerText = data.id;
        document.getElementById('episodioName').innerText = data.name;
        document.getElementById('episodioAire').innerText = data.air_date;
        document.getElementById('episodioCreado').innerText = data.created;
        document.getElementById('estadoEpisodio').innerText = 'Episodio encontrado';
        tabla1.style.display = '';
      } else {
        document.getElementById('estadoEpisodio').innerText = 'Episodio no encontrado';
      }
    } catch (error) {
      console.log(error);
    }
  };
  
  formulario1.addEventListener('submit', consultarEpisodio);

//////////////////////////////////////////
///////buscar ubicacion por medio de nombre


const consultarLocation = async (e) => {
    e.preventDefault();
    let idLocation = formularioLocation.location.value;
    if (idLocation == '') {
      alert("Debe ingresar el ID del episodio");
      return;
    }
    const url = `https://rickandmortyapi.com/api/location/${idLocation}`;
  
    const config = {
      method: 'GET'
    };
  
    document.getElementById('estadoLocation').innerText = 'Buscando ubicación...';
    try {
      const respuesta = await fetch(url, config);
      if (respuesta.status === 200) {
        const data = await respuesta.json();
        console.log(data);
        console.log(data.id);
        console.log(data.name);
        console.log(data.type);
        console.log(data.dimension);
  
        document.getElementById('locationId').innerText = data.id;
        document.getElementById('locationName').innerText = data.name;
        document.getElementById('locationTipo').innerText = data.type;
        document.getElementById('locationDimension').innerText = data.dimension;
        document.getElementById('estadoLocation').innerText = 'Ubicación encontrada';
        tablaLocation.style.display = '';
      } else {
        document.getElementById('estadoLocation').innerText = 'Ubicación no encontrada';
      }
    } catch (error) {
      console.log(error);
    }
  };
  
  formularioLocation.addEventListener('submit', consultarLocation);
