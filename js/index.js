
//namespace para llamar todos los JS
var inicio = {
  iniciadores: [
    dimensiones.iniciar(),
    maquinaEstados.iniciar(),
    teclado.iniciar(),
    mando.iniciar(),
    buclePrincipal.iterar()
  ],
  iniciarJuego: function(){
    inicio.encadenarInicios(inicio.iniciadores.shift());
  },
  encadenarInicios: function(iniciador){
    if(iniciador){
      iniciador(() => inicio.encadenarInicios(iniciadores.shift()));
    }
  }

};

//se carga el DOM para la pagiana
document.addEventListener('DOMContentLoaded', function(){
  inicio.iniciarJuego();  
}, false);