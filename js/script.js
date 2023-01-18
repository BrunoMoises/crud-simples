$(function(){
  var str = '#len';
  $(document).ready(function(){
    var i, stop;
    i = 1; 
    stop = 3;
    setInterval(function(){
      if (i > stop){
        return;
      }
      $('#len'+(i++)).toggleClass('bounce');
    }, 500)
  });
});

function editar_pessoa(id) {
  location.href = '?page=nova&id=' + id;
}

function excluir_pessoa(id) {
  if (confirm("Tem certeza que deseja excluir a pessoa de ID " + id + "?")) {
      location.href = '?page=salvar&acao=excluir&id=' + id;
  }
}

function nova_pessoa() {
  location.href = '?page=nova&id=';
}