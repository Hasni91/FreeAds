<?php

namespace App\Http\Controllers;
use App\Mail\email;
use App\Models\User;
use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AnnonceController extends Controller
{
    public $image = null;

    public function showDashboard()
    {
        $annonces = Annonce::orderBy('id', 'DESC')->get();
        return view('dashboard', compact('annonces'));
    }

    public function showDepotAnnonce()
    {
        return view('depotAnnonce');
    }

    public function createAnnonce(Request $req)
    {
        $uploadedFileUrl = Cloudinary::upload($req->file->getRealPath())->getSecurePath();
        Annonce::create([
            'id_user' => auth()->user()->id,
            'titre' => $req->titre,
            'description' => $req->description,
            'prix' => $req->prix,
            'image' => $uploadedFileUrl,
        ]);
        $annonces = Annonce::orderBy('id', 'DESC')->get();
        return view('dashboard', compact('annonces'));
    }

    public function showMesAnnonce()
    {
        $annonceByID = Annonce::where('id_user', auth()->user()->id)->get();
        return view('mesAnnonces', compact('annonceByID'));
    }

    public function updateAnnonce(Request $req)
    {
        $annonce = Annonce::find($req->id);
        return(view('updateAnnonce', compact('annonce')));
    }

    public function stepTwoForUpdate(Request $req)
    {
        $annonce = Annonce::find($req->id);
        if($req->image !== null){
            $uploadedFileUrl = Cloudinary::upload($req->image->getRealPath())->getSecurePath();
            $this->image = $uploadedFileUrl;
            $annonce->update([
                'titre' => $req->titre,
                'description' => $req->description,
                'prix' => $req->prix,
                'image' => $this->image,
            ]);
        }else{
            $annonce->update([
                'titre' => $req->titre,
                'description' => $req->description,
                'prix' => $req->prix,
            ]);
        }
        $annonces = Annonce::orderBy('id', 'DESC')->get();
        return view('dashboard', compact('annonces'));
    }

    public function deleteAnnonce(Request $req)
    {
        $annonce = Annonce::find($req->id);
        $annonce->delete();
        $annonces = Annonce::orderBy('id', 'DESC')->get();
        return view('dashboard', compact('annonces'));
    }

    public function searchAnnonce(Request $req)
    {
        if(intval($req->search) !== 0){
            $annonces = Annonce::where('prix', '<=',$req->search)->get();
            return view('dashboard', compact('annonces'));
        }else{
            $annonces = Annonce::where('titre', 'like', '%'.$req->search.'%')->get();
            return view('dashboard', compact('annonces'));
        }
    }
}