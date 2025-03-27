<?php
/* Smarty version 5.4.1, created on 2025-03-25 01:27:00
  from 'file:_ads_campaigns.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e20664296528_41677815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92e2ea152412c90a6b5a6001857cef5c35e2211d' => 
    array (
      0 => '_ads_campaigns.tpl',
      1 => 1647961202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e20664296528_41677815 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
if ($_smarty_tpl->getValue('ads_campaigns')) {?>
  <!-- ads campaigns -->
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ads_campaigns'), 'campaign');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('campaign')->value) {
$foreach21DoElse = false;
?>
    <div class="card">
      <div class="card-header bg-transparent">
        <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored");?>

      </div>
      <div class="card-body <?php if ($_smarty_tpl->getValue('campaign')['campaign_bidding'] == 'click') {?>js_ads-click-campaign<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('campaign')['campaign_id'];?>
">
        <a href="<?php echo $_smarty_tpl->getValue('campaign')['ads_url'];?>
" target="_blank">
          <img class="img-fluid" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('campaign')['ads_image'];?>
">
        </a>
        <?php if ($_smarty_tpl->getValue('campaign')['ads_title'] || $_smarty_tpl->getValue('campaign')['ads_description']) {?>
          <div class="ptb5 plr10">
            <p class="ads-title">
              <a href="<?php echo $_smarty_tpl->getValue('campaign')['ads_url'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('campaign')['ads_title'];?>
</a>
            </p>
            <p class="ads-descrition">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('campaign')['ads_description'],200);?>

            </p>
          </div>
        <?php }?>
      </div>
    </div>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  <!-- ads campaigns -->
<?php }
}
}
