var filtro_tipo = $("#cboTipo option:selected").text();
var filtro_generacion = $("#cboGeneracion option:selected").text();

$('#cboTipo').on('change', function () {
    filtro_tipo = $(this).find(":selected").text();
});

$('#cboGeneracion').on('change', function () {
    filtro_generacion = $(this).find(":selected").text();
});

$("#cboGeneracion option:selected").text()

function cargarTipo() {
    $.ajax({
        url: "https://pokeapi.co/api/v2/type/",
        success: function (tipos) {
            var resultados = tipos.results;
            resultados.forEach(function (tipo, index) {
                $("#cboTipo").append(new Option(tipo.name, tipo.url));
                //console.log("indice:"+index+" nombre:"+ele.name);
            });
            $('#cboTipo').formSelect();
        }
    });
}


function cargarGeneraciones() {
    return $.ajax({
        url: "https://pokeapi.co/api/v2/generation/",
        success: function (generaciones) {
            var resultados = generaciones.results;

            resultados.forEach(function (generacion) {
                $("#cboGeneracion").append(new Option(generacion.name, generacion.url));
            });
            $('#cboGeneracion').formSelect();
        }
    })
}


function buscarGeneracionPokemon(url_tipo) {
    return $.ajax({
        url: url_tipo,
        success: function (generacion) {
            return generacion.generation.name;
        }
    })
}

var listaPokemon = [];
var pokeFiltrados = [];

function cargarDataPokemon(url_pokemon) {
    return $.ajax({
        url: url_pokemon,
        success: function (pokemon) {
            return pokemon;
        }
    });
}

function cargarPokemones(nombre_pokemon) {
    return $.ajax({
        url: "https://pokeapi.co/api/v2/pokemon/?offset=0&limit=964",
        success: function (pokemones) {
            return pokemones;
        }
    });
}

$(function () {
    $('select').formSelect();
});

cargarTipo();
cargarGeneraciones();

function validarTipo(poke) {
    var estadoTipo = false;
    poke.types.forEach(tipo => {
        console.log(tipo.name + " " + filtro_tipo);
        if (tipo.name === filtro_tipo) {
            return estadoTipo = true;
        } else {
            estadoTipo = false;
        }
        return estadoTipo;
    });
}

function validarGeneracion(poke) {
    var estadoGeneracion = false;
    poke.generation.forEach(generacion => {
        console.log(generacion + " " + filtro_generacion)
        if (generacion === filtro_generacion) {
            return estadoGeneracion = true;
        } else {
            estadoGeneracion = false;
        }
        return estadoGeneracion;
    })
}



function filtrarPokemones() {
    listaPokemon.forEach(poke => {
        var card = `
            <div class="col s12 m3"">
                <div class="card blue-grey darken-1 center-align">
                  <div class="card-content white-text">
                    <span class="card-title">${poke.name}</span>
                    <img src="${poke.img}">
                    <p></p>
                  </div>
                  <div class="card-action">
                    <form id="frmGuardar" method="POST">
                        <input type="button" name="btnAgregar" id="btnAgregar" class="btn red" value="Agregar">
                    </form>      
                  </div>
                </div>
            </div>
        `;

        $("#pokedex").append(card);

    })
}


function buscarPokemon() {

    var busqueda = $("#txtBuscar").val();

    cargarPokemones(busqueda).done(function (pokemones) {
        var resultados = pokemones.results;
        var pokes = resultados.filter(poke => !poke.name.indexOf(busqueda));
        listaPokemon.length = 0;
        pokes.forEach(poke => {
            cargarDataPokemon(poke.url).done(function (pokemon) {
                var generaciones = new Set();
                var tipos = [];
                pokemon.types.forEach(tipo => {
                    var generacion = "";

                    buscarGeneracionPokemon(tipo.type.url).done(data => {
                        generacion = data.generation.name;
                        generaciones.add(generacion);
                    });

                    tipos.push(tipo.type);
                });

                listaPokemon.push({
                    id: pokemon.id,
                    name: pokemon.name,
                    types: tipos,
                    generation: generaciones,
                    img: pokemon.sprites.front_default
                });

                generaciones.length = 0;

                if (listaPokemon.length === pokes.length) {
                    filtrarPokemones()
                }

            });
        });
    });
}







/*

*/
//cargarTipo();
//temporizador(cargarTipo,2000);
//cargarGeneraciones();

