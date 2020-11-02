function toggleTab(event, tabName) {
  var i;
  var tab_links = document.getElementsByClassName('tab_links');
  var links_len = tab_links.length;
  var tab_content = document.getElementsByClassName('tab_content');
  var content_len = tab_content.length;

  for (i = 0; i < content_len; i++) {
    tab_content[i].style.display = "none";
  }
  // className.replace - To remove the class name
  for (i = 0; i < links_len; i++) {
   tab_links[i].className = tab_links[i].className.replace(" active", "");
 }
   document.getElementById(tabName).style.display = "block";
   console.log(tabName);

   event.currentTarget.className += " active";

}
