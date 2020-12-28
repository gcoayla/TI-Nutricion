import React from 'react';
import ReactDOM from 'react-dom';
import $ from 'jquery'
import { useCookies } from 'react-cookie';

const graphGroup = document.getElementById('group')

function generar(porcen,titu,actual,total) {

    generateGraph(parseInt(porcen), titu,actual,total)
    setRotation(parseInt(porcen), titu)
}

function generateGraph(percentage, title,actual,total) {

    let generate = document.createElement('div')
    generate.className = "graph-container"
    generate.id = title;
    generate.innerHTML =
        `
<div class="graph-container">
    <div class="graphic" id="${title}-content"></div>
    <div class="data">
        <p>${percentage}%</p>
        <p>${title}<br><center>${actual}/${total}</center></p>
    </div>
</div>
`
    $( "#group" ).append( generate );
}

function setRotation(percentage, id) {
    let rotation = (180 * percentage) / 100;

    let container = document.getElementById(`${id}-content`);
    container.style.transform = `rotate(${rotation}deg)`
}



$( document ).ready(function() {
    var protes=0;
    var carbos=0;
    var grasas=0;
    var calo=0;
    
        var url = "http://127.0.0.1:8000/api/valores/";
        var elemento = "elem";
        url += elemento;
        console.log(url);
        fetch(url)
        .then((resp) => resp.json())
        .then(data => {
            calo=Number(data[0]);
            protes=Number(data[1]);
            carbos=Number(data[2]);
            grasas=Number(data[3]);
            $("#numerodecalorias").html(calo+"/2000")
            $("#barradeprogreso").css("width",calo*100/2000+"%");
            generar(protes*100/120,"Proteinas",protes,120);
            $("#Proteinas-content").css("background-image","linear-gradient(var(--red-dark) 50%, var(--red) 50%)");
            generar(carbos*100/250,"Carbohidratos",carbos,250);
            generar(grasas*100/70,"Grasas",grasas,70);

        })
        .catch(function(error) {
            console.log(error);
        });
    
    
    $("#Grasas-content").css("background-image","linear-gradient(var(--ama-dark) 50%, var(--ama) 50%)");
    var muestra=0;
    $("#display-sec").click(function() {
      if(muestra==0){
          $("#datos-nutri-sec").slideDown( "slow", function() {
              
            muestra=1;
          });
      }else if(muestra==1){
          $("#datos-nutri-sec").slideUp( "slow", function() {
              
            muestra=0;
          });
      }
    });
    var desa=0;
    var alm=0;
    var cena=0;
    var sna=0;
    $("#desayuno").click(function() {
        if(desa==1){
            $("#subdesayuno").slideUp( "slow", function() {
                desa=0;
              });
        }else{
            $("#subalmuerzo").slideUp( "slow", function() {
                alm=0;
              });
            $("#subcena").slideUp( "slow", function() {
                cena=0;
              });
            $("#subsnacks").slideUp( "slow", function() {
                sna=0;
              });
            $("#subdesayuno").slideDown( "slow", function() {
                desa=1;
              });
            
        }
    });
    $("#almuerzo").click(function() {
        if(alm==1){
            $("#subalmuerzo").slideUp( "slow", function() {
                alm=0;
              });
        }else{
            $("#subdesayuno").slideUp( "slow", function() {
                desa=0;
              });
            $("#subcena").slideUp( "slow", function() {
                cena=0;
              });
            $("#subsnacks").slideUp( "slow", function() {
                sna=0;
              });
            $("#subalmuerzo").slideDown( "slow", function() {
                alm=1;
              });
            
        }
    });
    $("#cena").click(function() {
        if(cena==1){
            $("#subcena").slideUp( "slow", function() {
                cena=0;
              });
        }else{
            $("#subdesayuno").slideUp( "slow", function() {
                desa=0;
              });
            $("#subalmuerzo").slideUp( "slow", function() {
                alm=0;
              });
            $("#subsnacks").slideUp( "slow", function() {
                sna=0;
              });
            $("#subcena").slideDown( "slow", function() {
                cena=1;
              });
            
        }
    });
    $("#snacks").click(function() {
        if(sna==1){
            $("#subsnacks").slideUp( "slow", function() {
                sna=0;
              });
        }else{
            $("#subdesayuno").slideUp( "slow", function() {
                desa=0;
              });
            $("#subalmuerzo").slideUp( "slow", function() {
                alm=0;
              });
            $("#subcena").slideUp( "slow", function() {
                cena=0;
              });
            $("#subsnacks").slideDown( "slow", function() {
                sna=1;
              });
            
        }
    });
    
});

function Dnutri() {
    const [cookies, setCookie] = useCookies(['Hola']);
    return (
        <div id="dummiecont">
        <div id="datos-nutri-prin">
                <div id="calorias">
                    <div className="dato-progress">
                        <h3 className="">Calorías</h3>
                    </div>
                    <div id="cont-progress">
                        <div className="meter red">
                            <span id="barradeprogreso" style={{width: '80%'}} ></span>
                        </div>
                    </div>
                    <div className="dato-progress">
                        <h3 id="numerodecalorias">1670/2000</h3>
                    </div>
                </div>
                <div id="cont-macros">
                    <div className="dato-progress">
                        <h3 className="">Macronutrientes</h3>
                    </div>
                    <div className="graph-group" id="group"></div>
                </div>
                <div id="display-sec"></div>
            </div>
            <div id="datos-nutri-sec">
                <div className="sub-nutri-sec">
                    <h6>Proteínas: 100gr</h6>
                    <h6>Carbohidratos: 200gr</h6>
                    <h7>Azúcares: 70gr</h7>
                    <h7>Almidones: 100gr</h7>
                    <h7>Fibra: 30gr</h7>
                </div>
                <div className="sub-nutri-sec">
                    <h6>Grasas: 60gr</h6>
                    <h7>Grasas saturadas: 20gr</h7>
                    <h7>Grasas trans: 5gr</h7>
                    <h7>Grasas insaturadas: 35gr</h7>
                </div>
                <div className="sub-nutri-sec">
                    <h6>Minerales</h6>
                    <h7>Calcio: </h7>
                    <h7>Zinc: </h7>
                    <h7>Hierro: </h7>
                    <h7>Magnesio: </h7>
                    <h7>Potasio: </h7>
                </div>
                <div className="sub-nutri-sec">
                    <h6>Vitaminas</h6>
                    <h7>Complejo B: </h7>
                    <h7>Vitamina A: </h7>
                    <h7>Vitamina C: </h7>
                    <h7>Vitamina D: </h7>
                    <h7>Vitamina E: </h7>
                    <h7>Vitamina K: </h7>
                </div>
            </div>
            </div>
    );
}

export default Dnutri;

// DOM element
if (document.getElementById('datos-nutri')) {
    ReactDOM.render(<Dnutri />, document.getElementById('datos-nutri'));
}