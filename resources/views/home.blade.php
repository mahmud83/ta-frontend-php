@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <center><img src="{{ URL::to('/') }}/images/jatim.png" style="width: 200px;"></center>
          <center>
            <b><h3>LAPORAN ANGGARAN</h3></b>
            <h5>DINAS PENDIDIKAN PROVINSI JAWA TIMUR</h5>
          </center>
          <br>
        </div>
      </div>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5" style="font-size: 15pt;font-weight: bold;">DAK</div>
            </div>
            <a class="card-footer text-white clearfix small z-1"  data-toggle="collapse" href="#dak">
              <span class="float-left">Dana Alokasi Kegiatan</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5" style="font-size: 15pt;font-weight: bold;">BOS</div>
            </div>
            <a class="card-footer text-white clearfix small z-1"  data-toggle="collapse" href="#bos">
              <span class="float-left">Bantuan Operasional Sekolah</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5" style="font-size: 15pt;font-weight: bold;">APBD</div>
            </div>
            <a class="card-footer text-white clearfix small z-1"  data-toggle="collapse" href="#apbd">
              <span class="float-left">Ang. Penggunaan Belanja Daerah</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5" style="font-size: 15pt;font-weight: bold;">Prioritas</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" data-toggle="collapse" href="#prioritas">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card text-black bg-black o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5" style="font-size: 15pt;font-weight: bold;">Rekap</div>
            </div>
            <a class="card-footer text-black clearfix small z-1" data-toggle="collapse" href="#prioritas">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    </div>
    <!-- /.content-wrapper-->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <div class="container-fluid h-100">
        <div class="row">
          <div class="col-12">
            <iframe width="98%" height="570px" style="position:absolute;" frameborder="0" scrolling="no"  src="https://docs.google.com/spreadsheets/d/1SJ-9SA4nBfVl3lNhHdWd6h_gi4EHTTceliat2ZCAb7Q/edit?usp=sharing"></iframe>
          </div>
        </div>
    </div>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ url('/admin/login') }}">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection