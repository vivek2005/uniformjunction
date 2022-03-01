@extends('layouts.main')

@section('main-section')
<h1 class="video_hd">Tests</h1>


    @forelse( $data['dailyTests'] as $sn )
    <a href="/exam?test={{$sn->id}}&name={{$sn->sub_topic_name}}"> 
            <div class="alert alert-success action" role="alert">
                {{ $sn->sub_topic_name }}
            </div>
    </a>
    @empty
        <h2 class="text-danger" >Content will be available soon. </h2>
    @endforelse

@endsection
<style>
.alert-success:hover {
    color:#c71f3b;
    background:lightgray;
}
</style>