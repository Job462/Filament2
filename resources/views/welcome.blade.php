<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Dental Sonrisitas</title>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    <style>
        *{ 
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }
        .container{ 
            background-color: #FCFAFA;
            display: grid; 
            grid-template: 
            "pri pri pri" auto 
            "texto texto texto" auto
            "seg seg seg" auto 
            "test slider tes"
            "ubicacion mapa mapa"/
            33.33% 33.33% 33.33%
            ;
        }
        .imagen{display: flex;align-items: center;}
        .imagen>img{
            width:30px; 
            height:30px;
            margin-right: 10px;
        }
        nav{
            top: 0;
            left: 0;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            position: fixed;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.338);
            letter-spacing: 2px;
            z-index: 1000;
            color: #fff9f9;
        }
        nav a{color: #fff9f9;}
        nav a:hover::after {
            transform: scaleX(1);
        }
        nav a::after{
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 100%;
            height: 3px;
            background: #fff;
            border-radius: 5px;
            transform: scaleX(0);
            transition: transform .5s ;
        }
        h1{font-size: 4rem;}
        .pri{
            grid-area: pri;    
            color: #D2D7DF;
            height: 100vh;
            background-image: url('/images/denti.jpg');
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .fondo{
            background-color: #191e385c;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center; 
            align-items: center;
            text-align: center;
        }
        .texto{
            grid-area: texto;
            font-size: 1.5rem;
            line-height: 2;
            width: 100%;
            padding: 5%;
            background-color: #ffffff;
            color: #333333;
            line-height: 1.6;
        }
        .texto p {text-align: justify;}
        .seg{
            margin: 5px;
            border-radius: 2%;
            background-color: #F6F0ED;
            text-align: center;
            grid-area: seg;
            padding: 50px 0px;
        }
        .ser{
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .textos {
            padding: 10%;
            width: 100%;
            height: 50%;
            background-color: #102542d9;
        }
        .seg h2{font-size: 3em;}
        .textos h6 {
            font-size: 1.5em;
            margin-bottom: 5px;
        }
        .textos label{
            margin: 10px;
            padding: 10px;
            text-align: center;
            font-size: 10px;
        }
        .ser img{
            width: 100%;
            height: auto;
        }
        .lim, .bla, .car, .cor, .imp, .pro {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-radius: 5%;
            box-sizing: border-box;
            margin: 20px; 
            overflow: hidden;
            width: 25%;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }
        .lim{background-image: url('/images/limp.jpg');}
        .bla{background-image: url('/images/blan.jpg');}
        .car{background-image: url('/images/cari.jpg');}
        .cor{background-image: url('/images/coro.jpg');}
        .imp{background-image: url('/images/impl.jpg');}
        .pro{background-image: url('/images/prot.jpg');}
        .testimonio{grid-area: test;}
        .testimonio2{grid-area: tes;}
        .testimonio, .testimonio2{
            padding: 15%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .slider {
            background-color: white;
            grid-area: slider;
            text-align: center;
            border-radius: 10%;
            margin: 10px;
            width: 100%;
            height: 400px;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }
        .slide-track {
            width: 500%;
            height: 400px;
            display: flex;
            animation: 16s slide infinite;
        }
        .slide {
            width: 20%;
            height: 400px;
        }
        .slide img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        @keyframes slide {
            0% {
            transform: translateX(0%);
            }
            20% {
            transform: translateX(-20%);
            }
            40% {
            transform: translateX(-40%);
            }
            60% {
            transform: translateX(-60%);
            }
            80% {
            transform: translateX(-80%);
            }
            /* 100% {
            transform: translateX(-100%);
            } */
        }
        .ubi{
            background-color: #CAE5FF;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            grid-area: ubicacion;
        }
        .map{grid-area: mapa;}
    </style>
</head>
<body class="container">
    <div class="men">
        <nav>
            <div class="imagen">
                <img src="{{ asset('images/diente.png ')}}" alt="">
                <p>CLÍNICA DENTAL SONRISITAS</p>
            </div>
            <a href="#inicio">INICIO</a>
            <a href="{{-- {{ route('reservasCliente.index') }} --}}">RESERVAS</a>
            <a href="#servicios">SERVICIOS</a>
            @auth
                <a href="{{ route('logout') }}">LOG OUT</a>
            @else
                <a href="{{ route('login') }}">LOG IN</a>
                <a href="{{ route('register') }}">SIGN IN</a>
            @endauth
        </nav>
    </div>
    <div id="inicio" class="pri">
        <div class="fondo">
            <h1>CLINICA SONRISITAS</h1><br>
            <h3>
                Mejora tu sonrisa hoy. <br>
                Confía en nosotros para obtener el mejor Cuidado dental en Potosí.
            </h3>    
        </div>
    </div>
    <div class="texto">
        <h2>Sobre nosotros</h2><br>
        <p>            
            En Clinica Dental Sonrisitas, nos enorgullece ofrecer servicios dentales de calidad en Potosí, Villa Imperial de Potosí, Bolivia. 
            Nuestro equipo de dentistas altamente capacitados y amables se dedica a brindarle una experiencia dental excepcional. <br>
            Con un enfoque en la atención personalizada y la última tecnología dental, nos esforzamos por superar las expectativas de nuestros pacientes. 
            Ya sea que necesite un simple chequeo dental o un tratamiento dental más complejo, estamos aquí para cuidar de su salud bucal. 
            Confie en nosotros para brindarle una sonrisa saludable y radiante.
        </p>
    </div>
    <div id="servicios" class="seg">
        <h2>Servicios</h2><br>
        <div class="ser">
            <div class="lim">
                <div class="textos">
                    <h6 for="">Limpieza</h6> <br>
                    <label for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, mollitia aliquid qui quis reprehenderit aut temporibus obcaecati nobis magni, quibusdam ea officiis? Soluta velit quisquam inventore deleniti officiis et alias!</label><br>
                </div>
            </div>
            <div class="bla">
                <div class="textos">
                    <h6 for="">Blanqueo</h6> <br>
                    <label for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, mollitia aliquid qui quis reprehenderit aut temporibus obcaecati nobis magni, quibusdam ea officiis? Soluta velit quisquam inventore deleniti officiis et alias!</label><br>
                </div>
            </div>
            <div class="car">
                <div class="textos">
                    <h6 for="">Carillas</h6> <br>
                    <label for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, mollitia aliquid qui quis reprehenderit aut temporibus obcaecati nobis magni, quibusdam ea officiis? Soluta velit quisquam inventore deleniti officiis et alias!</label><br>
                </div>
            </div>
            <div class="cor">
                <div class="textos">
                    <h6 for="">Coronas</h6>  <br>
                    <label for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, mollitia aliquid qui quis reprehenderit aut temporibus obcaecati nobis magni, quibusdam ea officiis? Soluta velit quisquam inventore deleniti officiis et alias!</label><br>
                </div>
            </div>
            <div class="imp">
                <div class="textos">
                    <h6 for="">Implantes</h6>  <br>
                    <label for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, mollitia aliquid qui quis reprehenderit aut temporibus obcaecati nobis magni, quibusdam ea officiis? Soluta velit quisquam inventore deleniti officiis et alias!</label><br>
                </div>
            </div>
            <div class="pro">
                <div class="textos">
                    <h6 for="">Protesis</h6> <br>
                    <label for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, mollitia aliquid qui quis reprehenderit aut temporibus obcaecati nobis magni, quibusdam ea officiis? Soluta velit quisquam inventore deleniti officiis et alias!</label><br>
                </div>
            </div>           
        </div>
    </div>

    <div class="testimonio">
        <p>
            "Estoy muy agradecida con la Clínica Dental Sonrisitas. El equipo de dentistas es profesional y amable, y me hicieron sentir cómoda durante mi visita. 
            El servicio fue excelente y estoy muy contenta con los resultados. ¡Recomendaría esta clínica a todos! <br>
            - María González
        </p>
    </div>

    <div class="slider">
        <h3>Galeria</h3><br>
        <div class="slide-track">
           <div class="slide"><img src="{{ asset('images/carrusel/d1.jpg')}}" alt=""></div>
           <div class="slide"><img src="{{ asset('images/carrusel/d2.jpg')}}" alt=""></div>
           <div class="slide"><img src="{{ asset('images/carrusel/d3.jpg')}}" alt=""></div>
           <div class="slide"><img src="{{ asset('images/carrusel/d4.jpg')}}" alt=""></div>
           <div class="slide"><img src="{{ asset('images/carrusel/d5.jpg')}}" alt=""></div>
        </div>
    </div>

    <div class="testimonio2">
        <p>
            "Estoy encantado con la clínica Cloe, son unos grandes profesionales, el trato es inmejorable y hacen un magnífico trabajo. Un millón de gracias !!!"<br>
            - Victor Ullate
        </p>
    </div>

    <div class="ubi">
        <h2>Nuestra Ubicacion</h2><br>
        <p>Dirección: Calle Principal, Ciudad, País</p>
        <p>Teléfono: +123 456 789</p>
        <p>Correo Electrónico: info@clinicasonrisitas.com</p>
        <p>Horario: Lunes a Viernes - 8am a 6pm</p>
    </div>
    <div class="map" id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"query":"Universidad Autónoma Tomas Frias Central, Potosí, Bolivia","height":500,"satellite":false,"zoom":16,"placeId":"ChIJgb2mhHZO-ZMRGMvZYny4P_Q","cid":"0xf43fb87c62d9cb18","coords":[-19.5841591,-65.756678],"lang":"es","queryString":"Universidad Autónoma Tomas Frias Central, Potosí, Bolivia","centerCoord":[-19.5841591,-65.756678],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"1029676"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=1029676';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/es/map-embed">1 Map</a>
    </div>
</body>
</html>