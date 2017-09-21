var dropdown = document.getElementById('myDropdown');
var x = document.getElementById('primary-menu');
dropdown.addEventListener("click", function (){
  console.log(x);
  console.log(dropdown);
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
});
console.log("hi");