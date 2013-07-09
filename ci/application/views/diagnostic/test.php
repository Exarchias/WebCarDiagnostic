	<div class="container">
	    此页用于选择测试项目，并进行自动测试。
	    <div id="diagnostic-test-list" class="row">
		<div class="span4">
		    <ul class="nav nav-list">
			<li class="active"><a href="#" data-toggle="tab">($10) DiagnosticSessionControl</a></li>
			<li><a href="#" data-toggle="tab">($11) ECUReset</a></li>
			<li><a href="#" data-toggle="tab">($2C) DynamicallyDefineDataIdentifier</a></li>
			<li><a href="#" data-toggle="tab">($27) SecurityAccess</a></li>
			<li><a href="#" data-toggle="tab">($28) CommunicationControl</a></li>
			<li><a href="#" data-toggle="tab">($3E) TesterPresent</a></li>
			<li><a href="#" data-toggle="tab">($83) AccessTimingParameter</a></li>
			<li><a href="#" data-toggle="tab">($84) SecuredDataTransmission</a></li>
			<li><a href="#" data-toggle="tab">($85) ControlDTCSetting</a></li>
			<li><a href="#" data-toggle="tab">($86) ResponseOnEvent</a></li>
			<li><a href="#" data-toggle="tab">($87) LinkControl</a></li>
			<li><a href="#" data-toggle="tab">($22) ReadDataByIdentifier</a></li>
			<li><a href="#" data-toggle="tab">($23) ReadMemoryByAddress</a></li>
			<li><a href="#" data-toggle="tab">($24) ReadScalingDataByIdentifier</a></li>
			<li><a href="#" data-toggle="tab">($2A) ReadDataByPeriodicIdentifier</a></li>
			<li><a href="#" data-toggle="tab">($2C) DynamicallyDefineDataIdentifier</a></li>
			<li><a href="#" data-toggle="tab">($2E) WriteDataByIdentifier</a></li>
			<li><a href="#" data-toggle="tab">($3D) WriteMemoryByAddress</a></li>
			<li><a href="#" data-toggle="tab">($14) ClearDiagnosticInformation</a></li>
			<li><a href="#" data-toggle="tab">($19) ReadDTCInformation</a></li>
			<li><a href="#" data-toggle="tab">($2F) InputOutputControlByIdentifier</a></li>
			<li><a href="#" data-toggle="tab">($31) RoutineControl</a></li>
			<li><a href="#" data-toggle="tab">($34) RequestDownload</a></li>
			<li><a href="#" data-toggle="tab">($35) RequestUpload</a></li>
			<li><a href="#" data-toggle="tab">($36) TransferData</a></li>
			<li><a href="#" data-toggle="tab">($37) RequestTransferExit</a></li>
		    </ul>
		</div>
		<div class="span8">
		    <table class="table table-bordered">
			<thead>
			    <tr>
				<th>#</th>
				<th>Property</th>
				<th>Value</th>
			    </tr>
			</thead>
			<tbody>
			    <tr>
				<td>1</td>
				<td>PDU</td>
				<td>11 01</td>
			    </tr>
			    <tr>
				<td>2</td>
				<td>resetType</td>
				<td>
				    <div class="btn-group">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					    ($01) hardReset
					    <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
					    <li><a href="#">($01) hardReset</a></li>
					    <li><a href="#">($02) keyOffOnReset</a></li>
					    <li><a href="#">($03) softReset</a></li>
					    <li><a href="#">($04) enableRapidPowerShutDown</a></li>
					    <li><a href="#">($05) disableRapidPowerShutDown</a></li>
					</ul>
				    </div>
				</td>
			    </tr>
			</tbody>
		    </table>
		</div>
	    </div>
	</div>
