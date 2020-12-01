import React from 'react';
import $ from 'jquery'
$( document ).ready(function() {
    $("#busqueda-desayuno").on('input',function() {
        $("#res-busqueda-desayuno").html("listo")
        
    });
});
const SSalim = ({identi}) => {
    return(
        <div className="der-cajaalim" id={"sub" + identi}>
                    <p className="tex-comidas">Ingresa un alimento</p>
                    <input type="text" className="busqueda" id={"busqueda-"+identi}/>
                    <div className="res-busqueda" id={"res-busqueda-" + identi}>
                    </div>
                </div>
    )
}

export default SSalim;