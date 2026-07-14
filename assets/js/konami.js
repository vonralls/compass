document.addEventListener("DOMContentLoaded", function () {

    const secret = [
        "ArrowUp",
        "ArrowUp",
        "ArrowDown",
        "ArrowDown",
        "ArrowLeft",
        "ArrowRight",
        "ArrowLeft",
        "ArrowRight",
        "b",
        "a"
    ];

    let keys = [];

    document.addEventListener("keydown", function (e) {

        keys.push(e.key);

        keys = keys.slice(-secret.length);

        console.log(keys);

        if (JSON.stringify(keys.map(k => k.toLowerCase())) ===
            JSON.stringify(secret.map(k => k.toLowerCase()))) {

            const toast = document.createElement("div");

toast.className = "owl-toast";
toast.textContent = "🦉 The owls are not what they seem.";

document.body.appendChild(toast);

setTimeout(() => {
    toast.classList.add("visible");
}, 10);

setTimeout(() => {
    toast.classList.remove("visible");

    setTimeout(() => {
        toast.remove();
    }, 300);

}, 5000);

            keys = [];
        }

    });

});