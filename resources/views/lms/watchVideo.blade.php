@extends('layouts.main')

@section('main-section')
<h1 class="video_hd">Watch Video</h1>
<div class="row">

<div class="row " >
    <div class="col-lg-12 col-md-12 iframeDiv">
        <div sstyle="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;"> 
                <iframe style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden" frameborder="0" type="text/html" src="https://www.dailymotion.com/embed/video/x7t2fz4?autoplay=1" width="100%" height="100%" allowfullscreen allow="autoplay"> </iframe> 
        </div>
    </div>
</div>

    <div class="row slideRow">
    @foreach ($data['videos'] as $v)
			<div class="col-lg-4 col-md-4 slideCol" >
					<div class="box_section_video" >
						<div class="sec_image_top" >
							<div class="tick_ng"><img src="images/tick-white.svg" alt=""/></div>
							<!-- <img src="images/vs1.png"  alt=""/> -->
						</div>
                        <!-- <div class="tick_ng"><img src="images/tick-white.svg" alt=""/></div> -->
                        @if ($data['video_id'] == $v->class_video )
                        <a style="color:red;" href="/watchVideo?v={{$v->class_video}}"> <h2 >{{ $v->sub_topic_name }}</h2> </a>
                        @else
                        <a style="color:black;" href="/watchVideo?v={{$v->class_video}}"> <h2 >{{ $v->sub_topic_name }}</h2> </a>
                        @endif
                        <!-- <a target="blank" href="/watchVideo?v={{$v->class_video}}" class="view_btm">VIEW</a> -->
                        <!-- <p style="position:relative;bottom:0px;">Date: {{ \Carbon\Carbon::parse($v->class_date)->format('M d Y h-i') }}</p> -->
					</div>
                </div>
			@endforeach        
    </div>
</div>
@endsection


<style>
.sec_image_top{
    height:0px!important;
}
.box_section_video{
    height:70px!important;
    background:#f3d1d1!important;
}
.slideRow{
    margin-top:10px;
    padding-top:10px;
    height:150px;
    overflow-y:scroll;    
    /* background:lightgray; */
    border-radius:10px;
}
.iframeDiv{
    width:100%;
    height:400px!important;
    overflow:hidden;
}
</style>