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
            <div class="audio-player-wrapper">
                <p class="audio-title"></p>
                <div class="audio-time">
                    <span class="audio-progress">0:00</span>
                </div>
            </div>
            <div class="audio-player-wrapper">
                <div class="play-btn">
                    <svg class="play-icon" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 25C19.6274 25 25 19.6274 25 13C25 6.37258 19.6274 1 13 1C6.37258 1 1 6.37258 1 13C1 19.6274 6.37258 25 13 25Z"/>
                        <path d="M17 13L11 9V17L17 13Z"/>
                    </svg>
                    <svg class="pause-icon" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 9V17M16 9V17M25 13C25 19.6274 19.6274 25 13 25C6.37258 25 1 19.6274 1 13C1 6.37258 6.37258 1 13 1C19.6274 1 25 6.37258 25 13Z" />
                    </svg>
                </div>
                <input type="range" class="seek-slider" max="100" value="0">
                <div class="audio-volume">
                    <svg class="volume-icon" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.5 18H2.5C2.23478 18 1.98043 17.8946 1.79289 17.7071C1.60536 17.5196 1.5 17.2652 1.5 17V9C1.5 8.73478 1.60536 8.48043 1.79289 8.29289C1.98043 8.10536 2.23478 8 2.5 8H8.5M8.5 18L17.5 25V1L8.5 8M8.5 18V8M22.5 10.3563C23.1433 11.0867 23.4982 12.0267 23.4982 13C23.4982 13.9734 23.1433 14.9133 22.5 15.6438M26.2085 7C27.6844 8.65007 28.5003 10.7862 28.5003 13C28.5003 15.2138 27.6844 17.3499 26.2085 19" />
                    </svg>
                    <svg class="mute-icon"  viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 2L24.5 24M8.5 8V18M8.5 8L2.5 7.99999C2.23478 7.99999 1.98043 8.10535 1.79289 8.29289C1.60536 8.48042 1.5 8.73478 1.5 8.99999V17C1.5 17.2652 1.60536 17.5196 1.79289 17.7071C1.98043 17.8946 2.23478 18 2.5 18L8.5 18M8.5 8L9.3525 7.33749M8.5 18L17.5 25V16.3M22.5 10.3588C23.1433 11.0892 23.4982 12.0292 23.4982 13.0025C23.4982 13.9759 23.1433 14.9158 22.5 15.6463M12.5187 4.87375L17.5 1V10.3538M26.2087 7C27.6846 8.65007 28.5005 10.7862 28.5005 13C28.5005 15.2138 27.6846 17.3499 26.2087 19"/>
                    </svg>
                </div>
            </div>
        </div>
        <audio src="" preload="metadata"></audio>
    </div>
</main>

<?= snippet('footer') ?>