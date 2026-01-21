function getReservations() {
    return JSON.parse(localStorage.getItem("reservations")) || [];
}

function saveReservations(data) {
    localStorage.setItem("reservations", JSON.stringify(data));
}

const form = document.getElementById("reservationForm");
const msg = document.getElementById("msg");
const list = document.getElementById("reservationList");

if (form && list) {

    function renderUserReservations() {
        list.innerHTML = "";
        getReservations().forEach(r => {
            const li = document.createElement("li");
            li.textContent =
                `${r.date} ${r.time} – ${r.service} – ${r.name}`;
            list.appendChild(li);
        });
    }

    form.addEventListener("submit", e => {
        e.preventDefault();

        const reservation = {
            name: document.getElementById("name").value,
            email: document.getElementById("email").value,
            phone: document.getElementById("phone").value,
            date: document.getElementById("date").value,
            time: document.getElementById("time").value,
            service: document.getElementById("service").value,
            experience: document.getElementById("experience").value
        };

        const reservations = getReservations();

        const exists = reservations.some(r =>
            r.date === reservation.date &&
            r.time === reservation.time &&
            r.service === reservation.service
        );

        if (exists) {
            msg.style.color = "red";
            msg.textContent = "Tento termín je už obsadený!";
            return;
        }

        reservations.push(reservation);
        saveReservations(reservations);

        msg.style.color = "#00ff99";
        msg.textContent = "Rezervácia bola úspešne vytvorená ✔";

        form.reset();
        renderUserReservations();
    });

    renderUserReservations();
}

const adminpass = "123";

const loginPanel = document.getElementById("loginPanel");
const adminPanel = document.getElementById("adminPanel");
const adminMsg = document.getElementById("adminMsg");
const adminTable = document.getElementById("adminReservationList");

if (loginPanel && adminPanel) {

    function renderAdmin() {
        adminTable.innerHTML = "";

        getReservations().forEach((r, i) => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${r.name}</td>
                <td>${r.email}</td>
                <td>${r.phone}</td>
                <td>${r.date}</td>
                <td>${r.time}</td>
                <td>${r.service}</td>
                <td>${r.experience}</td>
                <td>
                    <button class="delete" onclick="deleteReservation(${i})">
                        Zmazať
                    </button>
                </td>
            `;
            adminTable.appendChild(row);
        });
    }

    window.deleteReservation = function (index) {
        const reservations = getReservations();
        reservations.splice(index, 1);
        saveReservations(reservations);
        renderAdmin();
    };

    window.loginAdmin = function () {
        const pass = document.getElementById("adminPassword").value;

        if (pass === adminpass) {
            localStorage.setItem("adminLoggedIn", "true");
            showAdmin();
        } else {
            adminMsg.style.color = "red";
            adminMsg.textContent = "Nesprávne heslo!";
        }
    };

    window.logoutAdmin = function () {
        localStorage.removeItem("adminLoggedIn");
        location.reload();
    };

    function showAdmin() {
        loginPanel.style.display = "none";
        adminPanel.style.display = "block";
        renderAdmin();
    }

    if (localStorage.getItem("adminLoggedIn") === "true") {
        showAdmin();
    }
}
