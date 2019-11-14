<?php get_header(); ?>    
    <main>
        <section class="skills" id="skills">
            <h2 class="second--title">My skills</h2>
            <div class="skills-container">
                <div class="skills-card">
                    <div class="skills-card__box">
                        <div class="skills-card__box--percent">
                            <svg class="skills-card-svg">
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="skills-card__box--number">
                                <h3>90<span>%</span></h3>
                            </div>
                        </div>
                        <h3 class="skills-card__box--text">HTML</h3>
                    </div>   
                </div>
                <div class="skills-card">
                    <div class="skills-card__box">
                        <div class="skills-card__box--percent">
                            <svg class="skills-card-svg">
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="skills-card__box--number">
                                <h3>80<span>%</span></h3>
                            </div>
                        </div>
                        <h3 class="skills-card__box--text">CSS</h3>
                    </div>   
                </div>
                <div class="skills-card">
                    <div class="skills-card__box">
                        <div class="skills-card__box--percent">
                            <svg class="skills-card-svg"> 
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="skills-card__box--number">
                                <h3>50<span>%</span></h3>
                            </div>
                        </div>
                        <h3 class="skills-card__box--text">JavaScript</h3>
                    </div>   
                </div>
                <div class="skills-card">
                    <div class="skills-card__box">
                        <div class="skills-card__box--percent">
                            <svg class="skills-card-svg">
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="skills-card__box--number">
                                <h3>40<span>%</span></h3>
                            </div>
                        </div>
                        <h3 class="skills-card__box--text">Wordpress</h3>
                    </div>   
                </div>
            </div>
        </section>
        <section class="about" id="about">
            <div class="about_circle">
                <img src="<?php bloginfo( 'template_url'); ?>/assets/img/about me.JPG" alt="Alex Kusov">
            </div>
            <div>
                <h2 class="about_circle--title">About me</h2>
                <p class="about_circle--text"><?php the_field('about_circle--text');?></p> 
            </div>
        </section>
        <section class="about_sertificats">
            <div>
                <a href="<?php bloginfo( 'template_url'); ?>/assets/img/responsive_design_freecodecamp.png" data-fancybox data-caption="Caption for single image">
                    <img src="<?php bloginfo( 'template_url'); ?>/assets/img/thumbnail_1.jpg" alt="responsive_design_freecodecamp" />
                </a>    
            </div>
            <div>
                <a href="<?php bloginfo( 'template_url'); ?>/assets/img/javaScript freeCodeCamp.png" data-fancybox data-caption="Caption for single image">
                    <img src="<?php bloginfo( 'template_url'); ?>/assets/img/thumbnail_2.jpg" alt="javaScript freeCodeCamp">   
                </a>    
            </div>
            <div>
                <a href="<?php bloginfo( 'template_url'); ?>/assets/img/software.png" data-fancybox data-caption="Caption for single image">
                    <img src="<?php bloginfo( 'template_url'); ?>/assets/img/thumbnail_3.jpg" alt="software">
                </a>    
            </div>
            <div>
                <a href="<?php bloginfo( 'template_url'); ?>/assets/img/bitrix sert.png" data-fancybox data-caption="Caption for single image">
                    <img src="<?php bloginfo( 'template_url'); ?>/assets/img/thumbnail_4.jpg" alt="bitrix">
                </a>    
            </div>
        </section>
        <section class="suggest" id="suggest">   
            <h2 class="second--title">what can i suggest</h2>
            <ul>
                <li>create responsive website from your psd</li>
                <li>create adaptive website from your psd</li>
                <li>support your website</li>
                <li>making features for your website</li>
                <li>transfer from HTML to Wordpress</li>
            </ul>
        </section>
        <section class="works" id="work">
            <h2 class="second--title">Some Of My Works</h2>
            <div class="works__items">
                <div class="works__items__box">
                    <div class="works__items__item">
                        <a href="https://codepen.io/pylsar/pen/RwbmxYG" target="_blank" rel="nofollow">
                            <img src="<?php bloginfo( 'template_url'); ?>/assets/img/Screenshot_1.png" alt="works">
                        </a>
                    </div>
                    <div class="works__items__item">
                        <a href="https://codepen.io/pylsar/pen/voVwPP" target="_blank" rel="nofollow">
                            <img src="<?php bloginfo( 'template_url'); ?>/assets/img/Screenshot_2.png" alt="works">
                        </a>
                    </div>
                    <div class="works__items__item">
                        <a href="https://codepen.io/pylsar/pen/gVZEOq" target="_blank" rel="nofollow">
                            <img src="<?php bloginfo( 'template_url'); ?>/assets/img/Screenshot_3.png" alt="works">
                        </a>    
                    </div>
                    <div class="works__items__item">
                        <a href="https://codepen.io/pylsar/pen/zgWMxr" target="_blank" rel="nofollow">
                            <img src="<?php bloginfo( 'template_url'); ?>/assets/img/Screenshot_4.png" alt="works">
                        </a>
                    </div>
                </div>
                <div class="works__items__box">
                    <div class="works__items__item">
                        <a href="https://codepen.io/pylsar/pen/qGLLNZ?editors=0100" target="_blank" rel="nofollow">
                            <img src="<?php bloginfo( 'template_url'); ?>/assets/img/Screenshot_5.png" alt="works">
                        </a>
                    </div>
                    <div class="works__items__item">
                        <a href="https://codepen.io/pylsar/pen/xNVOGK" target="_blank" rel="nofollow">
                            <img src="<?php bloginfo( 'template_url'); ?>/assets/img/Screenshot_6.png" alt="works">
                        </a>
                    </div>
                    <div class="works__items__item">
                        <a href="https://codepen.io/pylsar/pen/NVxqWp" target="_blank" rel="nofollow">
                            <img src="<?php bloginfo( 'template_url'); ?>/assets/img/Screenshot_7.png" alt="works">
                        </a>
                    </div>
                    <div class="works__items__item">
                        <a href="https://codepen.io/pylsar/pen/arOvbp?editors=0100" target="_blank" rel="nofollow">
                            <img src="<?php bloginfo( 'template_url'); ?>/assets/img/Screenshot_8.png" alt="works">
                        </a>
                    </div>
                </div>
            </div> 
        </section>   
        <img src="" alt="">     
    </main>
<?php get_footer(); ?>