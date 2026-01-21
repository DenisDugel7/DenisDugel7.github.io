<?php include 'header.php' ?>

    <style>
        :root {
            --accent: #00ff99;
            --danger: #ff4d4d;
            --bg: #050505;
            --panel: rgba(255,255,255,0.06);
            --border: rgba(255,255,255,0.15);
            --text-muted: #9a9a9a;
        }

        * {
            box-sizing: border-box;
            font-family: "Segoe UI", system-ui, sans-serif;
        }

        body {
            margin: 0;
            background: radial-gradient(circle at top, #101010, #000);
            color: #eaeaea;
        }

        header {
            padding: 20px 30px;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(10px);
        }

        header h1 {
            font-size: 1.6rem;
            color: var(--accent);
            letter-spacing: 1px;
        }

        header span {
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        main {
            max-width: 1100px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .panel {
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 30px;
            backdrop-filter: blur(16px);
            animation: fadeUp 0.8s ease both;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            text-align: left;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text-muted);
            padding-bottom: 12px;
        }

        td {
            padding: 14px 10px;
            border-top: 1px solid rgba(255,255,255,0.08);
        }

        tr:hover {
            background: rgba(0,255,153,0.05);
        }

        .actions button {
            border: none;
            padding: 8px 14px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            margin-right: 6px;
        }

        .approve {
            background: linear-gradient(135deg, #00ff99, #00cc77);
            color: #000;
        }

        .delete {
            background: linear-gradient(135deg, #ff4d4d, #cc0000);
            color: #000;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(25px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

<header>
    <h1><img src="<?= $base?>/Assets/imgs/logo.jpg" style="width: 17%; height: 15%;"> Admin</h1>
    <span>Správa rezervácií</span>
</header>

<main>
   <main>
    <!-- LOGIN -->
    <div class="panel" id="loginPanel">
        <h2>Admin prihlásenie</h2>

        <input type="password" id="adminPassword" placeholder="Admin heslo"
               style="width:100%;padding:14px;border-radius:12px;border:none;margin-top:15px">

        <button onclick="loginAdmin()"
                style="margin-top:20px;padding:14px 22px;border-radius:12px;border:none;
                       background:linear-gradient(135deg,#00ff99,#00cc77);font-weight:700;cursor:pointer">
            Prihlásiť sa
        </button>

        <p id="adminMsg" style="margin-top:15px"></p>
    </div>

    <!-- ADMIN PANEL -->
    <div class="panel" id="adminPanel" style="display:none">
        <h2>Rezervácie</h2>

        <table>
        <thead>
                <tr>
                    <th>Meno</th>
                    <th>Email</th>
                    <th>Telefón</th>
                    <th>Dátum</th>
                    <th>Čas</th>
                    <th>Služba</th>
                    <th>Úroveň</th>
                    <th>Akcie</th>
                </tr>
        </thead>
<tbody id="adminReservationList"></tbody>

        </table>

        <button onclick="logoutAdmin()"
                style="margin-top:25px;padding:12px 18px;border-radius:10px;
                       background:#ff4d4d;border:none;font-weight:700;cursor:pointer">
            Odhlásiť sa
        </button>
    </div>
</main>

</main>

<?php include 'footer.php'?>
