<?php 
/**
 * Jadi fungsi namespace ini untuk menunjukkan dimana file ini berada.
 * Jadi App\Controllers, berarti di namespace App, trs sub-folder Controllers,
 * maksud namespace itu apa sih?
 * Jadi namespace App itu = alias/nama lain buat folder app/
 * 
 * disini namespace App dimap/dipetakan/diarahkan ke folder /app
 * mapping ini dilakukan oleh CodeIgniter itu sendiri.
 * kita sebenarnya juga bisa buat mapping kita, tapi itu nanti aja.
 * 
 * Jadi kalo misal kamu mau nunjuk folder app\Controllers, km bisa tulis namespace App\Controllers.
 * atau mau nunjuk folder app\Helpers, maka km bisa pake App\Helpers
 * jadi intinya app/ diganti App\
 * Oiya, kalo namespace garis miringnya kayak gini ya: \
 * 
 * tetapi km gabisa nunjuk folder diluar folder yang di map (misal: app/),
 * misal km mau nunjuk folder /public , gabisa, karena folder public bukan berada di dalam folder /app, melainkan sejajar
 * 
 * setiap class harus didefinisikan namespacenya biar bisa di cari nantinya sama sistem.
 * 
 * namespace ini jg berguna buat import class lain nanti,
 * 
 * Oiya, ngomong-ngomong ada baiknya setiap nama folder dan file di dalam namespace itu bersifat CamelCase
 * contoh CamelCase itu ya kayak nama file ini = LandingPage.php
 * setiap awal kata itu huruf besar (L dan P) dan gaada spasi atau underscore.
 */
namespace App\Controllers; //oke, pertama, aku jelasin dari namespace ya. Ngomong2, ini masih class yang tadi ya, cuma ku tambahin penjelasan aja.

use App\Libraries\View\TemplateEngine;
use App\Views\LandingPage\LandingPageHome;

/**
 * Sekarang ke definisi class
 * jadi syntaxnya seperti di bawah ini, 
 * class {NamaClass} extends {BaseClass}
 * untuk NamaClass itu harus sama dengan nama file, contoh:
 * NamaFile = LandingPage.php
 * NamaClass = LandingPage
 * untuk bagian extends {BaseClass} itu untuk 'mencopy' fungsi fungsi dari BaseClass
 * contoh baseClass disini adalah BaseController
 * jadi kita bisa memanggil fungsi-fungsi dari BaseController setelah kita meng-extends class tersebut
 * misal fungsi initController() dari BaseController
 * 
 * jadi pertanyaan sebenarnya adalah: kenapa harus extends? kenapa harus extends BaseController
 * jadi sebenarnya class BaseController itu adalah class yang disediakan Codeigniter
 * jadi class tersebut mempunyai fungsi fungsi yang dapat menjalankan class yang kita buat sebagai Controller
 * jadi kalau mau buat controller(seperti class LandingPage ini) itu harus extends class BaseController atau class Controller
 * sementara itu aja dulu yang perlu di pahami:
 * Kalo mau buat Controller, harus extends BaseController atau Controller
 */
class LandingPage extends BaseController
{
    /**
     * Sekarang kita ke function
     * Sebenarnya Kurang lebih ini sama seperti function di Codeigniter3,
     * fungsinya untuk routing di browser nanti
     * jadi misal kita ingin mengakses fungsi index(), dari browser
     * kita bisa mengetikkan @url: {baseurl}/{nama subfolder(kalau ada)}/{namafile}/{namafungsi}
     * kalo diaplikasi ini:
     * baseurl: frontend.gdps.localhost
     * nama subfolder: gaada karena ini langsung didalam folder Controllers
     * namafile: landingpage (diubah jadi kecil semua)
     * namafungsi: index
     * 
     * jadinya = frontend.gdps.localhost/landingpage/index
     * Coba kita akses ya.
     * Nyalakan xampp dulu kalo belum aktif xampp nya, pake Run as Admin ya.
     * Udh bisa ya, jadi seperti itu syntaxnya.
     * Jadi akan auto routing ke fungsi2 yang di class ini,
     * 
     * 
     * tetapi fitur CodeIngiter yang auto men-route per function ini bisa jadi tidak rapi nanti,
     * misal kita mau fungsi index() ini bisa diakses tanpa menggunakan embel-embel landingpage, dan index
     * maksudnya gini: frontend.gdps.localhost/
     * bukannya gini: frontedn.gdps.localhost/landingpage/index //kayak yg tadi
     * akan ribet jika pake fitur auto routing ini
     * 
     * untungnya fitur ini bisa dimatikan, dan kita bisa 
     * mendefinisikan sendiri url apa yang akan mengakses fungsi apa,
     * nanti aku ajari di video selanjutnya
     */
    public function index() : string {

        /**
         * Selanjutnya kita masuk, melihat ke dalam fungsi index.
         * syntax ini, sederhananya syntax ini 
         * memanggil fungsi view yang telah disediakan codeingiter untuk
         * menampilkan file view yang ada di folder app/Views/
         * jadi ini akan menampilkan view index.php di folder app/Views/LandingPage
         * syntaxnya: namafolder/namaview
         * jadi: LandingPage/index //tanpa .php
         * 
         * tetapi fitur ini agak kurang rapi jika digunakan di project besar, soalnya kita tidak tau
         * nanti apakah file ini ada atau tidak karena VSCode tidak bisa mengeceknya,
         * untuk membantu VSCode mengeceknya, nanti kita akan buat class tersendiri untuk menampilkan view,
         * di video lain ya.
         * 
         * Jadi sebenarnya bedanya apa sih class TemplateEngine ini dibanding function view bawaan Codeingniter?
         * Sebenarnya sama saja, cuma kelebihan class TemplateEngine ini
         * akan memunculkan error di VSCode ketika view yang dituju tidak ada, atau salah nama.
         * coba ak demonstrasikan ya.
         * kita hapus aja class view yang tadi untuk meliihat errornya
         * langsung error kan.
         * coba kita bandingkan dengan view bawaan codeigniter
         */
        //return TemplateEngine::view(new LandingPageHome()); //panggil nama class view tadi
        //skrg kita coba di browser
        //berhasil ya.
        return view('LandingPage/index'); //gaada error, tau tau di browser udh error aja nanti.
        //begitulah bedanya,
        //sebenarnya ada lagi keunggulan memakai class TemplateEngine ini, tapi nanti aja.

        //Untuk memudahkan pembuatan view class, km bisa pake snipplets yang ak buat, ini cara gunain nya.
    }

    /**
     * Selanjutnya untuk function lain
     * untuk fungsi-fungsi lain, kurang lebih sama, seperti fungsi index, hanya menampilkan view saja.
     */
    public function about() : string {
        return view('LandingPage/about');
    }

    public function career() : string {
        return view('LandingPage/career');
    }

    public function contact() : string {
        return view('LandingPage/contact');
    }

    public function gallery() : string {
        return view('LandingPage/gallery');
    }

    public function login() : string {
        return view('LandingPage/login');
    }

    public function news() : string {
        return view('LandingPage/news');
    }

    public function services() : string {
        return view('LandingPage/services');
    }

}
