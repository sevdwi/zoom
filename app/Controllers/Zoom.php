<?php

namespace App\Controllers;

use App\Models\ZoomModel;
use CodeIgniter\Controller;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Zoom extends Controller
{
    protected $ZoomModel;
    protected $pemohonList = [
        "Sekretariat Daerah",
        "Sekretariat DPRD",
        "Dinas Pendidikan dan Kebudayaan",
        "Dinas Kesehatan dan Keluarga Berencana",
        "Dinas Pekerjaan Umum dan Penataan Ruang",
        "Dinas Pengelolaan Sumber Daya Air",
        "Dinas Perumahan, Kawasan Permukiman dan Pertanahan",
        "Dinas Sosial",
        "Satpol PP",
        "Dinas Perhubungan",
        "Dinas Kependudukan dan Pencatatan Sipil",
        "Dinas Lingkungan Hidup",
        "Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu",
        "Dinas Pemuda, Olah Raga dan Pariwisata",
        "Dinas Pemberdayaan Masyarakat dan Desa",
        "Dinas Kearsipan dan Perpustakaan (Kearsipan)",
        "Dinas Perdagangan, Koperasi, Usaha Kecil dan Menengah",
        "Dinas Ketenagakerjaan dan Perindustrian",
        "Dinas Pertanian",
        "Dinas Pangan dan Perkebunan",
        "Dinas Perikanan",
        "Dinas Komunikasi dan Informatika",
        "Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah",
        "Badan Kepegawaian, Pendidikan dan Pelatihan Daerah",
        "Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah",
        "Badan Kesatuan Bangsa dan Politik",
        "Badan Penanggulangan Bencana Daerah",
        "Inspektorat Kabupaten",
        "Perangkat Daerah Lainnya"
    ];
    protected $akunList = ['Vicon 3', 'Vicon 4','External'];

    public function __construct()
    {
        helper(['form', 'url']);
        $this->ZoomModel = new ZoomModel();
    }

    public function depan()
    {
        $data = [
            'title' => 'Data Jadwal Zoom',
            'zoom' => $this->ZoomModel->orderBy('tanggal', 'DESC')-> findAll() // paginate(5), // 5 data per halaman
            'pager' => $this->ZoomModel->pager // jika ingin menggunakan paginate
        ];
        return view('index', $data);
    }

    public function index()
    {
        $data = [
            'title' => 'Data Jadwal Zoom',
            'zoom' => $this->ZoomModel->orderBy('tanggal', 'DESC')->findAll()
        ];
        return view('zoom/index', $data);
    }

    // Form tambah zoom
    public function create()
    {
        $model = new \App\Models\ZoomModel();

        // Ambil nomor terakhir dan tambah 1
        $last = $model->orderBy('nomor', 'DESC')->first();
        $nomorBaru = $last ? $last['nomor'] + 1 : 1;

        $data = [
            'title' => 'Tambah Jadwal',
            'nomorBaru' => $nomorBaru,
            'pemohonList' => [
                "Sekretariat Daerah",
                "Sekretariat DPRD",
                "Dinas Pendidikan dan Kebudayaan",
                "Dinas Kesehatan dan Keluarga Berencana",
                "Dinas Pekerjaan Umum dan Penataan Ruang",
                "Dinas Pengelolaan Sumber Daya Air",
                "Dinas Perumahan, Kawasan Permukiman dan Pertanahan",
                "Dinas Sosial",
                "Satpol PP",
                "Dinas Perhubungan",
                "Dinas Kependudukan dan Pencatatan Sipil",
                "Dinas Lingkungan Hidup",
                "Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu",
                "Dinas Pemuda, Olah Raga dan Pariwisata",
                "Dinas Pemberdayaan Masyarakat dan Desa",
                "Dinas Kearsipan dan Perpustakaan (Kearsipan)",
                "Dinas Perdagangan, Koperasi, Usaha Kecil dan Menengah",
                "Dinas Ketenagakerjaan dan Perindustrian",
                "Dinas Pertanian",
                "Dinas Pangan dan Perkebunan",
                "Dinas Perikanan",
                "Dinas Komunikasi dan Informatika",
                "Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah",
                "Badan Kepegawaian, Pendidikan dan Pelatihan Daerah",
                "Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah",
                "Badan Kesatuan Bangsa dan Politik",
                "Badan Penanggulangan Bencana Daerah",
                "Inspektorat Kabupaten",
                "Perangkat Daerah Lainnya"
                    ],
            'akunList' => ['Vicon 3', 'Vicon 4','External'],
        ];

        return view('zoom/create', $data);
    }

    // Simpan zoom baru
    public function store()
    {
        $rules = [
            'kegiatan' => [
                'rules' => 'required|is_unique[jadwalzoom_tb.nomor]',
                'errors' => [
                    'required' => 'Kegiatan wajib diisi.',
                    // 'is_unique' => 'Kegiatan sudah ada, tidak boleh sama.'
                ]
            ],
            'pemohon' => 'required',
            'tanggal' => 'required|valid_date',
            'jam_mulai' => 'required',
            'link' => 'required',
            'akun' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $lastNomor = $this->ZoomModel->selectMax('nomor')->first();
        $nomorBaru = $lastNomor['nomor'] ? $lastNomor['nomor'] + 1 : 1;

        $data = [
            'nomor' => $nomorBaru,
            'kegiatan' => $this->request->getPost('kegiatan'),
            'pemohon' => $this->request->getPost('pemohon'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jam_mulai' => $this->request->getPost('jam_mulai'),
            'link' => $this->request->getPost('link'),
            'akun' => $this->request->getPost('akun'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $this->ZoomModel->insert($data);

        return redirect()->to('/zoom')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    // Form edit zoom
    public function edit($id)
    {
        $zoom = $this->ZoomModel->find($id);
        if (!$zoom) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("zoom dengan ID $id tidak ditemukan");
        }

        $data = [
            'title' => 'Edit Data Zoom',
            'zoom' => $zoom,
            'pemohonList' => $this->pemohonList,
            'akunList' => $this->akunList,
            'validation' => \Config\Services::validation()
        ];

        return view('zoom/edit', $data);
    }

    // Update zoom
    public function update($id)
    {
        $zoomLama = $this->ZoomModel->find($id);
        if (!$zoomLama) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("zoom dengan ID $id tidak ditemukan");
        }

        // $nomorzoomPost = $this->request->getPost('nomor_zoom');

        $rules = [
            'kegiatan' => 'required',
            'pemohon' => 'required',
            'tanggal' => 'required|valid_date',
            'link' => 'required',
            'akun' => 'required'
        ];

        // Jika nomor_zoom berubah, harus unik
        // if ($nomorzoomPost != $zoomLama['nomor_zoom']) {
        //     $rules['nomor_zoom'] = 'required|is_unique[zoomkeluar_tb.nomor_zoom]';
        // } else {
        //     $rules['nomor_zoom'] = 'required';
        // }

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'kegiatan' => $this->request->getPost('kegiatan'),
            // 'nomor_zoom' => $nomorzoomPost,
            'pemohon' => $this->request->getPost('pemohon'),
            'tanggal' => $this->request->getPost('tanggal'),
            'link' => $this->request->getPost('link'),
            'akun' => $this->request->getPost('akun'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $this->ZoomModel->update($id, $data);

        return redirect()->to('/zoom')->with('success', 'zoom berhasil diperbarui.');
    }

    // Hapus zoom
    public function delete($id)
    {
        $zoom = $this->ZoomModel->find($id);
        if ($zoom) {
            $this->ZoomModel->delete($id);
            return redirect()->to('/zoom')->with('success', 'zoom berhasil dihapus.');
        } else {
            return redirect()->to('/zoom')->with('error', 'zoom tidak ditemukan.');
        }
    }
    
    // Cetak pdf
    public function exportPdf()
    {
        $data['zoom'] = $this->ZoomModel->findAll();

        $dompdf = new Dompdf();
        $dompdf->setPaper('A4', 'portrait');
        $html = view('zoom/pdf_zoom', $data);
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream('Jadwal-zoom.pdf', ['Attachment' => false]);
        exit;
    }


}