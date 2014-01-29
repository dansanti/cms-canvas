<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" /> 
        <?php echo $this->template->metadata() ?>

        <!-- CSS FILES -->
        <link rel="stylesheet" type="text/css" href="<?php echo theme_url('assets/css/reset.css');  ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo theme_url('assets/css/style.css');  ?>" />

        <!-- Controller Defined Stylesheets -->
        <?php echo $this->template->stylesheets() ?>

        <script type="text/javascript">
            var ADMIN_PATH = '<?php echo ADMIN_PATH; ?>';
            var ADMIN_URL = '<?php echo site_url(ADMIN_PATH); ?>';
            var THEME_URL = '<?php echo theme_url(); ?>';
        </script>

        <!-- Controller Defined JS Files -->
        <?php echo $this->template->javascripts() ?>

        <script type="text/javascript" src="<?php echo theme_url('assets/js/helpers.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo theme_url('assets/js/superfish.js'); ?>"></script>

        <!-- Google Analytics -->
        <?php echo $this->template->analytics() ?>
    </head>


    <body>
        <div id="container">

            <!-- Header -->
            <div id="header">
                <div class="div1">
                    <div class="div2"><span id="site_name"><?php echo $this->settings->site_name ?></span> <span style="vertical-align: middle; display: inline-block; font-size:13px;">| ADMINISTRATION</span></div>
                    <?php if ($this->secure->is_auth()): ?>
                        <div class="div3">
                            <a id="current_user" href="javascript:void(0);">
                                <?php $Current_user = $this->secure->get_current_user(); ?>
                                <?php echo $Current_user->full_name(); ?>
                                <img src="<?php echo $Current_user->portrait(30); ?>" style="margin: 0 2px 0 5px; vertical-align: middle;" />
                                <span class="down_arrow"></span>
                                <span id="current_user_box_pointer" class="box_pointer"></span>
                                <span id="current_user_box_pointer_white" class="box_pointer"></span>
                            </a>
                            <div id="current_user_dropdown">
                                <div id="current_user_info">
                                    <div class="fleft" id="current_user_picture">
                                        <img src="<?php echo $Current_user->portrait(96); ?>" />
                                    </div>
                                    <div class="fleft" id="current_user_detail">
                                        <div id="current_user_name"><?php echo $Current_user->full_name(); ?></div>
                                        <div><?php echo $Current_user->email; ?></div>
                                        <a class="blue_button" href="#">View Profile</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div id="action_bar">
                                    <a class="button fleft" href="<?php echo site_url(ADMIN_PATH . '/users/edit/' . $Current_user->id); ?>"><span>Account</span></a>
                                    <a class="button fright" href="<?php echo site_url('/users/logout'); ?>"><span>Logout</span></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if ($this->secure->is_auth()): ?>
                    <div id="menu">

                        <?php echo theme_partial('navigation'); ?>

                        <ul class="right">
                            <li id="visit_site"><a class="top" onClick="window.name = 'ee_admin'" target="ee_cms" href="<?php echo site_url(); ?>"><img src="<?php echo theme_url('assets/images/browser_window.png'); ?>" alt="" style="vertical-align:middle; margin-right: 3px;" /> Visit Site</a></li>
                        </ul>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#menu > ul').superfish({
                                    hoverClass	 : 'sfHover',
                                    pathClass	 : 'overideThisToUse',
                                    delay		 : 0,
                                    animation	 : {height: 'show'},
                                    speed		 : 'normal',
                                    autoArrows   : false,
                                    dropShadows  : false, 
                                    disableHI	 : false, /* set to true to disable hoverIntent detection */
                                    onInit		 : function(){},
                                    onBeforeShow : function(){},
                                    onShow		 : function(){},
                                    onHide		 : function(){}
                                });
                                
                                $('#menu > ul').css('display', 'block');
                            });
                        </script>
                    </div>
                <?php endif; ?>
            </div>
