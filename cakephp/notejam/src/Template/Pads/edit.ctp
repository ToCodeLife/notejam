<?php $this->assign('title', 'Edit ' .  $pad->name); ?>

<?php echo $this->Form->create($pad, ['class' => 'pad']); ?>
    <?php echo $this->Form->input('name'); ?>
    <?php echo $this->Form->submit('Save'); ?>
<?php echo $this->Form->end(); ?>
