document.addEventListener("DOMContentLoaded", () => {

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

    let entered = [];

    document.addEventListener("keydown", (e) => {

        entered.push(e.key.toLowerCase());

        entered = entered.slice(-secret.length);

        const match = secret.every((key, index) => {
            return key.toLowerCase() === entered[index];
        });

        if (!match) {
            return;
        }

        entered = [];

        showOwl();

    });

    function showOwl() {

        const existing = document.querySelector(".owl-toast");

        if (existing) {
            existing.remove();
        }

        const toast = document.createElement("div");

        toast.className = "owl-toast";

        toast.textContent = "🦉 The owls are not what they seem.";

        document.body.appendChild(toast);

        requestAnimationFrame(() => {
            toast.classList.add("visible");
        });

        setTimeout(() => {

            toast.classList.remove("visible");

            setTimeout(() => {
                toast.remove();
            }, 300);

        }, 5000);

    }

});