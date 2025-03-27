<?php
/* Smarty version 5.4.1, created on 2025-03-27 06:13:15
  from 'file:ajax.offer.editor.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e4ec7bd4b7d4_46500616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '390f18d08be74b587f57a189045c7b15db3fede4' => 
    array (
      0 => 'ajax.offer.editor.tpl',
      1 => 1705497492,
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
function content_67e4ec7bd4b7d4_46500616 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Offer");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="posts/edit.php">
  <div class="modal-body">
    <div class="row">
      <!-- discount type -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>
</label>
        <select class="form-select" id="js_discount-type" name="discount_type">
          <option value="discount_percent" <?php if ($_smarty_tpl->getValue('post')['offer']['discount_type'] == "discount_percent") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discount Percent");?>
</option>
          <option value="discount_amount" <?php if ($_smarty_tpl->getValue('post')['offer']['discount_type'] == "discount_amount") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discount Amount");?>
</option>
          <option value="buy_get_discount" <?php if ($_smarty_tpl->getValue('post')['offer']['discount_type'] == "buy_get_discount") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Buy X Get Y Discount");?>
</option>
          <option value="spend_get_off" <?php if ($_smarty_tpl->getValue('post')['offer']['discount_type'] == "spend_get_off") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Spend X Get Y Off");?>
</option>
          <option value="free_shipping" <?php if ($_smarty_tpl->getValue('post')['offer']['discount_type'] == "free_shipping") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Free Shipping");?>
</option>
        </select>
      </div>
      <!-- discount type -->
      <!-- discount percent -->
      <div id="js_discount-percent" class="form-group col-md-6 <?php if ($_smarty_tpl->getValue('post')['offer']['discount_type'] != "discount_percent") {?>x-hidden<?php }?>">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discount Percent");?>
</label>
        <select class="form-select" name="discount_percent">
          <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 99+1 - (1) : 1-(99)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->getValue('i');?>
" <?php if ($_smarty_tpl->getValue('post')['offer']['discount_percent'] == $_smarty_tpl->getValue('i')) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('i');?>
%</option>
          <?php }
}
?>
        </select>
      </div>
      <!-- discount percent -->
      <!-- discount amount -->
      <div id="js_discount-amount" class="form-group col-md-6 <?php if ($_smarty_tpl->getValue('post')['offer']['discount_type'] != "discount_amount") {?>x-hidden<?php }?>">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discount Amount");?>
</label>
        <div class="input-group">
          <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "left") {?>
            <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
          <?php }?>
          <input name="discount_amount" type="text" class="form-control" placeholder="0.00" value="<?php echo $_smarty_tpl->getValue('post')['offer']['discount_amount'];?>
">
          <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "right") {?>
            <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
          <?php }?>
        </div>
      </div>
      <!-- discount amount -->
    </div>
    <!-- buy get discount -->
    <div id="js_buy-get-discount" <?php if ($_smarty_tpl->getValue('post')['offer']['discount_type'] != "buy_get_discount") {?>class="x-hidden" <?php }?>>
      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Buy");?>
</label>
          <input name="buy_x" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('post')['offer']['buy_x'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enter numric value (Example: 5)");?>

          </div>
        </div>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Get");?>
</label>
          <input name="get_y" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('post')['offer']['get_y'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enter numric value (Example: 2)");?>

          </div>
        </div>
      </div>
    </div>
    <!-- buy get discount -->
    <!-- spend get off -->
    <div id="js_spend-get-off" <?php if ($_smarty_tpl->getValue('post')['offer']['discount_type'] != "spend_get_off") {?>class="x-hidden" <?php }?>>
      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Spend");?>
</label>
          <div class="input-group">
            <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "left") {?>
              <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
            <?php }?>
            <input name="spend_x" type="text" class="form-control" placeholder="0.00" value="<?php echo $_smarty_tpl->getValue('post')['offer']['spend_x'];?>
">
            <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "right") {?>
              <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
            <?php }?>
          </div>
        </div>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Amount Off");?>
</label>
          <div class="input-group">
            <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "left") {?>
              <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
            <?php }?>
            <input name="amount_y" type="text" class="form-control" placeholder="0.00" value="<?php echo $_smarty_tpl->getValue('post')['offer']['amount_y'];?>
">
            <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "right") {?>
              <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- spend get off -->
    <div class="row">
      <!-- end date -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("End Date");?>
</label>
        <input type="datetime-local" class="form-control" name="end_date" value="<?php echo $_smarty_tpl->getValue('post')['offer']['end_date'];?>
">
      </div>
      <!-- end date -->
      <!-- category -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>
</label>
        <select class="form-select" name="category">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('offers_categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
            <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->getValue('post')['offer']['category_id']), (int) 0, $_smarty_current_dir);
?>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <!-- category -->
    </div>

    <!-- title -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discounted Items and/or Services");?>
</label>
      <input name="title" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('post')['offer']['title'];?>
">
    </div>
    <!-- title -->
    <!-- original price -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Original Price");?>
</label>
      <input name="price" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('post')['offer']['price'];?>
">
    </div>
    <!-- original price -->
    <!-- description -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</label>
      <textarea name="description" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->getValue('post')['text_plain'];?>
</textarea>
    </div>
    <!-- description -->
    <!-- custom fields -->
    <?php if ($_smarty_tpl->getValue('custom_fields')['basic']) {?>
      <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['basic'],'_registration'=>false), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <!-- custom fields -->
    <!-- thumbnail -->
    <?php if ($_smarty_tpl->getValue('post')['offer']['thumbnail']) {?>
      <div class="form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Thumbnail");?>
</label>
        <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['offer']['thumbnail'];?>
')">
          <div class="x-image-loader">
            <div class="progress x-progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
          <input type="hidden" class="js_x-image-input" name="thumbnail" value="<?php echo $_smarty_tpl->getValue('post')['offer']['thumbnail'];?>
">
        </div>
      </div>
    <?php }?>
    <!-- thumbnail -->
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <input type="hidden" name="handle" value="offer">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save");?>
</button>
  </div>
</form>

<?php echo '<script'; ?>
>
  $(function() {
    /* handle offer input dependencies */
    $('#js_discount-type').on('change', function() {
      switch ($(this).val()) {
        case "discount_percent":
          $("#js_discount-percent").show();
          $("#js_discount-amount").hide();
          $("#js_buy-get-discount").hide();
          $("#js_spend-get-off").hide();
          break;

        case "discount_amount":
          $("#js_discount-percent").hide();
          $("#js_discount-amount").show();
          $("#js_buy-get-discount").hide();
          $("#js_spend-get-off").hide();
          break;

        case "buy_get_discount":
          $("#js_discount-percent").hide();
          $("#js_discount-amount").hide();
          $("#js_buy-get-discount").show();
          $("#js_spend-get-off").hide();
          break;

        case "spend_get_off":
          $("#js_discount-percent").hide();
          $("#js_discount-amount").hide();
          $("#js_buy-get-discount").hide();
          $("#js_spend-get-off").show();
          break;

        case "free_shipping":
          $("#js_discount-percent").hide();
          $("#js_discount-amount").hide();
          $("#js_buy-get-discount").hide();
          $("#js_spend-get-off").hide();
          break;
      }
    });
  })
<?php echo '</script'; ?>
><?php }
}
