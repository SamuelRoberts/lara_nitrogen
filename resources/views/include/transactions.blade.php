<!-- BEGIN TRANSACTIONS PAGE -->
<div id="page-transactions" class="page-pane">
	<div class="container-fluid">
		<!-- BEGIN PAGE HEADER-->
		<div class="row-fluid">
			<div class="span12">
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title page-title-dark">
					Transactions <small><a id="transaction-log-link" target="_blank" href="/transactionlog/">(View All)</a></small>
				</h3>
			</div>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->

		<div class="row-fluid">
			<div class="span12">
				<div id="transactions-refresh-button" class="chocolate-button margin-bottom-10"><i class="icon-refresh"></i> Refresh Transactions & Balance</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">
				<table id="transactions-table" class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Date</th>
							<th>Type</th>
							<th>Amount</th>
							<th class="hidden-480">Reference</th>
							<th>Status</th>
							<th>Final Balance</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
				<div class="table-loader"></div>
				<div class="table-no-rows">No Transactions</div>
			</div>
		</div>
		<!-- END PAGE CONTENT-->
	</div>
	<!-- END PAGE CONTAINER-->
</div>
<!-- END TRANSACTIONS PAGE -->
