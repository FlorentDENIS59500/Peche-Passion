function sblanche() {
  document.getElementById("ablanche").style.color = "black";
  document.getElementById("ablonde").style.color = "white";
  document.getElementById("aambree").style.color = "white";
  document.getElementById("abrune").style.color = "white";
  document.getElementById("aspecial").style.color = "white";
}
function sblonde() {
  document.getElementById("ablanche").style.color = "white";
  document.getElementById("ablonde").style.color = "black";
  document.getElementById("aambree").style.color = "white";
  document.getElementById("abrune").style.color = "white";
  document.getElementById("aspecial").style.color = "white";
}
function sambree() {
  document.getElementById("ablanche").style.color = "white";
  document.getElementById("ablonde").style.color = "white";
  document.getElementById("aambree").style.color = "black";
  document.getElementById("abrune").style.color = "white";
  document.getElementById("aspecial").style.color = "white";
}
function sbrune() {
  document.getElementById("ablanche").style.color = "white";
  document.getElementById("ablonde").style.color = "white";
  document.getElementById("aambree").style.color = "white";
  document.getElementById("abrune").style.color = "black";
  document.getElementById("aspecial").style.color = "white";
}
function sspeciale() {
  document.getElementById("ablanche").style.color = "white";
  document.getElementById("ablonde").style.color = "white";
  document.getElementById("aambree").style.color = "white";
  document.getElementById("abrune").style.color = "white";
  document.getElementById("aspecial").style.color = "black";
}

$(document).ready(function () {
  $(".links").click(function () {
    if ($(this).html() == "Blanche") {
      $("#sous-blonde").hide();
      $("#sous-ambree").hide();
      $("#sous-brune").hide();
      $("#sous-speciale").hide();
      $("#sous-blanche").show();
    } else if ($(this).html() == "Blonde") {
      $("#sous-blonde").show();
      $("#sous-ambree").hide();
      $("#sous-brune").hide();
      $("#sous-speciale").hide();
      $("#sous-blanche").hide();
    } else if ($(this).html() == "Ambrée") {
      $("#sous-blonde").hide();
      $("#sous-ambree").show();
      $("#sous-brune").hide();
      $("#sous-speciale").hide();
      $("#sous-blanche").hide();
    } else if ($(this).html() == "Brune") {
      $("#sous-blonde").hide();
      $("#sous-ambree").hide();
      $("#sous-brune").show();
      $("#sous-speciale").hide();
      $("#sous-blanche").hide();
    } else if ($(this).html() == "Spéciale") {
      $("#sous-blonde").hide();
      $("#sous-ambree").hide();
      $("#sous-brune").hide();
      $("#sous-speciale").show();
      $("#sous-blanche").hide();
    }
  });
});
