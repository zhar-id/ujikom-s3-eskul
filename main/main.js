let badmintonBtn = document.getElementById("o-badminton");
let basketBtn = document.getElementById("o-basket");
let futsalBtn = document.getElementById("o-futsal");
let voliBtn = document.getElementById("o-voli");

let link = document.getElementById("link");
let deskripsi = document.getElementById("deskripsi");
let teksmerahkanan = document.getElementById("sports2");
badmintonBtn.onclick = function () {
  deskripsi.innerHTML =
    "satu satu nya ekstrakulikuler bola kecil yang ada di Smkn 1 Katapang. Dengan mengikuti ekstrakulikuler ini diharapkan siswa/siswi yang memiliki potensi pada olahraga badminton dapat bersama sama mengembangkan potensi yang dimiliki nya disini";
  teksmerahkanan.innerHTML = "BADMINTON NEKAT";
  teksmerahkanan.style.fontSize = "41px";
  link.href = "profilbadminton.html";
};
basketBtn.onclick = function () {
  deskripsi.innerHTML =
    "Salah satu ekstrakulikuler bola besar yang ada di Smkn 1 Katapang. Dengan mengikuti ekstrakulikuler ini diharapkan siswa/siswi yang memiliki potensi pada olahraga basket dapat bergabung bersama kami. Basket sakat memiliki visi untuk menjadi kan ekskul ini sebagai wadah para pecinta basket";
  teksmerahkanan.innerHTML = "BASKET NEKAT";
  teksmerahkanan.style.fontSize = "52px";
  link.href = "profilbasket.html";
};
futsalBtn.onclick = function () {
  deskripsi.innerHTML =
    "Salah satu ekstrakulikuler bola besar yang ada di Smkn 1 Katapang. Dengan mengikuti ekstrakulikuler ini diharapkan siswa/siswi yang memiliki potensi pada olahraga Futsal dapat bergabung bersama kami. Ekskul kami mempunyai misi agar siswa maupun siswi yang memiliki minat bisa langsung bergabung bersama kami.";
  teksmerahkanan.innerHTML = "FUTSAL NEKAT";
  teksmerahkanan.style.fontSize = "55px";
  link.href = "profilfutsal.html";
};
voliBtn.onclick = function () {
  deskripsi.innerHTML =
    "Salah satu ekstrakulikuler bola besar yang ada di Smkn 1 Katapang. Dengan mengikuti ekstrakulikuler ini diharapkan siswa/siswi yang memiliki potensi pada olahraga volly dapat bergabung bersama kami.";
  teksmerahkanan.innerHTML = "VOLLY NEKAT";
  teksmerahkanan.style.fontSize = "55px";
  link.href = "profilvoli.html";
};
function setupTypingEffect() {
  const texts = [
    "SAKAT<br>SPORTS",
    "BASKET<br>NEKAT",
    "VOLLY<br>NEKAT",
    "FUTSAL<br>NEKAT",
    "BADMINTON<br>NEKAT",
  ];
  let index = 0;
  const textElement = document.getElementById("sakat");

  function type() {
    const text = texts[index];
    let charIndex = 0;

    function typeChar() {
      textElement.innerHTML = text.slice(0, charIndex);

      if (charIndex < text.length) {
        charIndex++;
        setTimeout(typeChar, 100);
      } else {
        index++;
        if (index >= texts.length) {
          index = 0;
        }
        setTimeout(type, 2000);
      }
    }

    typeChar();
  }

  type();
}

// Panggil fungsi setupTypingEffect untuk memulai efek typing.
setupTypingEffect();
