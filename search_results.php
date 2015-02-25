<!DOCTYPE html>
<html>
<?
$title = 'SEARCH RESULTS';
include('blocks/head.php');
?>
<body>
<div class="content-bg js-content-bg"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>

    <main class="white-screen search-results-page">
        <div class="ribbon">
            <div class="ribbon__content"><? echo $title; ?></div>
        </div>
        <section class="white-screen__content">
            <figure class="user-avatar clearfix">
                    <span>
                        <img src="images/avatars/coach.jpg" width="108" height="108" alt="Team photo">
                    </span>
                <figcaption>
                    <h2>The Mad Batters</h2>

                    <h3>PRO-ACTIVE GAMES</h3>
                </figcaption>
            </figure>
            <a href="/success_create.php" class="button button-pink donation-page__donate">
                MAKE A DONATION TO JOIN
                <span class="sprite icon icon-check-white"></span>
            </a>
            <figure class="user-avatar clearfix">
                    <span>
                        <img src="images/avatars/coach.jpg" width="108" height="108" alt="Team photo">
                    </span>
                <figcaption>
                    <h2>Team Welly</h2>

                    <h3>FLIP CREATIVE</h3>
                </figcaption>
            </figure>
            <a href="/success_create.php" class="button button-pink donation-page__donate">
                MAKE A DONATION TO JOIN
                <span class="sprite icon icon-check-white"></span>
            </a>

            <a href="/suggested_teams.php" type="submit" class="button button-black search-results-page__again">SEARCH AGAIN<span
                    class="sprite icon icon-magnifier"></span>
            </a>

            <div class="go-back">
                <a href="/join_team.php"><span class="sprite icon icon-back"></span>Tap here to go back</a>
            </div>
        </section>
    </main>
</div>
</body>
</html>