$("#checkMenu").click(function() {
    if ($(this).is(':checked')) {
        $("#titre > p").addClass("titreAnim");
        $(".separateur_01").addClass("sepa_sitePortfolio");
        $("#soustitre2").addClass("txt_sitePortfolio");
        $("#soustitre").addClass("txt_sousTitre");
    } else {
        $("#titre > p").removeClass("titreAnim");
        $(".separateur_01").removeClass("sepa_sitePortfolio");
        $("#soustitre2").removeClass("txt_sitePortfolio");
        $("#soustitre").removeClass("txt_sousTitre");
    }
});