@foreach($result as $value)
<div class="alpha-index">
    <div class="alpha-left">
        <a href="#C" class="{{$value['content']!='' ? '' : disable }}">{{$value['character']}}</a>
    </div>
    <div class="index-content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse11" class="collapsed" aria-expanded="false">
                    {{$value['terms']}}</a>
                </h4>
            </div>
            <div id="collapse11" class="panel-collapse collapse" aria-expanded="false">
                <div class="panel-body">
                    <p>
                        {{strip_tags($value['content'])}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach