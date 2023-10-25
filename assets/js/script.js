const documentHeight = () => {
    const doc = document.documentElement;
    doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

const menuOpener = () => {
    const opener = document.getElementById("menu-opener");
    const closerItems = document.querySelectorAll(".site-nav-item a");
    const menu = document.getElementById("menu");
    const menuContent = menu.querySelector(".menu-wrapper");
    const main = document.querySelector(".main");
    const body = document.body
    opener.addEventListener("click", () => {
        opener.classList.toggle("--rotate");
        menu.classList.toggle("--open");
        main.classList.toggle("--disable");
        body.classList.toggle("--disable");
        setTimeout(() => {
            menuContent.classList.toggle("--open");
        }, 100);
    });

    closerItems.forEach(item => {
        item.addEventListener("click", () => {
            opener.classList.remove("--rotate");
            menuContent.classList.remove("--open");
            main.classList.remove("--disable");
            body.classList.remove("--disable");
            setTimeout(() => {
                menu.classList.remove("--open");
            }, 100);
        })
    });
};

const audioPlayer = () => {
    const allAudioElements = document.querySelectorAll("audio");
    const audioButton = document.querySelectorAll(".audio-button");
    const audioComponent = document.querySelector(".audio-component");
    const audioPlayer = audioComponent.querySelector(".audio-player");
    const playButton = audioComponent.querySelector(".play-btn");
    const audioPlayerTitle = audioComponent.querySelector(".audio-title");
    const seekSlider = audioComponent.querySelector(".seek-slider");
    const playIcon = audioComponent.querySelector(".play-icon");
    const pauseIcon = audioComponent.querySelector(".pause-icon");
    const volumeIcon = audioComponent.querySelector(".volume-icon");
    const muteIcon = audioComponent.querySelector(".mute-icon");
    const currentTimeContainer = audioComponent.querySelector(".audio-progress");
    const volumeContainer = audioComponent.querySelector(".audio-volume");
    let raf = null;

    audioButton.forEach(button => {
        const audio = button.querySelector("audio");
        const audioName = button.querySelector("span").innerHTML;
        const audioSource = audio.src;
        button.addEventListener("click", () => {
            audioComponent.querySelector("audio").src = audioSource;
            audioPlayerTitle.innerHTML = audioName;
            audioComponent.classList.add("--display");
            setTimeout(() => {
                audioPlayer.classList.add("--opacity");
            }, 100);

            const whilePlaying = () => {
                seekSlider.value = Math.floor(audio.currentTime);
                currentTimeContainer.textContent = calculateTime(seekSlider.value);
                audioPlayer.style.setProperty("--seek-before-width", `${seekSlider.value / seekSlider.max * 100}%`);
                raf = requestAnimationFrame(whilePlaying);
            };

            const playAudio = () => {
                if (audio.paused) {
                    audio.play();
                    requestAnimationFrame(whilePlaying);
                } else {
                    audio.pause();
                    cancelAnimationFrame(raf);
                };
                playIcon.classList.toggle("--toggle-play");
                pauseIcon.classList.toggle("--toggle-play");
            };

            const stopAudio = () => {
                audio.pause();
                audio.currentTime = 0;
                playIcon.classList.remove("--toggle-play");
                pauseIcon.classList.remove("--toggle-play");
            };
            stopAudio();
            playAudio();

            playButton.addEventListener("click", () => {
                playAudio();
            });

            audio.addEventListener("timeupdate", () => {
                if (audio.duration === audio.currentTime) {
                    stopAudio();
                    audioPlayer.classList.remove("--opacity");
                    setTimeout(() => {
                        audio.remove;
                        audioPlayerTitle.innerHTML = "";
                        audioComponent.classList.remove("--display");
                    }, 1000);
                };
            });

            volumeContainer.addEventListener("click", () => {
                controlVolume();
            });

            const controlVolume = () => {
                if (audio.volume > 0) {
                    audio.volume = 0;
                    volumeIcon.classList.add("--toggle-volume");
                    muteIcon.classList.add("--toggle-volume");
                } else {
                    audio.volume = 1;
                    volumeIcon.classList.remove("--toggle-volume");
                    muteIcon.classList.remove("--toggle-volume");
                }
            }

            const showRangeProgress = (rangeInput) => {
                audioPlayer.style.setProperty("--seek-before-width", rangeInput.value / rangeInput.max * 100 + "%");
            };

            seekSlider.addEventListener("input", (e) => {
                showRangeProgress(e.target);
            });

            const calculateTime = (sec) => {
                let minutes = Math.floor(sec / 60);
                let seconds = Math.floor(sec - minutes * 60);
                if (seconds < 10) {
                    seconds = `0${seconds}`;
                }
                return `${minutes}:${seconds}`;
            };

            const setSliderMax = () => {
                seekSlider.max = Math.floor(audio.duration);
            };

            if (audio.readyState > 0) {
                setSliderMax();
            };

            audio.addEventListener("playing", () => {
                setSliderMax();
            });

            seekSlider.addEventListener("input", () => {
                currentTimeContainer.textContent = calculateTime(seekSlider.value);
                if (!audio.paused) {
                    cancelAnimationFrame(raf);
                };
            });

            seekSlider.addEventListener("change", () => {
                audio.currentTime = seekSlider.value;
                if (!audio.paused) {
                    requestAnimationFrame(whilePlaying);
                };
            });
        });
    });
};

window.addEventListener("load", () => {
    documentHeight();
    menuOpener();
    audioPlayer();
});

window.addEventListener("resize", () => {
    documentHeight();
});