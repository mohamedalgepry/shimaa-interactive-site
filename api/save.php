<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../config.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit(json_encode(['ok'=>false])); }
$data = json_decode(file_get_contents('php://input'), true);
$name = trim($data['name'] ?? '');
$answers = $data['answers'] ?? [];
if ($name !== 'شيماء' || !is_array($answers)) { http_response_code(422); exit(json_encode(['ok'=>false,'message'=>'بيانات غير صحيحة'])); }
$stmt = db()->prepare('INSERT INTO responses(visitor_name, answers_json) VALUES(?, ?)');
$stmt->execute([$name, json_encode(array_slice($answers,0,40), JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES)]);
echo json_encode(['ok'=>true], JSON_UNESCAPED_UNICODE);
