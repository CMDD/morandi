<ul class="sidebar-menu" data-widget="tree">
  <li class="header">NAVEGACIÓN</li>
  <!-- Optionally, you can add icons to the links -->
  <li class="active">
    <a href="#/admin-dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-tv"></i> <span>Web</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
      <li>
        <a href="#"> <i class="fa fa-building-o"></i>Proyectos</a>
      </li>
      <li>
        <router-link to="/create-project"><i class="fa fa-file"></i>Crear proyecto</router-link>
      </li>
    </ul>
  </li>
</ul>
