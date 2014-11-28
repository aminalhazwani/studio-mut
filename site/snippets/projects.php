<div id="Container" class="container projects"> 
    <?php foreach(page('projects')->children()->visible() as $project): ?>
        <div class="projects__item mix">
            <a class="projects__item--link"  href="<?php echo $project->url() ?>/">
                <?php foreach($project->images() as $image): ?>
                    <?php if($image->cover() != ''): ?>
                    <div class="projects__item--thumb-wrapper">
                        <img class="projects__item--thumb" src="<?php echo $image->url() ?>" alt="<?php echo html($project->title()) ?>" >
                    </div>
                    <?php endif ?>
                <?php endforeach ?>

                <p class="projects__item--title"><?php echo html($project->title()) ?></p>
                <!--
                <p class="project__item--client"><?php echo html($project->client()) ?></p>
                <p class="project__item--date"><?php echo html($project->date()) ?></p>
                -->
            </a>
        </div><!--
        -->
    <?php endforeach ?>

    <div class="gap"></div>
    <div class="gap"></div>
</div>