<?php

namespace App\Http\Controllers;


use App\File;
use App\Contest;
use App\Jobs\ProcessAudioFiles;
use Carbon\Carbon;
use FFMpeg\FFMpeg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilesController extends Controller
{

    public function store(Contest $contest)
    {

        $contest = DB::table('contests')->where('slug', request('contest_id'))->value('id');

        $file = request('file');
        $extensionOri = $file->getClientOriginalExtension();
        $genName = bcrypt('file');
        $fileName = $genName . '.' . $extensionOri;
        $fileSave = $genName . '.mp3';
        $prcPath = 'uploads';
        $playPath = 'uploads/audio';
        $file->move($prcPath, $fileName);

        File::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'title' => request('title'),
            'file_name' => $fileName,
            'url_play' => $playPath.'/'.$fileSave,
            'url_save' => $playPath.'/'.$fileSave,
            'contest_id' => $contest
        ]);

        return back();
    }
}
