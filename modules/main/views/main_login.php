<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<link rel="stylesheet" href="<?= base_url()?>./assets/bootstrap/css/bootstrap.min.css" />
<style type="text/css">
    #login_message:empty{
        display:none;
    }
</style>
<?php
    echo form_open('main/login');
    echo form_label('{{ language:Identity }}');
    echo form_input('identity', $identity).br();
    echo form_label('{{ language:Password }}');
    echo form_password('password').br();
    echo form_submit('login', $login_caption, 'class="btn btn-primary"');
	echo '&nbsp';
	echo anchor(site_url('main/register'), $register_caption, array('class'=>'btn'));
    echo form_close();
	if(count($providers)>0){
		echo '{{ language:Or Login with }}:'.br();
		foreach($providers as $provider=>$connected){
			echo anchor(site_url('main/hauth/login/'.$provider), '<img src="'.base_url('modules/main/assets/third_party/'.$provider.'.png').'" />');
		}
	}
?>
<div id="login_message"><?php echo isset($message)?$message:''; ?></div>
