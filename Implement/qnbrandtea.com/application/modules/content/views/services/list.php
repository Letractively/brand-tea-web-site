<div class="holder">
    <div class="sub-title red">
    	<p><?php echo $this->session->userdata('ms')?$this->session->userdata('ms'):''; $this->session->unset_userdata('ms');?></p>
    </div>

    <div class="action"><?php echo anchor('content/services/edit', $this->lang->line('edit'), 'class="button edit"'); ?></div>
    <div style="clear:both"></div>
</div>
<br>
<div class="holder">
    <h3><?php echo $this->lang->line('title'); ?>: <?php echo $services->row()->cont_name; ?></h3>
    <p><?php echo $services->row()->cont_description; ?></p>
    <br>
</div>