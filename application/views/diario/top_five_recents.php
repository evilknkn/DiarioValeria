<div class="">
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12 padding-top-small">
            <h3>Post Recientes</h3>
            <ul class="list-unstyled">
                <?php foreach($five_recent as $post): ?>
                <li>
                    <a href="<?php echo base_url('blog/post/'.$post->short_title)?>" style="text-decoration:none">
                        <h5><?php echo $post->titulo?></h5>
                    </a>
                </li>
                <?php endforeach; ?>
             </ul>
        </div>
    </div>
</div>