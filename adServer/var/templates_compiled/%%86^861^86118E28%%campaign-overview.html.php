<?php /* Smarty version 2.6.18, created on 2024-04-17 22:55:24
         compiled from dashboard/campaign-overview.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'dashboard/campaign-overview.html', 14, false),array('modifier', 'count', 'dashboard/campaign-overview.html', 22, false),array('modifier', 'escape', 'dashboard/campaign-overview.html', 28, false),)), $this); ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo OA_Admin_Template::_function_t(array('str' => 'CampaignOverview'), $this);?>
</title>
    </head>
    <body style="font-family: 'Roboto', sans-serif; background-color: #f9f9f9; margin: 0; padding: 0; color: #333; text-align: center;">
        <div style="max-width: 800px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: left;">
                        <h1 style="font-size: 28px; text-align: center; margin-bottom: 20px; color: #007bff;"><?php echo OA_Admin_Template::_function_t(array('str' => 'CampaignOverview'), $this);?>
</h1>
                        <?php if ($this->_tpl_vars['screen'] == 'enabled'): ?>
                <?php if (count($this->_tpl_vars['aCampaign']) > 0): ?>
                    <ul style="list-style-type: none; padding: 0; margin: 0;">
                       <?php $_from = $this->_tpl_vars['aCampaign']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['aValue']):
?>
                       <li style="border-bottom: 1px solid #ddd; padding: 20px 0;">
                          <div style="font-size: 20px; color: #333; text-decoration: none;">
                              <?php if ($this->_tpl_vars['aValue']['campaignid'] != ""): ?>
                                 <a style="display: inline-block; padding: 10px 20px; font-size: 18px; text-align: center; text-decoration: none; cursor: pointer; border-radius: 5px; background-color: #007bff; color: #fff; border: none; transition: background-color 0.3s ease;" target="_top" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
?clientid=<?php echo $this->_tpl_vars['aValue']['clientid']; ?>
&campaignid=<?php echo $this->_tpl_vars['aValue']['campaignid']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['aValue']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" ><?php echo ((is_array($_tmp=$this->_tpl_vars['aValue']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
                              <?php else: ?>
                                 <?php echo ((is_array($_tmp=$this->_tpl_vars['aValue']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                              <?php endif; ?>
                          </div>
                          <div style="font-size: 16px; color: #666; margin-top: 8px;"><?php echo $this->_tpl_vars['aValue']['actionDesc']; ?>
</div>
                       </li>
                       <?php endforeach; endif; unset($_from); ?>
                    </ul>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['hasCampaigns']): ?>
                        <p style="font-size: 18px; color: #666; line-height: 1.6; margin-bottom: 20px;"><?php echo OA_Admin_Template::_function_t(array('str' => 'CampaignNoDataTimeSpan'), $this);?>
</p>
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['isAdmin'] == true): ?>
                            <p style="font-size: 18px; color: #666; line-height: 1.6; margin-bottom: 20px;"><?php echo OA_Admin_Template::_function_t(array('str' => 'CampaignNoRecordsAdmin'), $this);?>
</p>
                        <?php else: ?>
                            <p style="font-size: 18px; color: #666; line-height: 1.6; margin-bottom: 20px;"><?php echo OA_Admin_Template::_function_t(array('str' => 'CampaignNoRecords'), $this);?>
</p>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php else: ?>
                <p style="font-size: 18px; color: #666; line-height: 1.6; margin-bottom: 20px;"><?php echo OA_Admin_Template::_function_t(array('str' => 'CampaignAuditNotActivated'), $this);?>
</p>
            <?php endif; ?>
            <div style="text-align: center;">
                <a style="display: inline-block; padding: 10px 20px; font-size: 20px; text-decoration: none; cursor: pointer; border-radius: 5px; background-color: #007bff; color: #fff; border: none; transition: background-color 0.3s ease; margin-top: 20px; text-decoration: none;" target="_top" href="<?php echo $this->_tpl_vars['siteUrl']; ?>
"><?php echo OA_Admin_Template::_function_t(array('str' => 'CampaignGoTo'), $this);?>
</a>
            </div>        
        </div>
    </body>
    </html>