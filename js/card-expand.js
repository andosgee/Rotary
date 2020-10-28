function expandCard(n) { //Card Expand
  //n = number card on page
  var card = document.getElementsByClassName("card");
  card[n-1].classList.toggle("card--expanded");
}
