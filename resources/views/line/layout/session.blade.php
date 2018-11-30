@if(Session::has('message'))
    <div class="alert alert-info"> メッセージ：{{session('message')}}</div>
@endif