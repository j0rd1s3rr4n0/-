//originaljavascript
var video = document.getElementById("bgvid"),
    pausebtn = document.getElementById("pause"),
    mutebtn = document.getElementById("mute");
if (window.matchMedia("(prefers-reduced-motion)").matches) {
    video.removeAttribute("autoplay");
    video.pause();
    pausebtn.innerHTML = "play video";
}
pausebtn.addEventListener("click", function() {
    if (video.paused) {
        video.play();
        pausebtn.innerHTML = "pause video";
    } else {
        video.pause();
        pausebtn.innerHTML = "play video";
    }
});
mutebtn.addEventListener("click", function() {
    if (video.muted) {
        video.muted = false;
        mutebtn.innerHTML = "mute video";
    } else {
        video.muted = true;
        mutebtn.innerHTML = "unmute video";
    }
});