<?php
/* Smarty version 5.4.1, created on 2025-03-26 07:07:19
  from 'file:__feeds_funding.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3a7a74c0fd5_66531652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '543a0116e9db6000749ad992adbc930fe74231f6' => 
    array (
      0 => '__feeds_funding.tpl',
      1 => 1667298887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_need_subscription.tpl' => 1,
  ),
))) {
function content_67e3a7a74c0fd5_66531652 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
?><div class="<?php if ($_smarty_tpl->getValue('_iteration') == 1) {?>col-sm-12 col-md-8 col-lg-6<?php } else { ?>col-sm-6 col-md-4 col-lg-3<?php }?>">
  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('funding')['post_id'];?>
" class="blog-container <?php if ($_smarty_tpl->getValue('_iteration') == 1) {?>primary<?php }?>">
    <?php if ($_smarty_tpl->getValue('funding')['needs_subscription']) {?>
      <div class="ptb20 plr20">
        <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
    <?php } else { ?>
      <div class="blog-image">
        <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('funding')['funding']['cover_image'];?>
">
      </div>
      <div class="blog-source">
        <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('funding')['funding']['raised_amount']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Raised of");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('funding')['funding']['amount']);?>
</strong>
      </div>
      <div class="blog-content">
        <h3><?php echo $_smarty_tpl->getValue('funding')['funding']['title'];?>
</h3>
        <div class="text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('funding')['text'],400);?>
</div>
        <div>
          <div class="post-avatar">
            <div class="post-avatar-picture small" style="background-image:url('<?php echo $_smarty_tpl->getValue('funding')['post_author_picture'];?>
');">
            </div>
          </div>
          <div class="post-meta">
            <span class="text-link">
              <?php echo $_smarty_tpl->getValue('funding')['post_author_name'];?>

            </span>
            <div class="post-time">
              <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('funding')['time'];?>
"><?php echo $_smarty_tpl->getValue('funding')['time'];?>
</span>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
    <div class="blog-more">
      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("More");?>
</span>
    </div>
  </a>
</div><?php }
}
