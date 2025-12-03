<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2025 Modern Features Showcase</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .feature-card {
            border: none;
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(99, 102, 241, 0.15);
        }
        
        .feature-icon {
            font-size: 3rem;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }
        
        .showcase-section {
            padding: 4rem 0;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body data-theme="light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
                <a class="navbar-brand" href="index.php">
                <i class="fas fa-crown"></i> PHP Login 2025
            </a>
            <button id="darkModeToggle" class="btn btn-outline-light btn-sm ms-auto" title="Toggle Dark Mode">
                <i class="fas fa-moon"></i>
            </button>
        </div>
    </nav>

    <main class="py-5">
        <div class="container">
            <section class="text-center mb-5">
                <h1 class="mb-4">
                    <span class="gradient-text">2025 Modern Design Edition</span>
                </h1>
                <p class="lead text-muted">PHP Login Template - Tam Modernize Edilmiş Sürüm</p>
                <a href="index.php" class="btn btn-primary btn-lg mt-3">Giriş Yap</a>
            </section>

            <section class="showcase-section">
                <h2 class="text-center mb-5 gradient-text">🎨 Temel Özellikler</h2>
                
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-gem"></i>
                            </div>
                            <h5>Glassmorphism</h5>
                            <p class="text-muted">Camı andıran şeffaf tasarım efektleri modern arayüz oluşturmak için.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-moon"></i>
                            </div>
                            <h5>Dark Mode</h5>
                            <p class="text-muted">Sistem tercihine göre otomatik tema seçimi ve manuel toggle desteği.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-rainbow"></i>
                            </div>
                            <h5>Gradient Design</h5>
                            <p class="text-muted">Modern renk geçişleri ve dynamic background patterns.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-wand-magic-sparkles"></i>
                            </div>
                            <h5>Micro-interactions</h5>
                            <p class="text-muted">Her tıklamada, hover'da ve scroll'da pürüzsüz animasyonlar.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h5>Responsive Design</h5>
                            <p class="text-muted">Mobile-first yaklaşım ile tüm cihazlarda mükemmel görünüm.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-universal-access"></i>
                            </div>
                            <h5>Accessibility</h5>
                            <p class="text-muted">WCAG standartlarına uyumlu, herkes için erişilebilir tasarım.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Technical Features -->
            <section class="showcase-section">
                <h2 class="text-center mb-5 gradient-text">⚙️ Teknik Özellikler</h2>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="feature-card">
                            <h5 class="mb-3"><i class="fas fa-code"></i> CSS Variables</h5>
                            <p>Dinamik tema sistemi CSS variables kullanarak tek click'te tema değişimi.</p>
                            <code style="background: rgba(0,0,0,0.1); padding: 0.5rem; border-radius: 4px;">--primary-color: #6366f1</code>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature-card">
                            <h5 class="mb-3"><i class="fas fa-js-square"></i> Modern JavaScript</h5>
                            <p>Pure JavaScript, sıfır jQuery bağımlılığı. OOP tabanlı sınıflar ile düzenli kod.</p>
                            <code style="background: rgba(0,0,0,0.1); padding: 0.5rem; border-radius: 4px;">class ThemeManager { ... }</code>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature-card">
                            <h5 class="mb-3"><i class="fas fa-paint-brush"></i> Neumorphism</h5>
                            <p>Soft gölge efektleri ve yumuşak tasarım, 3D benzeri görünüm.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature-card">
                            <h5 class="mb-3"><i class="fas fa-bolt"></i> High Performance</h5>
                            <p>60fps animasyonlar, will-change optimizasyonları, hızlı yükleme.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="showcase-section">
                <h2 class="text-center mb-5 gradient-text">🎬 Animasyon Örnekleri</h2>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Fade In Animasyonu</strong>
                            <p class="mb-0">Sayfalar açılırken smooth fade in efekti.</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Slide Up Animasyonu</strong>
                            <p class="mb-0">Kartlar ve containerlar aşağıdan yukarı kaydarak giriş yapıyor.</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <button class="btn btn-primary btn-lg btn-block">
                            <i class="fas fa-water"></i> Ripple Effect
                        </button>
                        <small class="text-muted d-block mt-2">Tıkla ve dalgalı efekti gör</small>
                    </div>

                    <div class="col-md-6">
                        <button id="darkModeDemo" class="btn btn-secondary btn-lg btn-block">
                            <i class="fas fa-moon"></i> Theme Toggle
                        </button>
                        <small class="text-muted d-block mt-2">Tıkla ve tema değişimi görmek için</small>
                    </div>
                </div>
            </section>

            <section class="showcase-section">
                <div class="feature-card">
                    <h3 class="text-center mb-4">🌐 Tarayıcı Desteği</h3>
                    <div class="row text-center">
                        <div class="col-md-3">
                            <h5><i class="fab fa-chrome" style="color: #4285f4;"></i></h5>
                            <p>Chrome/Edge 90+</p>
                        </div>
                        <div class="col-md-3">
                            <h5><i class="fab fa-firefox" style="color: #ff7139;"></i></h5>
                            <p>Firefox 88+</p>
                        </div>
                        <div class="col-md-3">
                            <h5><i class="fab fa-safari" style="color: #000;"></i></h5>
                            <p>Safari 14+</p>
                        </div>
                        <div class="col-md-3">
                            <h5><i class="fab fa-mobile-alt" style="color: #555;"></i></h5>
                            <p>Mobile Browsers</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="text-center mb-5">
                <h3 class="mb-4">Hemen Başlayın</h3>
                <a href="signup.php" class="btn btn-primary btn-lg me-2">
                    <i class="fas fa-user-plus"></i> Kayıt Ol
                </a>
                <a href="index.php" class="btn btn-secondary btn-lg">
                    <i class="fas fa-sign-in-alt"></i> Giriş Yap
                </a>
            </section>
        </div>
    </main>

    <?php require 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
    <script>
        document.getElementById('darkModeDemo')?.addEventListener('click', function() {
            const btn = this;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Tema Değiştiriliyor...';
            setTimeout(() => {
                document.getElementById('darkModeToggle').click();
                btn.innerHTML = '<i class="fas fa-moon"></i> Theme Toggle';
            }, 600);
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>
