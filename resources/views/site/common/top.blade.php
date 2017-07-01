<?php $device = getDevice2(); ?>
@if($device == MOBILE)
<header class="mobileheader">
	<a class="mobile-menuopen" onclick="document.getElementById('mobilemenu').style.display='block'"><i class="fa fa-bars" aria-hidden="true"></i></a>
	<a href="{{ url('/') }}" class="logo"><img src="{{ url('/img/logo.png') }}" alt="blogvansu" /></a>
</header>
<div class="mobilemenu" id="mobilemenu">
	<button onclick="document.getElementById('mobilemenu').style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></button>
	{!! $mobilemenu !!}
</div>
@else
<header>
	<center><a href="{{ url('/') }}" class="logo"><img src="{{ url('/img/logo.png') }}" alt="blogvansu" /></a></center>
	<div class="topmenu">{!! $topmenu !!}</div>
</header>
@endif
<div class="search">
	<form action="{{ route('site.search') }}" method="GET" class="search-form">
		<input name="s" type="text" value="" placeholder="Tìm kiếm">
		<input type="submit" value="Tìm kiếm">
    </form>
</div>
