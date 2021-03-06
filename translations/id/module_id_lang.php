<?php
/**
* Shop System Plugins:
* - Terms of Use can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
* - License can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/LICENSE
*/

$sLangName = 'Indonesia';

$aLang = array(
    'charset' => 'UTF-8',
    'wd_accept' => 'Terima',
    'wd_account_holder_title' => 'Pemilik Akun',
    'wd_amount' => 'Amount',
    'wd_bic' => 'BIC:',
    'wd_birthdate_input' => 'Tanggal lahir',
    'wd_cancel' => 'Cancel',
    'wd_canceled_payment_process' => 'Anda telah membatalkan proses pembayaran.',
    'wd_capture' => 'Ambil',
    'wd_city' => 'Kota',
    'wd_company_name_input' => 'Perusahaan',
    'wd_config_additional_info' => 'Kirim informasi tambahan',
    'wd_config_additional_info_desc' => 'Data tambahan akan dikirimkan untuk perlindungan atas penipuan. Data tambahan ini mencakup alamat pengiriman tagihan/barang, keranjang belanja, dan pendeskripsi.',
    'wd_config_allowed_currencies' => 'Mata uang yang diizinkan',
    'wd_config_allowed_currencies_desc' => 'Metode pembayaran Faktur Bergaransi hanya akan ditampilkan jika mata uang yang aktif termasuk salah satu mata uang negara terpilih.',
    'wd_config_allow_changed_shipping' => 'Izinkan Perubahan Alamat Pengiriman',
    'wd_config_allow_changed_shipping_desc' => 'Jika dinonaktifkan, pelanggan harus memasukkan detail kartu kredit jika alamat pengiriman telah diubah di antara dua pesanan.',
    'wd_config_base_url' => 'URL Dasar',
    'wd_config_base_url_desc' => 'URL dasar Wirecard. (misal, https://api.wirecard.com)',
    'wd_config_billing_countries' => 'Negara tujuan yang diizinkan untuk pengiriman tagihan',
    'wd_config_billing_countries_desc' => 'Metode pembayaran Faktur Bergaransi hanya akan ditampilkan jika negara tujuan pengiriman barang pembeli termasuk salah satu negara terpilih.\nNegara-negara yang diizinkan berikut ini telah ditentukan sebelumnya: AT, DE.',
    'wd_config_billing_shipping' => 'Alamat pengiriman tagihan/barang harus sama',
    'wd_config_billing_shipping_desc' => 'Jika diaktifkan, metode pembayaran Faktur Bergaransi hanya akan ditampilkan jika alamat pengiriman Tagihan/Barang sama',
    'wd_config_country_code' => 'Kode Negara',
    'wd_config_country_code_desc' => 'Sofort. membutuhkan kode negara yang valid untuk menggunakan logo yang sesuai (contohnya en_gb).',
    'wd_config_creditor_id' => 'Identitas Kreditur',
    'wd_config_creditor_id_desc' => 'SEPA membutuhkan Identitas Kreditur untuk membuat Mandat Debit Langsung SEPA. Untuk mendapatkan Identitas Kreditur, ajukan di lembaga bank yang bertanggung jawab.',
    'wd_config_delete_cancel_order' => 'Hapus Pesanan yang Dibatalkan',
    'wd_config_delete_cancel_order_desc' => 'Menghapus pesanan secara otomatis setelah proses pembayaran yang dibatalkan.',
    'wd_config_delete_failure_order' => 'Hapus Pesanan yang gagal',
    'wd_config_delete_failure_order_desc' => 'Menghapus pesanan secara otomatis setelah proses pembayaran gagal.',
    'wd_config_descriptor' => 'Pendeskripsi',
    'wd_config_descriptor_desc' => 'Kirim teks yang akan ditampilkan pada laporan bank yang diterbitkan untuk pembeli Anda oleh penyedia jasa keuangan',
    'wd_config_email' => 'Alamat e-mail Anda',
    'wd_config_enable_bic' => 'BIC diaktifkan',
    'wd_config_http_password' => 'Kata Sandi HTTP',
    'wd_config_http_user' => 'Pengguna HTTP',
    'wd_config_logo_variant' => 'Versi Logo',
    'wd_config_logo_variant_desc' => 'Tunjukkan versi logo standar atau deskriptif kepada pelanggan Anda.',
    'wd_config_merchant_account_id' => 'Identitas Rekening Penjual',
    'wd_config_merchant_account_id_desc' => 'Tanda pengenal unik yang diberikan untuk rekening penjual.',
    'wd_config_merchant_secret' => 'Kunci Rahasia',
    'wd_config_merchant_secret_desc' => 'Kunci rahasia wajib digunakan untuk mengkalkulasi Tanda Tangan Digital dalam pembayaran.',
    'wd_config_message' => 'Pesan Anda',
    'wd_config_payment_action' => 'Tindakan Pembayaran',
    'wd_config_payment_action_desc' => 'Pilih \"Catat transaksi\" untuk mencatat transaksi/menerbitkan faktur atas pesanan Anda secara otomatis atau \"Otorisasi\" untuk mencata transaksi/menerbitkan faktur secara manual.',
    'wd_config_payolution_terms_url' => 'URL Payolution',
    'wd_config_payolution_terms_url_desc' => 'Wajib jika opsi "Membutuhkan Persetujuan" diisi Ya.',
    'wd_config_PSD2_information' => 'PSD 2',
    'wd_config_PSD2_information_desc_oxid' => '</a>With regard to PSD 2 requirements, you should request<br> certain personal information from your consumers during<br> <u><a target="_blank" href=\'https://github.com/wirecard/oxid-ee/wiki/Credit-Card\'>checkout</a></u> to reduce the risk of transactions being rejected.',
    'wd_config_reply_to' => 'Balas ke (opsional)',
    'wd_config_require_consent' => 'Membutuhkan Persetujuan',
    'wd_config_require_consent_desc' => 'Konsumen wajib menyetujui persyaratan sebelum bisa melanjutkan proses checkout.',
    'wd_config_shipping_countries' => 'Negara tujuan yang diizinkan untuk pengiriman barang',
    'wd_config_shipping_countries_desc' => 'Metode pembayaran Faktur Bergaransi hanya akan ditampilkan bila negara tujuan pengiriman tagihan pembeli termasuk salah satu negara terpilih.\nBerdasarkan kontrak Wirecard Anda, negara-negara yang diizinkan berikut ini telah ditentukan sebelumnya: AT, DE.',
    'wd_config_shopping_basket' => 'Keranjang Belanja',
    'wd_config_shopping_basket_desc' => 'Untuk tujuan konfirmasi, metode pembayaran ini mendukung tampilan keranjang belanja saat checkout. Untuk mengaktifkan fitur ini, aktifkan Keranjang Belanja.',
    'wd_config_ssl_max_limit' => 'Batas Maksimum untuk Non 3-D Secure',
    'wd_config_ssl_max_limit_desc' => 'Jumlah ini mengharuskan transaksi dengan 3-D Secure. Masukkan "null" untuk menonaktifkan Batas Maksimal Mata Uang untuk Non 3-D Secure.',
    'wd_config_three_d_merchant_account_id' => 'ID 3-D Secure Rekening Penjual',
    'wd_config_three_d_merchant_account_id_desc' => 'Tanda pengenal unik yang diberikan untuk Rekening 3D Secure Penjual Anda.',
    'wd_config_three_d_merchant_secret' => 'Kunci Rahasia 3-D Secure',
    'wd_config_three_d_merchant_secret_desc' => 'Kunci rahasia wajib digunakan untuk mengkalkulasi Tanda Tangan Digital dalam pembayaran 3D.',
    'wd_config_three_d_min_limit' => 'Batas Minimum untuk 3-D Secure',
    'wd_config_three_d_min_limit_desc' => 'Jumlah ini mengharuskan transaksi dengan 3-D Secure. Masukkan "null" untuk menonaktifkan Batas Minimal untuk 3-D Secure.',
    'wd_config_vault' => 'Checkout Satu Klik',
    'wd_config_vault_desc' => 'Kartu Kredit dapat disimpan untuk digunakan kembali di kemudian hari tanpa memasukkan perincian kartu kredit',
    'wd_config_wpp_url' => 'Alamat Wirecard Payment Page v2 (URL WPP v2)',
    'wd_config_wpp_url_desc' => 'Alamat Wirecard Payment Page v2  (URL WPP v2) (misalnya https://wpp.wirecard.com).',
    'wd_copy_xml_text' => 'Salin XML',
    'wd_country' => 'Negara',
    'wd_credit' => 'Pengembalian Dana',
    'wd_creditor' => 'Kreditor',
    'wd_creditor_mandate_id' => 'Identitas Mandat',
    'wd_currency_config' => 'Setiap mata uang harus dikonfigurasi.',
    'wd_customerId' => 'ID Pelanggan',
    'wd_date-of-birth' => 'Pengiriman',
    'wd_date_format_php_code' => 'm/d/Y',
    'wd_date_format_user_hint' => 'MM/DD/YYYY',
    'wd_debtor' => 'Debitur',
    'wd_debtor_acc_owner' => 'Pemilik akun:',
    'wd_default_currency' => 'Mata Uang Default',
    'wd_descriptor' => 'Pendeskripsi',
    'wd_email' => 'Email',
    'wd_enter_country_code_error' => 'Masukkan kode negara yang valid.',
    'wd_enter_valid_email_error' => 'Please enter a valid e-mail address',
    'wd_error_credentials' => 'Tes gagal, harap cek kredensial Anda.',
    'wd_error_save_failed' => 'Konfigurasi tidak valid. Penyimpanan tidak bisa dilakukan.',
    'wd_first-name' => 'Nama depan',
    'wd_gender' => 'Jenis kelamin',
    'wd_heading_title' => 'Wirecard',
    'wd_heading_title_alipay_crossborder' => 'Alipay Cross-border Wirecard',
    'wd_heading_title_creditcard' => 'Kartu Kredit Wirecard',
    'wd_heading_title_eps' => 'Wirecard eps-Überweisung',
    'wd_heading_title_giropay' => 'giropay Wirecard',
    'wd_heading_title_ideal' => 'iDEAL Wirecard',
    'wd_heading_title_payolution_b2b' => 'Faktur Bergaransi Wirecard (Payolution B2B)',
    'wd_heading_title_payolution_b2b_consumer' => 'Faktur Wirecard (Payolution B2B)',
    'wd_heading_title_payolution_invoice' => 'Faktur Bergaransi Wirecard (Payolution B2C)',
    'wd_heading_title_payolution_invoice_consumer' => 'Faktur Wirecard (Payolution B2C)',
    'wd_heading_title_paypal' => 'Wirecard PayPal',
    'wd_heading_title_pia' => 'Pembayaran Di Muka untuk Wirecard',
    'wd_heading_title_poi' => 'Pembayaran Berdasarkan Faktur untuk Wirecard',
    'wd_heading_title_ratepayinvoice' => 'Faktur Bergaransi Wirecard',
    'wd_heading_title_ratepayinvoice_consumer' => 'Faktur Wirecard oleh Wirecard',
    'wd_heading_title_sepact' => 'SEPA Credit Transfer Wirecard',
    'wd_heading_title_sepadd' => 'SEPA Direct Debit Wirecard',
    'wd_heading_title_sofortbanking' => 'Sofort. Wirecard',
    'wd_heading_title_support' => 'Dukungan',
    'wd_heading_title_transaction_details' => 'Wirecard Transactions',
    'wd_house-extension' => 'Nomor Ekstensi Rumah',
    'wd_iban' => 'IBAN:',
    'wd_ideal_legend' => 'Pilih bank Anda',
    'wd_ip' => 'Alamat IP',
    'wd_last-name' => 'Nama belakang',
    'wd_maid' => 'MAID',
    'wd_manipulated' => 'dimanipulasi',
    'wd_merchant-crm-id' => 'Identitas CRM Penjual',
    'wd_message_empty_error' => 'Kolom pesan tidak boleh kosong.',
    'wd_more_info' => 'Informasi Lainnya',
    'wd_no' => 'Tidak',
    'wd_orderNumber' => 'Nomor Pesanan',
    'wd_order_error' => 'Kesalahan terjadi saat proses pembayaran. Harap coba lagi.',
    'wd_order_error_info' => 'Kesalahan terjadi dalam proses pembayaran. Perintah telah dibatalkan.',
    'wd_order_status' => 'Status perintah',
    'wd_order_status_authorized' => 'Sah',
    'wd_order_status_cancelled' => 'Dibatalkan',
    'wd_order_status_failed' => 'Gagal',
    'wd_order_status_pending' => 'Tunda',
    'wd_order_status_purchased' => 'Dibayar',
    'wd_order_status_refunded' => 'Dikembalikan',
    'wd_panel_action' => 'Tindakan',
    'wd_panel_amount' => 'Jumlah',
    'wd_panel_currency' => 'Mata uang',
    'wd_panel_details' => 'Detail',
    'wd_panel_order_id' => 'Referensi Pemesanan',
    'wd_panel_order_number' => 'Order Number',
    'wd_panel_parent_transaction_id' => 'ID transaksi-induk',
    'wd_panel_payment_method' => 'Metode pembayaran',
    'wd_panel_provider_transaction_id' => 'Identitas Transaksi Penyedia',
    'wd_panel_transaction' => 'Transaksi',
    'wd_panel_transaction_copy' => 'Salin XML',
    'wd_panel_transaction_date' => 'Tanggal',
    'wd_panel_transaction_state' => 'Status transaksi',
    'wd_panel_transcation_id' => 'ID Transaksi',
    'wd_paymentMethod' => 'Metode Pembayaran',
    'wd_payment_awaiting' => 'Menunggu pembayaran dari Wirecard',
    'wd_payment_cancelled_text' => 'Pembayaran dibatalkan.',
    'wd_payment_cost' => 'Biaya Pembayaran',
    'wd_payment_failed_text' => 'Proses pembayaran gagal dilakukan.',
    'wd_payment_method_settings' => 'Payment method settings',
    'wd_payment_refunded_text' => 'Pembayaran dikembalikan.',
    'wd_payment_success_text' => 'Proses pembayaran berhasil dilakukan.',
    'wd_payolution_terms' => 'Saya setuju bahwa data yang diperlukan untuk proses likuidasi pembelian pada akun dan data yang digunakan untuk melengkapi identitas serta pemeriksaan kredit akan dikirimkan ke Payolution. <u><a href="%s" target="_blank">Persetujuan</a></u> saya bisa dicabut kapan saja dengan efek segera di masa depan.',
    'wd_phone' => 'Telepon',
    'wd_pia_ptrid' => 'Referensi',
    'wd_postal-code' => 'Kode Pos',
    'wd_ptrid' => 'Identitas referensi transaksi provider',
    'wd_ratepayinvoice_fields_error' => 'Anda harus berusia 18 tahun ke atas untuk memesan.',
    'wd_redirect_text' => 'Koneksi Anda sedang dialihkan, harap menunggu',
    'wd_refund' => 'Pengembalian Dana',
    'wd_requestedAmount' => 'Jumlah',
    'wd_requestId' => 'ID Permintaan',
    'wd_save_to_user_account' => 'Simpan data ke akun pengguna Anda.',
    'wd_secured' => 'diamankan',
    'wd_send_email' => 'Kirim',
    'wd_sepa_mandate' => 'Mandat SEPA',
    'wd_sepa_text_1' => 'Saya mengizinkan kreditor',
    'wd_sepa_text_2' => 'untuk mengirimkan instruksi ke bank saya untuk mengumpulkan satu debit langsung dari akun saya. Pada waktu yang sama saya menginstruksikan bank untuk mendebit akun saya sesuai dengan instruksi dari kreditor',
    'wd_sepa_text_2b' => '.',
    'wd_sepa_text_3' => 'Catatan: Sebagai bagian dari hak saya, saya berhak atas pengembalian dana sesuai dengan syarat dan ketentuan perjanjian saya dengan bank. Pengembalian dana harus diklaim dalam waktu 8 minggu dimulai dari tanggal akun saya didebit.',
    'wd_sepa_text_4' => 'Saya menyatakan persetujuan yang tidak dapat dibatalkan bahwa jika debit langsung tidak ditanggapi, atau terdapat keberatan atas debit langsung tersebut, bank saya akan mengungkapkan kepada kreditor',
    'wd_sepa_text_5' => 'nama lengkap, alamat, dan tanggal lahir saya.',
    'wd_sepa_text_6' => 'Saya telah membaca dan menyetujui informasi mengenai Mandat Debit Langsung SEPA.',
    'wd_shipping-method' => 'Metode Pengiriman',
    'wd_shipping_title' => 'Pengiriman',
    'SHOP_MODULE_GROUP_wd_emails' => 'Email',
    'SHOP_MODULE_wd_email_on_pending_orders' => 'Kirim email pemberitahuan untuk pesanan yang tertunda.',
    'wd_social-security-number' => 'Nomor Jaminan Sosial',
    'wd_state_awaiting' => 'menunggu',
    'wd_state_closed' => 'ditutup',
    'wd_state_error' => 'kesalahan',
    'wd_state_success' => 'berhasil',
    'wd_street1' => 'Jalan',
    'wd_street2' => 'Jalan 2',
    'wd_success_credentials' => 'Pengujian konfigurasi penjual berhasil.',
    'wd_success_email' => 'E-Mail berhasil dikirim',
    'wd_support_description' => 'Informasi sistem akan ditambahkan ke pesan Anda secara otomatis dan akan dikirimkan ke',
    'wd_support_email_from' => 'Dari',
    'wd_support_email_modules' => 'Modul Lainnya',
    'wd_support_email_module_id' => 'ID Modul',
    'wd_support_email_module_title' => 'Judul Modul',
    'wd_support_email_module_version' => 'Versi Modul',
    'wd_support_email_php' => 'Versi PHP',
    'wd_support_email_reply_to' => 'Balas ke',
    'wd_support_email_shop_edition' => 'Edisi OXID eShop',
    'wd_support_email_shop_version' => 'Versi OXID eShop',
    'wd_support_email_subject' => 'Permintaan Dukungan OXID eShop',
    'wd_support_email_system' => 'Informasi Server',
    'wd_support_send_error' => 'Email dukungan tidak bisa dikirimkan.',
    'wd_test_credentials' => 'Tes',
    'wd_text_article_name' => 'Nama Produk',
    'wd_text_article_number' => 'Nomor Artikel',
    'wd_text_backend_operations' => 'Kemungkinan Operasi Pascapemrosesan',
    'wd_text_delete' => 'Hapus',
    'wd_text_generic_error' => 'Tindakan tidak bisa dilakukan.',
    'wd_text_generic_success' => 'Tindakan berhasil dilakukan.',
    'wd_text_list' => 'Transaksi',
    'wd_text_logo_variant_descriptive' => 'Deskriptif',
    'wd_text_logo_variant_standard' => 'Standar',
    'wd_text_message' => 'Pesan',
    'wd_text_no_data_available' => 'Data tidak tersedia.',
    'wd_text_no_further_operations_possible' => 'Tidak ada tindakan operasi lebih lanjut yang bisa dilakukan.',
    'wd_text_order_no_transactions' => 'Tidak ada transaksi yang terkait untuk perintah ini.',
    'wd_text_payment_action_pay' => 'Purchase',
    'wd_text_payment_action_reserve' => 'Authorization',
    'wd_text_quantity' => 'Kuantitas',
    'wd_text_support' => 'Support',
    'wd_text_vault' => 'Checkout Satu Klik',
    'wd_three_d_link_text' => 'Batasan Non 3D Secure dan 3D Secure',
    'wd_timeStamp' => 'Tanggal',
    'wd_total_amount_not_in_range_text' => 'Jumlah berada di luar dari rentang yang diizinkan.',
    'wd_transactionID' => 'ID Transaksi',
    'wd_transactionState' => 'Status Transaksi',
    'wd_transactionType' => 'Jenis Transaksi',
    'wd_transaction_details_title' => 'Detail Transaksi',
    'wd_transaction_response_details' => 'Rincian Tanggapan',
    'wd_transfer_notice' => 'Harap transfer jumlah tersebut menggunakan data berikut ini:',
    'wd_unmatched' => 'tiada cocok',
    'wd_vault_changed_shipping_text' => 'Alamat pengiriman Anda telah berubah sejak pesanan terakhir. Untuk tujuan keamanan, kami mewajibkan Anda memasukkan detail kartu kredit baru.',
    'wd_vault_save_text' => 'Simpan untuk digunakan di kemudian hari.',
    'wd_vault_use_new_text' => 'Gunakan Kartu Kredit baru',
    'wd_wait_for_final_status' => 'Tunggu email terpisah berikutnya dengan status akhir pembayaran Anda.',
    'wd_warning_credit_card_url_mismatch' => 'Perhatian: Periksa kredensial Anda dalam kolom pengaturan URL. Anda mungkin telah mengonfigurasi/menggabungkan akun produktif dengan akun pengujian.',
    'wd_yes' => 'Ya',
);
