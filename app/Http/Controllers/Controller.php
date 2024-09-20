<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            // Alert user
            switch (true) {
                case session('successCreateUser'):
                    Alert::success("Success", session("successCreateUser"));
                    break;

                case session('errorCreateUser'):
                    Alert::error("Error", session("errorCreateUser"));
                    break;

                case session('successUpdateUser'):
                    Alert::success("Success", session("successUpdateUser"));
                    break;

                case session('errorUpdateUser'):
                    Alert::error("Error", session("errorUpdateUser"));
                    break;

                case session('successDeleteUser'):
                    Alert::success("Success", session("successDeleteUser"));
                    break;

                case session('errorDeleteUser'):
                    Alert::error("Error", session("errorDeleteUser"));
                    break;

                    // Alert student
                case session('successCreateStudent'):
                    Alert::success("Success", session("successCreateStudent"));
                    break;

                case session('errorCreateStudent'):
                    Alert::error("Error", session("errorCreateStudent"));
                    break;

                case session('successUpdateStudent'):
                    Alert::success("Success", session("successUpdateStudent"));
                    break;

                case session('errorUpdateStudent'):
                    Alert::error("Error", session("errorUpdateStudent"));
                    break;

                case session('successDeleteStudent'):
                    Alert::success("Success", session("successDeleteStudent"));
                    break;

                case session('errorDeleteStudent'):
                    Alert::error("Error", session("errorDeleteStudent"));
                    break;

                    // Alert teacher
                case session('successCreateTeacher'):
                    Alert::success("Success", session("successCreateTeacher"));
                    break;

                case session('errorCreateTeacher'):
                    Alert::error("Error", session("errorCreateTeacher"));
                    break;

                case session('successUpdateTeacher'):
                    Alert::success("Success", session("successUpdateTeacher"));
                    break;

                case session('errorUpdateTeacher'):
                    Alert::error("Error", session("errorUpdateTeacher"));
                    break;

                case session('successDeleteTeacher'):
                    Alert::success("Success", session("successDeleteTeacher"));
                    break;

                case session('errorDeleteTeacher'):
                    Alert::error("Error", session("errorDeleteTeacher"));
                    break;

                case session('login'):
                    Alert::success("Success", session('login'));
                    break;

                case session('errorLogin'):
                    Alert::error("Error", session('errorLogin'));
                    break;

                case session('logout'):
                    Alert::success("Success", session('logout'));
                    break;

                    // Alert mapel
                case session('successCreateMapel'):
                    Alert::success("Success", session("successCreateMapel"));
                    break;

                case session('errorCreateMapel'):
                    Alert::error("Error", session("errorCreateMapel"));
                    break;

                case session('successUpdateMapel'):
                    Alert::success("Success", session("successUpdateMapel"));
                    break;

                case session('errorUpdateMapel'):
                    Alert::error("Error", session("errorUpdateMapel"));
                    break;

                case session('requiredFieldsUpdate'):
                    Alert::error("Error", session("requiredFieldsUpdate"));
                    break;

                case session('successDeleteMapel'):
                    Alert::success("Success", session("successDeleteMapel"));
                    break;

                case session("errorDeleteMapel"):
                    Alert::error("Error", session("errorDeleteMapel"));
                    break;
                case session('successDeleteNews'):
                    Alert::success("Success", session("successDeleteNews"));
                    break;

                    // Admin Kontak
                case session('successDeleteContact'):
                    Alert::success("Success", session("successDeleteContact"));
                    break;
                case session('errorDeleteContact'):
                    Alert::error("Error", session("errorDeleteContact"));
                    break;

                    // Admin Product
                case session('errorDeleteProduct'):
                    Alert::error("Error", session("errorDeleteProduct"));
                    break;
                case session('successDeleteProduct'):
                    Alert::success("Success", session("successDeleteProduct"));
                    break;
                case session('successCreateProduct'):
                    Alert::success("Success", session("successCreateProduct"));
                    break;
                case session('errorCreateProduct'):
                    Alert::error("Error", session("errorCreateProduct"));
                    break;
                case session('successUpdateProduct'):
                    Alert::success("Success", session("successUpdateProduct"));
                    break;
                case session('errorUpdateProduct'):
                    Alert::error("Error", session("errorUpdateProduct"));
                    break;

                    // Admin Data Kematian
                case session('errorDeleteDataKematian'):
                    Alert::error("Error", session("errorDeleteDataKematian"));
                    break;
                case session('successDeleteDataKematian'):
                    Alert::success("Success", session("successDeleteDataKematian"));
                    break;
                case session('successCreateDataKematian'):
                    Alert::success("Success", session("successCreateDataKematian"));
                    break;
                case session('errorCreateDataKematian'):
                    Alert::error("Error", session("errorCreateDataKematian"));
                    break;
                case session('successUpdateDataKematian'):
                    Alert::success("Success", session("successUpdateDataKematian"));
                    break;
                case session('errorUpdateDataKematian'):
                    Alert::error("Error", session("errorUpdateDataKematian"));
                    break;

                // Admin Data Penduduk
                case session('errorDeleteDataPenduduk'):
                    Alert::error("Error", session("errorDeleteDataPenduduk"));
                    break;
                case session('successDeleteDataPenduduk'):
                    Alert::success("Success", session("successDeleteDataPenduduk"));
                    break;
                case session('successCreateDataPenduduk'):
                    Alert::success("Success", session("successCreateDataPenduduk"));
                    break;
                case session('errorCreateDataPenduduk'):
                    Alert::error("Error", session("errorCreateDataPenduduk"));
                    break;
                case session('successUpdateDataPenduduk'):
                    Alert::success("Success", session("successUpdateDataPenduduk"));
                    break;
                case session('errorUpdateDataPenduduk'):
                    Alert::error("Error", session("errorUpdateDataPenduduk"));
                    break;

                // Admin Data Kartu Keluarga
                case session('errorDeleteDataKartuKeluarga'):
                    Alert::error("Error", session("errorDeleteDataKartuKeluarga"));
                    break;
                case session('successDeleteDataKartuKeluarga'):
                    Alert::success("Success", session("successDeleteDataKartuKeluarga"));
                    break;
                case session('successCreateDataKartuKeluarga'):
                    Alert::success("Success", session("successCreateDataKartuKeluarga"));
                    break;
                case session('errorCreateDataKartuKeluarga'):
                    Alert::error("Error", session("errorCreateDataKartuKeluarga"));
                    break;
                case session('successUpdateDataKartuKeluarga'):
                    Alert::success("Success", session("successUpdateDataKartuKeluarga"));
                    break;
                case session('errorUpdateDataKartuKeluarga'):
                    Alert::error("Error", session("errorUpdateDataKartuKeluarga"));
                    break;

                // Admin Data Pendapatan
                case session('errorDeleteDataPendapatan'):
                    Alert::error("Error", session("errorDeleteDataPendapatan"));
                    break;
                case session('successDeleteDataPendapatan'):
                    Alert::success("Success", session("successDeleteDataPendapatan"));
                    break;
                case session('successCreateDataPendapatan'):
                    Alert::success("Success", session("successCreateDataPendapatan"));
                    break;
                case session('errorCreateDataPendapatan'):
                    Alert::error("Error", session("errorCreateDataPendapatan"));
                    break;
                case session('successUpdateDataPendapatan'):
                    Alert::success("Success", session("successUpdateDataPendapatan"));
                    break;
                case session('errorUpdateDataPendapatan'):
                    Alert::error("Error", session("errorUpdateDataPendapatan"));
                    break;

            }

            return $next($request);
        });
    }
}
