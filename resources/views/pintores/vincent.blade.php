@extends('layouts.master')
@section('title', $title)
@section('header')

@stop
@section('navbar')
    <ul>
        <li><a href="{{route('Davinci')}}">Leonardo Da Vinci</a></li>
        <li><a href="{{route('Frida')}}">Frida Kahlo</a></li>
        <li><a href="{{route('Miguel')}}">Michelangelo Buonarroti</a></li>
        <li><a href="{{route('Pablo')}}">Pablo Picasso</a></li>
        <li><a href="{{route('Vincent')}}">Vincent Van Gogh</a></li>
    </ul>
@stop
@section('content')
    <h1 style="padding: 10px">VINCENT VAN GOGH</h1>
    <img src="https://www.biografiasyvidas.com/biografia/g/fotos/gogh_autorretrato_1890_1.jpg" style="float: left; padding: 5px; width: 30%">
    <p style="padding: 10px">Vincent van Gogh era el mayor de los seis hijos de un pastor protestante, y mantuvo con su hermano Theo, cuatro años menor que él, una relación que sería determinante en su existencia y en su trayectoria artística. La correspondencia que ambos intercambiaron a lo largo de sus vidas testimonia la intimidad de esta relación y las pasiones y angustias humanas y creativas que atormentaron a Van Gogh en sus últimos años. Tras recibir una esmerada educación en un internado privado, a los dieciséis años entró como aprendiz en la filial de La Haya de la galería de arte parisina Goupil, una sociedad de comerciantes de arte fundada por su tío Vincent.<br><br>
        En 1873 pasó a la sucursal de la galería Goupil en Londres, donde hubo de padecer el primero de sus fracasos sentimentales; en 1875 fue trasladado a la filial parisina; en 1876 se despidió y regresó a Holanda. Trabajó después como profesor, ayudante de un pastor metodista y empleado de una librería; ninguno de estos empleos le duró mucho tiempo. Por aquel entonces sentía sobre todo la necesidad espiritual de entregarse a sus semejantes; de hecho, siempre había querido ser pastor, como su padre, y tal vocación lo llevó a Ámsterdam para seguir los estudios de teología, que suspendió.<br><br>
        Pasó entonces a la Escuela de Evangelización Práctica de Bruselas, y en 1878 fue enviado por sus superiores a la zona minera del Borinage. Establecido en el pueblo de Pâturages, próximo a Mons, realizó una serie de dibujos de los mineros. La Escuela de Evangelización lo expulsó por su excesiva implicación: impresionado por sus infrahumanas penurias, Van Gogh llegó a dar a los mineros lo poco que tenía y a vivir más pobremente que ellos.<br><br>
        El contacto con tal miseria y desolación socavó su fe, y Van Gogh pasó esta crisis espiritual vagando por Francia y Bélgica y escribiendo a su hermano Theo, que ocupaba ahora su antiguo empleo en la galería Goupil de París. Animado por Theo, en 1880 decidió dedicarse a la pintura y fue a Bruselas, donde conoció al pintor Anthon Van Rappard (con quien mantendría una larga relación) y llevó a cabo las primeras copias de Millet.<br><br>
        Tras otro fracaso sentimental con su prima Kate, conoció a una prostituta llamada Sien, cuyos infortunios despertaron su siempre infinita compasión. En 1882 vivió en Schenkweg con Sien y con sus hijos, que tomó a su cargo; seguía dibujando, y realizó sus primeros cuadros. Tras descubrir Theo su relación con Sien, rompió con ella a instancias de su hermano y marchó al norte, donde permaneció hasta finales de 1883. Fue luego a Nuenen, donde se aproximó de nuevo a su familia y pintó febrilmente; de esos dos años (1884-1885) son sus primeras telas de importancia. Cuadros como Los comedores de patatas (1885), diversas representaciones de tejedores y cabezas y figuras de campesinos forman, junto con innumerables dibujos, el conjunto de obras de esta etapa de formación.<br><br>
        En 1886 se reunió con su hermano en París; allí, en la capital artística de Europa, el contacto con el impresionismo reorientó visiblemente su estilo. Se relacionó con los impresionistas y postimpresionistas en la tienda de colores del "père Tanguy" (de quien pintó el conocido retrato) y descubrió el arte japonés. Su hermano le presentó a Camille Pissarro, Georges Seurat y Paul Gauguin; conoció asimismo a Toulouse-Lautrec y Émile Bernard, y bajo ese nuevo ambiente llegaría a la definición de su pintura. Su paleta se tornó definitivamente clara y colorista y sus composiciones menos tradicionales, dando forma a su personal visión del postimpresionismo.<br><br>
        Los consejos de su hermano y su interés por el color y por la captación de la naturaleza lo indujeron a trasladarse en febrero de 1888 a Arlés, en la soleada Provenza, donde su obra fue progresivamente expresando con mayor claridad sus sentimientos sobre lo representado y sus propios estados de ánimo. Trabajó intensamente, pintó la mayoría de sus telas más célebres y puras y escribió sus páginas más claras y profundas. Pero la soledad se le hacía insoportable, y con el propósito de formar un taller colectivo, Van Gogh alquiló una casa donde invitó a los artistas con quienes compartía intereses.<br><br>
        A instancias suyas, Paul Gauguin se instaló en la "casa amarilla" (así llamada por el color de sus paredes) en octubre de 1888, pero la relación fue haciéndose más y más difícil por el fuerte temperamento de ambos. En el transcurso de una discusión, Van Gogh llegó a atacar a Gauguin con una navaja de afeitar; luego, arrepentido de aquel arranque, se cortó el lóbulo de la oreja para expiar su culpa y lo hizo llegar a Gauguin, quien, lejos de conmoverse ante aquella muestra de contrición, lo juzgaba ya como un loco peligroso con el que no tenía ninguna intención de convivir. De este confuso lance (pues existen otras versiones del mismo) dan fe dos célebres autorretratos del pintor con una oreja vendada; en el segundo de ellos aparece fumando melancólicamente su pipa, ensimismado y sombrío.</p>
    <h2 style="padding: 10px">La noche estrellada</h2>
    <img src="https://a.travel-assets.com/findyours-php/viewfinder/images/res40/182000/182169.jpg" style="padding: 10px; width: 25%">
@stop
@section('footer')

@stop
