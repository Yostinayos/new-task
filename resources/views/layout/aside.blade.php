<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item">
			<a class="nav-link" href="index.html">
				<i class="mdi mdi-grid-large menu-icon"></i>
				<span class="menu-title">Dashboard</span>
			</a>
		</li>

		{{-- Tasks --}}
		<li class="nav-item nav-category">Tasks</li>
		<li class="nav-item">
			<a aria-controls="ui-basic" aria-expanded="false" class="nav-link" href="{{ route('tasks.index') }}">
				<i class="menu-icon mdi mdi-floor-plan"></i>
				<span class="menu-title">All Tasks</span>
				<i class="menu-arrow"></i>
			</a>

			<a aria-controls="ui-basic" aria-expanded="false" class="nav-link" href="{{ route('tasks.create') }}">
				<i class="menu-icon mdi mdi-floor-plan"></i>
				<span class="menu-title">New Task</span>
				<i class="menu-arrow"></i>
			</a>
		</li>

		<li class="nav-item nav-category">UI Elements</li>
		<li class="nav-item">
			<a aria-controls="ui-basic" aria-expanded="false" class="nav-link" data-bs-toggle="collapse" href="#ui-basic">
				<i class="menu-icon mdi mdi-floor-plan"></i>
				<span class="menu-title">UI Elements</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="ui-basic">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
					<li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
					<li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item nav-category">Forms and Datas</li>
		<li class="nav-item">
			<a aria-controls="form-elements" aria-expanded="false" class="nav-link" data-bs-toggle="collapse" href="#form-elements">
				<i class="menu-icon mdi mdi-card-text-outline"></i>
				<span class="menu-title">Form elements</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="form-elements">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a aria-controls="charts" aria-expanded="false" class="nav-link" data-bs-toggle="collapse" href="#charts">
				<i class="menu-icon mdi mdi-chart-line"></i>
				<span class="menu-title">Charts</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="charts">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a aria-controls="tables" aria-expanded="false" class="nav-link" data-bs-toggle="collapse" href="#tables">
				<i class="menu-icon mdi mdi-table"></i>
				<span class="menu-title">Tables</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="tables">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a aria-controls="icons" aria-expanded="false" class="nav-link" data-bs-toggle="collapse" href="#icons">
				<i class="menu-icon mdi mdi-layers-outline"></i>
				<span class="menu-title">Icons</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="icons">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item nav-category">pages</li>
		<li class="nav-item">
			<a aria-controls="auth" aria-expanded="false" class="nav-link" data-bs-toggle="collapse" href="#auth">
				<i class="menu-icon mdi mdi-account-circle-outline"></i>
				<span class="menu-title">User Pages</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="auth">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item nav-category">help</li>
		<li class="nav-item">
			<a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
				<i class="menu-icon mdi mdi-file-document"></i>
				<span class="menu-title">Documentation</span>
			</a>
		</li>
		<li class="nav-item nav-category">Account</li>
		<li class="nav-item">
			<form action="{{ route('logout') }}" method="post">
				@csrf
				<button>Logout</button>
			</form>
		</li>
	</ul>
</nav>
<!-- partial -->
