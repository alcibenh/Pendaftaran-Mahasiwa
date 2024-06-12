let i = 0;
const valueTeks = "Selamat Mendaftar Di UNIVERSITAS TARUMANAGARA";
const animasiTeks = document.querySelector('#teks');

function ketikTeks() {
  if (i < valueTeks.length) {
    animasiTeks.innerHTML += valueTeks.charAt(i);
    i++;
    setTimeout(ketikTeks, 100);
  }
}
window.onload = ketikTeks;
console.log(animasiTeks);
