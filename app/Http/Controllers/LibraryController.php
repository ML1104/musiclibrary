<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
use Illuminate\Support\Facades\App;

class LibraryController extends Controller
{
    public function displayOne($id)
    {
      $entry = Library::find($id);
      return view('entry', compact('entry'));
    }

    public function index()
    {
      $library = Library::all();
      return view('library', compact('library'));
    }
}
