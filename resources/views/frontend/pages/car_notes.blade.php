@foreach($summaries as $key=>$summary)
    <tr class="data-detail" id="notes">
        <td>{{$summary['exception']}}</td>
        <td >{{$summary['note_more']}}</td>
    </tr>
@endforeach
