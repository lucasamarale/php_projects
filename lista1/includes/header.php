<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo ?? 'Exercícios PHP') ?></title>
    <style>
        :root {
            --primary: #777BB4;
            --primary-dark: #4f5399;
            --primary-light: #eeeef8;
            --bg: #f4f4f8;
            --white: #ffffff;
            --text: #333333;
            --text-light: #666666;
            --border: #dddde8;
            --success: #4caf50;
            --danger: #f44336;
            --warning: #ff9800;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ── Header ─────────────────────────────── */
        .site-header {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
            color: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        .site-header a {
            color: white;
            text-decoration: none;
            font-size: 1.3rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .site-header a:hover { opacity: 0.85; }

        /* ── Breadcrumb ──────────────────────────── */
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.82rem;
            margin-top: 0.5rem;
            flex-wrap: wrap;
        }

        .breadcrumb a { color: rgba(255,255,255,0.75); text-decoration: none; }
        .breadcrumb a:hover { color: white; }
        .breadcrumb .sep { color: rgba(255,255,255,0.4); }
        .breadcrumb .current { color: rgba(255,255,255,0.9); }

        /* ── Main container ──────────────────────── */
        main {
            max-width: 900px;
            width: 100%;
            margin: 2rem auto;
            padding: 0 1.5rem;
            flex: 1;
        }

        /* ── Cards ───────────────────────────────── */
        .card {
            background: var(--white);
            border-radius: 10px;
            padding: 2rem;
            border: 1px solid var(--border);
            box-shadow: 0 2px 8px rgba(119,123,180,0.08);
            margin-bottom: 1.5rem;
        }

        /* ── Exercise header ─────────────────────── */
        .ex-header { margin-bottom: 1.5rem; }
        .ex-badge {
            display: inline-block;
            background: var(--primary-light);
            color: var(--primary-dark);
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            padding: 0.25rem 0.6rem;
            border-radius: 4px;
            margin-bottom: 0.5rem;
        }

        .ex-header h2 {
            font-size: 1.4rem;
            color: var(--primary-dark);
            margin-bottom: 0.4rem;
        }

        .ex-header p { color: var(--text-light); line-height: 1.6; }

        /* ── Forms ───────────────────────────────── */
        .form-group { margin-bottom: 1rem; }
        .form-group label {
            display: block;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 0.3rem;
            color: var(--text);
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="password"],
        .form-group select {
            width: 100%;
            max-width: 320px;
            padding: 0.55rem 0.85rem;
            border: 1.5px solid var(--border);
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.2s;
            background: var(--white);
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(119,123,180,0.12);
        }

        .form-row {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .form-row .form-group { flex: 1; min-width: 140px; }

        /* ── Buttons ─────────────────────────────── */
        .btn {
            display: inline-block;
            padding: 0.6rem 1.4rem;
            border-radius: 6px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            border: none;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }
        .btn-primary:hover { background: var(--primary-dark); transform: translateY(-1px); }

        .btn-secondary {
            background: var(--white);
            color: var(--primary);
            border: 1.5px solid var(--primary);
        }
        .btn-secondary:hover { background: var(--primary-light); }

        .btn-group { display: flex; gap: 0.75rem; flex-wrap: wrap; margin-top: 1.5rem; }

        /* ── Result box ──────────────────────────── */
        .result-box {
            background: var(--primary-light);
            border-left: 4px solid var(--primary);
            border-radius: 0 8px 8px 0;
            padding: 1.25rem 1.5rem;
            font-size: 1rem;
            line-height: 1.9;
        }

        .result-box .result-line { display: block; }
        .result-box strong { color: var(--primary-dark); }

        .result-title {
            font-size: 1rem;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .result-title::before {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            background: var(--primary);
            border-radius: 50%;
        }

        /* ── Alerts ──────────────────────────────── */
        .alert {
            padding: 0.8rem 1rem;
            border-radius: 6px;
            font-weight: 600;
            margin-top: 1rem;
        }

        .alert-success { background: #e8f5e9; color: #2e7d32; border-left: 4px solid var(--success); }
        .alert-danger  { background: #ffebee; color: #c62828; border-left: 4px solid var(--danger); }
        .alert-warning { background: #fff3e0; color: #e65100; border-left: 4px solid var(--warning); }

        /* ── Index page ──────────────────────────── */
        .nivel-section { margin-bottom: 2.5rem; }

        .nivel-title {
            font-size: 1rem;
            font-weight: 700;
            color: var(--primary-dark);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--primary);
            margin-bottom: 1rem;
        }

        .ex-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
            gap: 0.85rem;
        }

        .ex-card {
            background: var(--white);
            border: 1.5px solid var(--border);
            border-radius: 8px;
            padding: 1rem 1.1rem;
            text-decoration: none;
            color: var(--text);
            transition: all 0.2s;
        }

        .ex-card:hover {
            border-color: var(--primary);
            box-shadow: 0 4px 14px rgba(119,123,180,0.18);
            transform: translateY(-2px);
        }

        .ex-card .num {
            font-size: 0.72rem;
            font-weight: 700;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .ex-card h3 { font-size: 0.9rem; margin-top: 0.3rem; line-height: 1.4; }

        /* ── Page title (index) ──────────────────── */
        .page-title {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .page-title h1 {
            font-size: 2rem;
            color: var(--primary-dark);
        }

        .page-title p {
            color: var(--text-light);
            margin-top: 0.5rem;
        }

        /* ── Table ───────────────────────────────── */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0.5rem;
        }

        th {
            background: var(--primary);
            color: white;
            padding: 0.6rem 1rem;
            text-align: left;
            font-size: 0.9rem;
        }

        td {
            padding: 0.55rem 1rem;
            border-bottom: 1px solid var(--border);
            font-size: 0.95rem;
        }

        tr:nth-child(even) td { background: var(--primary-light); }
        tr:hover td { background: #e8e8f5; }

        /* ── Status badges ───────────────────────── */
        .badge {
            display: inline-block;
            padding: 0.2rem 0.55rem;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .badge-success { background: #e8f5e9; color: #2e7d32; }
        .badge-danger  { background: #ffebee; color: #c62828; }

        /* ── Footer ──────────────────────────────── */
        .site-footer {
            text-align: center;
            padding: 1.5rem;
            color: #aaa;
            font-size: 0.8rem;
            border-top: 1px solid var(--border);
            background: var(--white);
            margin-top: auto;
        }

        /* ── Responsive ──────────────────────────── */
        @media (max-width: 600px) {
            main { padding: 0 1rem; }
            .card { padding: 1.25rem; }
            .ex-grid { grid-template-columns: 1fr 1fr; }
        }
    </style>
</head>
<body>

<header class="site-header">
    <a href="<?= $base ?? '/' ?>">&#128640; Exercícios PHP</a>
    <div class="breadcrumb">
        <a href="<?= $base ?? '/' ?>">Início</a>
        <?php if (!empty($nivel)): ?>
            <span class="sep">›</span>
            <span class="current"><?= htmlspecialchars($nivel) ?></span>
        <?php endif; ?>
        <?php if (!empty($titulo) && !empty($nivel)): ?>
            <span class="sep">›</span>
            <span class="current"><?= htmlspecialchars($titulo) ?></span>
        <?php endif; ?>
    </div>
</header>

<main>
