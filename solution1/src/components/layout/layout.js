const maxSize = 12;
const style = document.createElement("style");
let itemsClasses = "";
for (let i = 1; i <= 12; i++) {
  itemsClasses += `.item-${i} {
  max-width: ${(100 * i) / maxSize}%;
  flex-basis: ${(100 * i) / maxSize}%;
}`;
}

style.innerHTML = itemsClasses;
document.getElementsByTagName("head")[0].appendChild(style);
