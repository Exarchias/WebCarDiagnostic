<?php
if ($empty_link)
{
    $links = array ();
}
else
{
    $links = array (
	'overview' => '概览',
	'diagnostic' => array (
	    'title' => '诊断',
	    'entries' => array (
		'1' => 'Identifier 1',
		'4' => 'Identifier 4',
		'9' => 'Identifier 9'
	    )
	),
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
			foreach ($links as $link => $link_detail) :
			    if (is_array($link_detail)):
			?>
			<li class="dropdown<?=$link == $page_type ? ' active' : ''?>">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$link_detail['title']?></a>
			    <ul class="dropdown-menu" role="menu">
				<?php
				foreach ($link_detail['entries'] as $car_link => $car_title):
				?>
				<li role="presentation"><a href="<?=base_url($link . '/' . $car_link)?>" role="menuitem"><?=$car_title?></a></li>
				<?php
				endforeach;
				?>
			    </ul>
			</li>
			<?php else: ?>
			<li<?=$link == $page_type ? ' class="active"' : ''?>><a href="<?=base_url($link)?>"><?=$link_detail?></a></li>
			<?php
			    endif;
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
