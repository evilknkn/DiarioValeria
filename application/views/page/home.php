
<div class="row">
    <div class="box">
        <div class="col-lg-12 ">
            <div class="text-center">
                <hr>
     
                <h2>
                    <small>
                        <strong>Valeria Martell</strong>
                    </small>
                </h2>
                <hr>
            </div>

           <div class="col-lg-5">
            <div id="carousel-example-generic" class="carousel slide col-lg-12">
                <ol class="carousel-indicators hidden-xs">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>

                <div class="carousel-inner ">
                    <div class="item active">
                        <img class="img-responsive img-full" src="<?php echo base_url()?>/assets/images/valeria_450_600_05.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive img-full" src="<?php echo base_url()?>/assets/images/valeria_450_600_02.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive img-full" src="<?php echo base_url()?>/assets/images/valeria_450_600_03.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive img-full" src="<?php echo base_url()?>/assets/images/valeria_450_600_04.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive img-full" src="<?php echo base_url()?>/assets/images/valeria_450_600_06.jpg" alt="">
                    </div>
                </div>

                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </div>
           </div>
           
            <br/>
            <p> Soy una chica muy amigable, leal, transparente. Me gusta conocer gente de todo tipo de culturas y viajar. <br/><br/>

             Trato de sacar lo mejor de cada momento y vivir la vida lo mejor que puedo, soy una persona muy pasional y un poco impulsiva. <br/><br/>

              Me gusta mucho divertirme, tener momentos de tranquilidad; que las personas que me rodean estén a gusto y feliz.
             Creo que una persona te puede aportar muchas cosas conversando y conociéndola bien, mucho mas que solo un físico.</p>
            <p> Si aún tienes dudas de la chica que soy, puedes <a href="<?php base_url()?>contacto" style="text-decoration:none"><strong>contactarme </strong></a> o visitar mis redes sociales:</p>
           
                <ul class="list-inline banner-social-buttons">
                <li>
                    <a href="https://twitter.com/Valeria_Martell" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                </li>
                <li>
                    <a href="https://instagram.com/VALERIA_MARTELL" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-instagram fa-fw"></i> <span class="network-name">INSTAGRAM</span></a>
                </li>
                <!-- <li>
                    <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                </li> -->
            </ul>
            
<!-- 
    
            <p>Adoro los mariscos y la comida japonesa. Soy una responsable Lic. en Finanzas, administradora de inmuebles, consejera, dulce, apasionada 
                y cariñosa, con la que te podrás conectar nada más con cruzar la mirada. </p>

            <p>Soy capaz de hacer que todo lo malo que pueda haber pasado ese día acabe siendo una simple niñería. Mi mirada y tacto son capaces de hacerte
             olvidar de todo para después meterte en un estado de calma y desasosiego absoluto. Soy una compañera maravillosa por la que uno afirmaría acabar todos los días entre mis brazos.</p>

             <p>Me gusta llevar las riendas, no te sorprendan mis ganas por descubrirte, por saber cómo eres y averiguar hasta donde puedes llegar. 
                 Una vez que lo descubra,  haré todo lo posible para que acabes demostrándomelo, para que disfrutes conmigo como nunca y para que me hagas gozar como realmente quiero.</p> -->
        </div>
    </div>

    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">
                <strong>Conoce un poco más de mi </strong>
            </h2>
            <hr>
        </div>
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <img class="img-responsive img-border img-full" src="<?php echo base_url('/assets/blog/'.$post_recent->img_post)?>" alt="<?php echo $post_recent->titulo;?>">
            <h2><?php echo $post_recent->titulo;?>
                <br>
                <small><?php echo formato_fecha_ddmmaaaa($post_recent->fecha_reg)?></small>
            </h2>
            <p class="text-left"><?php echo substr($post_recent->contenido, 0, 405) ?> ...</p>
            <a href="<?php echo base_url('/blog/post/'.$post_recent->short_title)?>" class="btn btn-default btn-lg">Leer más</a>
            <hr>
        </div>
        <div class="col-lg-2"></div>
    </div>

</div>

