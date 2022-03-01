@extends('layouts.main')

@section('main-section')
<h1 class="video_hd">Videos</h1>
			<div class="video_box_slide">

			@foreach ($data['videos'] as $v)
			<div class="col-lg-3 col-md-3" >
					<div class="box_section_video">						
						<div class="sec_image_top">
							<div class="tick_ng"><img src="images/tick-white.svg" alt=""/></div>
							<img src="images/vs1.png"  alt=""/>
						</div>
						<h2>{{ $v->sub_topic_name }}</h2>
						<p>Date: {{ \Carbon\Carbon::parse($v->class_date)->format('M d Y h-i') }}</p>
						<a ttarget="blank" href="/watchVideo?v={{$v->class_video}}" class="view_btm">VIEW</a>
					</div>
                </div>
			@endforeach

				
			</div>		
@endsection
