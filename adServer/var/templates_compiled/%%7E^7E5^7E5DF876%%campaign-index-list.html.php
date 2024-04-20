<?php /* Smarty version 2.6.18, created on 2024-04-19 22:45:25
         compiled from campaign-index-list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'campaign-index-list.html', 26, false),array('function', 'rv_add_session_token', 'campaign-index-list.html', 50, false),array('function', 'ox_column_class', 'campaign-index-list.html', 73, false),array('function', 'ox_column_title', 'campaign-index-list.html', 73, false),array('function', 'cycle', 'campaign-index-list.html', 117, false),array('function', 'ox_campaign_icon', 'campaign-index-list.html', 124, false),array('function', 'ox_entity_id', 'campaign-index-list.html', 124, false),array('function', 'ox_campaign_status', 'campaign-index-list.html', 125, false),array('function', 'ox_campaign_type', 'campaign-index-list.html', 126, false),array('function', 'ox_column_updated', 'campaign-index-list.html', 127, false),array('modifier', 'count', 'campaign-index-list.html', 82, false),array('modifier', 'escape', 'campaign-index-list.html', 124, false),)), $this); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revive Adserver</title>
</head>
<body>
    <div class='tableWrapper' style='margin: 20px auto; max-width: 1200px; background-color: #fff; border-radius: 5px; overflow: hidden;'>
        <div class='tableHeader' style='background-color: #333; color: #fff; padding: 10px 20px; position: relative;'>
            <ul class='tableActions' style='list-style: none; margin: 0; padding: 0; display: inline-block;'>
                <?php if ($this->_tpl_vars['canAddCampaign']): ?>
                <li style='display: inline-block; margin-right: 10px;'>
                    <?php if ($this->_tpl_vars['clientId'] != -1): ?>
                    <a href='campaign-edit.php?clientid=<?php echo $this->_tpl_vars['clientId']; ?>
' class='inlineIcon iconCampaignAdd' style='text-decoration: none; color: #fff;'><?php echo OA_Admin_Template::_function_t(array('str' => 'AddCampaign'), $this);?>
</a>
                    <?php else: ?>
                    <span class='inlineIcon iconCampaignAddDisabled' style='color: #888;'><?php echo OA_Admin_Template::_function_t(array('str' => 'AddCampaign'), $this);?>
</span>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['canDelete']): ?>
                <li class='inactive activeIfSelected' style='display: inline-block; margin-right: 10px;'>
                    <a id='deleteSelection' href='#' class='inlineIcon iconDelete' style='text-decoration: none; color: #fff;'><?php echo OA_Admin_Template::_function_t(array('str' => 'Delete'), $this);?>
</a>

                    <?php echo '
                    <script type=\'text/javascript\'>
                    <!--

                    $(\'#deleteSelection\').click(function(event) {
                        event.preventDefault();

                        if (!$(this).parents(\'li\').hasClass(\'inactive\')) {
                            var ids = [];
                            $(this).parents(\'.tableWrapper\').find(\'.toggleSelection input:checked\').each(function() {
                                ids.push(this.value);
                            });

                            if (!tablePreferences.warningBeforeDelete || confirm("'; ?>
<?php echo OA_Admin_Template::_function_t(array('str' => 'ConfirmDeleteCampaigns'), $this);?>
<?php echo '")) {
                                window.location = \'campaign-delete.php?clientid='; ?>
<?php echo $this->_tpl_vars['clientId']; ?>
&<?php echo OA_Admin_Template::_add_session_token(array(), $this);?>
<?php echo '&campaignid=\' + ids.join(\',\');
                            }
                        }
                    });

                    //-->
                    </script>
                    '; ?>

                </li>
                <?php endif; ?>
            </ul>

            <div class='clear' style='clear: both;'></div>
            <div class='corner left' style='width: 10px; height: 10px; background-color: #333; position: absolute; top: 0; left: 0; border-top-left-radius: 5px;'></div>
            <div class='corner right' style='width: 10px; height: 10px; background-color: #333; position: absolute; top: 0; right: 0; border-top-right-radius: 5px;'></div>
        </div>

        <table cellspacing='0' summary='' style='width: 100%; border-collapse: collapse;'>
            <thead>
                <tr>
                    <?php if ($this->_tpl_vars['canDelete']): ?>
                    <th class='first toggleAll' style='padding: 10px; background-color: #333; color: #fff;'><input type='checkbox' /></th>
                    <?php endif; ?>
                    <th class='<?php echo OA_Admin_Template::_function_ox_column_class(array('item' => 'name','order' => 'up','default' => 1), $this);?>
' style='padding: 10px; background-color: #333; color: #fff;'><?php echo OA_Admin_Template::_function_ox_column_title(array('item' => 'name','order' => 'up','default' => 1,'str' => 'Name','url' => "advertiser-campaigns.php"), $this);?>
</th>
                    <th class='<?php echo OA_Admin_Template::_function_ox_column_class(array('item' => 'status','order' => 'up','default' => 0), $this);?>
' style='padding: 10px; background-color: #333; color: #fff;'><?php echo OA_Admin_Template::_function_ox_column_title(array('item' => 'status','order' => 'up','default' => 0,'str' => 'Status','url' => "advertiser-campaigns.php"), $this);?>
</th>
                    <th class='<?php echo OA_Admin_Template::_function_ox_column_class(array('item' => 'type','order' => 'up','default' => 0), $this);?>
' style='padding: 10px; background-color: #333; color: #fff;'><?php echo OA_Admin_Template::_function_ox_column_title(array('item' => 'type','order' => 'up','default' => 0,'str' => 'Type','url' => "advertiser-campaigns.php"), $this);?>
</th>
                    <th class='<?php echo OA_Admin_Template::_function_ox_column_class(array('item' => 'updated','order' => 'up','default' => 0), $this);?>
' style='padding: 10px; background-color: #333; color: #fff;'><?php echo OA_Admin_Template::_function_ox_column_title(array('item' => 'updated','order' => 'up','default' => 0,'str' => 'Updated','url' => "advertiser-campaigns.php"), $this);?>
</th>
                    <th>&nbsp;</th>
                    <th class='last alignRight'>&nbsp;</th>
                </tr>
            </thead>

            <?php if (! count($this->_tpl_vars['from'])): ?>
            <tbody>
                <tr class='odd'>
                    <td colspan='6'>&nbsp;</td>
                </tr>
                <tr class='even'>
                    <td colspan='6' class="hasPanel">
                        <div class='tableMessage'>
                            <div class='panel'>
                                <?php if ($this->_tpl_vars['clientId'] != -1): ?>
                                    <?php if ($this->_tpl_vars['hideinactive']): ?>
                                        <?php echo $this->_tpl_vars['aCount']['campaigns_hidden']; ?>
 <?php echo OA_Admin_Template::_function_t(array('str' => 'InactiveCampaignsHidden'), $this);?>

                                    <?php else: ?>
                                        <?php echo OA_Admin_Template::_function_t(array('str' => 'NoCampaigns'), $this);?>

                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php echo OA_Admin_Template::_function_t(array('str' => 'NoCampaignsAddAdvertiser'), $this);?>

                                <?php endif; ?>

                                <div class='corner top-left'></div>
                                <div class='corner top-right'></div>
                                <div class='corner bottom-left'></div>
                                <div class='corner bottom-right'></div>
                            </div>
                        </div>

                        &nbsp;
                    </td>
                </tr>
                <tr class='odd'>
                    <td colspan='6'>&nbsp;</td>
                </tr>
            </tbody>
            <?php else: ?>
            <tbody>
                <?php echo smarty_function_cycle(array('name' => 'bgcolor','values' => "even,odd",'assign' => 'bgColor','reset' => 1), $this);?>

                <?php $_from = $this->_tpl_vars['from']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['campaignId'] => $this->_tpl_vars['campaign']):
?>
                <?php echo smarty_function_cycle(array('name' => 'bgcolor','assign' => 'bgColor'), $this);?>

                <tr class='<?php echo $this->_tpl_vars['bgColor']; ?>
'>
                    <?php if ($this->_tpl_vars['canDelete']): ?>
                    <td class='toggleSelection' style='padding: 10px;'><input type='checkbox' value='<?php echo $this->_tpl_vars['campaignId']; ?>
' /></td>
                    <?php endif; ?>
                    <td style='padding: 10px;'><?php if (! $this->_tpl_vars['canEdit']): ?><span class='inlineIcon <?php echo OA_Admin_Template::_function_ox_campaign_icon(array('status' => $this->_tpl_vars['campaign']['status']), $this);?>
' style='display: inline-block; padding: 5px 10px; border-radius: 5px; background-color: #007bff; color: #fff;'><?php echo ((is_array($_tmp=$this->_tpl_vars['campaign']['campaignname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span><?php else: ?><a href='campaign-edit.php?clientid=<?php echo $this->_tpl_vars['clientId']; ?>
&campaignid=<?php echo $this->_tpl_vars['campaignId']; ?>
' class='inlineIcon ' style='text-decoration: none; display: inline-block; padding: 5px 10px; border-radius: 5px; background-color: #007bff; color: #fff;'><?php echo ((is_array($_tmp=$this->_tpl_vars['campaign']['campaignname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a><?php endif; ?><?php echo OA_Admin_Template::_function_ox_entity_id(array('type' => 'Campaign','id' => $this->_tpl_vars['campaignId']), $this);?>
</td>
                    <td style='padding: 10px;'><?php echo OA_Admin_Template::_function_ox_campaign_status(array('clientid' => $this->_tpl_vars['clientId'],'campaignid' => $this->_tpl_vars['campaignId'],'status' => $this->_tpl_vars['campaign']['status']), $this);?>
</td>
                    <td style='padding: 10px;'><?php echo OA_Admin_Template::_function_ox_campaign_type(array('type' => $this->_tpl_vars['campaign']['type']), $this);?>
</td>
                    <td style='padding: 10px;'><?php echo OA_Admin_Template::_function_ox_column_updated(array('updated' => $this->_tpl_vars['campaign']['updated']), $this);?>
</td>
                    <td class='alignRight verticalActions' style='padding: 10px;'>
                        <?php if ($this->_tpl_vars['campaign']['system'] != true): ?>
                        <ul class='rowActions' style='list-style: none; margin: 0; padding: 0;'>
                            <?php if ($this->_tpl_vars['canAddBanner']): ?><li><a href='banner-edit.php?clientid=<?php echo $this->_tpl_vars['clientId']; ?>
&campaignid=<?php echo $this->_tpl_vars['campaignId']; ?>
' class='inlineIcon iconBannerAdd' style='text-decoration: none; color: #333;'><?php echo OA_Admin_Template::_function_t(array('str' => 'AddBanner'), $this);?>
</a></li><?php endif; ?>
                            <li><a href='campaign-banners.php?clientid=<?php echo $this->_tpl_vars['clientId']; ?>
&campaignid=<?php echo $this->_tpl_vars['campaignId']; ?>
' class='inlineIcon iconBanners' style='text-decoration: none; color: #333;'><?php echo OA_Admin_Template::_function_t(array('str' => 'Banners'), $this);?>
</a></li>
                        </ul>
                        <?php endif; ?>
                    </td>
                    <td class='hasPanel' style='padding: 10px;'>
                        <div class='panel' style='background-color: #f5f5f5; border-radius: 5px; padding: 10px; position: relative;'>
                            <table cellspacing='0' summary='' style='width: 100%;'>
                                <tr>
                                    <th><?php echo OA_Admin_Template::_function_t(array('str' => 'ImpressionsBooked'), $this);?>
</th>
                                    <td><?php if ($this->_tpl_vars['campaign']['impressions'] >= 0): ?><?php echo $this->_tpl_vars['campaign']['impressions']; ?>
<?php else: ?><?php echo OA_Admin_Template::_function_t(array('str' => 'Unlimited'), $this);?>
<?php endif; ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo OA_Admin_Template::_function_t(array('str' => 'ClicksBooked'), $this);?>
</th>
                                    <td><?php if ($this->_tpl_vars['campaign']['clicks'] >= 0): ?><?php echo $this->_tpl_vars['campaign']['clicks']; ?>
<?php else: ?><?php echo OA_Admin_Template::_function_t(array('str' => 'Unlimited'), $this);?>
<?php endif; ?></td>
                                </tr>
                                <?php if ($this->_tpl_vars['showconversions']): ?>
                                <tr>
                                    <th><?php echo OA_Admin_Template::_function_t(array('str' => 'ConversionsBooked'), $this);?>
</th>
                                    <td><?php if ($this->_tpl_vars['campaign']['conversions'] >= 0): ?><?php echo $this->_tpl_vars['campaign']['conversions']; ?>
<?php else: ?><?php echo OA_Admin_Template::_function_t(array('str' => 'Unlimited'), $this);?>
<?php endif; ?></td>
                                </tr>
                                <?php endif; ?>
                                <tr>
                                    <th><?php echo OA_Admin_Template::_function_t(array('str' => 'ActivationDate'), $this);?>
</th>
                                    <td><?php echo $this->_tpl_vars['campaign']['activate']; ?>
</td>
                                </tr>
                                <tr>
                                    <th><?php echo OA_Admin_Template::_function_t(array('str' => 'ExpirationDate'), $this);?>
</th>
                                    <td><?php echo $this->_tpl_vars['campaign']['expire']; ?>
</td>
                                </tr>
                                <tr>
                                    <th><?php echo OA_Admin_Template::_function_t(array('str' => 'Priority'), $this);?>
</th>
                                    <td><?php echo $this->_tpl_vars['campaign']['priority']; ?>
</td>
                                </tr>
                            </table>

                            <div class='corner top-left' style='width: 10px; height: 10px; background-color: #f5f5f5; position: absolute; top: -5px; left: -5px; border-top-left-radius: 5px;'></div>
                            <div class='corner top-right' style='width: 10px; height: 10px; background-color: #f5f5f5; position: absolute; top: -5px; right: -5px; border-top-right-radius: 5px;'></div>
                            <div class='corner bottom-left' style='width: 10px; height: 10px; background-color: #f5f5f5; position: absolute; bottom: -5px; left: -5px; border-bottom-left-radius: 5px;'></div>
                            <div class='corner bottom-right' style='width: 10px; height: 10px; background-color: #f5f5f5; position: absolute; bottom: -5px; right: -5px; border-bottom-right-radius: 5px;'></div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>
            </tbody>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>