import React from 'react';
import $ from 'jquery';

var url = "http://127.0.0.1:8000/api/search/"
$( document ).ready(function() {
    $("#busqueda-desayuno").on('input',function() {
        var url = "http://127.0.0.1:8000/api/search/"
        var elemento = $("#busqueda-desayuno").val();
        $("#res-busqueda-desayuno").html(" ")
        url += elemento;
        console.log(url);
        fetch(url)
        .then((resp) => resp.json())
        .then(data => {
            console.log(data);
            $("#res-busqueda-desayuno").html(" ")
            data.forEach(element => {
                var caja = '<form class="box-res-busqueda" method="post"><h5 class="nombre-alim">';
                var caja2 = '</h5><input name="alimid" type="hidden" value="7845"><input type="number" class="btn-alim"><h5 class="medida-alim">gr.</h5><input type="submit" class="env-alim" value="Añadir"></form>';
                caja +=element.nombre;
                caja +=caja2;
                $("#res-busqueda-desayuno").append(caja);
            });
        })
        .catch(function(error) {
            console.log(error);
        });
    });
});
const SSalim = ({identi}) => {
    return(
        <div className="der-cajaalim" id={"sub" + identi}>
            <p className="tex-comidas">Ingresa un alimento</p>
            <input type="text" className="busqueda" id={"busqueda-"+identi}/>
            <div className="res-busqueda" id={"res-busqueda-" + identi}></div>
        </div>
    );
}

export default SSalim;