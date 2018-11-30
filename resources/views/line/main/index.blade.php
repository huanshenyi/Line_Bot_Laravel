@extends('line.layout.main')
@section('content')
<form class="form-inline" method="post" action="{{route('line.test')}}">
    <div class="form-group">
        <label for="inputPassword2" class="sr-only">送信内容</label>
        <input type="text" class="form-control" id="inputPassword2" placeholder="内容" value="" name="text">
    </div>
    {{--<div class="form-group">--}}
        {{--<label for="inputPassword2" class="sr-only">送信相手</label>--}}
        {{--<input type="text" class="form-control" id="inputPassword2" placeholder="ラインID" value="" name="userId">--}}
    {{--</div>--}}
    <!---->
    <select class="form-control" name="userId">
        @foreach($friends as $friend)
        <option  value="{{$friend['line_id']}}">{{$friend['display_name']}}</option>
        @endforeach
    </select>
    <!---->
    <button type="submit" class="btn btn-default">送信</button>
</form>
<div>
@include('line.layout.session')
</div>
    @endsection

