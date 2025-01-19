
@extends('adminDashboard')
@section('Content')


<a href="#" onclick="ModalAddUser();" class="btn btn-info mb-3"> + Add New Data</a>

<div class="table-responsive">
    <table class="table table-striped table-hover" border="1">
    <thead>
        <tr>
            <th scope="col">#</th>      
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>
        <tbody class="table-group-divider">
        @foreach($users as $index => $Get)
        <tr>
            <td scope="row">{{ $index + 1 }}</td>
            <td>{{ $Get->name }}</td>
            <td>{{ $Get->email }}</td>
            <td>{{ $Get->type }}</td>
            <td >
                <a href="#" onclick="ModalEditUser(
                    '{{ $Get->id }}',
                    '{{ $Get->name }}',
                    '{{ $Get->email }}',
                    '{{ $Get->type }}'
                    )" class="btn btn-dark">Edit</a>
                |
                <a href="#" onclick="ModalHapusUser({{ $Get->id }})" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<form action="user/add" method="post">
    @csrf
<div class="modal fade" id="ModalAddUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Add User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label  class="form-label">Nama</label>
                <input name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Email</label>
                <input name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Type</label>
                <select name="type" class="form-control" required>
                    <option selected >Pilih Jenis Akun</option>
                    <option value="admin">Admin</option>
                    <option value="dosen">Dosen</option>
                    <option value="mahasiswa">Mahasiswa</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
        </div>
        </div>
    </div>
</div>
</form>

<form action="user/hapus" method="post">
    @csrf
<div class="modal fade" id="ModalHapusUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="id">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-danger" name="hapus" value="Hapus">
          </div>
      </div>
    </div>
  </div>
</form>

<form action="user/edit" method="post">
    @csrf
<div class="modal fade" id="ModalEditUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Edit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="mb-3">
                <label  class="form-label">ID</label>
                <input name="id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama</label>
                <input name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Email</label>
                <input name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Type</label>
                <select name="type" class="form-control" required>
                    <option selected >Pilih Jenis Akun</option>
                    <option value="admin">Admin</option>
                    <option value="dosen">Dosen</option>
                    <option value="mahasiswa">Mahasiswa</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-dark" name="edit" value="Edit">
        </div>
        </div>
        </div>
    </div>
</div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    function ModalAddUser() {
      $('[name="name"]').val('');
      $('[name="email"]').val('');
      $('[name="type"]').val('');
      $('#ModalAddUser').modal('show');
    }    
    function ModalHapusUser ($id) {
      $('[name="id"]').val($id);
      $('#ModalHapusUser').modal('show');
    } 
    function ModalEditUser (id,name,email,password,type) {
      $('[name="id"]').val(id);
      $('[name="name"]').val(name);
      $('[name="email"]').val(email);
      $('[name="type"]').val(type);
      $('#ModalEditUser').modal('show');
    }
</script>
    
@endsection