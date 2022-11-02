$(function () {
    $('select').formSelect();
});

function cargarCboPokemones() {
    $.ajax({
        url: "https://pokeapi.co/api/v2/pokemon?limit=964&offset=0",
        success: function (pokemon) {
            var resultados = pokemon.results;
            resultados.forEach(function (poke) {
                $("#cboPokemon").append(new Option(poke.name, poke.url));
            });
            $('#cboPokemon').formSelect();
        }
    });
}


$("#btnSelectPokemon").click(function () {
    $.ajax({
        url: $("#cboPokemon").val(),
        success: function (pokemon) {
            $("#nombre-pokemon").html(pokemon.name);
            $("#imgPokemon").attr("src", pokemon.sprites.front_default);
            $("#special-attack").html(pokemon.stats[3].base_stat);
            $("#attack").html(pokemon.stats[1].base_stat);
            $("#defense").html(pokemon.stats[2].base_stat);
            var movimiento1 = Math.floor(Math.random() * pokemon.moves.length);
            var movimiento2 = Math.floor(Math.random() * pokemon.moves.length);
            $("#movimiento1").html(pokemon.moves[movimiento1].move.name);
            $("#movimiento2").html(pokemon.moves[movimiento2].move.name);
            $("#seleccion").show();
        }
    });
});

$("#btnAgregarStorage").click(function () {
    data ={
        nombre_poke:$("#nombre-pokemon").text(),
        img:$("#imgPokemon").attr('src'),
        special_attack:$("#special-attack").text(),
        attack:$("#attack").text(),
        defense:$("#defense").text(),
        movimiento1:$("#movimiento1").text(),
        movimiento2:$("#movimiento2").text(),
        btnAccion:"Agregar al Storage"
    }

    $.ajax({
        type: "POST",
        url: "../controladores/Proceso.php",
        data: data,
        success: function(resp){
            $("#respuesta").html(resp);
        }
    });
})

cargarCboPokemones();