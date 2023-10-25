<h3 class="audio-button icon-wrapper">
    <span><?= $block->title() ?></span>
    <svg viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 25C19.6274 25 25 19.6274 25 13C25 6.37258 19.6274 1 13 1C6.37258 1 1 6.37258 1 13C1 19.6274 6.37258 25 13 25Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M17 13L11 9V17L17 13Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <audio src="<?= $block->audio()->toFile()->url() ?>" preload="metadata"></audio>
</h3>
