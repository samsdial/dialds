<?php
/**
 * Template Name: Home page web
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<!-- ADD -- carrusel intro de home OPT news room-->
<section class="bgc--black">
<?php if(get_field('slider_intro', 'options')): ?>
    <ul class="slider_intro">
        <?php while(has_sub_field('slider_intro', 'options')): ?>
            <li>
                <div class="bgi bgi_home" data-aos="fade-down" style="background-image: url(<?php echo the_sub_field('imagen_home'); ?>)">
                    <div class="box_slider_img">
                        <span class="bgi bgi_item"></span>
                    </div>
                    <div class="box_slider_title">
                        <span class="title_web cl--white txt_center">
                            <div class="txt_upper dialtxt">- /Agencia Digital/ -</div>
                            <div class="txt_size--med">Tu próximo movimiento interactivo</div>
                        </div>
                    </span>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>
</section>
<!-- FIN -- carrusel intro de home OPT news room-->
<!---- ADD -- Since OPT NEWS ROMM-->
<section class="bgc--black" ><!--Section since OPT-->
    <div class="container ">
        <div class="row">
            <div class="col text-center">
                <div class="box_title_line box_title_line_blue" data-aos="fade-up">
                    <div class="title cl--white"><!--SINCE TITLE-->
                        <h2 class="display-1 txt_upper">
                            <?php the_field('intro_title', 'options'); ?>
                        </h2>
                    </div>
                    <div class="subtitle cl--white"><!--SINCE SUBTITLE-->
                        <h2 class="h2 txt_upper">
                            <?php the_field('intro_subtitulo', 'options'); ?>
                        </h2>
                    </div>
                </div>
                <div class="paragraf cl--white mg_box--middle" data-aos="zoom-in-up">
                    <p>
                        <?php the_field('intro_parrafo','options')?>
                    </p>
                </div>
                <button class="btn_icon btn_circle bgc--white cl--blue txt_size--minx2" id="animate">
                    <i class="fa fa-sort-down"></i>
                </button>
            </div>
        </div>
    </div>
</section>
<!---- ADD -- Since OPT NEWS ROMM-->
<section>
    <div class="container">
        <div class="row ">
            <div class="col pd_top--x50 pd_bottom--x50" data-aos="fade-up">
                <div class="box_title_line box_title_line_black">
                    <div class="title txt_center cl--white display-4 txt_upper">
                        <?php the_field('solutions_title','options')?>
                    </div>
                </div>
            </div>
        </div>
        <?php if(get_field('solutions_item', 'options')): ?>

                <?php $rowNum = 1; ?>
                <?php while(has_sub_field('solutions_item', 'options')): ?>
                <?php $rowNum++;
                $item1 = $rowNum % 2 === 0;
                ?>
                <?php if($item1):?>
                    <div class="row align-items-center no-gutters hover_solutions" data-aos="fade-right">
                        <div class="col-12 col-md-5 aling_btn--right">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="item cl--white pd_box--x20 txt_right">
                                            <?php echo the_sub_field('description'); ?>
                                    </div>
                                </div>
                                <div class="col align-self-end txt_right">
                                    <div class="btn btn_site--icon txt_upper">
                                        <?php echo the_sub_field('title_button'); ?> <i class="fa fa-angle-right ml-4"></i>
                                    </div>
                                </div>
                            </div>
                            <!--<a href="#" class="btn btn_ghost">Go..</a>-->
                        </div>
                        <div class="col-12 col-sm-8 col-md-7" style="overflow: hidden;">
                            <div class="w-100 bgi bgi_item--service" style="background-image: url(<?php echo the_sub_field('imagen'); ?>);">
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="row align-items-center no-gutters hover_solutions" data-aos="fade-left">
                        <div class="col-12 col-md-5 order-last aling_btn--right">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="item cl--white pd_box--x20 txt_left">
                                            <?php echo the_sub_field('description'); ?>
                                    </div>
                                </div>
                                <div class="col align-self-end txt_left">
                                    <div class="btn btn_site--icon txt_upper">
                                        <i class="fa fa-angle-left mr-4"></i><?php echo the_sub_field('title_button'); ?>
                                    </div>
                                </div>
                            </div>
                            <!--<a href="#" class="btn btn_ghost">Go..</a>-->
                        </div>
                        <div class="col-12 col-md-7 order-first" style="overflow: hidden;">
                            <div class="bgi bgi_item--service" style="background-image: url(<?php echo the_sub_field('imagen'); ?>);">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php endwhile; ?>

        <?php endif; ?>


    </div>
</section>
<!--start-->
<!--Whout Clientes-->
<section class="bgi bgi_customer pd_bottom--x150 pd_top--x150 mt-5" style="background-image: url(<?php the_field('bg_customes', 'options'); ?>);">
    <div class="container">
        <div class="col-12 my-5">
            <div class="box_title_line box_title_line_blue">
                <div class="title cl_black text-center txt_upper display-4" data-aos="fade-up">
                    <?php the_field('title_customers','options')?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php if(get_field('slider_item_clients', 'options')): ?>
            <ul class="slider_customer my-5">
                <?php while(has_sub_field('slider_item_clients', 'options')): ?>
                    <li>
                        <div class="col bgc--white py-5 px-5" data-aos="flip-left">
                            <!--<div class="icon icon_customer icon_customer_hpe mb-2" style="background-image: url(<?php /*echo the_sub_field('logo_customer'); */?>)"></div>-->
                            <div class="cl--blue txt_size--max">
                                <i class="fa cl--blue fa-<?php echo the_sub_field('name_service'); ?>"></i>
                            </div>
                            <div class="title txt_ffSecond txt_bold mt-2 cl--blue">
                                <?php echo the_sub_field('name_customer'); ?>
                            </div>
                            <div class="paragraf txt_ffSecond my-5 cl--black">
                                <?php echo the_sub_field('customer_comment'); ?>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<!--Whout Clientes-->
<!--End-->
<!--start-->
<!-- Module Meet us-->
<section class="bgc--black pb-5">
    <div class="container">
        <div class="col-12 pd_top--x50 pd_bottom--x50">
            <div class="box_title_line box_title_line_blue">
                <div class="title txt_center cl--white display-4 txt_upper" data-aos="fade-up">
                    <?php the_field('title_meet_us', 'options'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-xxs-12 col-md-7 col-lg-5 order-xs-last my-5">
                <div class="box_addres" data-aos="fade-right">
                    <div class="title txt_upper h3 txt_bold"><?php the_field('title_addres', 'options'); ?></div>
                    <div class="txt_info my-5"><?php the_field('info_addres', 'options'); ?></div>
                    <div class="box_info mb-5">
                        <?php if(get_field('data_addres', 'options')): ?>
                            <ul class="list--addres">
                                <?php while(has_sub_field('data_addres', 'options')): ?>
                                    <li>
                                        <a href="<?php echo the_sub_field('link_url'); ?>" target="_blank">
                                            <!--<span class="icon icon_item" style="background-image: url(<?php /*echo the_sub_field('icono'); */?>)"></span>-->
                                            <i class="fa mr-4 fa-<?php echo the_sub_field('icono_addres'); ?>"></i>
                                            <span class="mg_left--x5 txt_data"><?php echo the_sub_field('date'); ?></span>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="box_follow " data-aos="fade-left">
                    <div class="title txt_upper h3 txt_bold">
                        <?php the_field('title_follow_us', 'options'); ?>
                    </div>
                    <div class="box_info mb-5">
                        <?php if(get_field('data_addres', 'options')): ?>
                            <ul class="list--inline">
                                <?php while(has_sub_field('data_social', 'options')): ?>
                                    <li>
                                        <a href="<?php echo the_sub_field('social_link'); ?>" target="_blank" class="fa fa-social mr-4 fa-<?php echo the_sub_field('name_social'); ?>-square">
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-xxs-12 col-md-5 col-lg-7 my-5">
                <form action="">
                    <div class="form-row" >
                        <div class="form-group col-12 col-sm-6" data-aos="fade-right">
                            <span class="input input--madoka inputName"> <!--ADD JS // input--filled-->
                                <input class="input__field input__field--madoka name" type="text" id="name">
                                <label class="input__label input__label--madoka" for="name">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"></path>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Nombre</span>
                                </label>
                            </span>
                        </div>
                        <div class="form-group col-12 col-sm-6" data-aos="fade-left">
                            <span class="input input--madoka inputLastName"> <!--ADD JS // input--filled-->
                                <input class="input__field input__field--madoka lastname" type="text" id="lastname">
                                <label class="input__label input__label--madoka" for="lastname">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"></path>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Apellido</span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-row" >
                        <div class="form-group col-12 col-sm-6" data-aos="fade-right">
                            <span class="input input--madoka inputEmail"> <!--ADD JS // input--filled-->
                                <input class="input__field input__field--madoka email" type="text" id="email">
                                <label class="input__label input__label--madoka" for="email">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"></path>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Email</span>
                                </label>
                            </span>
                        </div>
                        <div class="form-group col-12 col-sm-6" data-aos="fade-left">
                            <span class="input input--madoka inputPhone"> <!--ADD JS // input--filled-->
                                <input class="input__field input__field--madoka phone" type="text" id="phone">
                                <label class="input__label input__label--madoka" for="phone">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"></path>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Teléfono</span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-row" >
                        <div class="form-group col-12 col-sm-6" data-aos="fade-right">
                        </div>
                        <div class="form-group col-12 col-sm-6" data-aos="fade-left">
                            <span class="input input--madoka inputCity"> <!--ADD JS // input--filled-->
                                <input class="input__field input__field--madoka city" type="text" id="city">
                                <label class="input__label input__label--madoka" for="city">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"></path>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Ciudad</span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-row" data-aos="fade-left">
                        <div class="form-group col">
                            <span class="input textarea input--madoka inputMessage"> <!--ADD JS // input--filled-->
                                <textarea class="input__field input__field--madoka message" name="mesagge" id="message" cols="30" rows="10"></textarea>
                                <label class="input__label input__label--madoka" for="message">
                                    <svg class="graphic graphic--madoka textarea" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"></path>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Mensaje</span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="d-block">
                        <div class="alert cl--red">
                            <small>error</small>
                        </div>
                    </div>
                    <div class="d-block" data-aos="flip-up">
                        <button id="submit" class="btn btn--full btn_site--blue submit txt_upper" type="submit">Enviar</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</section>
<!-- Module Meet us-->

<!--End-->
<?php get_footer(); ?>
