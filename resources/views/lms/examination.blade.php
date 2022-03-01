@extends('layouts.main')
@section('main-section')
<h1 class="video_hd text-primary text-center"> {{ $data['test_name'] }} </h1>

<div class="row">	
		<div class="col-lg-9 col-md-9 left_tabe_wrapp">			
			<div class="top_hed_one">				
				<span class="btm_yellow" id="queCount"></span>			
			</div>			
			<div class="all_cc_wrappwe">
			<p id="que"></p>
			<!-- <input type="text" id="fname" class="inpu_cc" name="fname"> -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-check-inline">
                    <label class="form-check-label" >
                        <input  type="radio" class="form-check-input" name="ans">&nbsp;&nbsp; 
                        <div id="op1"></div>
                    </label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="ans">&nbsp;&nbsp;
                        <div id="op2"></div>
                    </label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="ans">&nbsp;&nbsp;
                        <div id="op3"></div>
                    </label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="ans">&nbsp;&nbsp;
                        <div id="op4"></div>
                    </label>
                    </div>
                </div>
            </div>
			</div>
			<div class="button_wrapper">
					<a id="saveNext" class="buttoon_main button_grnn">Save & Next</a>
					<a id="saveReview" class="buttoon_main yellow_bt">Save & Mark For review</a>
					<a id="clearResponse" class="buttoon_main clear_bts">Clear Response</a>
					<a id="reviewNext" class="buttoon_main make_blue">Mark For Review & Next</a>			
			</div>			
			<div class="back_next_wrapp">
				<input type="submit" id="back" value="Back" class="back_next">
				<input type="submit" id="next" value="Next" class="back_next">
				<input type="button" id="submit" value="Submit" class="subm_green">
			</div>
		</div>
	
		
		<div class="col-lg-3 col-md-3 right_wrapp">		
			<div class="top_info">				
				<div class="info_box">				
					<div class="trapezoid"></div>
					<h2>Answered</h2>					
				</div>
				<div class="info_box">				
					<div class="not_answered"></div>
					<h2>Not Answered</h2>					
				</div>
				<div class="info_box">
					<div class="not_visi"></div>
					<h2>Answered</h2>
				</div>
				<div class="info_box">				
					<div class="marked_reviw"></div>
					<h2>Marked for Review</h2>					
				</div>
				<div class="info_box marked">				
					<div class="marked_reviw answard">
						<div class="dot_inside"></div>					
					</div>
					<h2>Answered & marked for Review</h2>					
				</div>
			</div>	
			<h4 class="math_head">Mathematics</h4>
			<h2 class="choose_head">Choose a Question</h2>			
			<div class="list_scrool">
				<div class="trapezoid">1</div>
				<div class="trapezoid"><h3>2</h3></div>
				<div class="trapezoid">3</div>
				<div class="not_answered"></div>
				<div class="trapezoid"></div>
				<div class="trapezoid"></div>
				<div class="not_answered"></div>
				<div class="trapezoid"></div>
				<div class="trapezoid"></div>
				<div class="not_answered"></div>
				<div class="not_answered"></div>
				<div class="trapezoid"></div>
				<div class="not_answered"></div>
				<div class="trapezoid"></div>
				<div class="trapezoid"></div>
				<div class="trapezoid"></div>
				<div class="marked_reviw"></div>
				<div class="marked_reviw answard">
                    <div class="dot_inside"></div>					
                </div>
				<div class="trapezoid"></div>
				<div class="trapezoid"></div>
			</div>
		</div>
	<!-- </div> -->
    </div>
@endsection

<style>
/*====23-feb-2022====*/
.left_tabe_wrapp{ padding-top:15px;}
.top_hed_one{ padding: 8px 0px; border-bottom: 1px solid #999; display: flex;}
.btm_yellow{ padding:8px 10px; background: #F89C27; color: #FFF;}
.left_tabe_wrapp p{font-family: 'Montserrat', sans-serif;font-size: 13px; font-weight: 400; color: #7A7A7A; padding: 10px 0px;line-height: 21px;}
.inpu_cc{ width: 280px; height: 38px; border: 1px solid #eaeaea; padding: 10px;font-size: 12px;}

.all_cc_wrappwe{ min-height: 300px; padding-bottom: 20px; border-bottom: 1px solid #999;}
.buttoon_main{ display: block;  padding: 12px 20px; text-align: center;margin: 8px;}
.button_grnn{ background: #57B45B; color: #FFF; text-align: center; display: block;}
.buttoon_main.yellow_bt{ background: #EFAD4D;color: #FFF;flex-grow:2}
.button_wrapper{ display: flex;}
.clear_bts{ background: #FFF; border: 1px solid #eaeaea; color: #000;}
.make_blue{ background: #337AB8; color: #FFF;}


.back_next_wrapp{ border-top: 1px solid #999; padding: 8px; background: #F5F5F5;}
.back_next{ background: #FFF; color: #000; padding: 7px 20px; border: 1px solid #eaeaea;}
.subm_green{ background: #5BB85B;padding: 7px 40px;border: none; color: #FFF; margin-left: auto; float: right;}
.top_info{ background: #f3f2f2;padding: 15px;}
.info_box{ display: flex; margin: 16px 0px;align-items: center;
 }
.trapezoid {
	border-bottom: 15px solid #34AD1C;
	border-left: 5px solid transparent;
	border-right:5px solid transparent;
	height: 0;
	width: 20px;
	-ms-transform: rotate(90deg); / IE 9 /
  transform: rotate(90deg);
}

.info_box{}
.info_box h2{font-size: 13px;color: #333;margin-left: 13px; font-weight: 400;}

.not_answered {
	border-bottom: 15px solid #D43D17;
	border-left: 5px solid transparent;
	border-right:5px solid transparent;
	height: 0;
	width: 20px;
	-ms-transform: rotate(90deg); / IE 9 /
  transform: rotate(90deg);
}

.not_visi{ width: 20px; height: 20px; border: 1px solid #eaeaea; background: #FFF;}
.marked_reviw{ width: 20px; height: 20px; background: #593398; border-radius: 100px;}
.math_head{ background: #1BB49E; color: #FFF; padding: 15px 10px; font-size: 16px;}
.right_wrapp{}
.choose_head{font-size:14px; margin: 10px;color: #000;}
.list_scrool{ height: 200px; overflow: auto; background: #F6F6F6; padding:20px 10px; padding-left: 30px;}

.list_scrool .trapezoid{margin-right: 20px;float: left;margin-bottom: 20px;
 }
.list_scrool .not_answered{margin-right: 20px;float: left;margin-bottom: 20px;
 }

.list_scrool .trapezoid h3{-ms-transform: rotate(-90deg); / IE 9 / color: #FFF;
  transform: rotate(-90deg);}
.right_wrapp{padding-top: 20px;}

.marked_reviw.answard{position: relative;}
.dot_inside{ width: 10px; height: 10px; background: #5ecf48; border-radius: 100px; position: absolute; bottom: 4px;right: 2px;

}

.list_scrool .marked_reviw{ float: left;margin-right: 20px;}    
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
function fetchQue(url,data){
 $.post(url,
  data,
  function(res, status){
    // console.log(res);
    $("#que").html(res.question);
    $("#op1").html(res.option1);
    $("#op2").html(res.option2);
    $("#op3").html(res.option3);
    $("#op4").html(res.option4);
    $("#queCount").html("#");
  });
}

$( document ).ready(function() {
    var qCount = 1;
    var url = "http://laravel.test/api/fetchQue?t=8";
    var data = {"t": {{$data['test_id']}},"pos":0 };
    fetchQue(url,data);
});

$(document).on("click","#back",function() {
    alert("back");
});
$(document).on("click","#next",function() {
    // alert("next");
    // increase the qCount and pos by 1 then hit 
});

$(document).on("click","#submit",function() {
    alert("submit");
});

$(document).on("click","#saveNext",function() {
    alert("saveNext");
});
$(document).on("click","#saveReview",function() {
    alert("saveReview");
});
$(document).on("click","#clearResponse",function() {
    alert("clearResponse");
});
$(document).on("click","#reviewNext",function() {
    alert("reviewNext");
});


</script>