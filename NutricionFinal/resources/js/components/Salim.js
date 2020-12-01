import React from 'react';
import ReactDOM from 'react-dom';
import SSalim from './SubSalim';

function Salim() {
    return(
        <div id="cont-selector-alim">
                <h2>¿Qué comiste hoy?</h2>
                <div className="tecolor bgazul cajaalim" id="desayuno"><h4>DESAYUNO</h4></div>
                <SSalim identi="desayuno"></SSalim>
                <div className="tecolor bgverde cajaalim" id="almuerzo"><h4>ALMUERZO</h4></div>
                <SSalim identi="almuerzo"></SSalim>
                <div className="tecolor bgama cajaalim" id="cena"><h4>CENA</h4></div>
                <SSalim identi="cena"></SSalim>
                <div className="tecolor bgnaran cajaalim" id="snacks"><h4>SNACKS</h4></div>
                <SSalim identi="snacks"></SSalim>
            </div>
    );
}

export default Salim;

if (document.getElementById('selector-alim')) {
    ReactDOM.render(<Salim />, document.getElementById('selector-alim'));
}