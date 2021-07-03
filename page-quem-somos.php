<?php 
get_header();
$pageID = get_the_ID();
$page = get_post(get_the_ID());
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="bg-title" style="background-image: url(<?php bloginfo('template_url'); ?>/src/images/titulo-1.png )">
                    <h1><?php the_title(); ?></h1>
                </div>
                <article class="content-quem">
                    <?php
                    if ( has_blocks( $page->post_content ) ) {
                        $blocks = parse_blocks( $page->post_content );
                        foreach ( $blocks as $block ) {
                            echo apply_filters( 'the_content', render_block( $block ) );
                        }
                    }
                    ?>
                </article>
            </div>
        </div>
    </div>
</section>

<?php
$titulo_equipe = get_field('titulo_equipe', $pageID);
$nossa_equipe = get_field('equipe');
?>
<section class="page-equipe">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12 p-equipe">
                <div class="bg-img flor-equipe">
                    <div class="auto-m p-equipe col-md-6 offset-md-3 col-lg-12">
                        <div class="grid-container">
                            <?php  
                            if( $nossa_equipe ) {
                                foreach( $nossa_equipe as $equipe ) {
                                    $nome_equipe = $equipe['nome_equipe'];
                                    $foto_equipe = $equipe['foto_equipe'];
                                    $descricao_equipe = $equipe['descricao_equipe'];
                                    $link = $equipe['links_equipe'];
                            ?>
                                <div class="box-img">
                                    <div class="opacity" data-toggle="modal" data-target="#<?php echo $nome_equipe; ?>">
                                        <img class="img-equipe" src="<?php echo $foto_equipe; ?>" alt="">
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
                    <div class="modal-equipe modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="btn-close" aria-hidden="true">&times;</span>
                        </button>
                        <div class="d-lg-flex align-items-center box-modal">
                            <img class="img-modal-equipe" src="<?php echo $foto_equipe; ?>" alt="foto da equipe">
                            <div class="box-texto">
                                <h4><?php echo $nome_equipe; ?></h4>
                                <p><?php echo $descricao_equipe; ?></p>
                                <?php if ( $link ) {
                                    $link_url = $link['url'];
                                    $link_nome = $link['title'];
                                }
                                ?>
                                <a href="<?php echo $link_url; ?>" target="_blank" title="<?php echo $nome_equipe; ?>"><p><?php echo $link_nome ?></p></a>
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
</section>

<?php
$titulo_instituicoes = get_field('titulo_nossas_instituicoes', $pageID);
$instituicoes = get_field('instituicoes');
?>
<section id="nossa-rede">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <h1 class="line-green m-auto"><?php echo $titulo_instituicoes; ?></h1>
            </div>
            <div class="col-lg-10 offset-lg-1 col-12 mt-4">
                <div class="auto-m">
                    <?php  
                    if( $instituicoes ) {
                        foreach( $instituicoes as $instituicao ) {
                            $nome_instituicao = $instituicao['nome_instituicao'];
                            $logo_instituicao = $instituicao['logo_instituicao'];
                            $link_instituicao = $instituicao['link_instituicao'];
                    ?>
                        <a class="opacity logo-rede" href="<?php echo $link_instituicao; ?>" title="<?php echo $nome_instituicao; ?>">
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

<?php /*
$titulo_rede = get_field('titulo_nossa_rede', $pageID);
$redes = get_field('rede');
if( $redes ) {
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <h1 class="line-green m-auto"><?php echo $titulo_rede; ?></h1>
            </div>
            <div class="col-lg-10 offset-lg-1 col-12 mt-4">
                <div class="d-lg-flex">
                    <?php  
                    
                        foreach( $redes as $rede ) {
                            $nome_rede = $rede['nome_rede'];
                            $logo_rede = $rede['logo_rede'];
                            $link_rede = $rede['link_rede'];
                    ?>
                        <a class="opacity" href="<?php echo $link_rede; ?>" title="<?php echo $nome_rede; ?>">
                            <img src="<?php echo $logo_rede; ?>" alt="<?php echo $nome_rede; ?>">
                        </a>
                    <?php 
                    wp_reset_postdata(); 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } */ ?>



<?php get_footer(); ?>