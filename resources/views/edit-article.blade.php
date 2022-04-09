<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Artikel') }}
        </h2>
    </x-slot>

    <div class="py-12 container">
        <div class="card">
            <form action="/dashboard/edit/{{$blog->id}}" method="POST" enctype='multipart/form-data'>
                @csrf
                @method('put')
                <div class="card-body table-responsive">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input value="{{$blog->judul}}" type="text" name="judul" class="form-control" id="judul">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input name="gambar" type="file" class="form-control-file" id="gambar">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea name="isi" class="form-control" id="isi" rows="3">{{$blog->isi}}</textarea>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Kirim</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>