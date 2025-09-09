<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnviExpressSeeder extends Seeder
{
    public function run(): void
    {
        // Personas
        DB::table('personas')->insert([
            ['id'=>1,'nombre'=>'Carlos','apellido'=>'Gómez','telefono'=>'3001111111','email'=>'carlos@example.com'],
            ['id'=>2,'nombre'=>'Luisa','apellido'=>'Vargas','telefono'=>'3002222222','email'=>'luisa@example.com'],
            ['id'=>3,'nombre'=>'Andrés','apellido'=>'Pérez','telefono'=>'3003333333','email'=>'andres@example.com'],
            ['id'=>4,'nombre'=>'María','apellido'=>'Rodríguez','telefono'=>'3004444444','email'=>'maria@example.com'],
            ['id'=>5,'nombre'=>'Juan','apellido'=>'Martínez','telefono'=>'3005555555','email'=>'juan@example.com'],
            ['id'=>6,'nombre'=>'Paola','apellido'=>'Ramírez','telefono'=>'3006666666','email'=>'paola@example.com'],
            ['id'=>7,'nombre'=>'Sofía','apellido'=>'Hernández','telefono'=>'3007777777','email'=>'sofia@example.com'],
            ['id'=>8,'nombre'=>'Camilo','apellido'=>'Jiménez','telefono'=>'3008888888','email'=>'camilo@example.com'],
            ['id'=>9,'nombre'=>'Natalia','apellido'=>'Torres','telefono'=>'3009999999','email'=>'natalia@example.com'],
            ['id'=>10,'nombre'=>'Felipe','apellido'=>'García','telefono'=>'3010000000','email'=>'felipe@example.com'],
        ]);

        // Usuarios
        DB::table('usuarios')->insert([
            ['id'=>1,'username'=>'carlosg','password'=>bcrypt('123456'),'persona_id'=>1],
            ['id'=>2,'username'=>'luisa','password'=>bcrypt('123456'),'persona_id'=>2],
            ['id'=>3,'username'=>'andresp','password'=>bcrypt('123456'),'persona_id'=>3],
            ['id'=>4,'username'=>'maria','password'=>bcrypt('123456'),'persona_id'=>4],
            ['id'=>5,'username'=>'juan','password'=>bcrypt('123456'),'persona_id'=>5],
            ['id'=>6,'username'=>'paola','password'=>bcrypt('123456'),'persona_id'=>6],
            ['id'=>7,'username'=>'sofia','password'=>bcrypt('123456'),'persona_id'=>7],
            ['id'=>8,'username'=>'camilo','password'=>bcrypt('123456'),'persona_id'=>8],
            ['id'=>9,'username'=>'natalia','password'=>bcrypt('123456'),'persona_id'=>9],
            ['id'=>10,'username'=>'felipe','password'=>bcrypt('123456'),'persona_id'=>10],
        ]);

        // Empleados
        DB::table('empleados')->insert([
            ['id'=>1,'persona_id'=>1,'cargo'=>'Administrador','salario'=>3000000],
            ['id'=>2,'persona_id'=>2,'cargo'=>'Mensajero','salario'=>1500000],
            ['id'=>3,'persona_id'=>3,'cargo'=>'Mensajero','salario'=>1500000],
            ['id'=>4,'persona_id'=>4,'cargo'=>'Coordinador','salario'=>2000000],
            ['id'=>5,'persona_id'=>5,'cargo'=>'Mensajero','salario'=>1500000],
            ['id'=>6,'persona_id'=>6,'cargo'=>'Contador','salario'=>2500000],
            ['id'=>7,'persona_id'=>7,'cargo'=>'Mensajero','salario'=>1500000],
            ['id'=>8,'persona_id'=>8,'cargo'=>'Mensajero','salario'=>1500000],
            ['id'=>9,'persona_id'=>9,'cargo'=>'Supervisor','salario'=>2200000],
            ['id'=>10,'persona_id'=>10,'cargo'=>'Mensajero','salario'=>1500000],
        ]);

        // Vehiculos
        DB::table('vehiculos')->insert([
            ['id'=>1,'placa'=>'ABC123','marca'=>'Yamaha','modelo'=>'2020','tipo'=>'Moto'],
            ['id'=>2,'placa'=>'XYZ987','marca'=>'Suzuki','modelo'=>'2019','tipo'=>'Moto'],
            ['id'=>3,'placa'=>'LMN456','marca'=>'Honda','modelo'=>'2021','tipo'=>'Moto'],
            ['id'=>4,'placa'=>'JKL321','marca'=>'Bajaj','modelo'=>'2020','tipo'=>'Moto'],
            ['id'=>5,'placa'=>'QWE654','marca'=>'TVS','modelo'=>'2018','tipo'=>'Moto'],
            ['id'=>6,'placa'=>'RTY852','marca'=>'Akt','modelo'=>'2021','tipo'=>'Moto'],
            ['id'=>7,'placa'=>'UIO963','marca'=>'KTM','modelo'=>'2022','tipo'=>'Moto'],
            ['id'=>8,'placa'=>'OPL741','marca'=>'Hero','modelo'=>'2020','tipo'=>'Moto'],
            ['id'=>9,'placa'=>'BNM159','marca'=>'Kawasaki','modelo'=>'2019','tipo'=>'Moto'],
            ['id'=>10,'placa'=>'VFG258','marca'=>'Honda','modelo'=>'2021','tipo'=>'Moto'],
        ]);

        // Mensajeros
        DB::table('mensajeros')->insert([
            ['id'=>1,'empleado_id'=>2,'vehiculo_id'=>1],
            ['id'=>2,'empleado_id'=>3,'vehiculo_id'=>2],
            ['id'=>3,'empleado_id'=>5,'vehiculo_id'=>3],
            ['id'=>4,'empleado_id'=>7,'vehiculo_id'=>4],
            ['id'=>5,'empleado_id'=>8,'vehiculo_id'=>5],
            ['id'=>6,'empleado_id'=>10,'vehiculo_id'=>6],
            ['id'=>7,'empleado_id'=>2,'vehiculo_id'=>7],
            ['id'=>8,'empleado_id'=>3,'vehiculo_id'=>8],
            ['id'=>9,'empleado_id'=>5,'vehiculo_id'=>9],
            ['id'=>10,'empleado_id'=>7,'vehiculo_id'=>10],
        ]);

        // Ubicaciones
        DB::table('ubicaciones')->insert([
            ['id'=>1,'direccion'=>'Calle 1 #10-20','ciudad'=>'Bogotá'],
            ['id'=>2,'direccion'=>'Carrera 15 #30-40','ciudad'=>'Bogotá'],
            ['id'=>3,'direccion'=>'Calle 50 #20-10','ciudad'=>'Bogotá'],
            ['id'=>4,'direccion'=>'Carrera 7 #45-50','ciudad'=>'Bogotá'],
            ['id'=>5,'direccion'=>'Calle 80 #90-100','ciudad'=>'Bogotá'],
            ['id'=>6,'direccion'=>'Carrera 68 #70-80','ciudad'=>'Bogotá'],
            ['id'=>7,'direccion'=>'Calle 100 #15-25','ciudad'=>'Bogotá'],
            ['id'=>8,'direccion'=>'Carrera 30 #40-50','ciudad'=>'Bogotá'],
            ['id'=>9,'direccion'=>'Calle 26 #13-15','ciudad'=>'Bogotá'],
            ['id'=>10,'direccion'=>'Carrera 50 #60-70','ciudad'=>'Bogotá'],
        ]);

        // Tarifas
        DB::table('tarifas')->insert([
            ['id'=>1,'descripcion'=>'Local','precio'=>5000],
            ['id'=>2,'descripcion'=>'Urbano','precio'=>7000],
            ['id'=>3,'descripcion'=>'Intermunicipal','precio'=>15000],
            ['id'=>4,'descripcion'=>'Express','precio'=>12000],
            ['id'=>5,'descripcion'=>'Programado','precio'=>8000],
            ['id'=>6,'descripcion'=>'Pesado','precio'=>20000],
            ['id'=>7,'descripcion'=>'Ligero','precio'=>6000],
            ['id'=>8,'descripcion'=>'Fragil','precio'=>10000],
            ['id'=>9,'descripcion'=>'Noche','precio'=>13000],
            ['id'=>10,'descripcion'=>'Festivo','precio'=>14000],
        ]);

        // Pedidos
        DB::table('pedidos')->insert([
            ['id'=>1,'usuario_id'=>1,'ubicacion_origen_id'=>1,'ubicacion_destino_id'=>2,'tarifa_id'=>1,'estado'=>'Pendiente'],
            ['id'=>2,'usuario_id'=>2,'ubicacion_origen_id'=>3,'ubicacion_destino_id'=>4,'tarifa_id'=>2,'estado'=>'Entregado'],
            ['id'=>3,'usuario_id'=>3,'ubicacion_origen_id'=>5,'ubicacion_destino_id'=>6,'tarifa_id'=>3,'estado'=>'Pendiente'],
            ['id'=>4,'usuario_id'=>4,'ubicacion_origen_id'=>7,'ubicacion_destino_id'=>8,'tarifa_id'=>4,'estado'=>'En camino'],
            ['id'=>5,'usuario_id'=>5,'ubicacion_origen_id'=>9,'ubicacion_destino_id'=>10,'tarifa_id'=>5,'estado'=>'Pendiente'],
            ['id'=>6,'usuario_id'=>6,'ubicacion_origen_id'=>1,'ubicacion_destino_id'=>3,'tarifa_id'=>6,'estado'=>'Pendiente'],
            ['id'=>7,'usuario_id'=>7,'ubicacion_origen_id'=>2,'ubicacion_destino_id'=>4,'tarifa_id'=>7,'estado'=>'Entregado'],
            ['id'=>8,'usuario_id'=>8,'ubicacion_origen_id'=>5,'ubicacion_destino_id'=>7,'tarifa_id'=>8,'estado'=>'Pendiente'],
            ['id'=>9,'usuario_id'=>9,'ubicacion_origen_id'=>6,'ubicacion_destino_id'=>8,'tarifa_id'=>9,'estado'=>'En camino'],
            ['id'=>10,'usuario_id'=>10,'ubicacion_origen_id'=>9,'ubicacion_destino_id'=>1,'tarifa_id'=>10,'estado'=>'Pendiente'],
        ]);

        // Asignaciones
        DB::table('asignaciones')->insert([
            ['id'=>1,'pedido_id'=>1,'mensajero_id'=>1,'fecha'=>'2023-01-01'],
            ['id'=>2,'pedido_id'=>2,'mensajero_id'=>2,'fecha'=>'2023-01-02'],
            ['id'=>3,'pedido_id'=>3,'mensajero_id'=>3,'fecha'=>'2023-01-03'],
            ['id'=>4,'pedido_id'=>4,'mensajero_id'=>4,'fecha'=>'2023-01-04'],
            ['id'=>5,'pedido_id'=>5,'mensajero_id'=>5,'fecha'=>'2023-01-05'],
            ['id'=>6,'pedido_id'=>6,'mensajero_id'=>6,'fecha'=>'2023-01-06'],
            ['id'=>7,'pedido_id'=>7,'mensajero_id'=>7,'fecha'=>'2023-01-07'],
            ['id'=>8,'pedido_id'=>8,'mensajero_id'=>8,'fecha'=>'2023-01-08'],
            ['id'=>9,'pedido_id'=>9,'mensajero_id'=>9,'fecha'=>'2023-01-09'],
            ['id'=>10,'pedido_id'=>10,'mensajero_id'=>10,'fecha'=>'2023-01-10'],
        ]);

        // Guias
        DB::table('guias')->insert([
            ['id'=>1,'pedido_id'=>1,'codigo'=>'G001','fecha_emision'=>'2023-01-01'],
            ['id'=>2,'pedido_id'=>2,'codigo'=>'G002','fecha_emision'=>'2023-01-02'],
            ['id'=>3,'pedido_id'=>3,'codigo'=>'G003','fecha_emision'=>'2023-01-03'],
            ['id'=>4,'pedido_id'=>4,'codigo'=>'G004','fecha_emision'=>'2023-01-04'],
            ['id'=>5,'pedido_id'=>5,'codigo'=>'G005','fecha_emision'=>'2023-01-05'],
            ['id'=>6,'pedido_id'=>6,'codigo'=>'G006','fecha_emision'=>'2023-01-06'],
            ['id'=>7,'pedido_id'=>7,'codigo'=>'G007','fecha_emision'=>'2023-01-07'],
            ['id'=>8,'pedido_id'=>8,'codigo'=>'G008','fecha_emision'=>'2023-01-08'],
            ['id'=>9,'pedido_id'=>9,'codigo'=>'G009','fecha_emision'=>'2023-01-09'],
            ['id'=>10,'pedido_id'=>10,'codigo'=>'G010','fecha_emision'=>'2023-01-10'],
        ]);

        // Roles
        DB::table('roles')->insert([
            ['id'=>1,'nombre'=>'Administrador'],
            ['id'=>2,'nombre'=>'Coordinador'],
            ['id'=>3,'nombre'=>'Mensajero'],
            ['id'=>4,'nombre'=>'Usuario'],
            ['id'=>5,'nombre'=>'Supervisor'],
            ['id'=>6,'nombre'=>'Contador'],
            ['id'=>7,'nombre'=>'Soporte'],
            ['id'=>8,'nombre'=>'Cliente'],
            ['id'=>9,'nombre'=>'Invitado'],
            ['id'=>10,'nombre'=>'Root'],
        ]);

        // Permisos
        DB::table('permisos')->insert([
            ['id'=>1,'nombre'=>'crear_usuario'],
            ['id'=>2,'nombre'=>'editar_usuario'],
            ['id'=>3,'nombre'=>'eliminar_usuario'],
            ['id'=>4,'nombre'=>'ver_usuario'],
            ['id'=>5,'nombre'=>'crear_pedido'],
            ['id'=>6,'nombre'=>'editar_pedido'],
            ['id'=>7,'nombre'=>'eliminar_pedido'],
            ['id'=>8,'nombre'=>'ver_pedido'],
            ['id'=>9,'nombre'=>'asignar_pedido'],
            ['id'=>10,'nombre'=>'ver_reporte'],
        ]);

        // Roles-Permisos
        DB::table('roles_permisos')->insert([
            ['id'=>1,'rol_id'=>1,'permiso_id'=>1],
            ['id'=>2,'rol_id'=>1,'permiso_id'=>2],
            ['id'=>3,'rol_id'=>1,'permiso_id'=>3],
            ['id'=>4,'rol_id'=>2,'permiso_id'=>4],
            ['id'=>5,'rol_id'=>2,'permiso_id'=>5],
            ['id'=>6,'rol_id'=>3,'permiso_id'=>6],
            ['id'=>7,'rol_id'=>3,'permiso_id'=>7],
            ['id'=>8,'rol_id'=>4,'permiso_id'=>8],
            ['id'=>9,'rol_id'=>5,'permiso_id'=>9],
            ['id'=>10,'rol_id'=>1,'permiso_id'=>10],
        ]);
    }
}
