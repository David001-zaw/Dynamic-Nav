
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title>Responsive DropDown Menu</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<div class="logo">LOGO</div>
			<nav class="active">
				<ul>
					@foreach($menuItems as $item)
						@if (count($item->submenuItems) > 0)
							<li class="sub-menu"><a href="">{{ $item->name }}<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul>
									@foreach ($item->submenuItems as $submenu)
										<li><a href="{{ $submenu->link }}">{{ $submenu->name }}</a></li>
									@endforeach
								</ul>
							</li>
						@else
							<li><a href="{{ $item->link }}">{{ $item->name }}</a></li>
						@endif
					@endforeach

				</ul>
			</nav>
			<div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</header>
		<div class="banner">
			<img src="whitelaptop.jpg">
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.menu-toggle').click(function(){
					$('nav').toggleClass('active')
				})
			})
		</script>
</body>
</html>
