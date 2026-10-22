<!doctype html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
  <meta name="theme-color" content="#0b0912">
  <meta name="description" content="صفحة صغيرة معمولة لشيماء، أقرب واحدة وصاحبة كل الهزار والرغي.">
  <title>لشيماء بس — حكاياتنا</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="noise"></div>
<div class="bg"><span></span><span></span><span></span></div>
<main id="app">
  <section class="screen active" id="login">
    <div class="hero-wrap">
      <div class="top-label">لشيماء بس · 01</div>
      <div class="card hero">
        <div class="orb"><span>✦</span></div>
        <span class="eyebrow">مش اختبار... دي قعدة بينا</span>
        <h1>جاهزة نفتكر<br><em>الحاجات اللي بينا؟</em></h1>
        <p>كام سؤال عن الرغي والهزار والخروجات والمواقف اللي محدش غيرنا يفهمها بنفس الطريقة.</p>
        <label class="field-label" for="name">مين إنتِ؟</label>
        <input id="name" autocomplete="off" placeholder="اكتبي اسمك هنا" aria-label="اسمك">
        <button id="start" type="button">ندخل؟ <span>←</span></button>
        <small id="hint" role="alert"></small>
      </div>
      <div class="tiny-note">ممنوع الإجابات الدبلوماسية. إحنا عارفين بعض.</div>
    </div>
  </section>

  <section class="screen" id="quiz">
    <div class="quiz">
      <header class="quiz-head">
        <div><span class="eyebrow">شيماء × محمد</span><strong>أسئلة من اللي بينا</strong></div>
        <span id="count"></span>
      </header>
      <div class="progress-wrap"><div class="bar"><i id="progress"></i></div><span id="progressText">0%</span></div>
      <div class="card qcard">
        <span class="eyebrow" id="qnum"></span>
        <h2 id="question"></h2>
        <div id="options" class="options"></div>
        <div id="custom" class="custom hidden">
          <textarea id="customAnswer" maxlength="500" placeholder="اكتبيها بطريقتك... مفيش إجابة نموذجية هنا"></textarea>
          <button id="customNext" type="button">ثبتي الإجابة <span>←</span></button>
        </div>
        <p id="micro" class="micro"></p>
      </div>
      <p class="quiz-footer">كل إجابة بتتسجل عشان أفضل جزء في الصفحة التانية يبقى كلامك إنتِ.</p>
    </div>
  </section>

  <section class="screen" id="finish">
    <div class="card final">
      <div class="check">✓</div>
      <span class="eyebrow">خلصنا</span>
      <h2>كده عرفنا رأي شيماء</h2>
      <p>بس الأسئلة كانت مجرد الجزء الأول. فيه صفحة تانية معمولة مخصوص للحاجات الحلوة اللي اتجمعت بينا.</p>
      <button id="reveal" type="button">أفتح الصفحة التانية <span>←</span></button>
    </div>
  </section>

  <section class="screen" id="special">
    <div class="special">
      <div class="top-label">لشيماء بس · 02</div>
      <span class="eyebrow">PAGE TWO · BETWEEN US</span>
      <h2>مش لازم كل حاجة<br><em>تتقال بصوت عالي</em></h2>
      <p class="intro">بس فيه حاجات حلوة حصلت بينا، خلت الصحوبية دي مختلفة عن أي صحوبية عادية.</p>
      <div id="memories" class="memory-grid"></div>
      <div class="card closing">
        <span class="closing-mark">✦</span>
        <h3>وفيه حاجات لسه ملهاش وصف</h3>
        <p>زي كمية الرغي اللي ممكن تبدأ من ولا حاجة وتنتهي وإحنا مش عارفين اتكلمنا في إيه. والضحك على حاجات لو حكيناها لحد تاني غالبًا مش هيضحك.</p>
        <p>المهم إن فيه شخص تقدر تبقى معاه على طبيعتك، تحكي له، تهزر معاه، وتبعت له حاجة عشوائية لمجرد إنك عايز تشاركه اللحظة.</p>
        <div class="signature">— محمد</div>
        <a class="whatsapp" href="https://wa.me/201281755275?text=%D8%B4%D9%8A%D9%85%D8%A7%D8%A1%20%D8%AE%D9%84%D8%B5%D8%AA%20%D8%A7%D9%84%D8%A7%D8%B3%D8%A6%D9%84%20%D9%88%D8%B9%D8%A7%D9%8A%D8%B2%20%D8%A7%D8%B9%D8%B1%D9%81%20%D8%A7%D8%AC%D8%A7%D8%A8%D8%A7%D8%AA%D9%83%20%D9%88%D9%86%D9%83%D9%85%D9%84%20%D8%B1%D8%BA%D9%8A%20%E2%9C%A8" target="_blank" rel="noopener">تعالي نكمل الرغي على واتساب ↗</a>
      </div>
    </div>
  </section>
</main>
<script src="assets/app.js"></script>
</body>
</html>