
import modal from 'jquery-modal'
//var GoogleMapsLoader = require('google-maps')
import datetimepicker from 'jolira-bootstrap-datepicker'
//import $ from 'jquery'
import owlCarousel from './owlCarousel.js'
import responsiveslides from './vendors/responsiveslides.min.js'
import Template from './template/index.js'

const template = new Template()
//GoogleMapsLoader.KEY = 'AIzaSyDwIN5Pzv0dzshUwFmXrY8SEvwImRgfDVo'
//GoogleMapsLoader.VERSION = '3.14'
//GoogleMapsLoader.LIBRARIES = ['geometry', 'places']
class Parqueadero {

  constructor() {
    this.KEY = '&APPID=23ba3c1105c9bcab61a6b380771d3bc8'
    this.URL_WATHER = 'http://api.openweathermap.org/data/2.5/forecast/city?q='
    this.IMG_WEATHER = "http://openweathermap.org/img/w/"
    this.PRICE_DOLAR = 'https://s3.amazonaws.com/dolartoday/data.json'
    this.$nombre = $('#nombre')
    this.$icon = $('#icon')
    this.$temp = $('#temp')
    this.$descripcion = $('#descripcion')
    this.$ciudad = $('#cityAdd')
    this.$botonBuscar = $('#search')
    this.$info = $('.data_time_info')
    this.$price = $('#price')
    this.$carrousel = $("#carrousel")
    this.$slides = $(".rslides")
    this.$siguiente = $("#siguiente")
    this.$fechai = $("#fechai")
    this.$horai = $("#horai")
    this.$fechasa = $("#fechasa")
    this.$horasa = $("#horasa")
    this.$inputs_info = $("#inputs_info")
    this.$inputs = $("#inputs")
    this.$modal_alert = $("#modal-alert")
    this.$more = $("#more")
    this.$map = $("#map")
    this.$text_modal = $("#text-modal")
    this.$canvas1 = document.getElementById("canvas1")
    this.ejeX = 0
    this.lineaEjeX = 0
    this.ejeY = 0
    this.ancho = 0
    this.r = 40
    this.numero = 1
    this.texto = 0
    this.iniciarModal()
    this.closeModal()
    this.iniciarSlides()
    this.iniciarMedidas()
    this.iniciarCarrusel()
  //this.iniciarGoogleMaps()
    this.peticion('Rio Negro,CO')
    this.iniciarFacebook()
    this.agregarFullScreen(this.$map)
    this.escucharConsulta()
    this.escucharSiguiente()
    //this.iniciarDatePicker()
  }

  iniciarMedidas () {
    this.ancho = this.$canvas1.width
    this.ejeX = (this.ancho/4)/2;
    this.dibujarPasos(this.$canvas1)
    this.dibujarNumero(this.numero, this.$canvas1.getContext('2d'))
    this.texto = (this.r + 5)
    this.dibujarTexto("Paso 1", this.texto, this.$canvas1.getContext('2d'))
    this.lineaEjeX = (this.ancho/4) - this.r
    this.numero = this.numero + 1
    this.dibujarIzquierda(this.$canvas1.getContext('2d'))
    this.dibujarDerecha(this.$canvas1.getContext('2d'))
    this.ejeX = this.ejeX + (this.ancho/4);
    this.texto = this.texto + (this.ancho/4)
    this.dibujarPasos(this.$canvas1)
    this.dibujarNumero(this.numero, this.$canvas1.getContext('2d'))
    this.dibujarTexto("Paso 2", this.texto, this.$canvas1.getContext('2d'))
    this.dibujarDerecha1(this.$canvas1.getContext('2d'))
    this.ejeX = this.ejeX + (this.ancho/4);
    this.numero = this.numero + 1
    this.texto = this.texto + (this.ancho/4)
    this.dibujarPasos(this.$canvas1)
    this.dibujarNumero(this.numero, this.$canvas1.getContext('2d'))
    this.dibujarTexto("Paso 3", this.texto, this.$canvas1.getContext('2d'))
    this.dibujarDerecha2(this.$canvas1.getContext('2d'))
    this.ejeX = this.ejeX + (this.ancho/4);
    this.numero = this.numero + 1
    this.texto = this.texto + (this.ancho/4)
    this.dibujarPasos(this.$canvas1)
    this.dibujarNumero(this.numero, this.$canvas1.getContext('2d'))
    this.dibujarTexto("Paso 4", this.texto, this.$canvas1.getContext('2d'))
    this.dibujarDerecha(this.$canvas1.getContext('2d'))
  }

  peticion (ciudad) {
    let peticion = this.URL_WATHER + ciudad + this.KEY
    $.getJSON(peticion, (data) => {
      var ciudad = {
        nombre: data.city.name,
        pais: data.city.country,
        temperatura: data.list[0].main.temp - 273.15,
        tiempo: data.list[0].weather[0].description,
        icon: this.IMG_WEATHER + data.list[0].weather[0].icon + ".png",
        estado: data.list[0].weather[0].main
      }
      this.$nombre.text(ciudad.nombre + ' ' + ciudad.pais)
      this.$icon.attr('src', ciudad.icon)
      this.$temp.text(ciudad.temperatura.toFixed(2) + ' °C')
      this.$descripcion.text(ciudad.tiempo)
    })
    $.getJSON(this.PRICE_DOLAR, (data) => {
      this.$price.text(data.USDCOL.ratetrm)
    })
  }

  dibujarPasos (canvas) {
    let lienzo = canvas.getContext('2d');
    lienzo.width=lienzo.width;
    this.ejeY = canvas.height/2;
    lienzo.arc(this.ejeX,this.ejeY,this.r,0,2*Math.PI)
    lienzo.fillStyle="#519221"
    lienzo.fill();
    lienzo.stroke();
    lienzo.closePath();
  }

  dibujarNumero (numero, lienzo) {
    let text = numero;
    let x = this.ejeX - 5; // Posición en el eje X donde empezar a dibujar.
    let y = this.ejeY + 5; // Posición en el eje Y donde empezar a dibujar.
    lienzo.fillStyle = '#fff'; // Color del texto
    lienzo.textBaseline = "center"; // Línea base del texto
    lienzo.font = '18px Verdana'; // Tamaño y estilo de la fuente
    lienzo.fillText(text , x, y); // Pintamos el texto.
    lienzo.stroke();
    lienzo.closePath();
  }

  dibujarTexto (texto, xi, lienzo) {
    let x = xi; // Posición en el eje X donde empezar a dibujar.
    let y = 135; // Posición en el eje Y dondelet empezar a dibujar.
    lienzo.fillStyle = '#fff'; // Color del texto
    lienzo.textBaseline = "center"; // Línea base del texto
    lienzo.font = '18px Verdana'; // Tamaño y estilo de la fuente
    lienzo.fillText(texto , x, y); // Pintamos el texto.
    lienzo.stroke();
    lienzo.closePath();
  }

  dibujarDerecha (lienzo) {
    lienzo.beginPath();
    let x = (this.ejeX + this.r)
    let linea = this.ejeX + this.r + this.lineaEjeX
    lienzo.moveTo(x,this.ejeY);
    lienzo.lineTo(linea,this.ejeY);
    lienzo.lineWidth = 3;
    lienzo.strokeStyle = "#fff";
    lienzo.stroke();
    lienzo.closePath();
  }

  dibujarDerecha1 (lienzo) {
    lienzo.beginPath();
    let x = (this.ejeX + this.r)
    let linea = this.ejeX + this.lineaEjeX
    lienzo.moveTo(x,this.ejeY);
    lienzo.lineTo(370,this.ejeY);
    lienzo.lineWidth = 3;
    lienzo.strokeStyle = "#fff";
    lienzo.stroke();
    lienzo.closePath();
  }

  dibujarDerecha2 (lienzo) {
    lienzo.beginPath();
    let x = (this.ejeX + this.r)
    let linea = this.ejeX + this.lineaEjeX
    lienzo.moveTo(x,this.ejeY);
    lienzo.lineTo(450,this.ejeY);
    lienzo.lineWidth = 3;
    lienzo.strokeStyle = "#fff";
    lienzo.stroke();
    lienzo.closePath();
  }

  dibujarIzquierda (lienzo) {
    lienzo.moveTo(0,this.ejeY);
    lienzo.lineTo((this.r - 5),this.ejeY);
    lienzo.lineWidth = 3;
    lienzo.strokeStyle = "#fff";
    lienzo.stroke();
    lienzo.closePath();
  }

  iniciarGoogleMaps () {
    GoogleMapsLoader.load( (google) => {
    console.log('I just loaded google maps api');
      let map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        scrollwheel: true,
        zoom: 8
      });
    });                  // current working methods
  }

  iniciarModal () {
    this.$modal_alert.css('display', 'none')

  }

  agregarFullScreen (elto) {
    //Se prueba la variante apropiada seg�n el navegador
    try {
      if (elto.requestFullscreen) {	//Empezando por la est�ndar
        elto.requestFullscreen();
      } else if (elto.webkitRequestFullscreen) {	//Webkit (Safari, Chrome y Opera 15+)
        elto.webkitRequestFullscreen();
      } else if (elto.mozRequestFullScreen) {	//Firefox
        elto.mozRequestFullScreen();
      } else if (elto.msRequestFullscreen) {	//Internet Explorer 11+
        elto.msRequestFullscreen();
      }
    }
    catch(ex) {
      return false;
    }
    return true;
  }

  closeModal () {
    var self = this
    this.$more.on('click', (evt) => {
      evt.preventDefault()
      this.$modal_alert.css('display', 'none')
    })
  }

  iniciarFacebook () {
    FB.init({
      appId      : '526407484151180',
      xfbml      : true,
      version    : 'v2.5'
    });
    FB.login( () => {
      FB.api('/345236772297223/feed?fields=picture,message', (response, error) => {
        response.data.forEach( (object) => {
          template.llenarTemplate(object)
        })
      })
    }, {scope: 'publish_actions'});
  }

  iniciarDatePicker () {
    this.$fechasa.datetimepicker({
      dateTimeFormat: "dd-MM-yyyy HH:mm:ss",
      addEventHandlers: () => {
        let oDTP = this;
        let date_min = new Date();
        date_min.setHours(date_min.getHours() + 2);
        oDTP.settings.minDateTime = oDTP.getDateTimeStringInFormat("DateTime", "dd-MM-yyyy HH:mm:ss", date_min);
      }
    });
  }

  iniciarSlides () {
    this.$slides.responsiveSlides()
  }

  iniciarCarrusel () {
    this.$carrousel.owlCarousel({

          autoPlay: 2000, //Set AutoPlay to 3 seconds

          items : 3,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3],
          pagination: true,
          navigation: true

      });
  }

  escucharConsulta () {
      this.$botonBuscar.on('click', (e) => {
        e.preventDefault();
        this.peticion(this.$ciudad.val())
      })
  }

  escucharSiguiente () {
    this.$siguiente.on('click', (evt) => {
      evt.preventDefault()
      let fechai = this.$fechai.val()
      let horai = this.$horai.val()
      let fechasa = this.$fechasa.val()
      let horasa = this.$horasa.val()
      if (fechai == "" || fechasa ==  "" || fechasa == "" || horasa == ""){
        this.$text_modal.empty().text('Debe ingresar todos los campos')
        this.$modal_alert.css('display', 'block')
        return false
      }else{
        this.$inputs.css('display', 'none')
        this.$inputs_info.css('display', 'block').fadeIn()
      }
    })
  }

  initMap () {
    let myLatLng = {lat: -25.363, lng: 131.044};

    // Create a map object and specify the DOM element for display.
    let map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      scrollwheel: false,
      zoom: 4
    });

    // Create a marker and set its position.
    let marker = new google.maps.Marker({
      map: map,
      position: myLatLng,
      title: 'Hello World!'
    });
  }
}

const parqueadero = new Parqueadero()
export default parqueadero
