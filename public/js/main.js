var postId = 0;
var postBodyElement = null;

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
      $(postBodyElement).text(msg['nuevo_mensaje']);
      $('#editar-mensaje').modal('hide');
    });
});

$('.recomendar').on('click', function(event){
  event.preventDefault();
  postId = event.target.parentNode.parentNode.dataset['postid'];
  var esRecomendado = event.target.previousElementSibling == null;
  $.ajax({
    method: 'POST',
    url: urlRecomendaciones,
    data: {esRecomendado: esRecomendado, postId: postId, _token: token}
  })
  .done(function(){
    //cambia la página
  });
});
