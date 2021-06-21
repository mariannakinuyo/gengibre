<?php 
get_header();
$pageID = get_the_ID();
$frase_destaque = get_field('frase_destaque_fr', $pageID);
?>

<section class="hero-home" style="background-image: url(<?php  echo get_field('imagem_destaque_fr', $pageID) ?>)">
    <!-- <img class="hero-home" src="<?php  echo get_field('imagem_destaque_fr', $pageID) ?>" alt=""> -->
    <div class="container">
        <div class="row">
            <div class="destaque">
                <p><?php echo $frase_destaque ?></p>
            </div>
        </div>
        
    </div>
    
</section>

<?php
$objetivo_1 = get_field('objetivo_1_fr', $pageID);
$objetivo_2 = get_field('objetivo_2_fr', $pageID);
$objetivo_3 = get_field('objetivo_3_fr', $pageID);
?>
<section class="container home-objetivos">
    <div class="row">
        <div class="box-objetivos um-box col-lg-3 col-12">
            <div class="text-center">
                <img src="<?php echo $objetivo_1['icone_1'] ?>" alt="ícone">
            </div>
            <p><strong><?php echo $objetivo_1['titulo_1'] ?></strong></p>
            <p class="subtitle"><?php echo $objetivo_1['texto_1'] ?></p>
        </div>
        <div class="box-objetivos dois-box col-lg-3 col-12">
            <div class="text-center">
                <img src="<?php echo $objetivo_2['icone_2'] ?>" alt="ícone">
            </div>
            <p><strong><?php echo $objetivo_2['titulo_2'] ?></strong></p>
            <p class="subtitle"><?php echo $objetivo_2['texto_2'] ?></p>
        </div>
        <div class="box-objetivos tres-box col-lg-3 col-12">
            <div class="text-center">
                <img src="<?php echo $objetivo_3['icone_3'] ?>" alt="ícone">
            </div>
            <p><strong><?php echo $objetivo_3['titulo_3'] ?></strong></p>
            <p class="subtitle"><?php echo $objetivo_3['texto_3'] ?></p>
        </div>
    </div>
</section>

<?php
$titulo_projeto = get_field('titulo_projeto_fr', $pageID);
$texto_projeto = get_field('texto_projeto_fr', $pageID);
$imagem_projeto = get_field('imagem_projeto_fr', $pageID);
$botao_projeto = get_field('botao_projeto_fr', $pageID);
?>
<section class="home-quem-somos">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo $imagem_projeto ?>" alt="">
            </div>
            <div class="col-lg-6">
                <h1 class="line-green m-auto"><?php echo $titulo_projeto ?></h1>
                <?php echo $texto_projeto ?>
                <a href="<?php bloginfo('siteurl'); ?>/projeto"><button class="btn-primario"><?php echo $botao_projeto ?></button></a>
            </div>
        </div>
    </div>
</section>

<?php
$titulo_quem_somos = get_field('titulo_quem_somos_fr', $pageID);
$imagem_quem_somos = get_field('imagem_quem_somos_fr', $pageID);
$texto_quem_somos = get_field('texto_quem_somos_fr', $pageID);
$botao_quem_somos = get_field('botao_quem_somos_fr', $pageID);
?>
<section class="home-projeto bg-img" style="background-image: url(<?php bloginfo('template_url'); ?>/src/images/quadro.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr-0">
                <div class="box-texto">
                    <h1 class="line-green m-auto"><?php echo $titulo_quem_somos ?></h1>
                    <?php echo $texto_quem_somos ?>
                    <a href="<?php bloginfo('siteurl'); ?>/quem-somos"><button class="btn-primario"><?php echo $botao_quem_somos ?></button></a>
                </div>
            </div>
            <div class="col-lg-6 pl-0">
                <img src="<?php echo $imagem_quem_somos ?>" alt="">
            </div>
        </div>
    </div>
</section>

<?php
$titulo_nossa_rede = get_field('titulo_nossa_rede_fr');
$nossa_rede = get_field('nossa_rede_fr');
?>
<section class="home-rede">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="line-green m-auto"><?php echo $titulo_nossa_rede ?></h1>
            </div>
            <div class="col-12 mt-lg-4">
                <div class="d-flex justify-content-between">
                <?php  
                if( $nossa_rede ) {
                    foreach( $nossa_rede as $rede ) {
                        $logo_nossa_rede = $rede['logo_nossa_rede'];
                        $link_nossa_rede = $rede['link_nossa_rede'];
                ?>
                    <div class="rede-radial">
                        <a href="<?php echo $link_nossa_rede ?>">
                            <img src="<?php echo $logo_nossa_rede ?>" alt="Logos da nossa rede">
                        </a>
                    </div>
                <?php 
                wp_reset_postdata(); }
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>