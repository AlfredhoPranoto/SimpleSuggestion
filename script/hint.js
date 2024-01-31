let input = document.getElementById('inputField');
let suggest = document.getElementById('hintText');
let xmlhttp = new XMLHttpRequest();
let inputText = '';

function showHint(inputText) {
   if (inputText.length == 0) {
      suggest.innerHTML = '';
   } else {
      xmlhttp.onreadystatechange = () => {
         if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            suggest.innerHTML = xmlhttp.responseText;
         }
      };
      xmlhttp.open('GET', 'request/list.php?q=' + inputText, true);
      xmlhttp.send();
   }
}

window.addEventListener('load', () => {
   input.addEventListener('keyup', showHint(inputText));
});
