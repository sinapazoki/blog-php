<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([])
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================
	// PLEASE NOTE:
	// ============
	// When a new version of AppGini is released, new strings
	// might be added to the "defaultLang.php" file. To translate
	// them, simply copy them to this file ("language.php") and 
	// translate them here. Do NOT translate them directly in 
	// the "defaultLang.php" file.
	// =====================================================
		


	// datalist.php
	
	$Translation['quick search'] = "جستجو سریع";
	$Translation['records x to y of z'] = "Records <FirstRecord> to <LastRecord> of <RecordCount>";
	$Translation['filters'] = "فیلترها";
	$Translation['filter'] = "فیلتر";
	$Translation['filtered field'] = "فیلد فیلتر شده";
	$Translation['comparison operator'] = "عملگر مقایسه";
	$Translation['comparison value'] = "مقدار مقایسه";
	$Translation['and'] = "	و";
	$Translation['or'] = "یا";
	$Translation['equal to'] = "مساوی با";
	$Translation['not equal to'] = "نامساوی با";
	$Translation['greater than'] = "بزرگتر از";
	$Translation['greater than or equal to'] = "بزرگتر یا مساوی با";
	$Translation['less than'] = "کوچکتر از";
	$Translation['less than or equal to'] = "کوچکتر یا مساوی با";
	$Translation['like'] = "مانند";
	$Translation['not like'] = "نامانند";
	$Translation['is empty'] = "خالی است";
	$Translation['is not empty'] = "خالی نیست";
	$Translation['apply filters'] = "اعمال فیلترها";
	$Translation['save filters'] = "ذخیره فیلترها";
	$Translation['saved filters title'] = "HTML Code For The Applied Filters";
	$Translation['saved filters instructions'] = "Copy the code below and paste it to an HTML file to save the filter you just defined so that you can return to it at any time in the future without having to redefine it. You can save this HTML code on your computer or on any server and access this prefiltered table view through it.";
	$Translation['hide code'] = "Hide this code";
	$Translation['printer friendly view'] = "Printer-friendly view";
	$Translation['save as csv'] = "Download as csv file (comma-separated values)";
	$Translation['edit filters'] = "Edit filters";
	$Translation['clear filters'] = "Clear filters";
	$Translation['order by'] = 'Order by';
	$Translation['go to page'] = 'Go to page:';
	$Translation['none'] = 'None';
	$Translation['Select all records'] = 'Select all records';
	$Translation['With selected records'] = 'With selected records';
	$Translation['Print Preview Detail View'] = 'Print Preview Detail View';
	$Translation['Print Preview Table View'] = 'Print Preview Table View';
	$Translation['Print'] = 'Print';
	$Translation['Cancel Printing'] = 'Cancel Printing';
	$Translation['Cancel Selection'] = 'Cancel Selection';
	$Translation['Maximum records allowed to enable this feature is'] = 'Maximum records allowed to enable this feature is';
	$Translation['No matches found!'] = 'No matches found!';
	$Translation['Start typing to get suggestions'] = 'Start typing to get suggestions.';

	// _dml.php
	$Translation['are you sure?'] = 'آیا مطمئن هستید ؟';
	$Translation['add new record'] = 'افزودن رکورد جدید';
	$Translation['update record'] = 'آپدیت رکورد';
	$Translation['delete record'] = 'حذف رکورد';
	$Translation['deselect record'] = 'حذف انتخاب';
	$Translation["couldn't delete"] = 'Could not delete the record due to the presence of <RelatedRecords> related record(s) in table [<TableName>]';
	$Translation['confirm delete'] = 'This record has <RelatedRecords> related record(s) in table [<TableName>]. Do you still want to delete it? <Delete> &nbsp; <Cancel>';
	$Translation['yes'] = 'بله';
	$Translation['no'] = 'خیر';
	$Translation['pkfield empty'] = ' field is a primary key field and cannot be empty.';
	$Translation['upload image'] = 'آپلود فایل جدید';
	$Translation['select image'] = 'انتخاب عکس';
	$Translation['remove image'] = 'حذف فایل';
	$Translation['month names'] = 'January,February,March,April,May,June,July,August,September,October,November,December';
	$Translation['field not null'] = 'You cannot leave this field empty.';
	$Translation['*'] = '*';
	$Translation['today'] = 'Today';
	$Translation['Hold CTRL key to select multiple items from the above list.'] = 'Hold CTRL key to select multiple items from the above list.';
	$Translation['Save New'] = 'ذخیره جدید';
	$Translation['Save As Copy'] = 'ذخیره به عنوان کپی';
	$Translation['Deselect'] = 'لغو انتخاب';
	$Translation['Add New'] = 'افزودن جدید';
	$Translation['Delete'] = 'حذف';
	$Translation['Cancel'] = 'لغو';
	$Translation['Print Preview'] = 'پیش‌نمایش چاپ';
	$Translation['Save Changes'] = 'ذخیره تغییرات';
	$Translation['CSV'] = 'ذخیره CSV';
	$Translation['Reset Filters'] = 'نمایش همه';
	$Translation['Find It'] = 'یافتن';
	$Translation['Previous'] = 'قبلی';
	$Translation['Next'] = 'بعدی';
	$Translation['Back'] = 'بازگشت';
	

	// lib.php
	$Translation['select a table'] = "پرش به...";
	$Translation['homepage'] = "صفحه اصلی";
	$Translation['error:'] = "خطا:";
	$Translation['sql error:'] = "خطا در SQL:";
	$Translation['query:'] = "کوئری:";
	$Translation['< back'] = "بازگشت";
	$Translation["if you haven't set up"] = "اگر هنوز پایگاه داده را تنظیم نکرده‌اید، می‌توانید با کلیک بر روی <a href='setup.php'>اینجا</a> آن را انجام دهید.";
	$Translation['file too large']="خطا: فایلی که آپلود کرده‌اید از حداکثر اندازه مجاز <MaxSize> کیلوبایت بیشتر است.";
	$Translation['invalid file type']="خطا: این نوع فایل مجاز نمی‌باشد. تنها فایل‌های <FileTypes> قابل آپلود هستند.";
	
	// setup.php
	$Translation['goto start page'] = "بازگشت به صفحه اصلی";
	$Translation['no db connection'] = "اتصال به پایگاه داده برقرار نشد.";
	$Translation['no db name'] = "امکان دسترسی به پایگاه داده با نام '<DBName>' در این سرور وجود ندارد.";
	$Translation['provide connection data'] = "لطفاً اطلاعات زیر را برای اتصال به پایگاه داده وارد کنید:";
	$Translation['mysql server'] = "سرور MySQL (میزبان)";
	$Translation['mysql username'] = "نام کاربری MySQL";
	$Translation['mysql password'] = "رمز عبور MySQL";
	$Translation['mysql db'] = "نام پایگاه داده";
	$Translation['connect'] = "اتصال";
	
	$Translation['couldnt save config'] = "Couldn't save connection data into 'config.php'.<br />Please make sure that the folder:<br />'".dirname(__FILE__)."'<br />is writable (chmod 775 or chmod 777).";
	$Translation['setup performed'] = "Setup already performed on";
	$Translation['delete md5'] = "If you want to force setup to run again, you should first delete the file 'setup.md5' from this folder.";
	$Translation['table exists'] = "جدول <b><TableName></b> وجود دارد و شامل <NumRecords> رکورد است.";
	$Translation['failed'] = "خطا";
	$Translation['ok'] = "تایید";
	$Translation['mysql said'] = "پیام MySQL:";
	$Translation['table uptodate'] = "جدول به‌روز است.";
	$Translation['couldnt count'] = "امکان شمارش رکوردهای جدول <b><TableName></b> وجود ندارد.";
	$Translation['creating table'] = "جدول <b><TableName></b> در حال ایجاد است... ";
	

	// separateDVTV.php
	$Translation['please wait'] = "لطفا ثبر کنید";

	// _view.php
	$Translation['tableAccessDenied']="متاسفیم! شما دسترسی لازم برای ورود به این جدول را ندارید. لطفاً با مدیریت تماس بگیرید.";

	// incCommon.php
	$Translation['not signed in']="شما هنوز وارد نشدید !";
	$Translation['sign in']="ورود";
	$Translation['signed as']="ورود به عنوان";
	$Translation['sign out']="خروج";
	$Translation['admin setup needed']="راه‌اندازی مدیر انجام نشده است. لطفاً وارد صفحه کنترل مدیریتی <a href=admin/>admin</a> شوید تا راه‌اندازی را انجام دهید.";
	$Translation['db setup needed']="راه‌اندازی برنامه هنوز انجام نشده است. لطفاً ابتدا وارد صفحه راه‌اندازی <a href=setup.php>setup</a> شوید.";
	$Translation['new record saved']="رکورد جدید با موفقیت ذخیره شد.";
	$Translation['record updated']="تغییرات با موفقیت ذخیره شد.";
	

	// index.php
	$Translation['admin area']="داشبورد ادمین";
	$Translation['login failed']="Your previous login attempt failed. Try again.";
	$Translation['sign in here']="ورود";
	$Translation['remember me']="مرا به خاطر بسپار";
	$Translation['username']="نام کاربری";
	$Translation['password']="رمز عبور";
	$Translation['go to signup']="نام کاربری ندارید ؟ <br />&nbsp; <a href=membership_signup.php>ثبت نام کنید</a>";
	$Translation['forgot password']="رمز عبور خود را فراموش کردید ؟<a href=membership_passwordReset.php>کلیک کنید</a>";
	$Translation['browse as guest']="<a href=index.php>ورود مهمان</a>";
	$Translation['no table access']="شما دسترسی مورد نیاز را ندارید !";
	$Translation['signup']="ثبت نام";
	// checkMemberID.php
	$Translation['user already exists']="نام کاربری '<MemberID>' قبلاً استفاده شده است. لطفاً یک نام کاربری دیگر انتخاب کنید.";
	$Translation['user available']="نام کاربری '<MemberID>' در دسترس است و می‌توانید آن را استفاده کنید.";
	$Translation['empty user']="لطفاً ابتدا یک نام کاربری را در جعبه وارد کرده و سپس بر روی 'بررسی در دسترس بودن' کلیک کنید.";

	// membership_thankyou.php
	$Translation['thanks']="از ثبت‌نام شما متشکریم!";
	$Translation['sign in no approval']="اگر گروهی را انتخاب کرده‌اید که نیازی به تأیید مدیر ندارد، می‌توانید همین الان <a href=index.php?signIn=1>اینجا</a> وارد شوید.";
	$Translation['sign in wait approval']="اگر گروهی را انتخاب کرده‌اید که نیازمند تأیید مدیر است، لطفاً منتظر دریافت ایمیلی برای تأیید شما باشید.";



	// membership_signup.php
	$Translation['username empty']="شما باید یک نام کاربری وارد کنید. لطفاً برگشته و یک نام کاربری وارد کنید.";
	$Translation['password invalid']="شما باید یک رمز عبور با ۴ کاراکتر یا بیشتر، بدون فاصله وارد کنید. لطفاً برگشته و یک رمز عبور معتبر وارد کنید.";
	$Translation['password no match']="رمز عبور مطابقت ندارد. لطفاً برگشته و رمز عبور را تصحیح کنید.";
	$Translation['username exists']="نام کاربری قبلاً استفاده شده است. لطفاً برگشته و یک نام کاربری دیگر انتخاب کنید.";
	$Translation['email invalid']="آدرس ایمیل نامعتبر است. لطفاً برگشته و آدرس ایمیل خود را تصحیح کنید.";
	$Translation['group invalid']="گروه نامعتبر است. لطفاً برگشته و انتخاب گروه را تصحیح کنید.";
	$Translation['sign up here']="ثبت نام";
	$Translation['registered? sign in']="قبلاً ثبت نام کرده‌اید؟ <a href=index.php?signIn=1>اینجا وارد شوید</a>.";
	$Translation['sign up disabled']="متأسفانه! ثبت نام توسط مدیریت به‌طور موقت غیرفعال شده است. لطفاً بعداً دوباره امتحان کنید.";
	$Translation['check availability']="بررسی در دسترس بودن این نام کاربری";


	$Translation['confirm password']="تایید رمز عبور";
	$Translation['email']="آدرس ایمیل";
	$Translation['group']="گروه";
	$Translation['groups *']="If you choose to sign up to a group marked with an asterisk (*), you won't be able to log in until the admin approves you. You'll receive an email when you are approved.";
	$Translation['sign up']="ثبت نام";

	// membership_passwordReset.php
	$Translation['password reset']="تغییر رمز عبور";
	$Translation['password reset details']="پس از وارد کردن نام کاربری یا آدرس ایمیل ، یک ایمیل جهت بازیابی رمز عبور خود دریافت خواهید کرد.";
	$Translation['password reset subject']="دستورالعمل تغییر رمز عبور";
	$Translation['password reset message']="عزیز کاربر، \n اگر درخواست تغییر/بازنشانی رمز عبور خود را داده‌اید، لطفاً بر روی این لینک کلیک کنید: \n <ResetLink> \n\n اگر درخواست تغییر/بازنشانی رمز عبور نداده‌اید، این پیام را نادیده بگیرید. \n\n با احترام.";
	$Translation['password reset ready']="یک ایمیل حاوی دستورالعمل‌های تغییر رمز عبور به آدرس ایمیل ثبت شده شما ارسال شد. لطفاً دستورالعمل‌های ارسال شده در ایمیل را دنبال کنید.<br /><br />اگر در مدت ۵ دقیقه ایمیل را دریافت نکردید، دوباره تلاش کنید و مطمئن شوید که نام کاربری یا آدرس ایمیل صحیح را وارد می‌کنید.";
	$Translation['password reset invalid']="نام کاربری یا رمز عبور نامعتبر است. <a href=membership_passwordReset.php>دوباره تلاش کنید</a> یا به <a href=index.php>صفحه اصلی</a> برگشته وارد شوید.";
	$Translation['password change']="صفحه تغییر رمز عبور";
	$Translation['new password']="رمز عبور جدید";
	$Translation['password reset done']="رمز عبور شما با موفقیت تغییر کرد. می‌توانید <a href=index.php?signOut=1>با رمز عبور جدید وارد شوید</a>.";
	
	$Translation['Loading ...']='در حال بارگذاری ...';
	$Translation['No records found']='هیچ رکوردی یافت نشد';
	$Translation['You can add children records after saving the main record first']='شما می‌توانید پس از ذخیره رکورد اصلی، رکوردهای زیرمجموعه را اضافه کنید';
	
	$Translation['ascending'] = 'صعودی';
	$Translation['descending'] = 'نزولی';
	$Translation['then by'] = 'سپس با توجه به';
	
	

	$Translation['Legend'] = 'راهنما';
	$Translation['Table'] = 'جدول';
	$Translation['Edit'] = 'ویرایش';
	$Translation['View'] = 'مشاهده';
	$Translation['Only your own records'] = 'فقط رکوردهای شما';
	$Translation['All records owned by your group'] = 'تمام رکوردهای متعلق به گروه شما';
	$Translation['All records'] = 'تمام رکوردها';
	$Translation['Not allowed'] = 'مجاز نیست';
	$Translation['Your info'] = 'اطلاعات شما';
	$Translation['Hello user'] = 'سلام %s!';
	$Translation['Your access permissions'] = 'دسترسی‌های شما';
	$Translation['Update profile'] = 'به‌روزرسانی پروفایل';
	$Translation['Update password'] = 'به‌روزرسانی رمز عبور';
	$Translation['Change your password'] = 'تغییر رمز عبور';
	$Translation['Old password'] = 'رمز عبور قدیمی';
	$Translation['Password strength: weak'] = 'قدرت رمز عبور: ضعیف';
	$Translation['Password strength: good'] = 'قدرت رمز عبور: خوب';
	$Translation['Password strength: strong'] = 'قدرت رمز عبور: قوی';
	$Translation['Wrong password'] = 'رمز عبور اشتباه است';
	$Translation['Your profile was updated successfully'] = 'پروفایل شما با موفقیت به‌روزرسانی شد';
	$Translation['Your password was changed successfully'] = 'رمز عبور شما با موفقیت تغییر کرد';
	$Translation['Your IP address'] = 'آدرس IP شما';
	
	/* Added in AppGini 4.90 */
	$Translation['Records to display'] = 'Records to display';
	
	/* Added in AppGini 5.10 */
	$Translation['Setup Data'] = 'تنظیم داده‌ها';
	$Translation['Database Information'] = 'اطلاعات پایگاه داده';
	$Translation['Admin Information'] = 'اطلاعات مدیر';
	$Translation['setup intro 1'] = 'به نظر نمی‌رسد فایل پیکربندی وجود داشته باشد. این برای کارکرد برنامه ضروری است.<br><br>این صفحه تنظیم به شما کمک خواهد کرد تا آن فایل را ایجاد کنید. اما در برخی تنظیمات سرورها این کار ممکن است اجرا نشود. در این صورت شما باید مجوزهای پوشه را تنظیم کنید یا به طور دستی فایل پیکربندی را ایجاد کنید.';
	$Translation['setup intro 2'] = 'به برنامه جدید AppGini خود خوش آمدید! قبل از شروع، برخی اطلاعات درباره پایگاه داده خود نیاز داریم. شما باید موارد زیر را قبل از ادامه بدانید:<ol><li>سرور پایگاه داده (میزبان)</li><li>نام پایگاه داده</li><li>نام کاربری پایگاه داده</li><li>رمز عبور پایگاه داده</li></ol>این موارد به شما توسط ارائه دهنده خدمات میزبانی وب شما ارائه شده است. اگر این اطلاعات را ندارید، باید با آنها تماس بگیرید یا به مستندات خدمات آنها مراجعه کنید قبل از ادامه در اینجا. اگر آماده هستید، بزنید شروع کنیم!';
	$Translation['setup finished'] = '<b>موفقیت!</b><br><br>برنامه AppGini شما نصب شد. اینجا چند پیشنهاد برای شروع است:';
	$Translation['setup next 1'] = 'شروع به استفاده از برنامه خود برای افزودن داده یا کار با داده‌های موجود، اگر وجود داشته باشد.';
	$Translation['setup next 2'] = 'وارد کردن داده‌های موجود از یک ف
	
	ایل CSV به برنامه شما.';
	$Translation['setup next 3'] = 'رفتن به صفحه اصلی مدیریتی که در آن می‌توانید تنظیمات دیگری را برنامه تغییر دهید.';
	$Translation['db_name help'] = 'نام پایگاه داده‌ای که می‌خواهید برنامه AppGini را در آن اجرا کنید.';
	$Translation['db_server help'] = '<i>localhost</i> برای اکثر سرورها کار می‌کند. اگر نه، باید این اطلاعات را از ارائه دهنده خدمات میزبانی وب خود بگیرید.';
	
	$Translation['db_username help'] = 'نام کاربری MySQL شما';
	$Translation['db_password help'] = 'رمز عبور MySQL شما';
	$Translation['username help'] = 'نام کاربری مدیریتی را که می‌خواهید برای دسترسی به ناحیه مدیریت استفاده کنید مشخص کنید. باید حداقل چهار کاراکتر یا بیشتر باشد.';
	$Translation['password help'] = 'یک رمز عبور قوی برای دسترسی به ناحیه مدیریت مشخص کنید.';
	$Translation['email help'] = 'آدرس ایمیلی را که می‌خواهید اطلاعیه‌های مدیریتی به آن ارسال شود وارد کنید.';
	$Translation['Continue'] = 'ادامه ...';
	$Translation['Lets go'] = 'بیایید شروع کنیم!';
	$Translation['Submit'] = 'ثبت';
	$Translation['Hide'] = 'پنهان کردن راهنما';
	$Translation['Database info is correct'] = '&#10003; اطلاعات پایگاه داده درست است!';
	$Translation['Database connection error'] = '&#10007; خطای اتصال به پایگاه داده!';
	$Translation['The following errors occured'] = 'خطاهای زیر رخ داد:';
	$Translation['failed to create config instructions'] = 'احتمالاً این به خاطر دسترسی‌های پوشه است که توسط سرور وب شما برای جلوگیری از ایجاد فایل‌ها تنظیم شده است. نگران نباشید! شما هنوز می‌توانید فایل پیکربندی را به صورت دستی ایجاد کنید.<br><br>کافی است کد زیر را در یک ویرایشگر متنی قرار داده و فایل را به نام "config.php" ذخیره کرده، سپس از طریق FTP یا هر روش دیگری آن را در پوشه %s روی سرور خود بارگذاری کنید.';
	$Translation['Only show records having filterer'] = 'فقط رکوردهایی را نمایش دهید که %s %s باشد.';

		
	/* Added in AppGini 5.20 */
	$Translation['You don\'t have enough permissions to delete this record'] = 'شما دسترسی کافی برای حذف این رکورد را ندارید';
$Translation['Couldn\'t delete this record'] = 'امکان حذف این رکورد وجود ندارد';
$Translation['The record has been deleted successfully'] = 'رکورد با موفقیت حذف شد';
$Translation['Couldn\'t save changes to the record'] = 'امکان ذخیره تغییرات در رکورد وجود ندارد';
$Translation['Couldn\'t save the new record'] = 'امکان ذخیره رکورد جدید وجود ندارد';

/* Added in AppGini 5.30 */
$Translation['More'] = 'بیشتر';
$Translation['Confirm deleting multiple records'] = 'تایید حذف چند رکورد';
$Translation['<n> records will be deleted. Are you sure you want to do this?'] = '<n> رکورد حذف خواهند شد. آیا مطمئن هستید که می‌خواهید این کار را انجام دهید؟';
$Translation['Yes, delete them!'] = 'بله، حذف کن!';
$Translation['No, keep them.'] = 'نه، نگه دار.';
$Translation['Deleting record <i> of <n>'] = 'در حال حذف رکورد <i> از <n>';
$Translation['Delete progress'] = 'پیشرفت حذف';
$Translation['Show/hide details'] = 'نمایش/مخفی کردن جزئیات';
$Translation['Connection error'] = 'خطای اتصال';
$Translation['Add more actions'] = 'افزودن عملیات بیشتر';
$Translation['Update progress'] = 'پیشرفت به‌روزرسانی';
$Translation['Change owner'] = 'تغییر مالکیت';
$Translation['Updating record <i> of <n>'] = 'در حال به‌روزرسانی رکورد <i> از <n>';
$Translation['Change owner of <n> selected records to'] = 'تغییر مالکیت <n> رکورد انتخاب شده به';

	/* Added in AppGini 5.40 */
	$Translation['username invalid'] = 'نام کاربری <MemberID> تکراری یا نامعتبر است';
$Translation['permalink'] = 'لینک دائمی';
$Translation['invalid provider'] = 'پرویدر نامعتبر است!';
$Translation['invalid url'] = 'آدرس وب نامعتبر است!';
$Translation['cant retrieve coordinates from url'] = 'امکان دریافت مختصات از آدرس وب وجود ندارد!';

/* Added in AppGini 5.51 */
$Translation['maintenance mode admin notification'] = 'حالت تعمیر و نگهداری فعال شده است! شما می‌توانید آن را از صفحه اصلی مدیریت غیرفعال کنید.';
$Translation['unique field error'] = 'این مقدار از قبل موجود است یا نامعتبر است. لطفاً مطمئن شوید که مقدار یکتا و معتبری وارد کرده‌اید.';

/* Added in AppGini 5.60 */
$Translation['show all user records from table'] = 'نمایش همه رکوردهای این کاربر از جدول "<tablename>"';
$Translation['show all group records from table'] = 'نمایش همه رکوردهای این گروه از جدول "<tablename>"';
$Translation['email this user'] = 'ارسال ایمیل به این کاربر';
$Translation['email this group'] = 'ارسال ایمیل به این گروه';
$Translation['owner'] = 'مالک';
$Translation['created'] = 'ایجاد شده';
$Translation['last modified'] = 'آخرین ویرایش';
$Translation['record has no owner'] = 'این رکورد مالک مشخصی ندارد. می‌توانید یک مالک را از ناحیه مدیریت اختصاص دهید.';
$Translation['admin-only info'] = 'اطلاعات بالا به نمایش درآمده است زیرا در حال حاضر به عنوان مدیر اصلی وارد شده‌اید. سایر کاربران این اطلاعات را مشاهده نمی‌کنند.';
$Translation['discard changes confirm'] = 'تغییرات اعمال شده به این رکورد را لغو کنید؟';

/* Added in AppGini 5.70 */
$Translation['hide/show columns'] = 'مخفی کردن/نمایش ستون‌ها';
$Translation['next column'] = 'ستون بعدی';
$Translation['previous column'] = 'ستون قبلی';
