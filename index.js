//LANGUAGE change

if (localStorage.getItem("lang") === "en") {
  document.querySelectorAll(".lv").forEach(i => {
    i.style.display = "none";
      });
    document.querySelectorAll(".en").forEach(i => {
      i.style.display = "block";
        });
} else if (localStorage.getItem("lang") === "lv") {
  document.querySelectorAll(".en").forEach(i => {
    i.style.display = "none";
      });
    document.querySelectorAll(".lv").forEach(i => {
      i.style.display = "block";
        });
};

for (var li of (document.querySelectorAll(".langu"))) {
li.addEventListener("click", function() {
  if (this.innerHTML == "ENG") {
    document.querySelectorAll(".lv").forEach(i => {
      i.style.display = "none";
    });
    document.querySelectorAll(".en").forEach(i => {
      i.style.display = "block";
    });
    localStorage.setItem("lang", "en");
  } else {
    document.querySelectorAll(".lv").forEach(i => {
      i.style.display = "block";
    });
    document.querySelectorAll(".en").forEach(i => {
      i.style.display = "none";
    });
    localStorage.setItem("lang", "lv");
  };
})};

// PLANNER COLOR THEME
const themeColors = ["primary", "success", "warning", "info"];
if (localStorage.getItem("color") === "mono") {
  document.querySelector(".plannerHeader").classList.remove("bg-danger");
  document.querySelector(".plannerHeader").classList.add("bg-dark");
  for (var i = 0; i < themeColors.length; i++) {
    for (var element of (document.querySelectorAll(".bg-" + themeColors[i]))) {
      element.classList.remove("bg-" + themeColors[i]);
      element.classList.remove("text-white");
      element.classList.add("bg-light");
    };
  }
} else if (localStorage.getItem("color") === "multi") {
  document.querySelector(".plannerHeader").classList.remove("bg-dark");
  document.querySelector(".plannerHeader").classList.add("bg-danger");
  let i = 0;
  for (var element of (document.querySelectorAll(".bg-light"))) {
    element.classList.remove("bg-light");
    element.classList.add("bg-" + themeColors[i], "text-white");
    i++;
  };
};



for (var li of (document.querySelectorAll(".colorTheme"))) {
  li.addEventListener("click", function() {
    if (this.innerHTML == "MONO") {
      document.querySelector(".plannerHeader").classList.remove("bg-danger");
      document.querySelector(".plannerHeader").classList.add("bg-dark");
      for (var i = 0; i < themeColors.length; i++) {
        for (var element of (document.querySelectorAll(".bg-" + themeColors[i]))) {
          element.classList.remove("bg-" + themeColors[i]);
          element.classList.remove("text-white");
          element.classList.add("bg-light");
        };
      }
      localStorage.setItem("color", "mono");
    } else {
      document.querySelector(".plannerHeader").classList.remove("bg-dark");
      document.querySelector(".plannerHeader").classList.add("bg-danger");
      let i = 0;
      for (var element of (document.querySelectorAll(".bg-light"))) {
        element.classList.remove("bg-light");
        element.classList.add("bg-" + themeColors[i], "text-white");
        i++;
      };
      localStorage.setItem("color", "multi");
    };
  })
};

// PLANNER DATE FIELD

function getDate() {
  const today = new Date();

  const options = {
    weekday: "long",
    day: "numeric",
    month: "long"
  };

  return today.toLocaleDateString("en-US", options);

};
if (document.querySelector(".date")) {
document.querySelector(".date").innerHTML = getDate();
};
// PLANNER QUOTES API
fetch("https://type.fit/api/quotes")
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    let i = Math.floor(Math.random() * 1642);
    if (document.querySelector(".quote")){
    document.querySelector(".quote").innerHTML = ('"' + data[i].text + '" - ' + data[i].author);
}
  });
