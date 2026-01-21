<?php include 'header.php'?>
<section id="rezervacia" class="section">
    <h2 style="text-align: center;">Rezervácia tréningu</h2>

    <form id="reservationForm" class="reservation-grid">

        <div class="form-left">
            <label>Meno</label>
            <input type="text" id="name" required>

            <label>Email</label>
            <input type="email" id="email" required>

            <label>Telefón</label>
            <input type="tel" id="phone" required>

            <label>Dátum</label>
            <input type="date" id="date" required>
        </div>

        <div class="form-right">
            <label>Čas</label>
            <input type="time" id="time" required>

            <label>Služba</label>
            <select id="service" required>
                <option>Silový tréning</option>
                <option>Kardio</option>
                <option>Osobný tréner</option>
            </select>

            <label>Úroveň</label>
            <select id="experience" required>
                <option>Začiatočník</option>
                <option>Pokročilý</option>
            </select>
        </div>

        <!-- MUSÍ BYŤ submit -->
        <button type="submit">Rezervovať</button>

    </form>

    <p id="msg"></p>
    <h3>Aktuálne rezervácie</h3>
    <ul id="reservationList"></ul>
</section>
<?php include 'footer.php'?>