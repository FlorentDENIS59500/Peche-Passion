function colorArticleBeer() {
  let getUrl = location.href.split("=");
  if (getUrl[getUrl.length - 1] == "Blanche") {
    document.getElementById("ablanche").style.color = "darkblue";
  } else if (getUrl[getUrl.length - 1] == "Blonde") {
    document.getElementById("ablonde").style.color = "darkblue";
  } else if (getUrl[getUrl.length - 1] == "Ambr%C3%A9e") {
    document.getElementById("aambree").style.color = "darkblue";
  } else if (getUrl[getUrl.length - 1] == "Brune") {
    document.getElementById("abrune").style.color = "darkblue";
  } else if (getUrl[getUrl.length - 1] == "Sp%C3%A9ciale") {
    document.getElementById("aspecial").style.color = "darkblue";
  }
}
window.addEventListener("load", colorArticleBeer);

