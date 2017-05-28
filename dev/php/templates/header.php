<header class="main-header">
    <button class="menu-trigger" data-menu-trigger>
        <span></span>
        <span></span>
        <span></span>
    </button>

    <h1 class="isologo">
        <a href="/">
            <picture>
                <img alt="Smiling Dog - Bologna" height="617" width="768" src="/img/smiling-dog_isologo.png">
            </picture>
        </a>
    </h1>
</header>

<?php
$selectedClass = ' class="selected"';
?>
<nav class="menu" data-menu-wrapper>
    <ul class="flatten">
        <li <?php if ($_GET['page'] == 'home') { echo $selectedClass; }?>>
            <a href="/">Home</a>
        </li>
        <li <?php if ($_GET['page'] == 'chi-siamo') { echo $selectedClass; }?>>
            <a href="/chi-siamo.php">Chi Siamo</a>
        </li>
        <li <?php if ($_GET['page'] == 'corsi') { echo $selectedClass; }?>>
            <a href="/corsi.php">Corsi</a>
        </li>
        <li<?php if ($_GET['page'] == 'contatti') { echo $selectedClass; }?>>
            <a href="/contatti.php">Dove Siamo / Contatti</a>
        </li>
    </ul>
</nav>
