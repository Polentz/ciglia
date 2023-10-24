<div class="button-wrapper">
    <button class="button">
        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.852804 1L16.4577 1M16.4577 1L16.6553 17M16.4577 1L0.655273 17"/>
        </svg>
      <?php if($file = $block->file()->toFile()): ?>
            <a class="buttton-download" href="<?= $file->url() ?>" target="_blank" rel="noopener noreferrer"><?= $block->text() ?></a>
      <?php endif ?>
    </button>
</div>