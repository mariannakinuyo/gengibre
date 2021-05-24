<?php 
get_header();
$pageID = get_the_ID();
$frase_destaque = get_field('frase_destaque', $pageID);
?>

<section class="hero-home" style="background-image: url(<?php  echo get_field('imagem_destaque', $pageID) ?>)">
    <div class="destaque">
        <h1><?php echo $frase_destaque ?></h1>
    </div>
</section>

<?php
$objetivo_1 = get_field('objetivo_1', $pageID);
$objetivo_2 = get_field('objetivo_2', $pageID);
$objetivo_3 = get_field('objetivo_3', $pageID);
?>
<section class="home-objetivos">
    <div class="d-flex justify-content-between">
        <div class="box-objetivos col-lg-4 col-12">
            <img src="<?php echo $objetivo_1['icone_1'] ?>" alt="ícone">
            <h4><?php echo $objetivo_1['titulo_1'] ?></h4>
            <p><?php echo $objetivo_1['texto_1'] ?></p>
        </div>
        <div class="box-objetivos col-lg-4 col-12">
            <img src="<?php echo $objetivo_2['icone_2'] ?>" alt="ícone">
            <h4><?php echo $objetivo_2['titulo_2'] ?></h4>
            <p><?php echo $objetivo_2['texto_2'] ?></p>
        </div>
        <div class="box-objetivos col-lg-4 col-12">
            <img src="<?php echo $objetivo_3['icone_3'] ?>" alt="ícone">
            <h4><?php echo $objetivo_3['titulo_3'] ?></h4>
            <p><?php echo $objetivo_3['texto_3'] ?></p>
        </div>
    </div>
</section>

<?php
$titulo_projeto = get_field('titulo_projeto', $pageID);
$texto_projeto = get_field('texto_projeto', $pageID);
$imagem_projeto = get_field('imagem_projeto', $pageID);
$botao_projeto = get_field('botao_projeto', $pageID);
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $titulo_projeto ?></h2>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo $imagem_projeto ?>" alt="">
            </div>
            <div class="col-lg-6">
                <?php echo $texto_projeto ?>
                <button class="btn-primario"><?php echo $botao_projeto ?></button>
            </div>
        </div>
    </div>
</section>

<?php
$titulo_quem_somos = get_field('titulo_quem_somos', $pageID);
$imagem_quem_somos = get_field('imagem_quem_somos', $pageID);
$texto_quem_somos = get_field('texto_quem_somos', $pageID);
$botao_quem_somos = get_field('botao_quem_somos', $pageID);
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $titulo_quem_somos ?></h2>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo $imagem_quem_somos ?>" alt="">
            </div>
            <div class="col-lg-6">
                <?php echo $texto_quem_somos ?>
                <button class="btn-primario"><?php echo $botao_quem_somos ?></button>
            </div>
        </div>
    </div>
</section>

<?php
$titulo_nossa_rede = get_field('titulo_nossa_rede');
$nossa_rede = get_field('nossa_rede');
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $titulo_nossa_rede ?></h2>
            </div>
            <div class="col-12">
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