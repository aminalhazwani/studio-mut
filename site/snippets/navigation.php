<nav class="nav scene_element scene_element--fadeoutdown" role="navigation">
    <div class="nav__tags">
        <?php $tags = $pages->find('/projects')->children()->visible()->pluck('keywords', ',', true); ?>
        <ul>
                <li>
                    <a href="#" class="filter" data-filter="all">Everything</a>
                </li>
            <?php foreach($tags as $tag): ?>
            <?php if($tag == 'design' or $tag == 'art'): ?>
                <li>
                    <a href="#" class="filter" data-filter=".<?php echo html($tag) ?>"><?php echo html($tag) ?><sup>A</sup></a>
                </li>
            <?php elseif($tag == 'web'): ?>
                <li>
                    <a href="#" class="filter" data-filter=".<?php echo html($tag) ?>"><?php echo html($tag) ?><sup>B</sup></a>
                </li>
            <?php else: ?>
                <li>
                    <a href="#" class="filter" data-filter=".<?php echo html($tag) ?>"><?php echo html($tag) ?></a>
                </li>
            <?php endif ?>
            <?php endforeach ?>
        </ul>
        <div class="footnotes">
            <span>A) Mut Greatest Hits</span>
            <span>B) Unpublished work</span>
        </div>
    </div>

    <div class="nav__links">
        <?php echo $site->menu()->kirbytext() ?>
    </div>
</nav>