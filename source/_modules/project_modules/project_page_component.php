<header>


    <!-- REUSEABLE NAVIGATION BAR -->
    <?php
    // SETTING UP REUSEABLE NAVIGATION BAR AND ITS PATH
    $nav_first_link_text = "Services";
    $nav_first_link_path = "./services.php";

    $nav_second_link_text = "Project";
    $nav_second_link_path = "./project_page.php";

    $nav_third_link_text = "Contact";
    $nav_third_link_path = "./contact.php";

    $nav_bar_logolink =  "./source/media/logoicon-white.png";

    $path_to_themeChange_btn = "./source/media/ThemeChange_btn.png";
    $path_to_cross_btn = "./source/media/cross-btn.png";

    $path_to_hamburger_icon = "./source/media/Hamburger-white.png";

    include "./source/_modules/navigation_bar.php";
    ?>

    <script>
        //just change the source through javascipt
        let hamberger_icon_image = document.querySelector(".ham-berger-icon-img");
        let website_logo_icon = document.querySelector(".website-logo-icon");
        let windowSize = window.screen.width;
        if (windowSize < 834) {
            // hamberger_icon_image.src = "./source/media/Hamburger.png";
            website_logo_icon.src = './source/media/logoicon.png';
        }
    </script>











</header>

<?php
// some values to set for dynamic information
$page_main_heading;
$page_sub_heading_one;
$page_sub_heading_two;
$page_main_para;
// video file source link
$video_poster;
$source_to_video_file;
$source_to_video_file_tablet_version;
$source_to_video_file_mobile_version;

$characteristics_one_heading;
$characteristics_one_paragraph;
$characteristics_two_heading;
$characteristics_two_paragraph;
$source_to_image_1;
$source_to_image_2;
?>

<!-- hero video -->
<div class="hero-video-container">
    <video class="hero-video" preload="auto" poster=<?php echo $video_poster; ?> autoplay muted loop>
        <!-- poster="./source/media/luxio/image3.webp" -->
        <!-- CODE WILL BE INJECTED BY THE SCRIPT BELOW -->


    </video>
    <script>
        // SINCE CHROME DOESN'T SUPPORT THE VIDEO SOURCE MEDIA QUERIES, THIS SCRIPT IS CREATED TO CHANGE VIDEO SOURCEC ACCORDING TO THE VIEW WIDTH
        var video = document.querySelector(".hero-video");
        var WindowWidth = window.screen.width;

        if (WindowWidth < 835 && WindowWidth > 600) {
            //TABLET VERSION VIDEO
            video.innerHTML = `<source src=<?php echo $source_to_video_file_tablet_version; ?> type='video/webm' >`;
        } else if (WindowWidth < 600) {
            //MOBILE VERSION VIDEO
            video.innerHTML = `<source src=<?php echo $source_to_video_file_mobile_version; ?> type='video/webm' >`;
        } else {
            //BIG SCREEN VIDEO
            video.innerHTML = `<source src=<?php echo $source_to_video_file; ?> type='video/webm' >`;
        }
    </script>
</div>




<!-- banner section -->
<section class="banner-section bound">
    <!-- HERO CONTENT -->
    <h1 class="big-heading banner-heading"><?php echo $page_main_heading; ?></h1>
    <h2 class="banner-sub-heading"><?php echo $page_sub_heading_one; ?></h2>
    <h2 class="banner-sub-heading"><?php echo $page_sub_heading_two; ?></h2>
    <p class="paragraph-text banner-para"><?php echo $page_main_para; ?></p>
</section>


<section class="characteristics-section bound">
    <div class="display-flex d-flex-space-between characteristics-flex-container">
        <div class="flex-item-characteristics">

            <h2 class="normal-heading characteristics-flex-heading"><?php echo $characteristics_one_heading; ?></h2>
            <p class="paragraph-text characteristics-flex-paragraph"><?php echo $characteristics_one_paragraph; ?></p>
        </div>

        <div class="flex-item-characteristics">
            <h2 class="normal-heading characteristics-flex-heading"><?php echo $characteristics_two_heading; ?></h2>
            <p class="paragraph-text characteristics-flex-paragraph"><?php echo $characteristics_two_paragraph; ?></p>
        </div>
    </div>

    <div class="display-flex d-flex-space-between characteristics-flex-container">
        <div class="flex-item-characteristics">
            <img class="characteristics-image" src=<?php echo $source_to_image_1; ?> alt="" height="auto" width="100%">
        </div>

        <div class="flex-item-characteristics">
            <img class="characteristics-image" src=<?php echo $source_to_image_2; ?> alt="" height="auto" width="100%">
        </div>
    </div>



</section>



