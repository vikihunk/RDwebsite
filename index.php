<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@300;400;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
            <div class="logo"><?php bloginfo('name'); ?></div>
            <ul class="nav-links">
                <li><a href="#home">मुख्य पृष्ठ</a></li>
                <li><a href="#about">हमारे बारे में</a></li>
                <li><a href="#help">आप कैसे जुड़ सकते हैं</a></li>
                <li><a href="#gallery">गैलरी</a></li>
                <li><a href="#contact">संपर्क करें</a></li>
                <li><a href="#donate">दान करें</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero" id="home">
        <div class="hero-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="रामानन्दी देवी हिन्दू अनाथालय लोगो">
        </div>
        <h1>हर बच्चे को एक घर, एक परिवार</h1>
        <p>1925 से बच्चों को प्यार, शिक्षा और उज्जवल भविष्य प्रदान करते हुए</p>
        <a href="#donate" class="cta-button">दान करें और जीवन बदलें</a>
    </section>

    <section class="about-section" id="about">
        <h2 class="section-title">हमारे बारे में</h2>
        <div class="about-content">
            <h3>प्रेम और आशा की एक विरासत रामानन्दी देवी हिन्दू अनाथालय की कहानी</h3>
            <p>लगभग एक सदी से हमारे दरवाज़े खुले हैं, जो अनगिनत बच्चों को एक सुरक्षित पनाह और एक प्यारा घर प्रदान कर रहे हैं। यह सब 20 दिसंबर, 1925 को हमारी सम्मानित संस्थापक, रामानन्दी देवी के दृष्टिकोण और करुणा से शुरू हुआ था। उनका सपना एक ऐसी जगह बनाना था जहाँ हर बच्चे को अपनापन, शिक्षा और एक उज्जवल भविष्य का वादा मिल सके।</p>
            <p>आज वह सपना आप जैसे अविश्वसनीय व्यक्तियों के अडिग समर्थन और आभारी योगदान की बदौलत ज़िंदा है। हमें पीढ़ी-दर-पीढ़ी बच्चों का बड़ा होते, सीखते और फलते-फूलते देखने का सौभाग्य मिला है, और यह सब हमारे समुदाय की दयालुता से हुआ है।</p>
            <p>सिर्फ एक अनाथालय से कहीं ज़्यादा, हम एक परिवार हैं। हम समग्र देखभाल प्रदान करने का प्रयास करते हैं, जो शिक्षा, स्वास्थ्य और भावनात्मक कल्याण पर केंद्रित हैं, यह सुनिश्चित करते हुए की हर बच्चा लाड़-प्यार महसूस करे और अपनी पूरी क्षमता तक पहुचने के लिए सशक्त बने।</p>
        </div>
    </section>
    
    <section class="help-section" id="help">
        <h2 class="section-title">आप कैसे जुड़ सकते हैं</h2>
        <div class="help-content">
           <h3>रामानन्दी देवी हिन्दू अनाथालय परिवार का हिस्सा बनने के कई तरीके हैं:</h3>
           <p>स्वयंसेवा (Volunteer): दैनिक गतिविधियों, ट्यूशन, या विशेष आयोजनों में मदद के लिए अपना समय और कौशल दें।  </p>
           <p>दान (Donate): आपका वित्तीय योगदान बच्चों की शिक्षा, भोजन, कपड़े और चिकित्सा ज़रूरतों का सीधे समर्थन करता है।  हर रुपया मायने रखता है।</p>  
           <p>बात फैलाएं (Spread the word): हमारी कहानी को अपने दोस्तों और परिवार के साथ साझा करें । जागरूगता महत्वपूर्ण है । </p>
           <p>हमसे मिलें (Visit Us): यदि आप इस क्षेत्र में हैं तो हम आपको हमारा काम सीधे तौर से दिखाना पसंद करेंगे (मिलने की व्यवस्था के लिए कृपया हमसे संपर्क करें)। </p>
           <p>आइये इस खूबसूरत विरासत को एक साथ जारी रखें । इन बच्चों के जीवन में आशा की किरण बनने के लिए आपका धन्यवाद । </p>
        </div>
    </section>
    

    <div class="stats">
        <div class="stat-card">
            <div class="stat-number" id="yearsSince1925">99</div>

<script>
    // 1. Get the current year
    const currentYear = new Date().getFullYear();

    // 2. Define the starting year
    const startingYear = 1925;

    // 3. Calculate the difference (number of years)
    const years = currentYear - startingYear;

    // 4. Find the HTML element by its ID
    const yearElement = document.getElementById('yearsSince1925');

    // 5. Update the content of the HTML element
    yearElement.textContent = years;
</script>
            <div class="stat-label">वर्षों की सेवा</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">1925</div>
            <div class="stat-label">स्थापना वर्ष</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">1000+</div>
            <div class="stat-label">बच्चों की मदद की</div>
        </div>
    </div>

    <section class="features">
        <h2 class="section-title" style="color: white;">हम क्या प्रदान करते हैं</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">📚</div>
                <h3>गुणवत्ता शिक्षा</h3>
                <p>हर बच्चे को उत्कृष्ट शिक्षा और कौशल विकास का अवसर</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🏥</div>
                <h3>स्वास्थ्य देखभाल</h3>
                <p>नियमित चिकित्सा जांच और स्वास्थ्य सेवाएं</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">❤️</div>
                <h3>भावनात्मक समर्थन</h3>
                <p>प्यार, देखभाल और परामर्श सेवाएं</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🍽️</div>
                <h3>पोषण</h3>
                <p>संतुलित और पौष्टिक भोजन</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3>खेल और मनोरंजन</h3>
                <p>खेल, कला और सांस्कृतिक गतिविधियां</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🌟</div>
                <h3>व्यक्तित्व विकास</h3>
                <p>जीवन कौशल और चरित्र निर्माण</p>
            </div>
        </div>
    </section>

    <section class="gallery-section" id="gallery">
        <h2 class="section-title">फोटो गैलरी</h2>
        
        <!-- Founders Section -->
        <div class="gallery-category">
            <h3 class="category-title">संस्थापक एवं महान व्यक्तित्व</h3>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/founders.jpg" alt="स्व. दीपनारायण सिंह और श्रीमती रामानन्दी देवी">
                    <div class="gallery-caption">स्व. दीपनारायण सिंह और श्रीमती रामानन्दी देवी - संस्थापक</div>
                </div>
            </div>
        </div>

        <!-- Management Section -->
        <div class="gallery-category">
            <h3 class="category-title">प्रबंधन समिति एवं सभापति</h3>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/presidents-list.jpg" alt="सभापति सूची">
                    <div class="gallery-caption">सभापति सूची (1925-वर्तमान)</div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/management-committee.jpg" alt="वर्तमान कार्यकारिणी">
                    <div class="gallery-caption">वर्तमान कार्यकारिणी और संरक्षक</div>
                </div>
            </div>
        </div>

        <!-- Facilities Section -->
        <div class="gallery-category">
            <h3 class="category-title">अनाथालय परिसर एवं सुविधाएं</h3>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-1.jpg" alt="मुख्य द्वार">
                    <div class="gallery-caption">मुख्य द्वार</div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-2.jpg" alt="परिसर भवन">
                    <div class="gallery-caption">परिसर</div>
                </div>
            </div>
        </div>

        <!-- Children's Home Section -->
        <div class="gallery-category">
            <h3 class="category-title">परिसर</h3>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/baby-home-1.jpg" alt="शिशु गृह प्रवेश">
                    <div class="gallery-caption">परिसर</div>
                </div>
            </div>
        </div>

        <!-- Activities Section -->
        <div class="gallery-category">
            <h3 class="category-title">झलकियाँ - बच्चों की गतिविधियां</h3>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/activity-1.jpg" alt="रैली">
                    <div class="gallery-caption">जागरूकता रैली</div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/activity-2.jpg" alt="सांस्कृतिक कार्यक्रम">
                    <div class="gallery-caption">सांस्कृतिक कार्यक्रम</div>
                </div>
            </div>
        </div>

        <!-- Distinguished Visitors Section -->
        <div class="gallery-category">
            <h3 class="category-title">विशिष्ट अतिथि एवं महान व्यक्तित्व</h3>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/visitor-db.jpg" alt="प्रधानमंत्री का दौरा">
                    <div class="gallery-caption">माननीय अतिथि का दौरा </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/visitor-rajendra-prasad.jpg" alt="डॉ. राजेन्द्र प्रसाद">
                    <div class="gallery-caption">डॉ. राजेन्द्र प्रसाद - भारत के प्रथम राष्ट्रपति</div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/visitor-jp-narayan.jpg" alt="जय प्रकाश नारायण">
                    <div class="gallery-caption">जय प्रकाश नारायण - राजनेता</div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/visitor-janaki-devi.jpg" alt="जानकी देवी बजाज">
                    <div class="gallery-caption">जानकी देवी बजाज - स्वतंत्रता सेनानी</div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/visitor-prithviraj-kapur.jpg" alt="पृथ्वीराज कपूर">
                    <div class="gallery-caption">पृथ्वीराज कपूर - अभिनेता</div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/visitor-lal-bahadur.jpg" alt="लाल बहादुर शास्त्री">
                    <div class="gallery-caption">लाल बहादुर शास्त्री - भारत के पूर्व प्रधानमंत्री</div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <h3>रामान्दी देवी हिन्दू अनाथालय</h3>
            <p style="margin: 1rem 0;">बच्चों के जीवन में बदलाव लाने में हमारी मदद करें</p>
            <div class="footer-links">
                <a href="#about">हमारे बारे में</a>
                <a href="#help">आप कैसे जुड़ सकते हैं</a>
                <a href="#gallery">गैलरी</a>
                <a href="#contact">संपर्क करें</a>
                <a href="#donate">दान करें</a>
                <a href="#volunteer">स्वयंसेवक बनें</a>
            </div>
            <p style="margin-top: 2rem; color: #a0aec0;">© 2024 रामानन्दी देवी हिन्दू अनाथालय | स्थापना: 20 दिसंबर, 1925</p>
        </div>
    </footer>

    <!-- Lightbox for Gallery -->
    <div class="lightbox" id="lightbox">
        <div class="lightbox-content">
            <button class="lightbox-close" onclick="closeLightbox()">&times;</button>
            <img id="lightbox-img" src="" alt="">
            <div class="lightbox-caption" id="lightbox-caption"></div>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Lightbox functionality
        function openLightbox(img) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const lightboxCaption = document.getElementById('lightbox-caption');
            
            lightboxImg.src = img.src;
            lightboxCaption.textContent = img.alt;
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Add click event to all gallery images
        document.addEventListener('DOMContentLoaded', function() {
            const galleryItems = document.querySelectorAll('.gallery-item img');
            galleryItems.forEach(img => {
                img.addEventListener('click', function() {
                    openLightbox(this);
                });
            });

            // Close lightbox on background click
            document.getElementById('lightbox').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeLightbox();
                }
            });

            // Close lightbox on ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeLightbox();
                }
            });
        });
    </script>
    
    <?php wp_footer(); ?>
</body>
</html>
