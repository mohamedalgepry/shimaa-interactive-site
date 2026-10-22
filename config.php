<?php
const VIEW_KEY = 'shimaa-2026';
const DB_PATH = __DIR__ . '/data/shimaa.sqlite';
function db(): PDO {
    static $pdo;
    if (!$pdo) {
        if (!is_dir(dirname(DB_PATH))) mkdir(dirname(DB_PATH), 0755, true);
        $pdo = new PDO('sqlite:' . DB_PATH);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("CREATE TABLE IF NOT EXISTS responses (id INTEGER PRIMARY KEY AUTOINCREMENT, visitor_name TEXT NOT NULL, answers_json TEXT NOT NULL, created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP)");
    }
    return $pdo;
}
