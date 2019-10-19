function init(){
dataPagamenti();
};

$(document).ready(init);


function dataPagamenti(){
  $.ajax({
    url : "api_pagamenti.php",
    method : "GET",
    success : function(data){
      console.log(data);
      printPagamenti(data);
    },
    error : function(data){

    }
  });
}

function printPagamenti(data){

  var source = $("#template").html();
  var template = Handlebars.compile(source);

  for(var i=0; i < data.length; i++){

    var d = data[i];
    var context = d;

      var html = template(context);

      if (d.status === "accepted"){
        $(".accepted").append(html);
      } else if (d.status === "pending") {
        $(".pending").append(html);
      } else {
        $(".rejected").append(html);
      }

    }

};
