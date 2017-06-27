<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

if($slides): ?>
<div class="cw_quickcarousel<?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
    <div id="carousel-<?php echo $module->id; ?>" class="carousel slide">
        <ol class="carousel-indicators">
        <?php foreach($slides as $index => $slide): ?>
            <li data-target="carousel-<?php echo $module->id; ?>" data-slide-to="<?php echo $index; ?>"<?php echo $index == 0 ? ' class="active"' : ''; ?>></li>
        <?php endforeach; ?>
        </ol>

        <div class="carousel-inner">
        <?php foreach ($slides as $index => $slide): ?>
            <div class="item<?php echo $index == 0 ? ' active' : ''; ?>">
                <div class="carousel-image">
                    <?php if($slide['link']): ?>
                    <a href="<?php echo $slide['link']; ?>">
                    <?php endif; ?>

                        <?php if($slide['image']): ?>
                        <img src="<?php echo JUri::base(); ?>images/<?php echo $slide['image']; ?>" alt="<?php echo htmlspecialchars($slide['title']); ?>" />
                        <?php endif; ?>

                        <?php if($slide['title'] || $slide['caption']): ?>
                        <div class="carousel-caption">
                            <?php if($slide['title']): ?>
                            <h3><?php echo $slide['title']; ?></h3>
                            <?php endif; ?>

                            <?php if($slide['caption']): ?>
                                <?php echo $slide['caption']; ?>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                    <?php if($slide['link']): ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
        </div>

        <a class="carousel-control left" href="#carousel-<?php echo $module->id; ?>" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#carousel-<?php echo $module->id; ?>" data-slide="next">&rsaquo;</a>
    </div>
</div>
<?php endif;

