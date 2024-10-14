
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Halaman Data <?= $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin')?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Data <?= $title ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- <div class="card-header">
              
            </div> -->
            <div class="card-body">
              <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus"></i>Tambah Data <?= $title ?></button>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Departemen</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;?>
                  <?php foreach ($departemen as $d): ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d['nama_departemen'] ?></td>
                        <td><?= $d['lokasi_departemen'] ?></td>
                        <td>
                          <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#dialog1">Detail</button> -->
                          <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#Edit<?= $d['id']?>"><i class="fas fa-pencil-alt"></i>Edit</button>
                          <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete<?= $d['id']?>"><i class="fas fa-trash"></i>Hapus</button>
                        </td>
                      </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Start Tambah Modal -->
  <div class="modal fade" data-backdrop="static" id="tambahModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah <?= $title ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= site_url('TambahDepartmen') ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="nama_departemen">Nama Departemen</label>
              <input type="text" class="form-control" id="nama_departemen" name="nama_departemen" required>
            </div>
            <div class="form-group">
              <label for="lokasi_departemen">Lokasi Departemen</label>
              <input type="text" class="form-control" id="lokasi_departemen" name="lokasi_departemen" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- End Tambah Modal -->
<!-- Start Edit Modal -->
  <?php foreach ($departemen as $d) : ?>
    <div class="modal fade" id="Edit<?= $d['id']?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit <? $title ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="editDepartemen" action="<?= base_url('EditDepartmen/'.$d['id'])?>" method="post">
            <div class="modal-body">
              <input type="hidden" id="edit_id" name="id">
              <div class="form-group">
                <label for="id">Id</label>
                <input type="text" class="form-control" id="id" name="id" value="<?= $d['id']?>" readonly>
              </div>
              <div class="form-group">
                <label for="nama_departemen">Nama Departemen</label>
                <input type="text" class="form-control" id="nama_departemen" name="nama_departemen" value="<?= $d['nama_departemen']?>" required>
              </div>
              <div class="form-group">
                <label for="lokasi_departemen">lokasi Departemen</label>
                <input type="text" class="form-control" id="lokasi_departemen" name="lokasi_departemen" value="<?= $d['lokasi_departemen']?>" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach ?>
<!-- End Edit Modal -->
<!-- Start Delete Modal -->
    <div class="modal fade" data-backdrop="static" id="Delete<?= $d['id']?>">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              Are you sure you want to delete this item?
            </div>
            <form action="DeleteRuangan">
                <div class="modal-footer">
                <button data-dismiss="modal" type="button" class="btn btn-default">Cancel</button>
                <a href="<?= base_url('HapusDepartemen/'.$d['id']) ?>" class="btn btn-danger">Hapus</a>
                </div>
            </form>
            </div>
        </div>
    </div>
<!-- End Delete Modal -->
<!-- /.content-wrapper -->
