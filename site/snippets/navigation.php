<nav class="nav scene_element scene_element--fadeoutdown" role="navigation">
    <div class="nav__tags">
        <?php $tags = $pages->find('/projects')->children()->visible()->pluck('keywords', ',', true); ?>
        <ul>
            <?php foreach($tags as $tag): ?>
            <?php if($tag == 'design' or $tag == 'art'): ?>
                <li>
                    <a href="#">
                        <?php echo html($tag) ?><sup>A</sup>
                    </a>
                </li>
            <?php elseif($tag == 'web'): ?>
                <li>
                    <a href="#">
                        <?php echo html($tag) ?><sup>B</sup>
                    </a>
                </li>
            <?php else: ?>
                <li>
                    <button class="filter" data-filter=".<?php echo html($tag) ?>">
                        <?php echo html($tag) ?>
                    </button>
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