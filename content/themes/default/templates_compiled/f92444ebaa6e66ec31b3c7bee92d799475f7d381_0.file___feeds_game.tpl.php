<?php
/* Smarty version 5.4.1, created on 2025-03-26 06:58:48
  from 'file:__feeds_game.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3a5a81205c2_64369010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f92444ebaa6e66ec31b3c7bee92d799475f7d381' => 
    array (
      0 => '__feeds_game.tpl',
      1 => 1684853014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e3a5a81205c2_64369010 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
if ($_smarty_tpl->getValue('_tpl') != "list") {?>
  <li class="col-md-6 col-lg-3">
    <div class="ui-box">
      <div class="img">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games/<?php echo $_smarty_tpl->getValue('_game')['game_id'];?>
/<?php echo $_smarty_tpl->getValue('_game')['title_url'];?>
">
          <img alt="<?php echo $_smarty_tpl->getValue('_game')['title'];?>
" src="<?php echo $_smarty_tpl->getValue('_game')['thumbnail'];?>
" />
        </a>
      </div>
      <div class="mt10">
        <a class="h6 text-active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games/<?php echo $_smarty_tpl->getValue('_game')['game_id'];?>
/<?php echo $_smarty_tpl->getValue('_game')['title_url'];?>
"><?php echo $_smarty_tpl->getValue('_game')['title'];?>
</a>
        <?php if ($_smarty_tpl->getValue('_game')['played']) {?>
          <div class="mt10 mb20 text-sm">
            <i class="far fa-clock mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Played");?>
: <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('_game')['last_played_time'];?>
"><?php echo $_smarty_tpl->getValue('_game')['last_played_time'];?>
</span>
          </div>
        <?php }?>
      </div>
      <div class="mt10">
        <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games/<?php echo $_smarty_tpl->getValue('_game')['game_id'];?>
/<?php echo $_smarty_tpl->getValue('_game')['title_url'];?>
">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Play");?>

        </a>
      </div>
    </div>
  </li>
<?php } elseif ($_smarty_tpl->getValue('_tpl') == "list") {?>
  <li class="feeds-item">
    <div class="data-container">
      <a class="data-avatar" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games/<?php echo $_smarty_tpl->getValue('_game')['game_id'];?>
/<?php echo $_smarty_tpl->getValue('_game')['title_url'];?>
">
        <img src="<?php echo $_smarty_tpl->getValue('_game')['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->getValue('_game')['title'];?>
">
      </a>
      <div class="data-content">
        <div class="float-end">
          <a class="btn btn-primary" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games/<?php echo $_smarty_tpl->getValue('_game')['game_id'];?>
/<?php echo $_smarty_tpl->getValue('_game')['title_url'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Play");?>
</a>
        </div>
        <div>
          <span class="name">
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games/<?php echo $_smarty_tpl->getValue('_game')['game_id'];?>
/<?php echo $_smarty_tpl->getValue('_game')['title_url'];?>
"><?php echo $_smarty_tpl->getValue('_game')['title'];?>
</a>
          </span>
        </div>
      </div>
    </div>
  </li>
<?php }
}
}
