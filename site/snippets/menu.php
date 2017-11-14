    <ul class="menu" id="main_menu">
        <?php foreach($pages->visible() as $item): ?>
            <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
                <?php if($item->hasVisibleChildren()) : ?>  
                    <a href="<?= $item->children()->visible()->first()->url() ?>"><?= $item->title()->html() ?></a>
                    
                      <ul class="submenu">
                      <?php foreach($item->children()->visible() as $item) : ?>
                        <li class="submenu-item<?= r($item->isOpen(), ' is-active') ?>"> 
                            <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                        </li>     
                      <?php endforeach ?>
                      </ul>
                <?php else : ?>
                    <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                <?php endif ?>
            </li>
        <?php endforeach ?>
    </ul>
