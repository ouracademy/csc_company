<section class="header-img" style="background-image : url({{$imageURL}});">
	<div class="overlay-header" style="background:rgba(0, 0, 0, 0.75);"></div>
	<div class="col-sm-10 center-block text-center ">
		<div class="header-title">
			<h1>{{$title}}</h1>
			<div class="wrap-line">
				<hr/>
			</div>
			<p>{{$phrase}}</p>
			
			@if (isset($button))
    			<div class="buttons animated colors-light align-center fadeIn" 
				 data-animation="fadeIn">
					<a href="{{url($button['link'])}}" 
				   	   class="blue txt-btn btn btn-large ">{{$button['title']}}
					</a>
				</div>
			@endif
		</div>
	</div>
</section>