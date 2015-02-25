<!DOCTYPE html>
<html>
<?
$title = 'SUCCESS';
include('blocks/head.php');
?>
<body>
<div class="content-bg js-content-bg"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>

    <main class="white-screen success-page">
        <div class="ribbon">
            <div class="ribbon__content"><? echo $title; ?></div>
        </div>
        <section class="white-screen__content">
            <div class="success-page__well-done">
                <span class="sprite icon icon-success"></span>

                <h1>Well done!</h1>
                <h4>YOU ARE NOW THE OWNER OF</h4>
            </div>
            <div class="ribbon big-ribbon">
                <figure class="user-avatar clearfix">
                    <span>
                        <img src="images/avatars/coach.jpg" width="108" height="108" alt="Team photo">
                    </span>
                    <figcaption>
                        <h2>The Mad Batters</h2>

                        <h3>PRO-ACTIVE GAMES</h3>
                    </figcaption>
                </figure>
            </div>
            <a href="/invite.php" class="button button-pink success-page__invite">
                INVITE PLAYERS
                <span class="sprite icon icon-players"></span>
            </a>
            <a href="#" class="button button-black success-page__team-management">
                GO TO TEAM MANAGEMENT
                <span class="sprite icon icon-go"></span>
            </a>
        </section>
    </main>
</div>
</body>
</html>