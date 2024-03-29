<?php
// Heading
$_['heading_title'] = 'ConcordPay';

// Text
$_['text_extension'] = 'Модулі / Розширення';
$_['text_payment'] = 'Оплата';
$_['text_concordpay'] = '<a href="https://pay.concord.ua" target="_blank" style="background: url(view/image/payment/concordpay.svg) 0 0 no-repeat !important;"><img src="view/image/payment/concordpay.png" alt="ConcordPay" title="ConcordPay"></a>';
$_['text_success'] = 'Налаштування модуля оновлені!';
$_['text_pay'] = 'ConcordPay';
$_['text_card'] = 'Кредитна картка';
$_['text_all_zones'] = 'Всі зони';

// Entry
$_['entry_merchant'] = 'Ідентифікатор продавця';
$_['entry_secretkey'] = 'Секретний ключ';
$_['entry_order_status'] = 'Статус замовлення після успішної оплати';
$_['entry_order_reverse_status'] = 'Статус замовлення після повернення платежу';
$_['entry_currency'] = 'Валюта';
$_['entry_approve_url'] = 'URL перенаправлення при успішному платежі';
$_['entry_decline_url'] = 'URL перенаправлення при невдалому платежі';
$_['entry_cancel_url'] = 'URL перенаправлення при скасуванні платежу';
$_['entry_callback_url'] = 'URL для інформації про оплату';
$_['entry_language'] = 'Мова сторінки оплати';
$_['entry_geo_zone'] = 'Географічна зона';
$_['entry_status'] = 'Статус методу оплати';
$_['entry_sort_order'] = 'Порядок сортування';

// Help
$_['help_merchant'] = 'Надається продавцеві системою ConcordPay';
$_['help_secretkey'] = 'Надається продавцеві системою ConcordPay';
$_['help_order_status'] = 'Статус замовлення за замовчуванням після успішного платежу.';
$_['help_order_reverse_status'] = 'Статус замовлення за замовчуванням після повернення платежу.';
$_['help_currency'] = 'Валюта продавця';
$_['help_approve_url'] = 'За замовчуванням: http://{YOUR_SITE}/index.php?route=payment/concordpay/approve';
$_['help_decline_url'] = 'За замовчуванням: http://{YOUR_SITE}/index.php?route=payment/concordpay/decline';
$_['help_cancel_url'] = 'За замовчуванням: http://{YOUR_SITE}/index.php?route=payment/concordpay/cancel';
$_['help_callback_url'] = 'За замовчуванням: http://{YOUR_SITE}/index.php?route=payment/concordpay/callback';
$_['help_language'] = 'За замовчуванням: RU';
$_['help_geo_zone'] = 'Географічна зона';
$_['help_status'] = 'Статус методу оплати';
$_['help_sort_order'] = 'Позиція ConcordPay в списку методів оплати';

// Error
$_['error_permission'] = 'Ви не маєте прав для управління цим модулем!';
$_['error_merchant'] = 'Ідентифікатор продавця хибний!';
$_['error_secretkey'] = 'Секретний ключ порожній!';
$_['error_approve_url'] = 'Обов\'язковий URL перенаправлення при успішному платежі!';
$_['error_decline_url'] = 'Обов\'язковий URL перенаправлення при невдалому платежі!';
$_['error_cancel_url'] = 'Обов\'язковий URL перенаправлення при скасуванні платежу!';
$_['error_callback_url'] = 'Обов\'язковий URL для інформації про оплату!';
?>