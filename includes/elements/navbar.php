<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php?p">
            <i data-feather="pie-chart" width="24" height="24"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./includes/pages/webinar-erstellen.php">
            <i data-feather="video" width="24" height="24"></i>
              Webinar erstellen
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./includes/pages/aufzeichnungen.php">
            <i data-feather="hard-drive" width="24" height="24"></i>
              Aufzeichnungen
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Teilnehmerverwaltung</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="./includes/pages/registrieren.php">
            <i data-feather="users" width="24" height="24"></i>
              An- & Abmeldung
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./includes/pages/moderatoren.php">
            <i data-feather="shield" width="24" height="24"></i>
              Moderatoren
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <script>
        const currentLocation = location.href;
        const menuItem = document.getElementsByClassName('nav-link');
        const menuLength = menuItem.length
        for(let i = 0; i<menuLength; i++){
            if(menuItem[i].href === currentLocation){
                 menuItem[i].className = "nav-link active"
            }
        }
    </script>