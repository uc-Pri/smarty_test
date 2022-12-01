<?php
/* Smarty version 3.1.45, created on 2022-12-01 11:24:31
  from 'C:\xampp\htdocs\smarty-3.1.45\Smarty_test\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_638880dfeeb6a0_97267580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e737a8480b1723ad576ff90ac0bd5bd43bc0dd20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-3.1.45\\Smarty_test\\templates\\test.tpl',
      1 => 1669890270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638880dfeeb6a0_97267580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.45\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php ob_start();
echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['num']->value)."%2"),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == '0') {?>
    even
    <?php } else { ?>
    odd
    <?php }?>

</body>

</html><?php }
}
