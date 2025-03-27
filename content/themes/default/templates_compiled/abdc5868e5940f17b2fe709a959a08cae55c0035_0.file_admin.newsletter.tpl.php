<?php
/* Smarty version 5.4.1, created on 2025-03-26 09:06:58
  from 'file:admin.newsletter.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3c3b2408256_84257969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abdc5868e5940f17b2fe709a959a08cae55c0035' => 
    array (
      0 => 'admin.newsletter.tpl',
      1 => 1689515318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_67e3c3b2408256_84257969 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-paper-plane mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Newsletter");?>

  </div>

  <!-- Newsletter -->
  <form class="js_ajax-forms" data-url="admin/newsletter.php">
    <div class="card-body">
      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"account_activation",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Test Message");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The message will sent to Website Email only");?>
</div>
        </div>
        <div class="text-end">
          <label class="switch" for="is_test">
            <input type="checkbox" name="is_test" id="is_test">
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Send to");?>

        </label>
        <div class="col-sm-9">
          <select class="form-select" name="to">
            <option value="all_users"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Users");?>
 (<?php echo $_smarty_tpl->getValue('insights')['users_all'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user");?>
)</option>
            <option value="users_activated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users who activated their account");?>
 (<?php echo $_smarty_tpl->getValue('insights')['users_activated'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user");?>
)</option>
            <option value="users_not_activated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users who did not activated their account");?>
 (<?php echo $_smarty_tpl->getValue('insights')['users_not_activated'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user");?>
)</option>
            <option value="users_not_logged_week"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users who did not login from 1 week");?>
 (<?php echo $_smarty_tpl->getValue('insights')['users_not_logged_week'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user");?>
)</option>
            <option value="users_not_logged_month"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users who did not login from 1 month");?>
 (<?php echo $_smarty_tpl->getValue('insights')['users_not_logged_month'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user");?>
)</option>
            <option value="users_not_logged_3_months"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users who did not login from 3 months");?>
 (<?php echo $_smarty_tpl->getValue('insights')['users_not_logged_3_months'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user");?>
)</option>
            <option value="users_not_logged_6_months"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users who did not login from 6 months");?>
 (<?php echo $_smarty_tpl->getValue('insights')['users_not_logged_6_months'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user");?>
)</option>
            <option value="users_not_logged_9_months"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users who did not login from 9 months");?>
 (<?php echo $_smarty_tpl->getValue('insights')['users_not_logged_9_months'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user");?>
)</option>
            <option value="users_not_logged_year"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users who did not login from 1 year");?>
 (<?php echo $_smarty_tpl->getValue('insights')['users_not_logged_year'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user");?>
)</option>
          </select>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subject");?>

        </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="subject">
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Message");?>

        </label>
        <div class="col-sm-9">
          <textarea class="form-control js_wysiwyg-advanced" rows="10" name="message"></textarea>
        </div>
      </div>

      <!-- success -->
      <div class="alert alert-success mt15 mb0 x-hidden"></div>
      <!-- success -->

      <!-- error -->
      <div class="alert alert-danger mt15 mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-end">
      <button type="submit" class="btn btn-danger">
        <i class="fa fa-paper-plane mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Send");?>

      </button>
    </div>
  </form>
  <!-- Newsletter -->

</div><?php }
}
