<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\master_bdng;
use App\Models\master_bdng_member;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'Super Administrator',
            'email'=>'superadmin@example.com',
            'password'=>bcrypt('password'),
            'privilege'=>'superadmin',
            'akun_diverifikasi'=>'sudah',
        ]);
        User::create([
            'name'=>'Administrator',
            'email'=>'admin@example.com',
            'password'=>bcrypt('password'),
            'privilege'=>'admin',
            'akun_diverifikasi'=>'sudah',
        ]);
        User::create([
            'name'=>'Administrator Bidang',
            'email'=>'adminbidang@example.com',
            'password'=>bcrypt('password'),
            'privilege'=>'adminbidang',
            'akun_diverifikasi'=>'sudah',
        ]);
        User::create([
            'name'=>'Operator belum terverifikasi',
            'email'=>'operatorbelumterverifikasi@example.com',
            'password'=>bcrypt('password'),
            'privilege'=>'operator',
            'akun_diverifikasi'=>'belum',
        ]);
        User::create([
            'name'=>'Operator sudah terverifikasi',
            'email'=>'operatorsudahterverifikasi@example.com',
            'password'=>bcrypt('password'),
            'privilege'=>'operator',
            'akun_diverifikasi'=>'sudah',
        ]);
        master_bdng::create(['id'=>'114','nama_bidang'=>'Dinas Komunikasi dan Informatika']);
        master_bdng::create(['id'=>'1','nama_bidang'=>'Sekretariat']);
        master_bdng::create(['id'=>'2','nama_bidang'=>'Bidang Informasi Publik']);
        master_bdng::create(['id'=>'3','nama_bidang'=>'Bidang Komunikasi Publik']);
        master_bdng::create(['id'=>'4','nama_bidang'=>'Bidang Aplikasi Informatika']);
        master_bdng::create(['id'=>'5','nama_bidang'=>'Bidang Infrastruktur TIK']);
        master_bdng::create(['id'=>'6','nama_bidang'=>'Bidang Data dan Statistik']);
        master_bdng_member::create(['id_bdng'=>'114','nama_pejabat'=>'Dr. HUDIYONO, M.Si.','nip_pejabat'=>'19640323 198503 1 010','pangkat_pejabat'=>'Pembina Utama Muda','golongan_pejabat'=>'IV','ruang_pejabat'=>'c','jabatan_pejabat'=>'Plt. Kepala','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'1','nama_pejabat'=>'EDI SUPAJI, S.H., M.M.','nip_pejabat'=>'19670530 198903 1 006','pangkat_pejabat'=>'Pembina Tingkat I','golongan_pejabat'=>'IV','ruang_pejabat'=>'b','jabatan_pejabat'=>'Sekretaris ','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'1','nama_pejabat'=>'RATNA DIAH AYUNINGTYAS, S.E.','nip_pejabat'=>'19800224 201001 2 009','pangkat_pejabat'=>'Penata Tingkat I','golongan_pejabat'=>'III','ruang_pejabat'=>'d','jabatan_pejabat'=>'Kepala Sub Bagian Umum dan Kepegawaian','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'1','nama_pejabat'=>'TUGIRIN, S.E.','nip_pejabat'=>'19820213 201101 1 010','pangkat_pejabat'=>'Penata','golongan_pejabat'=>'III','ruang_pejabat'=>'c','jabatan_pejabat'=>'Analis Kebijakan Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'1','nama_pejabat'=>'VENUS VEBRYANA, S.STP.','nip_pejabat'=>'19920201 201206 2 002','pangkat_pejabat'=>'Penata','golongan_pejabat'=>'III','ruang_pejabat'=>'c','jabatan_pejabat'=>'Perencana  Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'2','nama_pejabat'=>'ASSYARI, S.Pd., M.Pd.','nip_pejabat'=>'19730506 199802 1 001','pangkat_pejabat'=>'Pembina','golongan_pejabat'=>'IV','ruang_pejabat'=>'a','jabatan_pejabat'=>'Plt. Kepala Bidang','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'2','nama_pejabat'=>'Drs. AGUNG SRIONO, S.H., M.M.','nip_pejabat'=>'19680722 199003 1 006','pangkat_pejabat'=>'Pembina','golongan_pejabat'=>'IV','ruang_pejabat'=>'a','jabatan_pejabat'=>'Pranata Humas Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'2','nama_pejabat'=>'PUTUT DARMAWAN, S.E.','nip_pejabat'=>'19740411 199803 1 004','pangkat_pejabat'=>'Penata Tingkat I','golongan_pejabat'=>'III','ruang_pejabat'=>'d','jabatan_pejabat'=>'Pranata Humas Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'2','nama_pejabat'=>'LENNY MARTARINA, S.E., M.M., Ak., C.A.','nip_pejabat'=>'19750304 200112 2 006','pangkat_pejabat'=>'Pembina','golongan_pejabat'=>'IV','ruang_pejabat'=>'a','jabatan_pejabat'=>'Pranata Humas Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'3','nama_pejabat'=>'ASSYARI, S.Pd., M.Pd.','nip_pejabat'=>'19730506 199802 1 001','pangkat_pejabat'=>'Pembina','golongan_pejabat'=>'IV','ruang_pejabat'=>'a','jabatan_pejabat'=>'Kepala Bidang','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'3','nama_pejabat'=>'EKO SETIAWAN, S.I.Kom., M.Med.Kom.','nip_pejabat'=>'19871029 201101 1 007','pangkat_pejabat'=>'Penata','golongan_pejabat'=>'III','ruang_pejabat'=>'c','jabatan_pejabat'=>'Pranata Humas Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'3','nama_pejabat'=>'SOFIA KURNIAWATI, S.E., M.Si.','nip_pejabat'=>'19661117 199011 2 001','pangkat_pejabat'=>'Pembina','golongan_pejabat'=>'IV','ruang_pejabat'=>'a','jabatan_pejabat'=>'Pranata Humas Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'3','nama_pejabat'=>'Dra. SITI PURWATININGSIH, M.M.','nip_pejabat'=>'19670620 199403 2 007','pangkat_pejabat'=>'Pembina','golongan_pejabat'=>'IV','ruang_pejabat'=>'a','jabatan_pejabat'=>'Pranata Humas Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'4','nama_pejabat'=>'ACHMAD FADLIL CHUSNI, S.Kom., M.MT.','nip_pejabat'=>'19721031 200604 1 005','pangkat_pejabat'=>'Pembina','golongan_pejabat'=>'IV','ruang_pejabat'=>'a','jabatan_pejabat'=>'Kepala Bidang','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'4','nama_pejabat'=>'AULIA BAHAR PERNAMA, S.Kom., M.ISM.','nip_pejabat'=>'19851024 200912 1 012','pangkat_pejabat'=>'Penata Tingkat I','golongan_pejabat'=>'III','ruang_pejabat'=>'d','jabatan_pejabat'=>'Kepala Seksi Persandian dan Keamanan','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'4','nama_pejabat'=>'DENDY EKA PUSPAWADI, S.Si.','nip_pejabat'=>'19711009 199901 1 001','pangkat_pejabat'=>'Penata Tingkat I','golongan_pejabat'=>'III','ruang_pejabat'=>'d','jabatan_pejabat'=>'Pranata Komputer Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'4','nama_pejabat'=>'I WAYAN RUDY ARTHA, S.Kom.','nip_pejabat'=>'19770517 200901 1 005','pangkat_pejabat'=>'Penata Tingkat I','golongan_pejabat'=>'III','ruang_pejabat'=>'d','jabatan_pejabat'=>'Pranata Komputer Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'5','nama_pejabat'=>'Dra. PATRIANA DYAH SETYOWATI, M.Si.','nip_pejabat'=>'19650305 198903 2 011','pangkat_pejabat'=>'Pembina Tingkat I','golongan_pejabat'=>'IV','ruang_pejabat'=>'b','jabatan_pejabat'=>'Kepala Bidang','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'5','nama_pejabat'=>'GUGI ALIFRIANTO WICAKSONO, S.T., M.M.','nip_pejabat'=>'19821016 201101 1 005','pangkat_pejabat'=>'Penata','golongan_pejabat'=>'III','ruang_pejabat'=>'c','jabatan_pejabat'=>'Pranata Komputer Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'5','nama_pejabat'=>'NOFIAN ADI PRASETYAWAN, S.Kom., M.T.','nip_pejabat'=>'19851127 201001 1 008','pangkat_pejabat'=>'Penata','golongan_pejabat'=>'III','ruang_pejabat'=>'c','jabatan_pejabat'=>'Pranata Komputer Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'6','nama_pejabat'=>'Dra.Ec. NIRMALA DEWI, M.M.','nip_pejabat'=>'19650909 199403 2 006','pangkat_pejabat'=>'Pembina Tingkat I','golongan_pejabat'=>'IV','ruang_pejabat'=>'b','jabatan_pejabat'=>'Kepala Bidang','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'6','nama_pejabat'=>'AGUS BUDI SAMPURNO, S.E.','nip_pejabat'=>'19690214 198803 1 002','pangkat_pejabat'=>'Penata Tingkat I','golongan_pejabat'=>'III','ruang_pejabat'=>'d','jabatan_pejabat'=>'Statistisi Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'6','nama_pejabat'=>'Drs SATRIYO WAHYUDI, M.Si.','nip_pejabat'=>'19691211 198911 1 002','pangkat_pejabat'=>'Pembina','golongan_pejabat'=>'IV','ruang_pejabat'=>'a','jabatan_pejabat'=>'Statistisi Ahli Muda','sub_bidang_pejabat'=>'-']);
        master_bdng_member::create(['id_bdng'=>'6','nama_pejabat'=>'IDHAM ASHARI KASIM PUTRA, S.T., M.M.','nip_pejabat'=>'19720126 199803 1 007','pangkat_pejabat'=>'Pembina','golongan_pejabat'=>'I','ruang_pejabat'=>'a','jabatan_pejabat'=>'Statistisi Ahli Muda','sub_bidang_pejabat'=>'-']);
    }
}
