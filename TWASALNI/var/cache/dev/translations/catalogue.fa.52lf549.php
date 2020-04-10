<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fa', array (
  'validators' => 
  array (
    'This value should be false.' => 'این مقدار باید نادرست(False) باشد.',
    'This value should be true.' => 'این مقدار باید درست(True) باشد.',
    'This value should be of type {{ type }}.' => 'این مقدار باید از نوع {{ type }} باشد.',
    'This value should be blank.' => 'این مقدار باید خالی باشد.',
    'The value you selected is not a valid choice.' => 'مقدار انتخاب شده شامل گزینه های معتبر نمی باشد.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'باید حداقل {{ limit }} گزینه انتخاب نمایید.|باید حداقل {{ limit }} گزینه انتخاب نمایید.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'حداکثر {{ limit }} گزینه می توانید انتخاب نمایید.|حداکثر {{ limit }} گزینه می توانید انتخاب نمایید.',
    'One or more of the given values is invalid.' => 'یک یا چند مقدار نامعتبر وجود دارد.',
    'The fields {{ fields }} were not expected.' => 'فیلدهای {{ fields }} شامل فیلدهای مورد انتظار نمی باشند.',
    'The fields {{ fields }} are missing.' => 'فیلدهای {{ fields }} کم هستند.',
    'This value is not a valid date.' => 'این مقدار یک تاریخ معتبر نمی باشد.',
    'This value is not a valid datetime.' => 'این مقدار یک تاریخ و زمان معتبر نمی باشد.',
    'This value is not a valid email address.' => 'این یک رایانامه معتبر نمی باشد.',
    'The file could not be found.' => 'فایل یافت نشد.',
    'The file is not readable.' => 'پرونده خواندنی نمی باشد.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'فایل بیش از اندازه بزرگ است({{ size }} {{ suffix }}). حداکثر اندازه مجاز برابر با {{ limit }} {{ suffix }} می باشد.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'این نوع فایل مجاز نمی باشد({{ type }}). نوع های مجاز شامل {{ types }} می باشند.',
    'This value should be {{ limit }} or less.' => 'این مقدار باید کوچکتر و یا مساوی {{ limit }} باشد.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'بسیار طولانی است.حداکثر تعداد حروف مجاز برابر {{ limit }} می باشد.|بسیار طولانی است.حداکثر تعداد حروف مجاز برابر {{ limit }} می باشد.',
    'This value should be {{ limit }} or more.' => 'این مقدار باید بزرگتر و یا مساوی {{ limit }} باشد.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'مقدار وارد شده بسیار کوتاه است.تعداد حروف وارد شده، باید حداقل شامل {{ limit }} کاراکتر باشد.|مقدار وارد شده بسیار کوتاه است.تعداد حروف وارد شده، باید حداقل شامل {{ limit }} کاراکتر باشد.',
    'This value should not be blank.' => 'این مقدار نباید خالی باشد.',
    'This value should not be null.' => 'این مقدار باید شامل چیزی باشد.',
    'This value should be null.' => 'این مقدار باید شامل چیزی نباشد.',
    'This value is not valid.' => 'این مقدار معتبر نمی باشد.',
    'This value is not a valid time.' => 'این مقدار یک زمان صحیح نمی باشد.',
    'This value is not a valid URL.' => 'این مقدار شامل یک URL معتبر نمی باشد.',
    'The two values should be equal.' => 'دو مقدار باید با یکدیگر برابر باشند.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'فایل بیش از اندازه بزرگ است. حداکثر اندازه مجاز برابر با {{ limit }} {{ suffix }} می باشد.',
    'The file is too large.' => 'فایل بیش از اندازه بزرگ می باشد.',
    'The file could not be uploaded.' => 'بارگذاری فایل با شکست مواجه گردید.',
    'This value should be a valid number.' => 'این مقدار باید یک عدد معتبر باشد.',
    'This file is not a valid image.' => 'این فایل یک تصویر نمی باشد.',
    'This is not a valid IP address.' => 'این مقدار یک IP معتبر نمی باشد.',
    'This value is not a valid language.' => 'این مقدار یک زبان صحیح نمی باشد.',
    'This value is not a valid locale.' => 'این مقدار یک محل صحیح نمی باشد.',
    'This value is not a valid country.' => 'این مقدار یک کشور صحیح نمی باشد.',
    'This value is already used.' => 'این مقدار قبلا مورد استفاده قرار گرفته است.',
    'The size of the image could not be detected.' => 'اندازه تصویر قابل شناسایی نمی باشد.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'طول تصویر بسیار بزرگ است({{ width }}px). بیشینه طول مجاز {{ max_width }}px می باشد.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'طول تصویر بسیار کوچک است({{ width }}px). کمینه طول موردنظر {{ min_width }}px می باشد.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ارتفاع تصویر بسیار بزرگ است({{ height }}px). بیشینه ارتفاع مجاز {{ max_height }}px می باشد.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ارتفاع تصویر بسیار کوچک است({{ height }}px). کمینه ارتفاع موردنظر {{ min_height }}px می باشد.',
    'This value should be the user\'s current password.' => 'این مقدار می بایست کلمه عبور کنونی کاربر باشد.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => ' این مقدار می بایست دقیقا {{ limit }} کاراکتر داشته باشد.| این مقدار می بایست دقیقا {{ limit }} کاراکتر داشته باشد.',
    'The file was only partially uploaded.' => 'پرونده به صورت جزیی بارگذاری گردیده است.',
    'No file was uploaded.' => 'هیچ پرونده ای بارگذاری نگردیده است.',
    'No temporary folder was configured in php.ini.' => 'پوشه موقتی در php.ini پیکربندی نگردیده است.',
    'Cannot write temporary file to disk.' => 'فایل موقتی را نمی توان در دیسک نوشت.',
    'A PHP extension caused the upload to fail.' => 'یک اکستنشن PHP موجب شد که بارگذاری فایل با شکست مواجه گردد.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'این مجموعه می بایست دارای حداقل {{ limit }} عنصر یا بیشتر باشد.|این مجموعه می بایست دارای حداقل {{ limit }} عنصر یا بیشتر باشد.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'این مجموعه می بایست دارای حداکثر {{ limit }} عنصر یا کمتر باشد.|این مجموعه می بایست دارای حداکثر {{ limit }} عنصر یا کمتر باشد.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'این مجموعه می بایست به طور دقیق دارای {{ limit }} عنصر باشد.|این مجموعه می بایست به طور دقیق دارای {{ limit }} عنصر باشد.',
    'Invalid card number.' => 'شماره کارت نامعتبر می باشد.',
    'Unsupported card type or invalid card number.' => 'نوع کارت پشتیبانی نمی شود و یا شماره کارت نامعتبر می باشد.',
    'This is not a valid International Bank Account Number (IBAN).' => 'این یک شماره حساب بانک بین المللی معتبر نمی باشد(IBAN).',
    'This value is not a valid ISBN-10.' => 'این مقدار یک ISBN-10 معتبر نمی باشد.',
    'This value is not a valid ISBN-13.' => 'این مقدار یک ISBN-13 معتبر نمی باشد.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'این مقدار یک ISBN-10 صحیح و یا ISBN-13 معتبر نمی باشد.',
    'This value is not a valid ISSN.' => 'این مقدار یک ISSN معتبر نمی باشد.',
    'This value is not a valid currency.' => 'این مقدار یک واحد پول معتبر نمی باشد.',
    'This value should be equal to {{ compared_value }}.' => 'این مقدار باید برابر با {{ compared_value }} باشد.',
    'This value should be greater than {{ compared_value }}.' => 'این مقدار باید از {{ compared_value }} بیشتر باشد.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'این مقدار باید بزرگتر و یا مساوی با {{ compared_value }} باشد.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'این مقدار باید با {{ compared_value_type }} {{ compared_value }} یکسان باشد.',
    'This value should be less than {{ compared_value }}.' => 'این مقدار باید کمتر از {{ compared_value }} باشد.',
    'This value should be less than or equal to {{ compared_value }}.' => 'این مقدار باید کمتر و یا مساوی با {{ compared_value }} باشد.',
    'This value should not be equal to {{ compared_value }}.' => 'این مقدار نباید با {{ compared_value }} برابر باشد.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'این مقدار نباید با {{ compared_value_type }} {{ compared_value }} یکسان باشد.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'ابعاد({{ ratio }}) عکس بیش از حد بزرگ است.حداکثر ابعاد مجاز {{ max_ratio }} می باشد.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'ابعاد({{ ratio }}) عکس بیش از حد کوچک است.حداقل ابعاد مجاز {{ min_ratio }} می باشد.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'این تصویر یک مربع({{ width }}x{{ height }}px) می باشد. تصویر مربع مجاز نمی باشد.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'این تصویر افقی({{ width }}x{{ height }}px) می باشد. تصویر افقی مجاز نمی باشد.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'این تصویر عمودی({{ width }}x{{ height }}px) می باشد. تصویر عمودی مجاز نمی باشد.',
    'An empty file is not allowed.' => 'پرونده خالی مجاز نمی باشد.',
    'The host could not be resolved.' => 'میزبان قابل حل نمی باشد.',
    'This value does not match the expected {{ charset }} charset.' => 'این مقدار مطابق با مقدار مورد انتظار {{ charset }} نمی باشد.',
    'This is not a valid Business Identifier Code (BIC).' => 'این مقدار یک(BIC) معتبر نمی باشد.',
    'Error' => 'خطا',
    'This is not a valid UUID.' => 'این مقدار یک UUID معتبر نمی باشد.',
    'This value should be a multiple of {{ compared_value }}.' => 'این مقدار باید چند برابر {{ compared_value }} باشد.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'این(BIC) با IBAN ارتباطی ندارد.',
    'This form should not contain extra fields.' => 'این فرم نباید شامل فیلد اضافه ای باشد.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'فایل بارگذاری شده بسیار بزرگ می باشد. لطفا فایل کوچکتری را بارگذاری نمایید.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'توکن CSRF نامعتبر می باشد. لطفا فرم را مجددا ارسال نمایید.',
    'fos_user.username.already_used' => 'نام کاربری قبلا ثبت شده است',
    'fos_user.username.blank' => 'لطفا یک نام کاربری وارد کنید',
    'fos_user.username.short' => 'نام کاربری کوتاه‌تر از حد مجاز است',
    'fos_user.username.long' => 'نام کاربری بلندتر از حد مجاز است',
    'fos_user.email.already_used' => 'ایمیل قبلا ثبت شده است',
    'fos_user.email.blank' => 'لطفا یک ایمیل وارد کنید',
    'fos_user.email.short' => 'ایمیل کوتاه‌تر از حد مجاز است',
    'fos_user.email.long' => 'ایمیل بلندتر از حد مجاز است',
    'fos_user.email.invalid' => 'ایمیل وارد شده معتبر نیست',
    'fos_user.password.blank' => 'لطفا یک کلمه عبور وارد کنید',
    'fos_user.password.short' => 'کلمه عبور کوتاه‌تر از حد مجاز است',
    'fos_user.password.mismatch' => 'کلمه عبور وارد شده با تکرارش متفاوت است',
    'fos_user.new_password.blank' => 'لطفا یک کلمه عبور جدید وارد کنید',
    'fos_user.new_password.short' => '‌کلمه عبور جدید کوتاه‌تر از حد مجاز است',
    'fos_user.current_password.invalid' => 'کلمه عبور فعلی معتبر نیست',
    'fos_user.group.blank' => 'لطفا یک نام برای گروه وارد کنید',
    'fos_user.group.short' => 'نام گروه وارد شده گوتاه‌تر از حد مجاز است',
    'fos_user.group.long' => 'نام گروه وارد شده بلندتر از حد مجاز است',
    'fos_group.name.already_used' => 'نام وارد شده قبلا ثبت شده است.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'خطایی هنگام احراز هویت رخ داده است.',
    'Authentication credentials could not be found.' => 'شرایط احراز هویت یافت نشد.',
    'Authentication request could not be processed due to a system problem.' => 'درخواست احراز هویت به دلیل  وجود مشکل در سیستم قابل پردازش نمی باشد.',
    'Invalid credentials.' => 'احراز هویت نامعتبر می باشد.',
    'Cookie has already been used by someone else.' => 'Cookie قبلا توسط شخص دیگری استفاده گردیده است.',
    'Not privileged to request the resource.' => 'دسترسی لازم برای درخواست از این منبع را دارا نمی باشید.',
    'Invalid CSRF token.' => 'توکن CSRF معتبر نمی باشد.',
    'Digest nonce has expired.' => 'Digest nonce منقضی گردیده است.',
    'No authentication provider found to support the authentication token.' => 'هیچ ارایه دهنده احراز هویتی برای پشتیبانی از توکن احراز هویت پیدا نشد.',
    'No session available, it either timed out or cookies are not enabled.' => 'هیچ جلسه‌ای در دسترس نمی باشد. این میتواند به دلیل پایان یافتن زمان و یا فعال نبودن کوکی ها باشد.',
    'No token could be found.' => 'هیچ توکنی پیدا نشد.',
    'Username could not be found.' => 'نام ‌کاربری پیدا نشد.',
    'Account has expired.' => 'حساب کاربری منقضی گردیده است.',
    'Credentials have expired.' => 'مجوزهای احراز هویت منقضی گردیده‌اند.',
    'Account is disabled.' => 'حساب کاربری غیرفعال می باشد.',
    'Account is locked.' => 'حساب کاربری قفل گردیده است.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'به‌روزرسانی',
    'group.show.name' => 'نام گروه',
    'group.new.submit' => 'ایجاد گروه',
    'group.flash.updated' => 'گروه با موفقیت به‌روز شد',
    'group.flash.created' => 'گروه با موفقیت ایجاد شد',
    'group.flash.deleted' => 'گروه با موفقیت حذف شد',
    'security.login.username' => 'نام کاربری',
    'security.login.password' => 'کلمه عبور',
    'security.login.remember_me' => 'مشخصات ورود من را به خاطر بسپار',
    'security.login.submit' => 'ورود',
    'profile.show.username' => 'نام کاربری',
    'profile.show.email' => 'ایمیل',
    'profile.edit.submit' => 'به‌روزرسانی',
    'profile.flash.updated' => 'پروفایل کاربری با موفقیت به‌روز شد',
    'change_password.submit' => 'تغییر کلمه عبور',
    'change_password.flash.success' => 'کلمه عبور با موفقیت تغییر کرد',
    'registration.check_email' => 'ایمیلی به %email% فرستاده شده است. این ایمیل حاوی لینکی است که برای فعال سازی باید روی آن کلیک کنید.
',
    'registration.confirmed' => '%username% عزیز، نام کاربری شما با موفقیت فعال شد.',
    'registration.back' => 'بازگشت به صفحه قبلی',
    'registration.submit' => 'ثبت نام',
    'registration.flash.user_created' => 'کاربر با موفقیت ساخته شد',
    'registration.email.subject' => '%username% خوش آمدید!',
    'registration.email.message' => '%username% سلام!

برای تکمیل فعال سازی نام کاربری خود لطفا %confirmationUrl% را مشاهده کنید

از این لینک تنها یک بار می توان برای فعال سازی نام کاربری استفاده کرد.

با احترام،
گروه پشتیبانی
',
    'resetting.check_email' => 'ایمیلی به نشانی شما فرستاده شده است. این ایمیل حاوی لینکی است که برای فعال سازی باید روی آن کلیک کنید.
لطفا توجه کنید که در هر %tokenLifetime% ساعت تنها یک بار می توانید درخواست کلمه عبور جدید ارسال کنید.

اگر ایمیلی با این مشخصات در باکس خود دریافت نکردید، لطفا پوشه اسپم خود را چک کرده و یا مجددا تلاش کنید.
',
    'resetting.request.username' => 'نام کاربری یا ایمیل',
    'resetting.request.submit' => 'بازنشانی کلمه عبور',
    'resetting.reset.submit' => 'تغییر کلمه عبور',
    'resetting.flash.success' => 'کلمه عبور با موفقیت بازنشانی شد',
    'resetting.email.subject' => 'بازنشانی کلمه عبور',
    'resetting.email.message' => '%username% سلام!

برای بازنشانی کلمه عبور خود لطفا %confirmationUrl% را مشاهده کنید

با احترام،
گروه پشتیبانی
',
    'layout.logout' => 'خروج',
    'layout.login' => 'ورود',
    'layout.register' => 'ثبت نام',
    'layout.logged_in_as' => 'ورود به عنوان %username%',
    'form.group_name' => 'نام گروه',
    'form.username' => 'نام کاربری',
    'form.email' => 'ایمیل',
    'form.current_password' => 'کلمه عبور فعلی',
    'form.password' => 'کلمه عبور',
    'form.password_confirmation' => 'تکرار کلمه عبور',
    'form.new_password' => 'کلمه عبور جدید',
    'form.new_password_confirmation' => 'تکرار کلمه عبور جدید',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'قبلی',
    'label_next' => 'بعدی',
  ),
  'FOSMessageBundle' => 
  array (
    'messenger' => 'پیام‌رسان',
    'inbox' => 'صندوق دریافتی',
    'sent' => 'ارسالی',
    'deleted' => 'حذف‌شده',
    'send_new' => 'فرستادن یک پیام جدید',
    'search' => 'جستجو',
    'threads_found' => '%num% مورد یافت شد | %num% مورد یافت شد',
    'message_info' => 'توسط %sender%، در %date%',
    'reply' => 'پاسخ',
    'subject' => 'موضوع',
    'starter' => 'شروع‌کننده',
    'startdate' => 'تاریخ شروع',
    'messages' => 'پیام‌ها',
    'last_message' => 'آخرین پیام',
    'actions' => 'عملیات‌ها',
    'new' => 'جدید',
    'goto_last' => 'برو به آخرین پیام',
    'on' => 'در %date%',
    'by' => 'توسط %sender%',
    'no_thread' => 'هیچ مورد جدیدی برای نمایش وجود ندارد.',
    'delete' => 'حذف',
    'undelete' => 'از حذف درآوردن',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used.',
    'fos_user.username.blank' => 'Please enter a username.',
    'fos_user.username.short' => 'The username is too short.',
    'fos_user.username.long' => 'The username is too long.',
    'fos_user.email.already_used' => 'The email is already used.',
    'fos_user.email.blank' => 'Please enter an email.',
    'fos_user.email.short' => 'The email is too short.',
    'fos_user.email.long' => 'The email is too long.',
    'fos_user.email.invalid' => 'The email is not valid.',
    'fos_user.password.blank' => 'Please enter a password.',
    'fos_user.password.short' => 'The password is too short.',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match.',
    'fos_user.new_password.blank' => 'Please enter a new password.',
    'fos_user.new_password.short' => 'The new password is too short.',
    'fos_user.current_password.invalid' => 'The entered password is invalid.',
    'fos_user.group.blank' => 'Please enter a name.',
    'fos_user.group.short' => 'The name is too short.',
    'fos_user.group.long' => 'The name is too long.',
    'fos_group.name.already_used' => 'The name is already used.',
    'fos_message.recipient.blank' => 'No recipient specified',
    'fos_message.recipients.blank' => 'No recipients specified',
    'fos_message.subject.blank' => 'Please enter a subject',
    'fos_message.subject.short' => 'The subject is too short|The subject is too short',
    'fos_message.subject.long' => 'The subject is too long|The subject is too long',
    'fos_message.body.blank' => 'Please enter a body',
    'fos_message.body.short' => 'The body is too short',
    'fos_message.body.spam' => 'Sorry, your message looks like spam',
    'fos_message.not_authorized' => 'You are not allowed to send this message',
    'fos_message.reply_not_authorized' => 'You are not allowed to reply to this message',
    'fos_message.self_recipient' => 'You cannot send a message to yourself',
    'Bad code value' => 'Code does not match',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated.',
    'group.flash.created' => 'The group has been created.',
    'group.flash.deleted' => 'The group has been deleted.',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Log in',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated.',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed.',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.
',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully.',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

This link can only be used once to validate your account.

Regards,
the Team.
',
    'resetting.check_email' => 'An email has been sent. It contains a link you must click to reset your password.
Note: You can only request a new password once within %tokenLifetime% hours.

If you don\'t get an email check your spam folder or try again.
',
    'resetting.request.username' => 'Username or email address',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully.',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Log out',
    'layout.login' => 'Log in',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Current password',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Repeat password',
    'form.new_password' => 'New password',
    'form.new_password_confirmation' => 'Repeat new password',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
  ),
  'FOSMessageBundle' => 
  array (
    'messenger' => 'Messenger',
    'inbox' => 'Inbox',
    'sent' => 'Sent',
    'deleted' => 'Deleted',
    'send_new' => 'Send a new message',
    'search' => 'Search',
    'threads_found' => '%num% thread found with | %num% threads found with',
    'message_info' => 'By %sender%, on %date%',
    'reply' => 'Reply',
    'subject' => 'Subject',
    'starter' => 'Starter',
    'startdate' => 'Start date',
    'messages' => 'Messages',
    'last_message' => 'Last message',
    'actions' => 'Actions',
    'new' => 'New',
    'goto_last' => 'Go to last message',
    'on' => 'On %date%',
    'by' => 'By %sender%',
    'no_thread' => 'There is no thread to show',
    'delete' => 'Delete',
    'undelete' => 'Undelete',
    'recipient' => 'Recipient',
    'recipients' => 'Recipients',
    'body' => 'Body',
  ),
  'gregwar_captcha' => 
  array (
    'Renew' => 'Renew',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
