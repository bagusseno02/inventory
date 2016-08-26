<!-- sidebar: style can be found in sidebar.less -->
<section class="main-sidebar" style="background: url(public/assets/image/navbar-inventory.png);">
  <!--DATA-DATA-->
  <ul class="sidebar-menu">    
    <li class="active treeview">
        <a href="#">
          <i class="fa fa-list"></i> <span>DATA DATA</span> <i class="fa fa-angle-down pull-right"></i>
        </a>
  <ul class="treeview-menu">
    <li><a href="#"><i class="fa fa-circle-o"></i> DATA BARANG </a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> DATA SATUAN</a></li>
    <li><a href="index2.html"><i class="fa fa-circle-o"></i> DATA LOKASI</a></li>
    <li><a href="index2.html"><i class="fa fa-circle-o"></i> DATA SUPPLIER</a></li>
    <li><a href="{!! url('/content/daftarUser') !!}"><i class="fa fa-circle-o"></i> DATA USER</a></li>
    <li><a href="index2.html"><i class="fa fa-circle-o"></i> DATA STOK GUDANG</a></li>
  </ul>
    </li>
  
  <!-- KALENDER -->
    <li class="treeview">
      <a href="calendar.html">
        <i class="fa fa-calendar"></i> <span>CALENDER</span>          
      </a>
    </li>

  <!--TRANSAKSI-->
    <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-transfer"></i>
            <span>TRANSAKSI</span>
          <i class="fa fa-angle-down pull-right"></i>
        </a>
  <ul class="treeview-menu">
    <li><a href="{!!HTML::link('content.daftarUser')!!}"><i class="fa fa-circle-o"></i>PENERIMAAN BARANG</a></li>
    <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>PENGELUARAN BARANG</a></li>
    <li><a href="{!!URL::to('/admin/categories/')!!}"><i class="fa fa-circle-o"></i>MUTASI ANTAR GUDANG</a></li>
  </ul>
    </li>
  
  <!--REPORT-->
    <li class="treeview">
        <a href="#">
          <i class="fa fa-print"></i>
            <span>REPORT</span>
          <i class="fa fa-angle-down pull-right"></i>
        </a>
    
  <!--REPORT STOK-->
  <ul class="treeview-menu">
    <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>REPORT STOK</a></li>
    <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>REPORT PENERIMAAN</a></li>
    <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>REPORT PENERIMAAN (POST)</a></li>
    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>REPORT PENGELUARAN</a></li>
    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>REPORT PENGELUARAN (POST)</a></li>
  </ul>
    </li>
  
  <!--CETAK BARCODE-->
    <li class="treeview">
        <a href="#">
          <i class="fa fa-barcode"></i>
            <span>CETAK BARCODE</span>
        </a>
    </li>
  
  <!--LOGOUT-->
    <li class="treeview">
        <a href="{!! url('/logout') !!}">
          <i class="glyphicon glyphicon-off"></i>
            <span>LOGOUT</span>
        </a>
    </li>
  </ul>
</section>
<!-- /.sidebar --> 