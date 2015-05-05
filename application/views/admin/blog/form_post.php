<script src="<?php echo base_url('assets/keditor/')?>/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/keditor/samples/')?>/sample.css">

<div class="row">
	<form class="form-horizontal" method="post" >

		<div class="form-group">
			<label class="control-label col-lg-5 no-padding-left">Título</label>
			<div class="col-lg-5">
				<input type="text" name="titulo" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-lg-5 no-padding-left">Imagen principal</label>
			<div class="col-lg-5">
				<input type="file" id="exampleInputFile" name="image_post">
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-3">
				<textarea class="ckeditor" cols="80" id="editor1" name="contenido_post" rows="10">
				</textarea>
			</div>
		</div>

		<div class="clearfix ">
			<div class="col-lg-offset-3 text-center">
			<button class="btn btn-lg btn-primary">Crear</button>
			</div>
		</div>
	</form>
</div>