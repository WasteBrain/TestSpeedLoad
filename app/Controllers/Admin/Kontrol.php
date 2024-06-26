<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index()
    {
        return view('Admin/Content/dashboard');
    }

    // Menu Tiket
    public function viewticket()
    {
        return view('Admin/Content/Ticket/app');
    }

    public function detailTiket()
    {
        return view('Admin/Content/Ticket/detailTiket');
    }

    public function detailprint()
    {
        return view('Admin/Content/Ticket/detailprint');
    }

    // Menu Tables
    public function listkantor()
    {
        return view('Admin/Content/Tables/listkantor');
    }

    public function detailkantor()
    {
        return view('Admin/Content/Tables/detailkantor');
    }

    public function listdepartemen()
    {
        return view('Admin/Content/Tables/listdepartemen');
    }

    public function detaildepartemen()
    {
        return view('Admin/Content/Tables/detaildepartemen');
    }

    public function listpic()
    {
        return view('Admin/Content/Tables/listpic');
    }

    public function listdivisi_it()
    {
        return view('Admin/Content/Tables/listdivisi');
    }

    // menu Forms
    // sesuai hasil diskusi 11 juni
    public function forminputaktivis()
    {
        return view('Admin/Content/Forms/aktivis');
    }
    public function forminputjabatan()
    {
        return view('Admin/Content/Forms/jabatan');
    }
    public function forminputarea()
    {
        return view('Admin/Content/Forms/area');
    }
    public function forminputkantor()
    {
        return view('Admin/Content/Forms/kantor');
    }

    public function formsetkantoraktivis()
    {
        return view('Admin/Content/Forms/kantoraktivis');
    }

    public function formsetjabatanaktivis()
    {
        return view('Admin/Content/Forms/jabatanaktivis');
    }

    public function formsetuserloginaktivis()
    {
        return view('Admin/Content/Forms/userlogin');
    }
    public function formsetpicarea()
    {
        return view('Admin/Content/Forms/pic');
    }



    // Menu Charts
    public function chartsTiket()
    {
        return view('Admin/Content/Charts/Tiket/app');
    }
    public function exportTiketByStatus()
    {
        $data = [
            'fromDate' => '12-Dec-2023',
            'toDate' => '12-Dec-2024',
            'statusTiket' => 'Semua Status'
        ];
        echo view('Admin/Content/Charts/Tiket/exportByStatus', $data);
    }
    public function exportByKategori()
    {
        $data = [
            'fromDate' => '12-Dec-2023',
            'toDate' => '12-Dec-2024',
            'kategoriTiket' => 'Semua Kategori'
        ];
        echo view('Admin/Content/Charts/Tiket/byKategori', $data);
    }
    public function exportByKantor()
    {
        $data = [
            'fromDate' => '12-Dec-2023',
            'toDate' => '12-Dec-2024',
            'kantorTiket' => 'Semua Kantor'
        ];
        echo view('Admin/Content/Charts/Tiket/byKantor', $data);
    }
    public function exportByVerifikator()
    {
        $data = [
            'fromDate' => '12-Dec-2023',
            'toDate' => '12-Dec-2024',
            'verifikatorTiket' => 'Semua Departemen'
        ];
        echo view('Admin/Content/Charts/Tiket/byVerifikator', $data);
    }

    public function chartsBO()
    {
        return view('Admin/Content/Charts/BranchOffice/app');
    }
    public function exportBOByStatusTiket()
    {
        $data = [
            'fromDate' => '12-Dec-2023',
            'toDate' => '12-Dec-2024',
            'kantorTiket' => 'Semua Kantor',
            'statusTiket' => 'Semua Status'
        ];
        echo view('Admin/Content/Charts/BranchOffice/exportByStatus', $data);
    }
    public function exportBOByKategori()
    {
        $data = [
            'fromDate' => '12-Dec-2023',
            'toDate' => '12-Dec-2024',
            'kantorTiket' => 'Semua Kantor',
            'kategoriTiket' => 'Semua Kategori'
        ];
        echo view('Admin/Content/Charts/BranchOffice/byKategori', $data);
    }
    public function exportBOByVerifikator()
    {
        $data = [
            'fromDate' => '12-Dec-2023',
            'toDate' => '12-Dec-2024',
            'kantorTiket' => 'Semua Kantor',
            'verifikatorTiket' => 'Semua Departemen'
        ];
        echo view('Admin/Content/Charts/BranchOffice/byVerifikator', $data);
    }

    public function chartsPIC()
    {
        return view('Admin/Content/Charts/PIC/app');
    }
    public function exportPIC_BySolvingTiket()
    {
        $data = [
            'fromDate' => '12-Dec-2023',
            'toDate' => '12-Dec-2024',
            'pic' => 'Semua PIC'
        ];
        echo view('Admin/Content/Charts/PIC/solvingTiket', $data);
    }
    public function exportPIC_ByKategoriTiket()
    {
        $data = [
            'fromDate' => '12-Dec-2023',
            'toDate' => '12-Dec-2024',
            'pic' => 'Semua PIC',
            'kategoriTiket' => 'Semua Kategori'
        ];
        echo view('Admin/Content/Charts/PIC/kategoritiket', $data);
    }
    public function exportPIC_ByKantorTiket()
    {
        $data = [
            'fromDate' => '12-Dec-2023',
            'toDate' => '12-Dec-2024',
            'pic' => 'Semua PIC',
            'kantorTiket' => 'Semua Kantor'
        ];
        echo view('Admin/Content/Charts/PIC/kantortiket', $data);
    }

    // Pages
    // Profile
    public function profile()
    {
        return view('Admin/Content/Pages/profile');
    }
}
