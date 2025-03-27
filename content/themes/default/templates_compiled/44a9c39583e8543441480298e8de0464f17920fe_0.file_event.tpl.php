<?php
/* Smarty version 5.4.1, created on 2025-03-26 07:12:06
  from 'file:event.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67e3a8c604b345_38417099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44a9c39583e8543441480298e8de0464f17920fe' => 
    array (
      0 => 'event.tpl',
      1 => 1727251871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__svg_icons.tpl' => 47,
    'file:_ads.tpl' => 1,
    'file:__feeds_user.tpl' => 2,
    'file:__feeds_photo.tpl' => 2,
    'file:_footer_mini.tpl' => 2,
    'file:_publisher.tpl' => 2,
    'file:_pinned_post.tpl' => 1,
    'file:_posts.tpl' => 3,
    'file:_chatbox.tpl' => 1,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:__feeds_video.tpl' => 2,
    'file:__feeds_product.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:__feeds_review.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
    'file:_footer.links.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_67e3a8c604b345_38417099 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/rasyajusticio/projects/ubig/linkid/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none sg-offcanvas-sidebar mt20">
      <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 sg-offcanvas-mainbar">
      <!-- profile-header -->
      <div class="profile-header no-avatar">
        <!-- profile-cover -->
        <div class="profile-cover-wrapper">
          <?php if ($_smarty_tpl->getValue('event')['event_cover_id']) {?>
            <!-- full-cover -->
            <img class="js_position-cover-full x-hidden" src="<?php echo $_smarty_tpl->getValue('event')['event_cover_full'];?>
">
            <!-- full-cover -->

            <!-- cropped-cover -->
            <img class="js_position-cover-cropped js_lightbox" data-init-position="<?php echo $_smarty_tpl->getValue('event')['event_cover_position'];?>
" data-id="<?php echo $_smarty_tpl->getValue('event')['event_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('event')['event_cover_full'];?>
" data-context="album" src="<?php echo $_smarty_tpl->getValue('event')['event_cover'];?>
" alt="<?php echo $_smarty_tpl->getValue('event')['event_title'];?>
">
            <!-- cropped-cover -->
          <?php }?>

          <?php if ($_smarty_tpl->getValue('event')['i_admin']) {?>
            <!-- buttons -->
            <div class="profile-cover-buttons">
              <div class="profile-cover-change">
                <i class="fa fa-camera" data-bs-toggle="dropdown" data-display="static"></i>
                <div class="dropdown-menu action-dropdown-menu">
                  <!-- upload -->
                  <div class="dropdown-item pointer js_x-uploader" data-handle="cover-event" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                    <div class="action">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"camera",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload Photo");?>

                    </div>
                    <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload a new photo");?>
</div>
                  </div>
                  <!-- upload -->
                  <!-- select -->
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="users/photos.php?filter=cover&type=event&id=<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                    <div class="action">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Photo");?>

                    </div>
                    <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select a photo");?>
</div>
                  </div>
                  <!-- select -->
                </div>
              </div>
              <div class="profile-cover-position <?php if (!$_smarty_tpl->getValue('event')['event_cover']) {?>x-hidden<?php }?>">
                <input class="js_position-picture-val" type="hidden" name="position-picture-val">
                <i class="fa fa-crop-alt js_init-position-picture" data-handle="event" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-check fa-fw js_save-position-picture"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-times fa-fw js_cancel-position-picture"></i>
              </div>
              <div class="profile-cover-delete <?php if (!$_smarty_tpl->getValue('event')['event_cover']) {?>x-hidden<?php }?>">
                <i class="fa fa-trash js_delete-cover" data-handle="cover-event" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
"></i>
              </div>
            </div>

            <!-- loaders -->
            <div class="profile-cover-change-loader">
              <div class="progress x-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="profile-cover-position-loader">
              <i class="fa fa-arrows-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Drag to reposition cover");?>

            </div>
            <!-- loaders -->
          <?php }?>
        </div>
        <!-- profile-cover -->

        <!-- profile-date -->
        <div class="profle-date-wrapper">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_start_date'],"%b"));?>
<br><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_start_date'],"%e");?>

        </div>
        <!-- profile-date -->

        <!-- profile-name -->
        <div class="profile-name-wrapper">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
"><?php echo $_smarty_tpl->getValue('event')['event_title'];?>
</a>
          <?php if ($_smarty_tpl->getValue('event')['event_privacy'] == "public") {?>
            <i data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public Event");?>
' class="fa fa-globe fa-fw privacy-badge"></i>
          <?php } elseif ($_smarty_tpl->getValue('event')['event_privacy'] == "closed") {?>
            <i data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed Event");?>
' class="fa fa-unlock-alt fa-fw privacy-badge"></i>
          <?php } elseif ($_smarty_tpl->getValue('event')['event_privacy'] == "secret") {?>
            <i data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secret Event");?>
' class="fa fa-lock fa-fw privacy-badge"></i>
          <?php }?>
        </div>
        <!-- profile-name -->

        <!-- profile-meta -->
        <div class="profle-meta-wrapper">
          <i class="fa fa-clock"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_start_date'],"%e");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_start_date'],"%b"));?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_start_date'],"%I:%M %p");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_end_date'],"%e");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_end_date'],"%b"));?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_end_date'],"%I:%M %p");?>

        </div>
        <!-- profile-meta -->

        <!-- profile-buttons -->
        <div class="profile-buttons-wrapper">
          <!-- going & interested -->
          <?php if ($_smarty_tpl->getValue('event')['event_privacy'] == "public" || $_smarty_tpl->getValue('event')['i_joined'] || $_smarty_tpl->getValue('event')['i_admin']) {?>
            <!-- going -->
            <?php if ($_smarty_tpl->getValue('event')['i_joined']['is_going']) {?>
              <button type="button" class="btn btn-md btn-light rounded-pill js_ungo-event" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                <i class="fa fa-check"></i>
                <span class="d-none d-xxl-inline-block ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Going");?>
</span>
              </button>
            <?php } else { ?>
              <button type="button" class="btn btn-md btn-success rounded-pill js_go-event" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                <i class="fa fa-calendar-check"></i>
                <span class="d-none d-xxl-inline-block ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Going");?>
</span>
              </button>
            <?php }?>
            <!-- going -->

            <!-- interested -->
            <?php if ($_smarty_tpl->getValue('event')['i_joined']['is_interested']) {?>
              <button type="button" class="btn btn-md btn-light rounded-pill js_uninterest-event" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                <i class="fa fa-check"></i>
                <span class="d-none d-xxl-inline-block ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Interested");?>
</span>
              </button>
            <?php } else { ?>
              <button type="button" class="btn btn-md btn-primary rounded-pill js_interest-event" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                <i class="fa fa-star"></i>
                <span class="d-none d-xxl-inline-block ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Interested");?>
</span>
              </button>
            <?php }?>
            <!-- interested -->
          <?php }?>
          <!-- going & interested -->

          <!-- review -->
          <?php if ($_smarty_tpl->getValue('system')['events_reviews_enabled']) {?>
            <?php if (!$_smarty_tpl->getValue('event')['i_admin']) {?>
              <button type="button" class="btn btn-md rounded-pill btn-light" data-toggle="modal" data-url="modules/review.php?do=review&id=<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
&type=event">
                <i class="fa fa-star"></i>
                <span class="d-none d-xxl-inline-block ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Review");?>
</span>
              </button>
            <?php }?>
          <?php }?>
          <!-- review -->

          <!-- report menu -->
          <div class="d-inline-block dropdown ml5">
            <button type="button" class="btn btn-icon rounded-pill btn-light" data-bs-toggle="dropdown" data-display="static">
              <i class="fa fa-ellipsis-v fa-fw"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end action-dropdown-menu">
              <!-- share -->
              <div class="dropdown-item pointer" data-toggle="modal" data-url="modules/share.php?node_type=event&node_username=<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                <div class="action">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share");?>

                </div>
                <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share this event");?>
</div>
              </div>
              <!-- share -->
              <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
                <?php if (!$_smarty_tpl->getValue('event')['i_admin']) {?>
                  <!-- report -->
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="data/report.php?do=create&handle=event&id=<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                    <div class="action">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"report",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Report");?>

                    </div>
                    <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Report this to admins");?>
</div>
                  </div>
                  <!-- report -->
                  <!-- manage -->
                  <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/admincp/events/edit_event/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit in Admin Panel");?>

                    </a>
                  <?php } elseif ($_smarty_tpl->getValue('user')->_is_moderator) {?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/modcp/events/edit_event/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit in Moderator Panel");?>

                    </a>
                  <?php }?>
                  <!-- manage -->
                <?php } else { ?>
                  <!-- settings -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/settings">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Settings");?>

                  </a>
                  <!-- settings -->
                <?php }?>
              <?php }?>
            </div>
          </div>
          <!-- report menu -->
        </div>
        <!-- profile-buttons -->
      </div>
      <!-- profile-header -->

      <!-- profile-tabs -->
      <div class="profile-tabs-wrapper d-flex justify-content-evenly">
        <?php if ($_smarty_tpl->getValue('event')['event_privacy'] == "public" || $_smarty_tpl->getValue('event')['i_joined'] || $_smarty_tpl->getValue('event')['i_admin'] || $_smarty_tpl->getValue('user')->_is_admin || $_smarty_tpl->getValue('user')->_is_moderator) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
" <?php if ($_smarty_tpl->getValue('view') == '') {?>class="active" <?php }?>>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span class="ml5 d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Timeline");?>
</span>
          </a>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/photos" <?php if ($_smarty_tpl->getValue('view') == "photos" || $_smarty_tpl->getValue('view') == "albums" || $_smarty_tpl->getValue('view') == "album") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span class="ml5 d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
</span>
          </a>
          <?php if ($_smarty_tpl->getValue('system')['videos_enabled']) {?>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/videos" <?php if ($_smarty_tpl->getValue('view') == "videos" || $_smarty_tpl->getValue('view') == "reels") {?>class="active" <?php }?>>
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
              <span class="ml5 d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>
</span>
            </a>
          <?php } elseif ($_smarty_tpl->getValue('system')['reels_enabled']) {?>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/reels" <?php if ($_smarty_tpl->getValue('view') == "reels") {?>class="active" <?php }?>>
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"reels",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
              <span class="ml5 d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>
</span>
            </a>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('system')['market_enabled']) {?>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/products" <?php if ($_smarty_tpl->getValue('view') == "products") {?>class="active" <?php }?>>
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
              <span class="ml5 d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Store");?>
</span>
            </a>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('system')['events_reviews_enabled']) {?>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/reviews" <?php if ($_smarty_tpl->getValue('view') == "reviews") {?>class="active" <?php }?>>
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
              <span class="ml5 d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reviews");?>
 <?php if ($_smarty_tpl->getValue('event')['event_rate']) {?><span class="badge bg-light text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('event')['event_rate'],1);?>
</span><?php }?></span>
            </a>
          <?php }?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/going" <?php if ($_smarty_tpl->getValue('view') == "going" || $_smarty_tpl->getValue('view') == "interested" || $_smarty_tpl->getValue('view') == "invited" || $_smarty_tpl->getValue('view') == "invites") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span class="ml5 d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members");?>
</span>
          </a>
        <?php } else { ?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
" <?php if ($_smarty_tpl->getValue('view') == "about") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"info",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("About");?>

          </a>
        <?php }?>
      </div>
      <!-- profile-tabs -->

      <!-- profile-content -->
      <div class="row">
        <!-- view content -->
        <?php if ($_smarty_tpl->getValue('view') == '') {?>

          <!-- left panel -->
          <div class="<?php if ($_smarty_tpl->getValue('system')['chat_enabled'] && $_smarty_tpl->getValue('event')['chatbox_enabled']) {?>col-lg-3 order-3 order-lg-1<?php } else { ?>col-lg-4 order-2 order-lg-1<?php }?>">
            <!-- ads -->
            <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <!-- ads -->

            <!-- panel [about] -->
            <div class="card">
              <div class="card-body">
                <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('is_empty')($_smarty_tpl->getValue('event')['event_description'])) {?>
                  <div class="about-bio">
                    <div class="js_readmore overflow-hidden">
                      <?php echo nl2br((string) $_smarty_tpl->getValue('event')['event_description'], (bool) 1);?>

                    </div>
                  </div>
                <?php }?>
                <ul class="about-list">
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"unhide",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php if ($_smarty_tpl->getValue('event')['event_privacy'] == "public") {?>
                        <i class="fa fa-globe fa-fw"></i>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public Event");?>

                      <?php } elseif ($_smarty_tpl->getValue('event')['event_privacy'] == "closed") {?>
                        <i class="fa fa-unlock-alt fa-fw"></i>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed Event");?>

                      <?php } elseif ($_smarty_tpl->getValue('event')['event_privacy'] == "secret") {?>
                        <i class="fa fa-lock fa-fw"></i>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secret Event");?>

                      <?php }?>
                    </div>
                  </li>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"clock",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_start_date'],"%e");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_start_date'],"%b"));?>
 - <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_end_date'],"%e");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_end_date'],"%b"));?>
<br>
                      <small class="text-muted">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_start_date'],"%e");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_start_date'],"%b"));?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_start_date'],"%I:%M %p");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_end_date'],"%e");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_end_date'],"%b"));?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('event')['event_end_date'],"%I:%M %p");?>

                      </small>
                    </div>
                  </li>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"profile",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hosted By");?>

                      <?php if ($_smarty_tpl->getValue('event')['event_is_sponsored']) {?>
                        <a target="_blank" href="<?php echo $_smarty_tpl->getValue('event')['event_sponsor_url'];?>
"><?php echo $_smarty_tpl->getValue('event')['event_sponsor_name'];?>
</a>
                      <?php } else { ?>
                        <a target="_blank" href="<?php echo $_smarty_tpl->getValue('event')['host_url'];?>
"><?php echo $_smarty_tpl->getValue('event')['host_name'];?>
</a>
                      <?php }?>
                    </div>
                  </li>
                  <!-- posts -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('event')['posts_count']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>

                    </div>
                  </li>
                  <!-- posts -->
                  <!-- photos -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('event')['photos_count']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>

                    </div>
                  </li>
                  <!-- photos -->
                  <?php if ($_smarty_tpl->getValue('system')['videos_enabled']) {?>
                    <!-- videos -->
                    <li>
                      <div class="about-list-item">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('event')['videos_count']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>

                      </div>
                    </li>
                    <!-- videos -->
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['events_reviews_enabled']) {?>
                    <!-- reviews -->
                    <li>
                      <div class="about-list-item">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('event')['reviews_count']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reviews");?>

                        <?php if ($_smarty_tpl->getValue('event')['event_rate']) {?>
                          <span class="review-stars small ml5">
                            <i class="fa fa-star <?php if ($_smarty_tpl->getValue('event')['event_rate'] >= 1) {?>checked<?php }?>"></i>
                            <i class="fa fa-star <?php if ($_smarty_tpl->getValue('event')['event_rate'] >= 2) {?>checked<?php }?>"></i>
                            <i class="fa fa-star <?php if ($_smarty_tpl->getValue('event')['event_rate'] >= 3) {?>checked<?php }?>"></i>
                            <i class="fa fa-star <?php if ($_smarty_tpl->getValue('event')['event_rate'] >= 4) {?>checked<?php }?>"></i>
                            <i class="fa fa-star <?php if ($_smarty_tpl->getValue('event')['event_rate'] >= 5) {?>checked<?php }?>"></i>
                          </span>
                          <span class="badge bg-light text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('event')['event_rate'],1);?>
</span>
                        <?php }?>
                      </div>
                    </li>
                    <!-- reviews -->
                  <?php }?>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tag",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('event')['event_category_name']);?>

                    </div>
                  </li>
                  <?php if ($_smarty_tpl->getValue('event')['event_location']) {?>
                    <!-- event location -->
                    <li>
                      <div class="about-list-item">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                        <?php echo $_smarty_tpl->getValue('event')['event_location'];?>

                      </div>
                    </li>
                    <?php if ($_smarty_tpl->getValue('system')['geolocation_enabled']) {?>
                      <div style="margin-left: -20px; margin-right: -20px;">
                        <iframe width="100%" frameborder="0" style="border:0;" src="https://www.google.com/maps/embed/v1/place?key=<?php echo $_smarty_tpl->getValue('system')['geolocation_key'];?>
&amp;q=<?php echo $_smarty_tpl->getValue('event')['event_location'];?>
&amp;language=en"></iframe>
                      </div>
                    <?php }?>
                    <!-- event location -->
                  <?php }?>
                  <li class="divider mtb10"></li>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"going",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/going"><?php echo $_smarty_tpl->getValue('event')['event_going'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Going");?>
</a>
                    </div>
                  </li>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/interested"><?php echo $_smarty_tpl->getValue('event')['event_interested'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Interested");?>
</a>
                    </div>
                  </li>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"invitation",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/invited"><?php echo $_smarty_tpl->getValue('event')['event_invited'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invited");?>
</a>
                    </div>
                  </li>
                  <?php if ($_smarty_tpl->getValue('event')['event_tickets_link'] || $_smarty_tpl->getValue('event')['event_prices']) {?>
                    <li class="divider mtb10"></li>
                    <?php if ($_smarty_tpl->getValue('event')['event_tickets_link']) {?>
                      <li>
                        <div class="about-list-item">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"link",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                          <a href="<?php echo $_smarty_tpl->getValue('event')['event_tickets_link'];?>
"><?php echo $_smarty_tpl->getValue('event')['event_tickets_link'];?>
</a>
                        </div>
                      </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('event')['event_prices']) {?>
                      <li>
                        <div class="about-list-item">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                          <?php echo nl2br((string) $_smarty_tpl->getValue('event')['event_prices'], (bool) 1);?>

                        </div>
                      </li>
                    <?php }?>
                  <?php }?>
                </ul>
              </div>
            </div>
            <!-- panel [about] -->

            <!-- custom fields [basic] -->
            <?php if ($_smarty_tpl->getValue('custom_fields')['basic']) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"info",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Info");?>
</strong>
                </div>
                <div class="card-body">
                  <ul class="about-list">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_fields')['basic'], 'custom_field');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach0DoElse = false;
?>
                      <?php if ($_smarty_tpl->getValue('custom_field')['value']) {?>
                        <li>
                          <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
</strong><br>
                          <?php if ($_smarty_tpl->getValue('custom_field')['type'] == "textbox" && $_smarty_tpl->getValue('custom_field')['is_link']) {?>
                            <a href="<?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
"><?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
</a>
                          <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "multipleselectbox") {?>
                            <?php echo $_smarty_tpl->getValue('custom_field')['value_string'];?>

                          <?php } else { ?>
                            <?php echo $_smarty_tpl->getValue('custom_field')['value'];?>

                          <?php }?>
                        </li>
                      <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                </div>
              </div>
            <?php }?>
            <!-- custom fields [basic] -->

            <!-- invite friends -->
            <?php if ($_smarty_tpl->getValue('event')['i_joined'] && $_smarty_tpl->getValue('event')['invites']) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <div class="float-end">
                    <small><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/invites"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See All");?>
</a></small>
                  </div>
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <strong><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/invites"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite Friends");?>
</a></strong>
                </div>
                <div class="card-body">
                  <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('event')['invites'], '_user');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach1DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->getValue('_user')["connection"],'_small'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                </div>
              </div>
            <?php }?>
            <!-- invite friends -->

            <!-- search -->
            <div class="card">
              <div class="card-header bg-transparent">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"search",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</strong>
              </div>
              <div class="card-body">
                <form action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/search" method="get">
                  <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
" <?php if ($_smarty_tpl->getValue('query')) {?>value="<?php echo $_smarty_tpl->getValue('query');?>
" <?php }?>>
                    <button type="submit" class="btn btn-primary">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>

                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- search -->

            <!-- photos -->
            <?php if ($_smarty_tpl->getValue('event')['photos']) {?>
              <div class="card panel-photos">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <strong><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/photos"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
</a></strong>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('event')['photos'], 'photo');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('photo')->value) {
$foreach2DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos",'_small'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- photos -->

            <!-- mini footer -->
            <?php $_smarty_tpl->renderSubTemplate('file:_footer_mini.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <!-- mini footer -->
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="<?php if ($_smarty_tpl->getValue('system')['chat_enabled'] && $_smarty_tpl->getValue('event')['chatbox_enabled']) {?>col-lg-6 order-1 order-lg-2<?php } else { ?>col-lg-8 order-1 order-lg-2<?php }?>">
            <!-- super admin alert -->
            <?php if ($_smarty_tpl->getValue('user')->_data['user_group'] < 3 && ($_smarty_tpl->getValue('event')['event_privacy'] == "secret" || $_smarty_tpl->getValue('event')['event_privacy'] == "closed") && (!$_smarty_tpl->getValue('event')['i_joined'] && !$_smarty_tpl->getValue('event')['i_admin'])) {?>
              <div class="alert alert-warning">
                <button type="button" class="btn-close float-end" data-dismiss="alert" aria-label="Close"></button>
                <div class="icon"><i class="fa fa-info-circle fa-2x"></i></div>
                <div class="text align-middle">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can access this as your account is system admin account!");?>

                </div>
              </div>
            <?php }?>
            <!-- super admin alert -->

            <?php if ($_smarty_tpl->getValue('get') == "posts_event") {?>
              <!-- event pending posts -->
              <?php if ($_smarty_tpl->getValue('event')['pending_posts'] > 0) {?>
                <div class="alert alert-light">
                  <button type="button" class="btn-close float-end" data-dismiss="alert" aria-label="Close"></button>
                  <div class="icon"><i class="fa fa-comments fa-lg"></i></div>
                  <div class="text align-middle">
                    <a href="?pending" class="alert-link">
                      <?php if ($_smarty_tpl->getValue('event')['i_admin']) {?>
                        <span class="badge bg-secondary mr5"><?php echo $_smarty_tpl->getValue('event')['pending_posts'];?>
</span><?php if ($_smarty_tpl->getValue('event')['pending_posts'] == 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("post");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("posts");
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pending needs your approval");?>

                      <?php } else { ?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You have");?>
<span class="badge bg-secondary mlr5"><?php echo $_smarty_tpl->getValue('event')['pending_posts'];?>
</span><?php if ($_smarty_tpl->getValue('event')['pending_posts'] == 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("post");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("posts");
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pending");?>

                      <?php }?>
                    </a>
                  </div>
                </div>
              <?php }?>
              <!-- event pending posts -->

              <!-- publisher -->
              <?php if ($_smarty_tpl->getValue('event')['i_joined'] && ($_smarty_tpl->getValue('event')['event_publish_enabled'] || (!$_smarty_tpl->getValue('event')['event_publish_enabled'] && $_smarty_tpl->getValue('event')['i_admin']))) {?>
                <?php if ($_smarty_tpl->getValue('event')['event_page'] && $_smarty_tpl->getValue('event')['i_admin']) {?>
                  <?php $_smarty_tpl->renderSubTemplate('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"event",'_id'=>$_smarty_tpl->getValue('event')['event_id'],'_post_as_page'=>true,'_page_id'=>$_smarty_tpl->getValue('event')['event_page']['page_id'],'_avatar'=>$_smarty_tpl->getValue('event')['event_page']['page_picture']), (int) 0, $_smarty_current_dir);
?>
                <?php } else { ?>
                  <?php $_smarty_tpl->renderSubTemplate('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"event",'_id'=>$_smarty_tpl->getValue('event')['event_id']), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
              <?php }?>
              <!-- publisher -->

              <!-- pinned post -->
              <?php if ($_smarty_tpl->getValue('pinned_post')) {?>
                <?php $_smarty_tpl->renderSubTemplate('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->getValue('pinned_post'),'_get'=>"posts_event"), (int) 0, $_smarty_current_dir);
?>
              <?php }?>
              <!-- pinned post -->

              <!-- posts -->
              <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_event",'_id'=>$_smarty_tpl->getValue('event')['event_id']), (int) 0, $_smarty_current_dir);
?>
              <!-- posts -->
            <?php } else { ?>
              <!-- posts -->
              <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>$_smarty_tpl->getValue('get'),'_id'=>$_smarty_tpl->getValue('event')['event_id'],'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending Posts")), (int) 0, $_smarty_current_dir);
?>
              <!-- posts -->
            <?php }?>
          </div>
          <!-- right panel -->

          <!-- chatbox -->
          <?php if ($_smarty_tpl->getValue('system')['chat_enabled'] && $_smarty_tpl->getValue('event')['chatbox_enabled']) {?>
            <div class="col-lg-3 order-2 order-lg-3">
              <?php $_smarty_tpl->renderSubTemplate('file:_chatbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_node_type'=>"event",'_node'=>$_smarty_tpl->getValue('event')), (int) 0, $_smarty_current_dir);
?>
            </div>
          <?php }?>
          <!-- chatbox -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "photos") {?>
          <!-- photos -->
          <div class="col-12">
            <div class="card panel-photos">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/photos"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/albums"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Albums");?>
</a>
                  </li>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('event')['photos']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('event')['photos'], 'photo');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('photo')->value) {
$foreach3DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos"), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                  <!-- see-more -->
                  <div class="alert alert-post see-more js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
" data-type='event'>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                    <div class="loader loader_small x-hidden"></div>
                  </div>
                  <!-- see-more -->
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->getValue('event')['event_title'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have photos");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- photos -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "albums") {?>
          <!-- albums -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/photos"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/albums"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Albums");?>
</a>
                  </li>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('event')['albums']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('event')['albums'], 'album');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('album')->value) {
$foreach4DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                  <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('event')['albums']) >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
" data-type='event'>
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->getValue('event')['event_title'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have albums");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- albums -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "album") {?>
          <!-- albums -->
          <div class="col-12">
            <div class="card panel-photos">
              <div class="card-header with-icon with-nav">
                <!-- back to albums -->
                <div class="float-end">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/albums" class="btn btn-md btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Back to Albums");?>

                  </a>
                </div>
                <!-- back to albums -->

                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/photos"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/albums"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Albums");?>
</a>
                  </li>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body">
                <?php $_smarty_tpl->renderSubTemplate('file:_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              </div>
            </div>
          </div>
          <!-- albums -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "videos") {?>
          <!-- videos -->
          <div class="col-12">
            <div class="card panel-videos">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/videos"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>
</a>
                  </li>
                  <?php if ($_smarty_tpl->getValue('system')['reels_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/reels"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>
</a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('event')['videos']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('event')['videos'], 'video');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach5DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_video.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                  <!-- see-more -->
                  <div class="alert alert-post see-more js_see-more" data-get="videos" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
" data-type='event'>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                    <div class="loader loader_small x-hidden"></div>
                  </div>
                  <!-- see-more -->
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->getValue('event')['event_title'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have videos");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- videos -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "reels") {?>
          <!-- reels -->
          <div class="col-12">
            <div class="card panel-videos">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"reels",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <?php if ($_smarty_tpl->getValue('system')['videos_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/videos"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>
</a>
                    </li>
                  <?php }?>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/reels"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>
</a>
                  </li>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('event')['reels']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('event')['reels'], 'video');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach6DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_video.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_is_reel'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                  <!-- see-more -->
                  <div class="alert alert-post see-more js_see-more" data-get="videos_reels" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
" data-type='event'>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                    <div class="loader loader_small x-hidden"></div>
                  </div>
                  <!-- see-more -->
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->getValue('event')['event_title'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have reels");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- reels -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "products") {?>
          <!-- products -->
          <div class="col-12">

            <!-- search -->
            <div class="card">
              <div class="card-header bg-transparent">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"search",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</strong>
              </div>
              <div class="card-body">
                <form action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_name'];?>
/search" method="get">
                  <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
">
                    <input type="hidden" name="filter" value="product">
                    <button type="submit" class="btn btn-primary">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>

                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- search -->

            <?php if ($_smarty_tpl->getValue('posts')) {?>
              <ul class="row">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach7DoElse = false;
?>
                  <?php $_smarty_tpl->renderSubTemplate('file:__feeds_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </ul>

              <!-- see-more -->
              <div class="alert alert-post see-more js_see-more" data-get="products_event" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                <div class="loader loader_small x-hidden"></div>
              </div>
              <!-- see-more -->
            <?php } else { ?>
              <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
          </div>
          <!-- products -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "reviews") {?>
          <!-- reviews -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon">
                <!-- panel title -->
                <div>
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reviews");?>

                  <?php if ($_smarty_tpl->getValue('event')['event_rate']) {?>
                    <span class="review-stars small ml5">
                      <i class="fa fa-star <?php if ($_smarty_tpl->getValue('event')['event_rate'] >= 1) {?>checked<?php }?>"></i>
                      <i class="fa fa-star <?php if ($_smarty_tpl->getValue('event')['event_rate'] >= 2) {?>checked<?php }?>"></i>
                      <i class="fa fa-star <?php if ($_smarty_tpl->getValue('event')['event_rate'] >= 3) {?>checked<?php }?>"></i>
                      <i class="fa fa-star <?php if ($_smarty_tpl->getValue('event')['event_rate'] >= 4) {?>checked<?php }?>"></i>
                      <i class="fa fa-star <?php if ($_smarty_tpl->getValue('event')['event_rate'] >= 5) {?>checked<?php }?>"></i>
                    </span>
                    <span class="badge bg-light text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('event')['event_rate'],1);?>
</span>
                  <?php }?>
                </div>
                <!-- panel title -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->getValue('event')['reviews_count'] > 0) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('event')['reviews'], '_review');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_review')->value) {
$foreach8DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_review.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                  <?php if ($_smarty_tpl->getValue('event')['reviews_count'] >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="reviews" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
" data-type="event">
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->getValue('event')['event_title'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have reviews");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- reviews -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "going" || $_smarty_tpl->getValue('view') == "interested" || $_smarty_tpl->getValue('view') == "invited" || $_smarty_tpl->getValue('view') == "invites") {?>
          <!-- members -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->getValue('view') == "going") {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/going">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Going");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->getValue('event')['event_going'];?>
</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->getValue('view') == "interested") {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/interested">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Interested");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->getValue('event')['event_interested'];?>
</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->getValue('view') == "invited") {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/invited">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invited");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->getValue('event')['event_invited'];?>
</span>
                    </a>
                  </li>
                  <?php if ($_smarty_tpl->getValue('event')['i_joined']) {?>
                    <li class="nav-item">
                      <a class="nav-link <?php if ($_smarty_tpl->getValue('view') == "invites") {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/invites">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invites");?>

                      </a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('event')['total_members'] > 0) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('event')['members'], '_user');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach9DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->getValue('_user')["connection"],'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>

                  <?php if ($_smarty_tpl->getValue('event')['total_members'] >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more js_see-more" data-get="event_<?php echo $_smarty_tpl->getValue('view');?>
" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php if ($_smarty_tpl->getValue('view') == "invites") {?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No friends to invite");?>

                    <?php } else { ?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No people available");?>

                    <?php }?>
                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- members -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "search") {?>

          <!-- left panel -->
          <div class="col-lg-4 order-2 order-lg-1">

            <!-- search -->
            <div class="card">
              <div class="card-header bg-transparent">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"search",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</strong>
              </div>
              <div class="card-body">
                <form action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/search" method="get">
                  <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
" <?php if ($_smarty_tpl->getValue('query')) {?>value="<?php echo $_smarty_tpl->getValue('query');?>
" <?php }?>>
                    <button type="submit" class="btn btn-primary">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>

                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- search -->

            <!-- mini footer -->
            <?php $_smarty_tpl->renderSubTemplate('file:_footer_mini.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <!-- mini footer -->
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-lg-8 order-1 order-lg-2">

            <!-- posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_event",'_id'=>$_smarty_tpl->getValue('event')['event_id'],'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Search Results"),'_query'=>$_smarty_tpl->getValue('query'),'_filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
            <!-- posts -->

          </div>
          <!-- right panel -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "settings") {?>
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body with-nav">
                <ul class="side-nav">
                  <li <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/settings">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Event Settings");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('sub_view') == "delete") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
/settings/delete">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Event");?>

                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="card">
              <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
                <div class="card-header with-icon">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Event Settings");?>

                </div>
                <form class="js_ajax-forms" data-url="modules/create.php?type=event&do=edit&id=<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                  <div class="card-body">
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
                            <input type="checkbox" name="is_sponsored" id="is_sponsored" <?php if ($_smarty_tpl->getValue('event')['event_is_sponsored']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                      <div id="sponsored_event" <?php if (!$_smarty_tpl->getValue('event')['event_is_sponsored']) {?>class="x-hidden" <?php }?>>
                        <div class="form-group">
                          <label class="form-label" for="sponsor_name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored By");?>
</label>
                          <input type="text" class="form-control" name="sponsor_name" id="sponsor_name" value="<?php echo $_smarty_tpl->getValue('event')['event_sponsor_name'];?>
">
                        </div>
                        <div class="form-group">
                          <label class="form-label" for="sponsor_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored URL");?>
</label>
                          <input type="text" class="form-control" name="sponsor_url" id="sponsor_url" value="<?php echo $_smarty_tpl->getValue('event')['event_sponsor_url'];?>
">
                        </div>
                      </div>
                      <div class="divider"></div>
                    <?php }?>
                    <div class="form-group">
                      <label class="form-label" for="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name Your Event");?>
</label>
                      <input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->getValue('event')['event_title'];?>
">
                    </div>
                    <div class="form-group">
                      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Start Date");?>
</label>
                      <input type="datetime-local" class="form-control" name="start_date" value="<?php echo $_smarty_tpl->getValue('event')['event_start_date'];?>
">
                    </div>
                    <div class="form-group">
                      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("End Date");?>
</label>
                      <input type="datetime-local" class="form-control" name="end_date" value="<?php echo $_smarty_tpl->getValue('event')['event_end_date'];?>
">
                    </div>
                    <?php if (!$_smarty_tpl->getValue('event')['event_page']) {?>
                      <div class="form-group">
                        <label class="form-label" for="privacy"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Privacy");?>
</label>
                        <select class="form-select" name="privacy">
                          <option <?php if ($_smarty_tpl->getValue('event')['event_privacy'] == "public") {?>selected<?php }?> value="public"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public Event");?>
</option>
                          <option <?php if ($_smarty_tpl->getValue('event')['event_privacy'] == "closed") {?>selected<?php }?> value="closed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed Event");?>
</option>
                          <option <?php if ($_smarty_tpl->getValue('event')['event_privacy'] == "secret") {?>selected<?php }?> value="secret"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secret Event");?>
</option>
                        </select>
                      </div>
                    <?php }?>
                    <div class="form-group">
                      <label class="form-label" for="category"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>
</label>
                      <select class="form-select" name="category">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach10DoElse = false;
?>
                          <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->getValue('event')['event_category']), (int) 0, $_smarty_current_dir);
?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="location"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>
</label>
                      <input type="text" class="form-control" name="location" id="location" value="<?php echo $_smarty_tpl->getValue('event')['event_location'];?>
">
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="country"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country");?>
</label>
                      <select class="form-select" name="country">
                        <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Country");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach11DoElse = false;
?>
                          <option value="<?php echo $_smarty_tpl->getValue('country')['country_id'];?>
" <?php if ($_smarty_tpl->getValue('event')['event_country'] == $_smarty_tpl->getValue('country')['country_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('country')['country_name'];?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("About");?>
</label>
                      <textarea class="form-control" name="description"><?php echo $_smarty_tpl->getValue('event')['event_description'];?>
</textarea>
                    </div>
                    <!-- custom fields -->
                    <?php if ($_smarty_tpl->getValue('custom_fields')['basic']) {?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['basic'],'_registration'=>false), (int) 0, $_smarty_current_dir);
?>
                    <?php }?>
                    <!-- custom fields -->
                    <?php if ($_smarty_tpl->getValue('event')['event_page']) {?>
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

                    <div class="divider"></div>

                    <?php if ($_smarty_tpl->getValue('system')['chat_enabled']) {?>
                      <div class="form-table-row">
                        <div class="avatar">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"chat",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
                        </div>
                        <div>
                          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Chat Box");?>
</div>
                          <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable chat box for this event");?>
</div>
                        </div>
                        <div class="text-end">
                          <label class="switch" for="chatbox_enabled">
                            <input type="checkbox" name="chatbox_enabled" id="chatbox_enabled" <?php if ($_smarty_tpl->getValue('event')['chatbox_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>

                      <div class="divider"></div>
                    <?php }?>

                    <div class="form-table-row">
                      <div>
                        <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members Can Publish Posts?");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members can publish posts or only event admin");?>
</div>
                      </div>
                      <div class="text-end">
                        <label class="switch" for="event_publish_enabled">
                          <input type="checkbox" name="event_publish_enabled" id="event_publish_enabled" <?php if ($_smarty_tpl->getValue('event')['event_publish_enabled']) {?>checked<?php }?>>
                          <span class="slider round"></span>
                        </label>
                      </div>
                    </div>

                    <div class="form-table-row">
                      <div>
                        <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post Approval");?>
</div>
                        <div class="form-text d-none d-sm-block">
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All posts must be approved by the event admin");?>
<br>
                          (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Note: Disable it will approve any pending posts");?>
)
                        </div>
                      </div>
                      <div class="text-end">
                        <label class="switch" for="event_publish_approval_enabled">
                          <input type="checkbox" name="event_publish_approval_enabled" id="event_publish_approval_enabled" <?php if ($_smarty_tpl->getValue('event')['event_publish_approval_enabled']) {?>checked<?php }?>>
                          <span class="slider round"></span>
                        </label>
                      </div>
                    </div>

                    <!-- error -->
                    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
                    <!-- error -->
                  </div>
                  <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
                  </div>
                </form>
              <?php } elseif ($_smarty_tpl->getValue('sub_view') == "delete") {?>
                <div class="card-header with-icon">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Event");?>

                </div>
                <div class="card-body">
                  <div class="alert alert-warning">
                    <div class="icon">
                      <i class="fa fa-exclamation-triangle fa-2x"></i>
                    </div>
                    <div class="text pt5">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Once you delete your event you will no longer can access it again");?>

                    </div>
                  </div>

                  <div class="text-center">
                    <button class="btn btn-danger js_delete-event" data-id="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Event");?>

                    </button>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>

        <?php } elseif ($_smarty_tpl->getValue('view') == "about") {?>
          <!-- info -->
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This event is private and you need to be invited to see its info, members and posts");?>

              </div>
            </div>
          </div>
          <!-- info -->

        <?php }?>
        <!-- view content -->
      </div>
      <!-- profile-content -->

      <!-- footer links -->
      <?php if ($_smarty_tpl->getValue('view') != '') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_footer.links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      <?php }?>
      <!-- footer links -->
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

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
