@extends('layouts.main')

@section('main-section')
<h1 class="video_hd">Study Notes</h1>

<!-- <div class="list-group"> -->
    @forelse( $data['studyNotes'] as $sn )
        <!-- <a href="#" class="list-group-item list-group-item-action list-group-item-success">{{ $sn->sub_topic_name }}</a> -->
            <div class="alert alert-success action" role="alert">
            {{ $sn->sub_topic_name }}
            </div>
        @empty
        <div class="div">
            <h2 class="text-danger" >Content will be available soon. </h2>
        </div>
    @endforelse
<!-- </div>   -->


<!-- <div class="video_box_slide">
@forelse ($data['studyNotes'] as $sn )
<div class="col-lg-3 col-md-3" >
    <div class="box_section_video">						
        <div class="sec_image_top">
            <div class="tick_ng"><img src="images/tick-white.svg" alt=""/></div>
            <img src="images/vs1.png"  alt=""/></div>
        <h2>{{ $sn->sub_topic_name }}</h2>
        <p>Date: {{ \Carbon\Carbon::parse($sn->class_date)->format('M d Y h-i') }}</p>
        <a href="" class="view_btm">VIEW</a>
    </div>
</div>
@empty
<h2 class="text-danger" >Content will be available soon. </h2>
@endforelse
</div>		 -->
@endsection

<style>
.alert-success:hover {
    color:#c71f3b;
    background:lightgray;
}
</style>