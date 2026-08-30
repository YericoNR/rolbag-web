<?php
/**
 * Template Name: Design System Preview
 * 
 * Plantilla exclusiva para visualizar los componentes del sistema de diseño de ROLBAG.
 * No debe ser indexada ni accesible públicamente.
 */

// Evitar indexación
add_action('wp_head', function() {
    echo '<meta name="robots" content="noindex, nofollow">';
});

get_header(); ?>

<main id="primary" class="site-main" style="background-color: var(--color-background-alt); padding: 40px 0;">
    <div class="container">
        
        <header class="text-center mb-2xl">
            <h1 class="display">Design System</h1>
            <p style="color: var(--color-text-secondary);">Guía visual de componentes ROLBAG (B2B, Industrial, Tecnológico)</p>
        </header>

        <!-- COLORES -->
        <section class="card" style="padding: var(--space-xl); margin-bottom: var(--space-2xl);">
            <h2 style="border-bottom: 1px solid var(--color-border); padding-bottom: var(--space-md);">1. Color System</h2>
            
            <h3 style="margin-top: var(--space-lg);">Brand Colors</h3>
            <div class="grid grid-cols-4">
                <div style="background: var(--color-brand-primary); color: white; padding: var(--space-lg); border-radius: var(--radius-medium);">Primary<br><small class="text-mono">#003B94</small></div>
                <div style="background: var(--color-brand-primary-light); color: white; padding: var(--space-lg); border-radius: var(--radius-medium);">Primary Light</div>
                <div style="background: var(--color-brand-primary-dark); color: white; padding: var(--space-lg); border-radius: var(--radius-medium);">Primary Dark</div>
                <div style="background: var(--color-brand-accent); color: white; padding: var(--space-lg); border-radius: var(--radius-medium);">Accent<br><small class="text-mono">#00B4FF</small></div>
            </div>

            <h3 style="margin-top: var(--space-xl);">Neutrals</h3>
            <div class="grid grid-cols-4">
                <div style="background: var(--color-background); border: 1px solid var(--color-border); padding: var(--space-lg); border-radius: var(--radius-medium);">Background</div>
                <div style="background: var(--color-surface); border: 1px solid var(--color-border); padding: var(--space-lg); border-radius: var(--radius-medium);">Surface</div>
                <div style="background: var(--color-text); color: white; padding: var(--space-lg); border-radius: var(--radius-medium);">Text Primary</div>
                <div style="background: var(--color-dark-section); color: white; padding: var(--space-lg); border-radius: var(--radius-medium);">Dark Section</div>
            </div>
        </section>

        <!-- TIPOGRAFÍA -->
        <section class="card" style="padding: var(--space-xl); margin-bottom: var(--space-2xl);">
            <h2 style="border-bottom: 1px solid var(--color-border); padding-bottom: var(--space-md);">2. Typography</h2>
            <div class="grid grid-cols-2">
                <div>
                    <h3 class="display">Display</h3>
                    <h1>Heading 1 (H1)</h1>
                    <h2>Heading 2 (H2)</h2>
                    <h3>Heading 3 (H3)</h3>
                    <h4>Heading 4 (H4)</h4>
                    <h5>Heading 5 (H5)</h5>
                    <h6>Heading 6 (H6)</h6>
                </div>
                <div>
                    <p><strong>Body Text (Inter)</strong>: Somos especialistas en diseño y fabricación a medida de fundas protectoras y sistemas de seguridad B2B.</p>
                    <p style="font-size: var(--text-small);"><strong>Small Text</strong>: Especificaciones de producto y detalles secundarios.</p>
                    <p class="text-mono" style="background: var(--color-background-alt); padding: var(--space-sm); border-radius: var(--radius-small);">Technical Data (Roboto Mono)<br>SKU: ROL-7489-A</p>
                </div>
            </div>
        </section>

        <!-- BOTONES Y BADGES -->
        <section class="card" style="padding: var(--space-xl); margin-bottom: var(--space-2xl);">
            <h2 style="border-bottom: 1px solid var(--color-border); padding-bottom: var(--space-md);">3. Buttons & Badges</h2>
            
            <div style="display: flex; gap: var(--space-md); margin-bottom: var(--space-lg); flex-wrap: wrap; align-items: center;">
                <button class="btn btn-primary">Primary CTA</button>
                <button class="btn btn-secondary">Secondary CTA</button>
                <button class="btn btn-ghost">Ghost Button</button>
                <button class="btn btn-accent">Accent Tech</button>
                <button class="btn btn-primary" disabled>Disabled</button>
            </div>

            <div style="display: flex; gap: var(--space-md); align-items: center;">
                <span class="badge badge-tech">SKU-990</span>
                <span class="badge badge-featured">Destacado</span>
            </div>
        </section>

        <!-- FORMULARIOS -->
        <section class="card" style="padding: var(--space-xl); margin-bottom: var(--space-2xl);">
            <h2 style="border-bottom: 1px solid var(--color-border); padding-bottom: var(--space-md);">4. Forms</h2>
            <div class="grid grid-cols-2">
                <div class="form-group">
                    <label class="form-label">Nombre de Empresa</label>
                    <input type="text" class="form-control" placeholder="Ej: Tech Logistics S.A.">
                    <span class="form-helper">Ingrese el nombre legal completo.</span>
                </div>
                <div class="form-group has-error">
                    <label class="form-label">Email Corporativo</label>
                    <input type="email" class="form-control" value="email_invalido">
                    <span class="form-helper">Por favor, ingrese un email válido.</span>
                </div>
                <div class="form-group">
                    <label class="form-label">Sector (Disabled)</label>
                    <select class="form-control" disabled>
                        <option>Sector Industria</option>
                    </select>
                </div>
            </div>
        </section>

        <!-- CARDS DE PRODUCTO -->
        <section class="card" style="padding: var(--space-xl); margin-bottom: var(--space-2xl);">
            <h2 style="border-bottom: 1px solid var(--color-border); padding-bottom: var(--space-md);">5. Product Cards</h2>
            
            <div class="grid grid-cols-3">
                <!-- Card 1 -->
                <div class="product-card card">
                    <div class="product-card-media">
                        <div class="product-card-badges">
                            <span class="badge badge-featured">Nuevo</span>
                        </div>
                        <img src="https://via.placeholder.com/400x300?text=IMG+Funda" alt="Producto">
                    </div>
                    <div class="product-card-content">
                        <div class="product-card-brand">Zebra Technologies</div>
                        <h3 class="product-card-title"><a href="#">Funda de Alta Resistencia TC52</a></h3>
                        <div class="product-card-meta">SKU: ZEB-TC52-001</div>
                        <div class="product-card-footer">
                            <button class="btn btn-secondary" style="width: 100%;">Ver especificaciones</button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="product-card card">
                    <div class="product-card-media">
                        <div class="product-card-badges">
                            <span class="badge badge-tech">IP67</span>
                        </div>
                        <img src="https://via.placeholder.com/400x300?text=IMG+Valija" alt="Producto">
                    </div>
                    <div class="product-card-content">
                        <div class="product-card-brand">ROLBAG</div>
                        <h3 class="product-card-title"><a href="#">Valija de Seguridad 50L</a></h3>
                        <div class="product-card-meta">SKU: RB-VAL-50L</div>
                        <div class="product-card-footer">
                            <button class="btn btn-secondary" style="width: 100%;">Ver especificaciones</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
