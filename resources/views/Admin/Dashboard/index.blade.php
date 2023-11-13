@include ('admin.Dashboard.tech_header')

<div class="container-fluid py-4">
	<h1 class="mb-5"> Dashboard</h1>

	<?php
	$servicesCount = DB::table('books')->count();
	$projectsCount = DB::table('portfolios')->count();

?>
	
                
	<div class="row">
		<div class="col-xl-3 col-md-6">
			<div class="card bg-primary text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><?php echo $servicesCount; ?></h1>
					<h3 class="text-center">Total Services </h3>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-warning text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><?php echo $projectsCount; ?></h1>
					<h3 class="text-center">Total Projects</h3>
				</div>
			</div>
		</div>
	
	</div>
</div>

@include ('admin.Dashboard.tech_footer');