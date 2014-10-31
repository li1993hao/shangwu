<?php /* Smarty version Smarty-3.1.14, created on 2014-10-31 14:16:25
         compiled from "app/tpl/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:1734364951545329398f6a47-71551272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe0f70dfbcc919341cfdf4cc22d53ede3e7fca5a' => 
    array (
      0 => 'app/tpl/header.htm',
      1 => 1414729652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1734364951545329398f6a47-71551272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '__userinfo__' => 0,
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5453293996e186_03891706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453293996e186_03891706')) {function content_5453293996e186_03891706($_smarty_tpl) {?><div class="container">
    <!--<div class="top_login">-->
        <!--<p id="login_error" class="error">-->
            <!--</p>-->
                <!--<div>-->
                    <!--<div>-->
                        <!--<span>账号:</span>-->
                        <!--<input type="text" name="user_name" id="user_name" placeholder="学号或邮箱" />-->
                    <!--</div>-->
                    <!--<div>-->
                        <!--<span>密码:</span>-->
                        <!--<input type="password" name="user_pswd" id="user_pswd" />-->
                    <!--</div>-->
                    <!--<div id="login_submit">登录</div>-->
                <!--</div>-->
                <!--<div>-->
                    <!--<p>>学生可以使用学号登录,初始密码为身份证后六位</p>-->
                    <!--<p>>企业可以使用您的注册邮箱进行登录</p>-->
                    <!--<p>>如果忘记密码请联系天津现代职业技术学院就业指导中心</p>-->
                <!--</div>-->
    <!--</div>-->
    <div class="header" id="header">
        <div class="logo"></div>
        <div class="header_top">

            <?php if (isset($_smarty_tpl->tpl_vars['__userinfo__']->value)){?>
                <ul class="header_login">

                    <?php if ($_smarty_tpl->tpl_vars['__userinfo__']->value['type']=="0"){?>
                        <li>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['__userinfo__']->value['piclink'];?>
"/>
                        </li>
                        <li>
                            <a style="text-decoration: none">
                                <?php echo $_smarty_tpl->tpl_vars['__userinfo__']->value['name'];?>

                            </a>
                        </li>
                        <li> <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/myinfo">个人中心</a> 
                        </li>
                        <?php }else{ ?>
                        <li>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['__userinfo__']->value['picUrl'])===null||$tmp==='' ? "noimg.jpg" : $tmp);?>
"/>
                        </li>
                            <li style="margin-right: 10px;">
                                <a style="text-decoration: none">
                                    <?php echo $_smarty_tpl->tpl_vars['__userinfo__']->value['name'];?>

                                </a>
                            </li>
                            <li> <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo">个人中心 </a>
                            </li>


                                <?php }?>
                                    <li><a id="login_out" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index/logout">注销</a>
                                    </li>
                </ul>


                <?php }else{ ?>
                    <ul class="header_unlogin">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index/loginindex">用户登录</a>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/account/register">企业注册</a>
                        </li>
                    </ul>
                    <?php }?>
                        </li>
                        </ul>
            <div class="search_form_wrap">
                <form id="search_form" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/searchlist" method="post">
                    <div class="search">
                        <input type="text" id="key" name="key" placeholder="请输入关键字"/>
                        <a href="javascript:void(0)" id="search_submit"></a>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!--导航栏-->
    <div class="head_nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php">首页</a>
            </li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/center/index">中心简介</a>
            </li>
            <li class="drop"><a href="#">招聘查询</a>
                <div class="drop_down">
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg/index">招聘会信息</a>
                    </div>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpindex">招聘信息</a>
                    </div>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg/calendar">招聘日历</a>
                    </div>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/internindex">基层招聘</a>
                    </div>
                </div>
            </li>
            <li class="drop"><a href="#">用人单位服务</a>
                <div class="drop_down">
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/collegeintroduction/index">院系介绍</a>
                    </div>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/sourceinformation/index">生源信息</a>
                    </div>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Recruitment/index">招聘指南</a>
                    </div>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Employmentteam/index">就业专员</a>
                    </div>
                </div>
            </li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobGuid">求职指导</a>
            </li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/entreGuid">创业指导</a>
            </li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/employmentpolicy/index">就业政策</a>
            </li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/entrePolicy">创业政策</a>
            </li>

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Send/index">派遣服务</a>
            </li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Downservice/index">文件下载</a>
            </li>

            <li><a href="#footer">联系我们</a>
            </li>
        </ul>
    </div>

<?php }} ?>