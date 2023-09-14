

function toggleDateInput() {
    var dateInput = document.getElementById('dateInput');
    var yesCheckbox = document.getElementById('yesCheckbox');
    var noCheckbox = document.getElementById('noCheckbox');



    if (noCheckbox.checked) {
      dateInput.style.display = 'none';
    } else {
      dateInput.style.display = 'block';
    }

    if (yesCheckbox.checked) {
      noCheckbox.checked = false;
      dateInput.style.display = 'block';
    } else if (noCheckbox.checked) {
      yesCheckbox.checked = false;
      dateInput.style.display = 'none';
    }

  }


  
var femaleRadioButton = document.getElementById("female");

// Add an event listener to check if the female radio button is checked
femaleRadioButton.addEventListener("change", function() {
  if (femaleRadioButton.checked) {
    // Display an alert message if female is selected
    alert("You can't donate blood ");
  }
});


  window.onload = function () {
    var dateInput = document.getElementById('dateInput');
    var today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('max', today);
  };

  document
    .getElementById('loginButton')
    .addEventListener('click', function () {
      window.location.href = 'search_donor.php';
    });
 
  document
    .getElementById('HomePage')
    .addEventListener('click', function () {
      window.location.href = 'logged_index.php';
    });






  var stateObject = {
    "Azad Kashmir": [
      "Bhimbar",
      "Kotli",
      "Kotli District",
      "Mirpur District",
      "Muzaffarābād",
      "New Mirpur",
      "Rawala Kot"
    ],
    "Balochistan": [

      "Alik Ghund",
      "Awārān District",
      "Barkhan",
      "Bārkhān District",
      "Bela",
      "Bhag",
      "Chāgai District",
      "Chaman",
      "Chowki Jamali",
      "Dadhar",
      "Dalbandin",
      "Dera Bugti",
      "Dera Bugti District",
      "Duki",
      "Gadani",
      "Garhi Khairo",
      "Gwadar",
      "Harnai",
      "Jāfarābād District",
      "Jhal Magsi District",
      "Jiwani",
      "Kalat",
      "Kalāt District",
      "Khadan Khak",
      "Kharan",
      "Khārān District",
      "Khuzdar",
      "Khuzdār District",
      "Kohlu",
      "Kot Malik Barkhurdar",
      "Lasbela District",
      "Loralai",
      "Loralai District",
      "Mach",
      "Mastung",
      "Mastung District",
      "Mehrabpur",
      "Mūsa Khel District",
      "Nasīrābād District",
      "Nushki",
      "Ormara",
      "Panjgūr District",
      "Pasni",
      "Pishin",
      "Qila Saifullāh District",
      "Quetta",
      "Quetta District",
      "Sibi",
      "Sohbatpur",
      "Surab",
      "Turbat",
      "Usta Muhammad",
      "Uthal",
      "Zhob",
      "Zhob District",
      "Ziarat",
      "Ziārat District"
    ],
    "Federally Administered Tribal Areas": [
      "Alizai",
      "Gulishah Kach",
      "Landi Kotal",
      "Miran Shah",
      "North Wazīristān Agency",
      "Shinpokh",
      "South Wazīristān Agency",
      "Wana"
    ],
    "Gilgit-Baltistan": [
      "Barishal",
      "Gilgit",
      "Skardu"
    ],
    "Islamabad Capital Territory": [
      "Islamabad"
    ],
    "Khyber Pakhtunkhwa": [
      "Abbottabad",
      "Akora",
      "Aman Garh",
      "Amirabad",
      "Ashanagro Koto",
      "Baffa",
      "Bannu",
      "Bat Khela",
      "Battagram",
      "Battagram District",
      "Buner District",
      "Charsadda",
      "Cherat Cantonement",
      "Chitral",
      "Dera Ismail Khan",
      "Dera Ismāīl Khān District",
      "Doaba",
      "Hangu",
      "Haripur",
      "Havelian",
      "Kakad Wari Dir Upper",
      "Karak",
      "Khalabat",
      "Kohat",
      "Kulachi",
      "Lachi",
      "Lakki",
      "Mansehra",
      "Mardan",
      "Mingora",
      "Noorabad",
      "Nowshera",
      "Nowshera Cantonment",
      "Pabbi",
      "Paharpur",
      "Peshawar",
      "Risalpur Cantonment",
      "Sarai Naurang",
      "Shabqadar",
      "Shingli Bala",
      "Shorkot",
      "Swabi",
      "Tangi",
      "Tank",
      "Thal",
      "Topi",
      "Upper Dir",
      "Utmanzai",
      "Zaida"
    ],
    "Punjab": [
      "Ahmadpur Sial",
      "Ahmedpur East",
      "Alipur Chatha",
      "Arifwala",
      "Attock Tehsil",
      "Baddomalhi",
      "Bahawalnagar",
      "Bahawalpur",
      "Bakhri Ahmad Khan",
      "Basirpur",
      "Basti Dosa",
      "Begowala",
      "Bhakkar",
      "Bhalwal",
      "Bhawana",
      "Bhera",
      "Bhopalwala",
      "Burewala",
      "Chak Azam Saffo",
      "Chak Jhumra",
      "Chak One Hundred Twenty Nine Left",
      "Chak Thirty-one -Eleven Left",
      "Chak Two Hundred Forty-Nine TDA",
      "Chakwal",
      "Chawinda",
      "Chichawatni",
      "Chiniot",
      "Chishtian",
      "Choa Saidanshah",
      "Chuhar Kana",
      "Chunian",
      "Daira Din Panah",
      "Dajal",
      "Dandot RS",
      "Darya Khan",
      "Daska",
      "Daud Khel",
      "Daultala",
      "Dera Ghazi Khan",
      "Dhanot",
      "Dhaunkal",
      "Dhok Awan",
      "Dijkot",
      "Dinan Bashnoian Wala",
      "Dinga",
      "Dipalpur",
      "Dullewala",
      "Dunga Bunga",
      "Dunyapur",
      "Eminabad",
      "Faisalabad",
      "Faqirwali",
      "Faruka",
      "Fazilpur",
      "Ferozewala",
      "Fort Abbas",
      "Garh Maharaja",
      "Gojra",
      "Gujar Khan",
      "Gujranwala",
      "Gujranwala Division",
      "Gujrat",
      "Hadali",
      "Hafizabad",
      "Harnoli",
      "Harunabad",
      "Hasan Abdal",
      "Hasilpur",
      "Haveli Lakha",
      "Hazro",
      "Hujra Shah Muqeem",
      "Jahanian Shah",
      "Jalalpur Jattan",
      "Jalalpur Pirwala",
      "Jampur",
      "Jand",
      "Jandiala Sher Khan",
      "Jaranwala",
      "Jatoi Shimali",
      "Jauharabad",
      "Jhang",
      "Jhang Sadar",
      "Jhawarian",
      "Jhelum",
      "Kabirwala",
      "Kahna Nau",
      "Kahuta",
      "Kalabagh",
      "Kalaswala",
      "Kaleke Mandi",
      "Kallar Kahar",
      "Kalur Kot",
      "Kamalia",
      "Kamar Mushani",
      "Kamoke",
      "Kamra",
      "Kanganpur",
      "Karor",
      "Kasur",
      "Keshupur",
      "Khairpur Tamiwali",
      "Khandowa",
      "Khanewal",
      "Khanga Dogran",
      "Khangarh",
      "Khanpur",
      "Kharian",
      "Khewra",
      "Khurrianwala",
      "Khushab",
      "Kohror Pakka",
      "Kot Addu Tehsil",
      "Kot Ghulam Muhammad",
      "Kot Mumin",
      "Kot Radha Kishan",
      "Kot Rajkour",
      "Kot Samaba",
      "Kot Sultan",
      "Kotli Loharan",
      "Kundian",
      "Kunjah",
      "Ladhewala Waraich",
      "Lahore",
      "Lala Musa",
      "Lalian",
      "Layyah",
      "Layyah District",
      "Liliani",
      "Lodhran",
      "Mailsi",
      "Malakwal",
      "Malakwal City",
      "Mamu Kanjan",
      "Mananwala",
      "Mandi Bahauddin",
      "Mandi Bahauddin District",
      "Mangla",
      "Mankera",
      "Mehmand Chak",
      "Mian Channun",
      "Mianke Mor",
      "Mianwali",
      "Minchinabad",
      "Mitha Tiwana",
      "Moza Shahwala",
      "Multan",
      "Multan District",
      "Muridke",
      "Murree",
      "Mustafabad",
      "Muzaffargarh",
      "Nankana Sahib",
      "Narang Mandi",
      "Narowal",
      "Naushahra Virkan",
      "Nazir Town",
      "Okara",
      "Pakki Shagwanwali",
      "Pakpattan",
      "Pasrur",
      "Pattoki",
      "Phalia",
      "Pind Dadan Khan",
      "Pindi Bhattian",
      "Pindi Gheb",
      "Pir Mahal",
      "Qadirpur Ran",
      "Qila Didar Singh",
      "Rabwah",
      "Rahim Yar Khan",
      "Rahimyar Khan District",
      "Raiwind",
      "Raja Jang",
      "Rajanpur",
      "Rasulnagar",
      "Rawalpindi",
      "Rawalpindi District",
      "Renala Khurd",
      "Rojhan",
      "Sadiqabad",
      "Sahiwal",
      "Sambrial",
      "Sangla Hill",
      "Sanjwal",
      "Sarai Alamgir",
      "Sarai Sidhu",
      "Sargodha",
      "Shahkot Tehsil",
      "Shahpur",
      "Shahr Sultan",
      "Shakargarh",
      "Sharqpur",
      "Sheikhupura",
      "Shorkot",
      "Shujaabad",
      "Sialkot",
      "Sillanwali",
      "Sodhra",
      "Sukheke Mandi",
      "Surkhpur",
      "Talagang",
      "Talamba",
      "Tandlianwala",
      "Taunsa",
      "Toba Tek Singh",
      "Umerkot",
      "Vihari",
      "Wah",
      "Warburton",
      "Wazirabad",
      "West Punjab",
      "Yazman",
      "Zafarwal",
      "Zahir Pir"
    ],
    "Sindh": [
      "Adilpur",
      "Badin",
      "Bagarji",
      "Bandhi",
      "Berani",
      "Bhan",
      "Bhiria",
      "Bhit Shah",
      "Bozdar Wada",
      "Bulri",
      "Chak",
      "Chamber",
      "Chhor",
      "Chuhar Jamali",
      "Dadu",
      "Daromehar",
      "Darya Khan Marri",
      "Daulatpur",
      "Daur",
      "Dhoro Naro",
      "Digri",
      "Diplo",
      "Dokri",
      "Gambat",
      "Garhiyasin",
      "Gharo",
      "Ghauspur",
      "Ghotki",
      "Goth Garelo",
      "Goth Phulji",
      "Goth Radhan",
      "Hala",
      "Hingorja",
      "Hyderabad",
      "Islamkot",
      "Jacobabad",
      "Jām Sāhib",
      "Jamshoro",
      "Jati",
      "Jhol",
      "Johi",
      "Kadhan",
      "Kambar",
      "Kandhkot",
      "Kandiari",
      "Kandiaro",
      "Karachi",
      "Karaundi",
      "Kario Ghanwar",
      "Kashmor",
      "Keti Bandar",
      "Khadro",
      "Khairpur",
      "Khairpur Mir’s",
      "Khairpur Nathan Shah",
      "Khanpur Mahar",
      "Kot Diji",
      "Kotri",
      "Kunri",
      "Lakhi",
      "Larkana",
      "Madeji",
      "Malir Cantonment",
      "Matiari",
      "Matli",
      "Mehar",
      "Miro Khan",
      "Mirpur Bhtoro",
      "Mirpur Khas",
      "Mirpur Mathelo",
      "Mirpur Sakro",
      "Mirwah Gorchani",
      "Mithi",
      "Moro",
      "Nabisar",
      "Nasirabad",
      "Naudero",
      "Naukot",
      "Naushahro Firoz",
      "Nawabshah",
      "New Bādāh",
      "Pad Idan",
      "Pano Aqil",
      "Pir Jo Goth",
      "Pithoro",
      "Rajo Khanani",
      "Ranipur",
      "Ratodero",
      "Rohri",
      "Rustam",
      "Sakrand",
      "Samaro",
      "Sanghar",
      "Sann",
      "Sehwan",
      "Setharja Old",
      "Shahdad Kot",
      "Shahdadpur",
      "Shahpur Chakar",
      "Shikarpur",
      "Sinjhoro",
      "Sīta Road",
      "Sobhodero",
      "Sukkur",
      "Talhar",
      "Tando Adam",
      "Tando Allahyar",
      "Tando Bago",
      "Tando Jam",
      "Tando Mitha Khan",
      "Tando Muhammad Khan",
      "Tangwani",
      "Tharu Shah",
      "Thatta",
      "Thul",
      "Ubauro",
      "Umarkot",
      "Umerkot District",
      "Warah"
    ]
  };

  window.onload = function () {
    var stateSel = document.getElementById("stateSel"),
      districtSel = document.getElementById("districtSel");

    for (var state in stateObject) {
      stateSel.options[stateSel.options.length] = new Option(state, state);
    }

    stateSel.onchange = function () {
      districtSel.length = 1; // remove all options except the first one
      if (this.selectedIndex < 1) return; // nothing selected
      var district = stateObject[this.value];
      for (var i = 0; i < district.length; i++) {
        districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
      }
    }

    stateSel.onchange(); // initialize the district dropdown
  }
