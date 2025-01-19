@extends(Auth::user()->type == 'dosen' ? 'dosenDashboard' : 'dashboard')
@section('Content')

<div class="table-responsive">
    <table class="table table-striped table-hover" border="1">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Matakuliah</th>
            <th scope="col">Dosen</th>
            <th scope="col">Prodi</th>
            <th scope="col">Kelas</th>
            <th scope="col">Waktu</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @if(isset($view_jadwal) && count($view_jadwal) > 0)
            @foreach($view_jadwal as $index => $Get)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $Get->matkul }}</td>
                <td>{{ $Get->dosen }}</td>
                <td>{{ $Get->prodi }}</td>
                <td>{{ $Get->kelas }}</td>
                <td>{{ $Get->waktu }}</td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6" class="text-center">Tidak ada jadwal yang tersedia.</td>
            </tr>
        @endif
        </tbody>
    </table>
</div>

@endsection
