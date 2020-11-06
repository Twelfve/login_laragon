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
    <h1 style="padding: 10px">LEONARDO DA VINCI</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Leonardo_da_Vinci.jpeg" style="float: left; padding-right: 10px; width: 30%">
    <p style="padding: 10px">Nació el sábado 15 de abril de 1452 «en la tercera hora de la noche», es decir, tres horas después del Ave María: a las diez y media. Se ha discutido si el nacimiento tuvo lugar en el castillo de Vinci, ciudad a unos 25 km en línea recta de Florencia, o bien en la casa materna de Anchiano, una pedanía a unos dos kilómetros de Vinci. Leonardo, descendiente de una rica familia de nobles italianos, fue hijo ilegítimo: su padre, messer Piero Fruosino di Antonio (notario, canciller y embajador de la República de Florencia) dejó embarazada a Caterina, una humilde joven de familia campesina, de quien se ha sospechado que pudiera ser una esclava de Oriente Medio. Martin Kemp, catedrático emérito de Historia del Arte en la Universidad de Oxford, tras investigar en los archivos toscanos, descubrió documentos que confirmarían la fecha del nacimiento, que tuvo lugar en la casa de campo paterna, a poco más de un kilómetro de Vinci, y que su madre era una campesina local de quince años, Caterina di Meo Lippi. Piero ya estaba prometido en matrimonio y el niño fue entregado al abuelo paterno, Antonio da Vinci que, probablemente, entregó una cierta cantidad a la madre como dote para que pudiera casarse. En declaraciones de impuestos de 1457, Antonio declaró que su nieto vivía con él y Caterina aparece casada con un campesino, Antonio di Piero Buti. <br><br>
        Leonardo, o Lionardo según su acta bautismal, fue bautizado y pasó sus cinco primeros años en la casa de su padre en Vinci, donde fue tratado como un hijo legítimo. Tuvo cinco madrinas y cinco padrinos, todos ellos habitantes del pueblo. Aprendió a leer y a escribir y adquirió conocimientos de aritmética, sin embargo, prácticamente no aprendió latín, base de la enseñanza tradicional. El hecho de que tuviese una ortografía caótica muestra que su instrucción no estuvo exenta de lagunas; en todo caso no fue la de un universitario. <br><br>
        En aquella época, las convenciones modernas en los nombres de personas no se habían desarrollado todavía en Europa, por lo que únicamente las grandes familias hacían uso del apellido patronímico. La gente de pueblo solía ser designada por su nombre, al que se le adjuntan todo tipo de precisiones útiles: el nombre del padre, el lugar de origen, un apodo, el nombre del maestro en el caso de los artesanos, etc. Por consiguiente, el nombre del artista sería Leonardo di ser Piero da Vinci, cuyo significado es «Leonardo, hijo del maestro Piero de Vinci»; el término «da» no lleva mayúscula porque no se trata de un apellido. El propio Leonardo firmaba simplemente sus obras como «Leonardo» o «Io, Leonardo» («Yo, Leonardo»), así que la mayoría de las autoridades atribuyen sus obras a «Leonardo» sin el «da Vinci». Es verosímil que se abstuviera de emplear el apellido de su padre porque era un hijo ilegítimo. «Vinci» proviene de «vinchi», denominación que reciben unas plantas similares a los juncos, que crecen en el entorno del arroyo Vincio y que eran utilizadas por los artesanos toscanos. <br><br>
        En 1457, cuando Leonardo tenía cinco años, su madre se casó con Antonio di Piero Buti del Vacca da Vinci, un campesino de la localidad, con el que tuvo cinco hijos. Fue acogido entonces en la casa de la familia de su padre en el pueblo de Vinci. Entretanto, el padre se había casado con una joven de dieciséis años proveniente de una familia rica de Florencia, Albiera degli Amadori. Esta, al no tener hijos, volcó su afecto en Leonardo, pero murió siendo muy joven debido a complicaciones de parto, en 1464. Aunque era considerado plenamente desde su nacimiento como hijo de su padre, Leonardo nunca fue reconocido formalmente como un hijo legítimo. Su padre se casó hasta cuatro veces, y tuvo diez hijos y dos hijas legítimos. De estas relaciones, el pequeño Leonardo tuvo un muy buen vínculo con la última mujer de su padre, Lucrezia Guglielmo Cortigiani, afecto que se evidencia en una nota en donde se dirige a ella como «querida y dulce madre». <br><br>
        Su abuela paterna, Lucia di ser Piero di Zoso, una ceramista próxima a Leonardo, fue probablemente la persona que lo inició en las artes. Un conocido presagio refiere que un milano venido del cielo había hecho un vuelo estacionario sobre su cuna, tocando su cara con la cola. Giorgio Vasari, biógrafo del siglo xvi de los pintores del Renacimiento, cuenta en Le Vite (1568), la historia de un campesino local que pidió a ser PieroNota que su talentoso hijo le pintara una imagen sobre una placa. Leonardo pintó entonces una representación de un dragón escupiendo fuego, tan bien realizada que ser Piero la vendió a un mercader de arte florentino, quien a su vez la revendió al duque de Milán. Tras haberse así beneficiado con la venta, ser Piero compró una placa decorada con un corazón atravesado por una flecha, que entregó al campesino.</p>
    <h2 style="padding: 10px">La Gioconda</h2>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Leonardo_da_Vinci_-_Mona_Lisa_%28Louvre%2C_Paris%29.jpg/245px-Leonardo_da_Vinci_-_Mona_Lisa_%28Louvre%2C_Paris%29.jpg" style="padding: 10px; width: 20%">
@stop
@section('footer')

@stop