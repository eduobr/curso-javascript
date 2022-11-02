const cargarTipo = async () => {
  const resp = await fetch("https://pokeapi.co/api/v2/type/");
  const { results } = await resp.json();
  console.log(results);
  return results;
};

const cargarGeneraciones = async () => {
  const resp = await fetch("https://pokeapi.co/api/v2/generation/");
  const { results } = await resp.json();
  console.log(results);
  return results;
};

const cargarGenType = async (url_tipo) => {
  const resp = await fetch(url_tipo);
  const { generation } = await resp.json();
  return generation;
  
};

var listaPokemon = [];

const cargarDataPokemon = async (url_pokemon) => {
  const resp = await fetch(url_pokemon);
  const { id, abilities, types, name } = await resp.json();
  const generaciones = [];
  //const unique_gen = [];
  for (const tipo of types) {
    const { name } = await cargarGenType(tipo.type.url);
    generaciones.push(name);
  }
  const unique_gen = [...new Set(generaciones)];

  return {id, name, abilities, ['tipos']:types.map(t=>t.type.name), unique_gen}
  
};

const cargarPokemones = async (nombre_pokemon) => {
  const resp = await fetch(
    "https://pokeapi.co/api/v2/pokemon/?offset=0&limit=964"
  );
  const { results } = await resp.json();
  //console.log(results);
  let pokes = [];
  //console.log(!0)
  results.forEach((poke) => {
    !poke.name.indexOf(nombre_pokemon) && (pokes = [...pokes, poke]);
  });
  console.log(pokes);
  for (const poke of pokes) {
    const p = await cargarDataPokemon(poke.url);
    console.log(p);
  }
};

//cargarTipo();
//cargarGeneraciones();
cargarPokemones("pi");

/*
function buscarPokemon() {
    
    var busqueda = $("#txtBuscar").val();
    cargarPokemones(busqueda);
    var filtro_tipo = $("#cboTipo").val();
    var filtro_generacion = $("#cboGeneracion").val();

    console.log(listaPokemon);
    
    var generaciones = cargarGeneraciones();
    /*generaciones.done(function(res){
        res.results.forEach(generacion=>{
            console.log(generacion.url)
        })
        /*res.types.forEach(function(tipo_generacion){
            console.log(tipo_generacion);
        })
    });
}

*/
