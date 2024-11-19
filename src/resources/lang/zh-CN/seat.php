<?php

return [

    'plugin_name' => '日历',

    'settings' => '设置',
    'operations' => '行动',

    'all_operations' => '所有行动',
    'incoming_operations' => '即将到来',
    'cancelled_operations' => '已取消',
    'ongoing_operations' => '进行中',
    'faded_operations' => '已停止',

    'add_operation' => '创建新行动',
    'update_operation' => '更新',
    'known_duration' => '持续时间已知',

    'close' => '关闭',
    'close_confirm_notice' => '你确定要关闭这个行动吗？关闭一个行动会把它的结束时间设置为现在，因此其不会再显示在进行中的行动中。',
    'close_confirm_button_no' => '不，不要关闭这个行动',
    'close_confirm_button_yes' => '是，我要关闭这个行动',
    'confirm' => '确认',
    'delete' => '删除',
    'delete_confirm_notice' => '你真的确定你要删除这个行动吗？这个操作不可撤销。',
    'delete_confirm_button_no' => '不，不要删除这个行动',
    'delete_confirm_button_yes' => '是，我确定我要删除这个行动',
    'update' => '更新',
    'cancel' => '取消',
    'cancelled' => '已取消',
    'cancel_confirm_notice' => '你确定要取消这个行动吗？被取消的行动将会显示在“已停止”的行动中。你可以重新激活一个被取消的行动。',
    'cancel_confirm_button_no' => '不，不要取消这个行动',
    'cancel_confirm_button_yes' => '是，我要取消这个行动',
    'other' => '其他',
    'activate' => '激活',
    'activate_confirm_notice' => '你确定要激活这个行动吗？这个行动将不再被标记为“已取消”。',
    'activate_confirm_button_no' => '不，不要激活这个行动',
    'activate_confirm_button_yes' => '是，我要激活这个行动',
    'details' => '详情',
    'time' => '时间',
    'yes' => '是',
    'no' => '否',
    'actions' => '动作',
    'attending_yes' => '参加',
    'attending_no' => '不参加',
    'attending_maybe' => '可能参加',
    'create_confirm_button_yes' => '创建这个行动',
    'update_confirm_button_yes' => '更新',
    'subscribe_confirm_button_yes' => '发送你的状态',
    'subscription' => '已注册',
    'subscribe' => '注册',
    'not_answered' => '没有回答！',
    'none' => '无',
    'status' => '状态',
    'answered_at' => '回答在',
    'unknown' => '未知',
    'informations' => '信息',
    'attendees' => '参与者',
    'confirmed' => '已确认',

    'month' => '月',
    'day' => '日',
    'hour' => '小时',
    'minute' => '分钟',
    'second' => '秒',

    'placeholder_title' => '行动的名称',
    'placeholder_staging' => '集结地点 (星系, 空间站, 堡垒...)',
    'placeholder_staging_sys' => '集结星系',
    'placeholder_staging_info' => '关于集结的更多信息',
    'placeholder_fc' => '舰队指挥官的名称',
    'placeholder_description' => '关于此行动的额外信息。这个字段支持 BBCode。',
    'placeholder_comment' => '额外信息',

    'created_at' => '创建于',
    'updated_at' => '更新于',
    'created_by' => '创建者',

    'title' => '标题',
    'type' => '类型',
    'tags' => '标签',
    'description' => '描述',
    'comment' => '评论',
    'starts_at' => '开始于',
    'starts_in' => '开始在',
    'started' => '已经开始',
    'started_at' => '已经开始于',
    'ends_at' => '结束于',
    'ends_in' => '结束在',
    'ended_at' => '已经结束于',
    'duration' => '持续时间',
    'lasted' => '历时',
    'importance' => '重要性',
    'staging' => '集结',
    'staging_sys' => '集结星系',
    'staging_info' => '集结信息',
    'fleet_commander' => '舰队指挥',
    'character' => '角色',

    'notification_new_operation' => '<!channel> :rocket: 一个新的行动被推送！',
    'notification_edit_operation' => '<!channel> :pencil2: 一个行动被编辑了！',
    'notification_cancel_operation' => '<!channel> :no_entry_sign: 一个行动被取消！',
    'notification_activate_operation' => '<!channel> :white_check_mark: 一个已取消的行动被重新激活了！',
    'notification_end_operation' => '<!here> :no_entry_sign: 此操作已结束！',
    'notification_ping_operation' => '<!channel> :bell: ',
    'notification_enable' => '通知到 Slack',
    'integration_channel' => '集成频道',

    'slack_integration' => 'Slack 集成',
    'enabled' => '已启用',
    'webhook' => 'Webhook',
    'emoji_full' => '全 Emoji',
    'emoji_half' => '半 Emoji',
    'emoji_empty' => '空 Emoji',
    'help_emoji' => '设置在中继到 Slack 时用来显示操作“重要性”的表情符号。',
    'save' => '保存',

    'warning_no_character' => '如果没有在SeAT中注册任何角色，则无法注册行动。请添加API密钥，然后重试。',

    'in' => '在',
    'to' => '到',

    'new' => '新',
    'edit' => '编辑',

    'name' => '名称',
    'background' => '背景',
    'text_color' => '文字颜色',
    'preview' => '预览',
    'order' => '排序',

    'name_tag_placeholder' => '标签的名称... 最多7个字符',
    'background_placeholder' => '背景颜色... #000000',
    'text_color_placeholder' => '文字颜色... #FFFFFF',
    'order_placeholder' => '用于排序，数字小的排在前面。',
    'select_role_filter_placeholder' => '选择一个角色来限制',

    'delete_tag_confirm_button_no' => '不，不要删除这个标签',
    'delete_tag_confirm_button_yes' => '是，我确定我要删除这个标签',

    'direct_link' => '直接链接',

    'paps' => 'Paps',

    'analytic' => '解析轴',
    'quantifier' => '量化',
    'strategic' => '战略',
    'pvp' => 'PvP',
    'mining' => '开采',
    'untracked' => '未跟踪的',
    'list' => '列表',
];
