<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about*') ? 'active' : '' }}" href="/about">
            <span data-feather="info"></span>
            About
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('privacy*') ? 'active' : '' }}" href="/privacy">
            <span data-feather="file-text"></span>
            Privacy Policy
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('refund*') ? 'active' : '' }}" href="/refund">
            <span data-feather="file-text"></span>
            Refund Policy
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('term*') ? 'active' : '' }}" href="/term">
            <span data-feather="file-text"></span>
            Terms & Conditions
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('mail*') ? 'active' : '' }}" href="/mail">
            <span data-feather="inbox"></span>
            Inbox
          </a>
        </li>
      </ul>

    </div>
  </nav>