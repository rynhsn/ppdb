<?php

if (!function_exists('get_total_pending_students')) {
    function get_total_pending_students()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('siswa'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai

        $builder->where('status_pendaftaran', 1); // Filter status pendaftaran = 1 (pending)
        $total = $builder->countAllResults();

        return $total;
    }
}


