<?php
$footer_bg='dark';
$site_info=get_theme_mod('_themename_site_info', '');
?>
<?php if ($site_info) {?>
<div class="site-info <?php echo $footer_bg?>">
    <div class="container">
        <div class="row">

            <?php
            $allowed=array(
                'a'=>array(
                    'href'=>array(),
                    'title'=>array(),
                    'target'=>array()
                )
            );
            echo wp_kses($site_info, $allowed);?>
        </div>
    </div>
</div>
<?php } ?>