var fortune = [
    "Love For All, Hatred For None",
    "Success is a JOURNEY not a DESTINATION",
    "Change the world by being yourself",
    "Every moment is a fresh beginning",
    "Never regret anything that made you smile",
    "Die with memories, not dreams",
    "Success is not final; failure is not fatal: It is the courage to continue that counts.",
    "It is better to fail in originality than to succeed in imitation.",
    "The road to success and the road to failure are almost exactly the same.",
    "Success usually comes to those who are too busy to be looking for it."
]


function Fortune() {
    var random = Math.floor(Math.random() * (fortune.length));
    document.getElementById('ShowFortune').innerHTML=fortune[random];
}