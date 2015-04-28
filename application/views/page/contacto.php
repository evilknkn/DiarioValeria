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
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Teléfono:
                        <strong> <a href="tel:+52-556-383-5101" style="color:#000;text-decoration:none"> 5543731944</a></strong>
                    </p>
                    
                    <p>Address:
                        <strong>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>