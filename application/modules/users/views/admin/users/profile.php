<div class="box">
    <div class="heading">
        <h1><img alt="" src="<?php echo theme_url('assets/images/user.png'); ?>"> User Profile</h1>

        <div class="buttons">
            <a class="button" href="<?php echo site_url(ADMIN_PATH . '/users/edit/' . $User->id); ?>"><span>Edit</span></a>
        </div>
    </div>
    <div id="profile" class="content">
        <div class="fleft" style="padding-top: 10px">
            <img src="<?php echo $User->portrait(200); ?>" />
        </div>

        <div style="margin-left: 220px;">
            <div id="profile_header">
                <h2 class="heading"><?php echo $User->full_name(); ?></h2>
                <h3><?php echo $User->groups->get()->name; ?></h3>
            </div>

            <div class="tabs">
                <ul class="htabs">
                    <li><a href="#profile-fields-tab">Profile</a></li>
                    <li><a href="#detail-tab">Detail</a></li>
                </ul>

                <div id="profile-fields-tab">
                    <div>
                        <div class="field_spacing">
                            <?php echo form_label('Email:', 'email'); ?>
                            <a href="#"><?php echo $User->email; ?></a>
                        </div>

                        <div class="field_spacing">
                            <?php echo form_label('First Name:', 'first_name'); ?>
                            <?php echo $User->first_name; ?>
                        </div>

                        <div class="field_spacing">
                            <?php echo form_label('Last Name:', 'last_name'); ?>
                            <?php echo $User->last_name; ?>
                        </div>

                        <div class="field_spacing">
                            <?php echo form_label('Country:', 'country'); ?>
                            <?php echo $User->country; ?>
                        </div>

                        <div class="field_spacing">
                            <?php echo form_label('Address:', 'address'); ?>
                            <?php echo $User->address; ?>
                        </div>

                        <div class="field_spacing">
                            <?php echo form_label('Address 2:', 'address2'); ?>
                            <?php echo $User->address2; ?>
                        </div>

                        <div class="field_spacing">
                            <?php echo form_label('City:', 'city'); ?>
                            <?php echo $User->city; ?>
                        </div>

                        <div class="field_spacing">
                            <?php echo form_label('State/Province:', 'state'); ?>
                            <?php echo $User->state; ?>
                        </div>

                        <div class="field_spacing">
                            <?php echo form_label('Zip:', 'zip'); ?>
                            <?php echo $User->zip; ?>
                        </div>

                        <div class="field_spacing">
                            <?php echo form_label('Phone:', 'phone'); ?>
                            <?php echo $User->phone; ?>
                        </div>
                    </div>
                </div>

                <div id="detail-tab">
                    <div class="field_spacing">
                        <?php echo form_label('Last Login:', 'last_login'); ?>
                        <?php echo $User->last_login; ?>
                    </div>
                    <div class="field_spacing">
                        <?php echo form_label('Date Joined:', 'date_joined'); ?>
                        <?php echo $User->created_date; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="clear"></div>

    </div>
</div>

<?php js_start(); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $( ".tabs" ).tabs();
    });
</script>
<?php js_end(); ?>