var postId = 0;

$('.post').find('.interaction').find('.edicion').on('click', function (event) {
    event.preventDefault();

    postBodyElement = event.target.parentNode.parentNode.childNodes[1];
    var postBody = postBodyElement.textContent;
    postId = event.target.parentNode.parentNode.dataset['postid'];
    $('#post-body').val(postBody);
    $('#editar-mensaje').modal();
});


$('#modal-save').on('click', function () {
  $.ajax
  ({
    method: 'POST',
    url: url,
    data: {body: $('#post-body').val(), postId: postId, _token: token}
  })
    .done(function (msg) {
        console.log(msg['message']);
    });
});
