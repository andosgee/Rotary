function loadInfoCurrent(id) { //Get data on change and displays info
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
  xmlhttp.open("GET","inc/getuser.php?id="+id,true);
  xmlhttp.send();
}

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
