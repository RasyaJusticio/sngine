<?php
/* Smarty version 5.4.1, created on 2025-03-26 07:19:22
  from 'file:__feeds_event.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3aa7a06ffe7_10371604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6b74bce1684abdf0cb24b952b11661ed79b7907' => 
    array (
      0 => '__feeds_event.tpl',
      1 => 1711780191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_67e3aa7a06ffe7_10371604 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
if ($_smarty_tpl->getValue('_tpl') == "box") {?>
  <li class="col-md-6 col-lg-3">
    <div class="ui-box <?php if ($_smarty_tpl->getValue('_darker')) {?>darker<?php }?>">
      <div class="img">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('_event')['event_id'];
if ($_smarty_tpl->getValue('_search')) {?>?ref=qs<?php }?>">
          <img alt="<?php echo $_smarty_tpl->getValue('_event')['event_title'];?>
" src="<?php echo $_smarty_tpl->getValue('_event')['event_picture'];?>
" />
        </a>
      </div>
      <div class="mt10">
        <a class="h6" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('_event')['event_id'];
if ($_smarty_tpl->getValue('_search')) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('_event')['event_title'],30);?>
</a>
        <div><?php echo $_smarty_tpl->getValue('_event')['event_interested'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Interested");?>
</div>
      </div>
      <div class="mt10">
        <?php if ($_smarty_tpl->getValue('_event')['i_joined']['is_interested']) {?>
          <button type="button" class="btn btn-sm btn-light js_uninterest-event" data-id="<?php echo $_smarty_tpl->getValue('_event')['event_id'];?>
">
            <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Interested");?>

          </button>
        <?php } else { ?>
          <button type="button" class="btn btn-sm btn-primary js_interest-event" data-id="<?php echo $_smarty_tpl->getValue('_event')['event_id'];?>
">
            <i class="fa fa-star mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Interested");?>

          </button>
        <?php }?>
      </div>
    </div>
  </li>
<?php } elseif ($_smarty_tpl->getValue('_tpl') == "list") {?>
  <li class="feeds-item">
    <div class="data-container <?php if ($_smarty_tpl->getValue('_small')) {?>small<?php }?>">
      <a class="data-avatar" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('_event')['event_id'];
if ($_smarty_tpl->getValue('_search')) {?>?ref=qs<?php }?>">
        <img src="<?php echo $_smarty_tpl->getValue('_event')['event_picture'];?>
" alt="<?php echo $_smarty_tpl->getValue('_event')['event_title'];?>
">
      </a>
      <div class="data-content">
        <div class="float-end">
          <?php if ($_smarty_tpl->getValue('_event')['i_joined']['is_interested']) {?>
            <button type="button" class="btn btn-sm btn-light js_uninterest-event" data-id="<?php echo $_smarty_tpl->getValue('_event')['event_id'];?>
">
              <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Interested");?>

            </button>
          <?php } else { ?>
            <button type="button" class="btn btn-sm btn-light rounded-pill js_interest-event" data-id="<?php echo $_smarty_tpl->getValue('_event')['event_id'];?>
">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
            </button>
          <?php }?>
        </div>
        <div>
          <span class="name">
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('_event')['event_id'];
if ($_smarty_tpl->getValue('_search')) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('_event')['event_title'],30);?>
</a>
          </span>
          <div><?php echo $_smarty_tpl->getValue('_event')['event_interested'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Interested");?>
</div>
        </div>
      </div>
    </div>
  </li>
<?php }
}
}
