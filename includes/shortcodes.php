<?
function banner_4_8($atts)
{
    $default = array(
        'post_id' => -1,
    );
    $args = shortcode_atts($default, $atts);
    $id = $args['post_id'];

?>
    <div class="banner_4_8 ">
        <div class="container px-0 px-md-5">
            <div class="row px-5 py-5">
                <div class="col-12 col-md-4 align-self-center px-5 px-lg-0">
                    <img class="w-100 px-2 mx-lg-0" src="<? echo get_image_g($id) ?>" alt="img">
                </div>
                <div class="col-12 col-md-8">
                    <h3 class=" text-danger text-uppercase font-weight-bold md-left-xs-center ml-0 ml-md-5 mb-3 mb-md-3 "><? echo get_the_title($id) ?></h3>
                    <div class="pl-0 pl-md-5 font-weight-lighter">
                        <? echo force_content($id) ?>
                        <? echo edit($id) ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?
}
add_shortcode('banner_4_8', 'banner_4_8');

function banner_3_9($atts)
{
    $default = array(
        'post_id' => -1,
    );
    $args = shortcode_atts($default, $atts);
    $id = $args['post_id'];

?>
    <div class="banner_3_9">
        <div class="container px-0 px-md-5">
            <div class="row px-5 py-5">
                <div class="col-12 col-md-6 col-lg-3">
                    <h3 class="text-danger text-uppercase font-weight-bold m-0 p-0 text-left">
                        <? $title = explode(' ', get_the_title($id));
                        echo str_replace('_', ' ', $title[0]);
                        ?>
                    </h3>
                    <h3 class="font-weight-light text-left mb-3">
                        <?
                        foreach ($title as $key => $value) {
                            if ($key != 0) echo $value . ' ';
                        }
                        ?>
                        <? echo edit($id) ?>

                    </h3>
                    <div class="md-left-xs-center small">
                        <? echo force_content($id) ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-9">
                    <img class="w-100" src="<? echo get_image_g($id) ?>" alt="img">

                </div>
            </div>
        </div>
    </div>
<?
}
add_shortcode('banner_3_9', 'banner_3_9');

add_shortcode('banner_text_image', 'banner_text_image');


function banner_text_image($atts)
{
    $default = array(
        'post_id' => -1,
    );
    $args = shortcode_atts($default, $atts);
    $id = $args['post_id'];
?>
    <div class="banner_text_image bg-blue-soft text-white ">
        <div class="container py-5 py-lg-5 " style="background-image: url('<? echo get_image_g($id) ?>');
           background-repeat: no-repeat;
    background-size: auto 100%;
    background-origin: padding-box;
    background-position: center center;">
            <div class="row py-5">
                <div class="col-12 col-md-6 col-lg-6 align-self-center ">
                    <div class="row">
                        <div class="col-12 my-medium-text mb-3 mb-lg-4 ">
                            <span class="text-uppercase font-weight-bold m-0 p-0 md-left-xs-center">
                                <? $title = explode(' ', get_the_title($id));
                                echo $title[0];
                                ?>
                            </span>
                            <span class="font-weight-lighter md-left-xs-center mb-3">
                                <?
                                foreach ($title as $key => $value) {
                                    if ($key != 0) echo $value . ' ';
                                }
                                ?>
                                <? echo edit($id) ?>

                            </span>
                        </div>
                        <div class="col-12 no-p">
                            <? echo force_content($id) ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 align-self-center">
                </div>
            </div>
        </div>
    </div>
<?
}

add_shortcode('animation_grid', 'animation_grid');

function animation_grid($atts)
{
    $default = array(
        'post_ids' => array(-1),
    );
    $args = shortcode_atts($default, $atts);
    $ids = explode(',', $args['post_ids']);

?>
    <div class="animation_grid my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-uppercase font-weight-bold text-center my-medium-text my-3">
                    WE OFFER THE FOLLOWING ANIMATIONS ON SOCIAL ASSETS
                </div>
            </div>
            <div class="row pt-2">
                <?
                foreach ($ids as $key => $value) {
                ?>

                    <div class="col-12 col-lg-4 ">
                        <div class="phone-container ">
                            <div class="d-flex flex-row justify-content-center ">
                                <img class="w-50" src="<? echo get_image_g($value) ?>" alt="animation">
                            </div>
                            <div class="text-center text-uppercase font-weight-bold mt-2">
                                <? echo get_the_title($value) ?>
                                <? echo edit($value) ?>

                            </div>
                            <div class="small">

                                <? echo force_content($value)
                                ?>

                            </div>
                        </div>
                    </div>

                <?
                }
                ?>

            </div>
        </div>
    </div>
<?
}
add_shortcode('animation_grid_2', 'animation_grid_2');

function animation_grid_2($atts)
{
    $default = array(
        'post_ids' => array(-1),
    );
    $args = shortcode_atts($default, $atts);
    $ids = explode(',', $args['post_ids']);

?>
    <div class="animation_grid my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-uppercase font-weight-bold text-center my-medium-text my-3">
                    WE OFFER THE FOLLOWING ANIMATIONS ON LANDING PAGES
                </div>
                <div class="col-12">
                    <p class="text-center ">
                        <i>IMPORTANT</i> - Animation is only allowed on the HERO section of the page.
                    </p>
                </div>

            </div>
            <div class="row pt-2">
                <?
                foreach ($ids as $key => $value) {
                ?>

                    <div class="col-12 col-lg-6 ">
                        <div class="animation-grid-2-container ">
                            <div class="d-flex flex-row justify-content-center ">
                                <img class="w-50" src="<? echo get_image_g($value) ?>" alt="animation">
                            </div>
                            <div class="text-center text-uppercase font-weight-bold mt-2">
                                <? echo get_the_title($value) ?>
                                <? echo edit($value) ?>

                            </div>
                            <div class="small text-center">

                                <? echo force_content($value)
                                ?>

                            </div>
                        </div>
                    </div>

                <?
                }
                ?>

            </div>
        </div>
    </div>
<?
}

add_shortcode('mobile_video', 'mobile_video');

function mobile_video($atts)
{
    $default = array(
        'video_id' => -1,
    );
    $args = shortcode_atts($default, $atts);
    $id = $args['video_id'];
    //print_r($atts);
?>
    <div class="text-center lh2 px-2">
        <? echo $atts['text']; ?>
    </div>
    <div class="mt-5 mb-3 text-center">
        Click to sample animation
    </div>
    <div class="phone d-flex align-items-center px-4 px-lg-4 px-md-5 ">
        <div class="embed-responsive embed-responsive-1by1 phone-preview" style="padding: 10px">
            <iframe class=" embed-responsive-item"  
            src="https://www.youtube.com/embed/<? echo $id ?>?rel=0&controls=0" allowfullscreen></iframe>
        </div>
    </div>
<?
}




add_shortcode('simple_img', 'simple_img');

function simple_img($atts)
{
    $default = array(
        'post_id' => -1,
        'class' => ''
    );
    $args = shortcode_atts($default, $atts);
    $post_id = $args['post_id'];
    //print_r($atts);
?>
    <div class="simple-img <? echo $args['class'] ?> ">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12">
                    <img class="w-100" src="<? echo get_image_g($post_id) ?>" alt="img">
                    <? echo edit($post_id) ?>
                </div>
            </div>
        </div>
    </div>
<?
}

add_shortcode('pc_animation', 'pc_animation');

function pc_animation($atts)
{
    $default = array(
        'post_ids' => array(-1),
        'animation' => 'to-right',
    );
    $args = shortcode_atts($default, $atts);
    $ids = explode(',', $args['post_ids']);
    //$animation =  $args['animation'];
    //print_r($atts);

?>
    <div class="row mx-4">
        <div class="col-12 px-5 mt-3">
            <? echo $atts['text'] ?>
        </div>
        <div class="col-12 py-5">
            Hover on the screen to sample animation
        </div>
        <div class="col-12 pc-container 
            <? if ($atts['animation'] == 'to-right') echo ' to-right';
            else echo 'to-top' ?>">

            <div class="pics-container overflow-hidden  ">
                <div class="pics-inner d-flex<? if ($atts['animation'] == 'to-right') echo ' flex-row';
                                                else echo 'flex-column' ?>" style='position: relative'>
                    <?
                    foreach ($ids as $key => $id) {
                    ?>
                        <img class="w-100  <? if ($key > 0) echo 'over-img'; ?> " src="<? echo get_image_g($id) ?>" alt="img">
                    <?
                    }
                    ?>
                </div>
            </div>

            <img src="<? echo getImg('pc.png')  ?>" alt="pc-img" class="w-100" style="position:absolute; top: 0; left: 0">
        </div>
    </div>
<?
}



add_shortcode('parallax', 'parallax');

function parallax($atts)
{
    $default = array(
        'post_ids' => array(-1),
    );
    $args = shortcode_atts($default, $atts);
    $ids = explode(',', $args['post_ids']);
    //$animation =  $args['animation'];
    //print_r($atts);

?>
    <div class="row mx-4">
        <div class="col-12 px-5 mt-3">
            <? echo $atts['text'] ?>
        </div>
        <div class="col-12 py-5">
            Hover on the screen to sample animation
        </div>
        <div class="col-12 pc-container to-top">

            <div class="pics-container overflow-hidden  ">
                <div class="pics-inner d-flex" style='position: relative'>
                    <img class="w-100" src="<? echo get_image_g($ids[0]) ?>" alt="img">
                    <img class="w-100 position-absolute over-parallax" src="<? echo get_image_g($ids[1]) ?>" alt="img" style="top:0;">


                </div>
            </div>

            <img src="<? echo getImg('pc.png')  ?>" alt="pc-img" class="w-100" style="position:absolute; top: 0; left: 0">
        </div>
    </div>
<?
}

add_shortcode('simple_banner_button', 'simple_banner_button');

function simple_banner_button($atts)
{
    $default = array(
        'post_id' => array(-1),
    );
    $args = shortcode_atts($default, $atts);
    $id = $args['post_id'];
?>
    <div class="back-to-home text-center py-4">
        <div class="container">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="my-medium-text text-danger text-center text-uppercase font-weight-bold">
                            <?php echo get_the_title($id) ?>
                            <? echo edit($id) ?>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-7 text-center small pt-3">
                        <? echo force_content($id) ?>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 ">
                        <button type="button" class="btn btn-white border border-dark py-3 py-lg-3 px-5 text-uppercase" onclick="window.location.href='<? echo get_in_touch_url() ?>'"> Get in touch
                        </button>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?
}

add_shortcode('img_banner_text', 'img_banner_text');


function img_banner_text($atts)
{
    //print_r($atts);
    $default = array(
        'post_id' => array(-1),
    );
    $args = shortcode_atts($default, $atts);
    //print_r($args);
    $id = $args['post_id'];
?>
    <div class="img_banner_text back-img text-center py-5" style="background-image: url('<? echo get_image_g($id) ?>');">
        <div class="container text-white py-3">
            <div class="row">
                <div class="col-12 my-medium-text text-uppercase font-weight-bold">
                    <? echo get_the_title($id) ?>

                </div>
                <div class="col-12 no-p my-2">
                    <? echo force_content($id) ?>
                    <? echo edit($id) ?>

                </div>
            </div>
        </div>
    </div>
<?
}

add_shortcode('mygallery', 'mygallery');

function mygallery($atts)
{
    //print_r($atts);
    $default = array(
        'post_id' => array(-1),
    );
    $args = shortcode_atts($default, $atts);
    //print_r($args);
    $id = $args['post_id'];
?>
    <div class="mygallery mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-2 px-5 px-lg-0">
                    <img class="w-100 px-3 px-lg-0" src="<? echo get_image_g($id) ?>" alt="logo">
                </div>
                <div class="col-12 col-lg-2"> <? echo edit($id) ?>
                </div>
                <div class="col-12 col-lg-6 align-self-center">
                    <div class="row ">
                        <div class="col-12 my-medium-text font-weight-bold pb-3 pb-lg-0 mb-3">
                            <? echo get_the_title($id) ?></div>
                        <div class="col-12">
                            <? echo get_the_excerpt($id) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <? echo force_content(($id)) ?>
                </div>
            </div>
        </div>
    </div>
<?
}

add_shortcode('two_grid_img', 'two_grid_img');

function two_grid_img($atts)
{
    $default = array(
        'post_ids' => array(-1),
    );
    $args = shortcode_atts($default, $atts);
    $ids = explode(',', $args['post_ids']);
?>
    <div class="two_grid_img mt-5 mb-5">
        <div class="container">
            <div class="row">
                <?
                foreach ($ids as $key => $id) {
                ?>
                    <div class="col-12 col-md-6">
                        <? echo force_content(($id)) ?>
                        <!--                         <img class="w-100" src="<? echo get_image_g($id) ?>" alt="img">
 -->
                    </div>
                <?
                }
                ?>

            </div>
        </div>
    </div>
<?
}

add_shortcode('grid_video_text', 'grid_video_text');

function grid_video_text($atts)
{
    $default = array(
        'post_id' => 'post_id',
        'id_video' => ''
    );
    $args = shortcode_atts($default, $atts);

?>
    <div class="grid_video_text mt-5 mb-0 pt-5 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 text-uppercase font-weight-bold my-medium-text text-center">
                    <? echo get_the_title($args['post_id']) ?>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-12 col-lg-8 d-flex align-items-center ">

                    <div class="video-container back-img " style="background-image: url('<? echo getImg('phone-h.png') ?>'); background-size: contain;">

                        <iframe class="p-5" style="    padding: 4rem !important;
    border-radius: 90px;" src="https://www.youtube.com/embed/<? echo $args['id_video'] ?>?rel=0" allowfullscreen></iframe>
                    </div>



                </div>
                <div class="col-12 col-lg-4 px-5">
                    <? echo force_content($args['post_id']) ?>
                </div>
            </div>
        </div>
    </div>
<?
}

add_shortcode('pcvideo', 'pcvideo');

function pcvideo($atts)
{
    $default = array(
        'id_video' => ''
    );
    $args = shortcode_atts($default, $atts);

?>
    <div class="pcvideo mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-danger">

                    <div class="pcvideo-container back-img p-4" style="
                    background-image: url('<? echo getImg('pc-black.png') ?>');   
                    background-repeat: no-repeat;
                    background-size: auto 100%;
                    background-position: center center;
                    ">

                        <div class="inner-pcvideo p-5" style="position:relative; top: -30px">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<? echo $args['id_video'] ?>?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
<?
}
