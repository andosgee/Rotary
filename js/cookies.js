function createCookie(name, value, days){
  var date = new Date();
  date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
  expires = "; expires=" + date.toGMTString();

  document.cookie = escape(name) + "=" + escape(value) + ";" + expires + "; path=/";
}
