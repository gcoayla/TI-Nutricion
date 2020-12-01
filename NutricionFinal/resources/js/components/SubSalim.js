import React from 'react';



const SSalim = ({identi}) => {
    return(
        <div className="der-cajaalim" id={"sub" + identi}>
                    <p className="tex-comidas">Ingresa un alimento</p>
                    <input type="text" className="busqueda"/>
                    <div className="res-busqueda" id={"res-busqueda-" + identi}>
                    </div>
                </div>
    )
}

export default SSalim;