<!DOCTYPE html>
<html>
<?
$title = 'INVITE PLAYER';
include('blocks/head.php');
?>
<body>
<div class="content-bg js-content-bg"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>

    <main class="white-screen invite-page">
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
                <div class="form-groups-inline clearfix">
                    <div class="form-group create-team-page__field-title">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title"/>
                    </div>
                    <div class="form-group create-team-page__field-first-name">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name"/>
                    </div>
                    <div class="form-group create-team-page__field-last-name">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email"/>
                </div>
                <a href="/success_invite.php" type="submit" class="button button-pink invite-page__invite">
                    INVITE PLAYER
                    <span class="sprite icon icon-check-white"></span>
                </a>
            </form>
            <a href="#" class="button button-blue invite-page__facebook">
                INVITE VIA FACEBOOK
                <span class="sprite icon icon-facebook"></span>
            </a>

            <div class="go-back">
                <a href="/success_create.php"><span class="sprite icon icon-back"></span>Tap here to go back</a>
            </div>
        </section>
    </main>
</div>
</body>
</html>