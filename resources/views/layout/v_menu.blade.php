<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{asset('adminlte')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Rizal Pradana</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ request() -> is('/') ? 'active' : '' }}">
            <a href="/">
                <i class="fa fa-dashboard"></i> <span>Kurikulum</span>
            </a>
        </li>
        <li class="{{ request() -> is('profillulusan') ? 'active' : '' }}">
            <a href="/profillulusan">
                <i class="fa fa-book"></i> <span>Profil Lulusan</span>
            </a>
        </li>
        <li class="{{ request() -> is('pemetaanprofil') ? 'active' : '' }}">
            <a href="/pemetaanprofil">
                <i class="fa fa-book"></i> <span>Pemetaan Profil Lulusan</span>
            </a>
        </li>
        <li class="{{ request() -> is('cpl') ? 'active' : '' }}">
            <a href="/cpl">
                <i class="fa fa-book"></i> <span>CPL cfssd</span>
            </a>
        </li>
        <li class="{{ request() -> is('pemetaancpl') ? 'active' : '' }}">
            <a href="/pemetaancpl">
                <i class="fa fa-book"></i> <span>Pemetaan CPL</span>
            </a>
        </li>
        <li class="{{ request() -> is('matakuliah') ? 'active' : '' }}">
            <a href="/matakuliah">
                <i class="fa fa-book"></i> <span>Mata Kuliah</span>
            </a>
        </li>
        <li>
            <a href="/matakuliah">
                <i class="fa fa-book"></i> <span>Keluar</span>
            </a>
        </li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
</section>
<!-- /.sidebar -->