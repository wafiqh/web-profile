<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Menampilkan halaman utama dan list artikel yang ada.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(6);

        return view('welcome', [
            'blogs' => $blogs,
        ]);
    }

    /**
     * menampilkan halaman untuk membuat artikel baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-article');
    }

    /**
     * menyimpan data artikel baru.
     *
     * @param  \Illuminate\Http\Request  $request berupa judul, isi, dan file gambar
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image'
        ]);

        if ($request->hasFile('gambar')) {
            $name = time() . '.jpg';
            $request->gambar->storeAs('public/img', $name);

            Blog::create([
                'user_id' => Auth::user()->id,
                'judul' => $request->judul,
                'isi' => $request->isi,
                'gambar' => $name,
            ]);
        }

        return redirect('/dashboard')->with('status', 'Berhasil tambah data!');
    }

    /**
     * menampilkan detail artikel.
     *
     * @param  \App\Models\Blog  $blog ID
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('detail', [
            'blog' => $blog,
        ]);
    }

    /**
     * Menampilkan halaman untuk edit artikel.
     *
     * @param  \App\Models\Blog  $blog ID
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('edit-article', [
            'blog' => $blog,
        ]);
    }

    /**
     * Melakukan proses pembaruan data.
     *
     * @param  \Illuminate\Http\Request  $request berupa judul, isi, dan file gambar
     * @param  \App\Models\Blog  $blog ID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'judul' => 'sometimes',
            'isi' => 'sometimes',
            'gambar' => 'sometimes|image'
        ]);

        if ($request->hasFile('gambar')) {
            $name = time() . '.jpg';
            $request->gambar->storeAs('public/img', $name);

            $blog->update([
                'gambar' => $name,
            ]);
        }

        $blog->update($request->only(['judul', 'isi']));

        return redirect('/dashboard')->with('status', 'Berhasil edit data!');
    }

    /**
     * menghapus data tertentu.
     *
     * @param  \App\Models\Blog  $blog ID
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect('/dashboard')->with('status', 'Berhasil hapus data!');
    }
}
