<?php
/**
 * Synchronize complete brand and model compatibility for all ROLBAG products
 * based on the verified briefing document.
 */
require_once __DIR__ . '/../wp-load.php';

$catalog = array(
    'fundas-para-capturadores' => array(
        'Zebra' => array(
            'TC22' => 'Wi-Fi 6E, pantalla 6", lector de códigos. Gama nueva y económica.',
            'TC26' => 'Conectividad celular 4G/LTE para terreno.',
            'TC27' => 'Similar al TC22, con conectividad 5G.',
            'TC53' => 'Gama empresarial, Wi-Fi 6E.',
            'TC58' => 'Versión con 5G, orientada a trabajos exigentes.',
            'TC53e' => 'Evolución del TC53 con hardware avanzado.',
            'TC58e' => 'Evolución del TC58 con conectividad 5G.',
            'TC53e RFID' => 'TC53e con funciones RFID integradas.',
            'TC73' => 'Gama robusta e industrial ultra resistente.',
            'TC78' => 'Versión 5G de la familia robusta industrial.',
            'MC3300ax' => 'Terminal con teclado físico para bodegas y logística.',
            'MC3400' => 'Terminal industrial de almacén.',
            'MC3450' => 'Terminal industrial avanzado de almacén.',
            'MC9400' => 'Gama ultra robusta para logística pesada y bodegas.',
            'MC9450' => 'Versión 5G ultra robusta para logística pesada.',
        ),
        'Honeywell' => array(
            'CT30 XP' => 'Compacto, tipo smartphone empresarial.',
            'CT37' => 'Compacto para retail, logística y despacho.',
            'CT45' => 'Robusto, uso general en almacén.',
            'CT45 XP' => 'Robusto, versión más avanzada.',
            'CT47' => 'Ultra resistente + 5G.',
            'CT60 XP' => 'Robusto, captura intensiva de datos.',
            'EDA51' => 'ScanPal, gama intermedia confiable.',
            'EDA52' => 'ScanPal, económico e intermedio.',
            'EDA56' => 'ScanPal, moderno con Wi-Fi 6.',
            'CK62' => 'Industrial con teclado físico.',
            'CK65' => 'Industrial con teclado ultra resistente para bodega.',
            'CK75' => 'Industrial robusto para almacenes, logística y distribución.',
            'EDA61K' => 'Resistente a múltiples caídas, robusto con teclado.',
            'CW45' => 'Wearable, se lleva ergonómicamente en el cuerpo.',
        ),
        'Unitech' => array(
            'EA530' => 'Smartphone industrial 6".',
            'EA530UHF' => 'Con módulo RFID UHF integrado.',
            'EA530 + RFID UHF' => 'Inventario y lectura RFID masiva.',
            'EA660' => 'Smartphone industrial 6" con 5G.',
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
            'Memor 20' => 'Retail, inventario y logística empresarial.',
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
            'DT50 5G' => 'Logística, transporte, retail y terreno.',
            'DT66' => 'Retail, logística, inventario y entregas.',
            'DT630' => 'Transporte, logística, distribución y trabajo en terreno.',
            'CT48' => 'Retail, inventario, bodegas y picking.',
            'CT48C' => 'Retail, inventario y gestión de productos.',
            'CT58S' => 'Almacenes, logística, retail y delivery.',
            'RT30' => 'Retail, inventario y operaciones de tienda.',
            'RT40S' => 'Industria, almacenes, logística y ambientes exigentes.',
            'DT610' => 'Inventario, logística, almacenes y gestión de activos (RFID).',
            'DT50P Lite' => 'Inventario, retail, almacenes y control de activos.',
            'DT50(P)' => 'Logística, inventario y trazabilidad.',
            'DT50(D)' => 'Industria, almacenes y control de activos.',
        ),
        'Newland' => array(
            'MT65 Beluga IV' => 'Terminal compacto pensado para retail y logística.',
            'MT65 Beluga Lite' => 'Versión sencilla portátil con teclado físico.',
            'MT65 Beluga V' => 'Adecuado para capturadores de datos en terreno.',
            'MT67 Sei' => 'Terminal móvil robusto para almacenes y retail.',
            'MT90 Orca III' => 'Pantalla táctil para ambiente de trabajo exigente.',
            'MT90 Orca Pro' => 'Terminal PDA industrial para captura de datos profesional.',
            'MT90 Orca Pro II' => 'Generación avanzada con diseño robusto.',
            'MT93 Megattera' => 'Pensado para logística, almacenes, retail y campo.',
            'MT95 Kambur Pro' => 'Captura intensiva de datos y códigos industriales.',
            'MT95 Kambur Pro II' => 'Hardware moderno y conectividad mejorada.',
            'MT95 Kambur Pro III' => 'Terminal robusto con pantalla grande.',
            'N7 Cachalot Pro II' => 'Formato PDA industrial para almacenamiento y distribución.',
        ),
        'CipherLab' => array(
            'CipherLab RK96' => 'Terminal industrial robusto para almacenes y logística.',
            'CipherLab RS38' => 'Terminal móvil moderno de 6" para retail y terreno.',
            'CipherLab RS38H' => 'Versión enfocada en sector sanitario/healthcare.',
            'CipherLab RS36' => 'Terminal compacto de 4,3" para inventarios y logística.',
            'CipherLab RK26' => 'Terminal compacto con pantalla táctil y teclado físico.',
            'CipherLab RK95' => 'Terminal industrial orientado a centros de distribución.',
            'CipherLab Hera51' => 'Robusto para movilidad empresarial y trabajo de campo.',
            'CipherLab RS51' => 'PDA robusto de 4,7" para transporte y entregas.',
            'CipherLab RS35' => 'Terminal táctil compacto para retail e inventarios.',
            'CipherLab RK25' => 'Terminal robusto con pantalla táctil y teclado numérico físico.',
            'CipherLab 9700' => 'Terminal industrial grande y resistente para bodegas.',
            'CipherLab RS50' => 'Terminal móvil táctil para logística e inventario.',
            'CipherLab RS31' => 'Terminal móvil táctil para retail, inventarios y logística.',
        ),
        'Wepoy' => array(
            'Wepoy DT30' => 'Captura de códigos, inventarios, retail y logística.',
            'Wepoy DT40' => 'Terminal móvil robusto para operaciones de campo.',
            'Wepoy DT50B' => 'Formato smartphone industrial para retail y terreno.',
            'Wepoy DT50S' => 'Ultrarresistente para faenas dentro y fuera de almacenes.',
            'Wepoy CT48' => 'Diseñado para captura intensiva de datos.',
            'Wepoy DT50U' => 'Especializado en RFID UHF para lectura masiva.',
            'Wepoy CT58S' => 'Formato PDA industrial con lector de códigos integrado.',
            'Wepoy RT40' => 'Industrial robusto para manufactura y logística exigente.',
            'Wepoy DT630' => 'Pensado para movilidad y captura de datos.',
            'Wepoy DT610' => 'Diseñado para lectura y gestión de etiquetas UHF RFID.',
            'Wepoy DT66' => 'Pantalla amplia para optimizar la visualización de datos.',
        ),
        'Chainway' => array(
            'Chainway C61' => 'Terminal móvil industrial con teclado físico.',
            'Chainway C63' => 'PDA robusto para retail y almacenes.',
            'Chainway C66' => 'Terminal portátil de pantalla completa para terreno.',
            'Chainway C70' => 'PDA compacto para logística ligera.',
            'Chainway C71' => 'Terminal empresarial para inventario.',
            'Chainway C72' => 'Terminal con antena RFID UHF integrada.',
            'Chainway C75' => 'Terminal con impresora térmica integrada.',
            'Chainway C90' => 'Smartphone industrial de alta velocidad.',
            'Chainway C6000' => 'Terminal clásico robusto para inventario.',
            'Chainway MC21' => 'Terminal móvil ligero para retail.',
            'Chainway MC50 5G' => 'Conectividad celular 5G para trabajo en terreno.',
            'Chainway MC51 5G' => 'Gama moderna 5G de alta eficiencia.',
            'Chainway MC51S' => 'Versión optimizada con lector de códigos 2D.',
            'Chainway MC62' => 'Terminal industrial para almacenes y transporte.',
            'Chainway MC95' => 'Terminal robusto para distribución intensiva.',
            'Chainway C90A' => 'Variante con batería de alta capacidad.',
        ),
        'Bluebird' => array(
            'Bluebird S70' => 'Terminal móvil industrial para logística.',
            'Bluebird S70 Explosion Protection' => 'Certificación para ambientes con riesgo de explosión (ATEX).',
            'Bluebird EF551' => 'Smartphone empresarial de última generación.',
            'Bluebird EF550R' => 'Versión robusta reforzada para bodegas.',
            'Bluebird EF550' => 'Pantalla de alta visibilidad para retail.',
            'Bluebird EF501' => 'Terminal móvil de uso continuo en logística.',
            'Bluebird EF501R' => 'Terminal rugerizado para faenas exigentes.',
            'Bluebird BP30' => 'Terminal de cobro e inventario.',
            'Bluebird EK430' => 'Terminal de mano compacto para captura.',
            'Bluebird VX500' => 'Pantalla de alta resolución para operaciones de campo.',
            'Bluebird VX500 PTT' => 'Con botón Push-To-Talk para radiocomunicación.',
            'Bluebird VF550' => 'Diseño ergonómico para uso prolongado.',
            'Bluebird HF550X' => 'Terminal de alto rendimiento para logística pesada.',
        ),
        'M3 Mobile' => array(
            'M3 Mobile SM30' => 'Smartphone empresarial moderno.',
            'M3 Mobile SM20' => 'Terminal móvil compacto para retail.',
            'M3 Mobile SM20F' => 'Versión para ambientes fríos y congelados.',
            'M3 Mobile SM15X' => 'Modelo industrial de captura.',
            'M3 Mobile SL20' => 'Terminal ligero para inventario.',
            'M3 Mobile SL20K' => 'Con teclado físico numérico.',
            'M3 Mobile SL20P' => 'Versión con mango tipo pistola.',
            'M3 Mobile UL20' => 'Industrial para almacenes y bodegas.',
            'M3 Mobile UL20F' => 'Industrial para cámaras de congelados.',
            'M3 Mobile UL20FX' => 'Frío extremo y condensación controlada.',
            'M3 Mobile UL20X' => 'Industrial ultra robusto para faenas pesadas.',
            'M3 Mobile UL30F' => 'Nueva generación para congelados.',
            'M3 Mobile SM15' => 'Captura de datos en terreno.',
            'M3 Mobile SM15N' => 'Versión extendida de alta autonomía.',
            'M3 Mobile SM15W' => 'Optimizado para Wi-Fi de alta densidad.',
        ),
    ),

    'fundas-para-tablets' => array(
        'Zebra' => array(
            'ET40 (8" / 10")' => 'Tablet empresarial resistente para retail, inventario, POS y operaciones internas.',
            'ET45 (8" / 10")' => 'Similar a la ET40, pero con conectividad celular/5G para trabajo en terreno.',
            'ET40-HC (10")' => 'Versión especializada para salud y hospitales.',
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
            'EDA70 (7")' => 'Tablet empresarial ScanPal para retail, logística y captura de datos.',
            'EDA71 (7")' => 'Evolución de la EDA70 orientada a movilidad empresarial.',
        ),
        'Samsung' => array(
            'Galaxy Tab Active5 / Active5 5G (8")' => 'Tablet robusta para logística, retail, bodegas y terreno (IP68, MIL-STD).',
            'Galaxy Tab S11 / S11 Ultra' => 'Gama alta para productividad, trabajo profesional y uso empresarial.',
            'Galaxy Tab S10 FE / S10 FE+' => 'Tablets para trabajo, estudio y productividad en terreno.',
            'Galaxy Tab S10+ / S10 Ultra' => 'Gama alta para trabajo profesional y operaciones.',
            'Galaxy Tab A (Generaciones)' => 'Línea para uso general, retail y tareas básicas.',
        ),
        'Urovo' => array(
            'P8100 4G (8")' => 'Tablet rugged de 8" para logística y terreno.',
            'P8100P Series (10,1")' => 'Tablet rugged de 10,1" pantalla amplia para almacenes y gestión.',
            'P8100 (8")' => 'Tablet rugged estándar de 8".',
        ),
        'Unitech' => array(
            'RT112 Android (4ª Gen - 10,1")' => 'Android 13 rugged para logística, bodegas, manufactura y terreno.',
            'RT112 Windows (10,1")' => 'Windows 11 rugged para logística, retail y faenas.',
            'TB170 (10,1")' => 'Windows 11 tablet robusta para industria y bodega.',
            'TB170 Plus 2nd Gen (10,1")' => 'Versión más nueva y potente con lector de códigos opcional.',
            'TB85 (8")' => 'Android con conectividad 4G y lector de código 2D.',
        ),
        'Chainway' => array(
            'P100 AI 5G Industrial' => 'Tablet industrial Android 14.',
            'P100 5G Built-in RFID' => 'Con módulo RFID UHF de lectura masiva integrado.',
            'P100 AI 5G Medical' => 'Diseñada para entornos clínicos y sector salud.',
            'P100S Industrial' => 'Formato reforzado Android 14 para faenas.',
            'P80 Industrial' => 'Android 13 para almacenes y centros de distribución.',
            'P80 RFID' => 'Android 13 con antena y lectura RFID de largo alcance.',
        ),
        'Panasonic' => array(
            'Toughbook G2 (10,1")' => 'Tablet modular totalmente reforzada para minería, logística y faenas.',
            'Toughbook 33 (12")' => 'Tablet 2 en 1 ultra resistente con pantalla dual touch y batería hot-swap.',
            'Toughbook A3 (10,1")' => 'Tablet Android reforzada para operaciones de campo y bodegas.',
            'Toughbook 55' => 'Equipo semirrobusto modular para vehículos industriales y terreno.',
        ),
    ),

    'fundas-para-impresoras' => array(
        'Zebra' => array(
            'ZQ200' => 'Impresora móvil compacta de recibos.',
            'ZQ210' => 'Impresora móvil compacta de 2 pulgadas.',
            'ZQ220 Plus' => 'Recibos y etiquetas linerless.',
            'ZQ300 Plus' => 'Impresión móvil de recibos en interiores y exteriores.',
            'ZQ310 Plus' => 'Formato 2 pulgadas para recibos y etiquetas.',
            'ZQ320 Plus' => 'Formato 3 pulgadas para recibos y etiquetas.',
            'ZQ500' => 'Gama industrial ultra resistente.',
            'ZQ511' => 'Gama industrial de 3 pulgadas resistente a caídas e intemperie.',
            'ZQ521' => 'Gama industrial de 4 pulgadas resistente a caídas extremas.',
            'ZQ600 Plus' => 'Impresión móvil premium de etiquetas.',
            'ZQ610 Plus' => 'Formato 2 pulgadas alta velocidad.',
            'ZQ620 Plus' => 'Formato 3 pulgadas alto volumen.',
            'ZQ630 Plus' => 'Formato 4 pulgadas alto rendimiento.',
            'ZQ610 Plus Healthcare' => 'Versión para sector salud y hospitales.',
            'ZQ620 Plus Healthcare' => 'Versión para sector salud y hospitales (3 pulgadas).',
            'ZQ630 Plus RFID' => 'Codificación y grabado de etiquetas RFID móvil.',
        ),
        'Honeywell' => array(
            'RP2F' => 'Etiquetas pequeñas y recibos (retail, logística, almacenes y salud).',
            'RP4F' => 'Etiquetas grandes, recibos y tags (opción más grande y robusta).',
            'LNX3' => 'Etiquetas y recibos de mayor volumen para retail, logística y manufactura.',
            'RP2' => 'Impresora portátil de 2 pulgadas para recibos.',
            'RP4' => 'Impresora portátil de 4 pulgadas para etiquetas.',
            'RP4D' => 'Impresión térmica directa de 4 pulgadas.',
            'RP4B' => 'Conectividad inalámbrica Bluetooth.',
            'MPD31D' => 'Impresora móvil compacta de 3 pulgadas.',
        ),
        'Bixolon' => array(
            'SPP-C200' => 'Impresora portátil de recibos compacta de 2 pulgadas.',
            'SPP-C300' => 'Impresora portátil de recibos compacta de 3 pulgadas.',
            'SPP-R200III' => 'Recibos móvil para retail y comercio.',
            'SPP-R310' => 'Recibos móvil para logística y bodegas.',
            'SPP-R410' => 'Recibos y documentos anchos de 4 pulgadas.',
            'SPP-L310' => 'Etiquetas térmicas móvil de 3 pulgadas.',
            'SPP-L410' => 'Etiquetas térmicas móvil de 4 pulgadas.',
            'SPP-L3000' => 'Impresora de etiquetas industrial de alto rendimiento.',
            'XM7-20' => 'Impresora de etiquetas y RFID móvil de 2 pulgadas.',
            'XM7-30' => 'Impresora de etiquetas y RFID móvil de 3 pulgadas.',
            'XM7-40' => 'Impresora de etiquetas y RFID móvil de 4 pulgadas.',
        ),
        'Urovo' => array(
            'UROVO K329' => 'Imprime recibos y etiquetas térmicas de 3 pulgadas.',
            'UROVO K419' => 'Recibos, tickets y códigos de barras de 4 pulgadas.',
        ),
        'Sewoo' => array(
            'LK-P25' => 'Impresora portátil de 2 pulgadas para recibos, tickets y comprobantes.',
            'LK-P34' => 'Impresora portátil de 3 pulgadas para recibos y documentos de entrega.',
            'LK-P41' => 'Impresora portátil de 4 pulgadas para recibos, etiquetas y códigos de barras.',
            'LK-P43' => 'Impresora portátil de 4 pulgadas orientada a logística y retail.',
            'LK-P21' => 'Impresora compacta para tickets y recibos pequeños.',
            'LK-P400' => 'Impresora portátil robusta de 4 pulgadas para logística.',
        ),
        'Star Micronics' => array(
            'L200' => 'Recibos y tickets pequeños.',
            'SM-L300' => 'Recibos, tickets y etiquetas.',
            'SM-S230i' => 'Recibos, tickets y etiquetas; compacta y liviana.',
            'SM-T300 / SM-T300i' => 'Recibos, tickets y etiquetas; más robusta para trabajo en terreno.',
            'SM-T400i' => 'Impresión portátil de mayor formato (4 pulgadas) para documentos y tickets.',
        ),
        'Epson y Otras Marcas' => array(
            'Epson TM-P80' => 'Recibos, tickets y comprobantes móviles (boleta electrónica).',
            'Epson TM-P20' => 'Impresora portátil ultra ligera de 2 pulgadas para recibos móviles.',
            'BARPOS T3' => 'Recibos y etiquetas para faenas logísticas.',
            'Unitech SP320' => 'Impresión portátil de recibos y tickets en ruta.',
            'iDPRT iMOVE 3 Pro' => 'Impresión portátil de etiquetas y recibos.',
        ),
    ),

    'fundas-para-pos-moviles' => array(
        'Sunmi' => array(
            'SUNMI V3 PLUS' => 'Terminal POS móvil de última generación con pantalla grande.',
            'SUNMI V3e' => 'Versión ligera y compacta para cobro móvil.',
            'SUNMI V3 Family' => 'Gama integrada para punto de venta.',
            'SUNMI V3 MIX' => 'Terminal híbrido POS con pantalla rotativa y alta velocidad.',
            'SUNMI V2 PRO' => 'Terminal móvil con impresora térmica integrada y escáner.',
            'SUNMI V2s PLUS' => 'Hardware mejorado para delivery y retail exigente.',
            'SUNMI V2s' => 'Uno de los terminales POS más extendidos en terreno.',
        ),
        'PAX (Mercado Libre)' => array(
            'PAX A920' => 'Terminal Smart POS Android con pantalla táctil e impresora.',
            'PAX A920 Pro' => 'Uno de los más comunes en Chile (Mercado Pago, Transbank, etc.).',
            'PAX A910S' => 'Formato compacto de alto rendimiento.',
            'PAX A77' => 'Formato tipo smartphone de bolsillo para cobro rápido.',
            'PAX A50 / A50S' => 'Mini POS portátil ultraligero.',
            'PAX A8900' => 'Terminal industrial avanzado para transacciones de alto volumen.',
        ),
        'Castles' => array(
            'Castles S1E2' => 'Terminal POS táctil con certificación bancaria.',
            'Castles S1F3' => 'Smart POS móvil con impresora rápida.',
            'Castles S1P' => 'Terminal portátil de cobro con conectividad 4G.',
            'Castles VEGA3000' => 'Terminal robusto para transporte y retail.',
            'Castles MP200' => 'Lector mPOS compacto.',
            'Castles Saturn1000' => 'Gama de alta seguridad para pagos móviles.',
        ),
        'TUU' => array(
            'TUU Pro 2' => 'Terminal de cobro Smart POS con pantalla táctil.',
            'TUU Pro 2 S' => 'Versión mejorada con conectividad rápida.',
            'TUU Pro' => 'Smart POS estándar para retail.',
            'TUU SE' => 'Formato compacto y económico.',
            'TUU Mini' => 'Lector mPOS ultra portátil.',
            'TUU Mini S' => 'Lector mPOS con Bluetooth optimizado.',
            'TUU P2' => 'Terminal integrado de cobro con impresora.',
            'TUU P2 SE' => 'Versión ligera para reparto.',
        ),
    ),

    'valijas-de-seguridad' => array(
        'Valijas Grandes' => array(
            'VS - 40R' => 'Alto: 50 cm | Ancho: 40 cm | Fuelle: 20 cm — Capacidad: 40 Litros.',
            'VS - 48R' => 'Alto: 60 cm | Ancho: 40 cm | Fuelle: 20 cm — Capacidad: 48 Litros.',
            'VS - 55R' => 'Alto: 50 cm | Ancho: 50 cm | Fuelle: 22 cm — Capacidad: 55 Litros.',
            'VS - 65R' => 'Alto: 65 cm | Ancho: 50 cm | Fuelle: 20 cm — Capacidad: 65 Litros.',
            'VS - 80R' => 'Alto: 65 cm | Ancho: 50 cm | Fuelle: 25 cm — Capacidad: 80 Litros.',
        ),
        'Valijas Medianas' => array(
            'VS - 16R' => 'Alto: 35 cm | Ancho: 26 cm | Fuelle: 18 cm — Capacidad: 16 Litros.',
            'VS - 20R' => 'Alto: 45 cm | Ancho: 26 cm | Fuelle: 18 cm — Capacidad: 20 Litros.',
            'VS - 25R' => 'Alto: 55 cm | Ancho: 30 cm | Fuelle: 18 cm — Capacidad: 25 Litros.',
        ),
        'Valijas Tipo Sobre' => array(
            'VS - 30 COR' => 'Alto: 30 cm | Ancho: 30 cm | Fuelle: 1 cm — Formato plano para documentos.',
            'VS - 35 COR' => 'Alto: 35 cm | Ancho: 30 cm | Fuelle: 1 cm — Correspondencia confidencial.',
            'VS - 38 COR' => 'Alto: 38 cm | Ancho: 30 cm | Fuelle: 1 cm — Mayor capacidad para carpetas.',
        ),
        'Diseños y Opciones Especiales' => array(
            'Valijas con Carro de Arrastre' => 'Estructura reforzada y ruedas industriales para traslados pesados.',
            'Valijas con Compartimento GPS' => 'Bolsillo interior oculto con blindaje y fijación para rastreador satelital.',
            'Impresión Personalizada (IL-4C)' => 'Estampado de logotipo corporativo, folios y numeración correlativa.',
            'Fabricación Especial a Medida' => 'Cualquier dimensión especial desarrollada en 48 horas según tu requerimiento.',
        ),
    ),

    'candados-especiales' => array(
        'Sistemas de Cerrajería Disponibles' => array(
            'Candados de Seguridad Igualados (Keyed Alike)' => 'Una misma llave maestra para todo el lote de candados. Ideal para flotas y un solo responsable.',
            'Candados de Seguridad Amaestrados (Master Keyed)' => 'Llave individual por cada candado + Llave Maestra para el jefe de seguridad o supervisor.',
            'Cilindros de Alta Precisión' => 'Mecanismo de pines de seguridad contra manipulación no autorizada.',
            'Grilletes de Acero Cementado' => 'Máxima resistencia física al apalancamiento y cortes en ruta.',
        ),
    ),
);

global $wpdb;

echo "=== SINCRONIZANDO MARCAS Y MODELOS DESDE BRIEFING OFICIAL ===\n\n";

foreach ( $catalog as $slug => $brands_models ) {
    $post = $wpdb->get_row( $wpdb->prepare( "SELECT ID, post_title FROM {$wpdb->posts} WHERE post_name = %s AND post_type = 'producto' LIMIT 1", $slug ) );
    
    if ( ! $post ) {
        echo "[ADVERTENCIA] No se encontró el producto con slug '{$slug}' en la base de datos.\n";
        continue;
    }

    $clean_brands_models = array();
    foreach ( $brands_models as $b_name => $m_list ) {
        $clean_b_name = str_replace( '"', '”', $b_name );
        $clean_brands_models[$clean_b_name] = array();
        foreach ( $m_list as $m_key => $m_desc ) {
            $clean_key = str_replace( '"', '”', $m_key );
            $clean_desc = str_replace( '"', '”', $m_desc );
            $clean_brands_models[$clean_b_name][$clean_key] = $clean_desc;
        }
    }

    $json_value = wp_json_encode( $clean_brands_models, JSON_UNESCAPED_UNICODE );

    // Actualizar post_meta con wp_slash para evitar desescapado de barras
    update_post_meta( $post->ID, 'rolbag_brands_models', wp_slash( $json_value ) );

    // Validar decodificación
    $raw_meta = get_post_meta( $post->ID, 'rolbag_brands_models', true );
    $test_decode = json_decode( $raw_meta, true );
    $brand_count = is_array( $test_decode ) ? count( $test_decode ) : 0;
    $model_count = 0;
    if ( is_array( $test_decode ) ) {
        foreach ( $test_decode as $b => $m ) {
            $model_count += is_array( $m ) ? count( $m ) : 1;
        }
    }

    echo "[OK] Producto: {$post->post_title} (ID: {$post->ID})\n";
    echo "     Slug: {$slug}\n";
    echo "     Marcas: {$brand_count} | Modelos/Opciones: {$model_count}\n";
    echo "     Marcas listadas: " . implode( ', ', array_keys( $brands_models ) ) . "\n\n";
}

echo "=== SINCRONIZACIÓN EXITOSA ===\n";
