<?php /* Smarty version 2.6.29, created on 2019-01-15 05:07:06
         compiled from cache/include/InlineEditing/EmployeesEditViewemail1.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['email1']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['email1']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['email1']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['email1']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['email1']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >