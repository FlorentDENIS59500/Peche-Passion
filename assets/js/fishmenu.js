function colorArticleBeer() {
  let getUrl = location.href.split("=");
  if (getUrl[getUrl.length - 1] == "Bass-Boat") {
    document.getElementById("abassboat").style.color = "darkblue";
  } else if (getUrl[getUrl.length - 1] == "Brochet") {
    document.getElementById("abrochet").style.color = "darkblue";
  } else if (getUrl[getUrl.length - 1] == "Perche") {
    document.getElementById("aperche").style.color = "darkblue";
  } else if (getUrl[getUrl.length - 1] == "Sandre") {
    document.getElementById("asandre").style.color = "darkblue";
  } else if (getUrl[getUrl.length - 1] == "Lavaret") {
    document.getElementById("alavaret").style.color = "darkblue";
  }
}
window.addEventListener("load", colorArticleBeer);

