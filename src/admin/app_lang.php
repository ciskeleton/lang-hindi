<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'घटक';
$lang['admin_content'] = 'सामग्री';
$lang['admin_database_backup'] = 'डेटाबेस बैकअप्स';
$lang['admin_extensions'] = 'एक्सटेंशन्स';
$lang['admin_firewall'] = 'फ़ायरवॉल';
$lang['admin_help'] = 'सहायता';
$lang['admin_languages'] = 'भाषाएँ';
$lang['admin_logs'] = 'सिस्टम लॉग्स';
$lang['admin_media'] = 'मीडिया लाइब्रेरी';
$lang['admin_modules'] = 'मॉड्यूल्स';
$lang['admin_plugins'] = 'प्लगइन्स';
$lang['admin_reports'] = 'गतिविधि लॉग';
$lang['admin_settings'] = 'सिस्टम सेटिंग्स';
$lang['admin_sysinfo'] = 'सिस्टम जानकारी';
$lang['admin_system'] = 'सिस्टम';
$lang['admin_system_firewall'] = 'सिस्टम फ़ायरवॉल';
$lang['admin_themes'] = 'थीम्स';
$lang['admin_updates'] = 'सिस्टम अपडेट्स';
$lang['admin_users'] = 'उपयोगकर्ता';
$lang['admin_view_site'] = 'साइट देखें';
$lang['per_page'] = 'प्रति पृष्ठ';

// Generic Messages
$lang['admin_footer_thankyou'] = '<a href="%s" target="_blank">%s</a> के साथ बनाने के लिए धन्यवाद।';
$lang['admin_items_active_count'] = '=0{कोई सक्रिय आइटम नहीं हैं।} other{कुल <b>%s</b> में से <b>#</b> आइटम सक्रिय हैं।}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'इंस्टॉलेशन विफल: %s';
$lang['admin_install_location_app'] = 'केवल यह एप्लिकेशन';
$lang['admin_install_location_core'] = 'सभी एप्लिकेशन';
$lang['admin_install_location_select'] = '&#151; स्थान चुनें &#151;';
$lang['admin_install_update_confirm'] = 'क्या आप वाकई इस पैकेज को अपडेट करना चाहते हैं?';
$lang['admin_install_update_error'] = 'पैकेज अपडेट करने में विफल।';
$lang['admin_install_update_skip_confirm'] = 'क्या आप वाकई इस अपडेट को छोड़ना चाहते हैं?';
$lang['admin_install_update_skip_error'] = 'इस अपडेट को छोड़ना विफल रहा।';
$lang['admin_install_update_skip_success'] = 'अपडेट सफलतापूर्वक छोड़ दिया गया।';
$lang['admin_install_update_success'] = 'पैकेज सफलतापूर्वक अपडेट हो गया।';
$lang['admin_install_upload_tip'] = 'यहाँ इसकी <b>.zip</b> फ़ाइल अपलोड करके पैकेज इंस्टॉल करें।';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'पुराने बैकअप फ़ाइलें साफ करने में असमर्थ।';
$lang['admin_database_backup_clean_success'] = '%d बैकअप फ़ाइलें हटा दी गईं हैं। %d डिस्क स्थान फ़्री कर दिया गया है।';
$lang['admin_database_backup_create'] = 'बैकअप बनाएँ';
$lang['admin_database_backup_create_confirm'] = 'क्या आप वाकई अब एक बैकअप बनाना चाहते हैं?';
$lang['admin_database_backup_create_error'] = 'बैकअप फ़ाइल बनाने में असमर्थ। सुनिश्चित करें कि <b>%s</b> फ़ोल्डर लिखने योग्य है।';
$lang['admin_database_backup_create_success'] = 'डेटाबेस बैकअप फ़ाइल <b>%s</b> सफलतापूर्वक बनाई गई है।';
$lang['admin_database_backup_delete_confirm'] = 'क्या आप वाकई इन बैकअप फ़ाइलों को हटाना चाहते हैं?';
$lang['admin_database_backup_delete_error'] = 'चयनित बैकअप फ़ाइलें हटाने में असमर्थ।';
$lang['admin_database_backup_delete_success'] = 'बैकअप फ़ाइलें सफलतापूर्वक हटा दी गई हैं।';
$lang['admin_database_backup_download_error'] = 'चयनित बैकअप फ़ाइल डाउनलोड नहीं की जा सकी।';
$lang['admin_database_backup_download_success'] = 'बैकअप फ़ाइल सफलतापूर्वक डाउनलोड हो गई।';
$lang['admin_database_backup_lock_confirm'] = 'क्या आप वाकई इन बैकअप फ़ाइलों को ताला लगाना चाहते हैं?';
$lang['admin_database_backup_lock_error'] = 'चयनित बैकअप फ़ाइलें लॉक करने में असमर्थ।';
$lang['admin_database_backup_lock_success'] = 'बैकअप फ़ाइलें सफलतापूर्वक लॉक की गई हैं।';
$lang['admin_database_backup_locked_error'] = 'लॉक बैकअप फ़ाइलें हटाने में असमर्थ।';
$lang['admin_database_backup_missing_error'] = 'बैकअप फ़ाइल नहीं मिल सकी।';
$lang['admin_database_backup_unlock_confirm'] = 'क्या आप वाकई इन बैकअप फ़ाइलों को अनलॉक करना चाहते हैं?';
$lang['admin_database_backup_unlock_error'] = 'चयनित बैकअप फ़ाइलें अनलॉक करने में असमर्थ।';
$lang['admin_database_backup_unlock_success'] = 'बैकअप फ़ाइलें सफलतापूर्वक अनलॉक की गई हैं।';
$lang['admin_database_prune'] = 'साफ करें';
$lang['admin_database_prune_confirm'] = 'क्या आप वाकई डेटाबेस को साफ करना चाहते हैं? निष्पादन से पहले एक बैकअप बनाया जाएगा।';
$lang['admin_database_prune_error'] = 'डेटाबेस को साफ़ करने में असमर्थ।';
$lang['admin_database_prune_next'] = 'अगली डेटाबेस सफाई: <b>%s</b>';
$lang['admin_database_prune_success'] = 'डेटाबेस सफलतापूर्वक साफ किया गया।';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'लॉग हटाएँ';
$lang['admin_logs_delete_confirm'] = 'क्या आप वाकई चयनित लॉग फ़ाइलें हटाना चाहते हैं?';
$lang['admin_logs_delete_error'] = 'लॉग फ़ाइलें हटाने में असमर्थ।';
$lang['admin_logs_delete_success'] = 'लॉग फ़ाइलें सफलतापूर्वक हटा दी गईं हैं।';
$lang['admin_logs_error_disabled'] = 'लॉगिंग वर्तमान में सक्षम नहीं है।';
$lang['admin_logs_error_empty'] = 'कोई लॉग नहीं मिला।';
$lang['admin_logs_error_missing'] = 'या तो लॉग फ़ाइल को ढूंढा नहीं जा सका, या यह खाली थी।';
$lang['admin_logs_tip'] = 'लॉगिंग बहुत बड़ी फ़ाइलें तेज़ी से बना सकती हैं। लाइव साइट्स के लिए, पुरानी फ़ाइलें हटाने का विचार करें।';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'क्या आप चयनित ईमेल को हटाना चाहते हैं?';
$lang['admin_emails_delete_error'] = 'चयनित ईमेल को हटाया नहीं जा सका।';
$lang['admin_emails_delete_success'] = 'चयनित ईमेल सफलतापूर्वक हटाए गए।';
$lang['admin_emails_email_from'] = 'से भेजा गया';
$lang['admin_emails_mail_queue'] = 'मेल कतार';
$lang['admin_emails_mailer'] = 'मास मेल';
$lang['admin_emails_search'] = 'विषय या सामग्री के आधार पर ईमेल खोजें...';
$lang['admin_emails_send_error'] = 'ईमेल को कतार में जोड़ने में विफल। कृपया पुनः प्रयास करें।';
$lang['admin_emails_send_none'] = 'चयनित मानदंडों से मेल खाने वाले कोई उपयोगकर्ता नहीं मिले।';
$lang['admin_emails_send_success'] = 'ईमेल कतार में जोड़ दिया गया है और जल्द ही भेजा जाएगा।';
$lang['admin_emails_send_to_banned'] = 'प्रतिबंधित उपयोगकर्ताओं को भेजें।';
$lang['admin_emails_send_to_deleted'] = 'हटाए गए उपयोगकर्ताओं को भेजें।';
$lang['admin_emails_send_to_disabled'] = 'निष्क्रिय उपयोगकर्ताओं को भेजें।';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'उपयोगकर्ता जोड़ें';
$lang['admin_users_all_users'] = 'सभी उपयोगकर्ता';
$lang['admin_users_ban_confirm'] = 'क्या आप वाकई चयनित उपयोगकर्ताओं पर प्रतिबंध लगाना चाहते हैं?';
$lang['admin_users_ban_error'] = 'चयनित उपयोगकर्ताओं पर प्रतिबंध लगाने में असमर्थ।';
$lang['admin_users_ban_success'] = 'चयनित उपयोगकर्ताओं पर सफलतापूर्वक प्रतिबंध लगाया गया।';
$lang['admin_users_delete_confirm'] = 'क्या आप वाकई चयनित उपयोगकर्ताओं को हटाना चाहते हैं?';
$lang['admin_users_delete_error'] = 'चयनित उपयोगकर्ताओं को हटाने में असमर्थ।';
$lang['admin_users_delete_success'] = 'चयनित उपयोगकर्ताओं को सफलतापूर्वक हटाया गया।';
$lang['admin_users_disable_confirm'] = 'क्या आप वाकई चयनित उपयोगकर्ताओं को अक्षम करना चाहते हैं?';
$lang['admin_users_disable_error'] = 'चयनित उपयोगकर्ताओं को अक्षम करने में असमर्थ।';
$lang['admin_users_disable_success'] = 'चयनित उपयोगकर्ताओं को सफलतापूर्वक अक्षम किया गया।';
$lang['admin_users_edit'] = 'उपयोगकर्ता संपादित करें';
$lang['admin_users_edit_error'] = 'उपयोगकर्ता को अपडेट करने में असमर्थ।';
$lang['admin_users_edit_success'] = 'उपयोगकर्ता सफलतापूर्वक अपडेट किया गया है।';
$lang['admin_users_enable_confirm'] = 'क्या आप वाकई चयनित उपयोगकर्ताओं को सक्षम करना चाहते हैं?';
$lang['admin_users_enable_error'] = 'चयनित उपयोगकर्ताओं को सक्षम करने में असमर्थ।';
$lang['admin_users_enable_success'] = 'चयनित उपयोगकर्ताओं को सफलतापूर्वक सक्षम किया गया।';
$lang['admin_users_groups'] = 'समूह';
$lang['admin_users_lock_confirm'] = 'क्या आप वाकई चयनित उपयोगकर्ताओं को लॉक करना चाहते हैं?';
$lang['admin_users_lock_error'] = 'चयनित उपयोगकर्ताओं को लॉक नहीं किया जा सका।';
$lang['admin_users_lock_success'] = 'चयनित उपयोगकर्ताओं को सफलतापूर्वक लॉक कर दिया गया है।';
$lang['admin_users_logged'] = 'लॉग-इन उपयोगकर्ता';
$lang['admin_users_manage'] = 'उपयोगकर्ता प्रबंधित करें';
$lang['admin_users_remove_confirm'] = 'क्या आप वाकई चयनित उपयोगकर्ताओं और उनके सभी डेटा को स्थायी रूप से हटाना चाहते हैं?';
$lang['admin_users_remove_error'] = 'चयनित उपयोगकर्ताओं और उनके सभी डेटा को स्थायी रूप से हटाने में असमर्थ।';
$lang['admin_users_remove_success'] = 'चयनित उपयोगकर्ताओं और उनके सभी डेटा को सफलतापूर्वक हटाया गया।';
$lang['admin_users_restore_confirm'] = 'क्या आप वाकई चयनित उपयोगकर्ताओं को पुनर्स्थापित करना चाहते हैं?';
$lang['admin_users_restore_error'] = 'चयनित उपयोगकर्ताओं को पुनर्स्थापित करने में असमर्थ।';
$lang['admin_users_restore_success'] = 'चयनित उपयोगकर्ताओं को सफलतापूर्वक पुनर्स्थापित किया गया।';
$lang['admin_users_search'] = 'नाम या ईमेल से खोजें...';
$lang['admin_users_unban_confirm'] = 'क्या आप वाकई चयनित उपयोगकर्ताओं से प्रतिबंध हटाना चाहते हैं?';
$lang['admin_users_unban_error'] = 'चयनित उपयोगकर्ताओं से प्रतिबंध हटाने में असमर्थ।';
$lang['admin_users_unban_success'] = 'चयनित उपयोगकर्ताओं से प्रतिबंध सफलतापूर्वक हटाया गया।';
$lang['admin_users_unlock_confirm'] = 'क्या आप वास्तव में चयनित उपयोगकर्ताओं को अनलॉक करना चाहते हैं?';
$lang['admin_users_unlock_error'] = 'चयनित उपयोगकर्ताओं को अनलॉक नहीं किया जा सका।';
$lang['admin_users_unlock_success'] = 'चयनित उपयोगकर्ताओं को सफलतापूर्वक अनलॉक कर दिया गया है।';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'लॉग साफ़ करें';
$lang['admin_reports_clear_confirm'] = 'क्या आप वाकई क्रियाएँ लॉग करना चाहते हैं?';
$lang['admin_reports_clear_error'] = 'क्रियाएँ लॉग साफ़ करने में असमर्थ।';
$lang['admin_reports_clear_success'] = 'क्रियाएँ लॉग सफलतापूर्वक साफ़ की गई हैं।';
$lang['admin_reports_latest_actions'] = 'नवीनतम क्रियाएँ';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'क्या आप वाकई चयनित फ़ाइलें हटाना चाहते हैं?';
$lang['admin_media_delete_error'] = 'फ़ाइलें हटाने में असमर्थ।';
$lang['admin_media_delete_success'] = 'फ़ाइलें सफलतापूर्वक हटा दी गई हैं।';
$lang['admin_media_file_delete_error'] = 'फ़ाइल हटाने में असमर्थ।';
$lang['admin_media_file_delete_success'] = 'फ़ाइल सफलतापूर्वक हटा दी गई है।';
$lang['admin_media_file_update_error'] = 'फ़ाइल को अपडेट करने में असमर्थ।';
$lang['admin_media_file_update_success'] = 'फ़ाइल सफलतापूर्वक अपडेट की गई है।';
$lang['admin_media_search'] = 'नाम, विवरण या फ़ाइल नाम से खोजें...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{कोई सक्रिय मॉड्यूल नहीं हैं।} other{कुल <b>%s</b> में से <b>#</b> मॉड्यूल सक्रिय हैं।}';
$lang['admin_modules_add'] = 'मॉड्यूल जोड़ें';
$lang['admin_modules_delete_confirm'] = 'क्या आप वाकई मॉड्यूल को हटाना चाहते हैं: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'मॉड्यूल हटाने में असमर्थ।';
$lang['admin_modules_delete_error_active'] = 'सक्रिय मॉड्यूल हटाए नहीं जा सकते।';
$lang['admin_modules_delete_success'] = 'मॉड्यूल सफलतापूर्वक हटा दिया गया है।';
$lang['admin_modules_disable_all_confirm'] = 'क्या आप वाकई सभी मॉड्यूल निष्क्रिय करना चाहते हैं?';
$lang['admin_modules_disable_all_error'] = 'सभी मॉड्यूल निष्क्रिय नहीं किए जा सके।';
$lang['admin_modules_disable_all_success'] = 'सभी मॉड्यूल सफलतापूर्वक निष्क्रिय कर दिए गए हैं।';
$lang['admin_modules_disable_confirm'] = 'क्या आप वाकई मॉड्यूल को अक्षम करना चाहते हैं: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'मॉड्यूल को निष्क्रिय करने में असमर्थ।';
$lang['admin_modules_disable_success'] = 'मॉड्यूल सफलतापूर्वक निष्क्रिय किया गया है।';
$lang['admin_modules_enable_all_confirm'] = 'क्या आप वाकई सभी मॉड्यूल सक्रिय करना चाहते हैं?';
$lang['admin_modules_enable_all_error'] = 'सभी मॉड्यूल सक्रिय नहीं किए जा सके।';
$lang['admin_modules_enable_all_success'] = 'सभी मॉड्यूल सफलतापूर्वक सक्रिय कर दिए गए हैं।';
$lang['admin_modules_enable_confirm'] = 'क्या आप वाकई मॉड्यूल को सक्षम करना चाहते हैं: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'मॉड्यूल सक्रिय करने में असमर्थ।';
$lang['admin_modules_enable_success'] = 'मॉड्यूल सफलतापूर्वक सक्रिय किया गया।';
$lang['admin_modules_global'] = 'ग्लोबल मॉड्यूल (साझा)';
$lang['admin_modules_install_confirm'] = 'क्या आप वाकई मॉड्यूल को इंस्टॉल करना चाहते हैं: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'मॉड्यूल इंस्टॉल करने में विफल।';
$lang['admin_modules_install_success'] = 'मॉड्यूल सफलतापूर्वक इंस्टॉल हो गया।';
$lang['admin_modules_install_tip'] = 'मॉड्यूल आपकी साइट में नई सुविधाएँ और कार्यक्षमताएँ जोड़ते हैं। <a href="%s" target="_blank" rel="noopener">मॉड्यूल डायरेक्टरी</a> से ब्राउज़ करें या <b>.zip</b> फ़ाइल अपलोड करें।';
$lang['admin_modules_update_confirm'] = 'क्या आप वाकई इस मॉड्यूल को अपडेट करना चाहते हैं?';
$lang['admin_modules_update_error'] = 'मॉड्यूल अपडेट करने में विफल।';
$lang['admin_modules_update_success'] = 'मॉड्यूल सफलतापूर्वक अपडेट हो गया।';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{कोई सक्रिय प्लगइन नहीं हैं।} other{कुल <b>%s</b> में से <b>#</b> प्लगइन सक्रिय हैं।}';
$lang['admin_plugins_add'] = 'प्लगइन जोड़ें';
$lang['admin_plugins_delete_confirm'] = 'क्या आप वाकई इस प्लगइन को हटाना चाहते हैं: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'प्लगइन हटाने में विफल।';
$lang['admin_plugins_delete_error_active'] = 'सक्रिय प्लगइन हटाए नहीं जा सकते।';
$lang['admin_plugins_delete_success'] = 'प्लगइन सफलतापूर्वक हटाया गया।';
$lang['admin_plugins_disable_all_confirm'] = 'क्या आप वाकई सभी प्लगइन्स निष्क्रिय करना चाहते हैं?';
$lang['admin_plugins_disable_all_error'] = 'सभी प्लगइन्स निष्क्रिय नहीं किए जा सके।';
$lang['admin_plugins_disable_all_success'] = 'सभी प्लगइन्स सफलतापूर्वक निष्क्रिय कर दिए गए हैं।';
$lang['admin_plugins_disable_confirm'] = 'क्या आप वाकई इस प्लगइन को अक्षम करना चाहते हैं: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'प्लगइन अक्षम करने में विफल।';
$lang['admin_plugins_disable_success'] = 'प्लगइन सफलतापूर्वक अक्षम किया गया।';
$lang['admin_plugins_enable_all_confirm'] = 'क्या आप वाकई सभी प्लगइन्स सक्रिय करना चाहते हैं?';
$lang['admin_plugins_enable_all_error'] = 'सभी प्लगइन्स सक्रिय नहीं किए जा सके।';
$lang['admin_plugins_enable_all_success'] = 'सभी प्लगइन्स सफलतापूर्वक सक्रिय कर दिए गए हैं।';
$lang['admin_plugins_enable_confirm'] = 'क्या आप वाकई इस प्लगइन को सक्षम करना चाहते हैं: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'प्लगइन सक्षम करने में विफल।';
$lang['admin_plugins_enable_success'] = 'प्लगइन सफलतापूर्वक सक्षम किया गया।';
$lang['admin_plugins_global'] = 'ग्लोबल प्लगइन (साझा)';
$lang['admin_plugins_install_confirm'] = 'क्या आप वाकई प्लगइन को इंस्टॉल करना चाहते हैं: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'प्लगइन इंस्टॉल करने में विफल।';
$lang['admin_plugins_install_success'] = 'प्लगइन सफलतापूर्वक इंस्टॉल हो गया।';
$lang['admin_plugins_install_tip'] = 'प्लगइन्स मौजूदा सुविधाओं को अतिरिक्त विकल्पों या इंटीग्रेशन से बढ़ाते हैं। <a href="%s" target="_blank" rel="noopener">प्लगइन डायरेक्टरी</a> से इंस्टॉल करें या <b>.zip</b> फ़ाइल अपलोड करें।';
$lang['admin_plugins_update_confirm'] = 'क्या आप वाकई इस प्लगइन को अपडेट करना चाहते हैं?';
$lang['admin_plugins_update_error'] = 'प्लगइन अपडेट करने में विफल।';
$lang['admin_plugins_update_success'] = 'प्लगइन सफलतापूर्वक अपडेट हो गया।';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'थीम जोड़ें';
$lang['admin_themes_delete_confirm'] = 'क्या आप वाकई थीम को हटाना चाहते हैं: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'थीम हटाने में असमर्थ।';
$lang['admin_themes_delete_error_active'] = 'आप वर्तमान में सक्रिय थीम को हटा नहीं सकते हैं।';
$lang['admin_themes_delete_success'] = 'थीम सफलतापूर्वक हटा दी गई है।';
$lang['admin_themes_disable_confirm'] = 'क्या आप वाकई थीम को निष्क्रिय करना चाहते हैं: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'थीम को निष्क्रिय नहीं किया जा सका।';
$lang['admin_themes_disable_error_active'] = 'सक्रिय थीम को निष्क्रिय नहीं किया जा सकता।';
$lang['admin_themes_disable_success'] = 'थीम सफलतापूर्वक निष्क्रिय कर दी गई है।';
$lang['admin_themes_enable_confirm'] = 'क्या आप वाकई थीम को सक्रिय करना चाहते हैं: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'थीम सक्रिय करने में असमर्थ।';
$lang['admin_themes_enable_success'] = 'थीम सफलतापूर्वक सक्रिय की गई।';
$lang['admin_themes_install_confirm'] = 'क्या आप वाकई थीम को इंस्टॉल करना चाहते हैं: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'थीम इंस्टॉल करने में विफल।';
$lang['admin_themes_install_success'] = 'थीम सफलतापूर्वक इंस्टॉल हो गई।';
$lang['admin_themes_install_tip'] = 'थीम आपकी साइट की उपस्थिति और लेआउट बदलते हैं। <a href="%s" target="_blank" rel="noopener">थीम लाइब्रेरी</a> से चुनें या <b>.zip</b> फ़ाइल अपलोड करें।';
$lang['admin_themes_none_tip'] = 'यह एप्लिकेशन बिना किसी थीम के चल रहा है। सार्वजनिक इंटरफ़ेस को अनुकूलित करने के लिए एक थीम इंस्टॉल करें।';
$lang['admin_themes_update_confirm'] = 'क्या आप वाकई इस थीम को अपडेट करना चाहते हैं?';
$lang['admin_themes_update_error'] = 'थीम अपडेट करने में विफल।';
$lang['admin_themes_update_success'] = 'थीम सफलतापूर्वक अपडेट हो गई।';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'मेनू';
$lang['admin_menus_assign_error'] = 'मेनू स्थान अपडेट नहीं किया जा सका।';
$lang['admin_menus_assign_success'] = 'मेनू स्थान सफलतापूर्वक अपडेट किया गया।';
$lang['admin_menus_header'] = '<b>%s</b> मेनू स्थान उपलब्ध हैं।';
$lang['admin_menus_location'] = 'स्थान';
$lang['admin_menus_locations'] = 'मेनू स्थान';
$lang['admin_menus_manage'] = 'मेनू प्रबंधन';
$lang['admin_menus_menu'] = 'आवंटित मेनू';
$lang['admin_menus_none'] = '&#151; कोई नहीं &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'भाषा जोड़ें';
$lang['admin_languages_default_confirm'] = 'क्या आप वाकई इस भाषा को साइट की डिफ़ॉल्ट भाषा बनाना चाहते हैं?';
$lang['admin_languages_default_error'] = 'डिफ़ॉल्ट भाषा बदलने में असमर्थ।';
$lang['admin_languages_default_error_nochange'] = 'यह भाषा पहले से ही डिफ़ॉल्ट है।';
$lang['admin_languages_default_success'] = 'डिफ़ॉल्ट भाषा सफलतापूर्वक बदल दी गई है।';
$lang['admin_languages_delete_confirm'] = 'क्या आप वाकई इस भाषा को हटाना चाहते हैं: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'भाषा हटाने में विफल।';
$lang['admin_languages_delete_error_active'] = 'सक्रिय भाषाएं हटाई नहीं जा सकतीं।';
$lang['admin_languages_delete_error_default'] = 'डिफ़ॉल्ट भाषा हटाई नहीं जा सकती।';
$lang['admin_languages_delete_success'] = 'भाषा सफलतापूर्वक हटा दी गई।';
$lang['admin_languages_disable_all_confirm'] = 'क्या आप वाकई सभी भाषाएँ अक्षम करना चाहते हैं?';
$lang['admin_languages_disable_all_error'] = 'सभी भाषाएँ अक्षम करने में असमर्थ।';
$lang['admin_languages_disable_all_success'] = 'सभी भाषाएँ सफलतापूर्वक अक्षम की गईं।';
$lang['admin_languages_disable_confirm'] = 'क्या आप वाकई भाषा को अक्षम करना चाहते हैं: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'भाषा को निष्क्रिय करने में असमर्थ।';
$lang['admin_languages_disable_error_default'] = 'डिफ़ॉल्ट भाषा को निष्क्रिय नहीं किया जा सकता।';
$lang['admin_languages_disable_error_nochange'] = 'यह भाषा पहले से ही निष्क्रिय है।';
$lang['admin_languages_disable_success'] = 'भाषा सफलतापूर्वक निष्क्रिय की गई है।';
$lang['admin_languages_enable_all_confirm'] = 'क्या आप वाकई सभी भाषाएँ सक्षम करना चाहते हैं?';
$lang['admin_languages_enable_all_error'] = 'सभी भाषाएँ सक्षम करने में असमर्थ।';
$lang['admin_languages_enable_all_success'] = 'सभी भाषाएँ सफलतापूर्वक सक्षम की गईं।';
$lang['admin_languages_enable_confirm'] = 'क्या आप वाकई भाषा को सक्षम करना चाहते हैं: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'भाषा सक्रिय करने में असमर्थ।';
$lang['admin_languages_enable_error_nochange'] = 'यह भाषा पहले से ही सक्रिय है।';
$lang['admin_languages_enable_success'] = 'भाषा सफलतापूर्वक सक्रिय की गई।';
$lang['admin_languages_install_confirm'] = 'क्या आप वाकई भाषा को इंस्टॉल करना चाहते हैं: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'भाषा इंस्टॉल करने में विफल।';
$lang['admin_languages_install_success'] = 'भाषा सफलतापूर्वक इंस्टॉल हो गई।';
$lang['admin_languages_install_tip'] = 'भाषाएँ आपकी साइट के इंटरफ़ेस और सामग्री के लिए अनुवाद जोड़ती हैं। उपलब्ध भाषाओं को <a href="%s" target="_blank" rel="noopener">भाषा निर्देशिका</a> में देखें या अपनी भाषा इंस्टॉल करने के लिए <b>.zip</b> पैकेज अपलोड करें।';
$lang['admin_languages_tip'] = 'साइट की डिफ़ॉल्ट भाषा को सक्षम, अक्षम और सेट करें। सक्षम भाषाएँ साइट के आगंतुकों के लिए उपलब्ध हैं।';
$lang['admin_languages_update_confirm'] = 'क्या आप वाकई इस भाषा को अपडेट करना चाहते हैं?';
$lang['admin_languages_update_error'] = 'भाषा अपडेट करने में विफल।';
$lang['admin_languages_update_success'] = 'भाषा सफलतापूर्वक अपडेट हो गई।';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'पैकेज पहले से मौजूद है।';
$lang['package_archive_download_failed'] = 'पैकेज संग्रह (archive) डाउनलोड करने में विफल।';
$lang['package_backup_create_error'] = 'पैकेज बैकअप बनाने में विफल रहा।';
$lang['package_backup_dir_failed'] = 'बैकअप निर्देशिका बनाने में विफल: %s';
$lang['package_backup_missing'] = 'बैकअप फ़ाइल मौजूद नहीं है।';
$lang['package_backup_path_error'] = 'बैकअप फ़ाइल का पथ हल नहीं किया जा सका।';
$lang['package_backup_request_invalid'] = 'अमान्य बैकअप अनुरोध।';
$lang['package_backup_restore_error'] = 'पैकेज बैकअप पुनर्स्थापित करने में विफल रहा।';
$lang['package_catalog_type_unknown'] = 'अज्ञात कैटलॉग प्रकार।';
$lang['package_checksum_error'] = 'पैकेज चेकसम सत्यापन विफल रहा।';
$lang['package_copy_files_error'] = 'गंतव्य पर पैकेज फ़ाइलों को कॉपी करने में विफल रहा।';
$lang['package_copy_updates_error'] = 'गंतव्य पर अपडेट फ़ाइलों को कॉपी करने में विफल रहा।';
$lang['package_dest_dir_failed'] = 'गंतव्य निर्देशिका (destination directory) बनाने में विफल: %s';
$lang['package_destination_error'] = 'पैकेज गंतव्य का समाधान नहीं किया जा सका।';
$lang['package_download_dir_failed'] = 'डाउनलोड निर्देशिका (directory) बनाने में विफल: %s';
$lang['package_download_empty'] = 'पैकेज डाउनलोड ने एक खाली प्रतिक्रिया दी।';
$lang['package_download_request_invalid'] = 'अमान्य पैकेज डाउनलोड अनुरोध।';
$lang['package_extract_failed'] = 'ZIP को निष्कर्षण (extract) करने में विफल: %s';
$lang['package_invalid_lang_files'] = 'अमान्य भाषा — आवश्यक ऐप भाषा फ़ाइलें गायब हैं।';
$lang['package_invalid_lang_structure'] = 'अमान्य भाषा — admin और/या ci3 निर्देशिकाएँ (directories) गायब हैं।';
$lang['package_invalid_missing_info'] = 'अमान्य %s: "info.php" अनुपस्थित है।';
$lang['package_invalid_module_structure'] = 'अमान्य मॉड्यूल — आवश्यक config और/या controllers निर्देशिकाएँ गायब हैं।';
$lang['package_invalid_plugin_boot'] = 'अमान्य प्लगइन — "boot.php" गायब है।';
$lang['package_invalid_plugin_contents'] = 'अमान्य प्लगइन — प्लगइन में कंट्रोलर या व्यू (views) नहीं हो सकते।';
$lang['package_invalid_theme_boot'] = 'अमान्य थीम — "boot.php" गायब है।';
$lang['package_invalid_theme_views'] = 'अमान्य थीम — views निर्देशिका गायब है।';
$lang['package_no_root_dir'] = 'पैकेज में कोई रूट निर्देशिका नहीं है।';
$lang['package_not_downloadable'] = 'पैकेज सार्वजनिक रूप से डाउनलोड करने योग्य नहीं है।';
$lang['package_not_in_registry'] = 'पैकेज सार्वजनिक रजिस्ट्री में उपलब्ध नहीं है।';
$lang['package_request_invalid'] = 'अमान्य पैकेज अनुरोध।';
$lang['package_rollback_request_invalid'] = 'अमान्य रोलबैक अनुरोध।';
$lang['package_root_mismatch'] = 'पैकेज संग्रह रूट %s से मेल नहीं खाता है';
$lang['package_single_root_required'] = 'पैकेज में ठीक एक रूट निर्देशिका होनी चाहिए।';
$lang['package_source_error'] = 'पैकेज स्रोत का समाधान नहीं किया जा सका।';
$lang['package_system_core_restricted'] = 'सिस्टम घटकों को पैकेज के रूप में स्थापित नहीं किया जा सकता है।';
$lang['package_temp_dir_failed'] = 'अस्थायी निर्देशिका (temp directory) बनाने में विफल: %s';
$lang['package_type_unknown'] = 'अज्ञात पैकेज प्रकार।';
$lang['package_update_request_invalid'] = 'अमान्य पैकेज अपडेट अनुरोध।';
$lang['package_update_root_mismatch'] = 'अपडेट संग्रह रूट %s से मेल नहीं खाता है।';
$lang['package_upload_dir_failed'] = 'अपलोड निर्देशिका (directory) बनाने में विफल: %s';
$lang['package_url_invalid'] = 'अमान्य पैकेज वितरण URL।';
$lang['package_write_failed'] = '%s पर पैकेज लिखने में विफल';
$lang['package_zip_not_found'] = 'पैकेज ZIP मौजूद नहीं है: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'नए अपडेट उपलब्ध हैं!';
$lang['update_backup_error'] = 'मौजूदा पैकेज का बैकअप बनाने में असमर्थ। अपडेट रद्द कर दिया गया।';
$lang['update_check_disabled'] = 'स्वचालित अपडेट जांच अक्षम है। अपडेट देखने के लिए इन्हें सक्षम करें।';
$lang['update_check_error'] = 'इस समय अपडेट जांच चलाने में असमर्थ।';
$lang['update_check_success'] = 'अपडेट जांच सफलतापूर्वक पूर्ण हुई।';
$lang['update_install_error'] = 'पैकेज इंस्टॉल नहीं किया जा सका। पिछला संस्करण रखा गया।';
$lang['update_install_success'] = 'पैकेज सफलतापूर्वक नवीनतम संस्करण में अपडेट किया गया।';
$lang['update_interval_3days'] = 'हर 3 दिन';
$lang['update_interval_biweekly'] = 'हर 2 सप्ताह';
$lang['update_interval_daily'] = 'हर दिन';
$lang['update_interval_monthly'] = 'महीने में एक बार';
$lang['update_interval_weekly'] = 'सप्ताह में एक बार';
$lang['update_not_available'] = 'आपकी वेबसाइट अद्यतित है।';
$lang['update_rollback_confirm'] = 'क्या आप वाकई पिछला संस्करण पुनर्स्थापित करना चाहते हैं?';
$lang['update_rollback_error'] = 'पिछला संस्करण पुनर्स्थापित करने में असमर्थ। मैन्युअल हस्तक्षेप की आवश्यकता हो सकती है।';
$lang['update_rollback_success'] = 'पिछला संस्करण सफलतापूर्वक पुनर्स्थापित किया गया।';
$lang['updates_available'] = 'उपलब्ध अपडेट';
$lang['updates_check_now'] = 'अभी जांचें';
$lang['updates_check_now_confirm'] = 'क्या आप वाकई अभी अपडेट की जांच करना चाहते हैं?';
$lang['updates_current_version'] = 'वर्तमान संस्करण';
$lang['updates_enable'] = 'अपडेट सक्षम करें';
$lang['updates_last_check'] = 'अंतिम जांच: %s';
$lang['updates_latest_version'] = 'नवीनतम संस्करण';
$lang['updates_next_check'] = 'अगली निर्धारित जांच: %s';
$lang['updates_previous_version'] = 'पिछला संस्करण';
$lang['updates_recent'] = 'हाल ही में अपडेट किया गया';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'निर्दिष्ट IP पते को ब्लॉक करने में विफल।';
$lang['admin_firewall_ban_success'] = 'IP पता सफलतापूर्वक ब्लॉक कर दिया गया है।';
$lang['admin_firewall_block_ip'] = 'IP पता ब्लॉक करें';
$lang['admin_firewall_delete_confirm'] = 'क्या आप वाकई चयनित IP पतों को अनब्लॉक करना चाहते हैं?';
$lang['admin_firewall_delete_error'] = 'चयनित IP पतों को अनब्लॉक करने में विफल।';
$lang['admin_firewall_delete_success'] = 'चयनित IP पते सफलतापूर्वक अनब्लॉक कर दिए गए हैं।';
$lang['admin_firewall_duration'] = 'प्रतिबंध अवधि';
$lang['admin_firewall_permanent'] = 'स्थायी';
$lang['admin_firewall_reason'] = 'प्रतिबंध का कारण';
$lang['admin_firewall_tip'] = 'बार-बार होने वाले उल्लंघनों या संदिग्ध गतिविधि के कारण फ़ायरवॉल द्वारा अवरुद्ध IP पतों को देखें और प्रबंधित करें।';

// Settings
$lang['404_ban_duration'] = '404 प्रतिबंध अवधि';
$lang['404_threshold'] = '404 स्ट्राइक सीमा';
$lang['uri_ban_duration'] = 'यूआरआई प्रतिबंध अवधि';
$lang['uri_strike_threshold'] = 'यूआरआई स्ट्राइक सीमा';
