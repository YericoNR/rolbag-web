	<footer id="colophon" class="rb-footer">
		<div class="rb-container">
            <div class="rb-footer__grid">
                <!-- Columna 1: Branding y Datos Legales Reales -->
                <div class="rb-footer__widget">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand/logo-white.png' ); ?>" alt="ROLBAG" class="rb-footer__logo-img" />
                    <p class="rb-footer__desc">Fabricación nacional de fundas protectoras para tecnología móvil y valijas de seguridad para empresas en todo Chile.</p>
                    <div class="rb-footer__company-info">
                        <p><strong>Dirección:</strong> San Pablo 2209, Santiago Centro, Región Metropolitana</p>
                        <p><strong>Horario de Atención:</strong> Lunes a Viernes de 10:30 am a 7:00 pm</p>
                    </div>
                </div>

                <!-- Columna 2: Navegación Institucional Aprobada -->
                <div class="rb-footer__widget">
                    <h4 class="rb-footer__title">Navegación</h4>
                    <ul class="rb-footer__list">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="rb-footer__link">Inicio</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/empresa' ) ); ?>" class="rb-footer__link">Empresa</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/productos' ) ); ?>" class="rb-footer__link">Productos</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/soluciones' ) ); ?>" class="rb-footer__link">Soluciones</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="rb-footer__link">Contacto</a></li>
                    </ul>
                </div>

                <!-- Columna 3: Las 5 Líneas Oficiales de Producto -->
                <div class="rb-footer__widget">
                    <h4 class="rb-footer__title">Líneas de Productos</h4>
                    <ul class="rb-footer__list">
                        <li><a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-footer__link">Fundas para Capturadores</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets' ) ); ?>" class="rb-footer__link">Fundas para Tablets</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras' ) ); ?>" class="rb-footer__link">Fundas para Impresoras</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/productos/valijas-de-seguridad' ) ); ?>" class="rb-footer__link">Valijas de Seguridad</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/productos/candados-especiales' ) ); ?>" class="rb-footer__link">Candados de Seguridad</a></li>
                    </ul>
                </div>

                <!-- Columna 4: Contacto Directo Oficial -->
                <div class="rb-footer__widget">
                    <h4 class="rb-footer__title">Contacto y Ventas</h4>
                    <ul class="rb-footer__list">
                        <li><a href="tel:+569318360416" class="rb-footer__link">+56 9 3183 6041</a></li>
                        <li><a href="tel:+56991702292" class="rb-footer__link">+56 9 9170 2292</a></li>
                        <li><a href="mailto:rolbagsecurity@gmail.com" class="rb-footer__link">rolbagsecurity@gmail.com</a></li>
                        <li><a href="mailto:ventas@rolbag.cl" class="rb-footer__link">ventas@rolbag.cl</a></li>
                        <li><a href="https://wa.me/569318360416?text=<?php echo urlencode('Hola ROLBAG, quisiera realizar una consulta comercial.'); ?>" target="_blank" rel="noopener noreferrer" class="rb-footer__link rb-text-cyan">WhatsApp: +56 9 3183 6041</a></li>
                    </ul>
                </div>
            </div>

			<div class="rb-footer__bottom">
                <div class="rb-footer__legal" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 14px;">
                    <div>
                        &copy; <?php echo date('Y'); ?> ROLBAG. Todos los derechos reservados.
                    </div>
                    <div style="display: flex; gap: 18px;">
                        <a href="<?php echo esc_url( home_url( '/terminos-y-condiciones' ) ); ?>" class="rb-footer__link" style="font-size: 0.8rem;">Términos y Condiciones</a>
                        <a href="<?php echo esc_url( home_url( '/politica-de-privacidad' ) ); ?>" class="rb-footer__link" style="font-size: 0.8rem;">Política de Privacidad</a>
                    </div>
                </div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<!-- Botón Flotante WhatsApp -->
<a href="https://wa.me/569318360416?text=<?php echo urlencode('Hola ROLBAG, quisiera realizar una consulta comercial.'); ?>" class="rb-whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
    <svg viewBox="0 0 24 24" width="30" height="30" style="fill:white;"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8.01 12.27C8.14 12.44 9.76 14.94 12.24 16C12.83 16.27 13.28 16.42 13.64 16.53C14.23 16.72 14.77 16.69 15.2 16.63C15.68 16.56 16.67 16.03 16.88 15.45C17.08 14.87 17.08 14.38 17.02 14.28C16.96 14.17 16.8 14.11 16.56 13.99C16.32 13.86 15.12 13.28 14.9 13.2C14.67 13.11 14.51 13.08 14.35 13.32C14.18 13.57 13.71 14.11 13.56 14.28C13.42 14.45 13.27 14.47 13.03 14.35C12.79 14.24 11.99 13.97 11.04 13.13C10.3 12.47 9.8 11.66 9.66 11.42C9.51 11.18 9.64 11.04 9.77 10.92C9.88 10.81 10.02 10.63 10.14 10.49C10.26 10.34 10.3 10.24 10.38 10.08C10.46 9.92 10.42 9.77 10.36 9.66C10.3 9.54 9.8 8.34 9.6 7.84C9.39 7.36 9.19 7.43 9.03 7.42C8.88 7.42 8.71 7.33 8.53 7.33Z"/></svg>
</a>

<?php wp_footer(); ?>
</body>
</html>
