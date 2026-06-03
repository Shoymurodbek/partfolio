<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Portfolio</h2>
    <p>
      Real loyihalarimdan tanlangan ishlar: muammo, texnik yechim va natijaga yo'naltirilgan implementatsiyalar.
      Har bir loyihada demo va source kod havolalari mavjud.
    </p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">Barchasi</li>
        <li data-filter=".filter-fullstack">Fullstack</li>
        <li data-filter=".filter-laravel">Laravel</li>
        <li data-filter=".filter-frontend">Frontend</li>
      </ul><!-- End Portfolio Filters -->

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-fullstack filter-laravel">
          <div class="portfolio-content h-100">
            <img src="{{ asset('assets/img/portfolio/app-1.jpg') }}" class="img-fluid" alt="Task management platform dashboard screenshot">
            <div class="portfolio-info">
              <h4>Task Management Platform</h4>
              <p>Jamoa vazifalarini boshqarish tizimi. Laravel, MySQL, Bootstrap va role-based access.</p>
              <a href="{{ asset('assets/img/portfolio/app-1.jpg') }}" title="Task Management Platform" data-gallery="portfolio-gallery-fullstack" class="glightbox preview-link">
                <i class="bi bi-zoom-in"></i>
              </a>
              <a href="https://github.com/yourusername/task-management-platform" title="Source Code" class="details-link" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-github"></i>
              </a>
              <a href="https://demo.example.com/task-management-platform" title="Live Demo" class="details-link" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-box-arrow-up-right"></i>
              </a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-laravel">
          <div class="portfolio-content h-100">
            <img src="{{ asset('assets/img/portfolio/product-1.jpg') }}" class="img-fluid" alt="E-commerce admin panel screenshot">
            <div class="portfolio-info">
              <h4>E-commerce Admin Panel</h4>
              <p>Mahsulot, buyurtma va mijozlarni boshqarish paneli. CRUD, filter, hisobot va autentifikatsiya.</p>
              <a href="{{ asset('assets/img/portfolio/product-1.jpg') }}" title="E-commerce Admin Panel" data-gallery="portfolio-gallery-laravel" class="glightbox preview-link">
                <i class="bi bi-zoom-in"></i>
              </a>
              <a href="https://github.com/yourusername/ecommerce-admin-panel" title="Source Code" class="details-link" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-github"></i>
              </a>
              <a href="https://demo.example.com/ecommerce-admin-panel" title="Live Demo" class="details-link" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-box-arrow-up-right"></i>
              </a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-frontend">
          <div class="portfolio-content h-100">
            <img src="{{ asset('assets/img/portfolio/branding-1.jpg') }}" class="img-fluid" alt="Interactive analytics dashboard UI screenshot">
            <div class="portfolio-info">
              <h4>Analytics Dashboard UI</h4>
              <p>Responsiv va tezkor dashboard interfeysi. Chartlar, dark mode va reusable componentlar.</p>
              <a href="{{ asset('assets/img/portfolio/branding-1.jpg') }}" title="Analytics Dashboard UI" data-gallery="portfolio-gallery-frontend" class="glightbox preview-link">
                <i class="bi bi-zoom-in"></i>
              </a>
              <a href="https://github.com/yourusername/analytics-dashboard-ui" title="Source Code" class="details-link" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-github"></i>
              </a>
              <a href="https://demo.example.com/analytics-dashboard-ui" title="Live Demo" class="details-link" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-box-arrow-up-right"></i>
              </a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-fullstack">
          <div class="portfolio-content h-100">
            <img src="{{ asset('assets/img/portfolio/books-1.jpg') }}" class="img-fluid" alt="Course platform homepage screenshot">
            <div class="portfolio-info">
              <h4>Online Course Platform</h4>
              <p>Kurslar katalogi, video darslar va progress tracking funksiyalari bilan fullstack loyiha.</p>
              <a href="{{ asset('assets/img/portfolio/books-1.jpg') }}" title="Online Course Platform" data-gallery="portfolio-gallery-fullstack" class="glightbox preview-link">
                <i class="bi bi-zoom-in"></i>
              </a>
              <a href="https://github.com/yourusername/online-course-platform" title="Source Code" class="details-link" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-github"></i>
              </a>
              <a href="https://demo.example.com/online-course-platform" title="Live Demo" class="details-link" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-box-arrow-up-right"></i>
              </a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-laravel filter-fullstack">
          <div class="portfolio-content h-100">
            <img src="{{ asset('assets/img/portfolio/app-2.jpg') }}" class="img-fluid" alt="Booking and reservation system screenshot">
            <div class="portfolio-info">
              <h4>Booking & Reservation System</h4>
              <p>Bron qilish jarayonini avtomatlashtirish: kalendar, email xabarnoma va status nazorati.</p>
              <a href="{{ asset('assets/img/portfolio/app-2.jpg') }}" title="Booking & Reservation System" data-gallery="portfolio-gallery-fullstack" class="glightbox preview-link">
                <i class="bi bi-zoom-in"></i>
              </a>
              <a href="https://github.com/yourusername/booking-reservation-system" title="Source Code" class="details-link" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-github"></i>
              </a>
              <a href="https://demo.example.com/booking-reservation-system" title="Live Demo" class="details-link" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-box-arrow-up-right"></i>
              </a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-frontend">
          <div class="portfolio-content h-100">
            <img src="{{ asset('assets/img/portfolio/product-2.jpg') }}" class="img-fluid" alt="Corporate landing page screenshot">
            <div class="portfolio-info">
              <h4>Corporate Landing Page</h4>
              <p>Konversiyaga yo'naltirilgan landing page: tez yuklanish, SEO va mobil optimizatsiya.</p>
              <a href="{{ asset('assets/img/portfolio/product-2.jpg') }}" title="Corporate Landing Page" data-gallery="portfolio-gallery-frontend" class="glightbox preview-link">
                <i class="bi bi-zoom-in"></i>
              </a>
              <a href="https://github.com/yourusername/corporate-landing-page" title="Source Code" class="details-link" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-github"></i>
              </a>
              <a href="https://demo.example.com/corporate-landing-page" title="Live Demo" class="details-link" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-box-arrow-up-right"></i>
              </a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->
      </div><!-- End Portfolio Container -->
    </div>
  </div>
</section><!-- /Portfolio Section -->
