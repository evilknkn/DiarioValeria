<div class="row">
	<div class="col-lg-8">
		<div class="box">
       <?php foreach($indice as $post): ?>
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <img class="img-responsive img-border img-full" src="<?echo base_url('/assets/blog/'.$post->img_post)?>" alt="">
            <h2><?php echo $post->titulo;?>
                <br>
                <small><?php echo formato_fecha_ddmmaaaa($post->fecha_reg)?></small>
            </h2>
            <p class="text-left"><?php echo substr($post->contenido, 0, 150) ?> ...</p>
            <a href="<?php echo base_url('/blog/post/'.$post->short_title)?>" class="btn btn-default btn-lg">Leer más</a>
            <hr>
        </div>
        <?php endforeach; ?>
    </div>
	</div>

    <!-- Lista de 5 recientes-->	
	<div class="col-lg-4">
		<div class="box">
			<?php echo $this->load->view('diario/top_five_recents')?>
		</div>
	</div>
</div>



