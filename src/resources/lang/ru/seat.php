<?php

return [

    'plugin_name' => 'Календарь',

    'settings' => 'Настройки',
    'operations' => 'События',

    'all_operations' => 'Все операции',
    'incoming_operations' => 'В ожидании',
    'cancelled_operations' => 'Отмененные',
    'ongoing_operations' => 'Текущие',
    'faded_operations' => 'Завершённые',

    'add_operation' => 'Создать новую операцию',
    'update_operation' => 'Обновить',
    'known_duration' => 'Продолжительность известна',

    'close' => 'Закрыть',
    'close_confirm_notice' => 'Вы уверены, что хотите закрыть эту операцию? При закрытии операции будет установлено текущее время и она больше не отображаеться в разделе "Текущие".',
    'close_confirm_button_no' => 'Нет, не закрывать текущую',
    'close_confirm_button_yes' => 'Да, закрыть текущую операцию',
    'confirm' => 'Подтвердить',
    'delete' => 'Удалить',
    'delete_confirm_notice' => 'Вы действительно уверены, что хотите удалить эту операцию? Это действие необратимо.',
    'delete_confirm_button_no' => 'Нет, не удалять эту операцию',
    'delete_confirm_button_yes' => 'Да, удалить эту операцию',
    'update' => 'Обновить',
    'cancel' => 'Отменить',
    'cancelled' => 'Отменённые',
    'cancel_confirm_notice' => 'Вы уверены, что хотите отменить эту операцию? Отмененная операция будет показана в разделе "завершенная". Вы сможете повторно активировать отмененную операцию.',
    'cancel_confirm_button_no' => 'Нет, не отменять данную операцию',
    'cancel_confirm_button_yes' => 'Да, отменить данную операцию',
    'other' => 'Другое',
    'activate' => 'Активировать',
    'activate_confirm_notice' => 'Вы уверены, что хотите активировать эту операцию? Эта операция больше не будет помечена как "отмененная".',
    'activate_confirm_button_no' => 'Нет, не активировать данную операцию',
    'activate_confirm_button_yes' => 'Да, активировать данную операцию',
    'details' => 'Детали',
    'time' => 'Время',
    'yes' => 'Да',
    'no' => 'Нет',
    'actions' => 'Actions',
    'attending_yes' => 'Участвую',
    'attending_no' => 'Не участвую',
    'attending_maybe' => 'Возможно',
    'create_confirm_button_yes' => 'Создать эту операцию',
    'update_confirm_button_yes' => 'Обновить',
    'subscribe_confirm_button_yes' => 'Отправить ваш статус',
    'subscription' => 'Регистрация',
    'subscribe' => 'Зарегистрироваться',
    'not_answered' => 'Без ответа !',
    'none' => 'None',
    'status' => 'Статус',
    'answered_at' => 'Отвечено',
    'unknown' => 'Нет данных',
    'informations' => 'Информация',
    'attendees' => 'Желающие',
    'confirmed' => 'Участвовавшие',

    'month' => 'month|months',
    'day' => 'день|дней',
    'hour' => 'час|часа',
    'minute' => 'минут|минут',
    'second' => 'секунда|секунд',

    'placeholder_title' => 'Название операции',
    'placeholder_staging' => 'Место сбора (система, станция, цитадель...)',
    'placeholder_staging_sys' => 'Где собираемся',
    'placeholder_staging_info' => 'Доп. информация о сборе',
    'placeholder_fc' => 'Выбрать флиткома, мин. 3 символа',
    'placeholder_description' => 'Дополнительная информация. Поддерживает BBCode только в календаре.',
    'placeholder_comment' => 'Дополнительная иформация',

    'created_at' => 'Создана',
    'updated_at' => 'Обновлена',
    'created_by' => 'Создана',

    'title' => 'Название',
    'type' => 'Тип',
    'tags' => 'Таги',
    'description' => 'Доп. инфо',
    'comment' => 'Коментарий',
    'starts_at' => 'Начало',
    'starts_in' => 'Начнётся',
    'started' => 'Стартовала',
    'started_at' => 'Стартовала в',
    'ends_at' => 'Завершена',
    'ends_in' => 'Завершится через',
    'ended_at' => 'Завершена',
    'duration' => 'Длительность',
    'lasted' => 'Lasted',
    'importance' => 'Важность',
    'staging' => 'Место',
    'staging_sys' => 'Система сбора',
    'staging_info' => 'Информация о сборе',
    'fleet_commander' => 'Флитком',
    'character' => 'Персонаж',

    'notification_new_operation' => '<!channel> :rocket: Создана новая операция !',
    'notification_edit_operation' => '<!channel> :pencil2: Операция обновлена !',
    'notification_cancel_operation' => '<!channel> :no_entry_sign: Операция отменена !',
    'notification_activate_operation' => '<!channel> :white_check_mark: Отменённая операция возобновлена !',
    'notification_ping_operation' => '<!channel> :bell: ',
    'notification_enable' => 'Оповещение',
    'integration_channel' => 'Выбрать канал оповещения',

    'slack_integration' => 'Slack интеграция',
    'enabled' => 'Enabled',
    'webhook' => 'Webhook',
    'emoji_full' => 'Full Emoji',
    'emoji_half' => 'Half Emoji',
    'emoji_empty' => 'Empty Emoji',
    'help_emoji' => 'Setup which emoji to use to display the "importance" of an operation when relaying to Slack.',
    'save' => 'Save',

    'warning_no_character' => 'Вы не можете подписаться на операцию без регистрации аккаунта в SeAT. Добавьте API ключ и повторите.',

    'in' => 'In',
    'to' => 'To',

    'new' => 'New',
    'edit' => 'Edit',

    'name' => 'Название',
    'background' => 'Фон',
    'text_color' => 'Цвет текста',
    'preview' => 'Предпросмотр',
    'order' => 'Order',

    'name_tag_placeholder' => 'Название тага... 25 символов макс.',
    'background_placeholder' => 'Цвет фона... #000000',
    'text_color_placeholder' => 'Цвет текста... #FFFFFF',
    'order_placeholder' => 'Для сортировки (цифры). Меньше - выше',
    'select_role_filter_placeholder' => 'Select a Role to restrict on',

    'delete_tag_confirm_button_no' => 'Нет, не удалять этот таг',
    'delete_tag_confirm_button_yes' => 'Да, я хочу удалить этот таг',

    'direct_link' => 'Direct link',

    'paps' => 'Paps',

    'analytic' => 'Analytic Axis',
    'quantifier' => 'Quantifier',
    'strategic' => 'Strategic',
    'pvp' => 'PvP',
    'mining' => 'Mining',
    'untracked' => 'Un-Tracked',
    'list' => 'List',
];
