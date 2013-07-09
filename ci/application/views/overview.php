	<div class="container">
	    <h2>您好，user。</h2>
	    <p>下表列举了当前可诊断的车辆，选择条目以进行诊断。</p>
	    <!--<img src="img/car/car1.jpg">-->
	    <table id="carlist" class="table table-bordered table-hover">
		<thead>
		    <tr>
			<th>#</th>
			<th>标识</th>
			<th>型号</th>
			<th>状态</th>
		    </tr>
		</thead>
		<tbody>
		    <tr>
			<td>1</td>
			<td>Identifier 1</td>
			<td>BMW X5</td>
			<td>正常</td>
		    </tr>
		    <tr>
			<td>2</td>
			<td>Identifier 4</td>
			<td>AUDI A8</td>
			<td>正常</td>
		    </tr>
		    <tr class="error">
			<td>3</td>
			<td>Identifier 7</td>
			<td>Benz S600L</td>
			<td>故障</td>
		    </tr>
		</tbody>
	    </table>
	    <p>
		<a class="btn btn-primary">开始诊断</a>
		<a class="btn">添加车辆</a>
		<a class="btn">管理车辆</a>
		<a class="btn">重新检查</a>
	    </p>
	    <hr class="separator">
	    <p>不在线上的车辆：</p>
	    <table id="carlist" class="table table-bordered table-hover">
		<thead>
		    <tr>
			<th>#</th>
			<th>标识</th>
			<th>型号</th>
			<th>上次状态</th>
		    </tr>
		</thead>
		<tbody>
		    <tr>
			<td>1</td>
			<td>Identifier 2</td>
			<td>BMW X5</td>
			<td>正常</td>
		    </tr>
		    <tr>
			<td>2</td>
			<td>Identifier 3</td>
			<td>AUDI A8</td>
			<td>正常</td>
		    </tr>
		    <tr class="error">
			<td>3</td>
			<td>Identifier 6</td>
			<td>Benz S600L</td>
			<td>故障</td>
		    </tr>
		</tbody>
	    </table>
	    <hr class="separator">
	    <h3>其它任务</h3>
	    <p>
		<a class="btn">查看日志</a>
		<a class="btn">系统设定</a>
		<a class="btn">使用帮助</a>
	    </p>
	</div>
