
function populateFormByID(id,form){
  if(!Number(id)){ //Set blank if invalid id
    return document.getElementsByClassName("form__content")[0].innerHTML = "";
  }

  var xmlhttp = new XMLHttpRequest(); //Deine request

  xmlhttp.onreadystatechange = function() { //Function run when request state changes (error, sent, pending etc.)
    form = document.getElementsByClassName("form__content")[0];
    if (this.readyState == 4 && this.status == 200) { //If request successfull
      form.innerHTML = this.responseText; //Populate Form
    }
    if(this.status == 404){ //Connection Error
      form.innerHTML = "Error 404: Problem with the connection";
    }
  };

  xmlhttp.open("GET",form+"?id="+id,true); //Open request
  xmlhttp.send(); //Submit request
}


//No need for this
function loadInfoNew(id){ //Get data on change and displays info
  if (id=="") {
    document.getElementsByClass("form__select").item(0).innerHTML="";
    return;
  }
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
         document.getElementById("txtHint").innerHTML = this.responseText;
       }
    };
  xmlhttp.open("GET","inc/loaduserNew.php?id="+id,true);
  xmlhttp.send();
}
