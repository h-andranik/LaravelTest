$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#saveis').click(function () {
        var id = $(this).attr('data-id');
        var title = $('#edittitle').val();
        var text = $('#edittext').val();
        $.ajax({
            url: '/editing',
            type: 'post',
            data: {title: title, text: text, id: id},
            success: function () {
                window.location.href = '/myblogs';
            }
        })
    });
    $('#add').click(function () {
        var id = $('#userid').val();
        var title = $('#title').val();
        var text = $('#text').val();
        var image = $('#image').val().replace('C:\\fakepath\\', '');
        $.ajax({
            url: '/newblog',
            type: 'post',
            data: {id: id, title: title, text: text, image: image},
            success: function () {
                window.location.href = '/myblogs';
            }
        })
    });

    $('.delete').click(function () {
        var id = $(this).attr('data-id');
        $.ajax({
            url: '/deleteblog',
            type: 'post',
            data: {id: id},
            success: function () {
                window.location.reload();
            }
        })
    });

    $('.usertolink').on('change', function () {
        var blogid = $(this).attr('data-id');
        var userid = $(this).val();
        console.log(blogid,userid)
        $.ajax({
            url: '/linkto',
            type: 'post',
            dataType: 'json',
            data: {userid: userid, blogid:blogid},
            success: function (data) {
                if(!data.data) {
                    alert('The user is already linked')
                }
                window.location.reload();
            }
        })
    });
});

