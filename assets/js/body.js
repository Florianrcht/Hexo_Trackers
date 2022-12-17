
// DEBUT DES ONCLICK / NONECLICK
let profilNoneClick = document.querySelector('#profil_noneclick');
let profilOnClick = document.querySelector('#profil_onclick');

let lifetimeNoneClick = document.querySelector('#lifetime_noneclick');
let lifetimeOnClick = document.querySelector('#lifetime_onclick');

let weaponNoneClick = document.querySelector('#weapon_noneclick');
let weaponOnClick = document.querySelector('#weapon_onclick');

let mapNoneClick = document.querySelector('#map_noneclick');
let mapOnClick = document.querySelector('#map_onclick');
// FIN DES ONCLICK / NONECLICK


// DEBUT DES PAGES
let pageProfil = document.querySelector('#page_profil');
let pageLifetime = document.querySelector('#page_lifetime');
let pageWeapon = document.querySelector('#page_weapon');
let pageMap = document.querySelector('#page_map');
// FIN DES PAGES

document.onload = block();

function block() {
    pageLifetime.style.display = 'none';
    pageWeapon.style.display = 'none';
    pageMap.style.display = 'none';

    profilNoneClick.style.display = 'none';
    lifetimeOnClick.style.display = 'none';
    weaponOnClick.style.display = 'none';
    mapOnClick.style.display = 'none';

} 

document.getElementById("onglet_profil").addEventListener('click', () => {
    const form = document.getElementById('#page_profil');

if (pageProfil.style.display === 'none') {
    // Montre le form mail et cache le form mdp
    pageProfil.style.display = 'block';
    pageLifetime.style.display = 'none';
    pageWeapon.style.display = 'none';
    pageMap.style.display = 'none'

    profilOnClick.style.display = 'block'
    lifetimeOnClick.style.display = 'none'
    weaponOnClick.style.display = 'none'
    mapOnClick.style.display = 'none'

    profilNoneClick.style.display = 'none'
    lifetimeNoneClick.style.display = 'block'
    weaponNoneClick.style.display = 'block'
    mapNoneClick.style.display = 'block'

} else {
    // Cache le form mail
    pageProfil.style.display = 'none';

}
});
document.getElementById("onglet_lifetime").addEventListener('click', () => {
    const form = document.getElementById('#page_lifetime');

if (pageLifetime.style.display === 'none') {
    // Montre le form mail et cache le form mdp
    pageProfil.style.display = 'none';
    pageLifetime.style.display = 'block';
    pageWeapon.style.display = 'none';
    pageMap.style.display = 'none'

    profilOnClick.style.display = 'none'
    lifetimeOnClick.style.display = 'block'
    weaponOnClick.style.display = 'none'
    mapOnClick.style.display = 'none'

    profilNoneClick.style.display = 'block'
    lifetimeNoneClick.style.display = 'none'
    weaponNoneClick.style.display = 'block'
    mapNoneClick.style.display = 'block'
} else {
    // Cache le form mail
    pageLifetime.style.display = 'none';

}
});
document.getElementById("onglet_weapon").addEventListener('click', () => {
    const form = document.getElementById('#page_weapon');

if (pageWeapon.style.display === 'none') {
    // Montre le form mail et cache le form mdp
    pageProfil.style.display = 'none';
    pageLifetime.style.display = 'none';
    pageWeapon.style.display = 'block';
    pageMap.style.display = 'none';

    profilOnClick.style.display = 'none'
    lifetimeOnClick.style.display = 'none'
    weaponOnClick.style.display = 'block'
    mapOnClick.style.display = 'none'

    profilNoneClick.style.display = 'block'
    lifetimeNoneClick.style.display = 'block'
    weaponNoneClick.style.display = 'none'
    mapNoneClick.style.display = 'block'

} else {
    // Cache le form mail
    pageWeapon.style.display = 'none';

}
});
document.getElementById("onglet_map").addEventListener('click', () => {
    const form = document.getElementById('#page_map');

if (pageMap.style.display === 'none') {
    // Montre le form mail et cache le form mdp
    pageProfil.style.display = 'none';
    pageLifetime.style.display = 'none';
    pageWeapon.style.display = 'none';
    pageMap.style.display = 'block';

    profilOnClick.style.display = 'none'
    lifetimeOnClick.style.display = 'none'
    weaponOnClick.style.display = 'none'
    mapOnClick.style.display = 'block'

    profilNoneClick.style.display = 'block'
    lifetimeNoneClick.style.display = 'block'
    weaponNoneClick.style.display = 'block'
    mapNoneClick.style.display = 'none'

} else {
    // Cache le form mail
    pageMap.style.display = 'none';

}
});