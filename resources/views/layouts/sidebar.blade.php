 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img
                src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/img/user2-160x160.jpg"
                class="img-circle"
                alt="User Image"
              />
            </div>
            <div class="pull-left info">
              <p>DRH</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Tableau de bord</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active">
              <a href="{{ route('admin.contrats') }}"><i class="fa fa-link"></i> <span>Gestion des Contrats</span></a>
            </li>
            <li class="treeview">
              <a href="#"
                ><i class="fa fa-link"></i> <span>Conges et Absences</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('admin.conges') }}">Conges</a></li>
                <li><a href="{{ route('admin.abscences') }}">Absences</a></li>
              </ul>
            </li>
            <li>
              <a href="#"
                ><i class="fa fa-link"></i> <span>Relations Sociales</span></a
              >
            </li>
            <li class="treeview">
              <a href="#"
                ><i class="fa fa-user"></i> <span>Employes</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('admin.employes') }}">Liste des employes</a></li>
                <li><a href="{{ route('admin.categoriesEmployes') }}">Categories Employes</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"
                ><i class="fa fa-link"></i> <span>Remuneration</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Politique de la remuneration</a></li>
                <li><a href="#">Gestion de la paie</a></li>
              </ul>
            </li>
            <li>
              <a href="#"
                ><i class="fa fa-link"></i> <span>Gestion des Carrières</span></a
              >
            </li>
            <li>
              <a href="#"
                ><i class="fa fa-link"></i> <span>Evaluations</span></a
              >
            </li>
            <li>
              <a href="{{ route('admin.formations') }}"
                ><i class="fa fa-link"></i> <span>Formation</span></a
              >
            </li>
            <li class="treeview">
              <a href="#"
                ><i class="fa fa-link"></i> <span>Autres services</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('admin.postes') }}">Postes</a></li>
                <li><a href="{{ route('users.index') }}">Utilisateurs</a></li>
                <li><a href="{{ route('admin.cotisations') }}">Cotisations</a></li>
                <li><a href="{{ route('admin.formations') }}">Formations</a></li>
                <li><a href="{{ route('admin.mouvements') }}">Mouvements</a></li>
                <li><a href="{{ route('admin.offreEmploies') }}">Offre d'Emploi</a></li>
              </ul>
            </li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
