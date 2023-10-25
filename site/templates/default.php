<?= snippet('header', ['page' => $page]) ?>

<main class="main">
    <div class="column">
        <?php if ($image = $page->cover()->toFile()) : ?>
            <img src="<?= $image->crop(600, 600, 144)->url() ?>" alt="<?= $image->alt() ?>">
        <?php endif ?>
    </div>
    <div class="column">
        <?= $page->blocks()->toBlocks() ?>
    </div>

    <div class="audio-component">
        <div class="audio-player">
            <div class="audio-title">
                Lorem ipsum
            </div>
            <div class="play-btn icon-wrapper">
                <svg class="play-icon" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 25C19.6274 25 25 19.6274 25 13C25 6.37258 19.6274 1 13 1C6.37258 1 1 6.37258 1 13C1 19.6274 6.37258 25 13 25Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17 13L11 9V17L17 13Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <svg class="pause-icon" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 9V17M16 9V17M25 13C25 19.6274 19.6274 25 13 25C6.37258 25 1 19.6274 1 13C1 6.37258 6.37258 1 13 1C19.6274 1 25 6.37258 25 13Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="audio-time">
                <span class="audio-progress">0:00</span>
            </div>
            <input type="range" class="seek-slider" max="100" value="0">
            <div class="audio-volume icon-wrapper">
                <svg class="volume-icon" viewBox="0 0 29 28" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 10V18M28 8V20M8 19H1V9H8L17 2V26L8 19Z" />
                </svg>
                <svg class="mute-icon" viewBox="0 0 29 28" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M28 11L22 17M28 17L22 11M8 19H1V9H8L17 2V26L8 19Z" />
                </svg>
            </div>
        </div>
        <!-- <audio src="<?= $page->audio()->url() ?>" preload="metadata"></audio> -->
    </div>
</main>

<?= snippet('footer') ?>