<?php if (!defined('FW')) die('Forbidden'); ?>
<? if($data['slides']): ?>
    <div class="carousel-default owl-carousel carousel-wide-arrows">
        <?foreach ($data['slides'] as $slide):?>
        <div class="item">
            <div class="s-12 m-12 l-7 center text-center">
                <div class="text-primary margin-bottom">
                    <?if (!empty($slide['extra']['icon'])):?>
                        <?for ($i = 0; $i < $slide['extra']['num']; $i++):?>
                            <i class="<?=$slide['extra']['icon']?>"></i>
                        <?endfor;?>
                    <?endif;?>
                </div>
                <p class="margin-bottom"><?=$slide['title']?></p>
                <p class="text-primary text-size-16"><?=$slide['desc']?></p>
            </div>
        </div>
        <?endforeach;?>
    </div>

<?endif;?>
