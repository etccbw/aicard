<?php
defined('BASEPATH') OR exit('No direct script access allowed');?><!DOCTYPE html>
<html lang="en">
<?=$header?>
<body data-type="login">
    <script src="/assets/js/theme.js"></script>
	<style type="text/css">
    .theme-white{
        background-image: url("/assets/img/load.png");
    }
    </style>
    <div class="am-g tpl-g">
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">
                </div>
                <form class="am-form tpl-form-line-form" action="/admin/login/loginIn" method="post" >
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" name="username" placeholder="请输入账号">
                    </div>
                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="user-pass" name="password" placeholder="请输入密码">
                    </div>
                    <div class="am-form-group tpl-login-remember-me">
                        <input id="remember-me" type="checkbox">
                        <label for="remember-me">
                        记住密码
                         </label>
                    </div>
                    <div class="am-form-group">
                        <button type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?=$footer_js?>

</body>

</html>