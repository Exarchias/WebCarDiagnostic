<?php
if ($empty_link)
{
    $links = array ();
}
else
{
    $links = array (
	'overview' => '概览',
	'diagnostic' => '诊断',
	'config' => '设定',
	'help' => '帮助',
    );
}
?>
	<!-- Navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
	    <div class="navbar-inner">
		<div class="container">
		    <h1><a class="brand" href="#">车辆诊断系统</a></h1>
		    <ul class="nav">
			<?php
			foreach ($links as $link => $link_name) :
			?>
			<li<?=$link == $page_type ? ' class="active"' : ''?>><a href="<?=$link?>"><?=$link_name?></a></li>
			<?php
			endforeach;
			?>
		    </ul>
		    <?php if (!$empty_link): ?>
		    <ul class="nav pull-right">
			<li><a href="#">登出 user</a></li>
		    </ul>
		    <?php endif; ?>
		</div>
	    </div>
	</div>
