# Shimaa Interactive Site

موقع عربي تفاعلي مخصص لشيماء، مبني بـ PHP + SQLite + HTML + CSS + JavaScript.

## التشغيل

يتطلب PHP 8.1+ مع PDO SQLite.

```bash
php -S localhost:8000
```

ثم افتح `http://localhost:8000`.

## الردود

يتم حفظ الإجابات داخل SQLite في مجلد `data/` عند تشغيل الموقع. صفحة الردود تستخدم مفتاحًا خاصًا في `config.php`.

## ملاحظة مهمة

غيّر `VIEW_KEY` قبل رفع المشروع على استضافة عامة.

GitHub Pages لا يشغل PHP؛ استخدم استضافة PHP مثل cPanel أو استضافة تدعم PHP/SQLite.
