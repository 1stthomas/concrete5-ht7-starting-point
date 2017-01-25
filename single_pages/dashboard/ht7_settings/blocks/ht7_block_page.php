<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
?>

<form action="<?= $view->action('settingsform'); ?>" class="ccm-dashboard-content-form" method="post" id="myform">
    <?= $ih->tabs($tabs); ?>
    
    <div class="ccm-tab-content" id="ccm-tab-content-basics">
        <?php \View::element('ht7/basic_settings', [], 'ht7_starting_point'); ?>
    </div>
    <div class="ccm-tab-content" id="ccm-tab-content-other">
        <?php \View::element('ht7/other_settings', [], 'ht7_starting_point'); ?>
    </div>
    <div class="ccm-dashboard-form-actions-wrapper">
        <div class="ccm-dashboard-form-actions">
            <button class="pull-right btn btn-success" type="submit" >
                <?= t('Save'); ?>
            </button>
        </div>
    </div>
</form>