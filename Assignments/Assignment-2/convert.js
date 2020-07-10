var bdt, gbp, usd, eur;

function findFields() {
    bdt = document.getElementById("BDT");
    gbp = document.getElementById("GBP");
    usd = document.getElementById("USD");
    eur = document.getElementById("EUR");

}

function convertbdt() {
    usd.value = parseFloat(bdt.value) * 0.012;
    eur.value = parseFloat(bdt.value) * 0.011;
    gbp.value = parseFloat(bdt.value) * 0.0095;
}

function convertgbp() {
    usd.value = parseFloat(gbp.value) * 0.49246;
    eur.value = parseFloat(gbp.value) * 0.69714;
    bdt.value = parseFloat(gbp.value) * 105.53;
}

function converteur() {
    gbp.value = parseFloat(eur.value) * 1.43448;
    usd.value = parseFloat(eur.value) * 0.70641;
    bdt.value = parseFloat(eur.value) * 95.20;
}



function convertusd() {
    gbp.value = parseFloat(usd.value) * 2.03032;
    eur.value = parseFloat(usd.value) * 1.41544;
    bdt.value = parseFloat(usd.value) * 84.91;
}