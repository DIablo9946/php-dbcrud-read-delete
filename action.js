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
    },
    error : function(data){

    }
  });
}
