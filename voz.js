const btnGrabar = document.getElementById('btnGrabar');
const texto = document.getElementById('traductor');

let recognition = new webkitSpeechRecognition();

recognition.lang = 'es-ES';
recognition.continuous = false;
recognition.interimResults = false;

recognition.onresult = (event) => {
    const results = event.results;
    const frase = results[results.length - 1][0].transcript;
    texto.value = frase;
    btnGrabar.src = "img/iconfinder-mute-mic-microphone-audio-sound-4593173_122241.png";
}

btnGrabar.addEventListener('click', () => {
    recognition.start();
    btnGrabar.src = "img/iconfinder-microphone-mic-audio-sound-music-4593172_122251.png";
}) 