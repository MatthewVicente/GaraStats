@extends('main')

@section('Agents','| Gara Stats ')
@section('style')

@endsection


@section('content')
<div >
<div >
<!-- <h1>This is Agents Page.</h1> -->
    @foreach($agents as $agent)
        <div class="agent">
            <img src={{$agent["displayIcon"]}}>
        </div>
    @endforeach
</div>
</div>


@endsection

@section('script')

@endsection