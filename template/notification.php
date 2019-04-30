<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i class="fas fa-share-alt"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Share to media social
                <div class="float-right">
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
    <a href="whatsapp://send?text=<?= $settings['desc']." - ".$baseurl ?>" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fab fa-whatsapp"></i>
                  </div>
                  <div class="dropdown-item-desc">
                      <center>
                    Share to WhatsApp</center>
                  </div>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $baseurl ?>" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fab fa-facebook"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Share to Facebook
                  </div>
                </a>
              </div>
            </div>
          </li>