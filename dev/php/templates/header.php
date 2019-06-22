<header class="main-header">
    <div class="wrapper">
        <button class="menu-trigger" data-menu-trigger>
            <span></span>
            <span></span>
            <span></span>
        </button>

        <h1 class="isologo">
            <a title="home" href="/">
                <span style="display:none">Centro Cinofilo Smiling Dog - Bologna</span>
                <picture>
                    <img alt="Smiling Dog - Bologna" height="617" width="768" src="/img/smiling-dog_isologo.png">
                </picture>
            </a>
        </h1>
    </div>
</header>

<?php $selectedClass = ' class="selected"'; ?>

<nav class="menu" data-menu-wrapper>
    <div class="wrapper">
        <ul class="flatten">
            <li <?php if ($_GET['page'] == 'home') { echo $selectedClass; }?>>
                <a title="home" href="/">Home</a>
            </li>
            <li <?php if ($_GET['page'] == 'chi-siamo') { echo $selectedClass; }?>>
                <a title="chi siamo" href="/chi-siamo.php">Chi Siamo</a>
            </li>
            <li <?php if ($_GET['page'] == 'corsi') { echo $selectedClass; }?>>
                <a title="corsi" href="/corsi.php">Corsi</a>
            </li>
            <li <?php if ($_GET['page'] == 'eventi') { echo $selectedClass; }?>>
                <a title="eventi" href="/eventi.php">Eventi</a>
            </li>
            <li <?php if ($_GET['page'] == 'foto') { echo $selectedClass; }?>>
                <a title="foto" href="/foto.php">Foto</a>
            </li>
            <li <?php if ($_GET['page'] == 'contatti') { echo $selectedClass; }?>>
                <a title="Dove Siamo - Contatti" href="/contatti.php">Dove Siamo / Contatti</a>
            </li>
        </ul>
    </div>
</nav>
