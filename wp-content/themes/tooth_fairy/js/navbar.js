var dropdown = document.getElementById('myDropdown');
var x = document.getElementById('primary-menu');
x.style.display = 'none';
dropdown.addEventListener("click", function (){
  console.log(x);
  console.log(dropdown);
    if (x.style.display === 'none') {
        x.style.display = 'flex';
    } else {
        x.style.display = 'none';
    }
});

var sublist = document.getElementsByClassName("menu-item-has-children");
var submenulist = document.getElementsByClassName("sub-menu");

for (var y = 0; y<submenulist.length; y++){
  submenulist[y].style.display = 'none';
}

for (var i = 0; i<sublist.length; i++)
sublist[i].addEventListener("click", function(){
var subMenu = this.querySelector('.sub-menu');
    if (subMenu.style.display === 'none') {
        subMenu.style.display = 'flex';
    } else {
        subMenu.style.display = 'none';
    }

});

