<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';
    public $timestamps = false;
    protected $fillable = [
        'idsucursal', 'telefono', 'descripcion', 'linkmap',
    ];

    protected $hidden = [];

    public function cargarDesdeRequest($request){
        $this->idsucursal =  $request->input("id");
        $this->telefono = $request->input("txtTelefono");
        $this->descripcion = $request->input("txtDescripcion");
        $this->linkmap = $request->input("txtLinkmap");
        $this->direccion = $request->input("txtDireccion");
        $this->horario = $request->input("txtHorario");
   }
    public function insertar()
    {
        $sql = "INSERT INTO sucursales (
                telefono,
                descripcion,
                linkmap,
                direccion,
                horario
            ) VALUES (?, ?, ?, ?, ?);";
        $result = DB::insert($sql, [
            $this->telefono,
            $this->descripcion,
            $this->linkmap,
            $this->direccion,
            $this->horario
        ]);
        return $this->idsucursal = DB::getPdo()->lastInsertId();
    }

    public function guardar()
    {
        $sql = "UPDATE sucursales SET
            telefono=?,
            descripcion=?,
            linkmap=?,
            direccion=?,
            horario=?
            WHERE idsucursal=?";
        $affected = DB::update($sql, [
            $this->telefono,
            $this->descripcion,
            $this->linkmap,
            $this->idsucursal,
            $this->direccion,
            $this->horario
            ]);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM sucursales WHERE
            idsucursal=?";
        $affected = DB::delete($sql, [$this->idsucursal]);
    }
    
    public function obtenerTodos()
    {
        $sql = "SELECT
		        idsucursal,
		        telefono,
                descripcion,
                linkmap,
                direccion,
                horario
                FROM sucursales ORDER BY idsucursal";
        $lstRetorno = DB::select($sql);
        return $lstRetorno;
    }

    public function obtenerPorId($idsucursal)
    {
        $sql = "SELECT
                idsucursal,
		        telefono,
                descripcion,
                linkmap,
                direccion,
                horario
                FROM sucursales WHERE idsucursal = $idsucursal";
        $lstRetorno = DB::select($sql);

        if (count($lstRetorno) > 0) {
            $this->idsucursal = $lstRetorno[0]->idsucursal;
            $this->telefono = $lstRetorno[0]->telefono;
            $this->descripcion = $lstRetorno[0]->descripcion;
            $this->linkmap = $lstRetorno[0]->linkmap;
            return $this;
        }
        return null;
    }

    public function obtenerFiltrado()
    {
        $request = $_REQUEST;
        $columns = array(
            0 => 'A.telefono',
            1 => 'A.descripcion',
            2 => 'A.linkmap',
            3 => 'A.direccion',
            4 => 'A.horario'
        );
        $sql = "SELECT DISTINCT
                    A.idsucursal,
                    A.telefono,
                    A.descripcion,
                    A.linkmap,
                    A.direccion,
                    A.horario
                    FROM sucursales A
                WHERE 1=1
                ";

        //Realiza el filtrado
        if (!empty($request['search']['value'])) {
            $sql .= " AND ( A.telefono LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR A.descripcion LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR A.linkmap LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR A.direccion LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR A.horario LIKE '%" . $request['search']['value'] . "%' ";
        }
        $sql .= " ORDER BY " . $columns[$request['order'][0]['column']] . "   " . $request['order'][0]['dir'];

        $lstRetorno = DB::select($sql);

        return $lstRetorno;
    }

}
