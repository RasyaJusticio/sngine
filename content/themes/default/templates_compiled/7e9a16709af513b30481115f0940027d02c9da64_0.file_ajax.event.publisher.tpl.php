<?php
/* Smarty version 5.4.1, created on 2025-03-25 07:53:03
  from 'file:ajax.event.publisher.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e260df695a09_06443989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e9a16709af513b30481115f0940027d02c9da64' => 
    array (
      0 => 'ajax.event.publisher.tpl',
      1 => 1725782495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
))) {
function content_67e260df695a09_06443989 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create New Event");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="modules/create.php?type=event&do=create">
  <div class="modal-body">
    <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
      <div class="form-table-row">
        <div>
          <div class="form-label h6 mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored Event");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable this option to add your own host to the event");?>
<br>
            <small class="text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Note: Only system admins can see this option");?>
</small>
          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="is_sponsored">
            <input type="checkbox" name="is_sponsored" id="is_sponsored">
            <span class="slider round"></span>
          </label>
        </div>
      </div>
      <div id="sponsored_event" class="x-hidden">
        <div class="form-group">
          <label class="form-label" for="sponsor_name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored By");?>
</label>
          <input type="text" class="form-control" name="sponsor_name" id="sponsor_name">
        </div>
        <div class="form-group">
          <label class="form-label" for="sponsor_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored URL");?>
</label>
          <input type="text" class="form-control" name="sponsor_url" id="sponsor_url">
        </div>
      </div>
      <div class="divider"></div>
    <?php }?>
    <div class="form-group">
      <label class="form-label" for="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name Your Event");?>
</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Start Date");?>
</label>
      <input type="datetime-local" class="form-control" name="start_date">
    </div>
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("End Date");?>
</label>
      <input type="datetime-local" class="form-control" name="end_date">
    </div>
    <?php if (!$_smarty_tpl->getValue('page_id')) {?>
      <div class="form-group">
        <label class="form-label" for="privacy"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Privacy");?>
</label>
        <select class="form-select" name="privacy">
          <option value="public"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public Event");?>
</option>
          <option value="closed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed Event");?>
</option>
          <option value="secret"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secret Event");?>
</option>
        </select>
      </div>
    <?php }?>
    <div class="form-group">
      <label class="form-label" for="category"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>
</label>
      <select class="form-select" name="category" id="category">
        <option><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Category");?>
</option>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
          <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <div class="form-group">
      <label class="form-label" for="location"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>
</label>
      <input type="text" class="form-control js_geocomplete" name="location" id="location">
    </div>
    <div class="form-group">
      <label class="form-label" for="country"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country");?>
</label>
      <select class="form-select" name="country">
        <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Country");?>
</option>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach1DoElse = false;
?>
          <option value="<?php echo $_smarty_tpl->getValue('country')['country_id'];?>
"><?php echo $_smarty_tpl->getValue('country')['country_name'];?>
</option>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <div class="form-group">
      <label class="form-label" for="description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("About");?>
</label>
      <textarea class="form-control" name="description"></textarea>
    </div>
    <!-- custom fields -->
    <?php if ($_smarty_tpl->getValue('custom_fields')) {?>
      <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields'),'_registration'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <!-- custom fields -->
    <?php if ($_smarty_tpl->getValue('page_id')) {?>
      <div class="divider"></div>
      <div class="form-group">
        <label class="form-label" for="tickets_link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tickets Link");?>
</label>
        <input type="text" class="form-control" name="tickets_link" id="tickets_link" value="<?php echo $_smarty_tpl->getValue('event')['event_tickets_link'];?>
">
      </div>
      <div class="form-group">
        <label class="form-label" for="prices"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Prices Info");?>
</label>
        <textarea class="form-control" name="prices"><?php echo $_smarty_tpl->getValue('event')['event_prices'];?>
</textarea>
      </div>
    <?php }?>
    <!-- error -->
    <div class="alert alert-danger mb0 mt10 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <?php if ($_smarty_tpl->getValue('page_id')) {?>
      <input type="hidden" name="page_id" value="<?php echo $_smarty_tpl->getValue('page_id');?>
">
    <?php }?>
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create");?>
</button>
  </div>
</form>

<?php echo '<script'; ?>
>
  /* sponsored event */
  $('#is_sponsored').on('change', function() {
    if ($(this).prop('checked')) {
      $('#sponsored_event').fadeIn();
    } else {
      $('#sponsored_event').hide();
    }
  });
<?php echo '</script'; ?>
><?php }
}
