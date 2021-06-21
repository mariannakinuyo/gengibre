<?php 
get_header();
$pageID = get_the_ID();
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="bg-title" style="background-image: url(<?php bloginfo('template_url'); ?>/src/images/titulo-1.png )">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="content-quem">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$titulo_equipe = get_field('titulo_equipe_fr', $pageID);
$nossa_equipe = get_field('equipe_fr');
?>
<section class="page-equipe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <h1 class="titulo-light"><?php echo $titulo_equipe; ?></h1>
            </div>
            <div class="col-lg-12 col-12">
                <div class="bg-img flor-equipe" style="background-image: url(<?php bloginfo('template_url'); ?>/src/images/flor-nova.png)">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="grid-container">
                            <?php  
                            if( $nossa_equipe ) {
                                foreach( $nossa_equipe as $equipe ) {
                                    $nome_equipe = $equipe['nome_equipe'];
                                    $foto_equipe = $equipe['foto_equipe'];
                                    $descricao_equipe = $equipe['descricao_equipe'];
                                    $link = $equipe['links_equipe'];
                            ?>
                                <div class="box-img" data-toggle="modal" data-target="#<?php echo $nome_equipe; ?>">
                                    <img class="img-equipe" src="<?php echo $foto_equipe; ?>" alt="">
                                </div>
                            <?php 
                            wp_reset_postdata(); }
                            }
                            ?>
                        </div>
                    </div>
                    <?php  
                    if( $nossa_equipe ) {
                        foreach( $nossa_equipe as $equipe ) {
                            $nome_equipe = $equipe['nome_equipe'];
                            $foto_equipe = $equipe['foto_equipe'];
                            $descricao_equipe = $equipe['descricao_equipe'];
                            $link = $equipe['links_equipe'];
                    ?>
                        <!-- modal -->
                        <div class="modal fade" id="<?php echo $nome_equipe; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-equipe modal-content">
                                    <div class="d-flex">
                                        <img class="img-modal-equipe" src="<?php echo $foto_equipe; ?>" alt="">
                                        <div>
                                            <h4><?php echo $nome_equipe; ?></h4>
                                            <p><?php echo $descricao_equipe; ?></p>
                                            <?php if ( $link ) {
                                                $link_url = $link['url'];
                                                $link_nome = $link['title'];
                                            }
                                            ?>
                                            <a href="<?php echo $link_url; ?>" title="<?php echo $nome_equipe; ?>"><p><?php echo $link_nome ?></p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

<?php
$titulo_instituicoes = get_field('titulo_nossas_instituicoes_fr', $pageID);
$instituicoes = get_field('instituicoes_fr');
?>
<section id="notre-reseau">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <h1 class="line-green m-auto"><?php echo $titulo_instituicoes; ?></h1>
            </div>
            <div class="col-lg-10 offset-lg-1 col-12">
                <div class="d-flex justify-content-between">
                    <?php  
                    if( $instituicoes ) {
                        foreach( $instituicoes as $instituicao ) {
                            $nome_instituicao = $instituicao['nome_instituicao'];
                            $logo_instituicao = $instituicao['logo_instituicao'];
                            $link_instituicao = $instituicao['link_instituicao'];
                    ?>
                        <a href="<?php echo $link_instituicao; ?>" title="<?php echo $nome_instituicao; ?>">
                            <div class="rede-radial">
                                <img src="<?php echo $logo_instituicao; ?>" alt="<?php echo $nome_instituicao; ?>">
                            </div>
                        </a>
                    <?php 
                    wp_reset_postdata(); }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$titulo_rede = get_field('titulo_nossa_rede', $pageID);
$redes = get_field('rede');
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <h1 class="line-green m-auto"><?php echo $titulo_rede; ?></h1>
            </div>
            <div class="col-lg-10 offset-lg-1 col-12">
                <div class="d-flex">
                    <?php  
                    if( $redes ) {
                        foreach( $redes as $rede ) {
                            $nome_rede = $rede['nome_rede'];
                            $logo_rede = $rede['logo_rede'];
                            $link_rede = $rede['link_rede'];
                    ?>
                        <a href="<?php echo $link_rede; ?>" title="<?php echo $nome_rede; ?>">
                            <img src="<?php echo $logo_rede; ?>" alt="<?php echo $nome_rede; ?>">
                        </a>
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