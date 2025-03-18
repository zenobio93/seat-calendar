<?php

return [

    'plugin_name' => 'Kalender',

    'settings' => 'Einstellungen',
    'operations' => 'Events',

    'all_operations' => 'Alle Events',
    'incoming_operations' => 'Demnächst stattfindend',
    'cancelled_operations' => 'Abgesagt',
    'ongoing_operations' => 'Aktuell laufend',
    'faded_operations' => 'Bereits stattgefunden',

    'add_operation' => 'Neues Event anlegen',
    'known_duration' => 'Dauer ist bekannt',

    'close' => 'Beenden',
    'close_confirm_notice' => 'Bist du sicher, dass du dieses Event beenden möchtest? Durch das beenden wird das Ende vom Event auf den aktuellen Zeitpunkt festgelegt und er wird nicht mehr im Abschnitt "Aktuell laufend" angezeigt.',
    'close_confirm_button_no' => 'Nein, beende dieses Event nicht',
    'close_confirm_button_yes' => 'Ja, ich möchte dieses Event beenden',
    'confirm' => 'Bestätigen',
    'delete' => 'Löschen',
    'delete_confirm_notice' => 'Bist du sicher, dass du dieses Event löschen möchtest? Ein gelöschtes Event kann nicht wiederhergestellt werden.',
    'delete_confirm_button_no' => 'Nein, lösche dieses Event nicht',
    'delete_confirm_button_yes' => 'Ja, ich möchte dieses Event löschen',
    'update' => 'Aktualisieren',
    'cancel' => 'Absagen',
    'cancelled' => 'Abgesagt',
    'cancel_confirm_notice' => 'Bist du sicher, dass du dieses Event absagen möchtest? Ein abgesagtes Event wird in "Bereits stattgefunden" angezeigt. Du kannst ein abgesagtes Event wieder aktivieren.',
    'cancel_confirm_button_no' => 'Nein, dieses Event nicht absagen',
    'cancel_confirm_button_yes' => 'Ja, ich möchte dieses Event absagen',
    'other' => 'Andere',
    'activate' => 'Aktivieren',
    'activate_confirm_notice' => 'Bist du sicher, dass du dieses Event aktivieren möchtest? Dieses Event wird nicht mehr als "abgesagt" markiert.',
    'activate_confirm_button_no' => 'Nein, dieses Event nicht aktivieren',
    'activate_confirm_button_yes' => 'Ja, ich möchte dieses Event aktivieren',
    'details' => 'Details',
    'time' => 'Zeit',
    'yes' => 'Ja',
    'no' => 'Nein',
    'actions' => 'Aktionen',
    'attending_yes' => 'Ich nehme teil',
    'attending_no' => 'Ich nehme nicht teil',
    'attending_maybe' => 'Ich nehme vielleicht teil',
    'create_confirm_button_yes' => 'anlegen',
    'update_confirm_button_yes' => 'aktualisieren',
    'subscribe_confirm_button_yes' => 'Teilnahme abschicken',
    'subscription' => 'Anmeldung',
    'subscribe' => 'Anmelden',
    'not_answered' => 'Nicht geantwortet!',
    'none' => 'keine',
    'status' => 'Status',
    'answered_at' => 'Antwort am',
    'unknown' => 'Unbekannt',
    'informations' => 'Event-Informationen',
    'attendees' => 'Teilnehmer',
    'confirmed' => 'Bestätigte Teilnehmer',

    'month' => 'Monat|Monate',
    'day' => 'Tag|Tage',
    'hour' => 'Stunde|Stunden',
    'minute' => 'Minute|Minuten',
    'second' => 'Sekunde|Sekunden',

    'placeholder_title' => 'Name des Events',
    'placeholder_staging' => 'Treffpunkt (System, Station, Zitadelle...)',
    'placeholder_staging_sys' => 'Treffpunkt-System',
    'placeholder_staging_info' => 'Mehr informationen zum Treffpunkt',
    'placeholder_fc' => 'Name des Fleet Commanders',
    'placeholder_description' => 'Zusätzliche Informationen über das Event. Dieses Feld unterstützt BBCode',
    'placeholder_comment' => 'Zusätzliche Informationen',

    'created_at' => 'Erstellt am',
    'updated_at' => 'Aktualisiert am',
    'created_by' => 'Erstellt durch',

    'title' => 'Titel',
    'type' => 'Typ',
    'tags' => 'Tags',
    'description' => 'Beschreibung',
    'comment' => 'Kommentar',
    'starts_at' => 'Startet am',
    'eve_time' => 'EVE Zeit',
    'local_time' => 'Lokale Zeit',
    'starts_in' => 'Startet in',
    'started' => 'Gestartet',
    'started_at' => 'Gestartet am',
    'ends_at' => 'Endet am',
    'ends_in' => 'Endet in',
    'ended_at' => 'Beendet am',
    'duration' => 'Dauer',
    'lasted' => 'Lasted',
    'importance' => 'Priorität',
    'staging' => 'Staging',
    'staging_sys' => 'Staging System',
    'staging_info' => 'Staging Info',
    'fleet_commander' => 'Fleet Commander',
    'staging_system' => 'Staging System',
    'character' => 'Charakter',

    'notification_operation_posted_label' => 'Kalender: Neues Event',
    'notification_operation_activated_label' => 'Kalender: Event begonnen',
    'notification_operation_cancelled_label' => 'Kalender: Event abgesagt',
    'notification_operation_ended_label' => 'Kalender: Event beendet',
    'notification_operation_pinged_label' => 'Kalender: Event Ping',
    'notification_operation_updated_label' => 'Kalender: Event aktualisiert',

    'notifications_to_send' => 'Zu sendende Benachrichtigungen',

    'help_notify_locale' => 'Wähle die Standardsprache für Benachrichtigungen aus.',
    'notify_locale' => 'Standardsprache',

    'help_notify_operation_interval' => 'Legen Sie fest, wie viele Benachrichtigungen vor jedem Event gesendet werden sollen. Jeder Wert gibt an, iwe viele Minuten vor dem Event eine Benachrichtigung gesendet werden soll. Trennen Sie die Zahlen durch Kommas. Der Standardwert :default_interval sendet drei Benachrichtigungen: 15 Minuten, 30 Minuten und 60 Minuten vor dem Beginn des Events.',
    'ping_intervals' => 'Benachrichtigung-Intervalle',

    'slack_integration' => 'Slack Integration',
    'discord_integration' => 'Discord Integration',
    'enabled' => 'Aktiviert',
    'default_channel' => 'Standard-Channel',
    'create_operation' => 'Event anlegen',
    'cancel_operation' => 'Event absagen',
    'end_operation' => 'Event beenden',
    'update_operation' => 'Event aktualisieren',
    'activate_operation' => 'Abgesagtes Event reaktivieren',
    'webhook' => 'Webhook',
    'emoji_full' => 'Emoji (voll)',
    'emoji_half' => 'Emoji (halb)',
    'emoji_empty' => 'Emoji (leer)',
    'help_emoji' => 'Richten Sie die Emojis für die Anzeige der Wichtigkeit ein, wenn Slack oder Discord verwendet wird.',
    'save' => 'Speichern',

    'discord_client_id' => 'Discord Client Id',
    'discord_client_secret' => 'Discord Client Secret',
    'discord_bot_token' => 'Discord Bot Token',

    'warning_no_character' => "Du kannst bei keinem Event zusagen ohne im SeAT einen Charakter registriert zu haben. Bitte registriere einen Charakter bevor du fortfährst.",

    'in' => 'Von',
    'to' => 'Bis',

    'new' => 'Neu',
    'edit' => 'Bearbeiten',

    'name' => 'Name',
    'background' => 'Hintergrund',
    'text_color' => 'Textfarbe',
    'preview' => 'Vorschau',
    'order' => 'Reihenfolge',

    'name_tag_placeholder' => 'Name des Tags... max. 25 Zeichen',
    'background_placeholder' => 'Hintergrundfarbe... #000000',
    'text_color_placeholder' => 'Textfarbe... #FFFFFF',
    'order_placeholder' => 'Für die Reihenfolge (numerisch). Niedrigere Zahlen werden zuerst angezeigt.',
    'select_role_filter_placeholder' => 'Wählen Sie eine Rolle zur Einschränkung aus',

    'delete_tag_confirm_button_no' => 'Nein, lösche diesen Tag nicht',
    'delete_tag_confirm_button_yes' => 'Ja, ich möchte diesen Tag löschen',

    'direct_link' => 'Direkter Link',

    'add_to_calendar' => 'Zum Kalender hinzufügen',
    'google_calendar' => 'Google Kalender',

    'paps' => 'Teilnahmen',

    'analytic' => 'Analytische Achse',
    'quantifier' => 'Multiplikator',
    'strategic' => 'Strategisch',
    'pvp' => 'PvP',
    'mining' => 'Mining',
    'untracked' => 'Nicht erfasst',
    'list' => 'Liste',

    'integrations' => 'Benachrichtigungs-Integrationen',

    'delete_tag_description' => 'Diese Aktion löscht dieses Tag endgültig. Dies kann nicht rückgängig gemacht werden. Sind Sie sicher?',

    'doctrines' => 'Doctrine',
    'track_fleet' => 'Flotte erfassen (ESI)',
];
