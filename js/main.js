// this function is created to change the selection option
let size = document.getElementById("coffee__size");
function changeOption() {
  let order = document.getElementById("coffee__order").value;
  if (order == "HotCoffee") {
    size.innerHTML = "";
    CoffeeSize();
  } else if (order == "Espresso") {
    size.innerHTML = "";
    espressoSize();
  } else if (order == "doulbe_Espresso") {
    size.innerHTML = "";
    espressoSize();
  } else if (order == "Cappuccino") {
    size.innerHTML = "";
    teaSize();
  } else if (order == "long_black") {
    size.innerHTML = "";
    teaSize();
  } else if (order == "hot_chocolate") {
    size.innerHTML = "";
    teaSize();
  } else if (order == "") {
    size.innerHTML = "";
  }
}
// size for the HotCofee
function CoffeeSize() {
  let hotCoffeeSize = ["Small", "Medium", "Large"];
  for (let i = 0; i < hotCoffeeSize.length; i++) {
    let opt = document.createElement("option");
    opt.value = hotCoffeeSize[i];
    opt.innerHTML = hotCoffeeSize[i];
    size.appendChild(opt);
  }
}
// size for Espresso
function espressoSize() {
  let espressoSize = ["Small"];
  for (let i = 0; i < espressoSize.length; i++) {
    let opt = document.createElement("option");
    opt.value = espressoSize[i];
    opt.innerHTML = espressoSize[i];
    size.appendChild(opt);
  }
}
// size for tea, and Cappuccino, long black, hot chocolate and tee

function teaSize() {
  let Cappucinosize = ["Medium", "Large"];
  for (let i = 0; i < Cappucinosize.length; i++) {
    let opt = document.createElement("option");
    opt.value = Cappucinosize[i];
    opt.innerHTML = Cappucinosize[i];
    size.appendChild(opt);
  }
}
