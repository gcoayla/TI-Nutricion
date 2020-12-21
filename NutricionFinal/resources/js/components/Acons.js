import React from 'react';
import ReactDOM from 'react-dom';

function Acons(){
    return(
        <div id="cont-alim-cons">
            <h2>Alimentos de hoy</h2>
            <div className="alim-cons-tit bgazul" id="mos-desa">Desayuno</div>
            <div className="sub-alim-cons-tit">
                <form className="box-res-busqueda" method="post">
                    <h5 className="nombre-alim">Pollo frito</h5>
                    <input name="alimid" type="hidden" value="7845"/>
                    <h5 className="medida-alim modmedida">100 gr.</h5>
                    <input type="submit" className="env-alim" value="Eliminar"/>
                </form>
            </div>
            <div className="alim-cons-tit bgverde" id="mos-almu">Almuerzo</div>
            <div className="alim-cons-tit bgama" id="mos-cena">Cena</div>
            <div className="alim-cons-tit bgnaran" id="mos-snac">Snacks</div>
        </div>
    );
}

export default Acons;
if (document.getElementById('alimentos-cons')) {
    ReactDOM.render(<Acons />, document.getElementById('alimentos-cons'));
}
