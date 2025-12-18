<section>
    <div class="card h-100">
        <img src="<?= esc($image ?: './euro.png') ?>" class="card-img-top" alt="<?= esc($title) ?>">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= esc($title) ?></h5>
            <?php if (!empty($text)): ?>
            <p class="card-text">Title: <?= esc($text) ?></p>
            <p class="card-text">Nationality: <?= esc($nationality) ?></p>
            <p class="card-text">Size: <?= esc($size) ?></p>
            <p class="card-text">Variant: <?= esc($variant) ?></p>
            <p class="card-text">Release Year: <?= esc($release_year) ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>