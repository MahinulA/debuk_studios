<!DOCTYPE html>
<html lang="en-US">

<head>

    <!-- REUSEABLE HEADER INFO -->
    <?php
    // Specify the current page to update info in header
    $current_page_head = "Studio";
    $location_to_logo_icon = "./source/media/web_title_icon.png";
    include "./source/_modules/head_info.php";
    ?>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="./source/css/studio.css">

    <!-- fonts  -->
    <link rel="stylesheet" href="./source/css/fonts.css">

    <!-- navigation bar -->
    <!-- <link rel="stylesheet" href="./source/css/navigation_bar.css"> -->

    <!-- UNIVERSAL CSS -->
    <link rel="stylesheet" href="./source/css/Universal_CSS.css">

    <!-- footer -->
    <link rel="stylesheet" href="./source/css/footer.css">

    <!-- project page component css -->
    <link rel="stylesheet" href="./source/css/project_page_component.css">
</head>

<body>


    <?php
    $page_main_heading= 'Debuk Studio Rebrand';
    $page_sub_heading_one="Brand Identity";
    $page_sub_heading_two="Web Design";
    $page_main_para="Design studio created for startup companies. Developing brand strategies and designing brand identities for web2 and web3 brands.";
    $characteristics_one_heading = "Goal";
    $characteristics_one_paragraph = "Providing a better experience for visitors and clients. Creat a brand
    identity that clients are going to trust. Fixing UX and UI for the easily navigate thru pages
    and more accessible design";
    $characteristics_two_heading = "Opportunity";
    $characteristics_two_paragraph = "By changing the brand tone of voice, brand identity, and providing better service, the design studio can become a premium brand";
    $source_to_image_1 = "./source/media/studio/image1.webp";
    $source_to_image_2 = "./source/media/studio/image2.webp";
    $source_to_video_file = "./source/media/studio/video-desktop.webm";

    include "./source/_modules/project_modules/project_page_component.php";
    ?>
    <div class="full-width-image bound">
        <img class="characteristics-image c-image-margin" src="./source/media/studio/image3.webp" alt="" width="100%" height="auto">
    </div>



    <!-- INCLUDE FOOTER -->
    <?php

    $footer_heading_text = "Have a brand to build?";
    $footer_main_btn_text = "Say hello →";
    include "./source/_modules/footer.php";
    ?>


</body>


</html>