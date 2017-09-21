var dropdown = document.getElementById('myDropdown');
var x = document.getElementById('primary-menu');
x.style.display = 'none';
dropdown.addEventListener("click", function (e){
  console.log(x);
  console.log(dropdown);
    if (x.style.display === 'none') {
        x.style.display = 'flex';
    } else {
        x.style.display = 'none';
    }
});

var sublist = document.getElementsByClassName("menu-item-has-children");
var y = document.getElementsByClassName("sub-menu");

// sublist.addEventListener("click", function())