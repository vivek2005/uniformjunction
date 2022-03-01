@extends('layouts.main')

@section('main-section')
<h1 class="video_hd text-primary text-center"> {{ $data['test_name'] }} </h1>

<div class="row">
    <div class="col-lg-10 col-md-10 col-10">

    @foreach ( $data['ques'] as $q )
    <div class="card">
        <div class="card-header">
            {!! $q->question !!}
        </div>
        <div class="card-body">
            <!-- <h5 class="card-title">Special title treatment</h5> -->
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="ans">&nbsp;&nbsp; {!! $q->option1 !!}
                    </label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="ans">&nbsp;&nbsp;{!! $q->option2 !!}
                    </label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="ans">&nbsp;&nbsp;{!! $q->option3 !!}
                    </label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="ans">&nbsp;&nbsp;{!! $q->option4 !!}
                    </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-success">Save & Next</a>
            <a href="#" class="btn btn-warning">Save & Mark For Review</a>
            <a href="#" class="btn btn-default">Clear Response</a>
            <a href="#" class="btn btn-primary">Mark For Review & Next</a>
        </div>
    </div>

@break
@endforeach        
<hr>
<div class="row">
    <div class="col-lg-10">
        <a href="#" class="btn btn-default">Back</a>
        <a href="#" class="btn btn-default">Next</a>
    </div>
    <div class="col-lg-2">
        <a href="#" class="btn btn-success ">Submit</a>
    </div>
</div>

</div>
    <div class="col-lg-2 ">
    <p class="border-bottom"><button type="button" class="btn btn-success"></button> Answered</p>
    <p class="border-bottom"><button type="button" class="btn btn-danger"></button> Not answered</p>
    <p class="border-bottom"><button type="button" class="btn btn-default"></button> Not Visited</p>
    <p class="border-bottom"><button type="button" class="btn btn-custom1"></button> Marked For Review</p>
    <p class="border-bottom"><button type="button" class="btn btn-custom2">  </button> Answered & Marked For Review</p>
    <hr>
    <h3 class="text-primary">Question Matrix</h3>
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mmr-2" role="group" aria-label="First group">
                <button type="button" class="btn btn-success btn-custom2">1</button>
                <button type="button" class="btn btn-success btn-custom1">2</button>
                <button type="button" class="btn btn-default">3</button>
                <button type="button" class="btn btn-success">4</button>
                <button type="button" class="btn btn-default">5</button>
                <button type="button" class="btn btn-success">6</button>
                <button type="button" class="btn btn-default">7</button>
                <button type="button" class="btn btn-danger">8</button>
                <button type="button" class="btn btn-danger">9</button>
                <button type="button" class="btn btn-danger">10</button>
            </div>
        </div>
    </div>

</div>
@endsection

<style>
.card-header{
    font-size:22px;
}    
.card-body{
    margin-top:15px;
    margin-bottom:15px;
}
.text-primary{
    font-size:25px!important;
}
.border-bottom{
    border-bottom:solid 1px lightgray; 
}
.btn-custom1{
    background-color:blue!important;
}
.btn-custom2{
    background-color:blue!important;
    /* border: solid 1px blue!important; */
    border-right:solid 10px green!important;
    border-radius:5px!important;
}
</style>