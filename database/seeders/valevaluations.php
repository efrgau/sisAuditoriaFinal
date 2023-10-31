<?php

namespace Database\Seeders;

use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class valevaluations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('valevaluations')->delete();
        DB::table('valevaluations')->insert(['id' => 1, 'subcategoryId' => '1', 'abrevalorcat' => 'ID.AM-1', 'nombreValorcat' => ' Los dispositivos y sistemas físicos dentro de la organización están inventariados.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 2, 'subcategoryId' => '1', 'abrevalorcat' => 'ID.AM-2', 'nombreValorcat' => ' Las plataformas de software y las aplicaciones dentro de la organización están inventariadas.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 3, 'subcategoryId' => '1', 'abrevalorcat' => 'ID.AM-3', 'nombreValorcat' => ' La comunicación organizacional y los flujos de datos están mapeados.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 4, 'subcategoryId' => '1', 'abrevalorcat' => 'ID.AM-4', 'nombreValorcat' => ' Los sistemas de información externos están catalogados.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 5, 'subcategoryId' => '1', 'abrevalorcat' => 'ID.AM-5', 'nombreValorcat' => ' Los recursos (por ejemplo, hardware, dispositivos, datos, tiempo, personal y software) se priorizan en función de su clasificación, criticidad y valor comercial.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 6, 'subcategoryId' => '1', 'abrevalorcat' => 'ID.AM-6', 'nombreValorcat' => ' Los roles y las responsabilidades de la seguridad cibernética para toda la fuerza de trabajo y terceros interesados', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 7, 'subcategoryId' => '2', 'abrevalorcat' => 'ID.BE-1', 'nombreValorcat' => ' Se identifica y se comunica la función de la organización en la cadena de suministro.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 8, 'subcategoryId' => '2', 'abrevalorcat' => 'ID.BE-2', 'nombreValorcat' => ' Se identifica y se comunica el lugar de la organización en la infraestructura crítica y su sector industrial.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 9, 'subcategoryId' => '2', 'abrevalorcat' => 'ID.BE-3', 'nombreValorcat' => ' Se establecen y se comunican las prioridades para la misión, los objetivos y las actividades de la organización.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 10, 'subcategoryId' => '2', 'abrevalorcat' => 'ID.BE-4', 'nombreValorcat' => ' Se establecen las dependencias y funciones fundamentales para la entrega de servicios críticos.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 11, 'subcategoryId' => '2', 'abrevalorcat' => 'ID.BE-5', 'nombreValorcat' => ' Los requisitos de resiliencia para respaldar la entrega de servicios críticos se establecen para todos los estados operativos (p. ej. bajo coacción o ataque, durante la recuperación y operaciones normales).', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 12, 'subcategoryId' => '3', 'abrevalorcat' => 'ID.GV-1', 'nombreValorcat' => ' Se establece y se comunica la política de seguridad cibernética organizacional.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 13, 'subcategoryId' => '3', 'abrevalorcat' => 'ID.GV-2', 'nombreValorcat' => ' Los roles y las responsabilidades de seguridad cibernética están coordinados y alineados con roles internos y socios externos.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 14, 'subcategoryId' => '3', 'abrevalorcat' => 'ID.GV-3', 'nombreValorcat' => ' Se comprenden y se gestionan los requisitos legales y regulatorios con respecto a la seguridad cibernética, incluidas las obligaciones de privacidad y libertades civiles.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 15, 'subcategoryId' => '3', 'abrevalorcat' => 'ID.GV-4', 'nombreValorcat' => ' Los procesos de gobernanza y gestión de riesgos abordan los riesgos de seguridad cibernética.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 16, 'subcategoryId' => '4', 'abrevalorcat' => 'ID.RA-1', 'nombreValorcat' => ' Se identifican y se documentan las vulnerabilidades de los activos.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 17, 'subcategoryId' => '4', 'abrevalorcat' => 'ID.RA-2', 'nombreValorcat' => ' La inteligencia de amenazas cibernéticas se recibe de foros y fuentes de intercambio de información.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 18, 'subcategoryId' => '4', 'abrevalorcat' => 'ID.RA-3', 'nombreValorcat' => ' Se identifican y se documentan las amenazas, tanto internas como externas.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 19, 'subcategoryId' => '4', 'abrevalorcat' => 'ID.RA-4', 'nombreValorcat' => ' Se identifican los impactos y las probabilidades del negocio.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 20, 'subcategoryId' => '4', 'abrevalorcat' => 'ID.RA-5', 'nombreValorcat' => ' Se utilizan las amenazas, las vulnerabilidades, las probabilidades y los impactos para determinar el riesgo.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 21, 'subcategoryId' => '4', 'abrevalorcat' => 'ID.RA-6', 'nombreValorcat' => ' Se identifican y priorizan las respuestas al riesgo.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 22, 'subcategoryId' => '5', 'abrevalorcat' => 'ID.RM-1', 'nombreValorcat' => ' Los actores de la organización establecen, gestionan y acuerdan los procesos de gestión de riesgos.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 23, 'subcategoryId' => '5', 'abrevalorcat' => 'ID.RM-2', 'nombreValorcat' => ' La inteligencia de amenazas cibernéticas se recibe de foros y fuentes de intercambio de información.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 24, 'subcategoryId' => '5', 'abrevalorcat' => 'ID.RM-3', 'nombreValorcat' => ' Se identifican y se documentan las amenazas, tanto internas como externas.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 25, 'subcategoryId' => '6', 'abrevalorcat' => 'ID.SC-1', 'nombreValorcat' => ' Los actores de la organización identifican, establecen, evalúan, gestionan y acuerdan los procesos de gestión del riesgo de la cadena de suministro cibernética.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 26, 'subcategoryId' => '6', 'abrevalorcat' => 'ID.SC-2', 'nombreValorcat' => ' Los proveedores y socios externos de los sistemas de información, componentes y servicios se identifican, se priorizan y se evalúan mediante un proceso de evaluación de riesgos de la cadena de suministro cibernético.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 27, 'subcategoryId' => '6', 'abrevalorcat' => 'ID.SC-3', 'nombreValorcat' => ' Los contratos con proveedores y socios externos se utilizan para implementar medidas apropiadas diseñadas para cumplir con los objetivos del programa de seguridad cibernética de una organización y el plan de gestión de riesgos de la cadena de suministro cibernético.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 28, 'subcategoryId' => '6', 'abrevalorcat' => 'ID.SC-4', 'nombreValorcat' => ' Los proveedores y los socios externos se evalúan de forma rutinaria mediante auditorías, resultados de pruebas u otras formas de evaluación para confirmar que cumplen con sus obligaciones contractuales.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
        DB::table('valevaluations')->insert(['id' => 29, 'subcategoryId' => '6', 'abrevalorcat' => 'ID.SC-5', 'nombreValorcat' => ' Las pruebas y la planificación de respuesta y recuperación se llevan a cabo con proveedores.', 'created_at' => '2023-10-31 08:47:34', 'updated_at' => '2023-10-31 08:47:34']);
    }
}