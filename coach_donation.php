<!DOCTYPE html>
<html>
<?
$title = 'DONATE';
include('blocks/head.php');
?>
<body>
<div class="content-bg js-content-bg"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>

    <main class="white-screen donation-page">
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
            <form class="pink-form">
                <div class="form-group">
                    <label for="donation">Coach donation <strong>(minimum donation $10.00)</strong></label>
                    <input type="text" name="donation" id="donation" value="$50.00"/>
                </div>
                <a href="/success_create.php" class="button button-pink donation-page__donate">
                    DONATE AND CREATE TEAM
                    <span class="sprite icon icon-check-white"></span>
                </a>
            </form>
            <div class="go-back donation-page__donate">
                <a href="/create_team.php"><span class="sprite icon icon-back"></span>Tap here to go back</a>
            </div>
        </section>
    </main>
</div>
</body>
</html>