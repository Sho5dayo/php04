<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopPage</title>
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <h1>
        <span class=maintitle>Score Manager</span>
    </h1>

    <div class="overlay-navigation">
        <nav role="navigation">
            <ul>
                <li><a href="index.php" >Home</a></li>
                <li><a href="mypage.php" >MyPage</a></li>
                <li><a href="schedule.php" >Schedule</a></li>
                <li><a href="score.php" >Score</a></li>
                <li><a href="data.php" >Data</a></li>
            </ul>
        </nav>
    </div>

    <section class="home">
        <a href="" target="_blank"></a>
        <div class="open-overlay">
            <span class="bar-top"></span>
            <span class="bar-middle"></span>
            <span class="bar-bottom"></span>
        </div>
    </section>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('.open-overlay').click(function() {
            var overlay_navigation = $('.overlay-navigation'),
                nav_item_1 = $('nav li:nth-of-type(1)'),
                nav_item_2 = $('nav li:nth-of-type(2)'),
                nav_item_3 = $('nav li:nth-of-type(3)'),
                nav_item_4 = $('nav li:nth-of-type(4)'),
                nav_item_5 = $('nav li:nth-of-type(5)'),
                top_bar = $('.bar-top'),
                middle_bar = $('.bar-middle'),
                bottom_bar = $('.bar-bottom');

            overlay_navigation.toggleClass('overlay-active');
            if (overlay_navigation.hasClass('overlay-active')) {

                top_bar.removeClass('animate-out-top-bar').addClass('animate-top-bar');
                middle_bar.removeClass('animate-out-middle-bar').addClass('animate-middle-bar');
                bottom_bar.removeClass('animate-out-bottom-bar').addClass('animate-bottom-bar');
                overlay_navigation.removeClass('overlay-slide-up').addClass('overlay-slide-down')
                nav_item_1.removeClass('slide-in-nav-item-reverse').addClass('slide-in-nav-item');
                nav_item_2.removeClass('slide-in-nav-item-delay-1-reverse').addClass('slide-in-nav-item-delay-1');
                nav_item_3.removeClass('slide-in-nav-item-delay-2-reverse').addClass('slide-in-nav-item-delay-2');
                nav_item_4.removeClass('slide-in-nav-item-delay-3-reverse').addClass('slide-in-nav-item-delay-3');
                nav_item_5.removeClass('slide-in-nav-item-delay-4-reverse').addClass('slide-in-nav-item-delay-4');
            } else {
                top_bar.removeClass('animate-top-bar').addClass('animate-out-top-bar');
                middle_bar.removeClass('animate-middle-bar').addClass('animate-out-middle-bar');
                bottom_bar.removeClass('animate-bottom-bar').addClass('animate-out-bottom-bar');
                overlay_navigation.removeClass('overlay-slide-down').addClass('overlay-slide-up')
                nav_item_1.removeClass('slide-in-nav-item').addClass('slide-in-nav-item-reverse');
                nav_item_2.removeClass('slide-in-nav-item-delay-1').addClass('slide-in-nav-item-delay-1-reverse');
                nav_item_3.removeClass('slide-in-nav-item-delay-2').addClass('slide-in-nav-item-delay-2-reverse');
                nav_item_4.removeClass('slide-in-nav-item-delay-3').addClass('slide-in-nav-item-delay-3-reverse');
                nav_item_5.removeClass('slide-in-nav-item-delay-4').addClass('slide-in-nav-item-delay-4-reverse');
            }
        })
    </script>


</body>

</html>