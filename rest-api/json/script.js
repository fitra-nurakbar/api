let test = document.querySelector(".test");

// let bio = {
//      "nama": "Fitra Nurakbar",
//      "tempat_lahir": "Ciamis",
//      "tanggal_lahir": 6,
//      "bulan_lahir": "December",
//      "tahun_lahir": 2022,
//      "status": false
//    }

// console.log(bio);
// test.innerHTML = JSON.stringify(bio);

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//   if ((xhr.readyState = 4 && xhr.status == 200)) {
//        let bio = this.responseText;
//     let bio = JSON.parse(this.responseText);
//     console.log(bio);
//     test.innerHTML = bio;
//   }
// };

// xhr.open('GET', 'coba.json', true);
// xhr.send();

$.getJSON('coba.json', function(bio){
     console.log(bio);
    test.innerHTML = JSON.stringify(bio);
})