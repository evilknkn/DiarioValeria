<div class="row">
    <div class="col-lg-8">
        <div class="box">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <img class="img-responsive img-border img-full" src="<?echo base_url('/assets/blog/'.$post->img_post)?>" alt="">
                <h2><?php echo $post->titulo;?>
                    <br>
                    <small><?php echo formato_fecha_ddmmaaaa($post->fecha_reg)?></small>
                </h2>

                <div class="row">
                    <div class="col-lg-3">
                        <h3 style="line-height:0.1">Comparte</h3>
                    </div>

                    <div class="col-lg-1 col-lg-offset-1 hidden-xs hidden-sm ">
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/home?status=<?=urlencode($post->titulo.' '.base_url('blog/post/'.$post->short_title))?>" >
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>

                    <!-- <div class="col-lg-1 hidden-xs hidden-sm">
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/sharer.php?u=<?=urlencode(base_url('blog/post/'.$post->short_title))?>">
                            <i class="fa fa-facebook"></i>
                        </a> 
                    </div> -->

                    <div class="col-xs-12 text-center hidden-md hidden-lg">
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/home?status=<?=urlencode($post->titulo.' '.base_url('blog/post/'.$post->short_title))?>" >
                            <i class="fa fa-twitter"></i>
                        </a>

                        <!-- <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/sharer.php?u=<?=urlencode(base_url('blog/post/'.$post->short_title))?>">
                            <i class="fa fa-facebook"></i>
                        </a>  -->
                    </div>

                </div>
                <br>
                <br>
                <div class="text-left" style="margin-bottom:20px;"><?php echo $post->contenido ?></div>
                    
                <div class="row">
                    <div class="col-lg-3">
                        <h3 style="line-height:0.1">Comparte</h3>
                    </div>

                    <div class="col-lg-1 col-lg-offset-1 hidden-xs hidden-sm ">
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/home?status=<?=urlencode($post->titulo.' '.base_url('blog/post/'.$post->short_title))?>" >
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>

                   <!--  <div class="col-lg-1 hidden-xs hidden-sm">
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/sharer.php?u=<?=urlencode(base_url('blog/post/'.$post->short_title))?>">
                            <i class="fa fa-facebook"></i>
                        </a> 
                    </div> -->

                    <div class="col-xs-12 text-center hidden-md hidden-lg">
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/home?status=<?=urlencode($post->titulo.' '.base_url('blog/post/'.$post->short_title))?>" >
                            <i class="fa fa-twitter"></i>
                        </a>

                        <!-- <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/sharer.php?u=<?=urlencode(base_url('blog/post/'.$post->short_title))?>">
                            <i class="fa fa-facebook"></i>
                        </a>  -->
                    </div>

                </div>
                                   
                <hr>

                <div class="row">
                    <a href="<?php echo base_url('/blog')?>" class="btn btn-default">Regresar a entradas</a>
                </div>
            </div>
                
        </div>   
    </div>

    <!-- Lista de 5 recientes-->    
    <div class="col-lg-4">
        <div class="box">
            <?php echo $this->load->view('diario/top_five_recents')?>
        </div>
    </div>
</div>
