<script src="{{ url('assets/js/site.js?'.config('custom.version')) }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script>
    var LayoutHandler = {
    fn: {
        start: function () {
            $('div.img-container').each(function () {
                var div = $(this);
                $('<span class="remove"/>').text('X').appendTo(div);
            });


            $('img.thumb').draggable({
                containment: '#layout-area',
                revert: 'invalid',
                helper: 'clone'
            });

            $('div.img-container').droppable({
                accept: 'img.thumb',
                drop: function (event, ui) {
                    var div = $(this);
                    var img = ui.draggable;
                    var copy = img.clone();
                    $(copy).addClass('sized').appendTo(div);
                    div.addClass('img-inserted');
                    $('span.remove', div).show();
                }
            });
        },

        remove: function () {
            $('span.remove').on('click', function () {
                var span = $(this);
                span.parent().find('img').remove();
                span.parent().removeClass('img-inserted');
                span.hide();
            });

        },

        // oninput: function () {
        //     $('input[type="text"]', '#layout-area').focus(function () {
        //         $(this).val('');
        //     });
        // },

//         chooseLayout: function () {
//             $('input[type="radio"]', '#choose-layout').change(function () {
//                 var $input = $(this);
//                 if ($input.prop('checked')) {
//                     var target = $('#' + $input.val());
//                     target.show().siblings('table').hide();
//                     $input.parents('#choose-layout').find('input').not($input).removeAttr('checked');
//                     $('#choose-layout').hide();
//                 }
//             });

//         },

        toHTML: function () {
            $('#html').click(function () {
                var html = '<table style="table-layout: fixed; width: 100%; border-spacing: 3%; border-collapse: separate;">';
                
                    $('tr', '#target').each(function () {
                        var tr = $(this);
                        html += '<tr>';
                        $('td', tr).each(function () {
                            var td = $(this);
                            if (!td.is('td.header')) {
                                var img = $('img', td);
                                var text = $('textarea', td).val();
                                html += '<td style="width: 33%;">';
                                html += (img.length) ? '<img src="' + img.attr('src') + '" style="display: block; max-width: 100%;" />' : '<div style="width: 100%;"></div>';
                                html += '<p style="text-align: center;">' + text + '</p>';
                                html += '</td>';
                            } else {
                                var name = $('#name', td).val();
                                var data = $('#data', td).val();
                                var speciality = $('#speciality', td).val();
                                html += '<td colspan="3" style="width: 100%;">';
                                html += '<h1 style="text-align: center;">' + name + '</h1>';
                                html += '<p style="text-align: center;"><strong>' + data + '</strong></p>';
                                html += '<p style="text-align: center;"><strong>' + speciality + '</strong></p>';
                                html += '</td>';
                            }
                        });
                        html += '</tr>';
                    });
                
                
                html += '</table>';
                $('#output').html(html);
                $('html, body').animate({
                    scrollTop: $('#output').offset().top
                }, 400);
            });

        }
    },

    init: function () {
        for (var method in this.fn) {
            this.fn[method]();
        }

    }
};

$(function () {
    LayoutHandler.init();
});
</script>