var theme = "War"
var element = document.getElementById('data');
function changeTheme() {
    if(theme == "War") {
      element.className = 'iron-man';
      theme = "Iron";
    }

    else {
      element.className = 'war-machine';
      theme = "War";
    }
}
