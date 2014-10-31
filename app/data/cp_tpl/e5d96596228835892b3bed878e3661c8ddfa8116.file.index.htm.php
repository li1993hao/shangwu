<?php /* Smarty version Smarty-3.1.14, created on 2014-10-31 14:16:25
         compiled from "app/tpl/index/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:52852539454532939196963-99049109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5d96596228835892b3bed878e3661c8ddfa8116' => 
    array (
      0 => 'app/tpl/index/index.htm',
      1 => 1414735530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52852539454532939196963-99049109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'recNews' => 0,
    'news' => 0,
    'corpMsg' => 0,
    'jobFairMsg' => 0,
    'interMsg' => 0,
    'publicitycolumn' => 0,
    'jobPlan' => 0,
    'jobGuid' => 0,
    'empStar' => 0,
    'jobGuid1' => 0,
    'jobGuid2' => 0,
    'jobGuid3' => 0,
    'employmentpolicy' => 0,
    'bulletin' => 0,
    'ww1' => 0,
    'ww2' => 0,
    'ww3' => 0,
    'silist' => 0,
    'entreGuid' => 0,
    'jobNotice' => 0,
    'jobReuest' => 0,
    'jobAct' => 0,
    'softList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545329398d06e9_74703608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545329398d06e9_74703608')) {function content_545329398d06e9_74703608($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/shangwu/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/shangwu/been/Smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_getdate')) include '/Users/haoli/Desktop/www/shangwu/been/View/plugins/function.getdate.php';
?><!DOCTYPE HTML>
<html>
<!-- <![endif]-->


<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/reset.css?v=2.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/headAndfoot.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/index/index.css" />

    <title>天津商务职业学院就业指导中心</title>

    <script type="text/javascript">
        var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";
    </script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/DOMAssistantCompressed-2.7.4.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/ie-css3.js"></script>
    <![endif]-->


</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="carousel">
    <div class="carousel_scroll_wrap">
        <div class="carousel_content">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['name'] = 'recnews';
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recNews']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total']);
?>
            <div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['ji_id'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['pic_link'])===null||$tmp==='' ? 'noimg.jpg' : $tmp);?>
"/></a>
            </div>
            <?php endfor; endif; ?>
        </div>
    </div>

    <div class="carousel_info">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['name'] = 'recnews';
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recNews']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total']);
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']==0){?>
        <div class="carousel_mid">
            <div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['ji_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['ji_title'];?>
</a>
            </div>
        </div>
        <?php }else{ ?>
        <div class="carousel_mid" style="display: none">
            <div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['ji_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['ji_title'];?>
</a>
            </div>
        </div>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['recnews']['last']){?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recNews']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
        <div class="carousel_mid" style="display: none">
            <div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['ji_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['ji_title'];?>
</a>
            </div>
        </div>
        <?php endfor; endif; ?>
        <?php }?>

        <?php }?>
        <?php endfor; endif; ?>
        <div class="carousel_control">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['name'] = 'recnews';
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recNews']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total']);
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['recnews']['last']){?>
            <div class="carousel_point carousel_active_point">

            </div>
            <?php }else{ ?>
            <div class="carousel_point carousel_normal_point">

            </div>
            <?php }?>
            <?php endfor; endif; ?>
        </div>
    </div>
</div>
<!-- 招聘日历-->
<div id="jobCalendar" >
    <div id="jobCalendar_top">
        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg/calendar"><img style="padding-top: 59px;padding-left: 291px;cursor: pointer" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/index/more.png"/></a>
    </div>

    <div id="jobCalendar_content">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
        <div class="jobCalendar_content_title">

            <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_date'];?>
 第一教学楼     <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_name'],9,'…');?>
</a>

        </div>
        <?php endfor; endif; ?>
    </div>

</div>
<div class="middle">


<!--信息展示区-->
<div class="middle_main clearfix" >

<!--左边-->
<div class="middle_left">
<div class="category_info">
    <div class="category_nav">
        <ul>
            <li>
                <a class="category_nav_active" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpindex">招聘信息</a>
            </li>
            <li>
                <a class="category_nav_normal" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg">招聘会信息</a>
            </li>
            <li>
                <a class="category_nav_normal" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/internindex/">基层招聘信息</a>
            </li>
            <li>
                <a class="category_nav_normal" href="javascript:void(0)">一站式信息</a>
            </li>

        </ul>
    </div>

    <div class="category_list clearfix">
        <!--招聘信息  ok-->
        <ul>
            <div class="more_info1"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpindex">[更多]</a>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['corpMsg']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <li>
                <div>
                        <?php if ($_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_isup']!=''){?>
                    <div class="top">
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_name'],35,'…',true);?>

                        </a>
                        </div>
                        <?php }else{ ?>
                    <div class="item">
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_name'],35,'…',true);?>

                        </a>
                        </div>
                        <?php }?>

                                            <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_date'],"%Y-%m-%d");?>

                                            </span>
                </div>
                <div>
                    <?php echo (($tmp = @smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_content'])),110,'…',true))===null||$tmp==='' ? "暂无介绍~" : $tmp);?>

                </div>
            </li>
            <?php endfor; endif; ?>

        </ul>
        <!--招聘会信息 0k-->
        <ul>
            <div class="more_info1"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg">[更多]</a>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobFairMsg']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <li>
                <div>
                        <?php if ($_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_isup']!=''){?>
                    <div class="top">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_name'],34,'…',true);?>

                        </a>
                        </div>
                        <?php }else{ ?>
                    <div class="item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_name'],34,'…',true);?>

                        </a>
                        </div>
                        <?php }?>

                                            <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_opentime'],"%Y-%m-%d %H:%M");?>

                                                    <?php echo smarty_function_getdate(array('format'=>"cnWeek",'date'=>$_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_opentime']),$_smarty_tpl);?>

                                            </span>
                </div>
                <div>
                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_addr'],28,'…',true);?>

                </div>
            </li>
            <?php endfor; endif; ?>

        </ul>
        <!--基层招聘信息 ok-->
        <ul>
            <div class="more_info1"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/internindex/">[更多]</a>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['interMsg']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <li>
                <div>
                        <?php if ($_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_isup']!=''){?>
                        <div class="top">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/interndetail/id/<?php echo $_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_name'],35,'…',true);?>

                        </a>
                            </div>
                        <?php }else{ ?>
                    <div class="item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/interndetail/id/<?php echo $_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_name'],35,'…',true);?>

                        </a>
                    </div>
                        <?php }?>

                                            <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_date'],"%Y-%m-%d");?>

                                            </span>
                </div>
                <div>
                    <?php echo (($tmp = @smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_content'])),110,'…',true))===null||$tmp==='' ? "暂无介绍~" : $tmp);?>

                </div>
            </li>
            <?php endfor; endif; ?>

        </ul>
        <!--一站式信息-->
        <ul>

           <iframe id="mframe" style="border: none;width: 100%; height: 478px" onload="iFrameHeight()" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/onesite/index.html">
               </iframe>
        </ul>
    </div>
</div>
<div class="onsite">
    <img usemap="#onesite_map" height="131px" width="635px" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/onesite.jpg"/>
</div>
<map id="onesite_map" name="onesite_map">
    <area shape="rect" coords="399,56,515,82" target="_blank" href ="http://tjbys.ncss.org.cn/login" alt="学生登录" />
    <area shape="rect" coords="524,57,640,82" target="_blank" href ="http://tjbys.ncss.org.cn/rec/login" alt="单位登录" />
    <area shape="rect" coords="402,98,496,120"  href ="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/onesite/xszd.doc" alt="学生指导手册" />
    <area shape="rect" coords="523,99,640,117" href ="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/onesite/dwzd.doc" alt="用人单位指导手册" />
</map>
<?php if ($_smarty_tpl->tpl_vars['publicitycolumn']->value['stop']==1){?>
<div class="focus_map">
    <a href="<?php echo $_smarty_tpl->tpl_vars['publicitycolumn']->value['pc_url'];?>
" target="_blank"><img height="98px" width="637px" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['publicitycolumn']->value['pic_link'];?>
"/></a>
</div>
<?php }?>



<div class="category_info2">
    <div class="category_nav2">
        <ul>
            <li>
                <a class="category_nav2_active" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobPlan">职业生涯规划</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobGuid">求职指导</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Employmentpolicy/index">就业政策</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Activityjobbulletin/index">工作简报</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/index">西部就业</a>
            </li>
        </ul>
    </div>
    <div class="category_list clearfix">
        <!--职业生涯规划 ok-->
        <ul>
            <div class="more_info2"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobPlan">[更多]</a>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobPlan']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
            <li>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_isup']!=''){?>
                    <div class="top">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'],35,'…',true);?>

                        </a>
                    </div>
                    <?php }else{ ?>
                    <div class="item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'],35,'…',true);?>

                        </a>
                    </div>
                    <?php }?>

                                            <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_date'],"%Y-%m-%d");?>

                                            </span>
                </div>
                <div>
                    <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_content'])),110,'…',true);?>

                </div>
            </li>
            <?php endfor; endif; ?>

        </ul>
        <!--求职指导-->
        <ul id="jobGuid">
            <div class="more_info2"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobGuid" style="color: #378ea1">[更多]</a>
            </div>
            <!--<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobGuid']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>-->
            <!--<li>-->
                <!--<div>-->
                    <!--<div>-->
                        <!--<?php if ($_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_isup']!=''){?>-->
                        <!--<a style="color: #ff0000" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">-->
                            <!--[顶]<?php echo $_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'];?>
-->
                        <!--</a>-->
                        <!--<?php }else{ ?>-->
                        <!--<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['empStar']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
">-->
                            <!--<?php echo $_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'];?>
-->
                        <!--</a>-->
                        <!--<?php }?>-->
                    <!--</div>-->
                                            <!--<span>-->
                                                <!--<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_date'],"%Y-%m-%d");?>
-->
                                            <!--</span>-->
                <!--</div>-->
                <!--<div>-->
                    <!--<?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_content'])),110,'…',true);?>
-->
                <!--</div>-->
            <!--</li>-->
            <!--<?php endfor; endif; ?>-->
            <div class="jobGuid1">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobGuid1']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['n']['index']==0){?>
                        <?php if ($_smarty_tpl->tpl_vars['jobGuid1']->value[0]['pic_link']!=''){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['jobGuid1']->value[0]['pic_link'];?>
"/>

                         <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/index/morentupian.png"/>

                        <?php }?>
                        <div class="jobGuidmask"><a style="color: #ffffff"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobGuid1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobGuid1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'],13,'…',true);?>

                        </a></div>
                    <?php }else{ ?>
                    <p><a  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobGuid1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobGuid1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'],13,'…',true);?>

                    </a></p>
                    <?php }?>
                <?php endfor; endif; ?>
            </div>
            <div class="jobGuid2">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobGuid2']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['n']['index']==0){?>
                    <?php if ($_smarty_tpl->tpl_vars['jobGuid2']->value[0]['pic_link']!=''){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['jobGuid2']->value[0]['pic_link'];?>
"/>

                    <?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/index/morentupian.png"/>

                    <?php }?>
                <div class="jobGuidmask"><a style="color: #ffffff" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobGuid1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobGuid1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'],13,'…',true);?>

                </a></div>
                <?php }else{ ?>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobGuid2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['jobGuid2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'];?>

                </a></p>
                <?php }?>
                <?php endfor; endif; ?>
            </div>
            <div class="jobGuid3">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobGuid3']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['n']['index']==0){?>
                    <?php if ($_smarty_tpl->tpl_vars['jobGuid3']->value[0]['pic_link']!=''){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['jobGuid3']->value[0]['pic_link'];?>
"/>

                    <?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/index/morentupian.png"/>

                    <?php }?>
                <div class="jobGuidmask"><a style="color: #ffffff"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobGuid1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobGuid1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'],13,'…',true);?>

                </a></div>
                <?php }else{ ?>
                <p><a  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobGuid3']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['jobGuid3']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'];?>

                </a></p>
                <?php }?>
                <?php endfor; endif; ?>
            </div>

        </ul>
        <!--就业政策-->
        <ul>
            <div class="more_info2"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Employmentpolicy/index">[更多]</a>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['employmentpolicy']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
            <li>
                <div>
                        <?php if ($_smarty_tpl->tpl_vars['employmentpolicy']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ep_istop']!=''){?>
                            <div class="top">

                            <a  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Employmentpolicy/detail/id/<?php echo $_smarty_tpl->tpl_vars['employmentpolicy']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ep_id'];?>
">
                                   <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['employmentpolicy']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ep_title'],35,'…',true);?>

                                </a>
                            </div>

                    <?php }else{ ?>
                            <div class="item">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Employmentpolicy/detail/id/<?php echo $_smarty_tpl->tpl_vars['employmentpolicy']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ep_id'];?>
">
                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['employmentpolicy']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ep_title'],35,'…',true);?>

                                </a>
                                </div>
                     <?php }?>
                 <span>
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['employmentpolicy']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ep_create'],"%Y-%m-%d");?>

                    </span>
                </div>
                <div>
                    <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['employmentpolicy']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ep_content'])),110,'…',true);?>

                </div>
            </li>
            <?php endfor; endif; ?>

        </ul>
        <!--工作简报-->
        <ul>
            <div class="more_info2"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Activityjobbulletin/index">[更多]</a>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['bulletin']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <li>
                <div>
                    <div class="item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Activityjobbulletin/detail/id/<?php echo $_smarty_tpl->tpl_vars['bulletin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aa_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['bulletin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aa_title'],35,'…',true);?>

                        </a>
                    </div>
                                            <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['bulletin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aa_time'],"%Y-%m-%d");?>

                                            </span>
                </div>
                <div>
                    <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bulletin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aa_content'])),110,'…',true);?>

                </div>
            </li>
            <?php endfor; endif; ?>

        </ul>
        <!-- 西部就业-->
        <ul id="westGuid">
            <div class="more_info2"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/index" style="color: #378ea1">[更多]</a>
            </div>
            <div >
                <!-- 工作动态-->
                <div class="jobGuid1">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ww1']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['n']['index']==0){?>
                    <?php if ($_smarty_tpl->tpl_vars['ww1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link']!=''){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['ww1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link'];?>
"/>

                    <?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/index/morentupian.png"/>

                    <?php }?>
                    <div class="jobGuidmask"><a style="color: #ffffff"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['ww1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ww1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'],13,'…',true);?>

                    </a></div>
                    <?php }else{ ?>
                    <p><a  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['ww1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ww1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'],13,'…',true);?>

                    </a></p>
                    <?php }?>
                    <?php endfor; endif; ?>

                </div>
                <!-- 就业政策-->
                <div class="jobGuid2">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ww2']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['n']['index']==0){?>
                    <?php if ($_smarty_tpl->tpl_vars['ww2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link']!=''){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['ww2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link'];?>
"/>

                    <?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/index/morentupian.png"/>

                    <?php }?>
                    <div class="jobGuidmask"><a style="color: #ffffff"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['ww2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ww2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'],13,'…',true);?>

                    </a></div>
                    <?php }else{ ?>
                    <p><a  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['ww2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ww2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'],13,'…',true);?>

                    </a></p>
                    <?php }?>
                    <?php endfor; endif; ?>

                </div>
                <!-- 典型人物-->
                <div class="jobGuid3">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ww3']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['n']['index']==0){?>
                    <?php if ($_smarty_tpl->tpl_vars['ww3']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link']!=''){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['ww3']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link'];?>
"/>

                    <?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/index/morentupian.png"/>

                    <?php }?>
                    <div class="jobGuidmask"><a style="color: #ffffff"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['ww3']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ww3']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'],13,'…',true);?>

                    </a></div>
                    <?php }else{ ?>
                    <p><a  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['ww3']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ww3']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'],13,'…',true);?>

                    </a></p>
                    <?php }?>
                    <?php endfor; endif; ?>
                </div>

            </div>


        </ul>
    </div>
</div>
<div class="category_info3">
    <div class="category_nav3">
        <ul>
            <li>
                <a class="category_nav3_active" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/entreGuid">创业指导</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobNotice">创业政策</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/empStar">创业孵化</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/sourceinformation/detail/id/<?php echo $_smarty_tpl->tpl_vars['silist']->value['list'][1]['si_id'];?>
/type/1">创业申请</a>
            </li>
        </ul>
    </div>
    <div class="category_list clearfix">
        <!--创业指导-->
        <ul>
            <div class="more_info3"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/entreGuid">[更多]</a>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['entreGuid']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
            <li>
                <div>


                    <div class="item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['entreGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['entreGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'],35,'…',true);?>

                        </a>
                        </div>
                                         <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entreGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_date'],"%Y-%m-%d");?>

                                            </span>
                </div>
                <div>
                    <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['entreGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_content'])),110,'…',true);?>

                </div>
            </li>
            <?php endfor; endif; ?>

        </ul>

        <!--创业政策-->
        <ul>
            <div class="more_info3"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobNotice">[更多]</a>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobNotice']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
            <li>
                <div>

                    <div class="item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'],35,'…',true);?>

                        </a>
                        </div>
                                         <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_date'],"%Y-%m-%d");?>

                                            </span>
                </div>
                <div>
                    <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_content'])),110,'…',true);?>

                </div>
            </li>
            <?php endfor; endif; ?>

        </ul>
        <!--创业孵化--->
        <ul>
            <div class="more_info3"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/empStar">[更多]</a>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['empStar']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <li>
                <div>

                    <div class="item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['empStar']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['empStar']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],35,'…',true);?>

                        </a>
                        </div>
                        <span>
                            <?php echo $_smarty_tpl->tpl_vars['empStar']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_date'];?>

                        </span>
                </div>
                <div>
                    <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['empStar']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_content'])),110,'…',true);?>

                </div>
            </li>
            <?php endfor; endif; ?>
        </ul>
        <!--创业申请-->

        <ul>
            <div class="more_info3"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobReuest">[更多]</a>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobReuest']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <li>
                <div>

                    <div class="item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobReuest']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobReuest']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],35,'…',true);?>

                        </a>
                    </div>
                        <span>
                            <?php echo $_smarty_tpl->tpl_vars['jobReuest']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_date'];?>

                        </span>
                </div>
                <div>
                    <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['jobReuest']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_content'])),110,'…',true);?>

                </div>
            </li>
            <?php endfor; endif; ?>
        </ul>

    </div>
</div>

</div>

<!--右边-->
<div class="middle_right">
    <div class="right_top block_style">
        <div class="right_top_nav">
            <div class="category_nav4_active">通知公告</div>
            <div>工作动态</div>
        </div>
        <!--通知公告-->
        <ul>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobNotice']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <!--item-->
            <li>
                <!--title-->
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_isup']!=''){?>
                    <div class="top">
                    <a  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
" target="_blank">
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],20,'…',true);?>

                    </a>
                        </div>
                    <?php }else{ ?>
                    <div class="item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
" target="_blank">
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],20,'…',true);?>

                    </a>
                        </div>
                    <?php }?>

                </div>
                <!--time-->
                <div>
                    <?php echo $_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_date'];?>

                </div>
                <!--info-->
                <div>&nbsp&nbsp&nbsp&nbsp
                    <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_content'])),40,'…',true);?>

                </div>
            </li>
            <?php endfor; endif; ?>

            <div style="margin-top: 5px;border-bottom: none;text-align: right;"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobNotice" target="_blank">[更多]</a>
            </div>
        </ul>
        <!--工作动态-->
        <ul>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobAct']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <!--item-->
            <!--item-->
            <li>
                <!--title-->
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_isup']!=''){?>
                    <div class="top">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
" target="_blank">
                       <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],20,'…',true);?>

                    </a>
                        </div>
                    <?php }else{ ?>
                    <div class="item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
" target="_blank">
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],20,'…',true);?>

                    </a>
                        </div>
                    <?php }?>

                </div>
                <!--time-->
                <div>
                    <?php echo $_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_date'];?>

                </div>
                <!--info-->
                <div>&nbsp&nbsp&nbsp&nbsp
                    <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_content'])),40,'…',true);?>

                </div>
            </li>
            <?php endfor; endif; ?>
            <div style="margin-top: 5px;border-bottom: none;text-align: right;"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobAct" target="_blank">[更多]</a>
            </div>
        </ul>

    </div>

    <!--<div class="right_mid block_style">-->
    <!--<div></div>-->
    <!--&lt;!&ndash;登录&ndash;&gt;-->
    <!--<div>-->
    <!--<div>学生登录</div>-->
    <!--<div>企业登录</div>-->
    <!--</div>-->
    <!--<div><a href="#">学生指导手册</a>-->
    <!--</div>-->
    <!--<div><a href="#">用人单位指导手册</a>-->
    <!--</div>-->
    <!--<div>-->
    <!--<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['name'] = 'sl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['softList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total']);
?>-->
    <!--<div>-->
    <!--<a href="<?php echo $_smarty_tpl->tpl_vars['softList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['sm_url'];?>
" target="_blank">-->
    <!--<img class="software-img" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['softList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['pic_link'])===null||$tmp==='' ? "noimg.jpg" : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['softList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['pic_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['softList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['sm_title'];?>
" />-->
    <!--</a>-->
    <!--</div>-->
    <!--<?php endfor; endif; ?>-->
    <!--<div style="text-align: right"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/friendlink/getpm" style="font-size: 16px; color: #b2b2b2; margin-right: 20px;">[更多]</a></div>-->
    <!--</div>-->
    <!--</div>-->
    <div id="feedback" class="right_feedback block_style clearfix">
        <div>意见反馈</div>
        <div id="friendly">
            <div>界面友好性：</div>
            <div class="star star_on"></div>
            <div class="star star_on"></div>
            <div class="star star_on"></div>
            <div class="star star_off"></div>
            <div class="star star_off"></div>
            <span>还行</span>
        </div>
        <div id="effective">
            <div>信息有效性：</div>
            <div class="star star_on"></div>
            <div class="star star_on"></div>
            <div class="star star_on"></div>
            <div class="star star_off"></div>
            <div class="star star_off"></div>
            <span>还行</span>
        </div>
        <div id="helpful">
            <div>功能实用性：</div>
            <div class="star star_on"></div>
            <div class="star star_on"></div>
            <div class="star star_on"></div>
            <div class="star star_off"></div>
            <div class="star star_off"></div>
            <span>还行</span>
        </div>
        <div>
            <div>建议标题:</div>
        </div>
        <div>
            <input type="text" id="feedback_title" name="feedback_title"></textarea>
        </div>
        <div>
            <div>建议详情:</div>
        </div>
        <div>
            <textarea id="feedback_text" name="feedback_text"></textarea>
        </div>
        <div id="feed_submit">提交</div>
    </div>
    <div class="right_map block_style">
        <div>出行路线</div>
        <div id="baidu_map">
        </div>
    </div>
</div>
</div>

</div>
<div class="fast_way block_style">
    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/friendlink/getpm">快速通道</a></div>
    <ul>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['name'] = 'sl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['softList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total']);
?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['softList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['sm_url'];?>
" target="_blank">
                <img class="software-img" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['softList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['pic_link'])===null||$tmp==='' ? "noimg.jpg" : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['softList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['pic_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['softList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['sm_title'];?>
" />
            </a>
        </li>
        <?php endfor; endif; ?>

    </ul>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
    var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";


</script>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/am.min.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=A03339d9c32ed4f0920276cd3d9b0474"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/index/index.js"></script>

</body>

</html><?php }} ?>