<!DOCTYPE html>
<html>
<?
$title = 'dressing room';
include('blocks/head.php');
?>
<body>
<div class="content-bg bg-dressing-room js-content-bg"></div>
<div class="content js-content">
    <? include('blocks/dressing_room_header.php'); ?>

    <main class="home-page">
        <div class="dressing-room-content">
            <section class="donations-level">
                <div class="donations-level__content">
                    <h5>YOUR DONATIONS</h5>

                    <div class="donations-level__progress">
                        <div class="donations-level__progress__filler" style="width: 109px;">
                            <div class="donations-level__progress__filler__color"></div>
                            <div class="donations-level__progress__filler__point"></div>
                            <div class="donations-level__progress__filler__amount">$17</div>
                        </div>
                    </div>
                    <div class="donations-level__start">$0</div>
                </div>
            </section>
            <ul class="play-levels">
                <li class="clearfix play-levels__batting">
                    <div class="play-levels__icon">
                        <span class="sprite icon icon-big-batting"></span>
                    </div>
                    <div class="play-levels__points">
                        <h3>PLAY BATTING</h3>

                        <div class="play-levels__points__rating clearfix">
                            <ul class="clearfix">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <span class="sprite icon icon-attention"></span>
                        </div>
                    </div>
                    <a href="#" class="play-levels__continue">
                        <span class="sprite icon icon-white-next"></span>
                        <em>
                            STUMP UP<br/>
                            TO PLAY<br/>
                            AGAIN
                        </em>
                    </a>
                </li>
                <li class="clearfix play-levels__bowling">
                    <div class="play-levels__icon">
                        <span class="sprite icon icon-big-bowling"></span>
                    </div>
                    <div class="play-levels__points">
                        <h3>PLAY BOWLING</h3>

                        <div class="play-levels__points__rating clearfix">
                            <ul class="clearfix">
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="play-levels__continue">
                        <span class="sprite icon icon-white-next"></span>
                    </a>
                </li>
                <li class="clearfix play-levels__fielding">
                    <div class="play-levels__icon">
                        <span class="sprite icon icon-big-fielding"></span>
                    </div>
                    <div class="play-levels__points">
                        <h3>PLAY FIELDING</h3>

                        <div class="play-levels__points__rating clearfix">
                            <ul class="clearfix">
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="play-levels__continue">
                        <span class="sprite icon icon-white-next"></span>
                    </a>
                </li>
            </ul>
            <section class="home-page__buttons">
                <a class="button button-pink" href="#">TEAM OVERVIEW <span class="sprite icon icon-list"></span></a>
                <a class="button button-white" href="#">VIEW MESSAGES
            <span class="sprite icon icon-middle-message">
                <span class="">5</span>
            </span>
                </a>
            </section>
        </div>
    </main>
</div>
<? include('blocks/footer.php'); ?>
</body>
</html>