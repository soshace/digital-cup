<!DOCTYPE html>
<html>
<?
$title = 'SCOREBOARD';
include('blocks/head.php');
?>
<body>
<div class="content-bg bg-dressing-room js-content-bg"></div>
<div class="content js-content">
    <header class="dressing-room-header">
        <div class="ribbon">
            <div class="ribbon__content">
            <span class="dressing-room-header__avatar">
                <img src="images/avatars/coach.jpg" width="170" height="170" alt="Team photo">
            </span>
                <? echo $title; ?>
            </div>
            <h1>The Mad Batters</h1>

            <h3>SCOREBOARD</h3>
            <span class="dressing-room-header__amount">32</span>
        </div>
    </header>

    <main class="scoreboard-page">
        <div class="dressing-room-content">
            <ul class="scoreboard-switcher clearfix">
                <li>
                    <span>LEADING TEAM</span>
                </li>
                <li>
                    <a href="#">LEADING PLAYER</a>
                </li>
            </ul>
            <ul class="players-list players-list-underline">
                <li class="players-list__item clearfix">
                    <div class="players-list__item__number">
                        <span>1</span>
                    </div>
                    <div class="players-list__item__avatar">
                    <span class="avatar-mini">
                        <img src="images/avatars/coach.jpg" width="59" height="59" alt="User's avatar">
                    </span>
                    </div>
                    <div class="players-list__item__title">
                        Team Welly
                    </div>
                    <div class="players-list__item__score">
                        45678
                    </div>
                </li>
                <li class="players-list__item clearfix">
                    <div class="players-list__item__number">
                        <span>2</span>
                    </div>
                    <div class="players-list__item__avatar">
                    <span class="avatar-mini">
                        <img src="images/avatars/coach.jpg" width="59" height="59" alt="User's avatar">
                    </span>
                    </div>
                    <div class="players-list__item__title">
                        Reno Rekters
                    </div>
                    <div class="players-list__item__score">
                        999
                    </div>
                </li>
                <li class="players-list__item clearfix">
                    <div class="players-list__item__number">
                        <span>3</span>
                    </div>
                    <div class="players-list__item__avatar">
                    <span class="avatar-mini">
                        <img src="images/avatars/coach.jpg" width="59" height="59" alt="User's avatar">
                    </span>
                    </div>
                    <div class="players-list__item__title">
                        Team Warney
                    </div>
                    <div class="players-list__item__score">
                        50
                    </div>
                </li>
            </ul>
            <ul class="players-list">
                <li class="players-list__item clearfix">
                    <div class="players-list__item__number">
                        <span>32</span>
                    </div>
                    <div class="players-list__item__avatar">
                    <span class="avatar-mini">
                        <img src="images/avatars/coach.jpg" width="59" height="59" alt="User's avatar">
                    </span>
                    </div>
                    <div class="players-list__item__title">
                        The Mad Batters
                    </div>
                    <div class="players-list__item__score">
                        8
                    </div>
                </li>
                <li class="players-list__item clearfix">
                    <div class="players-list__item__number">
                        <span>1</span>
                    </div>
                    <div class="players-list__item__avatar">
                    <span class="avatar-mini">
                        <img src="images/avatars/coach.jpg" width="59" height="59" alt="User's avatar">
                    </span>
                    </div>
                    <div class="players-list__item__title">
                        Team Welly
                    </div>
                    <div class="players-list__item__score">
                        45678
                    </div>
                </li>
                <li class="players-list__item clearfix">
                    <div class="players-list__item__number">
                        <span>1</span>
                    </div>
                    <div class="players-list__item__avatar">
                    <span class="avatar-mini">
                        <img src="images/avatars/coach.jpg" width="59" height="59" alt="User's avatar">
                    </span>
                    </div>
                    <div class="players-list__item__title">
                        Team Welly
                    </div>
                    <div class="players-list__item__score">
                        45678
                    </div>
                </li>
            </ul>
            <div class="go-back">
                <a href="/join_team.php"><span class="sprite icon icon-back"></span>Tap here to go back</a>
            </div>
        </div>
    </main>

</div>
<? include('blocks/footer.php'); ?>
</body>
</html>