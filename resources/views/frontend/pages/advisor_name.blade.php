

@foreach($result as $value)
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="name-item showSingle1 " target="1">
            <a href="javascript:void(0)"  class="" value="adiv{{$value['id']}}">{{$value['fullname']}}</a>
        </div>
    </div> 
@endforeach
<script>
 $(function(){
     if($('.name-item a').length > 0){
        $('.name-item a').each(function(index,value){
            if ($(this).hasClass('active')==true) {
                var id = $(this).attr("value");
                $('#'+id+'').show();
            }else{
                // console.log(value);
                $('#'+value.getAttribute("value")+'').hide();
            }
        });
     }else{
         $('.targetDiv1').hide();
     }
     $('.targetDiv1').hide();
    $('.showSingle1').click(function(){
            $('.name-item a').removeClass("active");
            $(this).find('a').addClass("active");
            $('.name-item a').each(function(index,value){
                var id = $(this).attr("value");
                $('#'+id+'').show();
                if ($(this).hasClass('active')==false) {
                    $('#'+value.getAttribute("value")+'').hide();
                }
                
            });
        });
     });

</script>