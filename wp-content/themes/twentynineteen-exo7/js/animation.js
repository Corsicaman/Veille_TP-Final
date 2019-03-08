window.addEventListener("load", function() {
    if (document.querySelector("figure") != null) {
        document.querySelector(".entry-title").classList.add("animTitre");
        document.querySelector("figure img").classList.add("animImg");
    }
});