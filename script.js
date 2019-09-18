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
    },
    error: function(err){
      console.log(err);
    }
  })
}

//inserisco i pagamenti
function printPagamenti(data){

}

//rimuovo i pagamenti
function deletePagamento(){

}