<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contacto
                    <strong>Valeria Martell</strong>
                </h2>
                <hr>
            </div>
            <?php if($this->session->flashdata('success')):?>
                <div class="text-center col-sm-12 ">
                    <div class="alert alert-success text-success text-center"> <?php echo $this->session->flashdata('success');?></div>
                </div>
            <?php endif;?>
            <p>Por favor dejame tus datos y me pondré en contacto contigo a la brevedad.</p>
            <p><b>Nota:</b> En el contenido deja el horario en el que te puedo contactar, esto con el fin de tener completa discreción.</p>
           

            <form role="form" method="post" >
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre">
                        <?=form_error('nombre')?>                        
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                        <?=form_error('nombre')?>  
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Teléfono</label>
                        <input type="tel" class="form-control" name="telephone">
                        <?=form_error('nombre')?>  
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                        <label>Mensaje</label>
                        <textarea class="form-control" rows="6" name="message"></textarea>
                        <?=form_error('nombre')?>  
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="hidden" name="save" value="contact">
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Hoteles
                        
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.4732202667365!2d-99.18194059999998!3d19.391949200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff7bae0fc483%3A0xd8ffebe60a2102da!2sAv+Patriotismo+53%2C+San+Pedro+de+Los+Pinos%2C+03800+Ciudad+de+M%C3%A9xico%2C+D.F.!5e0!3m2!1ses!2smx!4v1430429817152"></iframe>
                </div>
                <div class="col-md-4">
                 <!--    <p>Teléfono:
                        <strong> <a href="tel:+52-556-383-5101" style="color:#000;text-decoration:none"> 5543731944</a></strong>
                    </p> -->
                    
                    <p>Hotel:
                        <strong>Love HotelPatriotismo
                            <br>Patriotismo 53, Colonia Escandón, Miguel Hidalgo, Distrito Federal</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>