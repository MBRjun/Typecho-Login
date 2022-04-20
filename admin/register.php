<?php
include 'common.php';

if ($user->hasLogin()) {
    $response->redirect($options->adminUrl);
}
$rememberName = htmlspecialchars(Typecho_Cookie::get('__typecho_remember_name'));
Typecho_Cookie::delete('__typecho_remember_name');

$bodyClass = 'body-100';

?>
<!DOCTYPE html>
<html class="no-js" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="./style/normalize.css">
<link rel="stylesheet" type="text/css" href="./style/admin.css">

<!--必要样式-->
<link rel="stylesheet" type="text/css" href="./style/component.css">
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
		<div class="container">
			<div class="content">
				<div id="large-header" class="large-header" style="height: 695px;">
					<canvas id="demo-canvas" width="1920" height="695"></canvas>
					<div class="logo_box">
						<h3>注册</h3>
                        <form action="<?php $options->registerAction(); ?>" method="post" name="register" role="form">
                        <div class="input_outer">
								<span class="u_user"></span>
								<input name="name" class="text" type="text" placeholder="账户名">
                        </div>
                        <div class="input_outer">
								<span class="nmsl"></span>
								<input name="mail" class="text"  type="text" placeholder="绑定邮箱">
						</div>
            <p class="submit">
            <div class="mb2" ><button type="submit" class="act-but submit" style="color: #FFFFFF">进入控制台</button>
            </p>
        </form>
            <a href="<?php $options->siteUrl(); ?>"><?php _e('<< 返回'); ?></a>
            <?php if($options->allowRegister): ?>
            &bull;
            <a href="<?php $options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a>
            <?php endif; ?>
        </p>
                          </div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="./style/TweenLite.js"></script>
		<script src="./style/EasePack.js"></script>
		<script src="./style/rAF.js"></script>
		<script src="./style/sky.js"></script>
</body></html>
<?php 
include 'common-js.php';
?>
<script>
$(document).ready(function () {
    $('#name').focus();
});
</script>
<?php
include 'footer.php';
?>
