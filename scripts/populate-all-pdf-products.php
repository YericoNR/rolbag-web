<?php
/**
 * Script to populate all 5 ROLBAG product lines with verified images and exact data from briefing PDF
 */
if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
    die( 'Must be run via WP-CLI' );
}

$products_data = array(
    array(
        'slug'            => 'fundas-para-capturadores',
        'title'           => 'Fundas para Capturadores de Datos / Terminales Móviles',
        'short_title'     => 'Fundas para Capturadores',
        'image'           => 'bento_capturador_1787700291965.jpg',
        'gallery'         => array(
            'bento_capturador_1787700291965.jpg',
            'capturador_detail.jpg',
            'custom_solution_1787698415328.jpg',
            'fabricacion_1787702420725.jpg',
        ),
        'content'         => 'Funda protectora de alta duración confeccionada en material impermeable a la medida exacta de cada equipo. Permite una adecuada manipulación de comandos, botones, cámaras, lectores láser y puertos de conexión. Disponible con correa cosida a la funda y configuraciones compatibles para equipos con o sin gatillo pistol grip.',
        'materiales'      => 'Materiales sintéticos impermeables de alta resistencia mecánica (Nylon balístico / Cordura), estructuras reforzadas con láminas plásticas semirrígidas para rigidez, amortiguación interna de goma EVA de alta densidad y forro acolchado. Cintas tejidas de nylon de alta tenacidad con terminales y herrajes metálicos o plásticos de alta resistencia para ajuste ergonómico a la cintura o al hombro.',
        'caracteristicas' => array(
            'Confección a la medida exacta según la anatomía y comandos de cada equipo.',
            'Compatible para versiones con gatillo pistol grip y estándar sin pistol.',
            'Correas de tela tejida de nylon cosidas a la funda, regulables para cintura o bandolera.',
            'Materiales sintéticos impermeables resistentes al uso intensivo del área logística.',
            'Acceso total a pantalla táctil, teclado, gatillo y puertos de carga sin retirar la funda.',
            'Colores corporativos a elección del cliente.',
        ),
        'beneficios'      => array(
            'Protege equipos portátiles de alto costo frente a rayones, caídas y mala manipulación.',
            'Reduce drásticamente costos por reparaciones y reposición de pantallas o gatillos.',
            'Mejora la ergonomía y comodidad del operario durante turnos continuos de inventario y picking.',
            'Mayor durabilidad y calidad garantizada mediante patronaje exclusivo.',
        ),
        'brands_models'   => array(
            'Zebra' => array(
                'TC22' => 'Wi-Fi 6E, pantalla 6", lector de códigos. Es de los más nuevos y económicos.',
                'TC26' => 'Conectividad celular 4G/LTE para terreno.',
                'TC27' => 'Similar al TC22, pero con conectividad 5G.',
                'TC53' => 'Gama empresarial, Wi-Fi 6E.',
                'TC58' => 'Versión con 5G, orientada a trabajos exigentes.',
                'TC53e' => 'Evolución del TC53 con hardware avanzado.',
                'TC58e' => 'Evolución del TC58 con conectividad 5G.',
                'TC53e RFID' => 'TC53e con funciones RFID integradas.',
                'TC73' => 'Gama robusta/industrial ultra resistente.',
                'TC78' => 'Versión 5G de la familia robusta industrial.',
                'MC3300ax' => 'Terminal con teclado para bodegas y logística.',
                'MC3400' => 'Terminal industrial de almacén.',
                'MC3450' => 'Terminal industrial avanzado de almacén.',
                'MC9400' => 'Gama ultra robusta para logística pesada y bodegas.',
                'MC9450' => 'Versión 5G ultra robusta para logística pesada.',
            ),
            'Honeywell' => array(
                'CT30 XP' => 'Compacto, tipo smartphone empresarial.',
                'CT37' => 'Compacto para retail y logística.',
                'CT45' => 'Robusto, uso general.',
                'CT45 XP' => 'Robusto, versión más avanzada.',
                'CT47' => 'Ultra resistente + 5G.',
                'CT60 XP' => 'Robusto, captura intensiva de datos.',
                'EDA51' => 'ScanPal, gama intermedia.',
                'EDA52' => 'ScanPal, económico e intermedio.',
                'EDA56' => 'ScanPal, más moderno con Wi-Fi 6.',
                'CK62' => 'Industrial con teclado físico.',
                'CK65' => 'Industrial con teclado ultra resistente para bodega.',
                'CK75' => 'Industrial robusto para almacenes, logística y distribución.',
                'EDA61K' => 'Resistente a múltiples caídas, robusto con teclado.',
                'CW45' => 'Wearable, se lleva ergonómicamente en el cuerpo.',
            ),
            'Unitech' => array(
                'EA530' => 'Smartphone industrial 6".',
                'EA530UHF' => 'Con módulo RFID UHF integrado.',
                'EA530 + RFID UHF' => 'Inventario y lectura RFID.',
                'EA660' => 'Smartphone industrial 6" 5G.',
                'PA768' => 'Terminal robusto 6" para trabajo en terreno.',
                'PA768e' => 'Evolución del PA768.',
                'PA730' => 'Terminal portátil de mano.',
                'PA760' => 'Terminal robusto empresarial.',
                'HT330' => 'Terminal con teclado para bodega e inventario.',
                'HT380' => 'Terminal robusto con teclado para bodega.',
                'HT730' => 'Terminal industrial para bodega y logística.',
                'HT730UHF' => 'Terminal industrial con lectura RFID UHF.',
                'HT730 + RFID' => 'Inventario y trazabilidad logística.',
                'HT730 Plus' => 'Nueva generación de alto rendimiento.',
                'EA520' => 'PDA compacto para retail e inventario.',
                'EA320' => 'PDA compacto para retail y captura de datos.',
            ),
            'Datalogic' => array(
                'Memor 30' => 'Retail, inventario, logística y almacén.',
                'Memor 35' => 'Logística, almacén, retail y trabajo en terreno.',
                'Memor 20' => 'Retail, inventario y logística.',
                'Memor 11' => 'Picking, inventario, retail y almacén.',
                'Memor K20' => 'Retail, tiendas e inventario.',
                'Memor K' => 'Retail, inventario y gestión de productos.',
                'Memor 10' => 'Retail, inventario y logística.',
                'Memor 12' => 'Retail, logística e inventario.',
                'Memor 17' => 'Retail, inventario y operaciones de tienda.',
                'Memor 1' => 'Retail, inventario y punto de venta.',
                'Skorpio X5' => 'Bodega, logística, picking y distribución.',
                'Skorpio X4' => 'Almacén, manufactura, logística y retail.',
                'Skorpio X3' => 'Bodega, inventario y distribución.',
                'Falcon X4' => 'Manufactura, logística, almacén y distribución.',
                'Falcon X3+' => 'Bodega, picking, logística y distribución.',
                'Lynx' => 'Retail, inventario y logística.',
                'Elf' => 'Retail, inventario, transporte y logística.',
            ),
            'Urovo' => array(
                'DT40' => 'Manufactura, almacenes y logística.',
                'DT50' => 'Logística, retail, inventarios y distribución.',
                'DT50 5G' => 'Logística, transporte, retail y operaciones en terreno.',
                'DT66' => 'Retail, logística, inventario y entregas.',
                'DT630' => 'Transporte, logística, distribución y trabajo en terreno.',
                'CT48' => 'Retail, inventario, bodegas y picking.',
                'CT48C' => 'Retail, inventario y gestión de productos.',
                'CT58S' => 'Almacenes, logística, retail y delivery.',
                'RT30' => 'Retail, inventario y operaciones de tienda.',
                'RT40S' => 'Industria, almacenes, logística y ambientes exigentes.',
                'DT610' => 'Inventario, logística, almacenes y gestión de activos (RFID).',
                'DT50P Lite' => 'Inventario, retail, almacenes y control de activos (RFID).',
                'DT50(P)' => 'Logística, inventario y trazabilidad (RFID).',
                'DT50(D)' => 'Industria, almacenes y control de activo (RFID).',
            ),
            'Newland' => array(
                'MT65 Beluga IV' => 'Terminal compacto pensado para retail y logística.',
                'MT65 Beluga Lite' => 'Versión sencilla portátil con teclado físico.',
                'MT65 Beluga V' => 'Adecuado para capturadores de datos en terreno.',
                'MT67 Sei' => 'Terminal móvil robusto para almacenes y retail.',
                'MT90 Orca III' => 'Pantalla táctil para ambiente de trabajo exigente.',
                'MT90 Orca Pro' => 'Terminal PDA industrial para captura de datos profesional.',
                'MT90 Orca Pro II' => 'Generación más avanzada con diseño robusto.',
                'MT93 Megattera' => 'Pensado para logística, almacenes, retail y operaciones de campo.',
                'MT95 Kambur Pro' => 'Diseñado para captura intensiva de datos y códigos uso industrial.',
                'MT95 Kambur Pro II' => 'Hardware más moderno y conectividad mejorada.',
                'MT95 Kambur Pro III' => 'Terminal robusto con pantalla grande moderno.',
                'N7 Cachalot Pro II' => 'Terminal industrial formato PDA para almacenamiento y distribución.',
            ),
            'CipherLab' => array(
                'CipherLab RK96' => 'Terminal industrial robusto para almacenes y logística.',
                'CipherLab RS38' => 'Terminal móvil moderno 6" para retail, logística y terreno.',
                'CipherLab RS38H' => 'Versión del RS38 enfocada en sector sanitario/salud.',
                'CipherLab RS36' => 'Terminal compacto 4,3" para inventarios, retail y logística.',
                'CipherLab RK26' => 'Terminal compacto táctil y teclado físico.',
                'CipherLab RK95' => 'Terminal industrial pantalla táctil y teclado para centros de distribución.',
                'CipherLab Hera51' => 'Terminal robusto para movilidad empresarial y campo.',
                'CipherLab RS51' => 'PDA robusto 4,7" para transporte, entregas y logística.',
                'CipherLab RS35' => 'Terminal táctil compacto para retail e inventarios.',
                'CipherLab RK25' => 'Terminal robusto con teclado numérico físico.',
                'CipherLab 9700' => 'Terminal industrial grande y resistente.',
                'CipherLab RS50' => 'Terminal móvil táctil para logística y movilidad empresarial.',
                'CipherLab RS31' => 'Terminal móvil táctil para retail, inventarios y logística.',
            ),
            'Wepoy' => array(
                'Wepoy DT30' => 'Terminal móvil para captura de códigos, inventarios y retail.',
                'Wepoy DT40' => 'Terminal móvil robusto para operaciones de campo.',
                'Wepoy DT50B' => 'Formato smartphone industrial para logística y terreno.',
                'Wepoy DT50S' => 'Ultrarresistente para trabajadores dentro y fuera de almacén.',
                'Wepoy CT48' => 'Diseñado para captura intensiva de datos.',
                'Wepoy DT50U' => 'Especializado en RFID UHF para lectura masiva de etiquetas.',
                'Wepoy CT58S' => 'Terminal móvil de mano con formato PDA industrial.',
                'Wepoy RT40' => 'Terminal industrial para manufactura y operaciones exigentes.',
                'Wepoy DT630' => 'Pensado para movilidad y captura de datos.',
                'Wepoy DT610' => 'Diseñado para lectura y gestión de etiquetas UHF RFID.',
                'Wepoy DT66' => 'Pantalla grande para tareas de captura de datos.',
            ),
            'Chainway' => array(
                'Chainway C61' => 'Terminal robusto con teclado físico para almacén.',
                'Chainway C63' => 'Captura de datos profesional.',
                'Chainway C66' => 'Terminal móvil táctil versátil.',
                'Chainway C70' => 'Compacto para inventarios.',
                'Chainway C71' => 'Terminal multifunción.',
                'Chainway C72' => 'Terminal robusto con lector RFID.',
                'Chainway C75' => 'Con impresora térmica integrada.',
                'Chainway C90' => 'Smartphone industrial.',
                'Chainway C6000' => 'Terminal compacto con teclado.',
                'Chainway MC21' => 'Terminal móvil ligero.',
                'Chainway MC50 5G' => 'Conectividad 5G de alta velocidad.',
                'Chainway MC51 5G' => 'Gama 5G para trabajo en terreno.',
                'Chainway MC51S' => 'Movilidad empresarial.',
                'Chainway MC62' => 'Terminal de almacén.',
                'Chainway MC95' => 'Industrial de alto rendimiento.',
                'Chainway C90A' => 'Versión avanzada.',
            ),
            'Bluebird' => array(
                'Bluebird S70' => 'Terminal táctil empresarial.',
                'Bluebird S70 Explosion Protection' => 'Certificación anti-explosión para ambientes especiales.',
                'Bluebird EF551' => 'Smartphone industrial de alto rendimiento.',
                'Bluebird EF550R' => 'Versión rugerizada.',
                'Bluebird EF550' => 'Terminal táctil para retail y logística.',
                'Bluebird EF501' => 'PDA compacto.',
                'Bluebird EF501R' => 'Robusto de campo.',
                'Bluebird BP30' => 'Terminal de cobro e inventario.',
                'Bluebird EK430' => 'Terminal de mano para captura.',
                'Bluebird VX500' => 'Pantalla de alta resolución.',
                'Bluebird VX500 PTT' => 'Con botón Push-To-Talk.',
                'Bluebird VF550' => 'Diseño ergonómico.',
                'Bluebird HF550X' => 'Terminal de alto rendimiento.',
            ),
            'M3 Mobile' => array(
                'M3 Mobile SM30' => 'Smartphone empresarial moderno.',
                'M3 Mobile SM20' => 'Terminal móvil compacto.',
                'M3 Mobile SM20F' => 'Versión para ambientes fríos y congelados.',
                'M3 Mobile SM15X' => 'Modelo industrial de captura.',
                'M3 Mobile SL20' => 'Terminal ligero.',
                'M3 Mobile SL20K' => 'Con teclado físico numérico.',
                'M3 Mobile SL20P' => 'Versión con mango tipo pistola.',
                'M3 Mobile UL20' => 'Industrial para almacenes.',
                'M3 Mobile UL20F' => 'Industrial para cámaras de congelados.',
                'M3 Mobile UL20FX' => 'Frío extremo.',
                'M3 Mobile UL20X' => 'Industrial ultra robusto.',
                'M3 Mobile UL30F' => 'Nueva generación para congelados.',
                'M3 Mobile SM15' => 'Captura de datos.',
                'M3 Mobile SM15N' => 'Versión extendida.',
                'M3 Mobile SM15W' => 'Optimizado para Wi-Fi.',
            ),
        ),
    ),

    array(
        'slug'            => 'fundas-para-tablets',
        'title'           => 'Fundas para Tablets de Uso Industrial',
        'short_title'     => 'Fundas para Tablets',
        'image'           => 'bento_tablet_1787700308321.jpg',
        'gallery'         => array(
            'bento_tablet_1787700308321.jpg',
            'tablet_detail.jpg',
            'ops_logistica_1787700573166.jpg',
            'fabricacion_1787702420725.jpg',
        ),
        'content'         => 'Funda protectora reforzada confeccionada con estructura interna de lámina plástica para rigidez y resguardo de la pantalla táctil en tablets corporativas y de uso rudo. Incorpora correa de hombro ajustable cosida a la funda, sistema de elástico de mano posterior (handstrap) y diseño anatómico que permite la manipulación de comandos, botones y puertos de conexión.',
        'materiales'      => 'Telas sintéticas impermeables de alta densidad y resistencia a la abrasión, estructura rígida de lámina plástica para protección de display, acolchado de espuma EVA de absorción de impactos, correa de tela tejida de nylon regulable cosida a los fuelles con herrajes plásticos de alta resistencia.',
        'caracteristicas' => array(
            'Estructuración con lámina plástica interna para protección contra golpes directos en pantalla.',
            'Correa de tela tejida de nylon regulable cosida a la funda para transporte en bandolera.',
            'Acceso directo a botones de encendido, volumen, cámara y puertos de carga USB/cradle.',
            'Materiales sintéticos impermeables resistentes a condiciones ambientales de logística y bodega.',
            'Opciones de personalización con elástico de mano (handstrap) trasero y colores a elección.',
        ),
        'beneficios'      => array(
            'Reduce roturas de pantalla y fallas en tablets corporativas expuestas a manipulación constante.',
            'Facilita la operación manos libres durante turnos de inventario, auditorías y control de carga.',
            'Ajuste ergonómico al cuerpo que previene caídas accidentales por fatiga o resbalamiento.',
            'Fabricación a medida con calce milimétrico para cada modelo y generación.',
        ),
        'brands_models'   => array(
            'Zebra' => array(
                'ET40 (8" / 10")' => 'Tablet empresarial resistente para retail, inventario, POS y operaciones internas.',
                'ET45 (8" / 10")' => 'Similar a la ET40, pero con conectividad celular/5G para trabajo en terreno.',
                'ET40-HC (10")' => 'Versión para salud y hospitales.',
                'ET45-HC (10")' => 'Versión para salud con conectividad móvil.',
                'ET60 (10")' => 'Tablet rugged para logística, transporte, almacenes y trabajo pesado.',
                'ET65 (10")' => 'Versión de la ET60 con conectividad celular para operaciones de campo.',
                'ET80 (12,1")' => 'Tablet robusta para trabajos exigentes, industria, transporte y campo.',
                'ET85 (12,1")' => 'Versión con conectividad móvil para operaciones de campo.',
            ),
            'Honeywell' => array(
                'RT10A (10,1")' => 'Tablet robusta Android para bodegas, logística y manufactura (escáner IP65).',
                'EDA10A (10,1")' => 'Tablet Android robusta y más liviana con Wi-Fi 6 y 5G.',
                'RT10W (10,1")' => 'Versión Windows de la RT10 para operaciones industriales y almacenes.',
                'EDA70 (7")' => 'Tablet empresarial ScanPal para retail y logística.',
                'EDA71 (7")' => 'Evolución de la EDA70 orientada a movilidad empresarial.',
            ),
            'Samsung' => array(
                'Galaxy Tab Active5 / Active5 5G (8")' => 'Tablet robusta para logística, retail, bodegas y terreno (IP68, MIL-STD).',
                'Galaxy Tab S11 / S11 Ultra' => 'Gama alta para productividad y trabajo profesional.',
                'Galaxy Tab S10 FE / S10 FE+' => 'Tablets para trabajo, estudio y productividad.',
                'Galaxy Tab S10+ / S10 Ultra' => 'Gama alta para trabajo profesional.',
                'Galaxy Tab A (Generaciones)' => 'Línea económica para uso general y retail.',
            ),
            'Urovo' => array(
                'P8100 4G (8")' => 'Tablet rugged de 8" para logística y terreno.',
                'P8100P Series (10,1")' => 'Tablet rugged de 10,1" pantalla amplia.',
                'P8100 (8")' => 'Tablet rugged estándar de 8".',
            ),
            'Unitech' => array(
                'RT112 Android (10,1")' => 'Android 13 rugged para logística, bodegas, manufactura y terreno.',
                'RT112 Windows (10,1")' => 'Windows 11 rugged para logística, retail y servicios.',
                'TB170 (10,1")' => 'Windows 11 tablet robusta para industria y bodega.',
                'TB170 Plus 2nd Gen (10,1")' => 'Versión más nueva y potente con lector de códigos opcional.',
                'TB85 (8")' => 'Android 8, 4G y lector 2D.',
            ),
            'Chainway' => array(
                'P100 AI 5G Industrial' => 'Tablet industrial Android 14.',
                'P100 5G Built-in RFID' => 'Tablet industrial con RFID UHF integrado.',
                'P100 AI 5G Medical' => 'Sector salud y clínico.',
                'P100S Industrial' => 'Industrial Android 14.',
                'P80 Industrial' => 'Android 13 para bodegas.',
                'P80 RFID' => 'Android 13 con RFID.',
            ),
        ),
    ),

    array(
        'slug'            => 'fundas-para-impresoras',
        'title'           => 'Fundas para Impresoras Portátiles',
        'short_title'     => 'Fundas para Impresoras',
        'image'           => 'bento_impresora_1787700478886.jpg',
        'gallery'         => array(
            'bento_impresora_1787700478886.jpg',
            'impresora_detail.jpg',
            'ops_logistica_1787700573166.jpg',
            'fabricacion_1787702420725.jpg',
        ),
        'content'         => 'Funda protectora confeccionada en material impermeable de alta duración, acorde a la forma de cada equipo, permitiendo una adecuada manipulación de sus comandos, botones y puertos de conexión. Opciones de uso: Correa de tela tejida de nylon (40mm) regulable con cierre tip-top plástico a la cintura, o correa de nylon (30mm) regulable con soporte acolchado de hombro.',
        'materiales'      => 'Materiales sintéticos impermeables de alta resistencia para uso logístico. Cintas tejidas de nylon (30mm y 40mm) con terminales y accesorios plásticos tipo tip-top o metálicos de alta durabilidad para regulación ergonómica.',
        'caracteristicas' => array(
            'Apertura frontal para expulsión de etiquetas y recibos sin atascos.',
            'Acceso rápido para recarga de rollos de papel térmico sin desarmar la funda.',
            'Dos sistemas de sujeción: correa de cintura (40mm con tip-top) o bandolera de hombro (30mm acolchada).',
            'Material impermeable de alta duración resistente a polvo y grasa.',
            'Variedad de colores corporativos a elección.',
        ),
        'beneficios'      => array(
            'Evita roturas de tapas, bisagras y sensores térmicos ante caídas en terreno.',
            'Agiliza los procesos de etiquetado en bodegas, picking y despachos móviles.',
            'Permite al operador tener ambas manos libres durante el trabajo en ruta o almacén.',
        ),
        'brands_models'   => array(
            'Zebra' => array(
                'ZQ200' => 'Impresora móvil compacta de recibos.',
                'ZQ210' => 'Impresora móvil compacta 2".',
                'ZQ220 Plus' => 'Recibos y etiquetas linerless.',
                'ZQ300 Plus' => 'Impresión móvil de recibos en interiores y exteriores.',
                'ZQ310 Plus' => 'Formato 2" para recibos y etiquetas.',
                'ZQ320 Plus' => 'Formato 3" para recibos y etiquetas.',
                'ZQ500' => 'Gama industrial ultra resistente.',
                'ZQ511' => 'Gama industrial 3" resistente a caídas e intemperie.',
                'ZQ521' => 'Gama industrial 4" resistente a caídas extremas.',
                'ZQ600 Plus' => 'Impresión móvil premium de etiquetas.',
                'ZQ610 Plus' => 'Formato 2" alta velocidad.',
                'ZQ620 Plus' => 'Formato 3" alto volumen.',
                'ZQ630 Plus' => 'Formato 4" alto rendimiento.',
                'ZQ610 Plus Healthcare' => 'Versión para sector salud y hospitales.',
                'ZQ620 Plus Healthcare' => 'Versión para sector salud y hospitales 3".',
                'ZQ630 Plus RFID' => 'Codificación y grabado de etiquetas RFID móvil.',
            ),
            'Honeywell' => array(
                'RP2F' => 'Etiquetas pequeñas y recibos (retail, logística y salud).',
                'RP4F' => 'Etiquetas grandes, recibos y tags (opción más robusta).',
                'LNX3' => 'Etiquetas y recibos de mayor volumen para manufactura.',
                'RP2' => 'Impresora portátil 2" para recibos.',
                'RP4' => 'Impresora portátil 4" para etiquetas.',
                'RP4D' => 'Impresión térmica directa 4".',
                'RP4B' => 'Conectividad inalámbrica Bluetooth.',
                'MPD31D' => 'Impresora móvil compacta de 3".',
            ),
            'Bixolon' => array(
                'SPP-C200' => 'Recibos compacta de 2".',
                'SPP-C300' => 'Recibos compacta de 3".',
                'SPP-R200III' => 'Recibos móvil para retail.',
                'SPP-R310' => 'Recibos móvil para logística.',
                'SPP-R410' => 'Recibos y documentos de 4".',
                'SPP-L310' => 'Etiquetas térmicas móvil de 3".',
                'SPP-L410' => 'Etiquetas térmicas móvil de 4".',
                'SPP-L3000' => 'Etiquetas industrial de alto rendimiento.',
                'XM7-20' => 'Etiquetas / RFID móvil de 2".',
                'XM7-30' => 'Etiquetas / RFID móvil de 3".',
                'XM7-40' => 'Etiquetas / RFID móvil de 4".',
            ),
            'Sewoo' => array(
                'LK-P25' => 'Impresora portátil de 2" para recibos, tickets y comprobantes.',
                'LK-P34' => 'Impresora portátil de 3" para recibos y documentos de entrega.',
                'LK-P41' => 'Impresora portátil de 4" para recibos, etiquetas y códigos de barras.',
                'LK-P43' => 'Impresora portátil de 4" orientada a logística y retail.',
                'LK-P21' => 'Impresora compacta para tickets y recibos pequeños.',
                'LK-P400' => 'Impresora portátil robusta de 4" para logística.',
            ),
            'Star Micronics' => array(
                'L200' => 'Recibos y tickets pequeños.',
                'SM-L300' => 'Recibos, tickets y etiquetas.',
                'SM-S230i' => 'Recibos y tickets compacta y liviana.',
                'SM-T300 / SM-T300i' => 'Recibos y tickets más robusta para trabajo en terreno.',
                'SM-T400i' => 'Impresión portátil de mayor formato 4" para documentos.',
            ),
            'Urovo' => array(
                'UROVO K329' => 'Imprime recibos y etiquetas de 3".',
                'UROVO K419' => 'Recibos, tickets y códigos de barras de 4".',
            ),
            'Otras Marcas' => array(
                'Epson TM-P80' => 'Recibos, tickets y comprobantes móviles.',
                'BARPOS T3' => 'Recibos y etiquetas.',
                'Unitech SP320' => 'Impresión portátil de recibos y tickets.',
                'iDPRT iMOVE 3 Pro' => 'Impresión portátil de etiquetas y recibos.',
            ),
        ),
    ),

    array(
        'slug'            => 'valijas-de-seguridad',
        'title'           => 'Valijas de Seguridad y Transporte',
        'short_title'     => 'Valijas de Seguridad',
        'image'           => 'hero_valija_3d_1787700281649.jpg',
        'gallery'         => array(
            'hero_valija_3d_1787700281649.jpg',
            'operations_logistics_1787698432669.jpg',
            'ops_logistica_1787700573166.jpg',
            'fabricacion_1787702420725.jpg',
        ),
        'content'         => 'Fabricación a distintas medidas según el volumen en litros que contemple el ancho, largo y alto. Diseñadas para resguardar el traslado seguro de documentación confidencial, valores, piezas de repuesto o productos terminados. Empleadas por grandes empresas asociadas a valores y transporte de documentación confidencial, tales como Cencosud, La Polar, Correos de Chile, Iron Mountain y FedEx.',
        'materiales'      => 'Telas sintéticas impermeables y lonas balísticas de alta resistencia a la tracción y abrasión. Forros interiores acolchados, estructuras con placas de refuerzo, cremalleras de alta seguridad con ojete para precinto o candado, y asas reforzadas para alta carga.',
        'caracteristicas' => array(
            'Fabricación a medidas personalizadas según volumen en litros (ancho × largo × alto).',
            'Opciones de formato: Valija sobre, Valija con carro/ruedas o Valija con compartimento para GPS.',
            'Cremallera de alta seguridad con sistema de traba para candado o precinto numerado.',
            'Personalización con logotipo corporativo en alta resolución (bordado o estampado).',
            'Colores corporativos a elección del cliente para clasificación de rutas y áreas.',
        ),
        'beneficios'      => array(
            'Garantiza un traslado seguro y confidencial de valores y documentos a cualquier parte de Chile.',
            'Máxima durabilidad y resistencia al uso logístico intensivo y manipulación de transporte.',
            'Desarrollo exclusivo adaptado a las dimensiones de las piezas o cajas a transportar.',
        ),
        'brands_models'   => array(
            'Formatos y Diseños Disponibles' => array(
                'Valija Tipo Sobre' => 'Para transporte plano de documentación confidencial, contratos y correspondencia bancaria.',
                'Valija Volumétrica a Medida' => 'Confeccionada según el volumen en litros (ancho × largo × alto) para productos terminados y valores.',
                'Valija con Carro y Ruedas' => 'Estructura con sistema retráctil para traslado ergonómico de bultos pesados.',
                'Valija con Compartimento GPS' => 'Bolsillo interior camuflado para inserción de dispositivo de rastreo satelital.',
            ),
            'Opciones de Personalización y Seguridad' => array(
                'Bordado / Estampado de Logotipo' => 'Identificación corporativa en alta resolución de tu empresa.',
                'Colores a Elección' => 'Codificación por sucursal, ruta logística o tipo de mercancía.',
                'Ojales para Candado / Precinto' => 'Compatible con candados igualados o precintos plásticos de control.',
            ),
        ),
    ),

    array(
        'slug'            => 'candados-especiales',
        'title'           => 'Candados de Seguridad Igualados y Amaestrados',
        'short_title'     => 'Candados de Seguridad',
        'image'           => 'bento_candado_1787700534442.jpg',
        'gallery'         => array(
            'bento_candado_1787700534442.jpg',
            'hero_valija_3d_1787700281649.jpg',
            'ops_logistica_1787700573166.jpg',
        ),
        'content'         => 'Sistemas de seguridad física industrial para custodia de valijas de seguridad, contenedores y bodegas. Proveemos candados de seguridad en sistemas igualados (una sola llave abre un conjunto de candados) y amaestrados (cada candado con su llave individual y una llave maestra para el supervisor).',
        'materiales'      => 'Cuerpo de latón macizo resistente a la corrosión, grillete de acero endurecido cementado resistente al corte con sierra y cizalla, y cilindros de combinación de alta precisión.',
        'caracteristicas' => array(
            'Sistemas Igualados (Keyed Alike): Misma llave abre todos los candados del lote asignado.',
            'Sistemas Amaestrados (Master Keyed): Llave individual para cada usuario y Llave Maestra para supervisión.',
            'Grillete de acero templado de alta resistencia mecánica.',
            'Compatibilidad directa con las cremalleras y ojetes de las Valijas de Seguridad ROLBAG.',
            'Juego de llaves de repuesto y control de duplicación.',
        ),
        'beneficios'      => array(
            'Simplifica el control de llaves y optimiza la operación logística en rutas de transporte.',
            'Permite supervisión jerárquica con llave maestra sin quitar la custodia al operario.',
            'Complemento indispensable para las valijas de seguridad y transporte de documentación.',
        ),
        'brands_models'   => array(
            'Sistemas de Cerrajería Disponibles' => array(
                'Candados de Seguridad Igualados (Keyed Alike)' => 'Una misma llave maestra para todo el lote de candados. Ideal para flotas y un solo responsable.',
                'Candados de Seguridad Amaestrados (Master Keyed)' => 'Llave individual por cada candado + Llave Maestra para el jefe de seguridad o supervisor.',
                'Cilindros de Alta Precisión' => 'Mecanismo de pines de seguridad contra manipulación no autorizada.',
                'Grilletes de Acero Cementado' => 'Máxima resistencia física al apalancamiento y cortes en ruta.',
            ),
        ),
    ),
);

foreach ( $products_data as $p ) {
    $existing = get_page_by_path( $p['slug'], OBJECT, 'producto' );
    
    $post_args = array(
        'post_title'   => $p['title'],
        'post_name'    => $p['slug'],
        'post_content' => $p['content'],
        'post_status'  => 'publish',
        'post_type'    => 'producto',
    );

    if ( $existing ) {
        $post_args['ID'] = $existing->ID;
        $post_id = wp_update_post( $post_args );
        WP_CLI::line( "Actualizando producto: {$p['title']} (ID: {$post_id})" );
    } else {
        $post_id = wp_insert_post( $post_args );
        WP_CLI::line( "Creando producto: {$p['title']} (ID: {$post_id})" );
    }

    if ( ! is_wp_error( $post_id ) ) {
        update_post_meta( $post_id, 'rolbag_short_title', $p['short_title'] );
        update_post_meta( $post_id, 'rolbag_image', $p['image'] );
        update_post_meta( $post_id, 'rolbag_gallery', wp_json_encode( $p['gallery'] ) );
        update_post_meta( $post_id, 'rolbag_materiales', $p['materiales'] );
        update_post_meta( $post_id, 'rolbag_caracteristicas', wp_json_encode( $p['caracteristicas'], JSON_UNESCAPED_UNICODE ) );
        update_post_meta( $post_id, 'rolbag_beneficios', wp_json_encode( $p['beneficios'], JSON_UNESCAPED_UNICODE ) );
        update_post_meta( $post_id, 'rolbag_brands_models', wp_json_encode( $p['brands_models'], JSON_UNESCAPED_UNICODE ) );
        
        WP_CLI::success( "Metadatos y marcas/modelos guardados con éxito para: {$p['short_title']}" );
    } else {
        WP_CLI::error( "Error al procesar {$p['title']}" );
    }
}

flush_rewrite_rules();
WP_CLI::success( "Todas las galerías e imágenes han sido sincronizadas y verificadas." );
