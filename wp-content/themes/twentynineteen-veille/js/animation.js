window.addEventListener("load", function() {
    if (document.querySelector(".entry-title") != null) {
        document.querySelector(".entry-title").classList.add("animTitre");
    }
    if (document.querySelector("figure") != null) {
        document.querySelector("figure img").classList.add("animImg");
    }
});