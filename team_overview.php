<!DOCTYPE html>
<html>
<?
$title = 'TEAM OVERVIEW';
include('blocks/head.php');
?>
<body>
<div class="content-bg bg-dressing-room js-content-bg"></div>
<div class="content js-content">
    <? include('blocks/dressing_room_header.php'); ?>

    <main class="overview-page">
        <div class="dressing-room-content">
            <section class="donations-level">
                <div class="donations-level__content">
                    <h5>TEAM DONATIONS</h5>

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
            <section class="overview-page__content">
                <ul>
                    <li>
                        <div class="profile-mini-signs clearfix">
                            <div class="profile-mini-signs__avatar">
                        <span class="avatar-mini">
                            <img src="images/avatars/coach.jpg" width="59" height="59" alt="User's avatar">
                        </span>
                            </div>
                            <div class="profile-mini-signs__sign">
                                <span class="sprite icon icon-mini-batting"></span>
                            </div>
                            <div class="profile-mini-signs__title">
                                <h2>Andrew Welstead</h2>

                                <h3>Last logged in:
                                    <span>21 Jan</span>
                                </h3>
                            </div>
                            <div class="profile-mini-signs__bonus">200</div>
                        </div>
                    </li>
                    <li>
                        <div class="profile-mini-signs clearfix">
                            <div class="profile-mini-signs__avatar">
                        <span class="avatar-mini">
                            <img src="images/avatars/coach.jpg" width="59" height="59" alt="User's avatar">
                        </span>
                            </div>
                            <div class="profile-mini-signs__sign">
                                <span class="sprite icon icon-mini-bowling"></span>
                            </div>
                            <div class="profile-mini-signs__title">
                                <h2>John La Motta</h2>

                                <h3>Last logged in:
                                    <span>Today</span>
                                </h3>
                            </div>
                            <div class="profile-mini-signs__bonus">153</div>
                        </div>
                    </li>
                    <li>
                        <div class="profile-mini-signs clearfix">
                            <div class="profile-mini-signs__avatar">
                        <span class="avatar-mini">
                            <img src="images/avatars/coach.jpg" width="59" height="59" alt="User's avatar">
                        </span>
                            </div>
                            <div class="profile-mini-signs__sign">
                                <span class="sprite icon icon-mini-fielding"></span>
                            </div>
                            <div class="profile-mini-signs__title">
                                <h2>Shane Warne</h2>

                                <h3>Last logged in:
                                    <span>Yesterday</span>
                                </h3>
                            </div>
                            <div class="profile-mini-signs__bonus">8</div>
                        </div>
                    </li>
                </ul>
            </section>
            <div class="go-back">
                <a href="/create_profile.php"><span class="sprite icon icon-back"></span>Tap here to go back</a>
            </div>
        </div>
    </main>

</div>
<? include('blocks/footer.php'); ?>
</body>
</html>