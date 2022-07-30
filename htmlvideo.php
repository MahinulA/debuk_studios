<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <video autoplay muted playsinline>
        <source src="./source/media/home/video-tablet.mp4">
    </video>
    <iframe src="./source/media/home/video-tablet.mp4" frameborder="0"></iframe>
    <script>
        window.addEventListener("load", ()=>{
            let video = document.querySelector("video");
            video.play();
        });
    </script>
</body>
</html>