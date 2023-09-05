<?php

$seo_keywords = 'alexlostorto, Alex, Alex lo Storto, Alex Lo Storto, Photography Portfolio, portfolio, portfolio website, Portfolio Website, Photography, photographer, programmer, coder, web developer, open source, galactic, space, chat, galactic-chat';
$seo_description = 'Chat between galaxies ฅ^•ﻌ•^ฅ';
$seo_author = 'Alex lo Storto';
$site_title = 'Galactic Chat';

$title = 'Galactic Chat';
$username = 'ฅ^•ﻌ•^ฅ';

include('components/header.php');

?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Itim&family=Inter&family=Jost&display=swap');

    html,
    body {
        height: 100%;
        overflow: hidden;
    }

    * {
        font-family: 'Itim', cursive;
    }

    h1 {
        font-family: 'Jost', sans-serif;
        font-size: 3rem;
    }

    h5 {
        font-family: 'Inter', sans-serif;
    }

    @media (max-width: 576px) {
        .no-pad {
            padding: 0 !important;
        }

        .small-pad {
            padding: 1rem !important;
        }
    }
</style>

<!-- Star background animation: https://codepen.io/MestreALMO/pen/LYEwBQN -->
<?php include('components/stars.php'); ?>

<div style="height: 100%; overflow: auto; z-index: 2; background: transparent;" class="d-flex align-items-center justify-content-center container-fluid stars">
    <div class="small-pad">
        <div class="chat-container d-flex flex-column justify-content-center align-items-center pb-3 no-pad">
            <h1 class="text-center text-white pb-1 small-pad"><?= $title; ?></h1>
            <h5 class="text-center text-white pb-4 small-pad"><?= $username; ?></h5>
            
            <?php include('components/messages.php'); ?>
            <?php include('components/submit-area.php'); ?>

        </div>
    </div>
</div>

<?php include('components/footer.php'); ?>