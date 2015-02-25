<!DOCTYPE html>
<html>
<?
$title = 'LOGIN';
include('blocks/head.php');
?>
<body>
<div class="content-bg js-content-bg"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>

    <main class="white-screen login-page">
        <div class="ribbon">
            <div class="ribbon__content"><? echo $title; ?></div>
        </div>
        <section class="white-screen__content">
            <form class="pink-form">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email"/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"/>
                </div>
                <button type="submit" class="button button-black">LOGIN <span class="sprite icon icon-check"></span>
                </button>
            </form>
            <a href="#" class="button button-blue">
                LOGIN VIA FACEBOOK
                <span class="sprite icon icon-facebook"></span>
            </a>

            <div class="forgot-password">
                <a href="#">Forgot your password?</a>
            </div>
            <div class="go-back">
                <a href="/"><span class="sprite icon icon-back"></span>Tap here to go back</a>
            </div>
        </section>
    </main>
</div>
</body>
</html>