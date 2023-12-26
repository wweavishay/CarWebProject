const collection = document.getElementsByName("carprice");

function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

for (var i = 0; i < collection.length; i++) {
  document.getElementsByName("carprice")[i].innerHTML =
    getRndInteger(250, 899) + "$";
}
