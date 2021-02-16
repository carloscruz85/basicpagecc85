<?
function packageBanner($id)
{
?>
    <div class="package-banner back-img-top text-white py-5" style="background-image: url('<? echo get_image_g($id) ?>')">
        <div class="container py-5">
            <div class="row text-uppercase my-huge-text no-glutters">
                <div class="col-12 col-md-6 font-weight-bold md-right-xs-center p-0">
                    <? $title = explode(' ', get_the_title($id));
                    echo $title[0] ?>
                </div>
                <div class="col-12 col-md-6 md-left-xs-center p-0">
                    <? echo $title[1] ?>
                </div>
            </div>
        </div>
    </div>
<?php
}

function darkBanner($id)
{
?>
    <div class="dark-banner bg-dark text-white p-5">
        <div class="container">
            <div class="row text-uppercase my-medium-text no-glutters">
                <div class="col-12 col-md-6 font-weight-bold md-right-xs-center">
                    <? $title = explode(' ', get_the_title($id));
                    echo $title[0] ?>
                </div>
                <div class="col-12 col-md-6 md-left-xs-center p-0">
                    <? echo $title[1] ?>
                </div>
            </div>
            <div class="row pt-3 justify-content-center">
                <div class="col-12 col-lg-8  text-justify text-lg-center small  ">
                    <? echo force_content($id) ?>
                    <? echo edit($id) ?>

                </div>
            </div>
        </div>
    </div>
<?
}

function threeGridImages($ids)
{
?>
    <div class="three-grid-images bg-dark">
        <div class="container-fluid">
            <div class="row">
                <?
                foreach ($ids as $key => $id) {
                ?>
                    <div class="card-three-grid-images d-none d-lg-block col-12 mb-0 col-lg-4 text-center back-img-bottom text-white" style="background-image: url('<? echo get_image_g($id) ?>')">
                        <div class="row py-5 h-100 ">
                            <div class="col-12  text-uppercase font-weight-bold pt-5 my-medium-text mt-5">
                                <? echo get_the_title($id) ?>
                                <? echo edit($id) ?>
                            </div>
                            <div class="col-12 pt-4 pb-5 content small">
                                <div class="px-5">
                                    <? echo force_content($id) ?>

                                </div>
                            </div>
                            <div class="col-12 px-5 pb-5  mb-5">
                                <div class="link border border-white p-3 text-white w-100 text-center text-uppercase" onclick="window.location.href='<? echo get_permalink(get_page_ID_by_slug(get_post_field('post_name', $id) . '-service')) ?>'"> view this package </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-three-grid-images-phone d-lg-none col-12 mb-0 col-lg-4 text-center back-img-bottom text-white" style="background-image: url('<? echo get_image_g($id) ?>')">
                        <div class="row py-5 py-lg-0 h-100 bg-soft-dark">
                            <div class="col-12  text-uppercase font-weight-bold pt-5 my-medium-text">
                                <? echo get_the_title($id) ?>
                                <? echo edit($id) ?>
                            </div>
                            <div class="col-12 pt-4 pb-5 content small">
                                <div class="px-5">
                                    <? echo force_content($id) ?>

                                </div>
                            </div>
                            <div class="col-12 px-5 pb-5">
                                <div class="link border border-white p-3 text-white w-100 text-center text-uppercase" onclick="window.location.href='<? echo get_permalink(get_page_ID_by_slug(get_post_field('post_name', $id) . '-service')) ?>'"> view this package </div>
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

add_action('wp_footer', 'codes_threeGridImages');

function codes_threeGridImages()
{
?>
    <script>
        (function($) {
            $(document).ready(function() {
                $('.card-three-grid-images').hover(
                    function() {
                        $(this).find('.content, .link').css("opacity", '1');
                        $(this).find('.row').toggleClass('bg-soft-dark')
                    },
                    function() {
                        $(this).find('.content, .link').css("opacity", '0');
                        $(this).find('.row').toggleClass('bg-soft-dark')

                    }
                );
            });
        })(jQuery);
    </script>
<?php
}

function threeGrid($ids)
{
?>
    <div class="three-grid">
        <div class="container">
            <div class="row ">
                <?
                foreach ($ids as $key => $id) {
                ?>
                    <div class="col-12 col-lg-4 py-5">
                        <div class="my-card shadow  text-center  px-0 pb-0 mt-5 mx-3">
                            <div class="inner-my-card d-flex flex-column justify-content-between" style="position: relative; top:-50px">
                                <div class="img-container d-flex flex-row justify-content-center">
                                    <img style=" width: 50%; height: auto; left: 25%;" src="<? echo get_image_g($id) ?>" alt="img">

                                </div>
                                <div class="my-big-medium-text text-danger font-weight-bold text-center text-uppercase my-3">
                                    <? echo get_the_title($id) ?>
                                </div>
                                <div class="three-grid-content px-5 text-left small" style="">
                                    <? echo force_content($id) ?>
                                </div>
                                <div class="three-grid-view px-5 mt-3 ">
                                    <div class="link border border-dark p-1 text-dark w-100 text-center text-uppercase small" onclick="window.location.href='<? echo get_permalink(get_page_ID_by_slug(get_post_field('post_name', $id) . '-package')) ?>'"> view this package
                                    </div>
                                    <? echo edit($id) ?>
                                </div>
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

function normalBannerImg($id)
{
?>
    <div class="normal-banner-img text-white py-5 back-img" style=" background-image: url('<? echo get_image_g($id) ?>'); background-position: top center; ">
        <div class="container my-5">
            <div class="row md-left-xs-center pl-0 pl-lg-5">
                <div class="col-12 col-md-7 ">
                    <div class="my-big-text font-weight-bold text-uppercase mb-3">
                        <? echo get_the_title($id) ?>
                    </div>
                    <div class=" py-0 mb-0">
                        <? echo force_content($id) ?>
                        <? echo edit($id) ?>

                    </div>
                </div>
                <div class="col-6 col-md-4">
                </div>
            </div>
        </div>
    </div>
<?
}

function normalBanner($id)
{
?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="my-medium-text text-danger  pt-5 pb-3 text-center text-uppercase font-weight-bold">
                        <?php echo get_the_title($id) ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pb-3 my-0">
                <div class="col-12 col-md-7 text-center small">
                    <? echo force_content($id) ?>
                    <? echo edit($id) ?>
                </div>
            </div>
        </div>

    </div>
<?php
}

function bigBanner($id)
{
?>
    <div class="big-banner text-white py-5" style=" background-image: url('<? echo get_image_g($id) ?>') ">
        <div class="container ">
            <div class="row mt-5">
                <div class="col-12 my-huge-text text-center mt-5">
                    <div class="row text-uppercase no-glutters mt-3">
                        <?
                        $display = explode(' ', get_the_title($id));
                        ?>
                        <div class="col-12 col-md-6 md-right-xs-center  font-weight-bold te p-0">
                            <? echo $display[0] ?>

                        </div>
                        <div class="col-12 col-md-6 md-left-xs-center  p-0">
                            <? echo $display[1] ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5"></div>
                <div class="col-12 col-md-5 big-banner-description"><? echo force_content($id) ?> <? echo edit($id) ?>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
<?php
}

function ready()
{
?>
    <div class="ready text-white py-5 py-sm-3 text-center back-img">
        <div class="container">
            <div class="row">
                <div class="col-12 my-medium-text font-weight-bold py-sm-2 py-lg-3">
                    READY TO GET STARTED?
                </div>
                <div class=" col-12 py-lg-1">
                    Don't wait! Contact us and let us help you with your design reeds.
                </div>
                <div class="col-12 ">
                    <button type="button" class="btn btn-danger border py-3 px-5 my-3 text-uppercase" onclick="window.location.href='<? echo get_in_touch_url() ?>'"> GET IN TOUCH
                    </button>
                </div>
            </div>
        </div>
    </div>
<?
}

function backToHome()
{
?>
    <div class="back-to-home text-center py-3 py-lg-3">
        <div class="container py-4 py-lg-5">
            <div class="row">

                <div class="col-12 ">
                    <button type="button" class="btn btn-white border border-dark py-3 py-lg-3 px-5 mt-3 text-uppercase" onclick="window.location.href='<? echo get_home_url() ?>'"> Back To Home
                    </button>

                </div>
            </div>
        </div>
    </div>
<?
}

function hugeBannerImg($id)
{
?>
    <div class="huge-banner-img back-img d-flex flex-column justify-content-center " style=" background-image: url('<? echo get_image_g($id) ?>');">
        <div class=" my-big-text text-white text-uppercase">

            <?
            $title = explode(' ', get_the_title($id));

            ?>
            <div class="d-flex d-row justify-content-center">
                <?
                foreach ($title as $key => $value) {
                ?>
                    <div class="<? if ($key == 0) echo 'font-weight-bold' ?>  ">
                        <? echo $value;
                        ?>
                    </div><?
                        }
                            ?>
            </div>

        </div>

    </div>
<?
}

function get_in_touch_url()
{
    return get_home_url();
}
