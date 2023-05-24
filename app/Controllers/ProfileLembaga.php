<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfileLembagaModel;

class ProfileLembaga extends BaseController
{
    protected $profile;

    public function __construct()
    {
        $this->profile = new ProfileLembagaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Profil Lembaga',
            'lembaga' => $this->profile->find(1)
        ];
        return view('profile-lembaga/index', $data);
    }

    public function update()
    {
        if (!$this->validate([
            'image' => [
                'rules' => 'max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar.',
                    'is_image' => 'Yang anda pilih bukan gambar.',
                    'mime_in' => 'Yang anda pilih bukan gambar.'
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        }
        $image = $this->request->getFile('image');
        //cek gambar, apakah tetap gambar lama
        if ($image->getError() == 4) {
            $namaImage = $this->request->getVar('imageLama');
        } else {
            //generate nama file random
            $namaImage = 'logo.' . $image->getExtension();
            //hapus file lama
            unlink('media/logos/' . $this->request->getVar('imageLama'));
            //pindahkan gambar
            $image->move('media/logos/', $namaImage);
        }

        $this->profile->save([
            'nama_lembaga' => trim(ucfirst($this->request->getVar('nama_lembaga'))),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'website' => $this->request->getVar('website'),
            'telp' => $this->request->getVar('telp'),
            'kab_lembaga' => trim(ucfirst($this->request->getVar('kab'))),
            'ketua_panitia' => trim(ucfirst($this->request->getVar('ketua'))),
            'nip_ketua' => $this->request->getVar('nip_ketua'),
            'th_pelajaran' => $this->request->getVar('th_pelajaran'),
            'no_surat' => $this->request->getVar('no_surat'),
            'kepsek' => trim(ucfirst($this->request->getVar('kepsek'))),
            'nip_kepsek' => $this->request->getVar('nip_kepsek'),
            'logo' => $namaImage
        ]);

        session()->setFlashdata('pesan', 'Profil berhasil diperbarui.');
        return redirect()->to('/panel/lembaga');
    }
}
