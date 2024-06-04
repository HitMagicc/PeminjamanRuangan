@extends('layout.admin.index')

@section('mainContent')
<div class="teks-req">
    <h5>Detail Permintaan</h5>
    <button class="button-kanan-atas" onclick="window.history.back()">Kembali</button>
    <!--button class="req-bt">Kembali</button-->
</div>
<div class="req-ruangan">
    <div class="teks-ruangan-form" >
        Detail Permintaan
    </div>
    <div class="req-ruangan-form-parent">
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="no-permintaan">Nomor Permintaan</label>
                <div class="form-kelompok-isi-details">
                    {{$p->id}}
                </div>
            </div>
            <div class="form-kelompok-isi">
                <label for="ruangan">Nama Pengaju</label>
                <div class="form-kelompok-isi-details">
                    {{$p->berkas->nama}}
                </div>
            </div>
         </div>
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="tanggal">Gedung</label>
                <div class="form-kelompok-isi-details">
                    {{$p->ruangan->gedung->nama_gedung}}
                </div>
            </div>
            <div class="form-kelompok-isi">
                <label for="peruntukan">NPM Pengaju</label>
                <div class="form-kelompok-isi-details">
                    {{$p->berkas->npm}}
                </div>
            </div>
         </div>
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="npm">Ruangan</label>
                <div class="form-kelompok-isi-details">
                    {{$p->ruangan->nama_ruangan}}
                </div>
            </div>
            <div class="form-kelompok-isi">
                <label for="nama">Jurusan</label>
                <div class="form-kelompok-isi-details">
                    {{$p->berkas->jurusan->nama_jurusan}}
                </div>
            </div>
         </div>
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="jumlah">Jumlah Peserta</label>
                <div class="form-kelompok-isi-details">
                    {{$p->ruangan->kapasitas}}
                </div>
            </div>
            <div class="form-kelompok-isi">
                <label for="jurusan">Peruntukan</label>
                <div class="form-kelompok-isi-details">
                    {{$p->peruntukan}}
                </div>
            </div>
        </div>
        <div class="form-kelompok">
            <div class="button-container">
                <div class="button-padding">
                    <button id="tolakBtn" class="button tolak">Tolak</button>
                </div>
                <div class="button-padding" >
                    <button id="terimaBtn" class="button terima">Terima</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="terima-modal" class="modal">
    <form action="{{ route('admin.dashboard.update', $p->id) }}" method="post">
      @csrf
      @method('PUT')
      <input type="hidden" name="approval" value="1"> <!-- Set approval to 1 for approval -->
      <div class="modal-content">
        <div class="modal-header">
          <h5>Alasan Menerima</h5>
          <span class="close">&times;</span>
        </div>
        <div class="modal-alasan-field">
          <textarea name="alasan_terima"></textarea>
        </div>
        <div class="modal-button-parent">
          <button class="modal-button" type="submit" style="background-color:#6AC026">Terima</button>
          <button class="modal-button close" style="background-color:#fff">Kembali</button>
        </div>
      </div>
    </form>
  </div>
  
  <div id="tolak-modal" class="modal">
    <form action="{{ route('admin.dashboard.update', $p->id) }}" method="post">
      @csrf
      @method('PUT')
      <input type="hidden" name="approval" value="2"> <!-- Set approval to 2 for rejection -->
      <div class="modal-content">
        <div class="modal-header">
          <h5>Alasan Menolak</h5>
          <span class="close a">&times;</span>
        </div>
        <div class="modal-alasan-field">
          <textarea name="alasan_tolak"></textarea>
        </div>
        <div class="modal-button-parent">
          <button class="modal-button" type="submit" style="background-color:#E92323">Tolak</button>
          <button class="modal-button close" style="background-color:#fff">Kembali</button>
        </div>
      </div>
    </form>
  </div>

<script>
    var terimaModal = document.getElementById("terima-modal");
    var tolakModal = document.getElementById("tolak-modal");

    // Get the buttons that open the modals
    var terimaBtn = document.getElementById("terimaBtn");
    var tolakBtn = document.getElementById("tolakBtn");

    // Get the <span> elements that close the modals
    var closeButtons = document.getElementsByClassName("close");

    // When the user clicks on the "Terima" button, open the "Terima" modal
    terimaBtn.onclick = function() {
        terimaModal.style.display = "block";
    }

    // When the user clicks on the "Tolak" button, open the "Tolak" modal
    tolakBtn.onclick = function() {
        tolakModal.style.display = "block";
    }

    // When the user clicks on a <span> (x), close the modal
    for (var i = 0; i < closeButtons.length; i++) {
        closeButtons[i].onclick = function() {
            this.parentElement.parentElement.parentElement.style.display = 'none';
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == terimaModal) {
            terimaModal.style.display = "none";
        }
        if (event.target == tolakModal) {
            tolakModal.style.display = "none";
        }
    }
</script>
@endsection