<div class="breadcrumbs">
	
		<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		@if (isset($pages))
			@foreach ($pages as $key => $value)
				<li> <a href='{{$key}}'>{{$value}}</a></li>
			@endforeach
		@endif

		@if (isset($current))
			<li> {{$current}} </li>
		@endif
		
		</ol>
		@include('mixins.social-icons')
		
	</div>