<!DOCTYPE html>
<html>
<?
$title = 'YOUR PROFILE';
include('blocks/head.php');
?>
<body>
<div class="content-bg js-content-bg"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>

    <main class="white-screen profile-page">
        <div class="ribbon">
            <div class="ribbon__content"><? echo $title; ?></div>
        </div>
        <section class="white-screen__content">
            <figure class="user-avatar">
                    <span>
                        <img src="images/avatars/coach.jpg" width="170" height="170" alt="Team photo">
                    </span>
                <figcaption>
                    <h2>Andrew Welstead</h2>

                    <h3>TEAM WELLY</h3>
                </figcaption>
            </figure>
            <a href="#" class="button button-black profile-page__dressing-room">
                BACK TO DRESSING ROOM
                <span class="sprite icon icon-go"></span>
            </a>
        </section>
    </main>

</div>
<? include('blocks/footer.php'); ?>
</body>
</html>