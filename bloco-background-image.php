<?php
$imagem_left = get_field( 'imagem_left' );
$texto_right = get_field( 'texto_right' );
?>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-img bg-bloco-img" style="background-image: url(<?php bloginfo('template_url'); ?>/src/images/quadro.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <img class="img-bloco-left" src="<?php echo $imagem_left['url'] ?>" alt="imagem de destaque">
            </div>
            <div class="col-lg-5 offset-lg-1 col-12">
                <div class="line-bloco"></div>
                    <p class="text-bloco-right"><?php echo $texto_right ?></p>
                <div class="line-bloco"></div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
            <div class="conteudo">