<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script>
  $( document ).ready(function() {
    $('.datepicker').datepicker()
});
</script>
<div class="header-st mb-4">
			<div class="container">
				<div class="row">
          <div class="col-md-12">
            <h3>
              <?php echo lang('core button create'); ?>
            </h3>
          </div>
        </div>
  </div>
</div>
<script>
  $( document ).ready(function() {
    
    $(document).on("click","#button_submit",function(event) { 
      
      var state = $('#accept').prop('checked');

      if (state != true) {
        $('#accept_alert').show();
        event.preventDefault();
      }
      
    });
    
    $(document).on("click","#accept",function(event) { $('#accept_alert').hide(); });
  });
</script>
<div class="container">
<div class="row mt-5 mb-5">
  <div class="col-md-6 offset-md-3">
    <div class="card">
      <div class="card-body">
        <?php echo form_open('', array('role'=>'form')); ?>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button username'); ?></label>
            <?php echo form_input(array('name'=>'username', 'value'=>set_value('username', (isset($user['username']) ? $user['username'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button email'); ?></label>
            <?php echo form_input(array('name'=>'email', 'value'=>set_value('email', (isset($user['email']) ? $user['email'] : '')), 'class'=>'form-control', 'type'=>'email')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button first_name'); ?></label>
            <?php echo form_input(array('name'=>'first_name', 'value'=>set_value('first_name', (isset($user['first_name']) ? $user['first_name'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button last_name'); ?></label>
            <?php echo form_input(array('name'=>'last_name', 'value'=>set_value('last_name', (isset($user['last_name']) ? $user['last_name'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1"><?php echo lang('core button language'); ?></label>
             <?php echo form_dropdown('language', $this->languages, (isset($user['language']) ? $user['language'] : $this->config->item('language')), 'id="language" class="form-control"'); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button password'); ?></label>
            <?php echo form_password(array('name'=>'password', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button re_password'); ?></label>
            <?php echo form_password(array('name'=>'password_repeat', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
          </div>
          <?php /*
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button bday'); ?></label>
            <?php echo form_input(array('name'=>'bday', 'value'=>'', 'class'=>'form-control datepicker', 'autocomplete'=>'off')); ?>
          </div> 
           */ ?>
            <div class="form-group col-md-12">
                <label for=""><?php echo lang('core text agreement_1'); ?> <a href="https://bankaero.com/agreement" target="_blank"><?php echo lang('core button terms'); ?></a> <?php echo lang('core text agreement_2'); ?> <a target="_blank" href="https://bankaero.com/privacy"><?php echo lang('core button privacy'); ?></a></label>
            <input type="checkbox" name="accept" id="accept" value="accept" />
          </div>
          <div class="form-group col-md-12 alert alert-danger" role="alert" style="display:none" id="accept_alert">
            The Terms & Conditions and Privacy Policy must be accepted!
          </div>
        </div>
          <div class="row">
            <div class="col-md-12">
                <div class="g-recaptcha" data-sitekey="<?php echo $this->settings->google_site_key; ?>"></div>
              </div>
            <div class="col-md-6">
              <a href="<?php echo base_url('login'); ?>"><?php echo lang('core button back_login'); ?></a></br>
            </div>
            <div class="col-md-6 text-right">
              <button type="submit" class="btn btn-success" id="button_submit"><?php echo lang('core button register'); ?></button>
            </div>
          </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
</div>