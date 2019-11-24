getUserImgName();
setTimeout(function () {
    $('.page-sidebar-wrapper').fadeIn();
}, 100);
setTimeout(openMainmenu, 500);

function getUserImgName() {
    var id = $('#id').text();
    $.ajax({
        url: "{{url('getUserInfo')}}/" + id,
        type: 'GET',
        data: {},
        success: function (data) {
            $('#user_img_name').html(data);
        }
    });
}

function openMainmenu() {
    $.ajax({
        url: "{{url('getActiveMainmenu')}}/{{explode('/',\Route::getFacadeRoot()->current()->uri())[0]}}",
        type: 'GET',
        dataType: 'json',
        data: {},
    })
        .done(function (response) {
            $('#mainlink-' + response.mainlink).click();
            $('#sublink-' + response.sublink).attr('style', 'background:#eee;');
            $('#title-' + response.sublink).attr('style', 'color:black;font-weight:bold');
            $('#icon-' + response.sublink).attr('style', 'color:black;');
        });
}

$('.chosen').chosen();
$('textarea').attr('autocomplete', 'off');
$('input[type=text]').attr('autocomplete', 'off');
$('input[type=number]').attr('autocomplete', 'off');

function deleteCheck(link) {
    $.confirm({
        title: 'Confirm',
        content: '<strong>Are You Confirm To Delete ?</strong>',
        icon: 'fa fa-question-circle',
        animation: 'scale',
        closeAnimation: 'scale',
        opacity: 0.5,
        buttons: {
            'confirm': {
                text: 'Delete',
                btnClass: 'btn-red',
                action: function () {
                    window.open(link, "_parent");
                }
            },
            'Cancel': {
                text: 'Cancel',
                btnClass: 'btn-white',
                action: function () {

                }
            }
        }
    });
}

var datepicker = $('.datepicker');
datepicker.each(function () {
    $(this).datepicker({
        format: 'yyyy-mm-dd'
    });

    $(this).attr({
        "readonly": 'readonly',
        "style": 'background:white',
        "value": $(this).attr('data-date')
    });
});

var datepicker_today = $('.datepicker-today');
datepicker_today.each(function () {
    $(this).datepicker({
        format: 'yyyy-mm-dd'
    });

    $(this).attr({
        "readonly": 'readonly',
        "style": 'background:white',
        "value": "{{date('Y-m-d')}}"
    });
});
