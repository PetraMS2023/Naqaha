<?php session_start(); ?>

<div class="log-lang">
    <?php if (isset($_SESSION['user_name'])): ?>
        <div class="login">
            <img src="./media/icons/login.svg" alt="">
            <span>
                Welcome, <?php echo $_SESSION['user_name']; ?> |
                <a href="backend/logout.php">Logout</a>
            </span>
        </div>
    <?php else: ?>
        <div class="login">
            <img src="./media/icons/login.svg" alt="">
            <span>
                <a href="./pages-en/create-account.php">Sign up</a>
                <span>/</span>
                <a href="./pages-en/registration.php">Sign in</a>
            </span>
        </div>
    <?php endif; ?>
    <div class="mLinks">
        <div class="drop">
            <a href="##">
                <img class="lang" src="./media/icons/world-lang.svg" alt="" />EN
                <img class="drop-icon" src="./media/icons/lang-arrow.svg" alt="" />
            </a>
            <span class="dropMenu">
                <a class="dropbottom" href="./index-ar.php">
                    <img class="lang" src="./media/icons/white-lang.svg" alt="" /> AR
                </a>
            </span>
        </div>
    </div>
</div>
