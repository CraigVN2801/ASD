<?php /* Smarty version 2.6.18, created on 2024-04-17 20:01:38
         compiled from login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'login.html', 14, false),)), $this); ?>

<br />
<form class="login" name="login" method="post" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['formAction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="max-width: 400px; margin: 0 auto; text-align: center; background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%); padding: 40px; border-radius: 15px; box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.1);">
    <input type="hidden" name="oa_cookiecheck" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sessionID'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
    <div style="margin-bottom: 40px;">
        <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['assetPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/images/login-welcome.gif" alt="Welcome Image" style="width: 120px; margin-bottom: 20px;">
        <h2 style="font-size: 2em; color: #333; margin: 0;">Welcome to <?php echo ((is_array($_tmp=$this->_tpl_vars['appName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h2>
    </div>
    <div style="margin-bottom: 40px;">
        <h3 style="font-size: 1.3em; color: #666; margin: 0;">Enter Your Credentials</h3>
    </div>
    <?php if ($this->_tpl_vars['message']): ?>
    <div class="errormessage" style="width: 100%; text-align: center; margin-bottom: 30px;">
        <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['assetPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/images/errormessage.gif" alt="Error Image" style="vertical-align: middle; margin-right: 10px;">
        <span style="font-size: 1.1em; color: #c0392b;"><?php echo $this->_tpl_vars['message']; ?>
</span>
    </div>
    <?php endif; ?>
    <div style="margin-bottom: 40px;">
        <input class="flat" type="text" name="username" id="username" autocomplete="username" placeholder="Username" style="width: calc(100% - 40px); padding: 15px; border: none; border-radius: 30px; font-size: 1.1em; background: #f5f5f5;">
    </div>
    <div style="margin-bottom: 40px;">
        <input class="flat" type="password" name="password" id="password" autocomplete="current-password" placeholder="Password" style="width: calc(100% - 40px); padding: 15px; border: none; border-radius: 30px; font-size: 1.1em; background: #f5f5f5;">
    </div>
    <div style="margin-bottom: 40px;">
        <button type="submit" name="login" id="login" style="padding: 15px 40px; background: linear-gradient(135deg, #65a4e9 0%, #5986ca 100%); color: #fff; border: none; border-radius: 30px; cursor: pointer; font-size: 1.1em; transition: all 0.3s ease;">Login</button>
    </div>
    <div style="margin-bottom: 20px;">
        <a href="password-recovery.php" style="text-decoration: none; color: #65a4e9; font-size: 1.1em; transition: color 0.3s ease;">Forgot Password?</a>
    </div>
</form>
<script type="text/javascript">
    login_focus();
</script>

<!-- login -->