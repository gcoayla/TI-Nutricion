import React from 'react';
import $ from 'jquery';



function freshStyle(stylesheet){
    $('#EstilosPrin').attr('href',stylesheet);
 }

$( document ).ready(function() {
    var url = "http://127.0.0.1:8000/api/desayuno/";
        console.log(url);
        fetch(url)
        .then((resp) => resp.json())
        .then(data => {
            data.forEach(element => {
                console.log(element[0].nombre);
            var caja = "<form className='box-res-busqueda' method='post'><h5 className='nombre-alim'>";
            var caja2 = '</h5><input name="alimid" type="hidden" value="7845"/><h5 className="medida-alim modmedida">100 gr.</h5><input type="submit" className="env-alim" value="Eliminar"/></form>';
            caja+=element[0].nombre;
            caja+=caja2;
            $("#subaconsdesayuno").append(caja);
            var restyled = 'css/estilos.css'; 
            freshStyle(restyled);
            });

        })
        .catch(function(error) {
            console.log(error);
        });
        var url = "http://127.0.0.1:8000/api/almuerzo/";
        console.log(url);
        fetch(url)
        .then((resp) => resp.json())
        .then(data => {
            data.forEach(element => {
                console.log(element[0].nombre);
            var caja = "<form className='box-res-busqueda' method='post'><h5 className='nombre-alim'>";
            var caja2 = '</h5><input name="alimid" type="hidden" value="7845"/><h5 className="medida-alim modmedida">100 gr.</h5><input type="submit" className="env-alim" value="Eliminar"/></form>';
            caja+=element[0].nombre;
            caja+=caja2;
            $("#subaconsalmuerzo").append(caja);
            var restyled = 'css/estilos.css'; 
            freshStyle(restyled);
            });

        })
        .catch(function(error) {
            console.log(error);
        });
        var url = "http://127.0.0.1:8000/api/cena/";
        console.log(url);
        fetch(url)
        .then((resp) => resp.json())
        .then(data => {
            data.forEach(element => {
                console.log(element[0].nombre);
            var caja = "<form className='box-res-busqueda' method='post'><h5 className='nombre-alim'>";
            var caja2 = '</h5><input name="alimid" type="hidden" value="7845"/><h5 className="medida-alim modmedida">100 gr.</h5><input type="submit" className="env-alim" value="Eliminar"/></form>';
            caja+=element[0].nombre;
            caja+=caja2;
            $("#subaconscena").append(caja);
            var restyled = 'css/estilos.css'; 
            freshStyle(restyled);
            });

        })
        .catch(function(error) {
            console.log(error);
        });
        var url = "http://127.0.0.1:8000/api/aperitivos/";
        console.log(url);
        fetch(url)
        .then((resp) => resp.json())
        .then(data => {
            data.forEach(element => {
                console.log(element[0].nombre);
            var caja = "<form className='box-res-busqueda' method='post'><h5 className='nombre-alim'>";
            var caja2 = '</h5><input name="alimid" type="hidden" value="7845"/><h5 className="medida-alim modmedida">100 gr.</h5><input type="submit" className="env-alim" value="Eliminar"/></form>';
            caja+=element[0].nombre;
            caja+=caja2;
            $("#subaconssnacks").append(caja);
            var restyled = 'css/estilos.css'; 
            freshStyle(restyled);
            });

        })
        .catch(function(error) {
            console.log(error);
        });
        

});

const SAcons = ({identi}) => {
    return(
        <div className="sub-alim-cons-tit" id={"subacons" + identi}>
                
        </div>
    );
}

export default SAcons;