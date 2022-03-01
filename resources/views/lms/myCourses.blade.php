@extends('layouts.main')

@push('title')
<title> My Courses </title>
@endpush

@section('main-section')
<h1 class="video_hd">My Courses</h1>
			<div class="video_box_slide">
				
			@foreach ($data['courses'] as $c)
				<div class="col-lg-12 col-md-12 mt-2" style="margin-bottom:10px;" >
					<div class="box_section_video" style="height:100px;">
						<h2 class="text-center"> {{$c->course_name}} </h2>
						<!-- <p>Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet </p> -->
						<a href="/browseCourse?course_id={{$c->course_id}}" class="view_btm">VIEW</a>
					</div>
                </div>
			@endforeach
            </div>		
@endsection


