<?php
$links = array(
    '' => '状态',
    'services' => '诊断服务',
    'test' => '测试'
);
?>
	<!-- Diagnostic Nav -->
	<div class="container">
	    <h2>对车辆 xx (xx) 进行诊断</h2>
	    <ul class="nav nav-tabs">
		<?php
		foreach ($links as $link => $title):
		    ?>
		<li<?=$function == $link ? ' class = "active"' : ''?>><a href="<?= base_url($page_type . '/' . $vehicle_id . '/' . $link) ?>"><?= $title ?></a></li>
		    <?php
		endforeach;
		?>
	    </ul>
	</div>
