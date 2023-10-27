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

const accordion = () => {
    const accordion = document.querySelectorAll(".accordion");
    accordion.forEach(item => {
        const opener = item.querySelector(".accordion-header");
        opener.addEventListener("click", () => {
            [...accordion].filter(i => i !== item).forEach(i => i.classList.remove("--open"));
            item.classList.toggle("--open");
        });
    });
};

const audioPlayer = () => {
    const allAudioElements = document.querySelectorAll("audio");
    const audioButton = document.querySelectorAll(".audio-button");
    const audioComponent = document.querySelector(".audio-component");
    const audioPlayer = audioComponent.querySelector(".audio-player");
    const audioPlayerTitle = audioComponent.querySelector(".audio-title");
    const currentTimeContainer = audioComponent.querySelector(".audio-progress");
    const seekSlider = audioComponent.querySelector(".seek-slider");
    const playButton = audioComponent.querySelector(".play-btn");
    const volumeButton = audioComponent.querySelector(".audio-volume");
    const playIcon = audioComponent.querySelector(".play-icon");
    const pauseIcon = audioComponent.querySelector(".pause-icon");
    const volumeIcon = audioComponent.querySelector(".volume-icon");
    const muteIcon = audioComponent.querySelector(".mute-icon");
    let raf = null;

    const calculateTime = (sec) => {
        let minutes = Math.floor(sec / 60);
        let seconds = Math.floor(sec - minutes * 60);
        if (seconds < 10) {
            seconds = `0${seconds}`;
        }
        return `${minutes}:${seconds}`;
    };

    const whilePlaying = (audio) => {
        seekSlider.value = Math.floor(audio.currentTime);
        currentTimeContainer.textContent = calculateTime(seekSlider.value);
        audioPlayer.style.setProperty("--seek-before-width", `${seekSlider.value / seekSlider.max * 100}%`);
        raf = requestAnimationFrame(() => whilePlaying(audio));
    };

    const playAudio = (audio) => {
        if (audio.paused) {
            audio.play();
            requestAnimationFrame(() => whilePlaying(audio));
        } else {
            audio.pause();
        };
        playIcon.classList.toggle("--toggle-play");
        pauseIcon.classList.toggle("--toggle-play");
    };

    const stopAudio = (audio) => {
        audio.pause();
        audio.currentTime = 0;
        playIcon.classList.remove("--toggle-play");
        pauseIcon.classList.remove("--toggle-play");
        cancelAnimationFrame(raf);
    };

    const controlVolume = (audio) => {
        if (audio.volume > 0) {
            audio.volume = 0;
            volumeIcon.classList.add("--toggle-volume");
            muteIcon.classList.add("--toggle-volume");
        } else {
            audio.volume = 1;
            volumeIcon.classList.remove("--toggle-volume");
            muteIcon.classList.remove("--toggle-volume");
        };
    };

    audioButton.forEach(button => {
        button.addEventListener("click", () => {
            const audioFile = button.querySelector("audio");

            allAudioElements.forEach(audio => {
                stopAudio(audio);
            });

            audioPlayerTitle.innerHTML = button.querySelector("span").innerHTML;
            if (!audioComponent.classList.contains("--display")) {
                audioComponent.classList.add("--display");
                setTimeout(() => {
                    audioPlayer.classList.add("--opacity");
                    const doc = document.documentElement;
                    doc.style.setProperty("--margin-bottom", `calc(1.5rem + ${audioPlayer.offsetHeight}px)`);
                }, 100);
            };

            playButton.onclick = () => playAudio(audioFile);

            volumeButton.onclick = () => controlVolume(audioFile);

            playAudio(audioFile);

            audioFile.addEventListener("timeupdate", () => {
                if (audioFile.duration === audioFile.currentTime) {
                    stopAudio(audioFile);
                    audioPlayer.classList.remove("--opacity");
                    audioPlayerTitle.innerHTML = "";
                    audioComponent.classList.remove("--display");
                    const doc = document.documentElement;
                    doc.style.setProperty("--margin-bottom", `1.5rem`);
                    volumeIcon.classList.remove("--toggle-volume");
                    muteIcon.classList.remove("--toggle-volume");
                    audioFile.volume = 1;
                };
            });

            const showRangeProgress = (rangeInput) => {
                audioPlayer.style.setProperty("--seek-before-width", rangeInput.value / rangeInput.max * 100 + "%");
            };

            seekSlider.addEventListener("input", (e) => {
                showRangeProgress(e.target);
            });

            const setSliderMax = () => {
                seekSlider.max = Math.floor(audioFile.duration);
            };

            if (audioFile.readyState > 0) {
                setSliderMax();
            };

            audioFile.addEventListener("playing", () => {
                setSliderMax();
            });

            seekSlider.addEventListener("input", () => {
                currentTimeContainer.textContent = calculateTime(seekSlider.value);
                if (!audioFile.paused) {
                    cancelAnimationFrame(raf);
                };
            });

            seekSlider.addEventListener("change", () => {
                audioFile.currentTime = seekSlider.value;
                if (!audioFile.paused) {
                    requestAnimationFrame(() => whilePlaying(audioFile));
                };
            });
        });
    });
};

const scrollToTop = () => {
    const scroller = document.querySelector(".footer svg");
    scroller.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
        });
    });
};

const scrollIntoView = () => {
    const mediaQuery = window.matchMedia("(max-width: 900px)");
    const handleMediaQuery = (e) => {
        const scroller = document.getElementById("scroller");
        const element = document.getElementById("info");
        const offset = 80;
        const elementPosition = element.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.scrollY - offset;
        if (e.matches) {
            scroller.addEventListener("click", () => {
                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });
            });
        };
    };
    mediaQuery.addListener(handleMediaQuery);
    handleMediaQuery(mediaQuery);
};

window.addEventListener("load", () => {
    history.scrollRestoration = "manual";
    documentHeight();
    menuOpener();
    scrollToTop();
    scrollIntoView();
});

window.addEventListener("resize", () => {
    documentHeight();
});