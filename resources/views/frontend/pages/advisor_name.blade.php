

@foreach($result as $value)
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="name-item showSingle1 " target="1">
            <a href="javascript:void(0)"  class="" value="adiv{{$value['id']}}" data-id="{{$value['id']}}">{{$value['fullname']}}</a>
        </div>
    </div> 
@endforeach
<script>
 $(function(){
    $('.showSingle1').click(function(){
        $('.name-item a').removeClass("active");
        $(this).find('a').addClass("active");
        var url = "{{route('contact.googleMap')}}";
        var advisor_id = $(this).find('a').data('id');
        $.post(url,{
            "_token": "{{ csrf_token() }}",
            advisor_id: advisor_id

        }).done(function(data){
            $('#profile').html(data);
            $('iframe').css('width','100%');
        })
    });
 });

</script>