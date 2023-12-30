<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // Menampilkan semua komentar
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

    // Menampilkan formulir untuk membuat komentar baru
    public function create()
    {
        // Formulir pembuatan komentar bisa ditempatkan di halaman detail film
        return view('comments.create');
    }

    // Menyimpan komentar baru ke database
    public function store(Request $request, $movieId)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        // Membuat dan menyimpan komentar baru
        $comment = new Comment([
            'user_id' => Auth::id(), // Mendapatkan ID pengguna yang sedang login
            'movie_id' => $movieId,
            'comment' => $request->input('comment'),
        ]);

        $comment->save();

        return redirect()->route('movies.show', $movieId)
            ->with('success', 'Comment added successfully');
    }

    // Menampilkan detail komentar
    public function show($id)
    {
        $comment = Comment::find($id);
        return view('comments.show', compact('comment'));
    }

    // Menampilkan formulir untuk mengedit komentar
    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('comments.edit', compact('comment'));
    }

    // Menyimpan perubahan pada komentar yang diubah ke database
    public function update(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        $comment = Comment::find($id);
        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect()->route('comments.show', $id)
            ->with('success', 'Comment updated successfully');
    }

    // Menghapus komentar dari database
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->route('comments.index')
            ->with('success', 'Comment deleted successfully');
    }
}
