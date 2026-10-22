<?php
require_once __DIR__ . '/config.php';

$key = trim((string)($_GET['key'] ?? ''));
if (!hash_equals(VIEW_KEY, $key)) {
    http_response_code(403);
    ?><!doctype html><html lang="ar" dir="rtl"><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>غير مصرح</title><style>body{margin:0;min-height:100vh;display:grid;place-items:center;background:#090711;color:#fff;font-family:system-ui,sans-serif}.box{padding:32px;border:1px solid #ffffff18;border-radius:22px;background:#ffffff08;text-align:center}.box p{color:#aaa}</style><div class="box"><h1>غير مصرح بالدخول</h1><p>الرابط أو مفتاح العرض غير صحيح.</p></div></html><?php
    exit;
}

$rows = db()->query('SELECT id, visitor_name, answers_json, created_at FROM responses ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
?><!doctype html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>إجابات شيماء</title>
<style>
*{box-sizing:border-box}body{margin:0;background:#090711;color:#fff;font-family:system-ui,-apple-system,"Segoe UI",sans-serif;padding:28px}.wrap{max-width:1050px;margin:auto}.head{display:flex;justify-content:space-between;align-items:center;gap:16px;margin-bottom:24px}.head h1{margin:0;font-size:28px}.count{color:#aaa;background:#ffffff08;border:1px solid #ffffff12;border-radius:999px;padding:8px 13px}.response{background:#ffffff08;border:1px solid #ffffff12;border-radius:22px;padding:22px;margin-bottom:16px}.meta{display:flex;justify-content:space-between;gap:12px;color:#aaa;font-size:13px;margin-bottom:18px}.answer{border-top:1px solid #ffffff0d;padding:13px 0}.question{color:#ff9fc6;font-weight:700;margin-bottom:6px}.text{color:#ddd;line-height:1.8;white-space:pre-wrap} .empty{text-align:center;color:#999;padding:60px 20px}@media(max-width:650px){body{padding:16px}.head{align-items:flex-start;flex-direction:column}.meta{flex-direction:column}}
</style>
</head>
<body>
<div class="wrap">
<header class="head"><h1>إجابات شيماء</h1><div class="count"><?php echo count($rows); ?> محاولة</div></header>
<?php if (!$rows): ?>
<div class="response empty">لسه مفيش إجابات محفوظة.</div>
<?php else: foreach ($rows as $row):
    $answers = json_decode($row['answers_json'], true);
    if (!is_array($answers)) $answers = [];
?>
<article class="response">
<div class="meta"><span><?php echo e($row['visitor_name']); ?></span><span><?php echo e($row['created_at']); ?></span></div>
<?php foreach ($answers as $answer): ?>
<div class="answer"><div class="question"><?php echo e((string)($answer['question'] ?? '')); ?></div><div class="text"><?php echo e((string)($answer['answer'] ?? '')); ?></div></div>
<?php endforeach; ?>
</article>
<?php endforeach; endif; ?>
</div>
</body>
</html>
