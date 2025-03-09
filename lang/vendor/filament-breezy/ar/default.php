<?php

return [
    'password_confirm' => [
        'heading' => 'تأكيد كلمة المرور',
        'description' => 'الرجاء تأكيد كلمة المرور الخاصة بك لإكمال هذا الإجراء.',
        'current_password' => 'كلمة المرور الحالية',
    ],
    'two_factor' => [
        'heading' => 'المصادقة الثنائية',
        'description' => 'الرجاء تأكيد الدخول إلى حسابك عبر إدخال رمز المصادقة الموضح في تطبيق التوثيق الخاص بك.',
        'code_placeholder' => 'XXX-XXX',
        'recovery' => [
            'heading' => 'المصادقة الثنائية',
            'description' => 'الرجاء تأكيد الدخول إلى حسابك عبر إدخال أحد رموز الاستعادة  الخاصة بالحالات الطارئة.',
        ],
        'recovery_code_placeholder' => 'abcdef-98765',
        'recovery_code_text' => 'فقدت جهازك؟',
        'recovery_code_link' => 'استخدم رمز الاستعادة',
        'back_to_login_link' => 'العودة إلى شاشة الدخول',
    ],
    'profile' => [
        'account' => 'الحساب',
        'profile' => 'الملف الشخصي',
        'my_profile' => 'ملفي الشخصي',
        'subheading' => 'إدارة ملف التعريف الخاص بك',
        'personal_info' => [
            'heading' => 'البيانات الشخصية',
            'subheading' => 'قم بإدارة بياناتك الشخصية.',
            'submit' => [
                'label' => 'تحديث',
            ],
            'notify' => 'تم تحديث بياناتك الشخصية بنجاح!',
        ],
        'password' => [
            'heading' => 'كلمة المرور',
            'subheading' => 'يجب أن تتألف كلمة المرور من 8 خانات على الأقل.',
            'submit' => [
                'label' => 'تحديث',
            ],
            'notify' => 'تم تحديث كلمة المرور بنجاح!',
        ],
        '2fa' => [
            'title' => 'المصادقة الثنائية',
            'description' => 'إدارة المصادقة الثنائية (موصى به).',
            'actions' => [
                'enable' => 'تفعيل',
                'regenerate_codes' => 'إعادة إنشاء الرموز',
                'disable' => 'إلغاء التفعيل',
                'confirm_finish' => 'تأكيد وإنهاء',
                'cancel_setup' => 'إلغاء الإعداد',
            ],
            'setup_key' => 'مفتاح الإعداد',
            'must_enable' => 'يجب عليك تفعيل المصادقة الثنائية لإستخدام هذا التطبيق.',
            'not_enabled' => [
                'title' => 'لم تقم بتفعيل المصادقة الثنائية.',
                'description' => 'عند تفعيل المصادقة الثنائية، ستتم مطالبتك برمز آمن عشوائي أثناء المصادقة. يمكنك الحصول على هذا الرمز من خلال تطبيق Google Authenticator على هاتفك.',
            ],
            'finish_enabling' => [
                'title' => 'إنهاء تفعيل المصادقة الثنائية.',
                'description' => 'لإنهاء تفعيل المصادقة الثنائية، قم بمسح رمز QR التالي مستخدماً تطبيق المصادقة على هاتفك أو بإدخال مفتاح الإعداد ومن ثم كتابة رمز OTP الذي تم إنشاؤه.',
            ],
            'enabled' => [
                'notify' => 'تم تفعيل المصادقة الثنائية.',
                'title' => 'لقد قمت بتفعيل المصادقة الثنائية!',
                'description' => 'المصادقة الثنائية مفعّلة حالياً. هذا الأمر سيساعدك على حماية حسابك.',
                'store_codes' => 'هذه الأكواد سيتم استخدامها لاستعادة حسابك إذا فقدت جهازك. تحذير! سيتم عرض هذه الأكواد مرة واحدة فقط.',
            ],
            'disabling' => [
                'notify' => 'تم إلغاء تفعيل المصادقة الثنائية.',
            ],
            'regenerate_codes' => [
                'notify' => 'تم إنشاء رموز استعادة جديدة.',
            ],
            'confirmation' => [
                'success_notification' => 'تم التحقق من الرمز. تم تفعيل المصادقة الثنائية.',
                'invalid_code' => 'الرمز الذي أدخلته غير صحيح.',
            ],
        ],
        'sanctum' => [
            'title' => 'رموز API',
            'description' => 'إدارة رموز API التي تسمح للخدمات الطرفية بالوصول إلى هذا التطبيق نيابة عنك.',
            'create' => [
                'notify' => 'تم إنشاء رمز API بنجاح!',
                'message' => 'يتم عرض رمز API الخاص بك مرة واحدة فقط. إذا فقدت رمزك، ستحتاج إلى إنشاء رمز جديد.',
                'submit' => [
                    'label' => 'إنشاء',
                ],
            ],
            'update' => [
                'notify' => 'تم تحديث رمز API بنجاح!',
            ],
            'copied' => [
                'label' => 'قمت بنسخ الرمز الخاص بي',
            ],
        ],
    ],
    'clipboard' => [
        'link' => 'نسخ إلى الحافظة',
        'tooltip' => 'تم النسخ!',
    ],
    'fields' => [
        'avatar' => 'الصورة الرمزية',
        'email' => 'البريد الإليكتروني',
        'login' => 'تسجيل الدخول',
        'name' => 'الإسم',
        'password' => 'كلمة المرور',
        'password_confirm' => 'تأكيد كلمة المرور',
        'new_password' => 'كلمة مرور جديدة',
        'new_password_confirmation' => 'تأكيد كلمة المرور',
        'token_name' => 'اسم الرمز',
        'token_expiry' => 'انتهاء صلاحية الرمز',
        'abilities' => 'الصلاحيات',
        '2fa_code' => 'الرمز',
        '2fa_recovery_code' => 'رمز الاستعادة',
        'created' => 'تاريخ الإنشاء',
        'expires' => 'تاريخ الإنتهاء',
    ],
    'or' => 'أو',
    'cancel' => 'إلغاء',
];
