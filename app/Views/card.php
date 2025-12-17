<div class="card h-100">
    <img src="<?= esc($image ?: './euro.png') ?>" class="card-img-top" alt="<?= esc($title) ?>">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title"><?= esc($title) ?></h5>
        <?php if (!empty($text)): ?>
            <p class="card-text"><?= esc($text) ?></p>
            <p class="card-text"><?= esc($nationality) ?></p>
            <p class="card-text"><?= esc($size) ?></p>
            <p class="card-text"><?= esc($variant) ?></p>
            <p class="card-text"><?= esc($release_year) ?></p>
        <?php endif; ?>
    </div>
</div>