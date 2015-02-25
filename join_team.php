<!DOCTYPE html>
<html>
<?
$title = 'JOIN A TEAM';
include('blocks/head.php');
?>
<body>
<div class="content-bg js-content-bg"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>

    <main class="white-screen join-team-page">
        <div class="ribbon">
            <div class="ribbon__content"><? echo $title; ?></div>
        </div>
        <section class="white-screen__content">
            <form class="pink-form">
                <div class="form-group">
                    <label for="code">Enter invitation code</label>
                    <input type="text" name="code" id="code"/>
                </div>
                <div class="form-group">
                    <label for="email">Search by email</label>
                    <input type="email" name="email" id="email"/>
                </div>
                <button type="submit" class="button button-black join-team-page__search">SEARCH<span
                        class="sprite icon icon-magnifier"></span>
                </button>
            </form>
            <div class="join-team-page__or">
                or
            </div>
            <a href="/suggested_teams.php" class="button button-pink join-team-page__suggest">SUGGEST A TEAM <span
                    class="sprite icon icon-players"></span></a>

            <div class="go-back join-team-page__go-back">
                <a href="/search_results.php"><span class="sprite icon icon-back"></span>Tap here to go back</a>
            </div>
        </section>
    </main>
</div>
</body>
</html>