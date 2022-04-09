<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- Session Status -->
    <div class="py-12 container">
        <div class="card">
            <x-auth-session-status class="p-4" :status="session('status')" />
            <div class="card-header">
                <h3 class="card-title">Data Artikel</h3>
                <div class="card-tools">
                    <a href="/dashboard/tambah" class="btn btn-success">Tambah Data<i class="fas fa-plus fa-fw"></i></a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Gambar</th>
                            <th>Modify</th>
                        </tr>
                        @foreach ($blogs as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->isi}}</td>
                            <td><img src="/storage/img/{{$item->gambar}}" height="110px" width="110px" alt=""></td>
                            <td class="row">
                                <a class="mr-1" href="/dashboard/edit/{{$item->id}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                /
                                <form method="POST" class="ml-1" action="/dashboard/delete/{{$item->id}}">
                                    @csrf
                                    @method('delete')
                                    <a href="#" onclick="event.preventDefault();
                                                                                this.closest('form').submit();">
                                        <i class=" fa fa-trash" style="color:red;"></i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                {{$blogs->links()}}
            </div>
        </div>
    </div>
</x-app-layout>