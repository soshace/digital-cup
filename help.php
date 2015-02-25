<!DOCTYPE html>
<html>
<?
$title = 'HELP';
include('blocks/head.php');
?>
<body>
<div class="content-bg js-content-bg"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>

    <main class="white-screen help-page">
        <div class="ribbon">
            <div class="ribbon__content"><? echo $title; ?></div>
        </div>
        <section class="white-screen__content">
            <a href="/suggested_teams.php" class="button button-pink">OVERVIEW <span
                    class="sprite icon icon-players"></span></a>
            <a href="/suggested_teams.php" class="button button-pink">HOW TO BAT <span
                    class="sprite icon icon-bat"></span></a>
            <a href="/suggested_teams.php" class="button button-pink">HOW TO BOWL <span
                    class="sprite icon icon-bowl"></span></a>
            <a href="/suggested_teams.php" class="button button-pink">HOW TO FIELD <span
                    class="sprite icon icon-field"></span></a>
            <a href="/suggested_teams.php" class="button button-pink">SCORING <span
                    class="sprite icon icon-scoring"></span></a>
            <a href="/suggested_teams.php" class="button button-pink help-page__prizes">PRIZES <span
                    class="sprite icon icon-prizes"></span></a>
            <a href="/suggested_teams.php" class="button button-pink help-page__faq">FAQ <span
                    class="sprite icon icon-question"></span></a>
            <a href="/suggested_teams.php" class="button button-black">BACK TO DRESSING ROOM <span
                    class="sprite icon icon-go"></span></a>
        </section>
    </main>
</div>
<? include('blocks/footer.php'); ?>
</body>
</html>