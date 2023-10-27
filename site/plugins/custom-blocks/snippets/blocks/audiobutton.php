<div class="audio-button icon-wrapper">
    <span><?= $block->audiotitle() ?></span>
    <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" />
        <path d="M11.6667 9L7.66667 6.33333V11.6667L11.6667 9Z" />
    </svg>
    <audio src="<?= $block->audio()->toFile()->url() ?>" preload="metadata"></audio>
</div>
