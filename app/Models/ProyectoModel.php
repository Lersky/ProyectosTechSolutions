<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoModel extends Model
{
    use HasFactory;
    private $id;
    private $nombre;
    private $fechainicio;
    private $estado;
    private $responsable;
    private $monto;

    public static $proyectos = [
        ['id' => 1, 'nombre' => 'Primer Proyecto', 'fecha_inicio' => '2010-10-05', 'estado' => 'activo', 'responsable' => 'Sebastian Carreras', 'monto' => 100000],
        ['id' => 2, 'nombre' => 'Segundo Proyecto', 'fecha_inicio' => '2024-12-10', 'estado' => 'inactivo', 'responsable' => 'Alberto Barbano', 'monto' => 550000],
        ['id' => 3, 'nombre' => 'Tercer Proyecto', 'fecha_inicio' => '2005-01-02', 'estado' => 'activo', 'responsable' => 'Nicolas Neira', 'monto' => 750000],
    ];

    public function __construct($data = []){
        $this->id = $data['id'] ?? null;
        $this->nombre = $data['nombre'] ?? null;
        $this->fechainicio = $data['fechainicio'] ?? null;
        $this->estado = $data['estado'] ?? null;
        $this->responsable = $data['responsable'] ?? null;
        $this->monto = $data['monto'] ?? null;
    }
    
    public static function findById($id)
    {
        return collect(self::$proyectos)->firstWhere('id', $id);
    }

    //Setters
    public function setId($_n){
        $this->id = $_n;
    }

    public function setNombre($_n){
        $this->nombre = $_n;
    }

    public function setFechainicio($_n){
        $this->fechainicio = $_n;
    }

    public function setEstado($_n){
        $this->estado = $_n;
    }

    public function setResponsable($_n){
        $this->responsable = $_n;
    }

    public function setMonto($_n){
        $this->monto = $_n;
    }
    
    //Getters
    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getFechainicio(){
        return $this->fechainicio;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getResponsable(){
        return $this->responsable;
    }
    public function getMonto(){
        return $this->monto;
    }
}