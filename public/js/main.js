// ================= FORM OPEN AND CLOSE =======================
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("hp-closebtn")[0];

btn.onclick = function () {
    modal.style.display = "block";
}

span.onclick = function () {
    modal.classList.add("modal-close");
    setTimeout(function () {
        modal.style.display = "none";
        modal.classList.remove("modal-close");
    }, 750);
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.classList.add("modal-close");
        setTimeout(function () {
            modal.style.display = "none";
            modal.classList.remove("modal-close");
        }, 1000);
    }
}

// ================= Scroll Snap =======================

const gra = function(min, max) {
	return Math.random() * (max - min) + min;
};
const init = function() {
	let items = document.querySelectorAll("hp-scroll");
	for (let i = 0; i < items.length; i++) {
		items[i].style.minHeight = gra(120, 205) + "vh";
		items[i].style.background = randomColor({ luminosity: "light" });
	}

	cssScrollSnapPolyfill();
};
init();


// ================= FOOTER EXPANDABLE =======================
let coll = document.getElementsByClassName("collapsible");
let i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        let content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}

// ================= AOS =======================

AOS.init();


// ================= VOICE =======================

function playAudioOnHover() {
    var audios = document.querySelectorAll('audio');

    // this.addEventListener('mouseover', function() {
    [].forEach.call(audios, function (audio) {
        audio.play();
    });
    // }, false);

    this.addEventListener('mouseleave', function () {
        [].forEach.call(audios, function (audio) {
            audio.pause();
            audio.currentTime = 0;
        });
    }, false);
}

var image1 = document.getElementById('image1');
image1.addEventListener('mouseover', playAudioOnHover);

var image2 = document.getElementById('image2');
image2.addEventListener('mouseover', playAudioOnHover);
