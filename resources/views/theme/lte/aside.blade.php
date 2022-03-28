
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src='{{asset("assets/$theme/dist/img/logo.jpg")}}' class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú Principal</li>
          @foreach ($menusComposer as $key => $item)
              @if ($item["menu_id"] != 0)
                  @break
              @endif
              @include("theme.$theme.menu-item", ["item" => $item])
          @endforeach
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>