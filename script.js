function sendView(){
  var selected = document.getElementById("option");
  var viewer = document.getElementById("viewer");
  viewer.src = "file.html?file=file/" + selected.value + ".md";
}
