import React from 'react';
import ReactDOM from 'react-dom';
import SAcons from './SubAcons';

function Acons(){
    return(
        <div id="cont-alim-cons">
            <h2>Alimentos de hoy</h2>
            <div className="alim-cons-tit bgazul" id="mos-desa">Desayuno</div>
            <SAcons identi="desayuno"></SAcons>
            <div className="alim-cons-tit bgverde" id="mos-almu">Almuerzo</div>
            <SAcons identi="almuerzo"></SAcons>
            <div className="alim-cons-tit bgama" id="mos-cena">Cena</div>
            <SAcons identi="cena"></SAcons>
            <div className="alim-cons-tit bgnaran" id="mos-snac">Snacks</div>
            <SAcons identi="snacks"></SAcons>
        </div>
    );
}

export default Acons;
if (document.getElementById('alimentos-cons')) {
    ReactDOM.render(<Acons />, document.getElementById('alimentos-cons'));
}
