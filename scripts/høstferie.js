// Sett tidspunkt som vi teller ned til
const countDownDate = new Date("oct 5, 2020 15:35:00").getTime();

// Oppdater nedtellingen hvert sekund
const x = setInterval(function ()
{
    // Hent nåværende tidspunkt
    const now = new Date().getTime();

    // Finn tid fra nåværende tidspunkt til satt tidspunkt
    const distance = countDownDate - now;

    // Regn ut tidselementer
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Vis resultat i element med ID 'nedtelling'
    document.getElementById("nedtelling").innerHTML = "Antall dager til høstferien: " + days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    // Vis 'EXPIRED' om resultat er negativt
    if (distance < 0)
    {
        clearInterval(x);
        document.getElementById("nedtelling").innerHTML = "EXPIRED";
    }
}, 1000);