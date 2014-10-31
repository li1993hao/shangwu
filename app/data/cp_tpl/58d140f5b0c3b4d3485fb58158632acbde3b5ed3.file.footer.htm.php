<?php /* Smarty version Smarty-3.1.14, created on 2014-10-31 14:16:25
         compiled from "app/tpl/footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:214746677554532939998585-88392101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58d140f5b0c3b4d3485fb58158632acbde3b5ed3' => 
    array (
      0 => 'app/tpl/footer.htm',
      1 => 1414478929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214746677554532939998585-88392101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_545329399acc43_00523148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545329399acc43_00523148')) {function content_545329399acc43_00523148($_smarty_tpl) {?><?php if (!is_callable('smarty_function_visitelog')) include '/Users/haoli/Desktop/www/shangwu/been/View/plugins/function.visitelog.php';
?>

  <div class="footer" id="footer">
      <div class="frendly_link">
          <ul>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/friendlink/Getlink">友情链接:</a></li>
              <li><a href="http://www.tifert.edu.cn/">天津商务职业学院</a></li>
              <li><a href="http://www.zhaopin.com/">智联招聘网</a></li>
              <li><a href="http://www.yingjiesheng.com/">应届生网</a></li>
              <li><a href="http://www.dajie.com/home">大街网</a></li>
              <li><a href="http://www.chinahr.com/">中华英才网</a></li>
          </ul>
      </div>
            <div class="footer_contain">
                <div class="footer_place">
                    <ul>
                        <li>海河园校区地址：</li>
                        <li>地址：天津市海河教育园区雅观路 23 号</li>
                        <li>电话：（022）59655499 邮编：300350</li>
                        <br/>
                        <li>六纬路校区</li>
                        <li>地址：天津市河东区六纬路 82 号</li>
                        <li>电话：(022) 58525965 邮编：300170</li>
                    </ul>
                </div>
                <div class="footer_app">
                    <div>
                        <div class="footer_weixin_title"></div>
                        <div><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/erweima.jpg" height="100px" width="100px"/></div>
                    </div>
                    <div class="footer_app_download">
                    </div>
                </div>
                <div class="footer_copyright">
                      <ul><li>版权所有&copy;天津商务职业学院</li>
                          <br/>
                          <li>今日访问量：<?php echo smarty_function_visitelog(array('info'=>"today"),$_smarty_tpl);?>
</li>
                          <li>总访问量：<?php echo smarty_function_visitelog(array('info'=>"total"),$_smarty_tpl);?>
</li>
                        <li>自2013 年 9 月 1 日起计数</li>
                    </ul>
                </div>
            </div>

    </div>
<?php }} ?>