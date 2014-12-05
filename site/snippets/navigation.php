<nav class="navigation" role="navigation">
    <ul>
        <li>
            <a<?php ecco($pages->find('/home')->isOpen(), ' class="active"') ?> href="<?php echo url() ?>">
                <span>Home</span>
            </a>
        </li>
        <?php foreach($pages->visible() as $p): ?>
        <li>
        <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>/">
            <span><?php echo html($p->title()) ?></span>
        </a>
        </li>
        <?php endforeach ?>
    </ul>
</nav>