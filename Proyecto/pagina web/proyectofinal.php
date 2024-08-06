<?php
include './Components/header.php';
include './config/db.php'; // Traer la conexión a la base de datos
$con = conectarDB(); // Establece la conexión a la base de datos

?>

<header class="content header">
    <h2 class="title">Bienvenido/a a Funcional GYM La Invernada 💪</h2>
    <p id="presentación">
        Este gimnasio está destinado a todas aquellas personas que quieren
        superarse a sí mismas y vos... ¿qué esperás para venir a Funcional GYM
        La Invernada? De Lunes a Sábados estamos para vos. ¡Te esperamos!
    </p>
    <div class="btn-home">
        <a href="#" class="btn">Saber más</a>
        <a href="#" class="btn">Saber más</a>
    </div>
</header>

<section class="content sau" id="beginning">
    <h2 class="title">Productos</h2>
    <p>
        También te ofrecemos nuestra variedad de productos, hecha un vistazo por
        acá.
    </p>
    <div class="box-container">
        <div class="box">
            <i class="fab fa-angular"></i>
            <h3>Ropa Deportiva</h3>
            <em>Masculina, femenina y de niños/as</em>
        </div>
        <div class="box">
            <i class="fab fa-apple"></i>
            <h3>Comida</h3>
        </div>
        <div class="box">
            <i class="fab fa-angular"></i>
            <h3>Suplementos</h3>
        </div>
    </div>
</section>

<section class="content about" id="somoss">
    <h1 class="title">Nosotros somos</h1>
    <p>Funcional gym La Invernada</p>
    <img src="img/gymfuncional.jpg" height="150px" width="10%" alt="Imagen del gimnasio" />
    <div class="box-container"></div>
    <a href="#" class="btn">Saber más</a>
</section>

<section class="content price" id="clase">
    <article class="contain">
        <h2 class="title">Clases de Tela</h2>
        <p>
            Clases de Tela con la profesora Lucía Gabriela Díaz. Para inscribirte,
            tenés que dejar tus datos. Si te interesa, podés llegarte por el
            gimnasio Funcional GYM La Invernada.
        </p>
        <a href="#" class="btn">Saber precio</a>
    </article>
</section>

<section id="instructores" class="contenedor" style="padding:32px;">
    <h2 style="color: white; text-align: center;">Instructores</h2>

    <!-- Acá estan los instructores -->
    <div class="grid-container">
        <?php
        include './Components/Instructores.php';
        ?>
    </div>
</section>


<section class="content contact" id="info">
    <h2 class="title" style="font-size: 32px">Contacto / Nro de celular / Días y horarios</h2>
    <h2>
        <p>3865609467</p>
    </h2>
    <h2>
        <p>Lunes a Viernes de 8 a 11 y de 14 a 22</p>
    </h2>
    <figure class="map">
        <img src="img/thumbnail.jpg" height="250px" width="100%" alt="mapa" />
    </figure>
</section>

<script src="app.js"></script>
</body>

</html>