const nav = document.querySelector('.filter-open');
const body = document.querySelector('main');
const overlay = document.querySelector('.overlay');
const exit = document.getElementById('x');
const menu = document.getElementById('filter');

open = e => {
  e.preventDefault();
  nav.style.display = 'flex';
  nav.style.animation = '.5s ease forwards navOpen';
  body.style.animation = '.5s ease forwards slideRight';
  overlay.style.display = 'block';
};

close = () => {
  nav.style.animation = '.5s ease forwards navClose';
  body.style.animation = '.5s ease forwards slideLeft';
  overlay.style.display = 'none';
};

exit.addEventListener('click', close);
menu.addEventListener('click', open);

const sort = document.getElementById('sort');
const dropdown = document.querySelector('.sort-open');
let sortopen = false;

sort.addEventListener('click', e => {
  e.preventDefault();
  if (sortopen === true) {
    dropdown.style.display = 'none';
    sortopen = false;
  } else {
    dropdown.style.display = 'block';
    sortopen = true;
  }
});
