let audio = document.getElementById("player");
let play_pause = document.getElementById("play");
let tittle = document.querySelector('.playlistDay')
let muteButton = document.querySelector('#mute');
let volumeRange = document.querySelector('#volume_range');
let localRange = document.querySelector('#local');
let currenttime = document.querySelector('.currentduration');
let totalTime = document.querySelector('.totalduration');
let statusPlay = false;
function updateDaytitle(){
    let today =new Date();
    tittle.innerHTML=`Músicas do Dia ${today.getDate()<9? '0'+today.getDate():today.getDate()} - ${today.getUTCMonth()<9? '0'+today.getUTCMonth():today.getUTCMonth()} - ${today.getFullYear()}`
}
function datailsFooter(){
    let now =new Date();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();
    let day = now.getDay()
    
    let dayWeek=['Domingo','Segunda-Feira','Terça-Feira','Quarta-Feira','Quinta-Feira','Sexta-Feira','Sábado']
    actualDay.innerHTML=`Dia: ${dayWeek[day]}`
    actualTime.innerHTML=`Hora: ${hours<10? '0'+hours:hours}:${minutes<10? '0'+minutes:minutes}:${seconds<10? '0'+seconds:seconds} h`  
}

datailsFooter()
updateDaytitle()
setInterval(datailsFooter,1000)

play_pause.onclick= ()=> plaMusic()
muteButton.onclick= ()=> muteVol()
volumeRange.oninput= ()=> setVolume(volumeRange.value)
volumeRange.onchange= ()=> setVolume(volumeRange.value)
localRange.onchange= ()=> setDuration(localRange.value)
localRange.oninput= ()=> setDuration(localRange.value)

audio.onloadeddata=() =>{
    localRange.max = audio.duration;
    totalTime.textContent = secondsToMinutes(audio.duration)
}
audio.ontimeupdate=() =>{
    currenttime.textContent=secondsToMinutes(audio.currentTime);
    localRange.value=audio.currentTime
}
function plaMusic(){
    if(statusPlay){
        audio.pause()
        play_pause.innerHTML='play_circle_filled'
        statusPlay=false
    }else{
        audio.play()
        play_pause.innerHTML='pause_circle_filled'
        statusPlay=true
    }
}
function muteVol(){
    audio.muted=!audio.muted;
    muteButton.innerHTML= audio.muted? 'volume_off':'volume_up';
}
function setVolume(value){
    audio.volume = value/100;
}
function setDuration(value){
    console.log(audio.currentTime)
    audio.currentTime = parseFloat(value);
}

function secondsToMinutes(time){
    const minutes = Math.floor(time/60);
    const seconds = Math.floor(time % 60)
    return `${('0'+minutes).slice(-2)}:${('0'+seconds).slice(-2)}`
}
