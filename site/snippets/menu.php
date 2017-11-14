<nav class="menu">
    <ul>
        <?php foreach ($site->children()->visible() as $item): ?>
            <li>
                <a href="<?= $item->url() ?>"<?= e($item->isOpen(), ' class="is-active"') ?>><?= $item->title()->html() ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</nav>
