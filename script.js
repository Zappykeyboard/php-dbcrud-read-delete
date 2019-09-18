function init() {
  //console.log("Hello World");
  getPagamenti();
}

$(document).ready(init);

//ottengo i pagamenti
function getPagamenti(){

  $.ajax({
    url: 'pagamenti.php',
    method: 'GET',
    success: function(data){
      console.log(data);
      printPagamenti(data);
    },
    error: function(err){
      console.log(err);
    }
  })
}

//inserisco i pagamenti
function printPagamenti(data){

  var source = $('#pagamento-row').html();
  var template = Handlebars.compile(source);

  for (var i = 0; i<data.length; i++){
    var el = data[i];
    var container = $('#'+el.status);

    var context = el;

    var html = template(context);

    container.append(html);
  }

}

//rimuovo i pagamenti
function deletePagamento(){

}