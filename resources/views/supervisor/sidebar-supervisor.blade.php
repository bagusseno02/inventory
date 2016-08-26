<!-- sidebar: style can be found in sidebar.less -->
        <section class="main-sidebar" style="background: url(public/assets/image/navbar-inventory.png);">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <!-- DATA BARANG -->
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-list"></i> <span>DATA BARANG</span> 
              </a>
            </li>

            <!-- PENERIMAAN BARANG -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-long-arrow-left"></i>
                <span>PENERIMAAN BARANG</span>
              </a>          
            </li>

            <!-- PENGELUARAN BARANG -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-long-arrow-right"></i>
                <span>PENGELUARAN BARANG</span>
              </a>
            </li>
            
            <!-- CETAK BARCODE -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-barcode"></i>
                <span>CETAK BARCODE</span>
                </a>
            </li>
            
            <!-- REPORT STOK -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-print"></i>
                <span>REPORT STOK</span>                
              </a>
            </li>
            
            <!-- REPORT PENGELUARAN BARANG -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-print"></i>
                <span>REPORT PENGELUARAN</span>               
              </a>
            </li>
            
            <!-- REPORT PENERIMAAN BARANG -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-print"></i>
                <span>REPORT PENERIMAAN</span>             
              </a>
            </li>
            
            <!-- GANTI PASSWORD -->  
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i>
                <span>GANTI PASSWORD</span>              
              </a>
            </li>
           
            <!-- LOGOUT -->
            <li class="treeview">
              <a href="{!! url('/logout') !!}">
                <i class="glyphicon glyphicon-off"></i>
                <span>LOGOUT</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar --> 