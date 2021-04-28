<?php 

namespace App\Constants;


class GlobalConstants {
    const USER_TYPE_FRONTEND = "frontend";
    const USER_TYPE_BACKEND = "backend";
    const ALL = 'ALL';
    const ALLSpec = 'Pilih Spesialisasi';
    const ALLProv = 'Pilih Provinsi';
    const ALLKab = 'Pilih Kabupaten';
    const LIST_TYPE = [self::USER_TYPE_FRONTEND, self::USER_TYPE_BACKEND];
    const LIST_LAYANAN = ["Skrining & Diagnosis", "Onkologi Medis & Kemoterapi", "Radiasi Onkologi", "Onkologi Bedah", "Perawatan Paliatif",];

}