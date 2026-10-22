<?php
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

require_once __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit(json_encode(['ok' => false, 'message' => 'Method not allowed'], JSON_UNESCAPED_UNICODE));
}

$data = json_decode(file_get_contents('php://input'), true);
$name = trim((string)($data['name'] ?? ''));
$answers = $data['answers'] ?? [];

if ($name !== 'شيماء' || !is_array($answers) || count($answers) !== 25) {
    http_response_code(422);
    exit(json_encode(['ok' => false, 'message' => 'بيانات غير صحيحة'], JSON_UNESCAPED_UNICODE));
}

$cleanAnswers = [];
foreach ($answers as $item) {
    if (!is_array($item)) continue;
    $question = trim((string)($item['question'] ?? ''));
    $answer = trim((string)($item['answer'] ?? ''));
    if ($question === '' || $answer === '') continue;
    $cleanAnswers[] = [
        'question' => mb_substr($question, 0, 500),
        'answer' => mb_substr($answer, 0, 500),
    ];
}

if (count($cleanAnswers) !== 25) {
    http_response_code(422);
    exit(json_encode(['ok' => false, 'message' => 'يجب إكمال كل الأسئلة'], JSON_UNESCAPED_UNICODE));
}

try {
    $stmt = db()->prepare('INSERT INTO responses(visitor_name, answers_json) VALUES(?, ?)');
    $stmt->execute([
        $name,
        json_encode($cleanAnswers, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR),
    ]);
    echo json_encode(['ok' => true], JSON_UNESCAPED_UNICODE);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'message' => 'تعذر حفظ الإجابات'], JSON_UNESCAPED_UNICODE);
}
