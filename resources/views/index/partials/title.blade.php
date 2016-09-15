<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>@yield('pagetitle')</h1>
				<ol class="breadcrumb">
					<li><a href="javascript:;">@yield('bread1', 'Home')</a></li>
					<li><a href="javascript:;">@yield('bread1', 'Pages')</a></li>
					<li class="active">@yield('activetitle')</li>
				</ol>
			</div>

		</section><!-- #page-title end -->
