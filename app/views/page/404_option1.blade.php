@extends('layouts.default')

@section('title')
	404 Page
@stop

@section('link')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="../../assets/admin/pages/css/error.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
@stop

@section('content')
<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12 page-404">
					<div class="number">
						 404
					</div>
					<div class="details">
						<h3>Oops! You're lost.</h3>
						<p>
							 We can not find the page you're looking for.<br/>
							<a href="index.html">
							Return home </a>
							or try the search bar below.
						</p>
						<form action="javascript:;">
							<div class="input-group input-medium">
								<input type="text" class="form-control" placeholder="keyword...">
								<span class="input-group-btn">
								<button type="submit" class="btn blue"><i class="fa fa-search"></i></button>
								</span>
							</div>
							<!-- /input-group -->
						</form>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
@stop

@section('script')
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
});
</script>
<!-- END JAVASCRIPTS -->
@stop